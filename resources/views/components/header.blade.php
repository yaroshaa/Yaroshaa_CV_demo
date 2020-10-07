<header id="home">
    <div class="fixed-header">
        <div class="flex w-full">
            <div class="container mx-auto relative">
                <nav class="flex items-center justify-between flex-wrap  ">
                    <div class="mobile_logo  lg:hidden xl:hidden p-2 sm:p-2 pl-3 md:p-5"><a href="/"><img
                                src="{{ asset('assets/img/logo/logo-mobile.png') }}"
                                alt="logo-mobile"></a>
                    </div>
                    <div class="block lg:hidden xl:hidden m-2 sm:m-2 md:m-5">
                        <div class="flex flex-row sm:flex-row  md:flex-row lg:flex-col xl:flex-col  justify-center block-lang-links  lg:border-l-2 border-solid border-white pl-0 md:pl-3 h-full">
                            @isset($languages)
                                @foreach($languages as $language)
                                    <a href="{{ route('home',['key' => $language->key]) }}"
                                       class="inline-block m-1 mx-2 lg:mt-0 text-gray-700 hover:text-white">{{ $language->key }}</a>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                    <div class="block lg:hidden xl:hidden m-2 sm:m-2 md:m-5">
                        <button id="nav-toggle"
                            class="nav-toggle flex items-center px-3 py-2 border rounded text-gray-700 border-gray-700 hover:text-white hover:border-white">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                            </svg>
                        </button>
                    </div>
                    <div id="nav-content"
                        class="head-menu hidden  w-full lg:block flex-grow justify-between lg:flex lg:items-center lg:w-auto mt-0 sm:mt-10 md:mt-0 lg:mt-0 ">

                        @include('components.navigation')

                        <div class="flex hidden lg:flex items-center flex-shrink-0 pt-0 mt-2 my-4">
                            <a href="/"><img src="{{ asset('/assets/img/logo/logo.png') }}" alt=""></a>
                        </div>
                        @include('components.languages')
                    </div>
                </nav>

            </div>
        </div>
    </div>
</header>
<script>
    //Javascript to toggle the menu
    document.getElementById('nav-toggle').onclick = function(){
        document.getElementById("nav-content").classList.toggle("hidden");
    }
</script>
