<div id="register-page">
    <section class="p-t-40">

        <div class="container">



            <div class="row">
                <div class="col-lg-8 center no-padding no-margin">
                    <form class="form-transparent-grey" wire:submit.prevent="register">
                        <h1 class="m-b-60 ml-3">Register</h1>
                        @error('error')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="fun" class="col-sm-4 col-md-4 control-label text-right" style="font-size: 1.3em">I want to be:</label>
                                    <div class="col-sm-7 col-md-7">
                                        <div class="from-group" >
                                            <div class="form-check">
                                                <input class="form-check-input " wire:model.defer="role" type="radio" name="role" id="advertiser-role" value="advertiser" checked>
                                                <label class="form-check-label" for="advertiser-role" style="font-size: 1.2em">
                                                    Advertiser
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" wire:model.defer="role" type="radio" name="role" id="promoter-role" value="promoter">
                                                <label class="form-check-label" for="promoter-role" style="font-size: 1.2em" >
                                                   Promoter
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" wire:model.defer="role" type="radio" name="role" id="shopper-role" value="shopper">
                                                <label class="form-check-label" for="shopper-role"  style="font-size: 1.2em">
                                                   Shopper
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">First Name</label>
                                <input required type="text" wire:model.lazy="firstName" placeholder="First Name"
                                       class="form-control">
                                @error('firstName') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Last Name</label>
                                <input required type="text" wire:model.lazy="lastName" placeholder="Last Name"
                                       class="form-control">
                                @error('lastName') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-12 form-group">
                                <label class="sr-only">email</label>
                                <input required type="email" wire:model.lazy="email" placeholder="email"
                                       class="form-control">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-12 form-group">
                                <label class="sr-only">password</label>
                                <input required type="password" wire:model.lazy="password" placeholder="password"
                                       class="form-control">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-12 form-group">
                                <label class="sr-only">conform password</label>
                                <input required type="password" wire:model.lazy="confirmPassword"
                                       placeholder="confirm password" class="form-control">
                                @error('confirmPassword') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-12 form-group">
                                <label class="sr-only">Phone</label>
                                <input required type="text" wire:model.lazy="phone" placeholder="Phone"
                                       class="form-control">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-12 form-group">
                                <label class="sr-only" for="address">Address</label>
                                <textarea required id="address" wire:model.lazy="address" class="form-control"
                                          placeholder="Address"></textarea>
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>


                            <div class="col-lg-12 form-group" style="text-align: left">
                                <div class="form-check">
                                    <input required class="form-check-input" type="checkbox" id="terms">
                                    <label class="form-check-label" for="terms">
                                        <a href="/">Agree with Terms of Service</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <button class="btn" type="submit">Register</button>
                            </div>
                        </div>
                        <small>Already a member? <a href="/login">Login here.</a></small>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
