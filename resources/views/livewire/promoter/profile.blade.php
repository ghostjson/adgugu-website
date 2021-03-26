<div>
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>

        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{ auth()->user()->last_name }}</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="" wire:submit.prevent="submit">
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                @if(session()->has('successMessage'))
                                    <div class="alert alert-success">
                                        <p>{{ session('successMessage') }}</p>
                                    </div>
                                    @elseif(session()->has('errorMessage'))
                                    <div class="alert alert-danger">
                                       <p>{{ session('errorMessage') }}</p>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" wire:model.defer="firstName"
                                               required="">
                                        @error('firstName') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" wire:model.defer="lastName" required="">
                                        @error('lastName') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-7 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" wire:model="email" required="">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-md-5 col-12">
                                        <label>Phone</label>
                                        <input type="tel" wire:model="phone" class="form-control" value="">
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Bio</label>
                                        <textarea wire:model="bio" class="form-control" style="height: 20vh"></textarea>
                                        @error('bio') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12" data-select2-id="7">
                                        <label>Interests</label>
                                        <select class="form-control" style="height: 60px" wire:model="interests"
                                                multiple name="interests">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 2</option>
                                            <option>Option 2</option>
                                        </select>
                                        @error('interests') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
