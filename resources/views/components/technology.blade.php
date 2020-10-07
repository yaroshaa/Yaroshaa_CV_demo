<section id="friends" class="{{ $category['label']['nav_class'] }}">
    <hr class="gray-line">
    <div class="labelh2-section">
        @if($i % 2 === 1)
            @include('components.label-left')
        @else
            @include('components.label-right')
        @endif
    </div>

        <div class="container mx-auto relative">
            <div class="flex">
                <div class="w-full py-5">
                    <div class="center technology-slider">
                        @isset($category['data'])
                            @foreach( $category['data'] as $technology)
                                <div class="ca-item-main">
                                    @if(isset($technology['link_img']) && isset($technology['link_img']) != '' )
                                        <img src="{{ asset('assets/img/') }}/technologies/{{ $technology['link_img'] }}" width="150" height="150" alt="{{ $technology['name'] }}">
                                    @endif
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>


</section>
