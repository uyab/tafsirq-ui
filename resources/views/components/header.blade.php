<header class="p-4 bg-brown-700">
    <div class="max-w-4xl m-auto">
        <ol class="flex flex-wrap justify-center text-white text-sm sm:text-base font-light leading-loose tracking-wider">
            <li class="px-3 sm:px-4"><a href="{{ route('home') }}" class="block"><i class="fad fa-home-alt fa-light"></i></a>
            </li>
            <li class="px-3 sm:px-4"><a href="{{ route('quran.index') }}" class="block">Quran</a></li>
            <li class="px-3 sm:px-4"><a href="{{ route('hadits.books') }}" class="block">Hadits</a></li>
            <li class="px-3 sm:px-4"><a href="{{ route('konten.index', 'doa') }}" class="block">Doa</a></li>
            <li class="px-3 sm:px-4"><a href="#" class="block">Cerita</a></li>
            <li class="px-3 sm:px-4"><a href="#" class="block">Mushaf</a></li>
            <li class="px-3 sm:px-4"><a href="{{ route('fatwa.index') }}" class="block">Fatwa</a></li>
            <li class="px-3 sm:px-4"><a href="{{ route('page.kerja-sama') }}" class="block">Kerja Sama</a></li>
            <li class="px-3 sm:px-4 font-bold"><a href="{{ route('page.donasi') }}" class="block">Donasi</a></li>
        </ol>

        @if(! request()->is('/'))
            <div class="h-4"></div>
            <div class="relative w-full">
                <input type="search" name="serch" placeholder="Cari topik, terjemahan, nama surat..." class="w-full text-black placeholder-black h-10 px-5 pr-12 rounded-full focus:outline-none bg-white opacity-25 focus:opacity-100">
                <button type="submit" class="absolute right-0 top-0 mt-2 mr-6">
                    <i class="fas fa-search text-lg text-gray-900 w-4 h-4"></i>
                </button>
            </div>

            <div class="h-4"></div>
            <ol class="overflow-x-scroll scrolling-auto scrolling-0 flex whitespace-no-wrap">
                @foreach(range(1,10) as $i)
                    <li class="pr-6 inline-flex">
                        <span class="text-teal-500 text-xs pr-1">{{ $i }}</span>
                        <span class="text-white text-sm font-semibold opacity-50">Topik {{ $i % 3 == 0 ? 'lorem ipsum' : '' }}</span>
                    </li>
                @endforeach
            </ol>

        @endif
    </div>
</header>
