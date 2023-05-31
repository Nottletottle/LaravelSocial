@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-3/12 bg-gray-200 p-6 rounded-lg">
        <h1 class="font-semibold text-center text-2xl">Login</h1>
        <br>
        <form class="bg-gray-200" action="{{ route('login') }}" method="post">
            @csrf
			            
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
            @error('password')
            placeholder:text-rose-300
            @enderror"
            type="password" name="password" id="password" placeholder="Choose a password" />

            @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}    
                </div>                
            @enderror

            @if (session('status'))
                <div class="text-red-500 mt-2 text-base text-center">{{session('status')}}</div>
            @endif

            <div class="mb-4">
                <div class="flex item-center">
                    <input type="checkbox" name="remember" class="mr-2" id="remember">
                    <label for="remember">Remember me</label>
                </div>
            </div>

            <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
		</form>
    </div>
</div>
@endsection