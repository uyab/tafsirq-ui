@extends('layouts.app')

@section('content')
    <div class="bg-teal-600 text-white mb-8 pattern-curtain">
        <div class="max-w-3xl m-auto text-center">
            <div class="py-8 px-4">
                <h1 class="font-bold text-3xl md:text-4xl">Doa Sehari-hari</h1>
                <div class="font-light">
                    Doa itu senjata orang mukmin, tiang agama, serta cahaya langit-langit dan bumi.
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 flex flex-wrap max-w-3xl m-auto">
        @foreach(range(1,10) as $i)
        <a href="{{ route('konten.show', ['doa', 'doa-masuk-rumah']) }}" class="block rounded-lg shadow-md w-full bg-white mb-4 flex items-center flex-wrap">
            <div class="w-full md:w-2/5 font-bold text-brown-600 text-lg px-6 md:px-8 py-4 text-center md:text-left">
                Doa Mohon Perlindungan
            </div>

            <div class="w-full md:w-3/5 px-6 md:py-4">
                <div class="arabic text-2xl">وَقَاتِلُوا فِي سَبِيلِ اللَّهِ الَّذِينَ</div>
                <p class="text-right text-sm mb-4 text-brown-600">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorem dolores ea facere, fuga id incidunt iure laboriosam
                </p>
            </div>
        </a>
        @endforeach
    </div>
@endsection
