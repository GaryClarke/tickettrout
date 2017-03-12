<div role="tabpanel" class="tab-pane" id="tab-address">
    <div class="card-details card-content panel-body">
        <h3 style="margin-top: 0">Address</h3>

        <form action="#" method="post">

            {{ csrf_field() }}

            <input type="text" placeholder="Line 1" value="22 Acacia Avenue"
                   style="width: 100%; margin-top: 10px"/>
            <input type="text" placeholder="Line 2" value="Stratford"
                   style="width: 100%; margin-top: 10px"/>
            <input type="text" placeholder="Line 3"
                   style="width: 100%; margin-top: 10px"/>
            <input type="text" placeholder="Town / City" value="London"
                   style="width: 100%; margin-top: 10px"/>
            <input type="text" placeholder="County" value="Gtr London"
                   style="width: 100%; margin-top: 10px"/>
            <input type="text" placeholder="Post Code" value="E17 2NN"
                   style="margin-top: 10px"/>

            <button type="submit"
                    disabled
                    class="btn btn-primary btn-sm"
                    onclick="this.blur();"
                    style="display: block; margin-top: 20px"
            >
                Update
            </button>

        </form>
    </div>
</div>