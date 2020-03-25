@extends('layouts.app')

@section('content')
    <x-hero title="Fatwa DSN" subtitle="Fatwa Dewan Syariah Nasional MUI" />

    <div class="bg-gray-100">
        <div class="p-4 max-w-3xl m-auto">
            <div class="bg-white rounded-lg shadow-md">
                @foreach(range(1,9) as $i)
                    <div class="flex items-center px-8 py-6 border-b">
                        <a href="#" class="block flex-grow">
                            <div class="text-xs tracking-widest">109/DSN-MUI/II/2017</div>
                            <h2 class="font-bold">Pembiayaan Likuiditas Jangka Pendek Syariah</h2>
                        </a>
                        <a href="#" class="ml-8 w-8 h-8 rounded-full bg-pink-100 text-center relative pt-1">
                            <i class="fal fa-download text-pink-700"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
