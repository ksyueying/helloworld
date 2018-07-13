<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/17 0017
 * Time: 22:45
 */
 header("Content-type:text/html; charset=utf-8");
 echo '中文';
 function get_rand($proArr){
     $result = '';
     $proSum = array_sum($proArr);
     foreach($proArr as $key => $proCur){
         $randNum = mt_rand(1,$proSum);
         if($randNum <= $proSum){
             $result = $key;
             break;
         }else{
             $proSum -= $proCur;
         }
     }
     unset($proArr);
     return $result;
 }
 $prize_arr = array(
     '0' => array('id'=>1,'prize'=>'平板电脑','v'=>1),
     '1' => array('id'=>2,'prize'=>'数码相机','v'=>5),
     '2' => array('id'=>3,'prize'=>'音箱设备','v'=>10),
     '3' => array('id'=>4,'prize'=>'4G优盘','v'=>12),
     '4' => array('id'=>5,'prize'=>'10Q币','v'=>22),
     '5' => array('id'=>6,'prize'=>'下次没准就能中哦','v'=>50),
 );

 foreach($prize_arr as $key=>$val){
     $arr[$val['id']]= $val['v'];
 }
 $rid =get_rand($arr);
 $res['yes'] = $prize_arr[$rid-1]['id'];
 unset($prize_arr[$rid-1]);
 shuffle($prize_arr);
 for($i=0;$i<count($prize_arr);$i++){
     $pr[] = $prize_arr[$i]['prize'];
 }
 $res['no'] = $pr;
 echo json_encode($res);
?>