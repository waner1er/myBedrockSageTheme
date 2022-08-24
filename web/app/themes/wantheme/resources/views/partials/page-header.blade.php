<div class="page-header ">
  <div class="page-header__custom-logo">
    {{the_custom_logo('full')}}
  </div>

  <div class="container-large page-header__wrapper">
    @if ( function_exists( "seokey_breacrumbs_print" ) )
      {!! seokey_breacrumbs_print() !!}
    @endif
    <h2 class="main-title">
      {!!  $title !!}
    </h2>

  </div>
</div>
