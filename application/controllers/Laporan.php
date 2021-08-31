<?php
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->db->query("SET sql_mode = '' ");
    }

    public function pelanggan()
    {
        $data = $this->db->get('tbl_pelanggan')->result();

        $pdf = new Pdf('L', 'mm', 'LEGAL');

        $this->createHeader($pdf, 'LAPORAN DAFTAR PELANGGAN');

        $pdf->cell(15);
        $pdf->Cell(10, 11, 'NO', 1, 0, 'C');
        $pdf->Cell(60, 11, 'ID PELANGGAN', 1, 0, 'C');
        $pdf->cell(60, 11, 'NAMA', 1, 0, 'C');
        $pdf->cell(45, 11, 'NOMOR TELPON', 1, 0, 'C');
        $pdf->Cell(45, 11, 'JENIS KELAMIN', 1, 0, 'C');
        $pdf->Cell(80, 11, 'ALAMAT', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);

        $no = 1;

        foreach ($data as  $val) {
            $pdf->cell(15);
            $pdf->Cell(10, 11, $no++, 1, 0, 'C');
            $pdf->Cell(60, 11, $val->id, 1, 0, 'C');
            $pdf->cell(60, 11, $val->nama, 1, 0, 'C');
            $pdf->cell(45, 11, $val->telp, 1, 0, 'C');
            $pdf->Cell(45, 11, $val->jenis_kelamin, 1, 0, 'C');
            $pdf->Cell(80, 11, $val->alamat, 1, 1, 'C');
        }

        $pdf->Output("Daftar Pelanggan", 'I');
    }

    public function petugas()
    {
        $this->db->select('username, nama, data');
        $get = $this->db->get_where('tbl_user', ['level' => 'petugas'])->result();

        $data = array_map(
            function ($v) {
                $v->data = json_decode($v->data);
                return $v;
            },
            $get
        );

        $pdf = new Pdf('L', 'mm', 'LEGAL');

        $this->createHeader($pdf, 'LAPORAN DAFTAR PETUGAS');

        $pdf->cell(15);
        $pdf->Cell(10, 11, 'NO', 1, 0, 'C');
        $pdf->cell(60, 11, 'USERNAME', 1, 0, 'C');
        $pdf->cell(60, 11, 'NAMA', 1, 0, 'C');
        $pdf->cell(45, 11, 'NOMOR TELPON', 1, 0, 'C');
        $pdf->Cell(45, 11, 'JENIS KELAMIN', 1, 0, 'C');
        $pdf->Cell(80, 11, 'ALAMAT', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);

        $no = 1;

        foreach ($data as  $val) {
            $pdf->cell(15);
            $pdf->Cell(10, 11, $no++, 1, 0, 'C');
            $pdf->cell(60, 11, $val->username, 1, 0, 'C');
            $pdf->cell(60, 11, $val->nama, 1, 0, 'C');
            $pdf->cell(45, 11, $val->data->telp, 1, 0, 'C');
            $pdf->Cell(45, 11, $val->data->jenis_kelamin, 1, 0, 'C');
            $pdf->Cell(80, 11, $val->data->alamat, 1, 1, 'C');
        }

        $pdf->Output("Daftar Petugas", 'I');
    }

    public function pengaduan()
    {
        $this->db->select('a.*, b.nama nama_pelanggan, c.nama nama_petugas');
        $this->db->from('tbl_pengaduan a');
        $this->db->join('tbl_pelanggan b', 'a.id_pelanggan = b.id', 'left');
        $this->db->join('tbl_user c', 'a.username_petugas = c.username', 'left');
        $get = $this->db->get()->result();

        $data = array_map(
            function ($v) {
                if ($v->status == NULL) {
                    $v->status = 'Belum dikonfirmasi';
                }
                $v->lokasi = json_decode($v->lokasi);
                $v->history = json_decode($v->history);
                return $v;
            },
            $get
        );

        $pdf = new Pdf('L', 'mm', 'LEGAL');

        $this->createHeader($pdf, 'LAPORAN DAFTAR PENGADUAN');
        $pdf->Cell(10);
        $pdf->Cell(10, 11, 'NO', 1, 0, 'C');
        $pdf->cell(50, 11, 'WAKTU PENGADUAN', 1, 0, 'C');
        $pdf->cell(40, 11, 'ID PENGADUAN', 1, 0, 'C');
        $pdf->cell(60, 11, 'NAMA PENGADU', 1, 0, 'C');
        $pdf->Cell(40, 11, 'NOMOR TELPON', 1, 0, 'C');
        $pdf->Cell(60, 11, 'PETUGAS', 1, 0, 'C');
        $pdf->Cell(60, 11, 'STATUS', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);

        $no = 1;

        foreach ($data as  $val) {
            $pdf->Cell(10);
            $pdf->Cell(10, 11, $no++, 1, 0, 'C');
            $pdf->cell(50, 11, $val->ditambahkan_pada, 1, 0, 'C');
            $pdf->cell(40, 11, $val->id, 1, 0, 'C');
            $pdf->cell(60, 11, $val->nama, 1, 0);
            $pdf->Cell(40, 11, $val->telp, 1, 0, 'C');
            $pdf->Cell(60, 11, $val->nama_petugas ? $val->nama_petugas : '-', 1, 0, 'C');
            $pdf->Cell(60, 11, $val->status, 1, 1, 'C');

            if ($val->history) {
                $pdf->SetFont('Times', '', 10);

                $pdf->Cell(10);
                $pdf->Cell(10, 11, '', 1, 0, 'C', true);
                $pdf->Cell(310, 11, 'ID Pelanggan : ' . $val->id_pelanggan, 1, 1);
                $pdf->Cell(10);
                $pdf->Cell(10, 11, '', 1, 0, 'C', true);
                $pdf->Cell(310, 11, 'Lokasi Pengadu : ' . $val->lokasi->lokasi, 1, 1);
                $pdf->Cell(10);
                $pdf->Cell(10, 11, '', 1, 0, 'C', true);
                $pdf->Cell(310, 11, 'Pengaduan : ' . $val->pengaduan, 1, 1);

                foreach ($val->history as $key => $value) {
                    $pdf->Cell(10);
                    $pdf->Cell(10, 11, '', 1, 0, 'C', true);
                    $pdf->Cell(310, 11, 'Tanggal ' . $key . ' : ' . $value, 1, 1);
                }
            }
        }

        $pdf->Output("Daftar Petugas", 'I');
    }

    function createHeader($pdf, $text)
    {
        $pdf->setFontSubsetting(true);

        $pdf->AddPage();

        $image_file = base_url('/assets/img/logo.png');

        $pdf->Image($image_file, 65, 6, 20, 20, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
        // Set font
        $pdf->SetFont('helvetica', 'B', 25);
        // Title
        $pdf->SetXY(0, 0);
        $pdf->Cell(0, 25, 'PT. PLN ULP Pangsid UP3 Parepare', 0, false, 'C', 0);
        $pdf->SetFont('helvetica', '', 12);
        $pdf->SetXY(0, 0);
        $pdf->Cell(0, 40, 'Jalan Bau Massepe No. 1 Pangkajene Sidrap Sulawesi Selatan', 0, false, 'C', 0);

        $pdf->SetDrawColor(150, 150, 150);
        $pdf->SetLineWidth(1);
        $pdf->Line(5, 31, 350, 31);
        $pdf->SetLineWidth(0);
        $pdf->Line(5, 32, 350, 32);

        $pdf->ln(35);

        $pdf->SetFont('helvetica', 'B', 12, '', true);
        $pdf->cell(0, 0, $text, 0, 1, 'C');

        $pdf->ln();

        $pdf->SetFont('Times', 'B', 12);
    }
}
