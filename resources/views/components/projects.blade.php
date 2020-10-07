<section id="projects" class="{{ $category['label']['nav_class'] }} pt-5 pb-6">
    <hr class="gray-line">
    <div class="labelh2-section">
        @if($i % 2 === 1)
            @include('components.label-left')
        @else
            @include('components.label-right')
        @endif
    </div>
    <div class="container mx-auto relative">
        @isset($category['data'])
            @foreach($category['data'] as $project)
                <div class="w-full project-logo" style="@if($i % 2 === 1)  text-align: right; @else text-align: left;  @endif  padding: 20px ;">
                    <img src="{{ asset('assets/img/projects') }}/{{ $project['link_logo'] }}" alt="{{ $project['name'] }}"  class="inline-block w-auto h-auto rounded-lg">
                </div>
                <div class="block box-border lg:flex xl:flex mb-4 project-block">
                    <div class="block  box-border w-full md:w-full lg:w-1/3 xl:w-1/3  p-3 md:mx-0 lg:mx-0 xl:mx-0  description-list">
                        {!! $project['translate']['description_list'] !!}
                    </div>
                    <div class="block box-border w-full md:w-full lg:w-1/3 xl:w-1/3 p-3 md:mx-0 lg:mx-0 xl:mx-0 text-center promo-image">
                        <img class="inline-block rounded-full " src="{{ asset('assets/img/projects') }}/{{ $project['link_img'] }}"  alt="Promo image {{ $project['name'] }}">
                    </div>
                    <div class="block box-border w-full md:w-full lg:w-1/3 xl:w-1/3 p-3 md:mx-0 lg:mx-0 xl:mx-0 text-center lg:text-justify xl:text-justify description-text">
                        {!! $project['translate']['description'] !!}
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
</section>
