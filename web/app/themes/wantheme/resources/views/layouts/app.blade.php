<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')
<main id="main" class="main container mx-auto ">
  <x-main-title>
    @section('title')
      @if(is_home())
        Blog
      @elseif(is_archive())
      {{ the_archive_title() }}
      @else
        {{ the_title() }}
      @endif
    @endsection
  </x-main-title>
  @yield('content')
</main>
{{--@hasSection('sidebar')--}}
{{--  <aside class="sidebar">--}}
{{--    @yield('sidebar')--}}
{{--  </aside>--}}
{{--@endif--}}
@include('sections.footer')
