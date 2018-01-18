<?php
$askins = array();
$askins[] = 'comet.swf';
$askins[] = 'festival.swf';
$askins[] = 'kleur.swf';
$askins[] = 'magma.swf';
$askins[] = 'nacht.swf';
$askins[] = 'pearlized.swf';
$askins[] = 'schoon.swf';
$askins[] = 'silverywhite.swf';
$askins[] = 'snel.swf';
$askins[] = 'stijl.swf';
$smarty->assign('askins', $askins);
$rnd = rand(1, count($askins));
$smarty->assign('rnd_skin', $askins[$rnd]);
?>