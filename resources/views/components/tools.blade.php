<section id="{{ $category['label']['nav_class'] }}" class="tools">
    <hr class="gray-line">
    <div class="labelh2-section">
        @if($i % 2 === 1)
            @include('components.label-left')
        @else
            @include('components.label-right')
        @endif
    </div>
    <div class="tools-block">
        <div class="container mx-auto relative">
            <ul>
                @isset($category['data'])
                    @foreach( $category['data'] as $tool)
{{--                        <li><span class="inline-block w-16 h-auto"><img src="{{ asset('img/') }}{{ $tool['link_img'] }}" alt="{{ $tool['name'] }}"></span></li>--}}
                        <li><span class="inline-block w-16 h-auto"><img src="{{ asset('assets/img/tools') }}/{{ $tool['link_img'] }}" alt="{{ $tool['name'] }}"></span></li>
                    @endforeach
                @endisset
            </ul>
        </div>
    </div>
</section>
