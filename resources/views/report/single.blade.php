<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> گزارش</title>
    @include('./components/head')
    @section('./components/head')
</head>
<script>
     $(document).ready(function() {

        $("#message1Span").click(function(){
         $( "#message1" ).datepicker();
         $('.message1').persianDatepicker({
           //maxDate: new persianDate().add('day', 30).valueOf(),
           //minDate: new persianDate().subtract('day', 40).valueOf(),
           format:'dddd D MMMM YYYY',
           autoClose: true
         });
        });

        $("#message2Span").click(function(){
         $( "#message2" ).datepicker();
         $('.message2').persianDatepicker({
           //maxDate: new persianDate().add('day', 30).valueOf(),
           //minDate: new persianDate().subtract('day', 40).valueOf(),
           format:'dddd D MMMM YYYY',
           autoClose: true
         });
        });

        $("#message3Span").click(function(){
         $( "#message3" ).datepicker();
         $('.message3').persianDatepicker({
           //maxDate: new persianDate().add('day', 30).valueOf(),
           //minDate: new persianDate().subtract('day', 40).valueOf(),
           format:'dddd D MMMM YYYY',
           autoClose: true
         });
        });

        $("#call1Span").click(function(){
         $( "#call1" ).datepicker();
         $('.call1').persianDatepicker({
           //maxDate: new persianDate().add('day', 30).valueOf(),
           //minDate: new persianDate().subtract('day', 40).valueOf(),
           format:'dddd D MMMM YYYY',
           autoClose: true
         });
        });

        $("#call2Span").click(function(){
         $( "#call2" ).datepicker();
         $('.call2').persianDatepicker({
           //maxDate: new persianDate().add('day', 30).valueOf(),
           //minDate: new persianDate().subtract('day', 40).valueOf(),
           format:'dddd D MMMM YYYY',
           autoClose: true
         });
        });

        $("#call3Span").click(function(){
         $( "#call3" ).datepicker();
         $('.call3').persianDatepicker({
           //maxDate: new persianDate().add('day', 30).valueOf(),
           //minDate: new persianDate().subtract('day', 40).valueOf(),
           format:'dddd D MMMM YYYY',
           autoClose: true
         });
        });

        $("#receivedEvidencesDateSpan").click(function(){
         $( "#receivedEvidencesDate" ).datepicker();
         $('.receivedEvidencesDate').persianDatepicker({
           //maxDate: new persianDate().add('day', 30).valueOf(),
           //minDate: new persianDate().subtract('day', 40).valueOf(),
           format:'dddd D MMMM YYYY',
           autoClose: true
         });
        });

        $("#sendReportClientDateSpan").click(function(){
         $( "#sendReportClientDate" ).datepicker();
         $('.sendReportClientDate').persianDatepicker({
           //maxDate: new persianDate().add('day', 30).valueOf(),
           //minDate: new persianDate().subtract('day', 40).valueOf(),
           format:'dddd D MMMM YYYY',
           autoClose: true
         });
        });

        $("#sendReportTaxDateSpan").click(function(){
         $( "#sendReportTaxDate" ).datepicker();
         $('.sendReportTaxDate').persianDatepicker({
           //maxDate: new persianDate().add('day', 30).valueOf(),
           //minDate: new persianDate().subtract('day', 40).valueOf(),
           format:'dddd D MMMM YYYY',
           autoClose: true
         });
        });

    });
