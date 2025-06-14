@props([
    // default to the global variable from the view-composer, but allow override
    'services' => null,
])

@php
    $finalServices = $services ?? $serviceIndex ?? [];
@endphp

<div {{ $attributes->merge(['class' => 'relative']) }}
     x-data="serviceSearch({{ json_encode($finalServices) }}, '{{ app()->getLocale() }}')">

    <input
        type="search"
        x-model="term"
        @input.debounce.150="filter"
        @keydown.enter.prevent="go()"
        :placeholder="locale === 'en' ? 'Search…' : 'Buscar…'"
        class="w-full bg-[#1a3655] text-white placeholder-gray-400 text-sm rounded-full py-1 px-4 pr-10 focus:outline-none focus:ring-2 focus:ring-[#f5b027]"
        autocomplete="off"
    >

    <!-- dropdown -->
    <template x-if="show">
        <ul class="absolute left-0 right-0 mt-2 bg-[#1a3655] rounded-md shadow-lg overflow-hidden z-50">
            <template x-for="opt in filtered" :key="opt.url">
                <li>
                    <a :href="opt.url"
                       class="block px-4 py-2 text-sm hover:bg-[#0f2d49] focus:bg-[#0f2d49] transition-colors"
                       x-text="opt[locale]"></a>
                </li>
            </template>
            <template x-if="filtered.length === 0">
                <li class="px-4 py-2 text-sm text-gray-400">
                    <span x-text="locale === 'en' ? 'No matches' : 'Sin resultados'"></span>
                </li>
            </template>
        </ul>
    </template>

    <!-- icon -->
    <button @click.prevent="go()"
            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-[#f5b027]">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z"/>
        </svg>
    </button>
</div>

@once
    <script>
        /*  Define serviceSearch function immediately  */
        if (typeof window.serviceSearch === 'undefined') {
            window.serviceSearch = function (all, locale) {
                return {
                    all, locale,
                    term: '', filtered: [], show: false,

                    filter() {
                        const q = this.term.toLowerCase().trim();
                        this.filtered = q.length < 2
                            ? []
                            : this.all.filter(s =>
                                s[this.locale] && s[this.locale].toLowerCase().includes(q)
                              ).slice(0, 6);
                        this.show = this.filtered.length > 0;
                    },

                    go() {
                        if (this.filtered.length) {
                            const hit = this.filtered.find(
                                s => s[this.locale].toLowerCase() === this.term.toLowerCase()
                            ) || this.filtered[0];
                            window.location = hit.url;
                        } else if (this.term.trim() !== '') {
                            window.location = '{{ route('search') }}?q=' +
                                encodeURIComponent(this.term);
                        }
                    }
                }
            }
        }
    </script>
@endonce
