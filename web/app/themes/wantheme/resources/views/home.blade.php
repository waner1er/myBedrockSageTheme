@extends('layouts.app')
@section('content')
  <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
    @php($categories = get_categories())
    @foreach($categories as $cat)
      <div
        class="border rounded p-2 transition ease-in-out delay-150  hover:-translate-y-1  hover:bg-black duration-700 hover:text-white "
        data-expand-target>
        <h2 clas="text-2xl">{{ $cat->name }}</h2>
        @if(get_field('cat_thumbnail', 'category_' . $cat->term_id))
          <img src="{{the_field('cat_thumbnail', 'category_' . $cat->term_id)}}" alt="" class="w-12 h-auto">
        @else
          @if(current_user_can( 'manage_options' ))
            <p>{{__('no image here')}}</p>
          @endif
        @endif
        <p>{{ $cat->description }}</p>
        <a href="{{ get_category_link($cat->term_id) }}" data-expand-link></a>
      </div>
    @endforeach
  </div>
@endsection
