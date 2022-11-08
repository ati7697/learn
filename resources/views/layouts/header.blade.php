<nav class="bg-gray-900 font-nav">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
                <div>
                    <!-- Website Logo -->
                    <a href="https://codinglabs.com.au/" class="flex items-center py-4 px-2" target="_blank">
                        <img src="https://d2wks4gidu9630.cloudfront.net/9bfe4af0-d7a0-4399-930f-d93ec6019812/svg/codinglabs-logo-stacked.svg"  alt="Logo" class="h-6 mr-2">
                    </a>
                </div>

            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3 ">
                <a href="{{ route('login') }}" class="py-2 px-2 font-medium text-white bg-orange-600 rounded hover:bg-orange-400 transition duration-300">Log In</a>
                <a href="{{ route('register') }}" class="py-2 px-2 text-gray-600 font-medium text-white rounded hover:text-orange-400 transition duration-300">Sing up</a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-orange-400"
                         x-show="!showMenu"
                         fill="none"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="2"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>


