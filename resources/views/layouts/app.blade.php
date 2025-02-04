@extends('layouts.clean')

@section('childContent')
    @include('layouts.partial.header')
    @yield('content')
    @hasSection ('footerLinks')
        @yield('footerLinks')
        <footer>
            @section('footerLinks')
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                @show
        </footer>        
    @endif

@endsection
