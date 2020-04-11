<template>
    <div class="feed" ref="feed">
        <ul v-if="contact">
            <li v-for="message in messages" :class="`message${message.to == contact.id ? ' sent' : ' received'}`" :key="message.id">
              
                <img  class="photo" src="/img/perfil.png" :alt="contact.name">
                <div class="text">
                    {{ message.text }}
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            contact: {
                type: Object
            },
            messages: {
                type: Array,
                required: true
            }
        },
        methods: {
            scrollToBottom() {
                setTimeout(() => {
                    this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
                }, 50);
            }
        },
        watch: {
            contact(contact) {
                this.scrollToBottom();
            },
            messages(messages) {
                this.scrollToBottom();
            }
        }
    }
</script>

<style lang="scss" scoped>
.feed {
    background: #f0f0f0;
    max-height: 100%;
    height: 450px;
    overflow: scroll;


    ul {
        list-style-type: none;
        padding: 5px;

        li {

            display: inline-block;
            clear: both;
            float: left;
            margin: 15px 15px 5px 15px;
            width: calc(100% - 25px);
            font-size: 0.9em;

            img {
                width: 22px;
                border-radius: 50%;
              /*  float: left;*/
            }


            &.message {
            /*    max-width: 300px;
                width: 100%;*/

                .text {
                    display: inline-block;
                    padding: 10px 15px;
                    border-radius: 20px;
                    max-width: 205px;
                    line-height: 130%;

                    margin-block-start: 1em;
                    margin-block-end: 1em;
                    margin-inline-start: 0px;
                    margin-inline-end: 0px;
                }

                &.received {
                    text-align: right;

                    .text {
                        background: #b2b2b2;
                    }

                    .photo{
                       float: right;
                       margin: 6px 0 0 8px;

                    }
                }

                &.sent {
                    text-align: left;

                    .text {
                       background: #435f7a;
                       color: #f5f5f5;
                    }

                    
                    .photo{
                        margin: 6px 8px 0 0;
                    }
                }
            }
        }
    }
}


.feed::-webkit-scrollbar {
    width: 8px;
    background: transparent;
}

.feed::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, 0.3);
}
</style>