</script>
<body dir="rtl">
    <div>

        @include('./components/header')
        @section('./components/header')
    </div>

    <div class="min-h-screen rtl bg-gray-100 py-6 flex flex-col justify-center sm:py-12">


        <section class="max-w-4xl lg:w-3/4 p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-20">
            <h1 class="text-xl font-bold text-gray-500 capitalize dark:text-gray-500"> بروزرسانی گزارش</h1>
            @if(Session::has('ReportEditSuccess'))
            <p class="p-4 text-lg text-white">{{Session::get('ReportEditSuccess')}}</p>
            @endif
            <form name="updateReport" method="post" action="{{route('report.update')}}">
               @csrf
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username">نام شرکت</label>
                        <input id="name" name="name" value="{{$report->userId}}" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username">نماینده شرکت </label>
                        <input id="name" name="agent" value="{{$report->agentId}}" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    </div>
                    <div>
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        @if ($report->message['message1'])
                        <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ پیامک اول <span id="message1Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                        <input id="message1" name="message1" value="{{$report->message['message1']}}" type="text" class="message1 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @else
                        <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ پیامک اول <span id="message1Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                        <input id="message1" name="message1" value="" type="text" class="message1 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @endif
                    </div>
                    <div>
                    @if (isset($report->message['message2']))
                    <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ پیامک دوم <span id="message2Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                    <input id="message2" name="message2" value="{{$report->message['message2']}}" type="text" class="message2 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @else
                    <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ پیامک دوم<span id="message2Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span> </label>
                    <input id="message2" name="message2" value="" type="text" class="message2 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @endif
                    </div>
                    <div>
                    @if (isset($report->message['message3']))
                    <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ پیامک سوم<span id="message3Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                    <input id="message3" name="message3" value="{{$report->message['message3']}}" type="text" class="message3 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @else
                        <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ پیامک سوم<span id="message3Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                    <input id="message3" name="message3" value="" type="text" class="message3 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @endif
                    </div>
                    <div>
                    @if ($report->call['call1'])
                    <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ تماس اول <span id="call1Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                    <input id="call1" name="call1" value="{{$report->call['call1']}}" type="text" class="call1 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @else
                    <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ تماس اول <span id="call1Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                    <input id="call1" name="call1" value="" type="text" class="call1 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @endif
                    </div>
                    <div>
                        @if ($report->call['call2'])
                        <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ تماس دوم <span id="call2Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                        <input id="call2" name="call2" value="{{$report->call['call2']}}" type="text" class="call2 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @else
                        <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ تماس دوم <span id="call2Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                        <input id="call2" name="call2" type="text" class="call2 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @endif
                    </div>
                    <div>
                    @if ($report->call['call3'])
                        <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ تماس سوم <span id="call3Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                        <input id="call3" name="call3" value="{{$report->call['call3']}}" type="text" class="call3 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @else
                        <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ تماس سوم<span id="call3Span" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                        <input id="call3" name="call3" value="" type="text" class="call3 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @endif
                    </div>
                    @if ($report->contribution == 1)
                    <select name="contribution" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="{{$report->contribution}}" selected>همکاری</option>
                        <option value="0">فسخ</option>
                    </select>
                    @endif
                    @if ($report->contribution == 0)
                    <select name="contribution" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="{{$report->contribution}}" selected>فسخ</option>
                        <option value="1" >همکاری</option>
                    </select>
                    @endif
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ دریافت گزارش <span id="receivedEvidencesDateSpan" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                        <input id="receivedEvidencesDate" name="receivedEvidencesDate" value="{{$report->receivedEvidencesDate}}" type="text" class="receivedEvidencesDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ ارسال گزارش به شرکت <span id="sendReportClientDateSpan" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span> </label>
                        <input id="sendReportClientDate" name="sendReportClientDate" value="{{$report->sendReportClientDate}}" type="text" class="sendReportClientDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username">تاریخ ارسال گزارش به مالیات <span id="sendReportTaxDateSpan" class="text-gray-400 text-sm p-2 bg-green-500 cursor-pointer">امروز</span></label>
                        <input id="sendReportTaxDate" name="sendReportTaxDate" value="{{$report->sendReportTaxDate}}" type="text" class="sendReportTaxDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                </div>
                <div class="flex justify-end mt-6">
                    <button class="px-6 py-2 w-full bg-blue-500 leading-5 text-white transition-colors duration-200 transform  rounded-md  focus:outline-none ">بروزرسانی</button>
                </div>
            </form>
        </section>
        </div>
</body>
</html>
