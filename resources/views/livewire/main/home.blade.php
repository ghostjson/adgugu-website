<div>

    @include('layouts.partials.home_modals')

    @include('layouts.partials.slider')

    @include('layouts.partials.client_about')

    <section class="p-b-30" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"> <img alt="" style="width: inherit" src="images/home/section1.png"> </div>
                <div class="col-lg-7" style="text-align: left">
                    <div class="heading-text heading-section mt-5">
                        <h1>ADVERTISERS</h1>
                        <p>Post your ad to get it shared by "Promoters" in friends social network</p>
                        <ul class="points">
                            <li>Get More Online Clicks & Video Ad Views</li>
                            <li> Increase Traffice to Your Offline Stores</li>
                            <li>Increase Brand & Products Awareness</li>
                            <li>Grow Your Business</li>
                        </ul>
                        <a class="btn" href="/register?role=advertiser">Register as Advertiser</a>
                        <div class="know-more">
                            <a id="advertiser-modal-btn" onclick="openModal('home-modal-advertiser')">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="background-grey p-b-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="heading-text heading-section mt-5" style="text-align: left">
                        <h1>Promoters</h1>
                        <p>Share Ad with friends and earn money</p>
                        <ul class="points">
                            <li>Earn Extra Income by Sharing Ads & Deals with Friends</li>
                            <li>Enjoy Great Shopping Discounts</li>
                            <li>Please Your Friends with Great Discount News</li>
                        </ul>
                        <a class="btn" href="/register?role=promoter">Register as Promoter</a>
                        <div class="know-more">
                            <a id="promoter-modal-btn" onclick="openModal('home-modal-promoter')">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img alt=""  style="width: inherit" src="images/home/section5.png">
                </div>
            </div>
        </div>
    </section>
    <section class="p-b-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"> <img alt="" style="width: inherit" src="images/home/section3.png"> </div>
                <div class="col-lg-7">
                    <div class="heading-text heading-section mt-5" style="text-align: left">
                        <h1>Shoppers</h1>
                        <p>Enjoy the great deals shared by "Promoters" easy shopping and earn money</p>
                        <ul class="points">
                            <li>Enjoy Great Deals & Discounts</li>
                            <li>Earn Extra Income</li>
                            <li>Save Time on Shopping</li>
                            <li>Have Fun Shopping</li>
                        </ul>
                        <a class="btn" href="/register?role=shopper">Register as Shopper</a>
                        <div class="know-more">
                            <a id="shopper-modal-btn" onclick="openModal('home-modal-shopper')">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to action -->
    <section class="background-colored text-center">
        <div class="container register">
            <div class="row justify-content-center">
                <div class="col-lg-9r">
                    <h3 class="text-light">Like To Make Some Money? Register as a Promoter</h3>
                    <a class="btn btn-light btn-outline btn-rounded" href="/register?role=promoter">Register</a>
                </div>
            </div>
        </div>
    </section>


</div>
