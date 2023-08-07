<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مشتریان</title>
    @include('./components/head')
    @section('./components/head')
</head>
<body dir="rtl">
    <div>

        @include('./components/header')
        @section('./components/header')
    </div>

    {{-- <div class="py-10 md:py-5 lg:py-5"></div> --}}
<div class="min-h-screen rtl  bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="grid grid-cols-1 px-5 my-24 md:my-2 lg:my-2 gap-6 mt-4 sm:grid-cols-1">

<div class="relative  overflow-x-auto shadow-md sm:rounded-lg">
    <div class="pb-4 p-4 mt-10 bg-white dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="absolute inset-y-0 right-3 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="clientName" class="block p-2 pr-8 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="جستجو" oninput="searchClient()">
        </div>
    </div>
    <table id="table" class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                {{-- <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th> --}}
                <th scope="col" class="px-6 py-3">
                    نام
                </th>
                <th scope="col" class="px-6 py-3">
                    تلفن تماس
                </th>
                <th scope="col" class="px-6 py-3">
                    آدرس
                </th>
                <th scope="col" class="px-6 py-3">
                    شهر
                </th>
                <th scope="col" class="px-6 py-3">
                    ایمیل
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->name}}
                </th>
                <td class="px-6 py-4">
                    {{$user->phone}}
                </td>
                <td class="px-6 py-4">
                    {{$user->address}}
                </td>
                <td class="px-6 py-4">
                    {{$user->city}}
                </td>
                <td class="px-6 py-4">
                    {{$user->email}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('client.edit',['id' => $user->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ویرایش</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

    </div>
</div>

</body>
<script>
    function searchClient()
    {
    var ClientInput = document.getElementById("clientName").value
    var QuesryString = 'client/search/' + ClientInput
    let table = document.getElementById("table");
    console.log(ClientInput)
    if(ClientInput == ""){
        console.log('empty')
        $("#table tr").remove();
        $.ajax({url: 'client/search/all', success: function(result){
            if(result.success == true){
                table.innerHTML = result.html
            }else{
                console.log('No result')
            }
  }});

    }else
    {
        console.log('Not empty')
        $.ajax({url: QuesryString, success: function(res){
             if(res.success == true){
                $("#table tr").remove();
                table.innerHTML = res.html
            }else{
                console.log('No result')
            }
        }});
  }}
</script>
</html>
