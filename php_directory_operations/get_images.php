<?php

$images = (glob("images/*"));
$output=[
    'success'=>TRUE,
    'error'=>'you have erred',
    'files'=>$images
];
print json_encode($output);

?>