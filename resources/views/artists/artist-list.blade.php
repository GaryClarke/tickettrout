<div role="tabpanel" class="tab-pane">
    <div class="content">

        <artist-list></artist-list>

        <!-- RECOMMENDED LEAGUE -->


        <!-- LOADING DIV -->
        <div v-show="!leaguesLoaded.complete" class="premdi-loader">
            <div class="premdi-load">
                P
            </div>
            <div class="loader-info">
                <i class="fa fa-circle-o-notch fa-spin"></i>
                {{-- Change to just loading for Jacko --}}
                Loading. . .
            </div>
        </div>
    </div>
</div>