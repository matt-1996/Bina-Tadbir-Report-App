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
        </span>
        <span class="items-center">
            <a href="{{route('dashboard')}}">

                <span class="px-2 py-1 hidden md:inline-block lg:inline-block cursor-pointer  hover:text-gray-300 text-sm rounded mb-5" >
                    <span class="text-gray-300">داشبورد</span>
                </span>
            </a>
            @if(auth()->user()->isAdmin)
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
                            <a href="{{route('client.index')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
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
            @endif
            @if(!auth()->user()->isAdmin)
            <span class="px-2 mx-2 py-1 hidden md:inline-block lg:inline-block cursor-pointer  hover:text-gray-300 text-sm rounded mb-5" onclick="toggleClients()">
                <span class="text-gray-300">حساب کاربری
                    <i class="fas fa-sort-down p-1 "> </i>
                    <span id="dropdownClients" class="z-10 hidden absolute top-16 right-40 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 ">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                          <li>
                            <a href="{{route('profile.index')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <i class="fas fa-users p-1 "> </i>
                                 پروفایل</a>
                          </li>
                        </ul>
                      </span>
                    </span>
                    </span>
                    @endif
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
                        گزارشات من</a>
                    </li>
                    @if(auth()->user()->isAdmin)
                    <li>
                      <a href="{{route('report.add')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <i class="fas fa-plus p-1 "> </i>
                        افزودن</a>
                    </li>
                    @endif
                    @if(auth()->user()->isAdmin)
                    <li>
                      <a href="{{route('report.edit')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <i class="fas fa-edit p-1 "> </i>
                        ویرایش</a>
                    </li>
                    @endif
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
            id="notificationCount"
            class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">0</span>
        </span>
            <!-- Notifications !-->
        <div id="dropdownNotification" class="z-20 h-96 absolute overflow-scroll hidden top-16 left-0 md:left-5 lg:left-5 w-full max-w-sm divide-y rounded-lg shadow bg-gray-800 dark:bg-gray-800 divide-gray-700 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
            <div class="block px-4 py-2 font-medium text-center rounded-t-lg bg-gray-800 dark:bg-gray-800 text-white dark:text-white">
                اعلانات
            </div>
            <div id="notificationsList" class="divide-y divide-gray-600 dark:divide-gray-600">
              {{-- <a href="#" class="flex px-4 py-3 hover:bg-gray-700 dark:hover:bg-gray-700">
                <div class="flex-shrink-0"> --}}
                  {{-- <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-2.jpg" alt="Joseph image">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z"/>
                    </svg>
                  </div> --}}
                  {{-- <i class="shadow-lg ml-2 shadow-green-400 fas fa-dot-circle font-medium text-green-500 rounded-full">
                </i>
                </div>
                <div class="w-full pl-3">
                    <div class="text-white text-sm mb-1.5 dark:text-white"><span class="font-semibold text-white dark:text-white">Joseph Mcfall</span> and <span class="font-medium text-white dark:text-white">5 others</span> started following you.</div>
                    <div class="text-xs text-blue-500 dark:text-blue-500">10 minutes ago</div>
                </div>
              </a> --}}
              {{-- <a href="#" class="flex px-4 py-3 hover:bg-gray-700 dark:hover:bg-gray-700">
                <div class="flex-shrink-0"> --}}
                  {{-- <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"/>
                    </svg>
                  </div> --}}
                  {{-- <i class="shadow-lg ml-2 shadow-blue-400 fas fa-dot-circle font-medium text-blue-500 rounded-full">
                </i>
                </div>
                <div class="w-full pl-3">
                    <div class="text-white text-sm mb-1.5 dark:text-white"><span class="font-semibold text-white dark:text-white">Joseph Mcfall</span> and <span class="font-medium text-white dark:text-white">5 others</span> started following you.</div>
                    <div class="text-xs text-blue-500 dark:text-blue-500">10 minutes ago</div>
                </div>
              </a> --}}
            </div>
            <div class="">

                <a href="#" class="block py-3 text-sm font-medium text-center text-white rounded-b-lg bg-gray-800 hover:bg-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                    <div class="inline-flex items-center">
                        <svg class="w-4 h-4 ml-2 text-gray-400 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
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
      x.style.display = "inline-block";
    report.style.display = 'none';
    client.style.display = 'none';
    notification.style.display = 'none';
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
      x.style.display = "inline-block";
    report.style.display = 'none';
    notification.style.display = 'none';
    user.style.display = 'none';
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
      x.style.display = "inline-block";
    report.style.display = 'none';
    client.style.display = 'none';
    user.style.display = 'none';
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



    $( document ).ready(function() {
        var userId;
        $.ajax({url:"{{route('getMyId')}}", async: false, success: function(result){

             userId = result;
        }
    });
        var notificationsList = document.getElementById('notificationsList')
        var notificationCount = document.getElementById('notificationCount')
        notificationCount.style.display = 'none'
        console.log(userId)
        var url = '{{route("notification.get.reports", "id")}}'
        url = url.replace('id', userId);
        $.ajax({url: url, success: function(result){
            const notifications = result.notifications
            notifications.forEach(data => {
            console.log(data.data.data)
            console.log('new')
            var NotificationLink = "{{route('report.view.single' , ['id' => 'reportId', 'notificationId' => 'notificationIdData'])}}"
            var chars = {
                'reportId' : data.data.reportId,
                'notificationId' : data.id
            };
            NotificationLink = NotificationLink.replace('reportId', data.data.reportId).replace('notificationIdData', data.id)
            // console.log(NotificationLink)
            notificationsList.insertAdjacentHTML('afterend', `<a href="${NotificationLink}" id="" class="flex px-4 py-3 hover:bg-gray-700 dark:hover:bg-gray-700">
                <div class="flex-shrink-0">

                  <i class="shadow-lg ml-2 fas fa-dot-circle font-medium ${data.data.color} rounded-full">
                </i>
                </div>
                <div id="" class="w-full pl-3">
                    <div id="" class="text-white text-sm mb-1.5 dark:text-white">${data.data.data}</div>
                    {{-- <div class="text-xs text-blue-500 dark:text-blue-500">3 ساعت پیش</div> --}}
                </div>
              </a>`)
          });
          if(result.count >= 1){
            notificationCount.style.display = 'flex'
            notificationCount.textContent = result.count
          }
        }});

    });

    </script>
</html>
