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
                        Create and account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="register-petugas" method="post">
                        @csrf
                        {{-- ============= Input nama_petugas ============= --}}
                        <div>
                            <label for="nama_petugas"
                                class="block mb-2 text-sm font-medium @error('nama_petugas') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">
                                Nama <span class="text-red-400">*</span>
                            </label>
                            <input required type="text" name="nama_petugas" id="nama_petugas" autofocus
                                value="{{ old('nama_petugas') }}"
                                oninput="this.value = this.value.replace(/[^a-zA-Z' ]/g, '');"
                                class=" capitalize rounded-lg block w-full p-2.5 sm:text-sm  @error('nama_petugas') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-red-100 dark:border-red-400 dark:placeholder-red-700 dark:text-red-900 @else bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @enderror"
                                placeholder="Nama">
                            @error('nama_petugas')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Oops!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-4 sm:space-y-0 sm:grid grid-cols-2 gap-2 ">
                            {{-- ============= Input Username ============= --}}
                            <div>
                                <label for="username"
                                    class="block mb-2 text-sm font-medium @error('username') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">
                                    Username <span class="text-red-400">*</span>
                                </label>
                                <input required type="text" name="username" id="username"
                                    value="{{ old('username') }}"
                                    oninput="this.value = this.value.toLowerCase().replace(/[^0-9a-z._]/g, '');"
                                    class="lowercase rounded-lg block w-full p-2.5 sm:text-sm  @error('username') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-red-100 dark:border-red-400 dark:placeholder-red-700 dark:text-red-900 @else bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @enderror"
                                    placeholder="@username">
                                @error('username')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Oops!</span> {{ $message }}</p>
                                @enderror
                            </div>
                            {{-- ============= Input Level ============= --}}
                            <div class="level">
                                <label for="level"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose a level
                                    <span class="text-red-400">*</span></label></label>
                                <select id="level" name="level" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="" class="hidden">Select Level</option>
                                    <option value="admin" @if (old('level') == 'admin') {{ 'selected' }} @endif>
                                        Admin</option>
                                    <option value="petugas"
                                        @if (old('level') == 'petugas') {{ 'selected' }} @endif>Petugas</option>
                                </select>
                                @error('level')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Oops!</span> {{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- ============= Input telp ============= --}}
                        <div>
                            <label for="telp"
                                class="block mb-2 text-sm font-medium @error('telp') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">
                                Phone <span class="text-red-400">*</span>
                            </label>
                            <input required type="text" name="telp" id="telp" maxlength="13"
                                value="{{ old('telp') }}" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                class="rounded-lg block w-full p-2.5 sm:text-sm  @error('telp') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-red-100 dark:border-red-400 dark:placeholder-red-700 dark:text-red-900 @else bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @enderror"
                                placeholder="08********890">
                            @error('telp')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Oops!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium @error('password') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">
                                    Password <span class="text-red-400">*</span>
                                </label>
                                <input required type="password" name="password" id="password" placeholder="Password"
                                    class="rounded-lg block w-full p-2.5 sm:text-sm  @error('password') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-red-100 dark:border-red-400 dark:placeholder-red-700 dark:text-red-900 @else bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @enderror">
                                @error('password')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Oops!</span> {{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password_confirmation"
                                    class="block mb-2 text-sm font-medium @error('password_confirmation') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">
                                    Confirm Password <span class="text-red-400">*</span>
                                </label>
                                <input required type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Password Confirm"
                                    class="rounded-lg block w-full p-2.5 sm:text-sm  @error('password_confirmation') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-red-100 dark:border-red-400 dark:placeholder-red-700 dark:text-red-900 @else bg-gray-50 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @enderror">
                                @error('password_confirmation')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Oops!</span> {{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button required type="submit"
                            class="w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Create
                            an account</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
