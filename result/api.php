<?php
include('simple_html_dom.php');
$url = $_GET['page'];
$tag = $_GET['id'];
$html = file_get_html($url);

    $a = 0;
    $tk = '"';
    $tt = ":";

    echo "[";

try {
        foreach($html->find($tag) as $newtag){
            $b++;
        }

        foreach($html->find($tag) as $newtag){

            $result = $newtag;
            $text = (strip_tags($result));
            echo "{";
            echo $tk."id".$a.$tk.$tt.$tk.$text.$tk.",";
            echo $tk."link".$a.$tk.$tt.$tk.$newtag->getAttribute('href').$tk.",";
            echo $tk."img".$a.$tk.$tt.$tk.$newtag->getAttribute('src').$tk;
            echo "}";
            $a++;
            if($a < $b){
                echo ",";
            }else{
                echo "";
            }

}
  } catch(Exception $e) {
    echo "Failed getting data.";
  }

//   other: {
//     link: "/img/src.png",
// }
    echo "]";


?>
