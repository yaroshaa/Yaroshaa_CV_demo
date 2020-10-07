<section id="{{ $category['label']['nav_class'] }}" class="portfolio portfolio-web relative">
    <hr class="gray-line">
    <div class="labelh2-section">
        @if($i % 2 === 1)
            @include('components.label-left')
        @else
            @include('components.label-right')
        @endif
    </div>
    <div class="container mx-auto relative py-16">
        <div class="s-portfolio">
            <div id="portfolio-filters" class="w-full">
                <div data-filter=".new_work"
                     class="text-sm text-gray-600 uppercase hover:text-blue-600 mb-0 pr-3 filter-item inline-block cursor-pointer new_work is-checked">@lang('new works')</div>
                @isset($category['data']['groups'])
                    @foreach( $category['data']['groups'] as $group)
                        <div data-filter=".{{ $group['nav_class'] }}" class="text-sm text-gray-600 uppercase hover:text-blue-600 mb-0 pr-3 filter-item inline-block cursor-pointer">{{ $group['translate']['name'] }}</div>@endforeach
                @endisset
            </div>
        </div>
    </div>
    <div class="container mx-auto relative mb-24 overflow-hidden"><div id="portfolio-gallery" class="grid-portfolio block ">
            @isset($category['data']['pages'])
                @foreach( $category['data']['pages'] as $item_work)
                    <div class=" portfolio-item  block float-left m-0 lg:cursor-pointer xl:cursor-pointer lg:hover:opacity-75  xl:hover:opacity-75  w-full md:w-w-3/6 lg:w-1/3 xl:w-1/3 overflow-hidden  relative p-px {{ $item_work['group'] }} @if($item_work['new_work'] == 1) new_work @endif" data-category=".{{ $item_work['group'] }}  @if($item_work['new_work'] == 1) , .new_work @endif">
                        <div class="portfolio-img-effect w-full tracking-normal"><img src="{{ asset('assets/img/portfolio/web/970x647') }}/{{ $item_work['thumb'] }}" alt="{{ $item_work['translate']['name'] }}"></div><div class="portfolio-item-click ">
                            <div class="mb-6">
                                <h4 class="text-lg text-white mb-2">{{ $item_work['translate']['name'] }}</h4>
                                <p class="text-white text-opacity-75"></p>
                            </div>
                            <ul class="inline-block inline-block m-0 top-0 left-0 pt-2 pl-2">
{{--                                <li class="inline-block block mb-2"><a href="{{ asset('img/portfolio/web/970x647') }}/{{ $item_work['link_img'] }}" class="inline-block text-center align-middle w-9 h-9 p-2 text-sm bg-white rounded-full" title="{{ $item_work['translate']['name'] }}"><i class="ti-fullscreen"></i></a></li>--}}
                                <li class="inline-block block mb-2"><a href="#" class="inline-block text-center align-middle w-9 h-9 p-2 text-sm bg-white rounded-full" title="{{ $item_work['translate']['name'] }}"><i class="ti-fullscreen"></i></a></li>
                                <li class="inline-block block mb-2"><a href="@isset($item_work['web_link']){{ $item_work['web_link'] }}@endisset" target="_blank" class="inline-block text-center align-middle w-9 h-9 p-2 text-sm bg-white rounded-full"><i class="ti-link"></i></a></li>
                                @foreach($item_work['icons'] as $technology)
                                    <li class="inline-block block mb-2"><span class="inline-block text-center align-middle w-9 h-9 p-2 text-sm bg-white rounded-full"><img src="{{ asset('assets/img/icons_logo') }}/{{ $technology['icon'] }}" width="23" height="23" alt="{{ $technology['name'] }}" ></span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            @endisset</div></div>
</section>
