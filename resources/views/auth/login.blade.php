<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="anthor" content="SolomDev00">
    <meta name="description" content="Exam, Video to study before exam!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySchoolExam</title>
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- FontFamily_Basic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Nunito:wght@600;700&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen pt-8 md:pt-6 pb-6 px-2 md:px-0 flex flex-col justify-center items-center overflow-hidden max-[600px]:overflow-auto" style="font-family:'Tajawal',sans-serif; direction: rtl;">
    <section class="flex items-center content-center cursor-pointer">
        <a href="./src/pages/subscribe.html">
            <img class="mt-3 hover:scale-110 duration-700" style="width:90px; height:90px;" src="{{ asset('images/logo.png') }}" alt="">
        </a>
    </section>
    <main class="body-bg max-w-px mx-auto p-6 md:p-12 mt-2 mb-8 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center text-white">الدخول الي الحساب</h3>
            <p class="text-zinc-100 pt-2 text-center" style="color: beige;">يرجي كتابة كود الدخول المستلم من السكرتارية</p>
        </section>
        <section class="mt-10">
            <form class="flex flex-col justify-center" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- PhoneValue -->
                <div class="mb-6 pt-3" style="background-color: #019064;">
                    <input type="user" name="number" id="user" placeholder="رقم الهاتف" class="w-full text-gray-700 border-b focus:outline-none border-emerald-500 focus:border-emerald-600 transition duration-500 px-1 pb-3" style="background-color: #019064;">
                </div>
                @error('number')
                {{--  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>  --}}
                <div class="flex justify-center mb-2">
                    <h4 class="w-fit h-6 p-0.5 rounded bg-slate-500 text-sm pb-2 text-red-900 font-bold hover:text-gery-700">{{ $message }}</h4>
                </div>
            @enderror
                <!-- PasswordValue -->
                <div class="mb-6 pt-3" style="background-color: #019064;">
                    <input type="password" name="password" id="pass" placeholder="كلمة السر" class="w-full text-gray-700 border-b focus:outline-none border-emerald-500 focus:border-emerald-600 transition duration-500 px-1 pb-3" style="background-color: #019064;">
                </div>
                @error('password')
                {{--  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>  --}}
                <div class="flex justify-center mb-2">
                    <h4 class="w-fit h-6 p-0.5 rounded bg-slate-500 text-sm pb-2 text-red-900 font-bold hover:text-gery-700">{{ $message }}</h4>
                </div>
            @enderror
                <button class="mb-6 mt-6 bg-white hover:bg-emerald-500 text-black font-bold py-2 rounded-lg shadow-lg hover:shadow-xl transition duration-200" type="submit">تسجيل الدخول!</button>
                <!-- RegisterBtn -->
                <div class="flex justify-center">
                    <a href="{{ route('register') }}" class="text-sm text-white hover:text-gery-700 hover:underline">إنشاء حساب جديد ؟</a>
                </div>
            </form>
        </section>
    </main>
    <hr style="width: 200px; height: 2px; background-color: black; margin-bottom: 15px;">
    <section style="width:200px;">
        <h3 class="text-center mb-3">تواصل معنا</h3>
        <div class="flex flex-row justify-between items-center">
            <div class="cursor-pointer">
                <img class="hover:scale-110 duration-700" style="width: 44px; height: 44px;" src="{{ asset('images/facebook.png') }}" alt="">
                <h5 class="text-center text-gray-700" style="font-size: 12px;">فيسبوك</h5>
            </div>
            <div class="cursor-pointer">
                <img class="hover:scale-110 duration-700" style="width: 44px; height: 44px;" src="{{ asset('images/whatsapp.png') }}" alt="">
                <h5 class="text-center text-gray-700" style="font-size: 12px;">السكرتيرة</h5>
            </div>
            <div class="cursor-pointer">
                <img class="hover:scale-110 duration-700" style="width: 44px; height: 44px;" src="{{ asset('images/youtube.png') }}" alt="">
                <h5 class="text-center text-gray-700" style="font-size: 12px;">يوتيوب</h5>
            </div>
        </div>
    </section>
</body>
</html>
