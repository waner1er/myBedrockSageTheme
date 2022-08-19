<header class="banner border-b rounded ">
  <div class="brand">
    <a href="{{ home_url('/') }}">
      @if(get_custom_logo())
        <img src="{{the_custom_logo()}}" alt="{{ get_bloginfo('name', 'display') }}">
      @else
        <img class="w-20" src="@asset('images/logo.png')" alt="{{ get_bloginfo('name', 'display') }} ">
    </a>
  </div>
  @endif
  <x-primary-navigation/>

</header>
