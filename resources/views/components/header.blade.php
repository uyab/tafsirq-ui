<header class="p-4" style="background: #594A3C">
    <div class="max-w-4xl m-auto">
        <ol class="flex flex-wrap justify-center text-white text-sm sm:text-base font-light leading-loose tracking-wider">
            <li class="px-3 sm:px-4"><a href="{{ route('home') }}" class="block"><i class="fad fa-home-alt fa-light"></i></a>
            </li>
            <li class="px-3 sm:px-4"><a href="{{ route('quran.index') }}" class="block">Quran</a></li>
            <li class="px-3 sm:px-4"><a href="{{ route('hadits.books') }}" class="block">Hadits</a></li>
            <li class="px-3 sm:px-4"><a href="#" class="block">Doa</a></li>
            <li class="px-3 sm:px-4"><a href="#" class="block">Cerita</a></li>
            <li class="px-3 sm:px-4"><a href="#" class="block">Mushaf</a></li>
            <li class="px-3 sm:px-4"><a href="{{ route('fatwa.index') }}" class="block">Fatwa</a></li>
            <li class="px-3 sm:px-4"><a href="{{ route('page.kerja-sama') }}" class="block">Kerja Sama</a></li>
            <li class="px-3 sm:px-4 font-bold"><a href="{{ route('page.donasi') }}" class="block">Donasi</a></li>
        </ol>

        @if(! request()->is('/'))
            <div class="h-4"></div>
            <div class="flex">
                <div class="h-10 cursor-pointer flex-grow rounded-full">
                    <div class="flex">
                        <input type="search" name="search" placeholder="Cari topik, terjemahan, nama surat..."
                               class="flex-grow opacity-25 px-4 placeholder-black focus:opacity-75 focus:outline-none rounded-full">
                        <i class="fad fa-search fa-light m-3 mr-5 text-lg text-white w-4 h-4"></i>
                    </div>
                </div>
            </div>
            <div class="h-4"></div>
            <ol class="overflow-x-scroll scrolling-auto flex whitespace-no-wrap">
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
