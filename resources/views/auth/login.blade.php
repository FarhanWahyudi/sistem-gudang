<x-guest-layout title="WELCOME BACK" subtitle="Nice to see you again">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="w-full ">
        @csrf

        <h1 class="text-4xl mb-10 font-bold text-blue-600">Sign in</h1>

        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full" placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        
        <div class="flex items-center justify-between mt-4 mb-8">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-0" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-blue-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

        </div>
        <x-primary-button>
            {{ __('Log in') }}
        </x-primary-button>
        <p class="text-sm text-center mt-4">Don't have an account ? <a href="/register" class="text-blue-600 font-semibold">Sign up</a></p>
    </form>
</x-guest-layout>
