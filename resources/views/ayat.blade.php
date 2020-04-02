@extends('layouts.app')

@section('content')

    <div class="max-w-2xl m-auto p-4">
        <div class="px-16 py-8">
            <img src="https://tafsirq.com/img/bannertafsirq.jpg" alt="" class="w-auto">
        </div>

        <div class="rounded shadow-lg">
            <div class="text-center bg-white py-4 px-2 rounded-t flex">
                <div class="ml-4 flex w-8 h-8 rounded-full items-center justify-center">
                    <i class="fad fa-2x fa-chevron-left"></i>
                </div>
                <div class="flex-grow font-bold text-xl">
                    Surat Al-Baqarah Ayat 190
                    <div class="font-normal text-sm text-teal-500">Trending #3</div>
                </div>
                <div class="mr-4 flex w-8 h-8 rounded-full items-center justify-center">
                    <i class="fad fa-2x fa-chevron-right"></i>
                </div>
            </div>

            <div class="px-12 py-8 bg-white">
                <div class="arabic">وَقَاتِلُوا فِي سَبِيلِ اللَّهِ الَّذِينَ يُقَاتِلُونَكُمْ وَلَا تَعْتَدُوا ۚ إِنَّ اللَّهَ لَا يُحِبُّ الْمُعْتَدِينَ</div>
            </div>

            <div class="flex bg-gray-100 text-center text-sm font-semibold p-4 bg-white justify-center items-end">
                <a class="text-teal-500 first:ml-0" href="#">Terjemahan</a>
                <a class="text-teal-800 ml-16" href="#">Tafsir Jalalayn</a>
                <a class="text-teal-800 ml-16" href="#">Tafsir Quraish Shihab</a>
            </div>

            <div class="px-12 py-8 bg-white">
                <div class="mb-8">
                    <h4 class="font-bold mb-2">Terjemahan dari Al-Qur'an surat Al-Baqarah ayat 190 adalah:</h4>
                    <p class="text-lg">Dan perangilah di jalan Allah orang-orang yang memerangi kamu, (tetapi) janganlah kamu melampaui batas, karena sesungguhnya Allah tidak menyukai orang-orang yang melampaui batas.</p>
                </div>

                <h4 class="font-xl font-bold mb-4">Topik yang berkaitan dengan ayat ini adalah:</h4>

                <span class="inline-block bg-orange-100 rounded-full px-3 py-1 text-xs font-semibold text-orange-500 mr-2 mb-1">Akhlaq & Adab</span>
                <span class="inline-block bg-orange-100 rounded-full px-3 py-1 text-xs font-semibold text-orange-500 mr-2 mb-1">Permusuhan</span>
                <span class="inline-block bg-orange-100 rounded-full px-3 py-1 text-xs font-semibold text-orange-500 mr-2 mb-1">Jihad</span>
                <span class="inline-block bg-orange-100 rounded-full px-3 py-1 text-xs font-semibold text-orange-500 mr-2 mb-1">Perintah Perang</span>
                <span class="inline-block bg-orange-100 rounded-full px-3 py-1 text-xs font-semibold text-orange-500 mr-2 mb-1">Kewajiban Jihad</span>

            </div>

            <div class="bg-orange-100 rounded-b">
                <div class="flex text-sm font-bold">
                    <a href="" class="w-1/3 text-center hover:bg-gray-400 text-teal-600 py-4 px-4 rounded-bl"><i class="fad fa-share mr-1"></i> Share</a>
                    <a class="w-1/3 text-center hover:bg-gray-400 text-teal-600 py-4 px-4"><i class="fad fa-arrow-down mr-1"></i> Download</a>
                    <a class="w-1/3  text-center hover:border-gray-500 text-teal-600 py-4 px-4 rounded-br"><i class="fad fa-code mr-1"></i> Embed</a>
                </div>
            </div>
        </div>
    </div>
@endsection
