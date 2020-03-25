@extends('layouts.app')

@section('content')
    <div class="max-w-4xl">

        <div class="flex flex-wrap">
            <div class="w-full md:w-1/4">
                <div class="pb-4 pt-12 px-4">
                    <h2 class="tracking-widest uppercase font-bold mb-4">#Trending</h2>
                    <ol class="text-sm flex flex-wrap">
                        @foreach(range(1,10) as $i)
                            <li class="pb-4 pr-4 md:w-full">
                                <span class="text-gray-400 p-1 text-xs">{{ $i }}</span>
                                <span class="text-gray-500 font-bold">Topik {{ $i % 3 == 0 ? 'lorem ipsum' : '' }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="w-full md:w-3/4">

                <div class="pb-4 pt-12 px-4">
                    <h2 class="text-3xl font-thin">Apa kata Al-Qur'an tentang <strong>Ikhlas</strong>?</h2>
                </div>

                <div class="p-4">
                    @foreach(range(1, 10) as $item)
                        <div class="shadow-lg rounded">
                            <div class="bg-gray-200 text-gray-800 px-4 py-2 rounded-t flex">
                                <div class="flex-grow">
                                    Surat Al-Baqarah Ayat 47
                                </div>
                                <div>
                                    <span class="rounded-full bg-gray-400 text-gray-800 text-xs px-2">tafsir</span>
                                </div>
                            </div>
                            <div class="p-4 rounded-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolores et iste iusto laborum nihil provident quas reiciendis totam. Blanditiis est expedita nam quaerat qui quisquam reprehenderit vel velit? Consequuntur.</div>
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
    </div>
@endsection
