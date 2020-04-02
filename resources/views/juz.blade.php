@extends('layouts.app')

@section('content')
    <div class="bg-teal-600 text-white pt-8 mb-8">
        <div class="max-w-3xl m-auto text-center overflow-y-visible h-32">
            <h1 class="font-bold text-4xl">Index Al-Qur'an</h1>
            <div class="font-light">Telusuri Al-Qur'an berdasar:</div>

            <div class="h-8"></div>

            <div class="inline-flex shadow-md">
                <a class="text-sm bg-white hover:bg-yellow-300 text-gray-800 font-semibold py-2 px-4 rounded-l">
                    Surat
                </a>
                <a class="text-sm bg-white hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 border-l border-gray-300">
                    Juz
                </a>
                <a class="text-sm bg-white hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r border-l border-gray-300">
                    Tematik
                </a>
            </div>

        </div>
    </div>

    <div class="max-w-4xl m-auto">
        <div class="p-4 flex flex-wrap">
            @foreach(range(1, 30) as $i)
                <div class="w-1/3 md:w-1/6">
                    <a href="#" class="block mx-1 sm:mb-6 mb-4 px-4 py-2 shadow-md bg-white rounded-lg text-center">
                        <h3 class="font-bold">
                            Juz {{ $i }}
                        </h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
