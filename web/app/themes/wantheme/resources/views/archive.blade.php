@extends('layouts.app')


@section('content')
  <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">

    @while(have_posts())
      @php(the_post())
      <div
        class="border rounded p-2 transition ease-in-out delay-150  hover:-translate-y-1  hover:bg-black duration-700 hover:text-white "
        data-expand-target>
        <div class="archive-post-thumbnail w-20 h-20 overflow-hidden mb-5">
          @if(has_post_thumbnail())
            {{the_post_thumbnail()}}
          @else
            <img src="{{asset('images/no-img.jpg')}}" alt="no-img">
          @endif
        </div>
        @include('partials.page-header')
        @includeFirst(['partials.content-page', 'partials.content'])
        <a href="{{ the_permalink() }} " data-expand-link></a>
      </div>
    @endwhile
  </div>
@endsection

