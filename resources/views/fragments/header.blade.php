<nav class="w-full px-0 md:px-10 py-3 {{Request::is('admin') ? '' : 'fixed'}} top-0 left-0 right-0 z-10" id="nav">
    <div class="flex justify-between items-center container m-auto px-4 md:px-10">
        <a href="#" class="logo text-md md:text-2xl font-bold text-purple-600">  
          <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
            <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
            <path
              class="plane-take-off"
              d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
            />
          </svg>
          <span class="inline-block">{{Request::is('admin') ? 'Dashboard Admin' : 'Buku Tamu'}}</span>
        </a>
        <div class="menu">
            @if (!Request::is('admin'))
                <button class="hidden nav-close-btn mt-4 ml-5 p-1 focus:outline-none" onclick="navClose()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <ul class="flex">
                    <li><a href="#" class="px-4 py-2 mx-1 text-md font-semibold text-gray-800 hover:text-purple-600">Home</a></li>
                    <li><a href="#" class="px-4 py-2 mx-1  text-md font-semibold text-gray-800 hover:text-purple-600" onclick="modalInput()" >Temui guru</a></li>
                    <li><a href="#" class="px-4 py-2 mx-1 text-md font-semibold text-gray-800 hover:text-purple-600" onclick="modalList()">List tamu</a></li>
                </ul> 
            @endif
            
        </div>
        <div>
            @if (Request::is('admin'))
                <a href="/admin" class="px-2 md:px-4 py-1 md:py-2 text-sm transition-all font-semibold text-purple-500 hover:text-white hover:bg-purple-500 bg-gray-100 rounded-md">Logout</a>
            @else
                <a href="/admin" class="px-2 md:px-4 py-1 md:py-2 text-sm transition-all font-semibold text-purple-500 hover:text-white hover:bg-purple-500 bg-gray-100 rounded-md">Admin</a>
            @endif
            <button class="hidden nav-open-btn ml-1 focus:outline-none" onclick="navOpen()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>
</nav>