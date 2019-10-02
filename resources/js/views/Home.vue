<template>
    <div class="container">
        <div class="columns  is-multiline is-mobile">
            <div class="column is-one-third"  v-for="game in games" v-if="game.game_brand_block == null">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img @click="show(game.launchcode)"
                                 src="https://versions.bulma.io/0.7.1/images/placeholders/1280x960.png"
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

                            Game Provider: {{ game.game_provider.name }}
                            <br>
                            RTF: {{ game.rtp }}
                            <br>
                            Category: {{ game.brand.category }}
                            <br>
                            New: {{ game.brand.new }}
                            <br>
                            Hot: {{ game.brand.hot }}
                            <br>
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
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        created() {
            axios.get('/api/v1/games')
                .then(({data}) => this.games = data);
        },

        methods: {
            show: function (message) {
                alert('Launch code:'+message);
            }
        }
    }
</script>

<style scoped>

</style>
