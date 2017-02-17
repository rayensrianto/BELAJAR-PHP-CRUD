<?php

$host = mysql_connect("localhost","root","");
$db   = mysql_select_db("belajar-crud1");

/* sqp query buat table nya
CREATE TABLE `belajar_crud`.`crud1` ( `id` INT(11) NOT NULL AUTO_ INCREMENT ,
`nama` VARCHAR(52) NOT NULL , `alamat` VARCHAR(52) NOT NULL , `pekerjaan` VARCHAR(52) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
*/

?>
