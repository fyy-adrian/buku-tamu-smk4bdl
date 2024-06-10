<div class="modal fixed top-0 left-0 w-full h-full flex items-center justify-center">
    <div class="modal-dialog relative w-[350px] sm:w-[500px] pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="title-modal">Verifikasi wajah</h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                {{-- kalau mau make yield batasnya dari sini --}}

                <video id="video" width="320" height="240" autoplay></video>
                <p class="text-sm font-bold">Hasil Foto:</p>
                <canvas id="canvas" width="320" height="240" style="display: none;"></canvas>
                <img id="photo" src="#" alt="Your photo" style="display: none;">

                {{-- sampek sini --}}
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button" id="captureBtn"
                    class="px-6 
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out
        ml-1">Ambil Foto</button>
                <button type="button" id="submitBtn"
                    class="
                    hidden
                    px-6 
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out
            ml-1">Kirim</button>
            </div>
        </div>
    </div>
</div>
