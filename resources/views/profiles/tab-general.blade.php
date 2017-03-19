<div role="tabpanel" class="tab-pane active" id="tab-general">

    <div class="card-details card-content panel-body">

        <h3 style="margin-top: 0">{{ $user->fullName }}</h3>

        {{-- AVATAR--}}
        <div id="profile-avatar">

            <div>
                <img src="{{ $user->avatar }}"
                     alt="User image"
                     class="profile-avatar"
                >
                <h3 class="float-right" style="margin-top: 0">Points: <span style="color: green">147</span>
                </h3>

            </div>

        </div>

        <div>

            <div class="editable-attribute">
                <div class="media">
                    <div class="media-body">
                        <p class="attribute-title">First Name</p>
                        <p>
                            <span class="profile-attributes">
                                {{ $user->first_name }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="editable-attribute">
                <div class="media">
                    <div class="media-body">
                        <p class="attribute-title">Last Name</p>
                        <p>
                            <span class="profile-attributes">
                                {{ $user->last_name }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="editable-attribute">
                <div class="media">
                    <div class="media-body">
                        <p class="attribute-title">DOB</p>
                        <p>
                            <span class="profile-attributes">
                                {{ $user->dob }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="editable-attribute">
                <div class="media">
                    <div class="media-body">
                        <p class="attribute-title">Gender</p>
                        <p>
                            <span class="profile-attributes">
                                {{ $user->gender }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="editable-attribute">
                <div class="media">
                    <div class="media-body">
                        <p class="attribute-title">Registered</p>
                        <p>
                            <span class="profile-attributes">
                                14/04/2016
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="editable-attribute">
                <div class="media">
                    <div class="media-body">
                        <p class="attribute-title">Region</p>
                        <p>
                            <span class="profile-attributes">
                                {{ $user->region }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="editable-attribute">
                <div class="media">
                    <div class="media-body">
                        <p class="attribute-title">Email</p>
                        <p>
                            <span class="profile-attributes">
                                {{ $user->email }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="editable-attribute">
                <div class="media">
                    <div class="media-body">
                        <p class="attribute-title">Verified</p>
                        <p>
                            <span class="profile-attributes">
                                Yes
                            </span>
                        </p>
                    </div>
                </div>
            </div>

        </div>



    </div>

</div>