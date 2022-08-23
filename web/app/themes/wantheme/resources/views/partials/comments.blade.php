<h2>Il y a <?php comments_number(); ?></h2>

<?php if( get_comments_number() ): ?>

<form
  action="{{ admin_url( 'admin-ajax.php' ) }}"
  method="post"
  class="js-load-comments"
>
  <input
    type="hidden"
    name="postid"
    value="{{ get_the_ID() }}"
  >
  <input
    type="hidden"
    name="nonce"
    value="{{ wp_create_nonce( 'capitaine_load_comments' ) }}"
  >
  <!– ou : wp_nonce_field( 'capitaine_load_comments' ); –>
  <input
    type="hidden"
    name="action"
    value="capitaine_load_comments"
  >

  <button class="comments-load-button">Charger les commentaires</button>
</form>

<ol class="comments">
  les commentaires apparaitront ici
</ol>

<?php endif; ?>
