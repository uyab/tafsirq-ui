@extends('layouts.app')

@section('content')
    <x-hero title="Hadis" subtitle="Kumpulan hadis dan terjemahannya dari 9 kitab hadis populer" />

    <div class="p-4 flex flex-wrap max-w-3xl m-auto">
        @foreach(range(1,9) as $i)
            <div class="w-full md:w-1/3 sm:w-1/2 text-center p-2">
                <div class="shadow-md bg-white rounded-lg p-4 md:p-6 lg:p-8">
                    <h2 class="font-bold text-xl">Abu Daud</h2>
                    <div class="font-light text-sm md:text-base text-teal-500">3.451 hadis</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
