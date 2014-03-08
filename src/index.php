<?php

$one = array() ;
$two = array() ;

$one[] = 'n ass'      ; $two[] = 'butt'       ;
$one[] = ' jack'      ; $two[] = 'hat'        ;
$one[] = ' dill'      ; $two[] = 'wagon'      ;
$one[] = ' dick'      ; $two[] = 'forger'     ;
$one[] = ' sphincter' ; $two[] = 'troll'      ;
$one[] = ' turd'      ; $two[] = 'sniffer'    ;
$one[] = ' cock'      ; $two[] = 'gnome'      ;
$one[] = ' twat'      ; $two[] = 'inspector'  ;
$one[] = ' fart'      ; $two[] = 'waffle'     ;
$one[] = ' skank'     ; $two[] = 'fairy'      ;
$one[] = ' booger'    ; $two[] = 'wad'        ;
$one[] = ' splooge'   ; $two[] = 'master'     ;
$one[] = ' cooter'    ; $two[] = 'peddler'    ;
$one[] = ' nut'       ; $two[] = 'smurf'      ;
$one[] = ' douche'    ; $two[] = 'weasal'     ;
$one[] = ' poon'      ; $two[] = 'taco'       ;
$one[] = ' queef'     ; $two[] = 'sack'       ;
$one[] = ' wank'      ; $two[] = 'receptacle' ;
$insult = $one[rand(0,count($one)-1)] . ' ' . $two[rand(0,count($two)-1)] ;

$title = 'Insulter' ;
$stylesheets = array('style.css') ;
include($_SERVER['FILE_PREFIX'] . '/_core/preamble.php') ;
?>

<div id="insult">You are a<?php echo $insult ; ?>.</div>
<!-- source: http://i.imgur.com/V6ibh.jpg -->
<?php foot() ; ?>
