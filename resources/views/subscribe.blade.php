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
<body class="min-h-screen pt-8 md:pt-6 pb-2 px-2 md:px-0 overflow-hidden max-[600px]:pt-8 max-[600px]:overflow-auto" style="font-family:'Tajawal',sans-serif; direction: rtl;">
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
                <h3>إسلام وائل فتح الله</h3>
            </section>
            <section class="cursor-pointer">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/chevron.png') }}" alt="">
                </a>
            </section>
        </nav>
    </section>
    <section class="mt-10 mb-[20px] mr-6">
        <div class="bg-emerald-800 w-[230px] h-8 pr-2 rounded-sm rounded-tl-lg rounded-bl-lg">
            <h3 class="w-full text-white text-right text-2xl cursor-pointer">الإشتراك في المنصة :</h3>
        </div>
    </section>
    <main class="w-full px-6 flex flex-col justify-center items-center content-between max-[600px]:pb-0">
        <section class="w-full mt-16 mb-[3.8rem] px-6 flex flex-row justify-between items-center gap-5 max-[600px]:flex-col">
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
            <div id="link" onclick="popup('popUpDiv')" class="border-4 border-dotted border-emerald-700 rounded-lg p-2 py-3 w-44 h-32 flex flex-col justify-center items-center cursor-pointer hover:bg-emerald-700 duration-500">
                <h3 class="font-bold text-center text-base text-black">المراجعة النهائية</h3>
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/wxnxiano.json"
                    trigger="hover"
                    colors="primary:#08a88a,secondary:#121331"
                    state="hover"
                    style="width:100px;height:100px">
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
    <section class="flex flex-col justify-center items-center">
        <div id="blanket" class="w-full h-full" style="display:none;"></div>
        <div id="popUpDiv" class="bg-emerald-800 mb-[190px] p-1" style="display:none; height: 350px; width: 350px;">
            <a href="#" class="text-red-700 text-xl mr-4 mb-3" onclick="popup('popUpDiv')">X</a>
            <div class="mt-7 text-center flex flex-col justify-center items-center">
                <section>
                    <h3 class="px-3 font-bold text-xl text-center text-white">برجاء ادخال كود الشراء لتشغيل الحصة</h3>
                </section>
                <section class="mt-10">
                    <form class="flex flex-col justify-center" method="POST" action="#">
                        <div class="mb-6 pt-3 rounded-md text-white" style="background-color: #019064;">
                            <input type="user" id="user" placeholder="كود الحصة" class="w-[300px] pl-1 pr-1 text-white border-b rounded-md focus:outline-none border-emerald-500 focus:border-emerald-600 transition duration-500 px-1 pb-3" style="background-color: #019064;">
                        </div>
                        <button class="mb-6 mt-6 bg-white hover:bg-emerald-500 text-black font-bold py-2 rounded-lg shadow-lg hover:shadow-xl transition duration-200" type="submit">تسجيل الدخول!</button>
                    </form>
                </section>
            </div>
        </div>
    </section>
    <div id="mapSub" class="w-full p-0 m-0"></div>
    <footer class="p-0 m-0 flex flex-row justify-between items-center max-[600px]:flex-col" style="direction:ltr;">
        <h5 class="px-1 font-bold text-xs cursor-pointer">© Mr/ Khaled Othman 2023 - All rights reserved.</h5>
        <h5 class="px-1 font-bold text-xs cursor-pointer">Developing By: Zenon Software!</h5>
    </footer>
</body>
    <!-- Main Js -->
    <script src="{{ asset('js/main.js') }}"></script>
</html>
