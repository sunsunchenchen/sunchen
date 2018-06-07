<?php
header("content-type:text/html;charset=utf-8");
mysql_connect("127.0.0.1","root","root")or die('连接失败');
mysql_select_db('xiao')or die('打开失败');
mysql_query('set names utf8');
$name=$_POST['name'];
$nei=$_POST['nei'];
$sql=" insert  into yi VALUE ('null','$name','$nei')";

$res=mysql_query($sql);
//echo $sql;die;
if ($res) {
    echo "<script>alert('成功');location.href='yi.php';</script>";
} else {
    echo "<script>alert('失败');location.href='zhan.php';</script>";
}

//?>