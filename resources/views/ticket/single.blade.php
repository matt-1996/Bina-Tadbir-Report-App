<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="240">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تیکت</title>
    @include('./components/head')
    @section('./components/head')
</head>
<body dir="rtl">
    @include('./components/header')
    @section('./components/header')

    <!-- component -->
    @if (isset($replies[0]->body))
    <div class="flex h-screen w-screen antialiased text-gray-800">
        <div class="flex flex-col flex-auto h-full p-6">
          <div
            class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4"
          >
            <div class="flex flex-col h-full overflow-x-auto mb-4">
              <div class="flex flex-col h-full">
                <div class="grid grid-cols-12 gap-y-2">


                    <div class="col-start-6 col-end-13 p-3 rounded-lg">
                      <div class="flex items-center justify-start flex-row-reverse">
                        <div
                          class="flex items-center text-gray-100 justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                        >
                          ش
                        </div>
                        <div
                          class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl"
                        >
                          <div>{{$replies[0]->body}}</div>
                        </div>
                      </div>
                    </div>
                  @foreach ($replies as $reply)
                  @if ($reply->adminAnswer == 1)
                  <div class="col-start-1 col-end-8 p-3 rounded-lg">
                    <div class="flex flex-row items-center">
                      <div
                        class="flex items-center text-gray-100 justify-center h-10 w-10 rounded-full bg-green-500 flex-shrink-0"
                      >

                            م

                      </div>
                      <div
                        class="relative  ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                        <div class="">{{$reply->message}}</div>
                      </div>
                    </div>
                  </div>
                  @endif
                  @if ($reply->adminAnswer == 0)

                  <div class="col-start-6 col-end-13 p-3 rounded-lg">
                    <div class="flex items-center justify-start flex-row-reverse">
                      <div
                        class="flex items-center text-gray-100 justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                      >
                        ش
                      </div>
                      <div
                        class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl"
                      >
                        <div>{{$reply->message}}</div>
                      </div>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div
              class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4"
            >
              <div>
                <button
                  class="flex items-center justify-center text-gray-400 hover:text-gray-600"
                >
                </button>
              </div>
              <div class="flex-grow ml-4">
                  <form action="{{route('ticket.reply.new')}}" method="post" name="newReply">
                <div class="relative w-full">
                      @csrf
                      <input type="hidden" value="{{$reply->ticketId}}" name="ticketId">
                      <input
                        type="text"
                        name="reply"
                        id="reply"
                        required
                        class="flex mt-2 w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10"
                      />
                      <button
                    class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600"
                  >

                  </button>
                </div>
              </div>
              <div class="ml-4">
                <button
                id="send"
                  class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0"
                >
                  <span>ارسال</span>
                  <span class="ml-2">
                    <svg
                      class="w-4 h-4 transform rotate-45 -mt-px"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
                      ></path>
                    </svg>
                  </span>
                </button>
              </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
  </div>
  @else
  <div class="flex h-screen w-screen antialiased text-gray-800">
    <div class="flex flex-col flex-auto h-full p-6">
      <div
        class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4"
      >
        <div class="flex flex-col h-full overflow-x-auto mb-4">
          <div class="flex flex-col h-full">
            <div class="grid grid-cols-12 gap-y-2">

                <div class="col-start-6 col-end-13 p-3 rounded-lg">
                    <div class="flex items-center justify-start flex-row-reverse">
                      <div
                        class="flex items-center text-gray-100 justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                      >
                        ش
                      </div>
                      <div
                        class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl"
                      >
                        <div>{{$ticketBody->body}}</div>
                      </div>
                    </div>
                  </div>

            </div>
          </div>
        </div>
        <div
          class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4"
        >
          <div>
            <button
              class="flex items-center justify-center text-gray-400 hover:text-gray-600"
            >
            </button>
          </div>
          <div class="flex-grow ml-4">
              <form action="{{route('ticket.reply.new')}}" method="post" name="newReply">
            <div class="relative w-full">
                  @csrf
                  <input type="hidden" value="{{$ticketId}}" name="ticketId">
                  <input
                    type="text"
                    name="reply"
                    id="reply"
                    required
                    class="flex mt-2 w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10"
                  />
                  <button
                class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600"
              >

              </button>
            </div>
          </div>
          <div class="ml-4">
            <button
            id="send"
              class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0"
            >
              <span>ارسال</span>
              <span class="ml-2">
                <svg
                  class="w-4 h-4 transform rotate-45 -mt-px"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
                  ></path>
                </svg>
              </span>
            </button>
          </div>
              </form>
        </div>
      </div>
    </div>
  </div>
</div>
    @endif






</body>
<script>
</script>
</html>
