<form action="/{{ $pengaduan->masyarakat->username }}/pengaduan/{{ $pengaduan->id_pengaduan }}/chat" method="post"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">
    <input type="hidden" name="id_petugas" value="{{ Auth::user()->id_petugas }}">
    <input type="hidden" name="nik" value="{{ Auth::user()->nik }}">

    <div
        class="w-full mb-4 border rounded-lg @error('content_chat') border-red-500 focus:border-red-500 dark:border-red-700  @else border-gray-200  bg-gray-50 dark:bg-gray-700 dark:border-gray-600 @enderror">
        {{-- Textarea Start --}}
        <div
            class="px-4 py-2 rounded-t-lg @error('content_chat') bg-red-50 dark:bg-red-300 @else bg-white dark:bg-gray-800 @enderror">
            <img id="output" class="h-auto w-fit md:max-w-sm rounded-lg">
            <textarea id="content_chat" name="content_chat" rows="4"
                class="w-full px-0 text-sm focus:ring-0 border-0 @error('content_chat') bg-red-50 text-red-900 placeholder-red-700 dark:bg-red-300 dark:text-red-900 @else text-gray-900 bg-white dark:bg-gray-800  dark:text-white dark:placeholder-gray-400 @enderror"
                placeholder="@error('content_chat')TOLONG TULISKAN PESAN YANG INGIN ANDA SAMPAIKAN DISINI. @else Tuliskan pesan yang ingin anda sampaikan disini. @enderror"
                required>{{ old('content_chat') }}</textarea>
        </div>
        {{-- Textarea End --}}

        {{-- Footer Form Start --}}
        <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
            <button type="submit"
                class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                Kirim Pesan
            </button>

            <div class="flex pl-0 space-x-1 sm:pl-2">
                {{-- Button Foto Start --}}
                <label for="foto" type="button"
                    class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 @error('foto') border border-red-700 bg-gray-700 @enderror">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Upload image</span>
                    <input id="foto" class="w-1 -ml-1 h-5 opacity-0 " accept="image/*" name="foto"
                        type="file" onchange="loadFile(event)">
                </label>
                {{-- Button Foto End --}}

            </div>
        </div>
        {{-- Footer Form End --}}
    </div>
</form>
{{-- Button Foto End --}}
{{-- <img id="outputFotoChat" class="h-auto w-fit md:max-w-sm rounded-lg">

                            <textarea id="content_chat" rows="1" name="content_chat"
                                class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Your message..."></textarea> --}}
