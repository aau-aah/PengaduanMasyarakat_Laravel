<x-app-layout>
    @section('title', 'Tanggapan')

    @if (Auth::user()->level === 'petugas' || Auth::user()->level === 'admin')
        @livewire('tanggapan.tanggapan-petugas')
    @else
        @livewire('tanggapan.tanggapan-masyarakat')
    @endif
</x-app-layout>
