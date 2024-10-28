<?php

// just return query string
// echo $_SERVER['REQUEST_URI'];
// echo $_SERVER['QUERY_STRING'];

// return as json
$v = array(
    'REQUEST_URI' => $_SERVER['REQUEST_URI'],
    'QUERY_STRING' => $_SERVER['QUERY_STRING']
);

echo json_encode($v);