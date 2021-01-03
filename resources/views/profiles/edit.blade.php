<x-app>
    <form action="{{ $user->path() }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class=" mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
            <input type="text" class="border p-2 w-full {{ $errors->has('name') ? 'border-red-600' : 'border-gray-400'}}" name="name" id="name" value="{{ $user->name }}">

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
            <input type="text" class="border p-2 w-full {{ $errors->has('username') ? 'border-red-600' : 'border-gray-400'}}" name="username" id="username" value="{{ $user->username }}">
        
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="bio">Bio</label>
            <textarea name="bio" id="bio" class="w-full border {{ $errors->has('bio') ? 'border-red-600' : 'border-gray-400' }}">{{ $user->bio }}</textarea>
        
            @error('bio')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="banner">Banner</label>
            <input class="border p-2 w-full {{ $errors->has('banner') ? 'border-red-600' : 'border-gray-400' }}" type="file" name="banner" id="banner" value="{{ $user->banner }}">
        
            @error('banner')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">Avatar</label>

            <div class="flex">
                <input type="file" class="border p-2 w-full {{ $errors->has('avatar') ? 'border-red-600' : 'border-gray-400'}}" name="avatar" id="avatar" value="{{ $user->avatar }}">
                <img src="{{ $user->avatar }}" alt="Your Avatar" width="40">
            </div>
        
            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
            <input type="email" class="border p-2 w-full {{ $errors->has('email') ? 'border-red-600' : 'border-gray-400'}}" name="email" id="email" value="{{ $user->email }}">
        
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
            <input type="password" class="border p-2 w-full {{ $errors->has('password') ? 'border-red-600' : 'border-gray-400'}}" name="password" id="password">
        
            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_comfirm" class="block mb-2 uppercase font-bold text-xs text-gray-700">Confirm Password</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation" id="password_confirm">
            
            @error('password_comfirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 rounded-lg px-4 py-2 text-white hover:bg-blue-500">Submit</button>
        </div>
        
    </form>
</x-app>