<template>
    <div class="wrap tab-pane active" id="screen-leagues">
        <div id="leagues-nav" class="content">

            <!-- Tabs -->
            <ul class="nav nav-tabs filter-tabs" role="tablist">

                <!-- Artists -->
                <li role="presentation" class="active">
                    <a href="#artists"
                       aria-controls="artists"
                       role="tab"
                       data-toggle="tab">
                        <i class="fa fa-microphone" aria-hidden="true"></i> Artists
                    </a>
                </li>


                <!-- Wishlist -->
                <li role="presentation">
                    <a href="#wishlist"
                       class="wishlink"
                       aria-controls="wishlist"
                       role="tab"
                       data-toggle="tab"
                    >
                        <i class="fa fa-heart" aria-hidden="true"></i> Wishlist
                    </a>
                </li>

            </ul>


            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="artists">
                    <div class="content">
                        <artist-list v-for="artist in artists" :artist="artist"></artist-list>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="wishlist">
                    <div class="content">
                        <artist-list v-for="artist in wishlist" :artist="artist"></artist-list>
                    </div>
                </div>

            </div>

        </div>
    </div>

</template>

<script>

    Vue.component('artist-list', require('./artist-list.vue'));
    Vue.component('wishlist', require('./wishlist.vue'));

    export default {

        data () {

            return {

                artists: '',
                wishlist: '',
                test: 'poo'
            }
        },


        mounted () {

            this.fetchArtists();
        },


        created () {

            Event.$on('removeArtist', (artist) => {

                this.removeFromWishlist(artist);
            });


            Event.$on('addArtist', (artist) => {

                this.addToWishlist(artist);
            });
        },


        methods: {

            fetchArtists() {

                axios.get('/fetchartists')
                        .then(this.handleFetchedArtists)
                        .catch(this.handleFailedFetchedArtists);
            },


            handleFetchedArtists (response)
            {
                this.artists = response.data.artists;

                this.wishlist = response.data.wishlist;
            },


            handleFailedFetchedArtists(error)
            {
                console.log(error);
            },


            addToWishlist(artist)
            {
                axios.put(`/wishlist/${artist.id}`)
                        .then(function (response) {

                            this.wishlist.push(response.data.new_artist);

                            artist.in_wishlist = response.data.new_artist.in_wishlist;

                        }.bind(this))
                        .catch(function (error) {

                            console.log('The artist could not be added');
                        });
            },


            removeFromWishlist(artist)
            {
                axios.delete(`/wishlist/${artist.id}`)
                        .then(function (response) {

                            let removed = response.data.removed;

                            let index = this.artists.findIndex((obj => obj.id == artist.id));

                            this.artists[index].in_wishlist = removed.in_wishlist;

                            this.wishlist = this.wishlist.filter(function (artist) {

                                return artist.id !== removed.id;
                            });

                        }.bind(this))
                        .catch(function () {

                            console.log('The artist could not be removed');
                        })
            }
        }
    }

</script>