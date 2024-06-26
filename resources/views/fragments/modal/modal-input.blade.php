<div class="modal fixed z-50 top-0 left-0 w-full h-full flex items-center justify-center">
  <div class="modal-dialog relative w-[350px] sm:w-[500px] pointer-events-none max-h-[90vh] overflow-y-auto">
      <div
          class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
          <div
              class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
              <h5 class="text-xl font-medium leading-normal text-gray-800" id="title-modal">Lengkapi form</h5>
              <button type="button"
                  class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                  data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="form_list" action="/add/data" method="POST" enctype="multipart/form-data">
              <div class="modal-body relative p-4">
                  {{-- kalau mau make yield batasnya dari sini --}}
                  @csrf

                  <div class="mb-4">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                          Nama lengkap
                      </label>
                      <input name="nama_lengkap"
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                          id="Nama_lengkap" type="text" placeholder="Nama lengkap" required>
                  </div>
                  <div class="mb-4">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                          Instansi
                      </label>
                      <input name="asal_tamu"
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                          id="asal_tamu" type="text" placeholder="Ex. SMK 4/Pt. Mencari jodoh" required>
                  </div>
                  <div class="mb-4">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                          Bertemu
                      </label>
                      <input name="menemui"
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                          id= "menemui" type="text" placeholder="Ex. Pak John" required>
                  </div>
                  <div class="mb-4">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                          Keperluan
                      </label>
                      <textarea name="alasan" placeholder="Alasan saya adalah..."
                          class="resize-none rounded-md shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                          required></textarea>
                  </div>
                  <div class="mb-4">
                    <p class="text-sm font-bold">Ambil Foto:</p>
                    <input type="hidden" id="photoInput" name="foto_tamu">
                    <video id="video" width="320" height="240" autoplay></video>
                    <canvas id="canvas" width="320" height="240" style="display: none;"></canvas>
                    <img id="photo" src="#" alt="Your photo" style="display: none;">
                  </div>
                  {{-- sampek sini --}}
              </div>
              <div
                  class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                  <button type="button"
                      class="px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                      data-bs-dismiss="modal" id="closeBtn">Tutup</button>
                  <button type="button" id="captureBtn"
                      class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Ambil
                      Foto</button>
                  <button type="button" id="submitBtn" data-bs-dismiss="modal"
                      class="hidden px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Lanjut</button>
              </div>
          </form>
      </div>
  </div>
</div>