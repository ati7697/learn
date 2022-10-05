<div class=" static flex flex-col w-screen h-screen bg-fixed bg-center bg-cover bg-[url('/image/background.png')] h-max topSection " id="bgDiv">
    <div class="m-10 mt-36 space-y-4">
        <div class=" text-amber-50 lg:text-3xl md:text-3xl sm:text-xl xs:text-xl font-bold">
            <h1>Learn with Coding Labs</h1>
        </div>
        <div class=" text-amber-50 ">
            <p>
                Game on! Explore our course selection <br> and elevate your coding skills to the next level!
            </p>
        </div>
        <div class="lg:visible md:visible  sm:invisible xs:invisible">
            <div class="  ">
                <button type="button" class=" text-white bg-gradient-to-r from-orange-500 to-red-700 py-3 px-6 hover:px-20 transition-all ease-in rounded-xl  hover:bg-orange-400  font-medium text-sm  text-center">
                    Browse Courses
                </button>
            </div>
        {{--    <div class="absolute bottom-20 left-16 text-black bg-white py-1 px-4 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">--}}
        {{--        <p>Beginner</p>--}}
        {{--    </div>--}}
        {{--    <div class="absolute bottom-12 left-16 text-white py-1 px-4 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">--}}
        {{--        <p>8 hours</p>--}}
        {{--    </div>--}}
        {{--    <div class="absolute bottom-4 left-16 text-white py-1 px-4 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">--}}
        {{--        <p>Certificate</p>--}}
        {{--    </div>--}}
        </div>
    </div>
    <div class="lg:flex lg:flex-row lg:justify-center md:flex md:flex-row md:justify-center sm:grid sm:grid-cols-2  mt-60">
        <div class="m-4 group"><img src="{{url('image/gallaryp1.png')}}" class="lg:w-[200px] md:w-[300px] rounded-2xl group-hover:scale-150 transition ease-out duration-200 group-hover:brightness-50">
            <div class="hidden group-hover:flex flex-col absolute -bottom-80 left-40 space-y-2 p-2 bg-gradient-to-b from-transparent via-black to-black w-60">
                <div class="bg-orange-600 py-1 px-2 rounded hover:bg-orange-400 text-white w-fit ">
                    <p>Laravel</p>
                </div>
                <div class="text-gray-500  text-sm   hover:text-white">
                    <p>8 hours</p>
                </div>
                <div class="text-gray-500  text-sm hover:text-white">
                    <p>Beginner</p>
                </div>
            </div>
        </div>
        <div class="m-4 group"><img src="{{url('image/gallaryp2.png')}}" class="lg:w-[200px] md:w-[300px] rounded-2xl group-hover:scale-150 transition ease-out duration-200 group-hover:brightness-50">
            <div class="hidden group-hover:flex flex-col absolute -bottom-80 left-96 space-y-2 p-2 w-72 shadow shadow-lg shadow-black">
                <div class="bg-orange-600 py-1 px-6 rounded hover:bg-orange-400 text-white w-fit ">
                    <p>Vue</p>
                </div>
                <div class="text-gray-500  text-sm   hover:text-white">
                    <p>8 hours</p>
                </div>
                <div class="text-gray-500  text-sm hover:text-white">
                    <p>Beginner</p>
                </div>
            </div>
        </div>
        <div class="m-4 group"><img src="{{url('image/gallaryp3.png')}}" class="lg:w-[200px] md:w-[300px] rounded-2xl group-hover:scale-150 transition ease-out duration-200 group-hover:brightness-50">
            <div class="hidden group-hover:flex flex-col absolute -bottom-80 left-[610px] space-y-2 p-2 w-72 shadow shadow-lg shadow-black">
                <div class="bg-orange-600 py-1 px-2 rounded hover:bg-orange-400 text-white w-fit ">
                    <p>Inertia</p>
                </div>
                <div class="text-gray-500  text-sm   hover:text-white">
                    <p>8 hours</p>
                </div>
                <div class="text-gray-500  text-sm hover:text-white">
                    <p>Beginner</p>
                </div>
            </div>
        </div>
        <div class="m-4 group"><img src="{{url('image/gallaryp4.png')}}" class="lg:w-[200px] md:w-[300px] rounded-2xl group-hover:scale-150 transition ease-out duration-200 group-hover:brightness-50">
            <div class="hidden group-hover:flex flex-col absolute -bottom-80 right-32 space-y-2 p-2 w-72 shadow shadow-lg shadow-black">
                <div class="bg-orange-600 py-1 px-2 rounded hover:bg-orange-400 text-white w-fit ">
                    <p>LiveWire</p>
                </div>
                <div class="text-gray-500  text-sm   hover:text-white">
                    <p>8 hours</p>
                </div>
                <div class="text-gray-500  text-sm hover:text-white">
                    <p>Beginner</p>
                </div>
            </div>
        </div>
    </div>
</div>
