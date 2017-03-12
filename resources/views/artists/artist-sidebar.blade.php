<div class="sidebar" id="sidebar-league">

    {{-- SIDE PANEL --}}
    <div class="sidebar-banner card side-card card-pseudo">

        {{-- BANNER --}}
        <img src="{{ $artist->banner_lg }}" alt="League banner" class="img-responsive sidebar-banner-image">

        <div class="card-details card-content panel-body">

            {{-- LEAGUE INFO --}}
            <h2 style="margin-top: 0">{{ $artist->name }}</h2>

            <div id="card-bio">
                <p>{{ $artist->about }}</p>
                <p class="bio-about">{{ $artist->touring }}</p>
            </div>


            <h3>
                <a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Add to Wishlist</a>
            </h3>


        </div>


    </div>
</div>

