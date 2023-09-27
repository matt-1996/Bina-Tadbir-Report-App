<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تیکت های من</title>
    @include('./components/head')
    @section('./components/head')
</head>
<script>
    $(document).ready(function() {
       var TicketBody = $("#ticketBody").text()
       console.log(TicketBody)
       if(TicketBody.length >= 20){
        text = TicketBody.substring(0, 50) + '...';
        console.log(text)
        $("#ticketBody").text(text)

       }
    })
</script>
<body dir="rtl">
    {{-- <div> --}}

        @include('./components/header')
        @section('./components/header')
    {{-- </div> --}}

    <div class="min-h-screen mt-20 grid grid-cols-5 gap-4 justify-center">
    @foreach ($openTickets as $openTicket)
    <div class="">

        <div class=" max-w-sm bg-white border p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="{{route('ticket.single', ['id' => $openTicket->id])}}">
            <img class="rounded-lg mx-auto mb-2 mt-5" src="{{asset('img/logo.jpg')}}" alt="" />
        </a>
        <div class="p-5">
            <a href="{{route('ticket.single', ['id' => $openTicket->id])}}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$openTicket->title}}</h5>
            </a>
            <p id="ticketBody" class="mb-3 font-normal text-gray-400 dark:text-gray-400">{{$openTicket->body}}</p>
            <a href="{{route('ticket.single', ['id' => $openTicket->id])}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <i class="fas fa-arrow-left ml-2 "></i>
                ادامه
                 {{-- <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg> --}}
            </a>
        </div>
    </div>
    </div>

    @endforeach
</div>
</body>

</html>
