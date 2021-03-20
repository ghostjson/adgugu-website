<div>

    <section class="p-t-40">
        <div class="container">

            <h2 class="m-b-60 text-center">Login</h2>


            <div class="row">
                <div class="col-lg-8 center no-padding no-margin">
                    <form class="form-transparent-grey" wire:submit.prevent="submit">
                        @error('error')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="row">

                            <div class="col-lg-12 form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input id="email" type="email" wire:model.lazy="email" placeholder="Email"
                                       class="form-control">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-12 form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input id="password" type="password" wire:model.lazy="password" placeholder="Password"
                                       class="form-control">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <button class="btn" type="submit">Login</button>
                            </div>
                        </div>
                        <small>Not a member? <a href="/register">Register here.</a></small>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
