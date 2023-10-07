<x-guest-layout>

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg"
                    alt="logo">
                Flowbite
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    @if (session('status'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                            {{ session('message') }}</p>
                    @endif
                    <form class="space-y-4 md:space-y-6" action="login" method="post">
                        @csrf
                        <div>
                            <label for="username"
                                class="block mb-2 text-sm font-medium @error('username') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Your
                                Username</label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}"
                                onkeypress="return /[0-9.a-z._]/i.test(event.key)"
                                class="lowercase border rounded-lg block w-full p-2.5 sm:text-sm  @error('username') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-red-100 dark:border-red-400 dark:placeholder-red-700 dark:text-red-900 @else bg-gray-50 border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @enderror"
                                placeholder="@username">
                            @error('username')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Oops!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium @error('password') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">
                                Password <span class="text-red-400">*</span>
                            </label>
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="rounded-lg block w-full p-2.5 sm:text-sm  @error('password') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-red-100 dark:border-red-400 dark:placeholder-red-700 dark:text-red-900 @else bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @enderror">
                            @error('password')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Oops!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="#"
                                class="text-sm font-medium text-indigo-600 hover:underline dark:text-indigo-500">Forgot
                                password?</a>
                        </div> --}}
                        <button type="submit"
                            class=" w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                            in</button>
                        {{-- <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="#"
                                class="font-medium text-indigo-600 hover:underline dark:text-indigo-500">Sign up</a>
                        </p> --}}
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
