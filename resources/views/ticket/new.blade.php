<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  تیکت جدید</title>
    @include('./components/head')
    @section('./components/head')
</head>
<body dir="rtl">
    <div>

        @include('./components/header')
        @section('./components/header')
    </div>
        <div class="my-auto">
            <div class="min-h-screen mx-20 flex flex-col justify-center">
              <div class="mt-5 md:mt-0  md:col-span-2">
                <form action="{{route('ticket.add')}}" method="POST" name="newTicket">
                    @csrf
                  <div class="shadow sm:rounded-md  sm:overflow-hidden">
                    <div class="px-4 py-5 bg-gray-800 space-y-6 sm:p-6">
                      <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                          <label for="company_website" class="block text-sm font-medium text-gray-100">
                            عنوان
                          </label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            {{-- <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                              http://
                            </span> --}}
                            <input type="text" required name="title" id="company_website" class="h-10 focus:ring-blue-500 focus:border-blue-500 text-gray-100 font-medium block w-1/3 rounded-lg bg-gray-700 rounded-r-md sm:text-sm border-gray-300" placeholder="">
                          </div>
                        </div>
                      </div>

                      <div>
                        <label for="about" class="block text-sm font-medium text-gray-100">
                          متن درخواست
                        </label>
                        <div class="mt-1">
                          <textarea id="body" required name="body" rows="7" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1 block w-full sm:text-sm font-medium bg-gray-700 text-gray-100 border-gray-300 rounded-md" placeholder=""></textarea>
                        </div>
                        {{-- <p class="mt-2 text-sm text-gray-500">
                          Brief description for your profile. URLs are hyperlinked.
                        </p> --}}
                      </div>

                      {{-- <div>
                        <label class="block text-sm font-medium text-gray-700">
                          Photo
                        </label>
                        <div class="mt-1 flex items-center">
                          <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                              <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                          </span>
                          <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Change
                          </button>
                        </div>
                      </div> --}}

                      {{-- <div>
                        <label class="block text-sm font-medium text-gray-700">
                          Cover photo
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                          <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="True">
                              <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                              <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                              </label>
                              <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">
                              PNG, JPG, GIF up to 10MB
                            </p>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        ارسال
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

</body>
</html>
