@extends('layouts.app')
@section('title', 'Register')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white shadow-md rounded-md w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-4xl font-bold text-center mt-8">Registar</h1>
    
    <form action="{{ route('register.store') }}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Name" class="block mx-auto my-4 p-2 w-2/3 border border-gray-200 rounded-md shadow-md" value="{{ old('name') }}">
        
        <input type="email" name="email" placeholder="Email" class="block mx-auto my-4 p-2 w-2/3 border border-gray-200 rounded-md shadow-md" value="{{ old('email') }}">
        
        <input type="password" name="password" placeholder="Password" class="block mx-auto my-4 p-2 w-2/3 border border-gray-200 rounded-md shadow-md">
        
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="block mx-auto my-4 p-2 w-2/3 border border-gray-200 rounded-md shadow-md">

        <!-- Mensajes de error -->
        @if ($errors->any())
            <p class="block mx-auto my-4 p-2 w-2/3 border border-red-500 rounded-md bg-red-100 text-red-600 shadow-md">
                ⚠️ {{ $errors->first() }} <!-- Muestra el primer error -->
            </p>
        @endif

        <button class="block mx-auto bg-blue-500 text-white font-bold py-2 px-4 rounded-md shadow-md">
            Register
        </button>
    </form>
</div>
@endsection
