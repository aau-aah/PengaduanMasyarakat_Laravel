<x-app-layout>
    @section('title', $pengaduan->masyarakat->username)

    {{-- ============ Notification Alert Start============ --}}
    {{-- Alert Success --}}
    @if (session('success'))
        <div id="toast-top-right"
            class="z-50 fixed flex items-center w-full max-w-xs p-4  border border-green-200 text-gray-500 bg-white rounded-lg shadow top-5 right-5 dark:text-gray-400  space-x dark:bg-gray-800 dark:border-green-700"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-top-right" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if (session('tab') === 'chats')
        <script>
            tabs.show('chats');
        </script>
    @endif
    {{-- Alert Errors --}}
    @if ($errors->any())
        <div id="toast-top-right"
            class="z-50 fixed flex items-center w-fit p-4  border border-red-200 text-gray-500 bg-white rounded-lg shadow top-5 right-5 dark:text-gray-400  space-x dark:bg-gray-800 dark:border-red-700"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">
                <ul class="list-disc list-inside text-sm text-red-600 dark:text-red-400">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-top-right" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif
    {{-- ============ Notification Alert End============ --}}

    {{-- ============ Content End============ --}}
    <section class="bg-white dark:bg-gray-900 py-8 lg:py-4">
        <div class="max-w-2xl mx-auto px-4">

            {{-- Card --}}
            <div>
                @if ($pengaduan->status === '0')
                    <div id="alert-additional-content-2"
                        class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                        role="alert">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <h3 class="text-lg font-medium">{{ $pengaduan->tgl_pengaduan }} |
                                {{ $pengaduan->masyarakat->username }}
                            </h3>
                        </div>
                        <div class="flex justify-center my-5">
                            <img src="{{ asset('/storage/foto_pengaduan/' . $pengaduan->foto) }}"
                                class="h-auto w-fit rounded-lg">
                        </div>
                        <div class="mt-2 mb-4 text-sm">
                            {{ $pengaduan->isi_laporan }}
                        </div>

                    </div>
                @endif
                @if ($pengaduan->status === 'proses')
                    <div id="alert-additional-content-2"
                        class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400 dark:border-yellow-800"
                        role="alert">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <h3 class="text-lg font-medium">{{ $pengaduan->tgl_pengaduan }} |
                                {{ $pengaduan->masyarakat->username }}
                            </h3>
                        </div>
                        <div class="flex justify-center my-5">
                            <img src="{{ asset('/storage/foto_pengaduan/' . $pengaduan->foto) }}"
                                class="h-auto w-fit rounded-lg">
                        </div>
                        <div class="mt-2 mb-4 text-sm">
                            {{ $pengaduan->isi_laporan }}
                        </div>

                    </div>
                @endif
                @if ($pengaduan->status === 'selesai')
                    <div id="alert-additional-content-2"
                        class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                        role="alert">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <h3 class="text-lg font-medium">{{ $pengaduan->tgl_pengaduan }} |
                                {{ $pengaduan->masyarakat->username }}
                            </h3>
                        </div>
                        <div class="flex justify-center my-5">
                            <img src="{{ asset('/storage/foto_pengaduan/' . $pengaduan->foto) }}"
                                class="h-auto w-fit rounded-lg">
                        </div>
                        <div class="mt-2 mb-4 text-sm">
                            {{ $pengaduan->isi_laporan }}
                        </div>

                    </div>
                @endif
            </div>

            {{-- Button Navigation For Tabs --}}
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tanggapan-tab"
                            data-tabs-target="#tanggapan" type="button" role="tab" aria-controls="tanggapan"
                            aria-selected="false">Tanggapan</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="chats-tab" data-tabs-target="#chats" type="button" role="tab"
                            aria-controls="chats" aria-selected="false">Chats</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Settings</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Contacts</button>
                    </li>
                </ul>
            </div>

            {{-- Content Tabs --}}
            <div id="myTabContent">
                {{-- ***Tanggapan Contents Start*** --}}
                <div class="hidden p-4 rounded-lg" id="tanggapan" role="tabpanel" aria-labelledby="tanggapan-tab">
                    {{-- From Pengaduan Start --}}
                    <div>
                        @if (
                            ($pengaduan->status != 'selesai' && Auth::user()->level === 'admin') ||
                                ($pengaduan->status != 'selesai' && Auth::user()->level === 'petugas'))

                            <div>
                                <form
                                    action="{{ route('tanggapan.store', ['username' => $pengaduan->masyarakat->username, 'id_pengaduan' => $pengaduan->id_pengaduan]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id_pengaduan"
                                        value="{{ $pengaduan->id_pengaduan }}">

                                    <div
                                        class="w-full mb-4 border rounded-lg border-gray-200  bg-gray-50 dark:bg-gray-700 dark:border-gray-600 ">
                                        {{-- Textarea Start --}}
                                        <div class="px-4 py-2 rounded-t-lg bg-white dark:bg-gray-800">
                                            <img id="outputFotoTanggapan" class="h-auto w-fit md:max-w-sm rounded-lg">
                                            <textarea id="tanggapan" name="tanggapan" rows="4"
                                                class="w-full px-0 text-sm focus:ring-0 border-0 text-gray-900 bg-white dark:bg-gray-800  dark:text-white dark:placeholder-gray-400"
                                                placeholder="Tuliskan tanggapan yang ingin anda sampaikan disini." required>{{ old('tanggapan') }}</textarea>
                                        </div>
                                        {{-- Textarea End --}}

                                        {{-- Footer Form Start --}}
                                        <div
                                            class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                            <button type="submit"
                                                class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                                Kirim Tanggapan
                                            </button>
                                            <div class="flex pl-0 space-x-1 sm:pl-2">
                                                <div class="">
                                                    {{-- Button Status Start --}}
                                                    <button id="dropdownStatusRadioButton"
                                                        data-dropdown-toggle="dropdownStatusRadio" type="button"
                                                        class="inline-flex justify-center p-2 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600  @error('status') border border-red-700 bg-gray-700 @enderror">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                            fill="currentColor" viewBox="0 0 512 512">
                                                            <path
                                                                d="M139.61 35.5a12 12 0 0 0-17 0L58.93 98.81l-22.7-22.12a12 12 0 0 0-17 0L3.53 92.41a12 12 0 0 0 0 17l47.59 47.4a12.78 12.78 0 0 0 17.61 0l15.59-15.62L156.52 69a12.09 12.09 0 0 0 .09-17zm0 159.19a12 12 0 0 0-17 0l-63.68 63.72-22.7-22.1a12 12 0 0 0-17 0L3.53 252a12 12 0 0 0 0 17L51 316.5a12.77 12.77 0 0 0 17.6 0l15.7-15.69 72.2-72.22a12 12 0 0 0 .09-16.9zM64 368c-26.49 0-48.59 21.5-48.59 48S37.53 464 64 464a48 48 0 0 0 0-96zm432 16H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z" />
                                                        </svg>
                                                    </button>
                                                    {{-- Button Status End --}}

                                                    <!-- Dropdown Status Start -->
                                                    <label for="status" id="dropdownStatusRadio"
                                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60 dark:bg-gray-700 dark:divide-gray-600"
                                                        data-popper-reference-hidden="" data-popper-escaped=""
                                                        data-popper-placement="top"
                                                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 6119.5px, 0px);">
                                                        <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                                                            aria-labelledby="dropdownStatusRadioButton">
                                                            @if ($pengaduan->status === '0')
                                                                <li>
                                                                    <div
                                                                        class=" flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                                        <div class="flex items-center h-5">
                                                                            <input id="proses" name="status"
                                                                                type="radio" value="proses"
                                                                                {{ old('status') == 'proses' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                        </div>
                                                                        <div class="ml-2 text-sm">
                                                                            <label for="proses"
                                                                                class="font-medium cursor-pointer text-gray-900 dark:text-gray-300">
                                                                                <div>Sedang Diproses</div>
                                                                                <p id="helper-radio-text-4"
                                                                                    class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                                                                    Ini akan mengupdate status menjadi
                                                                                    <span
                                                                                        class="font-bold text-yellow-500">proses</span>.
                                                                                </p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="cursor-not-allowed">
                                                                    <div class="flex p-2 rounded">
                                                                        <div class="flex items-center h-5">
                                                                            <input id="selesai" name="status"
                                                                                type="radio" value="selesai"
                                                                                disabled
                                                                                class="w-4 cursor-not-allowed h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                        </div>
                                                                        <div class="ml-2 text-sm">
                                                                            <label for="selesai"
                                                                                class="font-medium cursor-not-allowed text-gray-900 dark:text-gray-300">
                                                                                <div>Telah Diselesaikan</div>
                                                                                <p id="helper-radio-text-5"
                                                                                    class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                                                                    Ini akan mengupdate status menjadi
                                                                                    <span
                                                                                        class="font-bold text-green-500">selesai</span>.
                                                                                </p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                            @if ($pengaduan->status === 'proses')
                                                                <li class="cursor-not-allowed">
                                                                    <div class=" flex p-2 rounded">
                                                                        <div class="flex items-center h-5">
                                                                            <input id="proses" name="status"
                                                                                type="radio" value="proses" disabled
                                                                                class="w-4 h-4 cursor-not-allowed text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                        </div>
                                                                        <div class="ml-2 text-sm">
                                                                            <label for="proses"
                                                                                class="font-medium cursor-not-allowed text-gray-900 dark:text-gray-300">
                                                                                <div>Sedang Di Proses</div>
                                                                                <p id="helper-radio-text-4"
                                                                                    class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                                                                    Ini akan mengupdate status menjadi
                                                                                    <span
                                                                                        class="font-bold text-yellow-500">proses</span>.
                                                                                </p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                                        <div class="flex items-center h-5">
                                                                            <input id="selesai" name="status"
                                                                                type="radio" value="selesai"
                                                                                {{ old('status') == 'selesai' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                        </div>
                                                                        <div class="ml-2 text-sm">
                                                                            <label for="selesai"
                                                                                class="font-medium cursor-pointer text-gray-900 dark:text-gray-300">
                                                                                <div>Masalah Telah Diselesaikan</div>
                                                                                <p id="helper-radio-text-5"
                                                                                    class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                                                                    Ini akan mengupdate status menjadi
                                                                                    <span
                                                                                        class="font-bold text-green-500">selesai</span>.
                                                                                </p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </label>
                                                    <!-- Dropdown Status End -->
                                                </div>

                                                {{-- Button Foto Start --}}
                                                <label for="foto" type="button"
                                                    class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 @error('foto') border border-red-700 bg-gray-700 @enderror">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Upload image</span>
                                                    <input id="foto" class="w-1 -ml-1 h-5 opacity-0 "
                                                        accept="image/*" name="foto" type="file"
                                                        onchange="loadFileTanggapan(event)">
                                                </label>
                                                {{-- Button Foto End --}}

                                            </div>
                                        </div>
                                        {{-- Footer Form End --}}
                                    </div>
                                </form>

                                <script></script>
                            </div>
                        @endif
                    </div>

                    {{-- Content Tanggapan Start --}}
                    <div>
                        @foreach ($pengaduan->tanggapan as $item)
                            <div>
                                <article
                                    class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <footer class="flex justify-between items-center mb-2">
                                        <div class="flex flex-col sm:flex-row">
                                            <p class="capitalize text-sm sm:mr-3 text-gray-900 dark:text-white">
                                                @foreach ($item->petugas as $petugas)
                                                    {{ $petugas->username }}
                                                @endforeach

                                            </p>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                {{ date('H:i • d M y', strtotime($item->tgl_tanggapan)) }}
                                            </p>
                                        </div>
                                        @if ($item->id_petugas === Auth::user()->id_petugas || Auth::user()->level === 'admin')
                                            <button id="dropdownTanggapanButton"
                                                data-dropdown-toggle="dropdownTanggapan"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <!-- Dropdown menu -->
                                            <div id="dropdownTanggapan"
                                                class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    </footer>
                                    <div class="flex my-5">
                                        <img src="{{ asset('/storage/foto_tanggapan/' . $item->foto) }}"
                                            class="h-auto w-fit md:max-w-xs rounded-lg">
                                    </div>
                                    <p class="text-gray-500 dark:text-gray-400">
                                        {{ $item->tanggapan }}
                                    </p>
                                    <div class="flex items-center mt-4 space-x-4">
                                        <button type="button"
                                            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                                </path>
                                            </svg>
                                            Reply
                                        </button>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- ***Tanggapan Contents End*** --}}



                {{-- ***Chat Contents End*** --}}
                <div class="hidden rounded-lg sm:p-4" id="chats" role="tabpanel" aria-labelledby="chats-tab">
                    {{-- Form Chat --}}
                    <div class="mb-4">
                        <form id="form-chat"
                            action="{{ route('chat.store', ['username' => $pengaduan->masyarakat->username, 'id_pengaduan' => $pengaduan->id_pengaduan]) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">

                            <div
                                class="w-full flex items-end px-1 py-2 rounded-lg sm:px-3 bg-gray-50 dark:bg-gray-700">
                                {{-- Btn IMG --}}
                                <div class="pb-2">
                                    <label for="inputFotoChat" type="button"
                                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 @error('fotochat') border border-red-700 bg-gray-700 @enderror">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Upload image</span>
                                        <input id="inputFotoChat" class="w-1 -ml-1 h-5 opacity-0 " accept="image/*"
                                            name="foto_chat" type="file">
                                    </label>
                                </div>

                                {{-- Input --}}
                                <div class="mx-1 p-2.5 w-full rounded-lg sm:mx-4 bg-white dark:bg-gray-800 ">
                                    <div class="relative">
                                        <img id="outputFotoChat"
                                            class="mb-1 h-auto mx-auto w-fit max-w-full rounded-lg">
                                        <button id="cancelFotoChat"
                                            class="absolute -top-1 -right-1 text-white bg-indigo-500 bg-opacity-25 rounded-full w-5 h-5 flex items-center justify-center"
                                            style="display: none;">
                                            <div class="w-5 h-5 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                    fill="#ffffff" class="w-3 h-3">
                                                    <path
                                                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                </svg>
                                            </div>
                                        </button>
                                    </div>
                                    <textarea id="content_chat" name="content_chat" rows="1"
                                        class="chat-input w-full h-auto max-h-20 p-0 overflow-y-auto text-sm focus:ring-0 border-0 text-gray-900 bg-white dark:bg-gray-800  dark:text-white dark:placeholder-gray-400"
                                        placeholder="Ketik pesan" required>{{ old('content_chat') }}</textarea>
                                </div>

                                {{-- Btn Submit --}}
                                <div class="pb-1">
                                    <button type="submit" id="submit-chat"
                                        class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                                        <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Send message</span>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    {{-- List Chat --}}
                    <div>
                        @foreach ($chats as $chat)
                            <div>
                                <article
                                    class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <footer class="flex justify-between items-center mb-2">
                                        <div class="flex flex-col sm:flex-row">
                                            <p class=" text-sm sm:mr-3 text-gray-900 dark:text-white">
                                                @if (optional($chat->petugas)->username != null)
                                                    {{ $chat->petugas->username }}
                                                @endif
                                                @if (optional($chat->masyarakat)->username != null)
                                                    {{ $chat->masyarakat->username }}
                                                @endif

                                            </p>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                {{ date('H:i • d M y', strtotime($chat->tgl_chat)) }}
                                                {{ $chat->id_chat }}
                                            </p>
                                        </div>
                                        @if (Auth::user()->level === 'admin')
                                            <button data-id="{{ $chat->id_chat }}" id="dropdownChatButton"
                                                data-dropdown-toggle="dropdownChat"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <!-- Dropdown menu -->
                                            <div id="dropdownChat"
                                                class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                                    <li>
                                                        {{-- {{ $chat->id_chat }} --}}
                                                        <input id="id_chat" class="text-gray-900" type="text">
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    </footer>
                                    @if ($chat->foto != null)
                                        <div class="flex my-5">
                                            <img src="{{ asset('/storage/foto_chat/' . $chat->foto) }}"
                                                class="h-auto w-fit md:max-w-xs rounded-lg">
                                        </div>
                                    @endif
                                    <p class="text-gray-500 dark:text-gray-400">
                                        {{ $chat->content_chat }}
                                    </p>
                                    <div class="flex items-center mt-4 space-x-4">
                                        <button type="button"
                                            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                                </path>
                                            </svg>
                                            Reply
                                        </button>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- ***Chat Contents End*** --}}


                {{-- ============== --}}
                <div class="hidden p-4 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <h1 class="text-gray-50">setting</h1>
                </div>
                <div class="hidden p-4 rounded-lg" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <h1 class="text-gray-50">contact</h1>
                </div>
            </div>
        </div>

    </section>
    {{-- ============ Content End============ --}}


    @section('scripts')
        {{-- Scripts for Alert Sucess --}}
        @if (session('success') || $errors->any())
            <script>
                setTimeout(() => {
                    const box = document.getElementById('toast-top-right');
                    box.style.opacity = '0';
                    box.style.transition = '2s'
                }, 10000);
                setTimeout(() => {
                    const box = document.getElementById('toast-top-right');
                    box.remove();
                }, 12000);
            </script>
        @endif
        <script>
            // Script for keyBind submit chat
            document.addEventListener("keydown", function(event) {
                if (event.ctrlKey && event.key === "Enter") {
                    document.getElementById("submit-chat").click();
                }
            });

            // Scripts for give priview image chat
            const inputFotoChat = document.getElementById("inputFotoChat");
            // const inputFile = document.getElementById("inputFotoChat");
            const cancelBtn = document.getElementById("cancelFotoChat");

            inputFotoChat.addEventListener("change", function(event) {
                const reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('outputFotoChat').src = reader.result;
                    cancelBtn.style.display = "block";
                };
                reader.readAsDataURL(event.target.files[0]);
            });

            cancelBtn.addEventListener("click", function() {
                const outputFotoChat = document.getElementById('outputFotoChat');
                outputFotoChat.src = "";
                cancelBtn.style.display = "none";
                inputFotoChat.value = "";
            });

            // Scripts for give priview image tanggapan
            var loadFileTanggapan = function(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var outputFotoTanggapan = document.getElementById('outputFotoTanggapan');
                    outputFotoTanggapan.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            };

            $(document).ready(function() {
                // Scripts for change height form content_chat
                $('#content_chat').on('input', function() {
                    if (this.scrollHeight < (window.innerHeight * 0.2)) {
                        $(this).css('height', 'auto');
                        $(this).height(this.scrollHeight);

                    }
                });

                // Scripts get id in modal
                $(document).on('click', "#dropdownChatButton", function() {
                    var id_chat = $(this).data('id');
                    $("#id_chat").val(id_chat)
                });
            });
        </script>
    @endsection

</x-app-layout>
