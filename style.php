<?php
/*** https://stackoverflow.com/questions/13201451/how-to-use-css-style-in-php ***/
header("Content-type: text/css");

$display ='none';
?>
<style>
table {
margin: 8px;
}
hide {
    display: <?=$display?>;
}
</style>