<?php
mysql_connect('localhost','root','');
mysql_select_db("site");
mysql_query("create table GlobalChat(id mediumint not NULL auto_increment, username char(30), text LONGTEXT, primary key(id))");
?>