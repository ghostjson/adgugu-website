<div class="overlay d-none" id="home-modal-advertiser" style="overflow: scroll;">


    <div class="m" style="margin: 30px auto;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">How does it work for Advertisers?</h5>
                    <button  type="button" onclick="closeModal('home-modal-advertiser')" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content">
                        <!-- Timeline -->
                        <ul class="timeline" >
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">1</div>
                                <h4 style="padding-bottom: 20px">Register as "Advertiser"</h4>
                                <img src="/images/home/register_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                        <ul class="timeline d-none" >
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">2</div>
                                <h4 style="padding-bottom: 20px">Post the Ads and Commit to Pay "Promoters" After They've Shared Your Ads</h4>
                                <img src="/images/home/ads_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                        <ul class="timeline d-none" >
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">3</div>
                                <h4 style="padding-bottom: 20px"> Select "Promoters" Based on Your Preferences: Promoter's Location, Gender, Age Group, Interests</h4>
                                <img src="/images/home/select_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                        <ul class="timeline d-none" >
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">4</div>
                                <h4 style="padding-bottom: 20px">Pay "Promoters" After Their Friends Acted on Your Posts</h4>
                                <img src="/images/home/pay_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="modalNext('home-modal-advertiser')"  class="btn btn-primary modal-next-button">Next</button>
                    <a href="/register?role=advertiser" class="btn btn-primary">Register as Advertiser</a>
                    <button type="button" class="btn btn-secondary" onclick="closeModal('home-modal-advertiser')">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay d-none" id="home-modal-promoter" style="overflow: scroll;">


    <div class="m" style="margin: 30px auto;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">How does it work for Promoters?</h5>
                    <button  type="button" onclick="closeModal('home-modal-promoter')" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content">
                        <!-- Timeline -->
                        <ul class="timeline">
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">1</div>
                                <h4 style="padding-bottom: 20px">Register as "Promoter"</h4>
                                <img src="/images/home/register_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                        <ul class="timeline d-none" v-if="modal.slide_number === 1">
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">2</div>
                                <h4 style="padding-bottom: 20px">Receive the propositions from "Advertisers" to share the ads with your Friends</h4>
                                <img src="/images/home/post_ad_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                        <ul class="timeline d-none">
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">3</div>
                                <h4 style="padding-bottom: 20px">Start sharing the ads with your Friends</h4>
                                <img src="/images/home/share_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                        <ul class="timeline d-none">
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">4</div>
                                <h4 style="padding-bottom: 20px">Get paid right after your Friends acted on your sharings</h4>
                                <img src="/images/home/get_paid_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="modalNext('home-modal-promoter')"  class="btn btn-primary modal-next-button">Next</button>
                    <a href="/register?role=promoter" class="btn btn-primary">Register as Promoter</a>
                    <button type="button" class="btn btn-secondary" onclick="closeModal('home-modal-promoter')">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay d-none" id="home-modal-shopper" style="overflow: scroll;">


    <div class="m" style="margin: 30px auto;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">How does it work for Shoppers?</h5>
                    <button  type="button" onclick="closeModal('home-modal-shopper')" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content">
                        <!-- Timeline -->
                        <ul class="timeline">
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">1</div>
                                <h4 style="padding-bottom: 20px">Register as "Shopper"</h4>
                                <img src="/images/home/register_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                        <ul class="timeline d-none" >
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">2</div>
                                <h4 style="padding-bottom: 20px">Receive from Your Friends the Great Shopping Deals & Discounts offered by "Advertisers"</h4>
                                <img src="/images/home/ads_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                        <ul class="timeline d-none" >
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">3</div>
                                <h4 style="padding-bottom: 20px">Shop & Enjoy The Great Shopping Deals & Discounts</h4>
                                <img src="/images/home/sale_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                        <ul class="timeline d-none" >
                            <!--Timeline item-->
                            <li class="timeline-item" style="text-align: left">
                                <div class="timeline-icon">4</div>
                                <h4 style="padding-bottom: 20px">Get Paid After You Have Acted on Your Friends Sharings</h4>
                                <img src="/images/home/pay_icon.png">
                            </li>
                            <!--end: Timeline item-->
                            <!--Timeline item-->
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="modalNext('home-modal-shopper')"  class="btn btn-primary modal-next-button">Next</button>
                    <a href="/register?role=shopper" class="btn btn-primary">Register as Shopper</a>
                    <button type="button" class="btn btn-secondary" onclick="closeModal('home-modal-shopper')">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
