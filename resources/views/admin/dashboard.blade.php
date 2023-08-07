<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>داشبورد</title>
    @include('./components/head')
    @section('./components/head')

</head>
<body dir="rtl">

<div class="">

    @include('./components/header')
    @section('./components/header')
</div>

<div class="py-5 md:py-5  lg:py-2"></div>
<div class="min-h-screen rtl mt-5 bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="grid grid-cols-1 px-5 my-24 md:my-2 lg:my-2 gap-6 mt-4 sm:grid-cols-1">
        <div class="relative  overflow-x-auto shadow-md sm:rounded-lg">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 my-2 ">
                    <span class="border-r-4 ml-2 border-gray-900"></span>
                    گزارشات ۳۰ روز اخیر

                </h1>
            </div>
    <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                {{-- <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th> --}}
                <th scope="col" class="px-6 py-3 text-base">
                     شرکت
                </th>
                <th scope="col" class="px-6 py-3 text-base">
                    نماینده شرکت
                </th>
                <th scope="col" class="px-6 py-3 text-base">
                   تاریخ پیامک اول
                </th>
                <th scope="col" class="px-6 py-3 text-base">
                    تاریخ پیامک دوم
                </th>
                <th scope="col" class="px-6 py-3 text-base">
                    تاریخ پیامک سوم
                </th>
                <th scope="col" class="px-6 py-3 text-base">
                    تاریخ تماس اول
                 </th>
                 <th scope="col" class="px-6 py-3 text-base">
                     تاریخ تماس دوم
                 </th>
                 <th scope="col" class="px-6 py-3 text-base">
                     تاریخ تماس سوم
                 </th>
                 <th scope="col" class="px-6 py-3 text-base">
                    همکاری/فسخ
                </th>
                <th scope="col" class="px-6 py-3 text-base">
                   تاریخ دریافت مدارک
                </th>
                <th scope="col" class="px-6 py-3 text-base">
                    تاریخ گزارش به شرکت
                 </th>
                 <th scope="col" class="px-6 py-3 text-base">
                    تاریخ گزارش به امور مالیاتی
                 </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)


            <tr class="bg-white border-b even:bg-gray-700 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$report->userId}}
                    </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$report->agentId}}
                </th>
                <td class="px-6 py-4">
                    {{$report->message['message1']}}
                </td>
                <td class="px-6 py-4">
                    {{$report->message['message2']}}
                </td>
                <td class="px-6 py-4">
                    {{$report->message['message3']}}
                </td>
                <td class="px-6 py-4">
                    {{$report->call['call1']}}
                </td>
                <td class="px-6 py-4">
                    {{$report->call['call2']}}
                </td>
                <td class="px-6 py-4">
                    {{$report->call['call3']}}
                </td>
                @if ($report->contribution == 1)
                <td class="px-6 py-4">
                    همکاری
                </td>
                @endif
                @if ($report->contribution == 0)
                <td class="px-6 py-4">
                    فسخ
                </td>
                @endif
                <td class="px-6 py-4">
                   {{$report->receivedEvidencesDate}}
                </td>
                <td class="px-6 py-4">
                    {{$report->sendReportClientDate}}
                </td>
                <td class="px-6 py-4">
                    {{$report->sendReportTaxDate}}
                </td>
                {{-- <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td> --}}
            </tr>
            @endforeach


        </tbody>
    </table>
</div>

    </div>
</div>
</body>
</html>
