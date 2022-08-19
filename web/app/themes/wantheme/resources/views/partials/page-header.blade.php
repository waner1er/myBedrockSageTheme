<div class="page-header">
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
