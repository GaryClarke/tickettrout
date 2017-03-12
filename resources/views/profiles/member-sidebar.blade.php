<div class="sidebar" id="sidebar-profile">

    {{-- Sidebar card --}}
    <div class="sidebar-banner card side-card card-pseudo">

        <ul class="nav nav-tabs score-board-tabs" role="tablist">

            {{-- Predictions --}}
            <li role="presentation" class="active">
                <a href="#tab-general"
                   aria-controls="predictions"
                   role="tab"
                   data-toggle="tab">General</a>
            </li>

            {{-- Scores --}}
            <li role="presentation">
                <a href="#tab-address"
                   aria-controls="scores"
                   role="tab"
                   data-toggle="tab">Address</a>
            </li>

            <li role="presentation">
                <a href="#tab-payment"
                   aria-controls="scores"
                   role="tab"
                   data-toggle="tab">Account</a>
            </li>

        </ul>

        <div class="tab-content">

            @include('profiles.tab-general')

            @include('profiles.tab-address')
            @include('profiles.tab-payment')





        </div>
    </div>
</div>
