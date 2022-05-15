@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto p-4 my-4 bg-white">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="flex flex-col gap-y-3">
                <div>

                    <label for="name">Name</label>
                    <input class="w-full rounded-md focus:outilne-none" 
                    type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                </div>
                <div>

                    <label for="email">Email</label>
                    <input  class="w-full rounded-md focus:outline-none shadow" 
                    type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                </div>
                <div>

                    <label for="password">Password</label>
                    <input class="w-full rounded-md focus:outline-none shadow"  type="password" name="password" placeholder="Password">
                </div>
                <div>
                    <label for="password_confirmation">repeat password</label>
                    <input  class="w-full rounded-md focus:outline-none shadow"  type="password" name="password_confirmation" placeholder="repeat password">
                </div>
                <button type="submit" class="bg-violet-600 text-white w-full rounded-md py-2">Register</button>
            </div>
        </form>
    </div>
@endsection