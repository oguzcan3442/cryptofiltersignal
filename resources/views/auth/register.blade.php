<div>
    @livewireStyles
    <livewire:header />
    <main>
        <div class="section section-pad">
            <div class="container">
                <div class="tab-custom">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3">
                            <ul class="nav nav-tabs ucap" id="loginreg-form">
                                <li><a href="/login">Log In</a></li>
                                <li  class="active"><a href="#tab2" data-toggle="tab">Register</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="gaps size-2x"></div>
                    <!-- Tab panes -->
                    <div class="tab-content no-pd">
                        <div class="tab-pane fade in active" id="tab2">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                                    <h3 class="heading-lead center">Register An Account</h3>
                                    <div>
                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    </div>
                                    <form class="form-signup" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-results"></div>
                                        <div class="form-group">
                                            <!-- Name -->
                                            <div class="form-field form-m-bttm">
                                                <x-label for="name" :value="__('Name')" />
                                                <x-input id="name" class="block mt-1 w-full form-control required" placeholder="Name *" type="text" name="name" :value="old('name')" required autofocus />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- Email Address -->
                                            <div class="mt-4 form-field form-m-bttm">
                                                <x-label for="email" :value="__('Email')" />
                                                <x-input id="email" class="block mt-1 w-full form-control required email" type="email" name="email" :value="old('email')" placeholder="Email *" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- Password -->
                                            <div class="mt-4 form-field">
                                                <x-label for="password" :value="__('Password')" />
                                                <x-input id="password" class="block mt-1 w-full form-control required"
                                                         type="password"
                                                         name="password"
                                                         placeholder="Password *"
                                                         required autocomplete="new-password" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- Confirm Password -->
                                            <div class="mt-4">
                                                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                                <x-input id="password_confirmation" class="block mt-1 w-full form-control required"
                                                         type="password"
                                                         placeholder="Confirm Password *"
                                                         name="password_confirmation" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-field">
                                                <input type="checkbox" name="signup-term" id="signup-term" required> <label for="signup-term" style="font-weight: normal"> I accept and agree with the terms of the <a href="#" class="pd-no">User Agreement</a>.</label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-alt login-register-btn">Signup</button>
                                        <span class="gaps"></span>
                                        <p class="small">Already registered? <a class="switch-tab" data-tabnav="loginreg-form" href="{{ route('login') }}" data-toggle="tab">Login here</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <livewire:footer />
    @livewireScripts
</div>
