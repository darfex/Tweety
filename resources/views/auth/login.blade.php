<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-10 py-8 bg-blue-100 border border-blue-400 rounded-lg w-80">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email Address</label>
                            <input class="border border-gray-400 p-2 w-full" type="text" name="email" id="email" autocomplete="email" value="{{ old('email') }}" required>

                            @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                            <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" autocomplete="current-password" required>
                        
                            @error('password')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <input type="checkbox" name="remember" id="remember">
                            <label class="uppercase font-bold text-xs text-gray-700" for="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</label>
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600 mr-2">
                                Login
                            </button>

                            <a href="{{ route('password.request') }}" class="text-gray-700 text-xs hover:text-black">Forgot Your Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>