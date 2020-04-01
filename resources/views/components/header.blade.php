<nav class="bg-gray-200 p-4">
    <div class="max-w-4xl m-auto">
        <ol class="flex flex-wrap justify-center text-gray-700 text-sm leading-loose">
            <li class="px-4 sm:px-4"><a href="{{ route('home') }}" class="block"><i class="far fa-home"></i></a></li>
            <li class="px-4 sm:px-4"><a href="#" class="block">Quran</a></li>
            <li class="px-4 sm:px-4"><a href="#" class="block">Hadits</a></li>
            <li class="px-4 sm:px-4"><a href="#" class="block">Doa</a></li>
            <li class="px-4 sm:px-4"><a href="#" class="block">Cerita</a></li>
            <li class="px-4 sm:px-4"><a href="#" class="block">Mushaf</a></li>
            <li class="px-4 sm:px-4"><a href="#" class="block">Fatwa</a></li>
            <li class="px-4 sm:px-4"><a href="#" class="block">Kerja Sama</a></li>
            <li class="px-4 sm:px-4 font-bold"><a href="#" class="block">Donasi</a></li>
        </ol>

        @if(! request()->is('/'))
        <div class="h-4"></div>
        <div class="flex">
            <div class="h-10 bg-gray-600 cursor-pointer flex-grow rounded-full">
                <div class="flex">
                    <input type="search" name="search" placeholder="Cari Topik..."
                           class="flex-grow px-4 focus:outline-none rounded-l-full">
                    <i class="fas fa-search m-3 mr-5 text-lg text-gray-300 w-4 h-4"></i>
                </div>
            </div>
        </div>
        @endif
    </div>
</nav>
