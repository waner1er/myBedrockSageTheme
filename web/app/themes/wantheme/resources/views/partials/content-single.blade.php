<article @php(post_class())>
  <header>
    @include('partials.entry-meta')
  </header>

  <div class="entry-content">
    {!! $content !!}

    {{get_the_ID()}}
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

  <div class="comments">
  @include('partials.comments')
  </div>
</article>


<style>
  .comments {
    margin: 1rem 0;
    padding: 1rem 0;
    background: lightyellow;
  }
</style>
