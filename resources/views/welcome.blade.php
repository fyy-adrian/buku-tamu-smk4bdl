<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  @vite('resources/css/app.css')
</head>
<body>
  @include("fragments.header")
  <main  id="body-home" class="header">
      <div class="header-container min-h-screen flex flex-col md:flex-row-reverse items-center px-10 container m-auto">
          <div class="px-8 py-6 w-full md:w-3/6 mt-20 md:mt-1">
              <img src="./img/scrum_board_re_wk7v.svg" class="w-full" alt="">
          </div>
          <div class="h-full w-full md:w-3/6">
              <h1 class="text-2xl mt-2 md:mt-0 sm:text-4xl md:text-6xl font-bold leading-tight">
                  Proin in <span class="text-purple-600">massa</span> sed orci sed mattis id et, men
                  <img src="./img/happy.png" class="h-8 w-8 md:h-12 md:w-12 inline-block" alt="">
              </h1>
              <p class="text-gray-600 mb-6 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam ratione quas, dolor repellat necessitatibus assumenda maiores!</p>
              <button onclick="modalInput()" class="px-6 py-2 text-sm font-semibold text-white bg-purple-600 mr-2 rounded-md">Temui guru</button>
          </div>
         
      </div>
  </main>
  {{-- modal start --}}
  <div class="hidden" id="modalList">
    @include('fragments.modal.modal-list-tamu')
  </div>
  <div class="hidden" id="modalInput">
    @include('fragments.modal.modal-input')
  </div>
  {{-- modal end --}}

  @include('fragments.footer')
  <script src="js/modal.js"></script>
  <script>
      const nav = document.getElementById("nav");
      const menu = document.querySelector(".menu")
      window.addEventListener("scroll", () => {
          let offset = window.pageYOffset;
          if(offset > 50) {
              if(!nav.classList.contains("nav-bg-show")) {
                  nav.classList.add("nav-bg-show")
              }
          } else {
              if(nav.classList.contains("nav-bg-show")) {
                  nav.classList.remove("nav-bg-show")
              }
          }
      })

      const navOpen = () => menu.classList.add("active");
      const navClose = () => menu.classList.remove("active");

  </script>
</body>
</html>