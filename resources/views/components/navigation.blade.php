<div id="head-menu" class="text-sm lg:flex mt-1">
    @isset($allData['navigation'])
        @foreach($allData['navigation'] as $item_menu )
            <span
                class="item-menu block lg:inline-block lg:mt-0 border-solid border-t-2 border-transparent hover:border-white px-2 mt-1 sm:p-2">
                    <a title="{{ $item_menu['name'] }}"
                       href="#{{ $item_menu['class'] }}"
                       class="block lg:inline-block m-4 md:m-0 lg:m-0 lg:mt-0 text-gray-700 hover:text-white hover:border-white">
                        {{ $item_menu['name'] }}
                    </a>
            </span>
        @endforeach
    @endisset
</div>
