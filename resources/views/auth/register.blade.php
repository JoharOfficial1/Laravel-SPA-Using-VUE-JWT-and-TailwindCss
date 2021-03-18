@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">
        <image src="Jot-Logo.svg" alt="Logo" style="width: 100px;"/>
        <h1 class="text-white text-3xl pt-8">Welcome</h1>
        <h2 class="text-blue-300">Enter your credentials below to Register</h2>

        <form method="POST" action="{{ route('register') }}" class="pt-8">
            @csrf

            <div class="relative">
                <label for="name" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Name</label>
                <input id="name" type="text" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="name" 
                value="{{ old('name') }}" placeholder="Full Name" autocomplete="name" autofocus>

                @error('name')
                    <span class="text-red-500 text-sm pl-3" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="relative pt-3">
                <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">E-mail</label>
                <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="email" 
                value="{{ old('email') }}" placeholder="your@email.com" autocomplete="email">

                @error('email')
                    <span class="text-red-500 text-sm pl-3" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="relative pt-3">
                <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">PAssword</label>
                <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" 
                name="password" placeholder="********" autocomplete="new-password">

                @error('password')
                    <span class="text-red-500 text-sm pl-3" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="relative pt-3">
                <label for="password-confirm" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Confirm Password</label>
                <input id="password-confirm" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" 
                name="password_confirmation" placeholder="********" autocomplete="new-password">
            </div>

            <div class="pt-8">
                <button type="submit" class="w-full uppercase rounded text-left text-blue-900 bg-gray-400 py-2 px-3 font-bold">
                    {{ __('Register') }}
                </button>
            </div>

            <div class="flex justify-between pt-8 text-white text-sm font-bold">
                <a href="{{ route('login') }}">
                    Already a user ? Click here to Login
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
