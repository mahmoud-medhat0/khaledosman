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
    class="min-h-screen md:pb-6 px-2 md:px-0 flex flex-col justify-center items-center overflow-hidden max-[600px]:overflow-auto"
    style="font-family: 'Tajawal', sans-serif; direction: rtl"
  >
    <main
      class="body-bg max-w-px mx-auto p-6 md:p-12 my-10 rounded-lg shadow-2xl"
    >
      <section>
        <h3 class="font-bold text-2xl text-center text-white">
          إنشاء حساب جديد
        </h3>
        <p class="text-zinc-100 pt-2 text-center" style="color: beige">
          يرجي كتابة كود الدخول المستلم من السكرتارية
        </p>
      </section>
      <section class="mt-10">
        <form class="flex flex-col justify-center" method="POST" action="{{ route('register') }}">
            @csrf
          <div class="mb-6 pt-3" style="background-color: #019064">
            <input
              type="text" name="name"
              id="user" value="{{ old('name') }}"
              placeholder="اسم الطالب"
              class="w-full text-gray-700 border-b focus:outline-none border-emerald-500 focus:border-emerald-600 transition duration-500 px-1 pb-3"
              style="background-color: #019064"
            />
          </div>
          @error('name')
          <div class="flex justify-center mb-2">
              <h4 class="w-fit h-6 p-0.5 rounded bg-slate-500 text-sm pb-2 text-red-900 font-bold hover:text-gery-700">{{ $message }}</h4>
          </div>
      @enderror
          <div class="mb-6 pt-3" style="background-color: #019064">
            <input
              type="text" name="NationalId"
              id="gov" value="{{ old('NationalId') }}"
              placeholder="رقم القومي"
              class="w-full text-gray-700 border-b focus:outline-none border-emerald-500 focus:border-emerald-600 transition duration-500 px-1 pb-3"
              style="background-color: #019064"
            />
          </div>
          @error('NationalId')
          <div class="flex justify-center mb-2">
              <h4 class="w-fit h-6 p-0.5 rounded bg-slate-500 text-sm pb-2 text-red-900 font-bold hover:text-gery-700">{{ $message }}</h4>
          </div>
      @enderror
          <div class="mb-6 pt-3" style="background-color: #019064">
            <input
              type="text" name="number"
              id="phone" value="{{ old('number') }}"
              placeholder="رقم الهاتف"
              class="w-full text-gray-700 border-b focus:outline-none border-emerald-500 focus:border-emerald-600 transition duration-500 px-1 pb-3"
              style="background-color: #019064"
            />
          </div>
          @error('number')
          <div class="flex justify-center mb-2">
              <h4 class="w-fit h-6 p-0.5 rounded bg-slate-500 text-sm pb-2 text-red-900 font-bold hover:text-gery-700">{{ $message }}</h4>
          </div>
      @enderror
          <div class="mb-6 pt-3" style="background-color: #019064">
            <input type="password" name="password" id="pass" placeholder="كلمة السر"
              class="w-full text-gray-700 border-b focus:outline-none border-emerald-500 focus:border-emerald-600 transition duration-500 px-1 pb-3"
              style="background-color: #019064"
            />
          </div>
          @error('password')
          <div class="flex justify-center mb-2">
              <h4 class="w-fit h-6 p-0.5 rounded bg-slate-500 text-sm pb-2 text-red-900 font-bold hover:text-gery-700">{{ $message }}</h4>
          </div>
      @enderror
          <div class="mb-6 pt-3" style="background-color: #019064">
            <input type="password" name="password_confirmation" id="pass" placeholder="تاكيد كلمة السر"
              class="w-full text-gray-700 border-b focus:outline-none border-emerald-500 focus:border-emerald-600 transition duration-500 px-1 pb-3"
              style="background-color: #019064"
            />
          </div>
          @error('password_confirmation')
          <div class="flex justify-center mb-2">
              <h4 class="w-fit h-6 p-0.5 rounded bg-slate-500 text-sm pb-2 text-red-900 font-bold hover:text-gery-700">{{ $message }}</h4>
          </div>
      @enderror
          <button
            class="mb-6 mt-6 bg-white hover:bg-emerald-500 text-black font-bold py-2 rounded-lg shadow-lg hover:shadow-xl transition duration-200"
            type="submit">إنشاء الحساب!
          </button>
          <div class="flex justify-center">
            <a
              href="{{ route('login') }}"
              class="text-sm text-white hover:text-gery-700 hover:underline"
              >تسجيل الدخول ؟</a
            >
          </div>
        </form>
      </section>
    </main>
  </body>
</html>
