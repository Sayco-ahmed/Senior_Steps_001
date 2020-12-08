

@include('layouts.head')

@yield('this_page_links')

@include('layouts.header')


@yield('breadcome-area')


@yield('maincontent')

@include('errors.noty')


@include('layouts.footer')

@include('layouts.footerscripts')

@yield('this_page_scripts')

@include('layouts.endofpage')
