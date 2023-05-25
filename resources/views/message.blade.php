<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="anthor" content="SolomDev00" />
    <meta name="description" content="Exam, Video to study before exam!" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MySchoolExam</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amiri&family=Nunito:wght@600;700&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body
    class="min-h-screen pt-2 md:pt-2 pb-2 px-2 md:px-0 overflow-hidden max-[600px]:pt-8 max-[600px]:overflow-auto"
    style="font-family: 'Tajawal', sans-serif; direction: rtl"
  >
    <section class="lg:mt-10 flex flex-col justify-start items-center">
      <nav class="w-full px-6 flex flex-row justify-between items-center">
        <section
          class="flex flex-row justify-start items-center content-center gap-3 cursor-pointer"
        >
          <a href="./room.html">
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              class="bg-emerald-700 border-2 border-emerald-700 rounded-full"
              src="https://cdn.lordicon.com/dxjqoygy.json"
              trigger="hover"
              colors="primary:#121331,secondary:#08a88a"
              stroke="45"
              state="hover-nodding"
              style="width: 54px; height: 54px"
            >
            </lord-icon>
          </a>
          <div class="flex flex-row items-center gap-3">
            <h3 class="text-xl">{{ auth()->user()->name }}</h3>
            <a href="#">
              <img class="log w-6 h-6" src="{{ asset('images/logout.png') }}" alt="" />
            </a>
          </div>
        </section>
        <section class="cursor-pointer">
          <a href="./subscribe.html">
            <img src="{{ asset('images/chevron.png') }}" alt="" />
          </a>
        </section>
      </nav>
    </section>
    <section
      class="min-h-[66vh] md:pt-6 pb-6 px-2 md:px-0 flex flex-col justify-center items-center overflow-hidden max-[600px]:overflow-auto"
    >
      <main
        class="body-bg max-w-px mx-auto p-6 md:p-12 mt-2 mb-8 rounded-lg shadow-2xl text-center"
      >
        <h3 class="text-xl font-bold text-black mb-6">
          {{ $message }}
        </h3>
      </main>
    </section>
    <div id="map" class="w-full p-0 m-0 max-[600px]:mt-0"></div>
    <footer
      class="flex flex-row justify-between items-center max-[600px]:flex-col"
      style="direction: ltr"
    >
      <h5 class="px-1 font-bold text-xs cursor-pointer">
        © Mr/ Khaled Othman 2023 - All rights reserved.
      </h5>
      <h5 class="px-1 font-bold text-xs cursor-pointer">
        Developing By: Zenon Software!
      </h5>
    </footer>
  </body>
  <!-- Main Js -->
  <script src="{{ asset('js/main.js') }}"></script>
</html>
