<?php 
$books = [
    "book 1" => "1998" , 
    "book 2" => "1976",
    "book 3" => "1956",
];
asort($books);
foreach ($books as $key=> $years){
    echo$key," ";
    echo$years,"<br>" ; 
}; 