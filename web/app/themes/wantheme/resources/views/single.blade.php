@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php(the_post())
    <div style="font-size: 40px">commentaires : {{ comments_number() }}</div>

    Categories = {{ $tax->name ?? ''}}
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection


@section('sidebar')
{{--  @include('sections.sidebar')--}}
@endsection
