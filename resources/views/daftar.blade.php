    <div class="headline">
        <a href="/" class="back-home"><img src="./home-icon.png" alt="">Kembali ke home</a>
        <link rel="stylesheet" href="{{ asset('styles_lama.css') }}">
        <h1>REGISTRASI</h1>
    </div>
    <div class="container">
        <form class="register-form" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" placeholder="Masukkan Nama Lengkap" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')"
                    required autocomplete="email" placeholder="Masukkan Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Phone')" />
                <div class="phone-input block mt-1 w-full">
                    <span>+62</span>
                    <x-text-input id="phone" class="phone-input-form" type="tel" name="phone"
                        :value="old('phone')" placeholder="Masukkan Nomor Telepon" required pattern="[0-9]*" />
                </div>
                <small>cth: 81235647855</small>
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <div class="password-input">
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" placeholder="Masukkan Password" />
                    <img id="togglePasswordImg" class="passwordImg" src="./hidden.png" alt="">
                </div>
                <small>Password harus mengandung minimal 8 karakter yang terdiri atas kombinasi huruf besar, huruf
                    kecil, dan angka</small>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi Password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Institution -->
            <div class="mt-4">
                <x-input-label for="institusi" :value="__('Asal Instansi')" />
                <x-text-input id="institusi" class="block mt-1 w-full" type="text" name="institusi"
                    :value="old('institusi')" placeholder="Masukkan Asal Instansi" />
                <x-input-error :messages="$errors->get('institusi')" class="mt-2" />
            </div>

            <x-primary-button class="ms-4 btn-register">
                {{ __('Register') }}
            </x-primary-button>
            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <p class="login-prompt">
                    Sudah memiliki akun? <a href="/masuk" class="login-link">Login</a> disini
                </p>
            </div>
        </form>

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
