<?php
$path = "ra-men";
 
foreach(new DirectoryIterator($path) as $file) {
    $result[] = $file->getPathname();
}
 
print_r($result);