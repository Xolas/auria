<?php

$connections = array(
    
    "base" => array(
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "username" => "root",
        "password" => "",
        "database" => "auria"
    ),
    "data" => array(
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "username" => "root",
        "password" => "",
        "database" => "auria_data"
    ),
    "protheus" => array(
        "driver" => "dblib",
        "host" => "localhost",
        "port" => "1433",
        "username" => "siga",
        "password" => "siga",
        "database" => "siga"
    ),
    "oracle" => array(
        "driver" => "oci",
        "host" => "localhost",
        "port" => "1558",
        "username" => "root",
        "password" => "",
        "database" => "XE"
    ),
    "postgre" => array(
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "5432",
        "username" => "root",
        "password" => "",
        "database" => "auria_pg"
    )
);

$config = array(
    "mainConn" => "base",
);
