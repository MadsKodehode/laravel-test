@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
        <div class="w-2/4 bg-slate-200 rounded-lg p-6 mb-5">
            <form action="{{ route('posts') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-500 border-2 w-full p-4 rounded-lg resize-none
                    @error('body') border-red-500 @enderror" placeholder="What is on your mind?"></textarea>

                    @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-400 text-white px-4 py-2 rounded font-medium">Post</button>
                </div>
            </form>

            @if ($posts->count())
               @foreach ($posts as $post)

               <x-post :post="$post"/>
               
               @endforeach

               {{ $posts->links() }}
            @else
                <p>No posts yet</p>
            @endif
        </div>
    </div>
@endsection