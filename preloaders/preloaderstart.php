<?php 

 $plugin_id = 'preloaders';
 
// Set up the folder name and its permissions
// Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
$folder        = GSDATAOTHERPATH . '/' . $plugin_id . '/';
$preloadernumber  = $folder . 'preloadernumber.txt';
$jqueryon  = $folder . 'jqueryon.txt';

;

echo'
<div id="preload">

<img src="/plugins/preloaders/img/'.file_get_contents($preloadernumber ).'.svg">
</div>
'
;
?>