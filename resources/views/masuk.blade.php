    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="headline">
        <a href="/" class="back-home">
            <img src="./home-icon.png" alt="">Kembali ke home
        </a>
        <link rel="stylesheet" href="{{ asset('login.css') }}">
        <h1>REGISTRASI</h1>
    </div>

    <!-- Container -->
    <div class="container">
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <!-- Email Address -->
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Masukkan Email  " />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <!-- Password -->
            <x-input-label for="password" :value="__('Password')" class="mt-4" />
            <div class="password-input">
                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" placeholder="Masukkan Password" />
                <img id="togglePasswordImg" class="passwordImg" src="./hidden.png" alt="">
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            @if (Route::has('password.request'))
                <a class="forgot-password underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 btn-login">
                {{ __('Log in') }}
            </x-primary-button>
        </form>

        <p class="register-prompt">
            Belum memiliki akun? <a href="/daftar" class="register-link">Daftar</a> disini
        </p>

        <!-- Footer Colors -->
        <div class="footer-colors">
            <span style="background-color: #FF7A52;"></span>
            <span style="background-color: #F8C100;"></span>
            <span style="background-color: #9AE8B7;"></span>
            <span style="background-color: #A5C5CC;"></span>
            <span style="background-color: #CA73FF;"></span>
            <span style="background-color: #B5B5B5;"></span>
            <span style="background-color: #FF7A52;"></span>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="./script.js"></script>