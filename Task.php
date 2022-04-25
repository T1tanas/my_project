<?php
include ("simple_html_dom.php");
/**
 
 * Plugin Name: task

 */

function shortcode_funkc(){
    

$html = file_get_html("https://www.day.lt");
ob_start();
?>

<ul> <?php foreach($html->find('.vardadieniai a') as $t):?>
 <li><?php echo iconv("Windows-1257", "UTF-8",$t->innertext);
 ?></li>
<?php endforeach?>
</ul><?php 

 return ob_get_clean();
}

add_shortcode('names','shortcode_funkc')

    ?>