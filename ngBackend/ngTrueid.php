<?php 
/* Nông Văn Nguyên */
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.iwanster.com/trueid/freefire/?id=".$id."&token=NguyenThuWan");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    $result = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($result,true);
    echo $res['nickname'];
}else{
    echo "No Paramater Detected";
}
/* Nông Văn Nguyên */
?>