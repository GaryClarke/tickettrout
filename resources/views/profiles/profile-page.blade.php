@extends('layouts.app')

@section('navigation')
    @include('nav.top-nav')
@endsection

@section('content')

    {{-- Bottom Tabs --}}
    <div class="wrap tab-pane active" id="screen-league-single">
        <div class="visible-xs mobile-tabs">
            <ul class="nav nav-tabs filter-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#sidebar-profile" role="tab" zdata-toggle="tab">Profile</a>
                </li>

                <li role="presentation" class="">
                    <a href="#screen-feed-content" role="tab" zdata-toggle="tab">Guide</a>
                </li>
            </ul>
        </div>

        @include('profiles.member-sidebar')

        @include('profiles.guide')
    </div>

@endsection