@extends('layouts.app')

@section('content')

    <div class="bg-teal-600 pt-8 mb-8">
        <div class="max-w-3xl m-auto text-center overflow-y-visible h-32">
            <div class="text-white">
                <h1 class="font-bold text-3xl md:text-4xl">Index Al-Qur'an</h1>
                <div class="font-light">Telusuri Al-Qur'an berdasar:</div>
            </div>

            <div class="h-8"></div>

            <div class="inline-flex shadow-md">
                <a class="text-sm bg-white hover:bg-yellow-300 font-semibold py-2 px-4 rounded-l bg-yellow-400">
                    Surat
                </a>
                <a class="text-sm bg-white hover:bg-gray-300 font-semibold py-2 px-4 border-l">
                    Juz
                </a>
                <a class="text-sm bg-white hover:bg-gray-400 font-semibold py-2 px-4 rounded-r border-l">
                    Tematik
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-4xl m-auto">
        <div class="p-4 flex flex-wrap justify-between">
            @foreach(range(1, 144) as $i)
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                    <a href="#" class="block sm:mx-1 sm:mb-6 mb-4 px-4 py-2 shadow-md bg-white rounded-lg text-center">
                        <h3 class="font-bold relative">
                            <span style="margin-left: -3em; width: 3em" class="text-right absolute font-semibold text-xs text-teal-500 rounded-sm px-1">{{ $i }}</span>
                            Al-Fatihah
                        </h3>
                        <div class="font-light tracking-wide text-xs">Pembukaan &bullet; Makiyah</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
