@extends('layouts.app')
@section('content')
    <div class="flex flex-col ">
        {{--  top section --}}
        <div class=" static flex flex-col w-screen h-screen bg-fixed bg-center bg-cover bg-[url('/image/bg.jpg')] bg-blend-darken brightness-50"></div>
        <div class="absolute flex bottom-60 left-16 text-amber-50 text-8xl">
            <h1>Escape with <br> laravel</h1>
        </div>
        <div class="absolute flex bottom-36 left-16">
            <button type="button" class="text-white bg-orange-600 py-3 px-20 rounded-xl hover:bg-orange-400  font-medium text-sm  text-center">
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
        <div class="flex flex-col bg-gray-900 bg-opacity-80 w-screen p-5 mt-36">
            <div class="flex justify-center text-lg font-bold mt-20 text-white"><h1>Improve your Laravel skill with us</h1></div>
            <div class="flex flex-row m-10 ">
                <div class="flex flex-col w-1/3 m-3 rounded-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-gray-900 hover:text-amber-50 duration-300">
                    <div class="flex justify-center mb-3 ">
                        <img src="{{url('image/empty.jpg')}}" class="rounded">
                    </div>
                    <div class="flex flex-row w-full">
                        <div class="flex text-white bg-orange-600 py-1 px-4 ml-2 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">
                            <p>Beginner</p>
                        </div>
                        <div class="flex justify-end">Students</div>
                    </div>
                    <div class="flex ml-7 font-bold ml-12">
                        <h2>Heading</h2>
                    </div>
                    <div class=" flex text-justify mr-6  ml-12 mb-10 justify-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="flex flex-col w-1/3 m-3 rounded-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-gray-900 hover:text-amber-50 duration-300">
                    <div class="flex justify-center mb-3 ">
                        <img src="{{url('image/empty.jpg')}}" class="rounded">
                    </div>
                    <div class="flex ml-7 font-bold ml-12">
                        <h2>Heading</h2>
                    </div>
                    <div class=" flex text-justify mr-6  ml-12 mb-10 justify-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="flex flex-col w-1/3 m-3 rounded-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-gray-900 hover:text-amber-50 duration-300">
                    <div class="flex justify-center mb-3 ">
                        <img src="{{url('image/empty.jpg')}}" class="rounded">
                    </div>
                    <div class="flex ml-7 font-bold ml-12">
                        <h2>Heading</h2>
                    </div>
                    <div class=" flex text-justify mr-6  ml-12 mb-10 justify-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
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
