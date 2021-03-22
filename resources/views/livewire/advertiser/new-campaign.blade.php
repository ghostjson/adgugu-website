<div>
    <section class="section">
        <div class="section-header">
            <h1>New Campaign</h1>
        </div>
        <form>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>About Advertisement</h4>
                            </div>


                            <div class="card-body" id="new-campaign">
                                <div class="form-group">
                                    <label>What do you want to advertise?</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item tab-section-btn" id="product-tab">
                                            <input type="radio" name="advertisement" value="advertise_product"
                                                   class="selectgroup-input"
                                                   checked="">
                                            <span class="selectgroup-button">I want to advertise my product</span>
                                        </label>
                                        <label class="selectgroup-item tab-section-btn" id="service-tab">
                                            <input type="radio" name="advertisement" value="advertise_service"
                                                   class="selectgroup-input">
                                            <span class="selectgroup-button">I want to advertise my service</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Product  -->
                                <div class="tab-section product-tab-section">
                                    <div class="form-group">
                                        <label>What type of AD do you want?</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item tab-section-btn-2" id="non-video-ad">
                                                <input type="radio" name="ad_type" value="non_video"
                                                       class="selectgroup-input"
                                                       checked="">
                                                <span class="selectgroup-button">I want people to click my online Non-video Ad</span>
                                            </label>
                                            <label class="selectgroup-item tab-section-btn-2" id="online-video-ad">
                                                <input type="radio" name="ad_type" value="video"
                                                       class="selectgroup-input">
                                                <span
                                                    class="selectgroup-button">I want people to view my online video ad</span>
                                            </label>
                                            <label class="selectgroup-item tab-section-btn-2" id="offline-store">
                                                <input type="radio" name="ad_type" value="offline"
                                                       class="selectgroup-input">
                                                <span
                                                    class="selectgroup-button">I want people to visit my offline stores</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Non Video Ad -->
                                    <div class="tab-section non-video-ad-section">
                                        <strong>Brand Information</strong>
                                        <div class="form-group">
                                            <label>Your online non-video link</label>
                                            <input type="text" class="form-control">
                                            <small>Should enter only website's home page ( not inner page link )</small>
                                        </div>
                                        <div class="form-group">
                                            <label>Ad campaign name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 1</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 2</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 3</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Target Audience</label>
                                            <select class="form-control">
                                                <option>All Genders</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>

                                        <strong>Target Audience Age Group</strong>
                                        <div class="form-group">
                                            <label>From Age</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>To Age</label>
                                            <input type="number" class="form-control">
                                        </div>

                                        <strong>Product Information</strong>
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="number" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Discounted Sale Price</label>
                                            <input type="number" class="form-control" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Discount Coupon Code</label>
                                            <button type="button" class="btn btn-sm btn-dark">Generate</button>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- End Non Video Ad -->

                                    <!-- Video Ad Section -->
                                    <div class="tab-section online-video-ad-section">
                                        <strong>Brand Information</strong>
                                        <div class="form-group">
                                            <label>Your online video link</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Ad campaign name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 1</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 2</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 3</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Target Audience</label>
                                            <select class="form-control">
                                                <option>All Genders</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>

                                        <strong>Target Audience Age Group</strong>
                                        <div class="form-group">
                                            <label>From Age</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>To Age</label>
                                            <input type="number" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- End Video Ad Section -->

                                    <!-- offline store -->
                                    <div class="tab-section offline-store-section">
                                        <strong>Store Information</strong>
                                        <div class="form-group">
                                            <label>Store Name</label>
                                            <input type="text" class="form-control" name="store_name">
                                        </div>
                                        <div class="form-group">
                                           <label>Ad campaign name</label>
                                            <input type="text" class="form-control" name="store_campaign_name">
                                        </div>
                                        <strong>Store Location</strong>
                                        <div class="form-group">
                                            <label>Address Line 1</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Address Line 2</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Zip</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group mt-6">
                                           <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- End offline store -->

                                </div>
                                <!-- End Product -->

                                <!-- Service -->
                                <div class="tab-section service-tab-section">
                                    <div class="form-group">
                                        <label>What type of AD do you want?</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item tab-section-btn-2" id="service-non-video-ad">
                                                <input type="radio" name="service_ad_type" value="non_video"
                                                       class="selectgroup-input"
                                                       checked="">
                                                <span class="selectgroup-button">I want people to click my online Non-video Ad</span>
                                            </label>
                                            <label class="selectgroup-item tab-section-btn-2" id="service-online-video-ad">
                                                <input type="radio" name="service_ad_type" value="video"
                                                       class="selectgroup-input">
                                                <span
                                                    class="selectgroup-button">I want people to view my online video ad</span>
                                            </label>
                                            <label class="selectgroup-item tab-section-btn-2" id="service-offline-store">
                                                <input type="radio" name="service_ad_type" value="offline"
                                                       class="selectgroup-input">
                                                <span
                                                    class="selectgroup-button">I want people to visit my offline stores</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Non Video Ad -->
                                    <div class="tab-section service-non-video-ad-section">
                                        <strong>Brand Information</strong>
                                        <div class="form-group">
                                            <label>Your online non-video link</label>
                                            <input type="text" class="form-control">
                                            <small>Should enter only website's home page ( not inner page link )</small>
                                        </div>
                                        <div class="form-group">
                                            <label>Ad campaign name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 1</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 2</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 3</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Target Audience</label>
                                            <select class="form-control">
                                                <option>All Genders</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>

                                        <strong>Target Audience Age Group</strong>
                                        <div class="form-group">
                                            <label>From Age</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>To Age</label>
                                            <input type="number" class="form-control">
                                        </div>

                                        <strong>Product Information</strong>
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="number" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Discounted Sale Price</label>
                                            <input type="number" class="form-control" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Discount Coupon Code</label>
                                            <button type="button" class="btn btn-sm btn-dark">Generate</button>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- End Non Video Ad -->

                                    <!-- Video Ad Section -->
                                    <div class="tab-section service-online-video-ad-section">
                                        <strong>Brand Information</strong>
                                        <div class="form-group">
                                            <label>Your online video link</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Ad campaign name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 1</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 2</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category 3</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Target Audience</label>
                                            <select class="form-control">
                                                <option>All Genders</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>

                                        <strong>Target Audience Age Group</strong>
                                        <div class="form-group">
                                            <label>From Age</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>To Age</label>
                                            <input type="number" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- End Video Ad Section -->

                                    <!-- offline store -->
                                    <div class="tab-section service-offline-store-section">
                                        <strong>Store Information</strong>
                                        <div class="form-group">
                                            <label>Store Name</label>
                                            <input type="text" class="form-control" name="service_store_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Ad campaign name</label>
                                            <input type="text" class="form-control" name="service_store_campaign_name">
                                        </div>
                                        <strong>Store Location</strong>
                                        <div class="form-group">
                                            <label>Address Line 1</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Address Line 2</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Zip</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group mt-6">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- End offline store -->

                                </div>
                                <!-- End Service -->
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
