@extends('layouts.app')

@section('navigation')
    @include('nav.top-nav')
@endsection

@section('content')

    {{-- Bottom Tabs --}}
    <div class="wrap tab-pane active" id="screen-league-single">


        <div class="visible-xs mobile-tabs">
            <ul class="nav nav-tabs filter-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#sidebar-league">Info</a></li>
                <li role="presentation" class=""><a href="#screen-feed-content">Activity</a></li>
            </ul>
        </div>


        @include('artists.artist-sidebar')

        @include('artists.artist-activity')

    </div>
@endsection