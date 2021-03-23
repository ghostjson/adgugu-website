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
                            <h4>Advertising budget and period information</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Budget allocated for this Ad campaign</label>
                                <input class="form-control" wire:model.lazy="budget" type="number" name="budget">
                                @error('budget') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label>Ad campaign start date</label>
                                <input wire:model.defer="startDate" type="date" class="form-control datepicker"
                                       name="start_date">
                                @error('startDate') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label>Ad campaign end date</label>
                                <input wire:model.defer="endDate" type="date" class="form-control" name="end_date">
                                @error('endDate') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <div class="control-label">Permission to share:</div>
                                    <div class="custom-switches-stacked mt-2">
                                        <label class="custom-switch">
                                            <input wire:model.defer="permission" type="radio" name="permission"
                                                   value="only_selected" class="custom-switch-input" checked="">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Only selected promoters to share my ad shoppers</span>
                                        </label>
                                        <label class="custom-switch">
                                            <input wire:model.defer="permission" type="radio" name="permission"
                                                   value="allow_share" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Allow shoppers to share my ad with sub-shoppers and get paid</span>
                                        </label>
                                    </div>
                                </div>
                                @error('noPromoters') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label>Number of promoters needed</label>
                                <input wire:model.defer="noPromoters" type="number" class="form-control">
                                @error('noPromoters') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
