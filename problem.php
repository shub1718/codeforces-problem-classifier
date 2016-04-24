<?php
$tag1=$_GET['tags'];
//echo $tag;
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$tag = str_replace(' ', '%20', $tag1);
$url="http://codeforces.com/api/problemset.problems?tags=".$tag;
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);
curl_close($ch);
$r=json_decode($result, true);
$ques=array();
if($r['status']=="OK"){
	$prob=$r['result']['problems'];
	foreach($prob as $val){
		$q= $val['contestId']."/".$val['index'];
		$ques[$q]=array();
		$ques[$q]['contestId']=$val['contestId'];
		$ques[$q]['index']=$val['index'];
		$ques[$q]['name']=$val['name'];
		$ques[$q]['tags']=array();
		foreach($val['tags'] as $t){
			$ques[$q]['tags'][$t]=1;
		}
	}
	$prob=$r['result']['problemStatistics'];
	foreach($prob as $val){
		$q= $val['contestId']."/".$val['index'];
		$ques[$q]['solvedCount']=$val['solvedCount'];
	}
}
if($tag==null)
  $tag1="All";
?>