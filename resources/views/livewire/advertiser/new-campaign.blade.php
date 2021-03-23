<div>
    <section class="section">
        <div class="section-header">
            <h1>New Campaign</h1>
        </div>
        <form wire:submit.prevent="submit">
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
                                            <input type="radio" wire:model.lazy="advertisement" name="advertisement"
                                                   value="advertise_product"
                                                   class="selectgroup-input"
                                                   checked="">
                                            <span class="selectgroup-button">I want to advertise my product</span>
                                        </label>
                                        <label class="selectgroup-item tab-section-btn" id="service-tab">
                                            <input wire:model.lazy="advertisement" type="radio" name="advertisement"
                                                   value="advertise_service"
                                                   class="selectgroup-input">
                                            <span class="selectgroup-button">I want to advertise my service</span>
                                        </label>
                                    </div>
                                </div>

                                @include('layouts.partials.campaigns.product_section')

                                @include('layouts.partials.campaigns.service_section')


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
