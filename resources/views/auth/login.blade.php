<x-guest-layout>
    <!-- Logo & Title -->
    <div class="text-center">
        <img src="{{ asset('img/jjjlogoblack.png') }}" alt="Your Company" class="mx-auto h-12 w-auto" />
        <h2 class="mt-6 text-2xl font-bold tracking-tight text-gray-900">
            Sign in to your account
        </h2>
    </div>

    <!-- Form -->
    <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
            <div class="mt-2">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    autocomplete="username"
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1E88E5] sm:text-sm">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
            <div class="mt-2">
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1E88E5] sm:text-sm">
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Forgot Password Link Pindah ke sini --}}
            @if (Route::has('password.request'))
                <div class="mt-2 text-right">
                    <a href="{{ route('password.request') }}"
                        class="text-sm font-semibold text-[#1E88E5] hover:text-[#2D53A9]">
                        Forgot password?
                    </a>
                </div>
            @endif
        </div>

        <!-- Remember me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox" name="remember"
                class="h-4 w-4 rounded-sm border-gray-300 text-[#1E88E5] focus:ring-[#1E88E5]">
            <label for="remember_me" class="ml-2 block text-sm text-gray-600">
                Remember me
            </label>
        </div>

        <!-- Button -->
        <div>
            <button type="submit"
                class="shadow-2xs flex w-full justify-center rounded-md bg-[#1E88E5] px-3 py-1.5 text-sm font-semibold text-white hover:bg-[#2D53A9] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#2D53A9]">
                Sign in
            </button>
        </div>
    </form>

    <!-- Sign up link -->
    <p class="mt-6 text-center text-sm text-gray-500">
        Not a member?
        <a href="{{ route('register') }}" class="font-semibold text-[#1E88E5] hover:text-[#2D53A9]">
            Sign Up Now!
        </a>
    </p>
</x-guest-layout>
