@extends('layouts.app')

@section('content')
    <div class="bg-teal-600 text-white pt-8 mb-8 pattern-alt">
        <div class="max-w-3xl m-auto text-center overflow-y-visible h-32">
            <h1 class="font-bold text-3xl md:text-4xl">Hadis Abu Daud</h1>
            <div class="font-light">Hadis nomor 1 <span class="text-xs text-gray-500 font-semibold">-</span> 10</div>

            <div class="h-8"></div>

            <div class="inline-flex shadow-md">
                <a class="text-sm bg-white hover:bg-yellow-300 text-gray-800 font-semibold py-2 px-4 rounded-l">
                    1
                </a>
                <a class="text-sm bg-white hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 border-l border-gray-300">
                    2
                </a>
                <a class="text-sm bg-white hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r border-l border-gray-300">
                    3
                </a>
            </div>
        </div>
    </div>

    <div class="p-4 flex flex-wrap max-w-3xl m-auto">
        <div class="rounded-lg shadow-lg">
            <div class="text-center bg-white py-8 px-2 rounded-t-lg flex">
                <div class="flex-grow font-bold text-xl">
                    Hadis Abu Daud Nomor 190
                    <div class="font-normal text-sm text-teal-500">Trending #3</div>
                </div>
            </div>

            <div class="px-6 py-4 sm:px-12 sm:py-8 bg-white">
                <div class="arabic">وَقَاتِلُوا فِي سَبِيلِ اللَّهِ الَّذِينَ يُقَاتِلُونَكُمْ وَلَا تَعْتَدُوا ۚ إِنَّ اللَّهَ لَا يُحِبُّ الْمُعْتَدِينَ</div>
            </div>

            <div class="px-6 py-4 sm:px-12 sm:py-8 bg-white">
                <div class="mb-8">
                    <h4 class="font-bold mb-2">Terjemahan hadis Abu Daud nomor 19:</h4>
                    <p class="text-base">Dan perangilah di jalan Allah orang-orang yang memerangi kamu, (tetapi) janganlah kamu melampaui batas, karena sesungguhnya Allah tidak menyukai orang-orang yang melampaui batas.</p>
                </div>
            </div>

            <div class="bg-orange-100 rounded-b-lg">
                <div class="flex text-sm font-bold">
                    <a href="" class="w-1/3 text-center hover:bg-gray-400 text-teal-600 py-4 px-4 rounded-bl"><i class="fad fa-share md:mr-1"></i> <div class="md:inline">Share</div></a>
                    <a class="w-1/3 text-center hover:bg-gray-400 text-teal-600 py-4 px-4"><i class="fad fa-arrow-down md:mr-1"></i> <div class="md:inline">Download</div></a>
                    <a class="w-1/3  text-center hover:border-gray-500 text-teal-600 py-4 px-4 rounded-br"><i class="fad fa-code md:mr-1"></i> <div class="md:inline">Embed</div></a>
                </div>
            </div>
        </div>
    </div>
@endsection
