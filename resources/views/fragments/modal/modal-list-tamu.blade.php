<div class="modal fixed top-0 left-0 w-full h-full flex items-center justify-center">
    <div class="modal-dialog relative w-[350px] sm:w-[500px] pointer-events-none">
      <div
        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div
          class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
          <h5 class="text-xl font-medium leading-normal text-gray-800" id="title-modal">List semua tamu</h5>
          <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body relative p-4 h-[400px] overflow-y-auto">
            {{-- kalau mau make yield batasnya dari sini --}}
            <div class="p-4 md:p-5">
                @if(!$listTamu->isEmpty())
                <ol class="relative border-s border-gray-200 ms-3.5 mb-4 md:mb-5 text-black">    
                    @foreach ($listTamu as $item)
                    <li class="mb-10 ms-8">            
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white text-black">
                            {{$loop->index + 1}}
                        </span>
                        <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900">{{$item->nama_lengkap}}</h3>
                        <p>Ingin menemui {{$item->menemui}}</p>
                    </li>
                    @endforeach              
                </ol>
                @else
                <p class="text-center font-bold text-2xl">Belum ada tamu hari ini.</p>
                @endif
            </div>
            {{-- kalau mau make yield batasnya dari sini --}}
        </div>
        <div
          class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
          <button type="button" class="px-6
            py-2.5
            bg-purple-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-purple-700 hover:shadow-lg
            focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-purple-800 active:shadow-lg
            transition
            duration-150
            ease-in-out" data-bs-dismiss="modal"  onclick="modalList()">Tutup</button>
       </div>
      </div>
    </div>
</div>


  

