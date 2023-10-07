<x-app-layout>
    @section('title', 'Home')

    @if (Auth::user()->level === 'petugas' || Auth::user()->level === 'admin')
        @livewire('home.home-petugas')
    @else
        @livewire('home.home-masyarakat')
    @endif
</x-app-layout>
