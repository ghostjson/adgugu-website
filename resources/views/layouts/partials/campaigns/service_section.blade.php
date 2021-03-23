<!-- Service -->
<div class="tab-section product-tab-section">
    <div class="form-group">
        <label>What type of AD do you want?</label>
        <div class="selectgroup w-100">
            <label class="selectgroup-item tab-section-btn-2" id="non-video-ad">
                <input wire:model.defer="adType" type="radio" name="service_ad_type" value="non_video"
                       class="selectgroup-input"
                       checked="">
                <span class="selectgroup-button">I want people to click my online Non-video Ad</span>
            </label>
            <label class="selectgroup-item tab-section-btn-2" id="online-video-ad">
                <input wire:model.defer="adType" type="radio" name="service_ad_type" value="video"
                       class="selectgroup-input">
                <span
                    class="selectgroup-button">I want people to view my online video ad</span>
            </label>
            <label class="selectgroup-item tab-section-btn-2" id="offline-store">
                <input wire:model.defer="adType" type="radio" name="service_ad_type" value="offline"
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
            <input wire:model.lazy="link" type="text" class="form-control" >
            <small>Should enter only website's home page ( not inner page link )</small>
            @error('link') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Ad campaign name</label>
            <input wire:model.lazy="name" type="text" class="form-control" >
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Brand</label>
            <input wire:model.lazy="brand" type="text" class="form-control" >
            @error('brand') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Category</label>
            <select wire:model.lazy="category" class="form-control" >
                <option value="">Select a category</option>
                <option>Category 1</option>
                <option>Category 2</option>
            </select>
            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Sub Category 1</label>
            <select wire:model.lazy="subCategory1" class="form-control" >
                <option value="">Select a category</option>
                <option>Category 1</option>
                <option>Category 2</option>
            </select>
            @error('subCategory1') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Sub Category 2</label>
            <select wire:model.lazy="subCategory2" class="form-control" >
                <option value="">Select a category</option>
                <option>Category 1</option>
                <option>Category 2</option>
            </select>
            @error('subCategory2') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Sub Category 3</label>
            <select wire:model.lazy="subCategory3" class="form-control" >
                <option value="">Select a category</option>
                <option>Category 1</option>
                <option>Category 2</option>
            </select>
            @error('subCategory3') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Target Audience</label>
            <select wire:model.lazy="targetAudience" class="form-control" >
                <option value="">Select a category</option>
                <option>All Genders</option>
                <option>Male</option>
                <option>Female</option>
            </select>
            @error('targetAudience') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <strong>Target Audience Age Group</strong>
        <div class="form-group">
            <label>From Age</label>
            <input wire:model.lazy="fromAge" type="number" class="form-control" >
            @error('fromAge') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>To Age</label>
            <input wire:model.lazy="toAge" type="number" class="form-control" >
            @error('toAge') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <strong>Product Information</strong>
        <div class="form-group">
            <label>Regular Price</label>
            <input wire:model.lazy="regularPrice" type="number" class="form-control" >
            @error('regularPrice') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Discount</label>
            <input wire:model.lazy="discount" type="number" class="form-control" >
            @error('discount') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Discounted Sale Price</label>
            <input wire:model.lazy="discountedSalePrice" type="number" class="form-control" disabled >
            @error('discountedSalePrice') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Discount Coupon Code</label>
            <button type="button" class="btn btn-sm btn-dark" wire:click="generateCouponCode">Generate</button>
            <input wire:model.lazy="discountCouponCode" type="text" class="form-control" >
            @error('discountCouponCode') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea wire:model.lazy="description" class="form-control" ></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </div>
    <!-- End Non Video Ad -->

    <!-- Video Ad Section -->
    <div class="tab-section online-video-ad-section">
        <strong>Brand Information</strong>
        <div class="form-group">
            <label>Your online video link</label>
            <input wire:model.lazy="link" type="text" class="form-control" >
            @error('link') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Ad campaign name</label>
            <input wire:model.lazy="name" type="text" class="form-control" >
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Brand</label>
            <input wire:model.lazy="brand" type="text" class="form-control" >
            @error('brand') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Category</label>
            <select wire:model.lazy="category" class="form-control" >
                <option>Category 1</option>
                <option>Category 2</option>
            </select>
            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Sub Category 1</label>
            <select wire:model.lazy="subCategory1" class="form-control" >
                <option>Category 1</option>
                <option>Category 2</option>
            </select>
            @error('subCategory1') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Sub Category 2</label>
            <select wire:model.lazy="subCategory2" class="form-control" >
                <option>Category 1</option>
                <option>Category 2</option>
            </select>
            @error('subCategory2') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Sub Category 3</label>
            <select wire:model.lazy="subCategory3" class="form-control" >
                <option>Category 1</option>
                <option>Category 2</option>
            </select>
            @error('subCategory3') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Target Audience</label>
            {{--                                            <select class="form-control" wire:model.lazy="targetAudience" required>--}}
            <option>All Genders</option>
            <option>Male</option>
            <option>Female</option>
            </select>
            @error('targetAudience') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <strong>Target Audience Age Group</strong>
        <div class="form-group">
            <label>From Age</label>
            <input type="number" class="form-control" wire:model.lazy="fromAge" >
            @error('fromAge') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>To Age</label>
            <input type="number" class="form-control" wire:model.lazy="toAge" >
            @error('toAge') <span class="text-danger">{{ $message }}</span> @enderror
        </div>


        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" wire:model.lazy="description" ></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </div>
    <!-- End Video Ad Section -->

    <!-- offline store -->
    <div class="tab-section offline-store-section">
        <strong>Store Information</strong>
        <div class="form-group">
            <label>Store Name</label>
            <input wire:model.lazy="storeName" type="text" class="form-control" name="store_name" >
            @error('storeName') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Ad campaign name</label>
            <input wire:model.lazy="name" type="text" class="form-control" name="store_campaign_name" >
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <strong>Store Location</strong>
        <div class="form-group">
            <label>Address Line 1</label>
            <input wire:model.lazy="addressLine1" type="text" class="form-control" >
            @error('addressLine1') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Address Line 2</label>
            <input wire:model.lazy="addressLine2" type="text" class="form-control" >
            @error('addressLine2') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Country</label>
            <input wire:model.lazy="country" type="text" class="form-control" >
            @error('country') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>State</label>
            <input type="text" class="form-control" wire:model.lazy="state" >
            @error('state') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" wire:model.lazy="city" >
            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Zip</label>
            <input type="text" class="form-control" wire:model.lazy="zip" >
            @error('zip') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Telephone</label>
            <input type="text" class="form-control" wire:model.lazy="telephone">
            @error('telephone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mt-6">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </div>
    <!-- End offline store -->

</div>
<!-- End Service -->
