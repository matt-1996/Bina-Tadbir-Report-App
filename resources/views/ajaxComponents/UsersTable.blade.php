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
        {{-- <td class="w-4 p-4">
            <div class="flex items-center">
                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
            </div>
        </td> --}}
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
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ویرایش</a>
        </td>
    </tr>
    @endforeach

</tbody>
