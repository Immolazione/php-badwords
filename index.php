<?php

$phrase = "Ieri ho preso il pane, è molto buono il pane. Quando l' ho portato a casa mia moglie ha eslamato:'PANE!', e poi abbiamo mangiato il pane assieme.";

$name = 'pane';

$bad_words = $_GET ? $_GET[$name] : '';


$clean_phrase = str_replace($bad_words, '***', $phrase);

?>

<h1>Frase con BadWords</h1>
<h4><?php echo $phrase ?></h4>

<h1>Frase senza BadWords</h1>
<h4><?php echo $clean_phrase ?></h4>