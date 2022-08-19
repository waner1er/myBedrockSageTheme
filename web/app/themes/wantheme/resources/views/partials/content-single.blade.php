<article @php(post_class())>
  <header>
    <h1 class="entry-title">
    </h1>
    <x-main-title>
      <x-slot name="title">
        {{ the_title()}}
      </x-slot>
    </x-main-title>

    @include('partials.entry-meta')
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

{{--  @php(comments_template())--}}
</article>
