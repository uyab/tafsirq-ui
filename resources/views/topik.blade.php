@extends('layouts.app')

@section('content')
    <x-hero title="Ikhlas" subtitle="Apa kata Al-Qur'an tentang" reverse="true" />

    <div class="max-w-2xl m-auto">

        <div class="flex flex-wrap">
            <div class="p-4">
                @foreach(range(1, 10) as $item)
                    <div class="shadow-lg rounded-lg">
                        <div class="bg-white px-4 py-2 rounded-t flex">
                            <div class="flex-grow font-bold text-teal-600">
                                Surat Al-Baqarah Ayat 47
                            </div>
                            <div>
                                <span class="rounded-lg bg-orange-200 text-orange-600 text-xs px-2 py-1">tafsir</span>
                            </div>
                        </div>
                        <div class="p-4 rounded-b text-sm text-gray-700 bg-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolores et iste iusto laborum nihil provident quas reiciendis totam. Blanditiis est expedita nam quaerat qui quisquam reprehenderit vel velit? Consequuntur.</div>
                    </div>
                    <div class="h-8"></div>

                    @if($loop->first)
                        <img src="https://tafsirq.com/img/bannertafsirq.jpg" alt="">
                        <div class="h-8"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
