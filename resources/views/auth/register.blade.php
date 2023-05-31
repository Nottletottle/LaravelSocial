@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-3/12 bg-gray-200 p-6 rounded-lg">
        <h1 class="font-semibold text-center text-2xl">Register</h1>
        <br>
        <form class="bg-gray-200" action="{{ route('register') }}" method="post">
            @csrf
			<input class="block w-full bg-gray-100 mt-4 py-2 
            rounded-2xl text-black text-center font-semibold mb-2 
            placeholder:text-center @error('name')
            placeholder:text-rose-300
            @enderror" 
            type="text" name="name" id="name" placeholder="Your name" value="{{old('name')}}"/>
            
            @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}    
                </div>                
            @enderror
            
            <input class="block w-full bg-gray-100 mt-4 py-2 
            rounded-2xl text-black text-center font-semibold mb-2 
            placeholder:text-center
            @error('email')
            placeholder:text-rose-300
            @enderror" 
            type="text" name="email" id="email" placeholder="Your email" value="{{old('email')}}"/>
            
            @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}    
                </div>                
            @enderror

            <input class="block w-full bg-gray-100 mt-4 py-2 
            rounded-2xl text-black text-center font-semibold mb-2 
            placeholder:text-center
            @error('username')
            placeholder:text-rose-300
            @enderror" 
            type="text" name="username" id="username" placeholder="Username" value="{{old('username')}}"/>

            @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}    
                </div>                
            @enderror

            <input class="block w-full bg-gray-100 mt-4 py-2 
            rounded-2xl text-black text-center font-semibold mb-2 
            placeholder:text-center
            @error('password')
            placeholder:text-rose-300
            @enderror"
            type="password" name="password" id="password" placeholder="Choose a password" />

            @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}    
                </div>                
            @enderror

            <input class="block w-full bg-gray-100 mt-4 py-2 
            rounded-2xl text-black text-center font-semibold mb-2 placeholder:text-center" 
            type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" />

            <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Register</button>
		</form>
    </div>
</div>
@endsection