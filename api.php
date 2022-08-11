
<?php 

// 初始化 curl
$curl = curl_init ("https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json?page=0&size=10");
//https 要取得
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// 傳回結果 不會輸出在畫面上 傳給前端JS記得加這行
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec ($curl);

//加入User Agent 模擬browser行為
// curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0");

// close
curl_close($curl);

echo $output;
// var_dump($output);

?>