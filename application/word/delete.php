<?php
$conn = mysqli_connect('localhost','root','425316','liuyanpu');
$del_key = array();
$del_key = isset($_POST['keyid'])? $_POST['keyid'] : '';
$del_str = "NULL";
foreach( $del_key as $val){
    $del_str.=",".$val;
}
print_r($del_str);
$sqlstr = "delete from liuyan where id in ($del_str)";
$result = mysqli_query($conn, $sqlstr)or die('删除失败.'.mysqli_error($conn));
$n = mysqli_affected_rows($conn);
if($n>0){
    echo "删除成功.";
}
else{
    echo "删除失败.";
}
mysqli_close($conn);
?>