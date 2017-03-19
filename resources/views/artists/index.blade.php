@extends('layouts.app')

@section('navigation')
    @include('nav.top-nav')
@endsection

@section('content')

    <div class="wrap tab-pane active" id="screen-leagues">
        <div id="leagues-nav" class="content">

            {{-- Tabs --}}
            <ul class="nav nav-tabs filter-tabs" role="tablist">

                 {{--ARTISTS --}}
                <li role="presentation" class="active">
                    <a href="#artists"
                       aria-controls="artists"
                       role="tab"
                       data-toggle="tab">
                        <i class="fa fa-microphone" aria-hidden="true"></i> Artists
                    </a>
                </li>


                 {{--WISHLIST--}}
                <li role="presentation">
                    <a href="#wishlist"
                       aria-controls="wishlist"
                       role="tab"
                       data-toggle="tab"
                    >
                        <i class="fa fa-heart" aria-hidden="true"></i> Wishlist
                    </a>
                </li>

            </ul>



            <div class="tab-content">

                <div class="tab-content">
                    <artist-list></artist-list>
                </div>

                {{-- ARTISTS PANEL --}}


                {{-- WISHLIST PANEL --}}
                {{--<div role="tabpanel" class="tab-pane" id="wishlist">--}}
                {{--@include('artists.wishlist')--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
@endsection


