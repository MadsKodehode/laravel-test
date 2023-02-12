@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
        <div class="w-2/4 bg-slate-200 rounded-lg p-6">
           <form action="{{ route('register') }}" method="POST">
            @csrf
             <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" class="bg-gray-300 border-2 w-full p-4 rounded-lg
                 @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                @error('name')
                    <div class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror

            </div>
             <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-300 border-2 w-full p-4 rounded-lg 
                @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                   
                @error('username')
                    <div class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror

            </div>
             <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" class="bg-gray-300 border-2 w-full p-4 rounded-lg 
                @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    
                @error('email')
                    <div class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
             <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-300 border-2 w-full p-4 rounded-lg 
                @error('password') border-red-500 @enderror" value="">
                
                  @error('password')
                    <div class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
             <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="bg-gray-300 border-2 w-full p-4 rounded-lg 
                @error('password_confirmation') border-red-500 @enderror" value="">

                    @error('password_confirmation')
                    <div class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-400 text-zinc-900 px-4 py-3 rounded font-medium w-full">Submit</button>
            </div>
            </form>
        </div>
    </div>
@endsection