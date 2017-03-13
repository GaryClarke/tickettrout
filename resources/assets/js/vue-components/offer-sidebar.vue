<template>
    <div class="sidebar" id="sidebar-offers">

        <div class="sidebar-banner card side-card card-pseudo">

            <div class="card-details card-content panel-body">

                <!-- Artist avatar -->
                <div id="profile-avatar">

                    <div>
                        <img src="/avatars/Adele.jpg"
                             alt="User image"
                             class="profile-avatar"
                             style="float: left; margin-right: 5px"
                        >
                    </div>

                    <div v-show="!bought">
                        <h3 style="margin-top: 0">Left:</h3>
                        <h1>4h {{ minutes }}m {{ seconds }}s</h1>
                    </div>

                    <div v-show="bought">
                        <h2>Great!</h2>
                        <h3>You've bought Adele tickets at face value</h3>
                    </div>
                </div>

                <div style="margin-top: 20px">

                    <div>
                        <div class="editable-attribute">
                            <div class="media">
                                <div class="media-body">
                                    <p class="attribute-title">Show</p>
                                    <p>
                            <span class="profile-attributes">
                                <b>Adele</b>
                            </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="editable-attribute">
                            <div class="media">
                                <div class="media-body">
                                    <p class="attribute-title">Venue</p>
                                    <p>
                            <span class="profile-attributes">
                                Liverpool Echo Arena
                            </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="editable-attribute">
                            <div class="media">
                                <div class="media-body">
                                    <p class="attribute-title">Date</p>
                                    <p>
                            <span class="profile-attributes">
                                01/07/2017 - 7.30pm
                            </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="editable-attribute">
                            <div class="media">
                                <div class="media-body">
                                    <p class="attribute-title">Ticket</p>
                                    <p>
                            <span class="profile-attributes">
                                Seated (Lower Tier) <a class="name-link float-right" href="#">Full Details</a>
                            </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="editable-attribute">
                            <div class="media">
                                <div class="media-body">
                                    <p class="attribute-title">Price</p>
                                    <p>
                            <span class="profile-attributes">
                                £44 (inc fees)
                            </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="editable-attribute">
                            <div class="media">
                                <div class="media-body">
                                    <p class="attribute-title">Quantity</p>
                                    <p v-show="!bought">
                                        <select name="quantity" id="quantity" v-model="ticketAmount"
                                                style="min-width: 80px; background-color: white">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </p>
                                    <p v-show="bought">
                                        {{ ticketAmount }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-show="!bought" style="text-align: center">
                        <h2>Total to Pay £ {{ totalCost }}</h2>

                        <button type="submit"
                                class="btn btn-success btn-block"
                                @click.prevent="buyTickets"
                                style="margin-top: 20px;"
                        >
                            BUY NOW
                        </button>


                        <button type="submit"
                                class="btn btn-primary btn-block"
                                onclick="this.blur();"
                                style="margin-top: 50px;"
                        >
                            RELEASE TO OTHERS (400 points)
                        </button>
                    </div>

                    <div v-show="bought" style="text-align: center">
                        <h2>Total Cost: £{{ totalCost }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: ['user'],

        data () {

            return {

                ticketAmount: 4,
                seconds: 59,
                minutes: 22,
                bought: false
            }
        },

        computed: {

            totalCost() {

                return this.ticketAmount * 44;
            }
        },

        mounted () {

            setInterval(function () {

                if (this.seconds == 0) {

                    this.seconds = 59;
                }
                else {

                    --this.seconds;
                }

            }.bind(this), 1000);


            setInterval(function () {

                if (this.minutes == 0) {

                    this.minutes = 59;
                }
                else {

                    --this.minutes;
                }

            }.bind(this), 1000 * 60);
        },

        methods: {

            buyTickets () {

                this.bought = true;

                swal({
                    title: "Great!",
                    text: "You're going to see Adele. Your tickets will be emailed to " + this.user.email,
                    imageUrl: "/banners/Adele400.jpg",
                    imageSize: "250x150",
                    confirmButtonText: 'Confirm',
                    html: true
                });
            }

        }
    }
</script>