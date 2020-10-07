<div class="nav_lang invisible   lg:visible xl:visible flex items-center h-0 lg:h-20 xl:h-20">
    <span class="hidden lang-label current-lang text-white font-black pr-4 lg:block xl:block ">@isset($currentLang){{ $currentLang }}@endisset</span>
    <div class="flex flex-row sm:flex-row  md:flex-row lg:flex-col xl:flex-col  justify-center block-lang-links  lg:border-l-2 border-solid border-white pl-0 md:pl-4 h-full">
        @isset($languages)
            @foreach($languages as $language)
                @if( $language->key != $currentLang)
                <a href="{{ route('home',['key' => $language->key]) }}"
                   class="inline-block   mt-4 lg:mt-0 text-gray-700 hover:text-white py-2 ">{{ $language->key }}</a>
                @endif
            @endforeach
        @endisset
    </div>
</div>
