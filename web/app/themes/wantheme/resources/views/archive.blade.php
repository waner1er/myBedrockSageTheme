@extends('layouts.app')


@section('content')
  <div class="r1-archives">

    @while(have_posts())
      @php(the_post())
      <x-archive-item/>
    @endwhile
  </div>
@endsection

