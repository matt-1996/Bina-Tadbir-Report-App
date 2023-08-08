<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> تنظیمات کاربری</title>
    @include('./components/head')
    @section('./components/head')
</head>
<body dir="rtl">
    <div>

        @include('./components/header')
        @section('./components/header')
    </div>
    <!-- component -->
    <div class="min-h-screen rtl bg-gray-100 py-6 flex flex-col justify-center sm:py-12">


<section class="max-w-4xl lg:w-3/4 p-6 mx-auto bg-gray-800 rounded-md shadow-md dark:bg-gray-800 mt-20">
    <h1 class="text-xl font-bold text-gray-500 capitalize dark:text-gray-500"> پروفایل</h1>
    <form>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-500 dark:text-gray-200" for="username">نام شرکت</label>
                <input id="name" disabled value="{{$user->name}}" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-500 dark:text-gray-200" for="username">تلفن </label>
                <input id="name"  type="text" disabled value="{{$user->phone}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            {{-- <div>
                <label class="block text-sm font-medium text-gray-500">
                تصویر نمایه
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-500" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative mr-7 p-2 cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                  </div>
                  <p class="text-xs text-gray-500">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
            </div>
            </div> --}}
            <div>
                <label class="text-gray-500 dark:text-gray-200" for="passwordConfirmation"> دسترسی</label>
            @if ($user->isAdmin == 1)
            <input id="name"  type="text" disabled value="مدیر" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            @endif
            @if ($user->isAdmin == 0)
            <input id="name"  type="text" disabled value="مشتری" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            @endif
            </div>
            </div>
            <div>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-500 dark:text-gray-200" for="username">ایمیل</label>
                <input id="username" disabled value="{{$user->email}}" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            {{-- <div>
                <label class="text-gray-500 dark:text-gray-200" for="password">رمز ورود</label>
                <input id="password" required type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div> --}}

            {{-- <div>
                <label class="text-gray-500 dark:text-gray-200" for="passwordConfirmation"> تائید رمز ورود</label>
                <input id="passwordConfirmation" required type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div> --}}
            {{-- <div>
                <label class="text-gray-500 dark:text-gray-200" for="passwordConfirmation">رنگ نمایه</label>
                <input id="color" type="color" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div> --}}
            <div>
                <label class="text-gray-500 dark:text-gray-200" for="passwordConfirmation"> شهر</label>
                <input id="username" disabled value="{{$user->city}}" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-500 dark:text-gray-200" for="username">آدرس </label>
                <textarea id="textarea" disabled value="{{$user->address}}" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
            <div>
                <label class="text-gray-500 dark:text-gray-200" for="passwordConfirmation">توضیحات</label>
                <textarea id="textarea" type="textarea" disabled value="{{$user->description}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
        </div>
        {{-- <div class="flex justify-end mt-6">
            <button class="px-6 py-2 w-full bg-blue-500 leading-5 text-white transition-colors duration-200 transform  rounded-md  focus:outline-none ">ذخیره</button>
        </div> --}}
    </form>
</section>
</div>
</body>
</html>
