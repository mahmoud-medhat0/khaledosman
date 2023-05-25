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
            <section class="flex flex-row justify-start items-center content-center gap-3 cursor-pointer">
                <a href="./room.html">
                    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                    <lord-icon
                        class="bg-emerald-700 border-2 border-emerald-700 rounded-full"
                        src="https://cdn.lordicon.com/dxjqoygy.json"
                        trigger="hover"
                        colors="primary:#121331,secondary:#08a88a"
                        stroke="45"
                        state="hover-nodding"
                        style="width:54px;height:54px">
                    </lord-icon>
                </a>
                <h3>{{ Auth::user()->name }}</h3>
            </section>
            <section class="cursor-pointer">
                <button onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <img class="log w-6 h-6" src="{{ asset('images/logout.png') }}" alt="" />
                </button>
            </section>
        </nav>
    </section>
    <section class="mt-12 mb-[20px] mr-6">
      <div class="mt-5 text-center flex flex-col justify-center items-center">
        <section>
          <h3 class="font-bold text-xl text-center text-emerald-600">
            {{ $lesson->title }}
          </h3>
        </section>
        <section class="mt-14">
          <div class="flex flex-row justify-between items-center gap-6">
            <img
              class="w-7 h-7 rotate-180"
              src="{{ asset('images/chevron.png') }}"
              alt=""
            />
            <!-- Video!! -->
            <div controls id="segmented-video"
              class="mb-2 w-[550px] rounded cursor-pointer max-[600px]:w-[250px]"
              src=""
            ></div>
            <img class="w-7 h-7" src="{{ asset('images/chevron.png') }}" alt="" />
          </div>
        </section>
      </div>
    </section>
    <div id="map" class="w-full p-0 m-0 mt-[122px] max-[600px]:mt-[50px]"></div>
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
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
  </body>
  <!-- Main Js -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route("lesson.play",$name) }}', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var video = document.getElementById('segmented-video');
                    var player = new Playerjs({id:"segmented-video", file:URL.createObjectURL(xhr.response),title: "{{ $lesson->title }}",wid:"202020209999999999999999999999999999999999999999999999999999999999999999999"});
                } else if (xhr.readyState === 4) {
                    console.error('Error:', xhr.status);
                }
            };
            xhr.responseType = 'blob';
            xhr.send(JSON.stringify({ segment: 'segment001.mp4' }));
        });
        document.addEventListener("keydown", function(event) {
            if (event.keyCode == 83 && (event.ctrlKey || event.metaKey)) {
              event.preventDefault();
            }
            if (event.keyCode == 123) {
                event.preventDefault();
              }
            if (event.keyCode == 89 && (event.ctrlKey || event.metaKey)) {
                event.preventDefault();
              }

            if (event.keyCode == 85 && (event.ctrlKey || event.metaKey)) {
                event.preventDefault();
            }
          });
          document.addEventListener("devtoolschange", function(event) {
            if (event.detail.open) {
              console.log("Developer tools are open");
            } else {
              console.log("Developer tools are closed");
            }
          });
          document.addEventListener("contextmenu", function(event) {
            event.preventDefault();
          });
  </script>
  <script>
    const isDevToolsOpened = () => {
      const devtools = window.devtools;
      return devtools && devtools.panels && devtools.panels.elements;
    };
    const disableDevTools = () => {
      if (isDevToolsOpened()) {
        alert('disabled');
        devtools.panels.elements.close();
      }
    };

    window.addEventListener('DOMContentLoaded', disableDevTools);
  </script>
  <script src="{{ asset('js/playerjs.js') }}" async></script>
</html>
