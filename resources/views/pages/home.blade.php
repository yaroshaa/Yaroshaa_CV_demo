@extends('layouts.app')
@section('content')

    @include('components.header')
    @if(isset($allData) && $allData['categories'] && count($allData['categories']) > 0 )
        @php $i = 1; @endphp
        @foreach($allData['categories'] as $category)
            @if(isset($category['label']['key']))
                @include('components.'.$category['label']['key'])
            @endif
            @php $i++; @endphp
        @endforeach
    @endif
    @include('components.footer')
    @include('components.nav-framevorks')

@endsection
