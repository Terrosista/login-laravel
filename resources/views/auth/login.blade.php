@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white shadow-md rounded-md w-1/3 borde
       border-gray-200 rounded-lg shadow-lg">

    <h1 class="text-4xl font-bold text-center mt-8">Login</h1>
    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email" class="block mx-auto my-4 p-2 w-2/3 border border-gray-200 rounded-md shadow-md">
        <input type="password" name="password"  id="password" placeholder="Password" class="block mx-auto my-4 p-2 w-2/3 border border-gray-200 rounded-md shadow-md">
        @if ($errors->has('email'))
    <p class="text-red-500 bg-red-100 border border-red-400 rounded-md p-2 w-2/3 mx-auto">
        {{ $errors->first('email') }}
    </p>
@endif

        <br>

        <button class="block mx-auto bg-blue-500 text-white font-bold py-2 px-4 rounded-md shadow-md">
            Login
        </button>
    </form>
</div>
@endsection