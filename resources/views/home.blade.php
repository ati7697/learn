@extends('layouts.app')
<style>

    .card .detail{
        position: absolute;
        top: 0;
        left: 0;
        width: 80%;/*100%*/
        height: 100%;
        transition: 1s;
        transform-origin: left;
        transform: perspective(2000px) rotateY(-90deg);
    }
    .card:hover .detail{
        transform: perspective(2000px) rotateY(0deg);
    }
</style>
@section('content')
    <div class="flex flex-col ">
        {{--  top section --}}
        <div class=" static flex flex-col w-screen h-screen bg-fixed bg-center bg-cover bg-[url('/image/bg.jpg')] bg-blend-darken brightness-50"></div>
        <div class="absolute flex bottom-60 left-16 text-amber-50 text-8xl">
            <h1>Escape with <br> laravel</h1>
        </div>
        <div class="absolute flex bottom-36 left-16">
            <button type="button" class="text-white bg-orange-600 py-3 px-10 hover:px-20 transition-all ease-in rounded-xl  hover:bg-orange-400  font-medium text-sm  text-center">
                Play demo
            </button>
        </div>
        <div class="absolute flex bottom-20 left-16 text-black bg-white py-1 px-4 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">
            <p>Beginner</p>
        </div>
        <div class="absolute flex bottom-12 left-16 text-white py-1 px-4 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">
            <p>8 hours</p>
        </div>
        <div class="absolute flex bottom-4 left-16 text-white py-1 px-4 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">
            <p>Certificate</p>
        </div>

        <div class="flex flex-row justify-center">
            <div class=" flex m-4 w-60 h-40  hover:shadow-lg"> <img src="{{url('image/bg.jpg')}}" class="w-[300px] rounded-2xl"></div>
            <div class="flex m-4 w-60 h-40   hover:shadow-lg"> <img src="{{url('image/bg.jpg')}}" class="w-[300px] rounded-2xl"></div>
            <div class="flex m-4 w-60 h-40 hover:shadow-lg"> <img src="{{url('image/bg.jpg')}}" class="w-[300px] rounded-2xl"></div>
            <div class=" flex m-4 w-60 h-40  hover:shadow-lg"><img src="{{url('image/bg.jpg')}}" class="w-[300px] rounded-2xl"></div>
        </div>

    {{--image section--}}
        <div class="flex flex-col w-screen p-5 mt-36 text-amber-50">
            <div class="flex justify-center text-lg font-bold mt-20"><h1>Improve your Laravel skill with us</h1></div>
            <div class="flex flex-row m-10  card">
                <div class="flex flex-col w-1/3 m-3 rounded-xl transition-all ease-in-out delay-150 duration-300  group">
                    <div class="flex justify-center mb-3  group-hover:translate-x-1 image">
                        <img src="{{url('image/empty.jpg')}}" class="rounded group-hover:opacity-50">
                        <div class="detail flex text-justify justify-center m-6 text-black ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="flex flex-row w-full justify-between">
                        <div class="flex bg-orange-600 py-1 px-4 ml-2 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">
                            <p>Beginner</p>
                        </div>
                        <div class="flex">
                            <spann class="m-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                </svg>
                            </spann>
                            <span class="mt-1">100</span>
                            <p class="m-1">Students</p>
                        </div>
                    </div>
                    <div class="flex font-bold mt-8 justify-center">
                        <h2>Heading</h2>
                    </div>

                </div>
                <div class="flex flex-col w-1/3 m-3 rounded-xl transition-all ease-in-out delay-150 duration-300  group">
                    <div class="flex justify-center mb-3  group-hover:translate-x-1 image">
                        <img src="{{url('image/empty.jpg')}}" class="rounded group-hover:opacity-50">
                        <div class="detail flex text-justify justify-center m-6 text-black ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="flex flex-row w-full justify-between">
                        <div class="flex bg-orange-600 py-1 px-4 ml-2 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">
                            <p>Beginner</p>
                        </div>
                        <div class="flex">
                            <spann class="m-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                </svg>
                            </spann>
                            <span class="mt-1">100</span>
                            <p class="m-1">Students</p>
                        </div>
                    </div>
                    <div class="flex font-bold mt-8 justify-center">
                        <h2>Heading</h2>
                    </div>

                </div>
                <div class="flex flex-col w-1/3 m-3 rounded-xl transition-all ease-in-out delay-150 duration-300  group">
                    <div class="flex justify-center mb-3  group-hover:translate-x-1 image">
                        <img src="{{url('image/empty.jpg')}}" class="rounded group-hover:opacity-50">
                        <div class="detail flex text-justify justify-center m-6 text-black ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="flex flex-row w-full justify-between">
                        <div class="flex bg-orange-600 py-1 px-4 ml-2 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">
                            <p>Beginner</p>
                        </div>
                        <div class="flex">
                            <spann class="m-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                </svg>
                            </spann>
                            <span class="mt-1">100</span>
                            <p class="m-1">Students</p>
                        </div>
                    </div>
                    <div class="flex font-bold mt-8 justify-center">
                        <h2>Heading</h2>
                    </div>

                </div>

            </div>
        </div>

        <div class="flex flex-col text-amber-50 mt-20">
            <div class="flex justify-center text-3xl font-bold m-3">
                <h1>Buy full game</h1>
            </div>
            <div class="flex justify-center text-lg mt-5">
                <h2>Editions</h2>
            </div>
            <div class="flex flex-row m-5 mb-36">
                <div class="flex flex-col w-1/2 h-fit m-4  group hover:translate-y-3 hover:translate-x-2 relative transition ease-in-out delay-300 hover:max-h ">
                    <div class="flex justify-center ">
                        <img src="{{"/image/empty.jpg"}}">
                    </div>
                    <div class="flex justify-center m-2">
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="ml-16 mt-3 invisible group-hover:visible transition ease-out delay-400 ">
                        <ul class="list-disc">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                        <div class="mt-4"><p>$100</p></div>
                    </div>

                    <div class="flex mb-3 justify-center relative bottom-24 group-hover:bottom-0 group-hover:justify-center group-hover:mt-3">
                        <button class=" transition ease-in-out delay-150 bg-orange-500 hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-r from-orange-400 to-orange-500 duration-300 text-white font-bold py-2 px-4 rounded-full">
                            Add to card
                        </button>
                    </div>

                </div>
                <div class="flex flex-col w-1/2 h-fit m-4  group hover:translate-y-3 hover:-translate-x-2 relative transition ease-in-out hover:max-h delay-300">
                    <div class="flex justify-center ">
                        <img src="{{"/image/empty.jpg"}}">
                    </div>
                    <div class="flex justify-center m-2">
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="ml-16 mt-3 invisible group-hover:visible transition ease-out delay-400 ">
                        <ul class="list-disc">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                        <div class="mt-4"><p>$100</p></div>
                    </div>

                    <div class="flex mb-3 justify-center relative bottom-24 group-hover:bottom-0 group-hover:justify-center group-hover:mt-3">
                        <button class="transition ease-in-out delay-150 bg-orange-500 hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-r from-orange-400 to-orange-500 duration-300 text-white font-bold py-2 px-4 rounded-full">
                            Add to card
                        </button>
                    </div>

                </div>

            </div>
        </div>
    {{-- expectation--}}
        <div class="flex flex-col text-white mb-20">
            <div class="flex justify-center font-bold text-4xl">
                <h1>
                    What to expect?
                </h1>
            </div>
            <div class="flex flex-row m-10 justify-center font-bold">
                <div class="border-2 border-orange-500 p-10 ml-4  hover:bg-gradient-to-r from-orange-400 to-orange-500">+40 Courses</div>
                <div class="border-2 border-orange-500 p-10 ml-4  hover:bg-gradient-to-r from-orange-400 to-orange-500">+40 Lessons</div>
                <div class="border-2 border-orange-500 p-10 ml-4  hover:bg-gradient-to-r from-orange-400 to-orange-500">Game and Fun</div>
                <div class="border-2 border-orange-500 p-10 ml-4  hover:bg-gradient-to-r from-orange-400 to-orange-500">Student material</div>

            </div>

            <div class="flex flex-row justify-center">
                <div class="flex flex-row m-2">
                    <svg class="h-8 w-8 text-orange-500 mr-3"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="2" y="6" width="20" height="12" rx="2" />  <path d="M6 12h4m-2 -2v4" />  <line x1="15" y1="11" x2="15" y2="11.01" />  <line x1="18" y1="13" x2="18" y2="13.01" /></svg>
                    <h2>Lorem ipsum dolor sit amet!</h2>
                </div>

                <div class="flex flex-row m-2">
                    <svg class="h-8 w-8 text-orange-500 mr-3"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="9" r="6" />  <polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(-30 12 9)" />  <polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(30 12 9)" /></svg>
                    <h2>Lorem ipsum dolor sit amet!</h2>
                </div>
            </div>
            <div class="flex flex-row justify-center">
                <div class="flex flex-row m-2">
                    <svg class="h-8 w-8 text-orange-500 mr-3"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />  <polyline points="17 6 23 6 23 12" /></svg>
                    <h2>Lorem ipsum dolor sit amet!</h2>
                </div>
                <div class="flex flex-row m-2">
                    <svg class="h-8 w-8 text-orange-500 mr-3"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="16 18 22 12 16 6" />  <polyline points="8 6 2 12 8 18" /></svg>
                    <h2>Lorem ipsum dolor sit amet!</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

