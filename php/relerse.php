<?php
  header('Content-Type: text/html; charset=utf-8');

  //mysql_connect() 函数打开非持久的 MySQL 连接。
  @mysql_connect('localhost','root','root');
  mysql_query('SET NAMES UTF8');
  //mysql_select_db()用于更改连接得默认数据库
  mysql_select_db('znsnew_qqList');

  //方法
  $act = @$_GET['act'];
  //一页几个
  $size = 10;
  //显示第几个
  $n = @(int)$_GET['n'];
  $cb=@$_GET['cb'];

 function echo_str($str){
	global $cb;
	if(strlen($cb)){
		die($cb.'('.$str.')'); 	
	}else{
		die($str);	
	}	