<a class="sr-only focus:not-sr-only" href="#main" hidden>
  {{ __('Skip to content') }}
</a>

@include('sections.header')
<main id="main" class="main container mx-auto ">

  @yield('content')
</main>
{{--@hasSection('sidebar')--}}
{{--  <aside class="sidebar">--}}
{{--    @yield('sidebar')--}}
{{--  </aside>--}}
{{--@endif--}}
@include('sections.footer')
