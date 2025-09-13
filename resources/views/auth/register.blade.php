<x-guest-layout>
    <!-- Logo & Title -->
    <div class="text-center">
        <img src="{{ asset('img/jjjlogoblack.png') }}" alt="Your Company" class="mx-auto h-12 w-auto" />
        <h2 class="mt-6 text-2xl font-bold tracking-tight text-gray-900">
            Register to your account
        </h2>
    </div>

    <!-- Form -->
    <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-6">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                autocomplete="email"
                class="mt-2 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1E88E5] sm:text-sm">
            @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Username -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-900">Username</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required
                autocomplete="name"
                class="mt-2 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1E88E5] sm:text-sm">
            @error('name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Birthday -->
        <div>
            <label for="birthday" class="block text-sm font-medium text-gray-900">Birthday</label>
            <input id="birthday" type="date" name="birthday" value="{{ old('birthday') }}"
                class="mt-2 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1E88E5] sm:text-sm">
            @error('birthday')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
            <input id="password" type="password" name="password" required
                autocomplete="new-password"
                class="mt-2 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1E88E5] sm:text-sm">
            @error('password')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-900">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password"
                class="mt-2 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1E88E5] sm:text-sm">
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                class="shadow-2xs flex w-full justify-center rounded-md bg-[#1E88E5] px-3 py-1.5 text-sm font-semibold text-white hover:bg-[#2D53A9] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#2D53A9]">
                Submit
            </button>
        </div>
    </form>

    <!-- Login Link -->
    <p class="mt-6 text-center text-sm text-gray-500">
        Already have an account?
        <a href="{{ route('login') }}" class="font-semibold text-[#1E88E5] hover:text-[#2D53A9]">
            Log in
        </a>
    </p>
</x-guest-layout>
