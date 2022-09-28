@extends('layouts.app')
@section('content')
<div class="w-screen text-white font-nav">
    <div class="flex flex-row">
        <div class="flex flex-col m-3">
            <div class="rounded-full w-[150px] ml-2"> <img src="{{url('image/profile-removebg-preview.png')}}" ></div>
            <div class="flex flex-col bg-gray-700 rounded-2xl justify-center p-4 text-center space-y-4">
                    <a href="" class="hover:bg-orange-400 rounded-2xl p-2">Name</a>
                    <a href="" class="hover:bg-orange-400 rounded-2xl p-2">Email</a>
                    <a href="" class="hover:bg-orange-400 rounded-2xl p-2">Lessons</a>
                    <a href="" class="hover:bg-orange-400 rounded-2xl p-2">Payment</a>
                    <a href="" class="hover:bg-orange-400 rounded-2xl p-2">Password</a>
                    <a href="" class="hover:bg-orange-400 rounded-2xl p-2">Logout</a>
            </div>
        </div>

        <div class="flex flex-col bg-gray-700 w-1/2 text-center m-5 rounded">
            <h1>Achievements</h1>
            <img src="" class="">
        </div>
        <div class="bg-gray-700 w-1/2 text-center m-5 rounded">
            <h1>points</h1>
        </div>

    </div>
</div>
@endsection
