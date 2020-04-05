@extends('layouts.app')

@section('content')

    <div class="h-20 pattern-zigzag bg-brown-700"></div>

    <div class="max-w-3xl m-auto p-8">
        <div class="shadow-xl rounded bg-white" style="position: relative; margin-top: -4em">
            <div class="text-center pattern-wave px-6 py-8">
                <span class="inline-block bg-orange-200 rounded-lg px-3 py-1 text-sm font-bold text-orange-500 mr-2 mb-1">Doa</span>
                <h1 class="font-bold text-3xl text-brown-700 leading-tight">Doa Husnul Khatimah</h1>
            </div>
            <div class="md:text-lg md:leading-normal p-6 md:p-12 text-brown-600">
                <p class="arabic text-3xl">
                    رَبَّنَا وَآتِنَا مَا وَعَدْتَنَا عَلَىٰ رُسُلِكَ وَلَا تُخْزِنَا يَوْمَ الْقِيَامَةِ ۗ إِنَّكَ لَا تُخْلِفُ الْمِيعَادَ . رَبَّنَا إِنَّنَا سَمِعْنَا مُنَادِيًا يُنَادِي لِلْإِيمَانِ أَنْ آمِنُوا بِرَبِّكُمْ فَآمَنَّا ۚ رَبَّنَا فَاغْفِرْ لَنَا ذُنُوبَنَا وَكَفِّرْ عَنَّا سَيِّئَاتِنَا وَتَوَفَّنَا مَعَ الْأَبْرَارِ
                </p>
                <div class="h-4"></div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, iure, provident. Optio tempora vitae voluptate. Debitis dignissimos dolore eaque eos laboriosam nobis nostrum provident quia reprehenderit temporibus. Iusto tempore, veniam?
                </p>
            </div>

            <div class="bg-orange-100 rounded-b-lg">
                <div class="flex text-sm font-bold">
                    <a href="" class="w-1/3 text-center hover:bg-gray-400 text-teal-600 py-4 px-4 rounded-bl"><i class="fad fa-share md:mr-1"></i> <div class="md:inline">Bagikan</div></a>
                    <a class="w-1/3 text-center hover:bg-gray-400 text-teal-600 py-4 px-4"><i class="fad fa-arrow-down md:mr-1"></i> <div class="md:inline">Download</div></a>
                    <a class="w-1/3  text-center hover:border-gray-500 text-teal-600 py-4 px-4 rounded-br"><i class="fad fa-code md:mr-1"></i> <div class="md:inline">Embed</div></a>
                </div>
            </div>

        </div>
    </div>
@endsection
