<nav class="bg-black font-nav">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div>
                <!-- Website Logo -->
                <a href="https://codinglabs.com.au/" class="flex items-center py-4 px-2" target="_blank">
                    <img src="https://d2wks4gidu9630.cloudfront.net/9bfe4af0-d7a0-4399-930f-d93ec6019812/svg/codinglabs-logo-stacked.svg"  alt="Logo" class="h-6 mr-2">
                </a>
            </div>
            @if (auth()->check())
                <div class="m-3">
                    @auth()
                        <p class="text-white">Welcome {{auth()->user()->name}}</p>
                    @endauth
                </div>
            @else
                <div class="flex flex-row justify-end">
                    <a href="{{ route('login') }}" class="p-2 font-medium text-white bg-orange-600 rounded hover:bg-orange-400 transition duration-300 mt-3 ">Log In</a>
                    <a href="{{ route('register') }}" class="p-2 text-gray-600 font-medium text-white rounded hover:text-orange-400 transition duration-300 m-2 mt-3">Sing up</a>
                </div>
            @endif
        </div>
    </div>
</nav>


