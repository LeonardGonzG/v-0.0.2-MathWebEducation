<template>
    <div class="conversation">
        <h3 class="infoChat">
        <img class="user" src="/img/perfil.png">
        <p class="companero"> {{ contact ? contact.name : 'Seleccione compañero' }}</p>

        </h3>
        <MessagesFeed :contact="contact" :messages="messages"/>
        <MessageComposer @send="sendMessage"/>
    </div>
</template>

<script>
    import MessagesFeed from './MessagesFeed';
    import MessageComposer from './MessageComposer';

    export default {
        props: {
            contact: {
                type: Object,
                default: null
            },
            messages: {
                type: Array,
                default: []
            }
        },
        methods: {
            sendMessage(text) {
                if (!this.contact) {
                    return;
                }

                axios.post('/conversation/send', {
                    contact_id: this.contact.id,
                    text: text
                }).then((response) => {
                    this.$emit('new', response.data);
                })
            }
        },
        components: {MessagesFeed, MessageComposer}
    }
</script>

<style lang="scss" scoped>
.conversation {
    flex: 5;
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    h3.infoChat {
        width: 100%;
        height: 60px;
        line-height: 60px;
        background: #f5f5f5;

        
        p.companero{
            float: left;
        }

        img.user{
            width: 40px;
            border-radius: 50%;
            float: left;
            margin: 9px 12px 0 9px;
        }

    }
    

}
</style>
