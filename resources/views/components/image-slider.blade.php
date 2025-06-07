{{-- resources/views/components/image-slider.blade.php --}}
@props(['images'])

@php
    // normalise to an array
    $images = collect($images)->filter()->values();
@endphp

@if ($images->isNotEmpty())
    <div x-data="{
            images: {{ $images->toJson() }},
            current: 0,
            prev() { this.current = this.current === 0 ? this.images.length - 1 : this.current - 1 },
            next() { this.current = this.current === this.images.length - 1 ? 0 : this.current + 1 }
        }"
        class="relative group h-full w-full">

        {{-- Active slide --}}
        <div class="relative h-full w-full rounded-2xl overflow-hidden">
            <img :src="images[current]"
                 :alt='`Slide ${current+1}`'
                 class="object-cover w-full h-full transition-all duration-300" />
        </div>

        {{-- Nav arrows (appear on hover) --}}
        <button @click="prev"
                class="hidden group-hover:block absolute top-1/2 -translate-y-1/2 left-2
                       p-2 rounded-full bg-black/50 text-white hover:bg-black/70">
            &larr;
        </button>
        <button @click="next"
                class="hidden group-hover:block absolute top-1/2 -translate-y-1/2 right-2
                       p-2 rounded-full bg-black/50 text-white hover:bg-black/70">
            &rarr;
        </button>

        {{-- Dots --}}
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
            <template x-for="(img, idx) in images" :key="idx">
                <button @click="current = idx"
                        :class="current === idx ? 'bg-white' : 'bg-white/50'"
                        class="w-2 h-2 rounded-full"></button>
            </template>
        </div>
    </div>
@endif
