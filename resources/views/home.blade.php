@extends('layouts.app')
@section('content')
    {{--  top section --}}
    <div class=" static flex flex-col w-full bg-zinc-200">
        {{--  buttons --}}
        <div class="absolute bottom-60 left-6" >
            <button class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
        </div>
        <div class="absolute bottom-60 right-6" >
            <button class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
        <div class="flex mt-40 ml-10">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-3 py-2 text-center  md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Start playing
            </button>
        </div>
        {{-- end of buttons--}}
        <div class="flex">
            <div class="flex flex-row">
                <div class="flex border-2 border-lg  m-4 w-60 h-40 border-slate-900"> box1</div>
                <div class="flex border-2 border-lg  m-4 w-60 h-40 border-slate-900"> box1</div>
                <div class="flex border-2 border-lg  m-4 w-60 h-40 border-slate-900"> box1</div>
                <div class="flex border-2 border-lg  m-4 w-60 h-40 border-slate-900"> box1</div>
            </div>

        </div>
    </div>
    <div class="flex flex-row m-4">
        <div class="flex w-1/3 m-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div class="flex w-2/3 m-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>

    <div class="flex flex-row m-4">
        <div class="flex flex-col w-1/3">
            <div class="flex justify-center mb-3">
                <img src="{{url('image/empty.jpg')}}" class="w-[300px]">
            </div>
            <div class="flex ml-7 font-bold">
                <h2>Heading</h2>
            </div>
            <div class=" flex ml-7 text-justify mr-6 justify-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>

    </div>
@endsection
