<?php
$vars = array('MYSQL_DATABASE_NAME' ,'MYSQL_PORT' ,'MYSQL_PASSWORD' ,'MYSQL_USER' ,'MYSQL_HOST' ,'TSURU_SERVICES');
foreach($vars as $i)
{
    echo $i . ": " . $_ENV[$i] . '<br>';
}
?>