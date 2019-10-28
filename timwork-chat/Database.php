<?php
mysql_connect('localhost','root','');
mysql_query("create database site");
mysql_select_db("site");
mysql_query("create table users(id mediumint not NULL auto_increment, nume char(30), prenume char(30), username char(30), email char(30), parola char(30), primary key(id)))");
?>