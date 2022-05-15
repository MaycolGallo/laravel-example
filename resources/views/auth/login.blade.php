@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto p-4 my-4 bg-white">
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="flex flex-col gap-y-3">
            <div>
                <label for="email">Email</label>
                <input  class="w-full rounded-md focus:outline-none shadow" 
                type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            </div>
            <div>

                <label for="password">Password</label>
                <input class="w-full rounded-md focus:outline-none shadow"  type="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="bg-violet-600 text-white w-full rounded-md py-2">Register</button>
        </div>
    </form>
</div>
@endsection