<?php if( have_comments() ){ ?>
<h4>I commenti!</h4>
<?php wp_list_comments(array(
    "type" => "comment",
    "avatar_size" => 70,
    "reply_text" => "Rispondi a questo utente qua"
    )); ?>

<?php } else { ?>

<?php } ?>

<?php comment_form(); ?>
