<div class="page-header ">
  <div class="page-header__custom-logo">
    {{the_custom_logo('full')}}
  </div>
  <h2 class="main-title">
    @section('title')
      @if(is_home())
        Blog
      @elseif(is_archive())
        {{ the_archive_title() }}
      @else
        {{ the_title() }}
      @endif
    @endsection
    {{ the_title() }}
  </h2>
</div>
