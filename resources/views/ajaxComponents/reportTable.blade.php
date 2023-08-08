<thead class="text-xs text-gray-400 uppercase bg-gray-700 dark:bg-gray-700 dark:text-gray-400">
    <tr>
        {{-- <th scope="col" class="p-4">
            <div class="flex items-center">
                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checkbox-all-search" class="sr-only">checkbox</label>
            </div>
        </th> --}}
        <th scope="col" class="px-6 py-3 text-base">
            نام شرکت
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
         <th scope="col" class="px-6 py-3 text-base">
            عملیات
         </th>

    </tr>
</thead>
    @foreach ($reports as $report)
    <tr class="bg-gray-800 border-b border-gray-700 even:bg-gray-700 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-600 dark:hover:bg-gray-600">

        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
            {{$report->userId}}
        </th>
        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
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
        <td class="px-6 py-4">
            <span class="text-gray-300 inline-block" onclick="deleteReport({{$report->id}})">
            {{-- <a href="" > --}}
                <i class="fas fa-trash text-red-500 p-1 "> </i>
            {{-- </a> --}}
            <a href="{{route('report.edit.single', ['id' => $report->id])}}">
                <i class="fas fa-edit text-gray-500 p-1 "> </i>
            </a>
        </span>
        <span class="text-gray-300 inline-block">
        </span>
        </td>
        {{-- <td class="px-6 py-4">
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
        </td> --}}
    </tr>
    @endforeach

