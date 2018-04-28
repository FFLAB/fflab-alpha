<!--are there comments-->
<?php if( have_comments() ){ ?>
<h4>I commenti!</h4>
<?php wp_list_comments(array(
    "type" => "comment",
    "avatar_size" => 70,
    "reply_text" => "Rispondi a questo utente qua"
    )); ?>

<?php } else { ?>

<?php } ?>
<div class="row">
  <div class="col-md-12">
<!--show comment form-->
<?php comment_form(); ?>
</div>
</div>