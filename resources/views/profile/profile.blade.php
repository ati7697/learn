@extends('layouts.app')
@section('content')
<div class="w-screen text-white font-nav mb-36">
   <div class="flex flex-row m-10">
       <div ><img src="{{url('images/profilePic.jpg')}}" class="rounded-full w-[100px] ml-5"></div>
       <div class="flex flex-col m-10 space-y-3">
            <h2>Ati Ahmadi</h2>
           <p class="text-xs">ati9776</p>
       </div>
   </div>
    <div class ="flex flex-row border-b-2 m-8 space-x-8 p-4  ">
        <div><a href="{{url('profile')}}" class="ml-5 underline underline-offset-[20px] decoration-4  hover:text-[#7FEFEF] visited:text-[#7FEFEF]">Profile</a></div>
        <div><a href="" >My course</a></div>
        <div><a href="#">My achievements</a></div>
    </div>
    <div class="flex flex-row m-12 bg-gray-800 rounded-2xl p-5">
        <div class="mr-3">Email:</div>
        <div>ati@gmail.com</div>
    </div>

</div>
@endsection
