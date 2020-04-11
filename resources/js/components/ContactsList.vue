<template>

    <div class="contacts-list">
    <br>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Buscar..." >
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><ion-icon name="search-outline"></ion-icon></button>
        </div>
    </div>
        <ul class="list">
            <li v-for="contact in sortedContacts" :key="contact.id" @click="selectContact(contact)" :class="{ 'selected': contact == selected }">
                
                <div class="avatar">
                  <span class="contact-status busy"></span>
                    <img src="/img/perfil.png" :alt="contact.name">
                </div>
                <!-- contact.profile_image -->
                <div class="contact">
                    <p class="name">{{ contact.name }}</p>
                    <p class="email">{{ contact.email }}</p>
                </div>
                <span class="unread" v-if="contact.unread">{{ contact.unread }}</span>
            </li>
            <br>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            contacts: {
                type: Array,
                default: []
            }
        },
        data() {
            return {
                selected: this.contacts.length ? this.contacts[0] : null
            };
        },
        methods: {
            selectContact(contact) {
                this.selected = contact;

                this.$emit('selected', contact);
            }
        },
        computed: {
            sortedContacts() {
                return _.sortBy(this.contacts, [(contact) => {
                    if (contact == this.selected) {
                        return Infinity;
                    }

                    return contact.unread;
                }]).reverse();
            }
        }
    }
</script>

<style lang="scss" scoped>
.contacts-list {
    flex: 2;
    border-left: 13px solid #ffffff;
    
    ul.list {
        list-style-type: none;
        padding-left: 0;
        overflow: scroll;
        
        max-height: 100%;
        height: 450px;
        li {
            display: flex;
            padding: 2px;
            border-bottom: 1px solid #aaaaaa;
            height: 80px;
            position: relative;
            cursor: pointer;
            border-radius: 25px;

            &.selected {
                background: #dfdfdf;
            }

            span.unread {
                background: #fe0200;
                color: #fff;
                position: absolute;
                right: 11px;
                top: 20px;
                display: flex;
                font-weight: 700;
                min-width: 20px;
                justify-content: center;
                align-items: center;
                line-height: 20px;
                font-size: 12px;
                padding: 0 4px;
                border-radius: 3px;
            }


            span.contact-status {
            position: absolute;
            left: 0;
            margin: -2px 0 0 -2px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 2px solid #ffffff;
            background: #00ff00;
            }

            span.contact-status {
                border: 2px solid #ffffff !important;
            }

            span.busy {
            background: #00ff00;    
            }

            .avatar {
                flex: 1;
                display: flex;
                align-items: center;

                img {
                       width: 40px;
                        border-radius: 50%;
                        float: left;
                        margin-right: 10px;
                }
            }

            .contact {
                flex: 3;
                font-size: 14px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: center;

                p {
                    margin: 0;

                    &.name {
                        font-weight: lato;
                    }
                }

                p.email{
                    font-size: 10px;
                }
            }
        }
    }

           ul.list::-webkit-scrollbar {
            width: 8px;
            background: transparent;
        }

        ul.list::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.3);
        }

    
}

 


</style>
