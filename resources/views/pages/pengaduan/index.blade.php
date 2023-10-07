<x-app-layout>
    @section('title', 'Pengaduan')

    {{-- Page for admin --}}
    @if (Auth::user()->level === 'petugas' || Auth::user()->level === 'admin')
        @livewire('pengaduan.pengaduan-petugas')
    @else
        @livewire('pengaduan.pengaduan-masyarakat')
    @endif

</x-app-layout>
