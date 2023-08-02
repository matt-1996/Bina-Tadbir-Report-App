<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('fonts/fontawesome-free-5.15.4-web/css/all.min.css')}}" rel="stylesheet">

    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body dir="rtl">
    @yield('header')

<!--horizontal navigations-->
<div class="p-1 z-50 fixed w-full pb-0 mx-auto flex flex-wrap " onclick="hideAll()">
    <div class="py-1 w-full lg:w-full ">
      <!--dark mode - text and icons-->
      <div class=" p-2 py-4 text-gray-700 bg-gray-900 rounded-lg shadow-lg font-medium capitalize">
        <span class="px-2 mr-2 mt-10 w-10 h-8 py-2  border-r border-gray-800">
          {{-- <img src=""
            alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto"> --}}
        </span>
        {{-- <span class="px-2 py-1 cursor-pointer hover:text-gray-300 text-sm rounded mb-5">
            <span class="mx-1">categories</span>
          {{-- <i class="w-8 fas fa-stream p-2 bg-gray-800 rounded-full"> --}}
          {{-- </i> --}}
        {{-- </span>  --}}
        <span class="items-center">
            <a href="{{route('dashboard')}}">

                <span class="px-2 py-1 hidden md:inline-block lg:inline-block cursor-pointer  hover:text-gray-300 text-sm rounded mb-5" >
                    <span class="text-gray-300">داشبورد</span>
                    {{-- <i class="w-8 fas fa-th p-2 bg-gray-800 rounded-full"></i> --}}
                </span>
            </a>
            <span class="px-2 mx-2 py-1 hidden md:inline-block lg:inline-block cursor-pointer  hover:text-gray-300 text-sm rounded mb-5" onclick="toggleClients()">
                <span class="text-gray-300">مشتریان
                    <i class="fas fa-sort-down p-1 "> </i>

                    <span id="dropdownClients" class="z-10 hidden absolute top-16 right-40 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 ">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                          <li>
                            <a href="{{route('client.index')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <i class="fas fa-users p-1 "> </i>
                                لیست مشتریان</a>
                          </li>
                          <li>
                            <a href="{{route('client.add')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <i class="fas fa-plus p-1 "> </i>
                                افزودن</a>
                          </li>
                          <li>
                            <a href="{{route('client.edit')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <i class="fas fa-user-edit p-1 "> </i>
                                ویرایش</a>
                          </li>
                        </ul>
                      </span>
                    </span>
                    </span>
                </span>
                {{-- <i class="w-8 fas fa-th p-2 bg-gray-800 rounded-full"></i> --}}
            </span>
            <span class="px-2 py-1 hidden md:inline-block lg:inline-block cursor-pointer  hover:text-gray-300 text-sm rounded mb-5" onclick="toggleReport()">
              <span class="text-gray-300">گزارش
                <i class="fas fa-sort-down p-1 "> </i>
                <span id="dropdownReport" class="z-10 hidden absolute top-16 right-72 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 ">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="{{route('report.index')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <i class="fas fa-chart-line p-1 "> </i>
                        گزارشات</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <i class="fas fa-plus p-1 "> </i>
                        افزودن</a>
                    </li>
                    <li>
                      <a href="{{route('report.edit')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <i class="fas fa-edit p-1 "> </i>
                        ویرایش</a>
                    </li>
                  </ul>
                </span>
              </span>
              </span>
              {{-- <i class="w-8 fas fa-th p-2 bg-gray-800 rounded-full"></i> --}}


            {{-- <span class="px-1 left-10 absolute hover:text-white cursor-pointer">
                <i class="fas fa-search p-2 bg-gray-600 text-gray-900 rounded-full">
                </i>
            </span> --}}
        </span>
        {{-- <span class="px-1 left-20 absolute hover:text-white cursor-pointer">
          <i class="w-8 fas fa-calendar-alt p-2 bg-gray-600 text-gray-900 rounded-full">
          </i>
        </span> --}}
        <span class="px-1 left-10 absolute hover:text-white cursor-pointer w-8 " onclick="toggleNotification()">
          <i class="w-8 fas fa-bell p-2 bg-gray-600 text-gray-900 rounded-full">
          </i>
          <span
            class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>
        </span>
            <!-- Notifications !-->
        <div id="dropdownNotification" class="z-20 h-96 absolute overflow-scroll hidden top-16 left-0 md:left-5 lg:left-5 w-full max-w-sm bg-gray-900 divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
            <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                اعلانات
            </div>
            <div class="divide-y divide-gray-100 dark:divide-gray-700">
              <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="flex-shrink-0">
                  {{-- <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                    </svg>
                  </div> --}}
                  <i class="shadow-lg ml-2 shadow-orange-400 fas fa-dot-circle font-medium text-red-500 rounded-full">
                </i>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">گزارش جدیدی توسط<span class="font-semibold text-gray-900 dark:text-white">مدیر</span> بازدید انبارگردانی گزارش شد</div>
                    <div class="text-xs text-blue-600 dark:text-blue-500">3 ساعت پیش</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="flex-shrink-0">
                  {{-- <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-2.jpg" alt="Joseph image">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z"/>
                    </svg>
                  </div> --}}
                  <i class="shadow-lg ml-2 shadow-green-400 fas fa-dot-circle font-medium text-green-500 rounded-full">
                </i>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span> and <span class="font-medium text-gray-900 dark:text-white">5 others</span> started following you.</div>
                    <div class="text-xs text-blue-600 dark:text-blue-500">10 minutes ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="flex-shrink-0">
                  {{-- <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"/>
                    </svg>
                  </div> --}}
                  <i class="shadow-lg ml-2 shadow-red-400 fas fa-dot-circle font-medium text-blue-500 rounded-full">
                </i>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span> and <span class="font-medium text-gray-900 dark:text-white">141 others</span> love your story. See it and view more stories.</div>
                    <div class="text-xs text-blue-600 dark:text-blue-500">44 minutes ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="flex-shrink-0">
                  <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-4.jpg" alt="Leslie image">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
                    </svg>
                  </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you in a comment: <span class="font-medium text-blue-500" href="#">@bonnie.green</span> what do you say?</div>
                    <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="flex-shrink-0">
                  <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-4.jpg" alt="Leslie image">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
                    </svg>
                  </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you in a comment: <span class="font-medium text-blue-500" href="#">@bonnie.green</span> what do you say?</div>
                    <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="flex-shrink-0">
                  <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-4.jpg" alt="Leslie image">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
                    </svg>
                  </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you in a comment: <span class="font-medium text-blue-500" href="#">@bonnie.green</span> what do you say?</div>
                    <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="flex-shrink-0">
                  <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-4.jpg" alt="Leslie image">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
                    </svg>
                  </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you in a comment: <span class="font-medium text-blue-500" href="#">@bonnie.green</span> what do you say?</div>
                    <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="flex-shrink-0">
                  <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-5.jpg" alt="Robert image">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                      <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                    </svg>
                  </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Robert Brown</span> posted a new video: Glassmorphism - learn how to implement the new design trend.</div>
                    <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                </div>
              </a>
            </div>
            <div class="">

                <a href="#" class="block py-3 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                    <div class="inline-flex items-center">
                        <svg class="w-4 h-4 ml-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                            <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                        </svg>
                        نمایش همه
                    </div>
                </a>
            </div>
        </div>
        <!-- End of Notifications !-->
        <span class="hover:text-white cursor-pointer w-10 relative float-right mr-3" onclick="toggleUser()" id="user-toggle">
          <i class="fas fa-user p-2 bg-gray-600 text-gray-900 rounded-full">
          </i>


          <span
            class="absolute right-0 top-0 -mt-1 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>
        </span>

    </div>
    <div class="hidden rounded-lg overflow-hidden bg-gray-900 my-1 w-1/2 lg:w-1/6" id="mobile-menu">
        <div class="space-y-1 px-2 bg-gray-900 pt-2 pb-3 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="{{route('profile.index')}}" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">
            <i class="fas fa-user-alt p-2 "></i>
            پروفایل</a>

          <a href="{{route('report.request')}}" class="text-gray-300 bg-gray-900 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
            <i class="fas fa-chart-line p-2 "></i>
            درخواست گزارش</a>

          <a href="{{route('ticket.new')}}" class="text-gray-300 bg-gray-900 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
            <i class="fas fa-ticket-alt p-2 "></i>
            ارسال تیکت</a>

          <a href="{{route('report.index')}}" class="text-gray-300 bg-gray-900 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
            <i class="fas fa-chart-bar p-2 "></i>
            گزارشات</a>

          <a href="{{route('logout')}}" class="text-gray-300 bg-gray-900 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
            <i class="fas fa-sign-out-alt p-2 "></i>
            خروج
          </a>
        </div>

  </div>


</div>
</body>

<script>
    function toggleUser() {
  var x = document.getElementById("mobile-menu");
  var report = document.getElementById("dropdownReport");
  var client = document.getElementById("dropdownClients");
  var notification = document.getElementById("dropdownNotification");
  if (x.style.display === "none") {
    report.style.display = 'none';
    client.style.display = 'none';
    notification.style.display = 'none';
    x.style.display = "inline-block";
  } else {
    x.style.display = "none";
  }
}

  function toggleReport(){
    var x = document.getElementById("dropdownReport");
    var notification = document.getElementById("dropdownNotification");
    var user = document.getElementById("mobile-menu");
    var client = document.getElementById("dropdownClients");
  if (x.style.display === "none") {
    x.style.display = "inline-block";
    notification.style.display = 'none';
    client.style.display = 'none';
    user.style.display = 'none';
  } else {
    x.style.display = "none";
  }
  }

  function toggleClients(){
    var x = document.getElementById("dropdownClients");
    var notification = document.getElementById("dropdownNotification");
    var user = document.getElementById("mobile-menu");
    var report = document.getElementById("dropdownReport");
  if (x.style.display === "none") {
    report.style.display = 'none';
    notification.style.display = 'none';
    user.style.display = 'none';
    x.style.display = "inline-block";
  } else {
    x.style.display = "none";
  }
  }

  function toggleNotification(){
    var x = document.getElementById("dropdownNotification");
    var user = document.getElementById("mobile-menu");
    var client = document.getElementById("dropdownClients");
    var report = document.getElementById("dropdownReport");
  if (x.style.display === "none") {
    report.style.display = 'none';
    client.style.display = 'none';
    user.style.display = 'none';
    x.style.display = "inline-block";
  } else {
    x.style.display = "none";
  }
  }

  function hideAll(){
    // var notification = document.getElementById("dropdownNotification");
    // var user = document.getElementById("mobile-menu");
    // var client = document.getElementById("dropdownClients");
    // var report = document.getElementById("dropdownReport");

    // report.style.display = 'none';
    // client.style.display = 'none';
    // user.style.display = 'none';
    // notification.style.display = 'none';
  }

    </script>
</html>
