<div class="bg-teal-600 text-white py-8 px-4">
    <div class="max-w-3xl m-auto text-center">
        @if(!$reverse)
            <h1 class="font-bold text-4xl leading-tight">{{ $title }}</h1>
            <div class="font-light">{{ $subtitle }}</div>
        @else
            <div class="font-light">{{ $subtitle }}</div>
            <h1 class="font-bold text-4xl leading-tight">{{ $title }}</h1>
        @endif
    </div>
</div>
