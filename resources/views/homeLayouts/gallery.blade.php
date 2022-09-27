<div class=" static flex flex-col w-screen h-screen bg-fixed bg-center bg-cover bg-[url('/image/bg.jpg')] bg-blend-darken brightness-50 topSection" id="bgDiv"></div>
<div class="absolute lg:bottom-52  left-16 md:bottom-52 sm:bottom-20 text-amber-50 lg:text-8xl md:text-8xl font-title sm:text-6xl xs:text-6xl">
    <h1>Escape with <br> laravel</h1>
</div>
<div class="lg:visible md:visible  sm:invisible xs:invisible">
    <div class="absolute bottom-36 left-16 ">
        <button type="button" class="text-white bg-orange-600 py-3 px-10 hover:px-20 transition-all ease-in rounded-xl  hover:bg-orange-400  font-medium text-sm  text-center">
            Play demo
        </button>
    </div>
    <div class="absolute bottom-20 left-16 text-black bg-white py-1 px-4 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">
        <p>Beginner</p>
    </div>
    <div class="absolute bottom-12 left-16 text-white py-1 px-4 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">
        <p>8 hours</p>
    </div>
    <div class="absolute bottom-4 left-16 text-white py-1 px-4 rounded-xl hover:bg-orange-400  font-light text-sm  text-center">
        <p>Certificate</p>
    </div>
</div>
<div class="lg:flex lg:flex-row  md:flex md:flex-row sm:grid sm:grid-cols-2  justify-items-center">
    <div class="m-4"><button onmouseover="changeBackgroundImage('image/bg.jpg')"><img src="{{url('image/bg.jpg')}}" class="lg:w-[300px] md:w-[300px] rounded-2xl"> </button> </div>
    <div class="m-4"><button onmouseover="changeBackgroundImage('image/image2.jpg')"><img src="{{url('image/image2.jpg')}}" class="lg:w-[300px] md:w-[300px] rounded-2xl"> </button> </div>
    <div class="m-4"> <button onmouseover="changeBackgroundImage('image/image2.jpg')"><img src="{{url('image/image2.jpg')}}" class="lg:w-[300px] md:w-[300px] rounded-2xl"> </button></div>
    <div class="m-4"> <button onmouseover="changeBackgroundImage('image/bg.jpg')"><img src="{{url('image/bg.jpg')}}" class="lg:w-[300px] md:w-[300px] rounded-2xl"></button></div>
</div>
