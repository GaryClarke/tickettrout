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


                <!-- ARTIST NAME -->
                <h2 style="margin-top: 0; font-size: 1.8em">
                    <a :href="`/artists/${artist.id}`" style="color: #444">{{ artist.name }}</a>
                </h2>


                <!-- LEAGUE CREATOR NAME -->
                <div class="card-author">
                    Some spiel
                    <a href="#">about something</a>
                    <span class="card-block" style="min-height: 60px">{{ artist.touring }}</span>
                </div>

                <!-- JOIN LINK -->
                <h3 style="font-size: 1.4em; margin-bottom: 0">
                    <a v-if="artist.in_wishlist" @click="removeArtist(artist)" style="color: #cb2e35">
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                        Remove
                    </a>
                    <a v-else @click="addArtist(artist)">
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


        },

        methods: {

            removeArtist(artist) {

                Event.$emit('removeArtist', artist);
            },


            addArtist(artist) {

                Event.$emit('addArtist', artist);
            }
        }
    }
</script>