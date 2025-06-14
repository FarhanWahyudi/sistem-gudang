<x-guest-layout title="Let's get started" subtitle="Nice to meet you">
    <form method="POST" action="{{ route('register') }}" class="w-full">
        @csrf

        <h1 class="text-4xl mb-10 font-bold text-blue-600">Sign up</h1>

        <!-- Name -->
        <div>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full" placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-text-input id="password_confirmation" class="block mt-1 w-full" placeholder="Confirm Password"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col mt-8">
            <x-primary-button>
                {{ __('Register') }}
            </x-primary-button>

            <p class="text-sm text-center mt-4">Already have an account ? <a href="/login" class="text-blue-600 font-semibold">Log in</a></p>
        </div>
    </form>
</x-guest-layout>
