<?php

include ("db_conn.php");

$query = "select * from (books natural join (select isbn, sum(rating)/count(rating) as fuck from rating group by isbn)as pooku) as lund order by ts desc;";
$result=pg_query($query);


$ret=array();
while ($row = pg_fetch_array($result)) {
    array_push($ret,array("isbn"=>$row['isbn'], "ratings"=>$row['fuck'], "book_name"=> $row['title'], "image_link"=>$row['image_link']));
}

echo json_encode(array('newly_added'=>$ret));
?>
