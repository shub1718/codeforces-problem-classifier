<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$url="http://codeforces.com/api/problemset.problems";
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);
curl_close($ch);
$r=json_decode($result, true);
$tags=array();
if($r['status']=="OK"){
	$prob=$r['result']['problems'];
	foreach($prob as $val){
		$tt=$val['tags'];
		foreach($tt as $x){
			$tags[$x]++;
		}
	}
	$total=0;
	foreach($tags as $tt=>$count){
       $total+=$count;
    }
}
?>