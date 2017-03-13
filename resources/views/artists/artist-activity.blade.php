<div class="non-flex-content" id="screen-feed-content">
    <div class="post">
        <article class="card card-post panel panel-default" style="padding: 15px">
            <h2 style="margin-top: 0">{{ $artist->name }} Activity</h2>
            <p>
                <b>{{ $artist->name }}:</b> "{{ $artist->comment }}"
            </p>

            <div class="media">
                <div style="position:relative;height:0;padding-bottom:56.25%">
                    <iframe src="{{ $artist->video }}" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
                </div>
            </div>

            <h3>
                <a href="#">Chat with {{ $artist->name }}...LIVE!</a>
            </h3>

            <h3>
                2017 Summer tour dates
            </h3>
            <ul style="list-style: none">
                <li>
                    <b>Manchester</b> - Saturday 22nd July
                </li>
                <li>
                    <b>Glasgow</b> - Tuesday 25th July
                </li>
                <li>
                    <b>Newcastle</b> - Wednesday 26th July
                </li>
                <li>
                    <b>London</b> - Friday 28th July
                </li>
                <li>
                    <b>London</b> - Saturday 29th July
                </li>
                <li>
                    <b>Liverpool</b> - Wednesday 2nd August
                </li>
                <li>
                    <b>Dublin</b> - Thursday 3rd August
                </li>
            </ul>
            <h3><a href="#">Buy Exclusive {{ $artist->name }} merch here</a></h3>
        </article>
    </div>
</div>