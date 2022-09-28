@extends('layouts.app')
@section('content')
<div class="w-screen text-white font-nav">
    <div class="flex flex-col justify-center items-center">
        <div class="rounded-full w-[150px] ml-2"> <img src="{{url('image/profile-removebg-preview.png')}}" ></div>
        <div class="flex flex-col bg-gray-700 rounded-2xl justify-center p-4 w-96 text-center space-y-4 ">
            <a href="" class="hover:bg-orange-400 rounded-2xl p-2">{{$user->name}}</a>
            <a href="" class="hover:bg-orange-400 rounded-2xl p-2">{{$user->email}}</a>
            <a href="" class="hover:bg-orange-400 rounded-2xl p-2">Courses</a>
            <a href="" class="hover:bg-orange-400 rounded-2xl p-2">Payment</a>
            <a href="{{url('profile/{id}/edit')}}" class="hover:bg-orange-400 rounded-2xl p-2">Edit profile</a>
            <form method="POST" action="{{ route('logout') }}" >
                @csrf
                <button class="hover:bg-orange-400 rounded-2xl p-2 px-6 w-full">Logout</button>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
