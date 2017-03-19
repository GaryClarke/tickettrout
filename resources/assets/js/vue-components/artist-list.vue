<template>

    <div role="tabpanel" class="tab-pane active">
        <div class="content">
            <div v-for="artist in artists" class="card-wrap card-sm-wrap">
                <article class="card card-league panel panel-default">


                    <!-- LEAGUE BADGE -->
                    <img :src="artist.banner" alt="Artist banner" class="img-responsive card-image">

                    <!-- CARD BODY -->
                    <div class="card-details card-content panel-body">

                        <!-- CREATOR AVATAR -->
                        <a :href="`/avatars/${artist.id}`">
                            <img :src="artist.avatar" alt="League creator image"
                                 class="img-responsive img-circle card-avatar">
                        </a>


                        <!-- LEAGUE NAME -->
                        <h2 style="margin-top: 0">
                            <a :href="`/artists/${artist.id}`" style="color: #444">{{ artist.name }}</a>
                        </h2>


                        <!-- LEAGUE CREATOR NAME -->
                        <div class="card-author">
                            Some spiel
                            <a href="#">about something</a>
                            <span class="card-block" style="min-height: 60px">{{ artist.touring }}</span>
                        </div>

                        <!-- JOIN LINK -->
                        <h3>
                            <a v-if="!inWishList(artist.id)" @click="addToWishlist(artist)">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Wishlist
                            </a>
                            <a v-else :href="`/artists/${artist.id}/remove`">
                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            Remove
                            </a>
                        </h3>
                    </div>

                </article>

            </div>
        </div>
    </div>


</template>

<script>
    export default {

        data () {

            return {

                artists: '',
                wishlist: ''
            }
        },


        mounted () {

            this.fetchArtists();
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


            inWishList(id)
            {
                return _.includes(this.wishlist, id);
            },


            addToWishlist(artist)
            {
                axios.get(`/artists/${artist.id}/add`)
                        .then(function (response) {

                            this.wishlist.push(response.data.new_artist);

                        }.bind(this))
                        .catch(function (error) {

                            console.log('The artist could not be added');
                        });
            }
        }
    }
</script>