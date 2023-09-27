<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ویرایش گزارش</title>
    <link href="{{asset('fonts/fontawesome-free-5.15.4-web/css/all.min.css')}}" rel="stylesheet">
    @include('./components/head')
    @section('./components/head')
</head>
<body dir="rtl">
    <div>

        @include('./components/header')
        @section('./components/header')
    </div>

    <div class="py-10 md:py-5 lg:py-5"></div>
<div class="min-h-screen rtl  bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="grid grid-cols-1 px-5 my-24 md:my-2 lg:my-2 gap-6 mt-4 sm:grid-cols-1">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="pb-4 p-4 bg-gray-900 dark:bg-gray-900">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 right-3 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="clientName" class="block p-2 pr-8 text-sm text-white border border-gray-600 rounded-lg w-80 bg-gray-700 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="جستجو" oninput="searchClient()">
                </div>
            </div>
    <table id="table" class="w-full text-sm text-right text-gray-400 dark:text-gray-400">
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
                     نوع دانش بنیان
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
                    تاریخ ارسال قرارداد
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
                     مالیات عملکرد
                    </th>
                    <th scope="col" class="px-6 py-3 text-base">
                        مالیات حقوق
                    </th>
                    <th scope="col" class="px-6 py-3 text-base">
                        مالیات تکلیفی
                    </th>
                    <th scope="col" class="px-6 py-3 text-base">
                        مالیات اجاره
                    </th>
                    <th scope="col" class="px-6 py-3 text-base">
                        مالیات بر ارزش افزوده
                    </th>
                    <th scope="col" class="px-6 py-3 text-base">
                        سایر مالیات
                    </th>

                    <th scope="col" class="px-8 py-3 text-base">
                       عملیات
                    </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
            <tr class="bg-gray-800 border-b border-gray-700 even:bg-gray-700 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-600 dark:hover:bg-gray-600">

                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                    {{$report->userId}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                {{$report->agentId}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                    {{$report->knowledgeBase}}
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
                    {{$report->sendContractDate}}
                </td>
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
                    {{number_format($report->revenueTax,0,'.',',')}}
                </td>
                <td class="px-6 py-4">
                    {{number_format($report->salaryTax)}}
                </td>
                <td class="px-6 py-4">
                    {{number_format($report->taklifiTax)}}
                </td>
                <td class="px-6 py-4">
                    {{number_format($report->rentTax)}}
                </td>
                <td class="px-6 py-4">
                    {{number_format($report->valueAddedTax)}}
                </td>
                <td class="px-6 py-4">
                    {{number_format($report->moreTax)}}
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


        </tbody>
    </table>
</div>

    </div>
</div>
</body>
<script>

    function deleteReport(id)
    {
        console.log(id)
        // if (confirm("آیا از حذف این مورد مطمئن هستید؟") == true) {
        //     const Http = new XMLHttpRequest();
        //     var querString = 'delete/' + id
        //     const url=querString;
        //     Http.open("GET", url);
        //     Http.send();
        //     Http.onreadystatechange = (e) => {
        //     console.log(Http.responseText)
        //     if(Http.responseText.status == true){

        //     }
        //     }
        //     } else {
        //         console.log('no')
        //     }

        Swal.fire({
        title: 'آیا از حذف این آیتم اطمینان دارید؟',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'بله',
        denyButtonText: `خیر`,
        }).then((result) => {
        if (result.isConfirmed) {
            const Http = new XMLHttpRequest();
            var querString = 'delete/' + id
            const url=querString;
            Http.open("GET", url);
            Http.send();
            Http.onreadystatechange = (e) => {
            console.log(Http.responseText)
            if(Http.responseText.status == true){
                Swal.fire('عملیات ناموفق', '', 'success')
            }
             else {
                 Swal.fire('عملیات موفق' , '', 'info')
                 setTimeout(() => {
                     location.reload();
                }, 1200);
            }}

        } else if (result.isDenied) {
            Swal.fire('عملیات انجام نشد', '', 'info')
        }
        })
    }

    function searchClient()
    {
    var ClientInput = document.getElementById("clientName").value
    var QuesryString = 'searchClient/' + ClientInput
    let table = document.getElementById("table");
    console.log(ClientInput)
    if(ClientInput == ""){
        console.log('empty')
        $("#table tr").remove();
        $.ajax({url: 'searchClient/all', success: function(result){
            if(result.success == true){
                table.innerHTML = result.html
            }else{
                console.log('No result')
            }
  }});

    }else{
        console.log('Not empty')
        $.ajax({url: QuesryString, success: function(res){
             if(res.success == true){
                $("#table tr").remove();
                table.innerHTML = res.html
            }else{
                console.log('No result')
            }
  }});
    }

}
</script>
</html>
