<div>
    @section('title', 'Pengaduan')

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
                class="ml-1 -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
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


    {{-- ============ Form Pengaduan Start============ --}}
    <div>
        <form action="{{ route('pengaduan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div
                class="max-w-xl mx-auto mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <div class="px-4 pt-4 pb-2 bg-white rounded-t-lg dark:bg-gray-800">
                    <img id="outputFotoLaporan" class="h-auto w-fit md:max-w-sm rounded-lg">
                    <textarea id="isi_laporan" name="isi_laporan" rows="4"
                        class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                        placeholder="Tuliskan masalah yang terjadi disini." required>{{ old('isi_laporan') }}</textarea>
                </div>
                <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                    <button type="submit"
                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Post comment
                    </button>
                    <div class="flex pl-0 space-x-1 sm:pl-2">
                        <label for="foto" type="button"
                            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Upload image</span>
                            <input id="foto" class="w-1 -ml-1 h-5 opacity-0 " accept="image/*" name="foto"
                                type="file" onchange="loadFileLaporan(event)">
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- ============ Form Pengaduan End============ --}}


    {{-- ============ Table Pengaduan ============ --}}
    <div>
        <div class="space-y-5 mt-16">
            <h1 class="text-2xl font-extrabold md:text-3xl md:font-extrabold dark:text-gray-100">#Pengaduan Saya:
            </h1>
            <div class="relative rounded-sm overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Image</span>
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Isi Laporan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengaduan as $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-32 p-4">
                                    <img class="rounded-sm shadow-xl"
                                        src="{{ asset('/storage/foto_pengaduan/' . $item->foto) }}">
                                </td>
                                <td class="px-6 py-4 w-fit truncate font-semibold text-gray-900 dark:text-white">
                                    {{ date('H:i d M y', strtotime($item->tgl_pengaduan)) }}
                                </td>
                                <td class="px-6 py-4 max-[600px]:truncate max-w-xs  md:max-w-sm">
                                    <div class="isi_laporan max-h-28 overflow-x-scroll ">
                                        {{ $item->isi_laporan }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    @if ($item->status === '0')
                                        <span
                                            class="bg-red-100 truncate text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Not
                                            Confirm</span>
                                    @elseif($item->status === 'proses')
                                        <span
                                            class="bg-yellow-100 w-full text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Process</span>
                                    @elseif($item->status === 'selesai')
                                        <span
                                            class="bg-green-100 w-full text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Selesai</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('pengaduan.show', ['username' => $item->masyarakat->username, 'id_pengaduan' => $item->id_pengaduan]) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- ============ Table Pengaduan Start============ --}}



    @section('scripts')
        {{-- Scripts for Alert Success --}}
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
            // Scripts for change height form isi_laporan
            var input = document.getElementById("isi_laporan");
            input.addEventListener("input", function() {
                if (this.scrollHeight < (window.innerHeight * 0.5)) {
                    this.style.height = "auto";
                    this.style.height = this.scrollHeight + "px";
                }
            });

            // Scripts for give priview image
            var loadFileLaporan = function(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var outputFotoLaporan = document.getElementById('outputFotoLaporan');
                    outputFotoLaporan.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            };
        </script>
    @endsection


</div>
