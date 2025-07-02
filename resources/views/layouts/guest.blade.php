<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | BPJS Gratis Padang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            }
    </style>
</head>

<body class="flex h-screen">

    <!-- LEFT: Background Image + Text -->
    <div class="hidden md:flex w-1/2 h-full relative">
        <img src="https://cdn.antaranews.com/cache/1200x800/2021/05/09/Balaikota-Padang-2.jpg" 
            alt="Background" class="w-full h-full object-cover opacity-90" />
        <div class="absolute inset-0 bg-black/30 flex items-center justify-center px-10">
            <div
                class="text-white max-w-md text-center backdrop-blur-lg bg-black/30 px-10 py-16 md:px-16 md:py-24 rounded-2xl shadow-xl">
                <h2 class="text-2xl font-semibold mb-4">Program BPJS Gratis Kota Padang</h2>
                <p class="text-sm text-gray-200 leading-relaxed">
                    Program ini bertujuan memberikan jaminan kesehatan bagi seluruh warga Padang melalui sistem
                    pendaftaran digital yang mudah dan cepat.
                </p>
            </div>
        </div>
    </div>

    <!-- RIGHT: Login Form -->
    <div class="w-full md:w-1/2 flex flex-col justify-center items-center px-8 relative">

        <!-- Branding -->
        <div class="absolute top-6 left-6 md:left-8">
            <div class="flex">
                <a href="#"
                class="text-sm border text-gray-700 border-gray-700 px-4 py-2 rounded-full shadow-sm hover:bg-gray-50 transition">
                BakoSehat
            </a>
            <a href="" class="px-5">
                    <img src="{{ asset('images/dinkes-logo-b.png') }}" alt="Logo Kota Padang" class="w-auto h-8">
                </a>
            </div>
        </div>

        <!-- Login Card -->
        <div class="max-w-md w-full mt-20">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang!</h1>
            <p class="text-sm text-gray-700 mb-6">Silakan masuk untuk mengakses data pendaftar BPJS Gratis Kota Padang.</p>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Email -->
                <div>
                    <input id="email" type="email" name="email" placeholder="Alamat email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ old('email') }}" required autofocus autocomplete="username">
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <input id="password" type="password" name="password" placeholder="Kata sandi"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required autocomplete="current-password">
                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-600">
                        Ingat saya
                    </label>
                </div>

                <!-- Login Button -->
                <button type="submit"
                    class="w-full bg-gray-900 hover:bg-gray-800 text-white font-semibold py-3 rounded-xl transition duration-300">
                    Masuk
                </button>
            </form>

            <!-- Kontak -->
            <p class="text-xs text-gray-500 mt-6 text-center">
                Ada kendala? Hubungi <a href="mailto:bpjs@padang.go.id"
                    class="text-blue-600 font-medium">sdkdkkpadang@gmail.go.id</a>
            </p>
        </div>
    </div>

</body>

</html>
