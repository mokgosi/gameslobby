<template>
    <div class="container">
        <div class="columns  is-multiline is-mobile">
            <div class="column is-one-third"  v-for="game in games">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img @click="show(game.launchcode)"
                                 :src="'https://stage.whgstage.com/scontent/images/games/'+ game.launchcode +'.jpg'"
                                 alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4" @click="show(game.launchcode)">{{ game.name }}</p>
                            </div>
                        </div>

                        <div class="content">

                            Game Provider: {{ game.game_provider }}
                            <br>
                            RTF: {{ game.rtp }}
                            <br>
                            Category: {{ game.category }}
                            <br>
                            New: {{ game.new }}
                            <br>
                            Hot: {{ game.hot }}
                            <br>
                            <a  @click="show(game.launchcode)">Show Launch Code:</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
<!--:src="'https://stage.whgstage.com/content/images/games/'+ game.launchcode +'.jpg'"-->
<script>
    export default {
        name: "Home",
        data() {
            return {
                games: [],
                isOpen: false
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        created() {
            axios.get('/api/v1/game')
                .then(({data}) => this.games = data);
        },

        methods: {
            show: function (message) {
                alert('Launch code:'+message);
            },
            toggle: function(){
                this.isOpen = !this.isOpen
            }
        }
    }
</script>

<style scoped>

</style>
