<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="anthor" content="SolomDev00">
    <meta name="description" content="Exam, Video to study before exam!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySchoolExam</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Nunito:wght@600;700&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen pt-2 md:pt-2 pb-2 px-2 md:px-0 overflow-hidden max-[600px]:pt-8 max-[600px]:overflow-auto" style="font-family:'Tajawal',sans-serif; direction: rtl;">
    <section class="lg:mt-10 flex flex-col justify-start items-center">
        <nav class="w-full px-6 flex flex-row justify-between items-center">
            <section class="flex flex-row justify-start items-center content-center gap-3 cursor-pointer">
                <a href="{{ route('room') }}">
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
                <h3>إسلام وائل فتح الله</h3>
            </section>
            <section class="cursor-pointer">
                <a href="./subscribe.html">
                    <img src="{{ asset('images/chevron.png') }}" alt="">
                </a>
            </section>
        </nav>
    </section>
    <section class="mt-10 mb-[20px] mr-6">
        <div class="bg-emerald-800 w-[200px] h-8 pr-2 rounded-sm rounded-tl-lg rounded-bl-lg">
            <h3 class="w-full text-white text-right text-2xl cursor-pointer">قائمة الفيديوهات :</h3>
        </div>
    </section>
    <main class="w-full px-6 flex flex-col justify-center items-center content-between max-[600px]:pb-0">
        <div id="link" onclick="popup('popUpDiv')" class="w-full h-20 my-3 px-6 rounded-lg bg-emerald-700 flex flex-row justify-between items-center cursor-pointer hover:scale-110 duration-500">
            <h3 class="text-white text-xl">الليلة الأولي</h3>
            <img class="w-13 h-14 rounded-lg" src="../images/cover.png" alt="">
        </div>
        <div id="link" onclick="popup('popUpDiv')" class="w-full h-20 my-3 px-6 rounded-lg bg-emerald-700 flex flex-row justify-between items-center cursor-pointer hover:scale-110 duration-500">
            <h3 class="text-white text-xl">الليلة الثانية</h3>
            <img class="w-13 h-14 rounded-lg" src="../images/cover_2.png" alt="">
        </div>
        <section class="w-full mt-8 mb-[1.0rem] px-6 flex flex-row justify-between items-center gap-5 max-[600px]:flex-col">
            <div class="border-4 border-dotted border-emerald-700 rounded-lg p-2 py-3 w-44 h-32 flex flex-col justify-center items-center cursor-pointer hover:bg-emerald-700 duration-500">
                <h3 class="font-bold text-center text-base text-black">الدعم الفني</h3>
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/nobciafz.json"
                    trigger="hover"
                    colors="primary:#121331,secondary:#08a88a"
                    style="width:130px;height:130px">
                </lord-icon>
            </div>
            <div class="border-4 border-dotted border-emerald-700 rounded-lg p-2 py-3 w-44 h-32 flex flex-col justify-center items-center cursor-pointer hover:bg-emerald-700 duration-500">
                <h3 class="font-bold text-center text-base text-black">اختبار الإلكتروني</h3>
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/wloilxuq.json"
                    trigger="hover"
                    colors="primary:#121331,secondary:#08a88a"
                    stroke="45"
                    state="hover-2"
                    style="width:130px;height:130px">
                </lord-icon>
            </div>
            <div class="border-4 border-dotted border-emerald-700 rounded-lg p-2 py-3 w-44 h-32 flex flex-col justify-center items-center cursor-pointer hover:bg-emerald-700 duration-500">
                <h3 class="font-bold text-center text-base text-black">ابعت سؤالك للمستر</h3>
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/zpxybbhl.json"
                    trigger="hover"
                    colors="primary:#121331,secondary:#08a88a"
                    stroke="45"
                    style="width:130px;height:130px">
                </lord-icon>
            </div>
        </section>
    </main>
    <section class="flex flex-col justify-center items-center overflow-hidden">
        <div id="blanket" class="w-full h-full" style="display:none;"></div>
        <div id="popUpDiv" class="lg:w-[750px] lg:h-[450px] bg-emerald-800 mb-[190px] p-1 max-[600px]:w[350px] max-[600px]:h[380px]" style="display:none;">
            <a href="#" class="text-red-700 text-xl mr-4 mb-3" onclick="popup('popUpDiv')">X</a>
            <div class="mt-5 text-center flex flex-col justify-center items-center">
                <section>
                    <h3 class="px-3 font-bold text-xl text-center text-white">الحصة الأولي من المراجعة النهائية</h3>
                </section>
                <section class="mt-10">
                    <div class="flex flex-row justify-between items-center gap-6">
                        <img class="w-7 h-7 rotate-180" src="{{ asset('images/chevron.png') }}" alt="">
                        <!-- Video!! -->
                        <video class="mb-2 w-[550px] rounded cursor-pointer max-[600px]:w-[250px]" src=""></video>
                        <img class="w-7 h-7" src="{{ asset('images/chevron.png') }}" alt="">
                    </div>
                </section>
            </div>
        </div>
    </section>
    <div id="map" class="w-full p-0 m-0"></div>
    <footer class="flex flex-row justify-between items-center max-[600px]:flex-col" style="direction:ltr;">
        <h5 class="px-1 font-bold text-xs cursor-pointer">© Mr/ Khaled Othman 2023 - All rights reserved.</h5>
        <h5 class="px-1 font-bold text-xs cursor-pointer">Developing By: Zenon Software!</h5>
    </footer>
</body>
    <!-- Main Js -->
    <script src="{{ asset('js/main.js') }}"></script>
</html>
