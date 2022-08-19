@extends('layouts.app')
@section('content')
  <div class="r1-home">
    @php($categories = get_categories())
    @foreach($categories as $cat)
      <div class="r1-home__category" data-expand-target>
        <h2 class="r1-home__category__title">{{ $cat->name }}</h2>
        @if(get_field('cat_thumbnail', 'category_' . $cat->term_id))
{{--          <img src="{{the_field('cat_thumbnail', 'category_' . $cat->term_id)}}" alt="" class="">--}}
          {!! wp_get_attachment_image(get_field('cat_thumbnail', 'category_' . $cat->term_id), 'medium', false, ['class' => 'r1-home__category__thumbnail']) !!}
        @else
          @if(current_user_can( 'manage_options' ))
            <p class="r1-home__category__no-img-found">{{__('no image here')}}</p>
          @endif
        @endif
        <p class="r1-home__category__description">{{ $cat->description }}</p>
        <a class="r1-home__category__permalink" href="{{ get_category_link($cat->term_id) }}" data-expand-link></a>
      </div>
    @endforeach
  </div>
@endsection
