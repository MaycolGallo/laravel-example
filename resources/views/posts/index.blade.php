@extends('layouts.app')

@section('content')
    <div class="max-w-sm mx-auto bg-zinc-100">
        <form action="{{route('posts')}}" method="POST">
           @csrf
            <label for="body">Body</label>
            <textarea class="rounded-md w-full focus:outline-none border" name="body" id="body" cols="30" rows="10" placeholder="En que piensas..."></textarea>
            <button class="bg-violet-500 py-2 text-white font-medium rounded-md w-full" type="submit">Publicar</button>
        </form>
        <div class="mt-4">
            @if ($posts->count()>0)
                @foreach ($posts as $post)
                    <div>
                        {{$post->user->name}}
                        {{$post->created_at->diffForHumans()}}
                        {{$post->body}}
                    </div>
                @endforeach
            @else
                <p>no hay posts..</p>
            @endif
        </div>
        {{ $posts->links() }}
    </div>
@endsection