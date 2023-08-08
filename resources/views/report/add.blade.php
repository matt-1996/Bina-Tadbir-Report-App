<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>گزارش جدید</title>
    @include('./components/head')
    @section('./components/head')
    <script>
        $(document).ready(function() {
            $( "#messageDate" ).datepicker();
      $('.messageDate').persianDatepicker({
        //maxDate: new persianDate().add('day', 30).valueOf(),
        //minDate: new persianDate().subtract('day', 40).valueOf(),
        format:'dddd D MMMM YYYY',
        autoClose: true
      });

      $(".select4").select2();
      $(".select3").select2();

    });




    </script>
</head>
<body dir="rtl">
    <div>

        @include('./components/header')
        @section('./components/header')
    </div>

    <div class="min-h-screen rtl bg-gray-100 py-6 flex flex-col justify-center sm:py-12">

        <section class="max-w-full lg:w-3/4 p-6 mx-auto bg-gray-800 rounded-md shadow-md dark:bg-gray-800 mt-20">
            <h1 class="text-xl font-bold text-gray-500 capitalize dark:text-gray-500"> گزارش جدید</h1>
            @if(Session::has('status'))
            <p class="p-4 text-lg text-white">{{Session::get('status')}}</p>
            @endif
            <form method="post" action="{{route('report.form.new')}}" name="newReport">
                @csrf
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="companyName">نام شرکت</label>
                        <select name="CompanyName" id="clientName"  class="select4 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" >
                            @foreach ($clients as $client)
                            <option value="{{$client->id}}" class="text-gray-800">{{$client->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="agent">نماینده شرکت </label>
                        <input id="agent" name="agent" type="text" class=" block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">

                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="messageDate"> تاریخ پیامک </label>
                        <label class="text-gray-500 dark:text-gray-200" for="messageDate"> اول  </label>
                        <input id="messageDate" name="messageDate1" type="text" class="messageDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <label class="text-gray-500 dark:text-gray-200" for="messageDate"> دوم  </label>
                        <input id="messageDate" name="messageDate2" type="text" class="messageDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <label class="text-gray-500 dark:text-gray-200" for="messageDate"> سوم  </label>
                        <input id="messageDate" name="messageDate3" type="text" class="messageDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="messageDate"> تاریخ تماس تلفنی </label>
                        <label class="text-gray-500 dark:text-gray-200" for="messageDate"> اول  </label>
                        <input id="messageDate" name="callDate1" type="text" class="messageDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <label class="text-gray-500 dark:text-gray-200" for="messageDate"> دوم  </label>
                        <input id="messageDate" name="callDate2" type="text" class="messageDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <label class="text-gray-500 dark:text-gray-200" for="messageDate"> سوم  </label>
                        <input id="messageDate" name="callDate3" type="text" class="messageDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="passwordConfirmation"> همکاری/فسخ</label>
                    <select name="contribution" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="Contribute" selected>همکاری</option>
                        <option value="Cancel">فسخ</option>
                    </select>
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="receivedEvidenceDate">تاریخ دریافت مدارک</label>
                        <input id="messageDate" name="receivedEvidenceDate"  type="text" class="messageDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    </div>
                    <div>
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">


                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="receivedEvidenceDate">تاریخ ارسال گزارش به شرکت</label>
                        <input id="messageDate" name="sentCompanyDate"  type="text" class="messageDate mb-5 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                        <label class="text-gray-500 dark:text-gray-200" for="receivedEvidenceDate">تاریخ ارسال گزارش به سازمان امور مالیاتی</label>
                        <input id="messageDate" name="sendTaxDate"  type="text" class="messageDate block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                </div>
                <div class="flex justify-end mt-6">
                    <button class="px-6 py-2 w-full bg-blue-500 leading-5 text-white transition-colors duration-200 transform  rounded-md  focus:outline-none ">ذخیره</button>
                </div>
            </form>
        </section>
</body>
<script>
    function getAgent()
    {
        var AgentId = document.getElementById("clientName").value
        var AgentSelect = document.querySelector('.agentSelect');
        var i, L = AgentSelect.options.length - 1;
        for(i = L; i >= 0; i--) {
            AgentSelect.remove(i);
        }
        console.log(AgentId)
        var QuesryString = 'getAgentById/' + AgentId
        console.log(QuesryString)
        $.ajax({url: QuesryString, success: function(result){
        result.forEach(user => {
            var target = document.querySelector('.agentSelect');
            let opt = document.createElement('option');
            opt.value = user.id;
            opt.selected = 1
            opt.textContent += user.name // or opt.innerHTML += user.name
            target.appendChild(opt);
  });
  }});
    }
</script>
</html>
