<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . '/third_party/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct($orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = 'UTF-8', $diskcache = false, $pdfa = false)
    {
        parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache, $pdfa);
    }

    function header()
    {
    }
}
