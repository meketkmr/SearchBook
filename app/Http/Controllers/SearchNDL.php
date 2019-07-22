<?php
function searchNDL($title, $index, $count = 10)
{
    $titlecode = urlencode($title);
    $url = 'http://iss.ndl.go.jp/api/opensearch?title=' . $titlecode . '&idx=' . $index . '&cnt=' . $count;
    $xml = simplexml_load_file($url);

    $books = array();
    for($i=0;$i<$count;$i++) {
        if(isset($xml->channel->item[$i]->title) == false){
            break;
        }
        $books[$i][0] = $xml->channel->item[$i]->title;
        $books[$i][1] = $xml->channel->item[$i]->link;
    }

    return $books;
}

