<x-layout>
    <h1 class="text-3xl font-semibold text-center mb-6">Registration Form</h1>

    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 shadow-md rounded-lg">
                <div class="text-center text-xl font-bold mb-4">{{ __('Register') }}</div>

                <div>
                    <form method="POST" action="">
                        @csrf

                        <!-- Name Field -->
                        <div class="mb-4">
                            <label for="name"
                                class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                            <input id="name" type="text"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('name') border-red-500 @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="mb-4">
                            <label for="email"
                                class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                            <input id="email" type="email"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('email') border-red-500 @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4">
                            <label for="password"
                                class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('password') border-red-500 @enderror"
                                name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-4">
                            <label for="password-confirm"
                                class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <!-- Role Selection -->
                        <div class="mb-4">
                            <label for="select-role"
                                class="block text-sm font-medium text-gray-700">{{ __('Select Role') }}</label>
                            <select
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                name="is_role" required>
                                <option value="">Select Role</option>
                                <option value="2">Super Admin</option>
                                <option value="1">Adm</option>
                                <option value="0">User</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6 text-center">
                            <button type="submit"
                                class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                {{ __('Signup') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
