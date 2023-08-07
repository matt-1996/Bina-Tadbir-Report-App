<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود</title>
    @include('./components/head')
    @section('./components/head')

</head>
<body dir="rtl">
    <div>


        <!-- component -->
<div class="min-h-screen rtl bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    @if (Session::has('failedLogin'))
    <div id="toast-danger" class="flex items-center mr-10 absolute top-12 w-full animate-moveToRight max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="mx-2 text-sm font-normal">ایمیل یا پسورد اشتباه است</div>
        </div>
        @endif
    <div class="relative py-3 lg:w-2/4 sm:max-w-xl sm:mx-auto">
		<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
			<div class="max-w-lg mx-auto">
				<div>
					<h1 class="text-2xl font-semibold">پنل گزارش مشتریان</h1>
				</div>
				<div class="divide-y divide-gray-200">
					<div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
						<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" name="login_form" method="post" action="{{route('login')}}">
                            @csrf
                        <div class="relative">
							<input autocomplete="off" id="email" name="email" type="text" class="peer mb-2 placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
							<label for="email" class="absolute right-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">ایمیل </label>
						</div>
						<div class="relative mt-5">
							<input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none js-password focus:borer-rose-600" placeholder="Password" />
							<label for="password" class="absolute right-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">رمز ورود</label>
                            <div class="relative w-full">
                                <div class="absolute bottom-2 left-0 flex items-center px-2">
                                  <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                                  <label class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label" for="toggle">نمایش</label>
                                </div>
						</div>
						<div class="relative">
							<button class="bg-blue-500 w-full font-IRANSansWeb text-white rounded-md my-5 px-2 py-1">ورود</button>
						</div>
					</div>
                </form>
				</div>
			</div>
		</div>
	</div>
</div>
    </div>
</body>
<script>
    const ErrorToast = document.getElementById('toast-danger');
    setTimeout(() => {
        ErrorToast.style.display = 'none'
    }, 5000);
    const passwordToggle = document.querySelector('.js-password-toggle')

    passwordToggle.addEventListener('change', function() {
    const password = document.querySelector('.js-password'),
        passwordLabel = document.querySelector('.js-password-label')

    if (password.type === 'password') {
        password.type = 'text'
        passwordLabel.innerHTML = 'پنهان'
    } else {
        password.type = 'password'
        passwordLabel.innerHTML = 'نمایش'
    }

    password.focus()
    })

</script>
</html>
