@extends('layouts.app')

@section('content')

    <x-hero title="Donasi">
        <x-slot name="subtitle">
            <p class="text-xl leading-normal p-4">
                <strong>tafsirQ</strong> membuka kesempatan bagi siapa saja yang memiliki visi dan misi yang sama untuk
                menyebarkan konten-konten Islami kepada masyarakat.
            </p>
        </x-slot>
    </x-hero>

    <div class="max-w-4xl m-auto p-8">

        <h3 class="font-bold text-lg text-teal-600 uppercase">Transfer Bank</h3>
        <p>Silakan pilih nominal donasi yang dikehendaki lalu ikuti petunjuk yang ditampilkan:</p>

        <div class="h-8"></div>

        <a href="#" class="block px-4 py-4 shadow-md border bg-indigo-900 text-white rounded-lg text-center mb-4">
            <h3 class="font-bold">
                500.000
            </h3>
        </a>
        <a href="#" class="block px-4 py-4 shadow-md border bg-indigo-800 text-white rounded-lg text-center mb-4">
            <h3 class="font-bold">
                250.000
            </h3>
        </a>
        <a href="#" class="block px-4 py-4 shadow-md border bg-indigo-700 text-white rounded-lg text-center mb-4">
            <h3 class="font-bold">
                100.000
            </h3>
        </a>
        <a href="#" class="block px-4 py-4 shadow-md border bg-indigo-600 text-white rounded-lg text-center mb-4">
            <h3 class="font-bold">
                50.000
            </h3>
        </a>
        <a href="#" class="block px-4 py-4 shadow-md border bg-indigo-500 text-white rounded-lg text-center mb-4">
            <h3 class="font-bold">
                25.000
            </h3>
        </a>
    </div>
@endsection
