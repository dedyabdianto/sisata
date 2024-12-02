{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('pariwisata/admin/assets/images/logo-papsel2.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('pariwisata/admin/assets/css/bootstrap.min.css') }}" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('pariwisata/admin/assets/css/all.min.css') }}">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('pariwisata/admin/style.css') }}">
    <title>Dinas Pariwisata PS - Login </title>
</head>

<body>
    <div class="login-page" style="background-image: url({{ asset('pariwisata/assets/images/merauke.jpg') }}">
        <div class="login-from-wrap">
            <h4 style="text-align: center;">Dinas Pariwisata Papua Selatan</h4>
            <form id="login-form" action="{{ route('login') }}" method="post">
                @csrf
                <h1 class="site-title">
                    <img style="height: 100px;width: 80px;"
                        src="{{ asset('pariwisata/admin/assets/images/logo-papsel2.png') }}" alt="">

                </h1>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="validate" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="mt-2 text-sm text-red-600">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" class="validate">
                    @if ($errors->has('password'))
                        <span class="mt-2 text-sm text-red-600">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <a class="button-primary" href="#"
                        onclick="event.preventDefault(); document.getElementById('login-form').submit();">Login</a>
                </div>
            </form>
        </div>
    </div>

    <!-- *Scripts* -->
    <script src="{{ asset('pariwisata/admin/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{ asset('pariwisata/admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pariwisata/admin/assets/js/canvasjs.min.js') }}"></script>
    <script src="{{ asset('pariwisata/admin/assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('pariwisata/admin/assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('pariwisata/admin/assets/js/dashboard-custom.js') }}"></script>
</body>

</html>
