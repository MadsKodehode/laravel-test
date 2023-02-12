@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
        <div class="w-2/4 bg-slate-200 rounded-lg p-6">
         @if (session()->has('status'))
            <div class="bg-red-500 p-3 text-center mb-3">   
            {{ session('status') }}
             </div>
         @endif
           <form action="{{ route('login') }}" method="POST">
            @csrf
            
 
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
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
            </div>
         
            <div>
                <button type="submit" class="bg-blue-400 text-zinc-900 px-4 py-3 rounded font-medium w-full">Login</button>
            </div>
            </form>
        </div>
    </div>
@endsection