@extends('layouts.app')

@section('content')

    <div class="max-w-2xl m-auto p-4">
        <div class="px-16 py-8">
            <img src="https://tafsirq.com/img/bannertafsirq.jpg" alt="" class="w-auto">
        </div>

        <div class="rounded-lg shadow-lg">
            <div class="text-center bg-white pt-8 pb-4 px-2 rounded-t-lg flex">
                <div class="ml-4 flex w-8 h-8 rounded-full items-center justify-center">
                    <i class="fad fa-2x fa-chevron-left"></i>
                </div>
                <div class="flex-grow font-bold text-xl">
                    Surat Al-Baqarah Ayat 190
                    <div class="font-normal text-sm text-teal-500">Trending #3</div>
                </div>
                <div class="mr-4 flex w-8 h-8 rounded-full items-center justify-center">
                    <i class="fad fa-swap fa-2x fa-chevron-right"></i>
                </div>
            </div>

            <div class="px-4 md:px-8 py-8 bg-white">
                <div class="arabic">وَقَاتِلُوا فِي سَبِيلِ اللَّهِ الَّذِينَ يُقَاتِلُونَكُمْ وَلَا تَعْتَدُوا ۚ إِنَّ اللَّهَ لَا يُحِبُّ الْمُعْتَدِينَ</div>
            </div>

            <div class="flex text-center text-xs font-semibold bg-white justify-around uppercase items-end">
                <a class="text-teal-700 px-6 py-4" href="#">Terjemahan</a>
                <a class="text-teal-500 px-6 py-4 bg-orange-100 rounded-t-lg" href="#">Tafsir Jalalayn</a>
                <a class="text-teal-700 px-6 py-4" href="#">Tafsir Quraish Shihab</a>
            </div>

            <div class="p-8 bg-orange-100">
                <div class="mb-8">
                    <h4 class="font-bold mb-2">Terjemahan dari Al-Qur'an surat Al-Baqarah ayat 190 adalah:</h4>
                    <p class="text-lg">Dan perangilah di jalan Allah orang-orang yang memerangi kamu, (tetapi) janganlah kamu melampaui batas, karena sesungguhnya Allah tidak menyukai orang-orang yang melampaui batas.</p>
                </div>

                <h4 class="font-xl font-bold mb-4">Topik yang berkaitan dengan ayat ini adalah:</h4>

                <span class="inline-block bg-orange-200 rounded-full px-3 py-1 text-xs font-semibold text-orange-400 mr-2 mb-1">Akhlaq & Adab</span>
                <span class="inline-block bg-orange-200 rounded-full px-3 py-1 text-xs font-semibold text-orange-400 mr-2 mb-1">Permusuhan</span>
                <span class="inline-block bg-orange-200 rounded-full px-3 py-1 text-xs font-semibold text-orange-400 mr-2 mb-1">Jihad</span>
                <span class="inline-block bg-orange-200 rounded-full px-3 py-1 text-xs font-semibold text-orange-400 mr-2 mb-1">Perintah Perang</span>
                <span class="inline-block bg-orange-200 rounded-full px-3 py-1 text-xs font-semibold text-orange-400 mr-2 mb-1">Kewajiban Jihad</span>

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
