<?php
include('simple_html_dom.php');
$url = $_GET['page'];
$tag = $_GET['id'];
$html = file_get_html($url);

    $a = 0;

try {
        foreach($html->find($tag) as $newtag){

            $result = '['.$a.']'.$newtag.'<br>';
            echo $result;
            $a++;
}
  } catch(Exception $e) {
    echo "Failed getting data.";
  }

?>
