<section id="{{ $category['label']['nav_class'] }}" class="start-info">
    <div class="flex w-full">
        <div class="container mx-auto relative">
            <div class="flex mb-4">
                <div class="w-1/2 start-info-block">
                    <div  class="prime-text-info pt-32 sm:pt-32 md:pt-48 lg:pt-56 xl:pt-56">
                        @isset($allData['general']['position']) @endisset
                        <h1 class="light_gray text-lg sm:text-2lg md:text-2xl lg:text-3xl xl:text-5xl "> @isset($allData['general']['position']){{$allData['general']['position']}}@endisset</h1>
                        <h2  class="blue uppercase"> @isset($allData['general']['slogan']){{$allData['general']['slogan']}}@endisset</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
