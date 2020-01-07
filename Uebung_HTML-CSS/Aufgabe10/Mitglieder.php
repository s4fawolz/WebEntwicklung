<?php
include 'Aufgabe10.php';
if (isset($pages)){
    foreach ($pages as $page => $pageContent){
        foreach ($pageContent as $tags => $tagcontent) {
            if (basename($_SERVER['REQUEST_URI'], ".php") == $page) {
                echo $tagcontent;
            }
        }
    }
}