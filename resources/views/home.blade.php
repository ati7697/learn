@extends('layouts.app')
@section('content')
    {{--  top section --}}
    <div class=" static flex flex-col w-screen h-screen bg-fixed bg-center bg-cover bg-[url('/image/bg.jpg')] ">
        <div class="absolute flex bottom-60 ml-10">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-3 py-2 text-center  md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Start playing
            </button>
        </div>
        <div class="absolute bottom-0 flex flex-row ">
            <div class=" flex m-4 w-60 h-40 transition-all ease-in-out duration-1000 transform translate-x-0  slide hover:shadow-lg"> <img src="{{url('image/empty.jpg')}}" class="w-[300px]"></div>
            <div class="flex m-4 w-60 h-40  ease-in-out duration-1000 transform translate-x-1 slide hover:shadow-lg"> <img src="{{url('image/empty.jpg')}}" class="w-[300px]"></div>
            <div class="flex m-4 w-60 h-40 transition-all ease-in-out duration-1000 transform translate-x slide hover:shadow-lg"> <img src="{{url('image/empty.jpg')}}" class="w-[300px]"></div>
            <div class=" flex m-4 w-60 h-40 transition-all ease-in-out duration-1000 transform translate-x slide hover:shadow-lg"><img src="{{url('image/empty.jpg')}}" class="w-[300px]"></div>
        </div>
        <div class="absolute bottom-16 left-6" >
{{--            <div onclick="nextSlide()" class="fixed bg-blue-500 w-5 h-5 flex items-center justify-center text-black  rounded-full p-2 cursor-pointer">&#x276E;</div>--}}
            <button onclick="nextSlide()" class=" cursor-pointer transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 rounded-full p-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
        </div>
        <div class="absolute bottom-16 right-6" >
{{--            <div onclick="previousSlide()" class="fixed bg-blue-500 w-5 h-5  mr-16 border-r rounded-full p-2 border-gray-400 flex items-center justify-center text-black cursor-pointer">&#x276F;</div>--}}
            <button onclick="previousSlide()" class=" cursor-pointer bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>

    {{-- middle section --}}

    <div class="flex flex-row m-10 mt-16 mb-20">
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
{{--image section--}}
    <div class="flex flex-row m-10 mb-36 mt-24">
        <div class="flex flex-col w-1/3 m-3 rounded-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-900 hover:text-amber-50 duration-300">
            <div class="flex justify-center mb-3 p-10 ">
                <img src="{{url('image/empty.jpg')}}" class="w-[300px] rounded">
            </div>
            <div class="flex ml-7 font-bold ml-12">
                <h2>Heading</h2>
            </div>
            <div class=" flex text-justify mr-6  ml-12 mb-10 justify-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="flex flex-col w-1/3 m-3 rounded-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-900 hover:text-amber-50 duration-300">
            <div class="flex justify-center mb-3 p-10 ">
                <img src="{{url('image/empty.jpg')}}" class="w-[300px] rounded">
            </div>
            <div class="flex ml-7 font-bold ml-12">
                <h2>Heading</h2>
            </div>
            <div class=" flex text-justify mr-6  ml-12 mb-10 justify-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="flex flex-col w-1/3 m-3 rounded-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-900 hover:text-amber-50 duration-300">
            <div class="flex justify-center mb-3 p-10 ">
                <img src="{{url('image/empty.jpg')}}" class="w-[300px] rounded">
            </div>
            <div class="flex ml-7 font-bold ml-12">
                <h2>Heading</h2>
            </div>
            <div class=" flex text-justify mr-6  ml-12 mb-10 justify-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>

    </div>
    <div class="flex flex-col">
        <div class="flex justify-center text-3xl font-bold m-3">
            <h1>Buy full game</h1>
        </div>
        <div class="flex justify-center text-lg mt-5">
            <h2>Editions</h2>
        </div>
        <div class="flex flex-row m-5 mb-36 ">
            <div class="flex flex-col w-1/2 h-fit m-4 hover:shadow-2xl">
                <div class="flex justify-center ">
                    <img src="{{"/image/empty.jpg"}}">
                </div>
                <div class="flex justify-center m-2">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="ml-10 mt-3">
                    <ul class="list-disc">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                </div>
                <div class="m-10"><p>$100</p></div>
                <div class="flex justify-center mb-3">
                    <button class="bg-blue-500 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white font-bold py-2 px-4 rounded-full">
                        Add to card
                    </button>
                </div>

            </div>
            <div class="flex flex-col w-1/2 h-fit m-4 hover:shadow-2xl">
                <div class="flex justify-center ">
                    <img src="{{"/image/empty.jpg"}}">
                </div>
                <div class="flex justify-center m-2">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="ml-10 mt-3">
                    <ul class="list-disc">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                </div>
                <div class="m-10"><p>$100</p></div>
                <div class="flex justify-center mb-3">
                    <button class="bg-blue-500 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white font-bold py-2 px-4 rounded-full">
                        Add to card
                    </button>
                </div>

            </div>

        </div>
    </div>
@endsection
<script>
    function nextSlide(){
        let activeSlide = document.querySelector('.slide.translate-x-0');
        activeSlide.classList.remove('translate-x-0');
        activeSlide.classList.add('-translate-x-full');

        let nextSlide = activeSlide.nextElementSibling;
        nextSlide.classList.remove('translate-x-full');
        nextSlide.classList.add('translate-x-0');
    }

    function previousSlide() {
        let activeSlide = document.querySelector('.slide.translate-x-0');
        activeSlide.classList.remove('translate-x-0');
        activeSlide.classList.add('translate-x-full');

        let previousSlide = activeSlide.previousElementSibling;
        previousSlide.classList.remove('-translate-x-full');
        previousSlide.classList.add('translate-x-0');
    }
</script>
