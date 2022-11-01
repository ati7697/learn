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
        </div>
    </div>
    <div class="lg:flex lg:flex-row lg:justify-center md:flex md:flex-row md:justify-center sm:grid sm:grid-cols-2  mt-44 ">
        <div class="m-4 group">
            <div class="flex flex-row bg-gray-900 rounded-2xl w-max h-max">
                <div> <img src="{{url('image/gallaryp1.png')}}" class="flex lg:w-[200px] md:w-[300px] rounded-2xl  ease-out duration-200 group-hover:brightness-50"></div>
                <div class = "text-white  hidden group-hover:flex flex-col w-1/2 text-left ml-20 justify-center ">
                    <h1 class="font-bold">Larascape</h1>
                    <p>Game on! Explore our course selection <br> and elevate your coding skills to the next level!</p>
                    <button type="button" class=" m-2 text-white bg-gradient-to-r from-orange-500 to-red-700 py-1 px-2 hover:px-4 transition-all ease-in rounded-xl  hover:bg-orange-400 text-sm  text-center">
                        Play demo!
                    </button>
                </div>
            </div>
            <div class="hidden group-hover:flex flex-col absolute -bottom-52  space-y-1 p-2 bg-gradient-to-b from-transparent via-black to-black w-48">
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

    </div>


</div>


