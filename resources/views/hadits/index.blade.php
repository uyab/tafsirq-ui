@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 pt-8 0 mb-16">
        <div class="max-w-3xl m-auto text-center overflow-y-visible h-32">
            <h1 class="font-bold text-4xl">Hadis Abu Daud</h1>
            <div class="font-light">Hadis nomor 1 <span class="text-xs text-gray-500 font-semibold">-</span> 10</div>

            <div class="h-8"></div>

            <div class="inline-flex shadow-md">
                <a class="text-sm bg-gray-200 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                    Prev
                </a>
                <a class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 border-l border-gray-300">
                    1
                </a>
                <a class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 border-l border-gray-300">
                    2
                </a>
                <a class="text-sm bg-gray-200 text-gray-400 font-semibold py-2 px-4 border-l border-gray-300">
                    ...
                </a>
                <div class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 border-l border-gray-300">
                    8
                </div>
                <a class="text-sm bg-gray-200 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r border-l border-gray-300">
                    Next
                </a>
            </div>

        </div>
    </div>


    <div class="p-4 flex flex-wrap max-w-3xl m-auto">
        <div class="rounded shadow-lg">
            <div class="text-center bg-gray-200 py-4 px-2 rounded-t flex">
                <div class="flex-grow font-bold text-xl">
                    Hadis Abu Daud Nomor 190
                    <div class="font-normal text-sm text-teal-500">Trending #3</div>
                </div>
            </div>

            <div class="px-12 py-8">
                <div class="arabic">وَقَاتِلُوا فِي سَبِيلِ اللَّهِ الَّذِينَ يُقَاتِلُونَكُمْ وَلَا تَعْتَدُوا ۚ إِنَّ اللَّهَ لَا يُحِبُّ الْمُعْتَدِينَ</div>
            </div>

            <div class="px-12 py-8">
                <div class="mb-8">
                    <h4 class="font-bold mb-2">Terjemahan hadis Abu Daud nomor 19:</h4>
                    <p class="text-lg">Dan perangilah di jalan Allah orang-orang yang memerangi kamu, (tetapi) janganlah kamu melampaui batas, karena sesungguhnya Allah tidak menyukai orang-orang yang melampaui batas.</p>
                </div>
            </div>

            <div class="bg-gray-100 rounded-b">
                <div class="flex text-xs font-bold">
                    <a href="" class="w-1/3 text-center hover:bg-gray-400 text-gray-800 py-4 px-4 rounded-bl"><i class="fas fa-share"></i> Share</a>
                    <a class="w-1/3 text-center hover:bg-gray-400 text-gray-800 py-4 px-4"><i class="fas fa-arrow-down"></i> Download</a>
                    <a class="w-1/3  text-center hover:border-gray-500 text-gray-800 py-4 px-4 rounded-br"><i class="fas fa-code"></i> Embed</a>
                </div>
            </div>
        </div>
    </div>
@endsection
