@extends('layouts.app')

@section('content')
    <x-hero title="Fatwa DSN" subtitle="Fatwa Dewan Syariah Nasional MUI" />

    <div class="">
        <div class="p-4 max-w-3xl m-auto">
            <div class="bg-white rounded-lg shadow-md">
                @foreach(range(1,9) as $i)
                    <div class="flex items-center px-8 py-6 border-b">
                        <a href="#" class="block flex-grow">
                            <div class="text-xs text-teal-600 tracking-widest">109/DSN-MUI/II/2017</div>
                            <h2 class="font-semibold">Pembiayaan Likuiditas Jangka Pendek Syariah</h2>
                        </a>
                        <a href="#" class="ml-8 text-center pt-1">
                            <i class="fad fa-download fa-2x"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
