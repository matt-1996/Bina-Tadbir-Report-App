<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>گزارش</title>
    @include('./components/head')
    @section('./components/head')
</head>
<body dir="rtl">
    <div>

        @include('./components/header')
        @section('./components/header')
    </div>

    <div class="min-h-screen rtl bg-gray-100 py-6 flex flex-col justify-center sm:py-12">


        <section class="max-w-4xl lg:w-3/4 p-6 mx-auto bg-gray-800 rounded-md shadow-md dark:bg-gray-800 mt-20">
            <h1 class="text-xl font-bold text-gray-500 capitalize dark:text-gray-500"> گزارش</h1>
            <form>
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username">نام شرکت</label>
                        <input id="name" disabled value="{{$report->userId}}" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username">نماینده شرکت </label>
                        <input id="name"  type="text" disabled value="{{$report->agentId}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="companyName"> نوع دانش بنیان</label>
                        <select name="knowledgeBase" id="knowledgeBase"  class=" block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" >
                            <option disabled value="{{$report->knowledgeBase}}" selected class="text-gray-800">{{$report->knowledgeBase}}</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username"> تاریخ پیامک اول </label>
                        <input id="name"  type="text" disabled value="{{$report->message['message1']}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username"> تاریخ پیامک دوم </label>
                        <input id="name"  type="text" disabled value="{{$report->message['message2']}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username"> تاریخ پیامک سوم </label>
                        <input id="name"  type="text" disabled value="{{$report->message['message3']}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username"> تاریخ تماس اول </label>
                        <input id="name"  type="text" disabled value="{{$report->call['call1']}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username"> تاریخ تماس دوم </label>
                        <input id="name"  type="text" disabled value="{{$report->call['call2']}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username"> تاریخ تماس سوم </label>
                        <input id="name"  type="text" disabled value="{{$report->call['call3']}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        @if ($report->contribution == 1)
                        <label class="text-gray-500 dark:text-gray-200" for="username">  همکاری/فسخ </label>
                        <input id="name"  type="text" disabled value="همکاری" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @endif

                        @if ($report->contribution == 0)
                        <label class="text-gray-500 dark:text-gray-200" for="username">  همکاری/فسخ </label>
                        <input id="name"  type="text" disabled value="فسخ" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @endif
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username"> تاریخ دریافت مدارک </label>
                        <input id="name"  type="text" disabled value="{{$report->receivedEvidencesDate}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username"> تاریخ ارسال گزارش به مشتری </label>
                        <input id="name"  type="text" disabled value="{{$report->sendReportClientDate}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="username"> تاریخ ارسال گزارش به اداره مالیات </label>
                        <input id="name"  type="text" disabled value="{{$report->sendReportTaxDate}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="receivedEvidenceDate">مالیات عملکرد</label>
                        <input id="revenueTax" disabled name="revenueTax" value="{{$report->revenueTax}}"  type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="receivedEvidenceDate">مالیات حقوق</label>
                        <input id="salaryTax" disabled name="salaryTax" value="{{$report->salaryTax}}"  type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="receivedEvidenceDate">مالیات تکلیفی</label>
                        <input id="taklifiTax" disabled name="taklifiTax" value="{{$report->taklifiTax}}"  type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="receivedEvidenceDate">مالیات اجاره</label>
                        <input id="rentTax" disabled name="rentTax" value="{{$report->rentTax}}" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="receivedEvidenceDate">مالیات بر ارزش افزوده</label>
                        <input id="valueAddedTax" disabled name="valueAddedTax" value="{{$report->valueAddedTax}}" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="receivedEvidenceDate">سایر مالیات  </label>
                        <input id="moreTax" disabled name="moreTax" value="{{$report->moreTax}}" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">

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



                </div>
                {{-- <div class="flex justify-end mt-6">
                    <button class="px-6 py-2 w-full bg-blue-500 leading-5 text-white transition-colors duration-200 transform  rounded-md  focus:outline-none ">ذخیره</button>
                </div> --}}
            </form>
        </section>
        </div>

</body>
</html>
