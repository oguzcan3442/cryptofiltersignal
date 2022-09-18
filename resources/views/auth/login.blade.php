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
                                <li class="active"><a href="#tab1" data-toggle="tab">Log In</a></li>
                                <li><a href="/register">Register</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="gaps size-2x"></div>
                    <!-- Tab panes -->
                    <div class="tab-content no-pd">
                        <div class="tab-pane fade in active" id="tab1">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                                    <h3 class="heading-lead center">Login Your Account</h3>
                                    <div>
                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    </div>
                                    <form class="form-signup" action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="form-results"></div>
                                        <div class="form-group">
                                            <!-- Email Address -->
                                            <div class="form-field form-m-bttm">
                                                <x-label for="email" :value="__('Email')" />
                                                <x-input id="email" class="block mt-1 w-full form-control required email" type="email" name="email" :value="old('email')" required autofocus />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- Password -->
                                            <div class="mt-4">
                                                <x-label for="password" :value="__('Password')" />
                                                <x-input id="password" class="block mt-1 w-full form-control required"
                                                         type="password"
                                                         name="password"
                                                         required autocomplete="current-password" />
                                            </div>
                                        </div>
                                        <div class="rememberMe-forgotPass">
                                            <!-- Remember Me -->
                                            <div >
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>
                                            <div>
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-alt login-register-btn">Log In</button>
                                        <span class="gaps"></span>
                                        <p class="small">Not registered? <a class="switch-tab" data-tabnav="loginreg-form" href="#tab2" data-toggle="tab">Register here</a></p>
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
