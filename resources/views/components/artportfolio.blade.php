<section id="design" class="design {{ $category['label']['nav_class'] }}">
    <hr class="gray-line">
    <div class="labelh2-section">
        @if($i % 2 === 1)
            @include('components.label-left')
        @else
            @include('components.label-right')
        @endif
    </div>
    <br><br>
    <div class="container mx-auto relative">
        <div class="layout">
            <div class="flex">
                <div class="block item">
                    <img class="w:auto" src="{{  }}img/portfolio/1.png" alt="img">
                </div>
            </div>
        </div>
    </div>
    <br><br>
</section>
