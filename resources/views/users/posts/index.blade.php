@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
        <div class="w-2/4 bg-slate-200 rounded-lg p-6">
           @if ($posts->count())
               @foreach ($posts as $post)

               <x-post :post="$post"/>
               
               @endforeach

               {{ $posts->links() }}
            @else
                <p>{{ $user->name }} does not have any posts</p>
            @endif
        </div>
    </div>
@endsection