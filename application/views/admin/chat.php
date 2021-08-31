<?php $this->load->view('admin/header') ?>
<link rel="stylesheet" href="<?= base_url('/assets/lib/toast/toast.min.css') ?>">
<style>
    .text-white {
        color: #fff;
    }
</style>
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
            <aside class="right-side">
                <div class="chat-room-head">
                    <h3>Live Chat</h3>
                </div>
                <div class="invite-row">
                    <h4 class="pull-left">Daftar Chat</h4>
                </div>
                <ul class="chat-available-user list-group" id="daftarChat" style="overflow-y: scroll; max-height:730px;min-height:730px;">
                </ul>
            </aside>
            <aside class="mid-side">
                <div class="chat-room-head">
                </div>
                <div id="chatContent" style="overflow-y: scroll; max-height:730px;min-height:730px;">
                </div>
                <footer>
                    <div class="chat-txt">
                        <textarea class="form-control" placeholder="Tulis pesan..." v-model="pesan"></textarea>
                    </div>
                    <button class="btn btn-theme" @click="sendMessage">Kirim</button>
                </footer>
            </aside>

        </div>
        <!-- page end-->
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
<!--main content end-->
<?php $this->load->view('admin/footer') ?>

<script src="<?= base_url('/assets/lib/toast/toast.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/moment/id.js') ?>"></script>

<script src="<?= base_url('/assets/public/js/vendor/vue.js') ?>"></script>

<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-firestore.js"></script>

<script>
    let shared = new Vue({
        data: {
            idChatActive: null,
            unsubscribeChat: ''
        }
    })

    shared.install = function() {
        Object.defineProperty(Vue.prototype, '$global', {
            get() {
                return shared
            }
        })
    }

    Vue.use(shared);


    let componetGroupChat = Vue.extend({
        template: `<a href="#" class="list-group-item list-group-item-action list-group-item-warning" :class="$global.idChatActive === id ? 'active' : ''" @click="showChat(id)">
                        <img class="img-circle" src="<?= base_url('/assets/public/img/gallery/administrator-male.png') ?>" width="32">
                        <span class="badge badge-primary badge-pill">{{idPelanggan}}</span>
                        <span :class="$global.idChatActive === id ? 'text-white' : 'text-primary'">{{last_pesan}}</span>
                        <p class="text-right">
                        <span :class="$global.idChatActive === id ? 'text-white' : 'text-muted'">{{time}}</span>
                        </p>
                    </a>`,
        mounted: function() {
            this.db = firebase.firestore();
        },
        created: function() {
            this.unsubscribeChat = null
        },
        methods: {
            showChat: function(id) {
                if (this.$global.idChatActive === id) return
                if (this.$global.unsubscribeChat) this.$global.unsubscribeChat()
                $('#chatContent').empty()
                this.firebaseChatListen(id)
                this.firebaseLoadChat(id)
            },
            addMessages: function(messages) {
                if (!messages.length) return

                const chatContent = $('#chatContent')

                for (const item of messages) {
                    $('.last-group').removeClass('last-group')

                    const _class = item.name == 'Admin' ? '' : 'odd';

                    chatContent.append(`<div class="group-rom last-group">
                        <div class="first-part ${_class}">${item.name}</div>
                        <div class="second-part">${item.text}</div>
                        <div class="third-part">${item.time}</div>
                    </div>`)
                }

                chatContent.stop().animate({
                    scrollTop: chatContent[0].scrollHeight
                }, 800);
            },
            firebaseLoadChat: function(id) {
                const self = this

                this.db.collection(`chats/${id}/messages`).orderBy('waktu', 'asc').get()
                    .then(function(querySnapshot) {
                        const listMessages = self.queryFilter(querySnapshot)
                        self.addMessages(listMessages)

                        self.$global.idChatActive = id
                        self.showMessage = true
                    })
            },
            firebaseChatListen: function(id) {
                const self = this

                this.$global.unsubscribeChat = this.db.collection(`chats/${id}/messages`)
                    .
                where('sender', '==', 'Pengadu').orderBy("waktu", "desc").limit(1)
                    .onSnapshot(querySnapshot => {
                        querySnapshot.docs.map(data => {
                            if (!this.showMessage) return
                            const listMessages = self.queryFilter(querySnapshot)

                            self.addMessages(listMessages)
                        })
                    });
            },
            queryFilter: function(querySnapshot) {
                const self = this

                return querySnapshot.docs.map(messages => {
                    const {
                        text,
                        sender,
                        waktu
                    } = messages.data()

                    const dataMessage = {
                        name: sender,
                        text: text.replace(/\n/g, '<br>').trim(),
                        time: moment(waktu.toDate()).format('HH:mm')
                    }

                    return dataMessage
                })
            },
        }
    })

    new Vue({
        el: '#main-content',
        data: function() {
            return {
                daftarChat: $('#daftarChat'),
                chatContent: $('#chatContent'),
                pesan: ''
            }
        },
        mounted: function() {
            let firebaseConfig = {
                apiKey: "AIzaSyAnBgPTcX5OF_WXKm5uNnE6RapZz8WzdbU",
                authDomain: "pengaduan-pln.firebaseapp.com",
                projectId: "pengaduan-pln",
                storageBucket: "pengaduan-pln.appspot.com",
                messagingSenderId: "347844251182",
                appId: "1:347844251182:web:4877ad4ac18223dd02d9bf"
            };

            firebase.initializeApp(firebaseConfig);
            this.db = firebase.firestore();

            this.firebaseGroupChatListen()
        },
        methods: {
            firebaseGroupChatListen: function() {
                this.unsubscribeGroupChat = this.db.collection(`groups`)
                    .orderBy("waktu", "desc")
                    .onSnapshot(querySnapshot => {
                        $('#daftarChat').empty()

                        querySnapshot.docs.map(data => {
                            const {
                                idPelanggan,
                                last_pesan,
                                waktu
                            } = data.data()

                            if (!last_pesan) return

                            const time = moment(waktu.toDate()).fromNow()

                            const component = new componetGroupChat({
                                data: {
                                    id: data.id,
                                    idPelanggan,
                                    last_pesan,
                                    time,
                                    showMessage: false
                                }
                            }).$mount()

                            $('#daftarChat').append(component.$el)
                        })
                    });
            },
            addMessage: function(name, text, time) {
                const chatContent = $('#chatContent')
                const _class = name == 'Admin' ? '' : 'odd';

                $('.last-group').removeClass('last-group')

                chatContent.append(`<div class="group-rom last-group">
                        <div class="first-part ${_class}">${name}</div>
                        <div class="second-part">${text}</div>
                        <div class="third-part">${time}</div>
                    </div>`)

                chatContent.stop().animate({
                    scrollTop: chatContent[0].scrollHeight
                }, 800);
            },
            sendMessage: function() {
                if (!this.pesan) return
                if (!this.$global.idChatActive) {
                    toastr.info('Silahkan pilih daftar chat terlebih dahulu', 'Informasi', {
                        timeOut: 1500
                    })
                    return
                }
                const time = moment(new Date()).format('HH:mm')
                this.addMessage('Admin', this.pesan, time)

                this.db.collection(`chats`).doc(this.$global.idChatActive).collection('messages').add({
                    sender: 'Admin',
                    text: this.pesan,
                    waktu: firebase.firestore.FieldValue.serverTimestamp()
                })

                // this.db.collection(`groups`).doc(this.$global.idChatActive).update({
                //     last_pesan: this.pesan,
                //     waktu: firebase.firestore.FieldValue.serverTimestamp()
                // })

                this.pesan = ''
            }
        }
    })
</script>

</body>

</html>