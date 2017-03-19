<template>

    <div class="card-wrap card-sm-wrap">
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
                    <a v-if="artist.in_wishlist" style="color: #cb2e35">
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                        Remove
                    </a>
                    <a v-else>
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Wishlist
                    </a>
                </h3>
            </div>

        </article>

    </div>

</template>

<script>
    export default {

        props: ['artist'],


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


            addToWishlist(artist)
            {
                axios.put(`/wishlist/${artist.id}`)
                        .then(function (response) {

                            this.wishlist.push(response.data.new_artist);

                        }.bind(this))
                        .catch(function (error) {

                            console.log('The artist could not be added');
                        });
            },


            removeFromWishlist(artist)
            {
                axios.delete(`/wishlist/${artist.id}`)
                        .then(function (response) {

                            var index = this.wishlist.indexOf(response.data.removed);
                            if (index != -1) this.wishlist.splice(index, 1);

                        }.bind(this))
                        .catch(function () {

                            console.log('The artist could not be removed');
                        })
            }
        }
    }
</script>