<?php

$p = [
    "1" => "flings",
    "2" => "listing"
];

$out = "?";

foreach($p as $k => $v){
    $out .= $k."=".$v."&";
}

$out = preg_replace("/&$/", "", $out);

echo $out;

