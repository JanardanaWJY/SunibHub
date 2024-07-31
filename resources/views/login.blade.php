@extends('layout.authentication')
@section('title', 'Login Page')
@section('content')
    <div class="flex flex-row bg-white w-[85%] mb-[0.5vh] mt-[2vh] rounded-sm">
        <div class="bg-[#04326A] rounded-l-sm p-2 w-[12%]">
            <img src="{{ asset('assets/logo/Email.png') }}" alt="email">
        </div>
        <input type="text" name="email" placeholder="you@gmail.com" class="rounded-sm w-[88%] focus:outline-none focus:border-[#04326A] focus:ring-[#04326A] focus:ring-1 px-3">
    </div>
    <div class="flex flex-row bg-white w-[85%] mb-[2vh] mt-[2vh] rounded-sm">
        <div class="bg-[#04326A] rounded-l-sm p-2 w-[12%]">
            <img src="{{ asset('assets/logo/Password.png') }}" alt="password">
        </div>
        <input type="password" name="password" placeholder="Password" class="rounded-sm w-[76%] focus:outline-none focus:border-[#04326A] focus:ring-[#04326A] focus:ring-1 px-3">
        <button class="w-[12%] block p-2" id="show">
            <img src="{{ asset('assets/logo/show.png') }}" alt="show">
        </button>
        <button class="w-[12%] p-2 hidden" id="hide">
            <img src="{{ asset('assets/logo/hide.png') }}" alt="hide">
        </button>
    </div>
    <div class="mt-[1vh] flex flex-row">
        <div class="mr-[0.25vw]">Don't have an account?</div>
        <div class="font-medium tracking-tight text-[#FFC533]"><a href="{{ '/signup' }}">Sign Up</a></div>
    </div>
@endsection
@section('content2')
<a href="{{ '/main' }}">LOGIN</a>
@endsection
