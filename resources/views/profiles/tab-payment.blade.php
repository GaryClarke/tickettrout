<div role="tabpanel" class="tab-pane" id="tab-payment">
    <div class="card-details card-content panel-body">
        <div style="padding-bottom: 30px; border-bottom: 1px solid #444">
            <h3 style="margin-top: 0">Payment Card</h3>

            <form action="#" method="post" style="padding-top: 15px">

                {{ csrf_field() }}

                <label for="card">Active</label>
                <select name="" id="card" style="min-width: 200px; float: right">
                    <option value="">**** **** **** 1234 Visa</option>
                </select>


            </form>
            <p style="margin-top: 20px">
                <i class="fa fa-credit-card" aria-hidden="true"></i>
                <a class="name-link" href="#">Add a new card</a>
            </p>
        </div>

        <div style="padding: 15px 0 30px 0; border-bottom: 1px solid #444">
            <h3 style="margin-top: 0">Preferences</h3>

            <form action="#" method="post" style="padding-top: 15px">

                {{ csrf_field() }}

                <label for="card">Alert Time </label>
                <select name="" id="card" style="min-width: 200px; float: right">
                    <option value="">Evening (6pm - Midnight)</option>
                </select>

                <div style="padding-top: 15px">
                    <label for="card">Alert Type </label>
                    <select name="" id="card" style="min-width: 200px; float: right">
                        <option value="">App</option>
                    </select>
                </div>


            </form>
        </div>

        <div style="padding: 15px 0 30px 0">
            <h3 style="margin-top: 0">Subscriptions</h3>

            <form action="#" method="post" style="padding-top: 15px">

                {{ csrf_field() }}

                <div>
                    <input type="checkbox"
                           id="newsletter"
                           name="newsletter"
                    >
                    <label for="newsletter"
                           >Newsletter</label>
                    <input type="checkbox"
                           checked
                           id="promo"
                           name="promo"
                           style="margin-left: 30px;"
                    >
                    <label for="promo"
                           >Promotions</label>
                </div>
            </form>
        </div>
    </div>
</div>