<div class="r1-archives__item" data-expand-target>
  <div class="r1-archives__item-thumbnail">
    @if(has_post_thumbnail())
      {{the_post_thumbnail('thumbnail', ['class' => 'r1-archives__item-thumbnail__img'])}}
    @else
      <img class="r1-archives__item-thumbnail__img" src="{{asset('images/no-img.jpg')}}" alt="no-img">
    @endif
  </div>
  <div class="r1-archives__item-content">
    <h2 class="r1-archives__item-title">
      <a href="{{the_permalink()}}" data-expand-link>{{the_title()}}</a>
    </h2>
    <div class="r1-archives__item-post-excerpt">
      {{the_excerpt()}}
    </div>
  </div>
</div>
