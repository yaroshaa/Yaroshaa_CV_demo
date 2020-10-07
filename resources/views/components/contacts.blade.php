<section id="contacts" class="{{ $category['label']['nav_class'] }}">
    <hr class="gray-line">
    <div class="labelh2-section">
        @if($i % 2 === 1)
            @include('components.label-left')
        @else
            @include('components.label-right')
        @endif
    </div>
    <div class="w-full">
        <div class="container mx-auto relative py-10">
            <div class="block lg:flex flex-wrap ">
                <div class="w-full lg:w-1/2 pt-10 p-2">
                    <p class="margin-b-25 text-center lg:text-left xl:text-left lg:pl-10 xl:pl-16">@lang('send me a message and I will contact you')</p>
                    <div role="form" >
                        <div class="screen-reader-response"></div>
                        <form method="post" name="contact-form" action="{{ app()->getLocale() }}/contact" class="w-full max-w-lg m-auto"  enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-200' }} rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="name" id="grid-first-name" type="text" placeholder="@lang('name')" value="{{ old('name') }}" {{ $errors->has('name') ? 'autofocus' : '' }}>
                                    @if ($errors->has('name'))
                                        <p class="text-red-500 text-xs italic">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="email" id="grid-last-name" type="email" placeholder="@lang('email')" value="{{ old('email') }}" {{ $errors->has('email') ? 'autofocus' : '' }}>
                                    @if ($errors->has('email'))
                                        <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('subject') ? 'border-red-500' : 'border-gray-200' }} rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="subject" id="grid-password"  type="text" placeholder="@lang('subject')" value="{{ old('subject') }}" {{ $errors->has('subject') ? 'autofocus' : '' }}>
                                    @if ($errors->has('subject'))
                                        <p class="text-red-500 text-xs italic">{{ $errors->first('subject') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-200' }} rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" cols="40" rows="8" name="text" id="grid-password" placeholder="@lang('text message')" {{ $errors->has('text') ? 'autofocus' : '' }}>{{ old('text') }}</textarea>
                                    @if ($errors->has('text'))
                                        <p class="text-red-500 text-xs italic">{{ $errors->first('text') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="submit" id="grid-city" type="submit" value="@lang('send')">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 pb-4 pt-8 relative border-t  border-solid border-gray-100 lg:border-0 xl:border-0 lg:pt-2 xl:pt-2">
                    <div class="flex flex-col p-2 lg:flex-row xl:flex-row md:pb-10 contacts-info-block">
                        <div class="w-1/2 sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 time-block text-center m-auto ">
                            <span class="inline-block clock-block m-auto w-4/5">
                                <img src="{{ asset('assets/img/icon/wall-clock.svg') }}" width="auto" height="auto" alt="working hours" class="pb-3">
                                <span class="time-text text-center w-full uppercase text-2xl md:text-5xl lg:text-2xl">9-20</span>
                            </span>
                        </div>
                        <div class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 contacts-info">
                            <ul class="list-contact text-xs lg:text-sm pb-8 lg:pb-0 xl:pb-0">
                                <li>
                                    <span class="list-contact-icon skype w-10 md:w-10 lg:w-10 xl:w-12">
                                        <img src="{{ asset('assets/img/icon/skype.svg') }}" alt="skype icon"  class="p-1 ">
                                    </span>
                                    <span class="list-contact-text ">@isset($settings->skype){{ $settings->skype }}@endisset</span>
                                </li>
                                <li>
                                    <span class="list-contact-icon point w-10 md:w-10 lg:w-10 xl:w-12">
                                        <img src="{{ asset('assets/img/icon/point.svg') }}" alt="point icon"  class="p-1 ">
                                    </span>
                                    <span class="list-contact-text">@isset($allData['general']['address']){{ $allData['general']['address'] }}@endisset</span>
                                </li>
                                <li>
                                    <span class="list-contact-icon phone w-10 md:w-10 lg:w-10 xl:w-12">
                                        <img src="{{ asset('assets/img/icon/phone.svg') }}" alt="phone icon"  class="p-1 ">
                                    </span>
                                    <span class="list-contact-text ">@isset($settings->phone_first){{ $settings->phone_first }}@endisset</span>
                                    <span class="inline icons-with-phone">
                                        <span class="inline-block viber-icon p-1 w-10 md:w-10 lg:w-10 xl:w-12 ">
                                            <img src="{{ asset('assets/img/icon/viber.svg') }}" alt="viber icon"  class="p-1 ">
                                        </span>
                                        <span class="inline-block whatsapp-icon p-1 w-10 md:w-10 lg:w-10 xl:w-12">
                                            <img src="{{ asset('assets/img/icon/whatsapp.svg') }}" alt="whatsapp icon" class="p-0 ">
                                        </span>
                                        <span class="inline-block telegramm-icon p-1  w-10 md:w-108 lg:w-10 xl:w-12">
                                            <img src="{{ asset('assets/img/icon/telegram.svg') }}" alt="telegram icon" class="p-0">
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="list-contact-icon email w-10 md:w-10 lg:w-10 xl:w-12">
                                        <img src="{{ asset('assets/img/icon/email.svg') }}" alt="email icon"  class="p-1 ">
                                    </span>
                                    <span class="list-contact-text ">@isset($settings->email_first){{ $settings->email_first }}@endisset</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full image-block">
                        <img src="{{ asset('assets//img/city.jpg') }}" alt="city">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
