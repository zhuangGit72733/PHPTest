<?php
$json = '[
		{
            "productId":1,
			"imageUrl":"/productImages/product_img1.png",
			"rank":	[
						{"userNum":"A10001","userName":"XXXX1公司","orderSum":25,"moneyCnt":100},
						{"userNum":"A10002","userName":"XXXX2公司","orderSum":21,"moneyCnt":90},
						{"userNum":"A10003","userName":"XXXX3公司","orderSum":2,"moneyCnt":80}
					]
		},
		{
            "productId":2,
			"imageUrl":"/productImages/product_img2.png",
			"rank":	[
						{"userNum":"A10004","userName":"XXXX1公司","orderSum":25,"moneyCnt":100},
						{"userNum":"A10005","userName":"XXXX2公司","orderSum":24,"moneyCnt":91},
						{"userNum":"A10006","userName":"XXXX3公司","orderSum":2,"moneyCnt":81}
					]
		},
		{
            "productId":3,
			"imageUrl":"/productImages/product_img3.png",
			"rank":	[
						{"userNum":"A10007","userName":"XXXX1公司","orderSum":25,"moneyCnt":100},
						{"userNum":"A10008","userName":"XXXX2公司","orderSum":22,"moneyCnt":190},
						{"userNum":"A10009","userName":"XXXX3公司","orderSum":2,"moneyCnt":80}
					]
		},
		{
            "productId":4,
			"imageUrl":"/productImages/product_img4.png",
			"rank":	[
						{"userNum":"A100010","userName":"XXXX1公司","orderSum":25,"moneyCnt":100},
						{"userNum":"A100011","userName":"XXXX2公司","orderSum":23,"moneyCnt":290},
						{"userNum":"A100012","userName":"XXXX3公司","orderSum":2,"moneyCnt":80}
					]
		},
		{
            "productId":5,
			"imageUrl":"/productImages/product_img5.png",
			"rank":	[
						{"userNum":"A100013","userName":"XXXX1公司","orderSum":25,"moneyCnt":100},
						{"userNum":"A100014","userName":"XXXX2公司","orderSum":21,"moneyCnt":90},
						{"userNum":"A100015","userName":"XXXX3公司","orderSum":2,"moneyCnt":180}
					]
		},
		{
            "productId":6,
			"imageUrl":"/productImages/product_img6.png",
			"rank":	[
						{"userNum":"A100016","userName":"XXXX1公司","orderSum":25,"moneyCnt":100},
						{"userNum":"A100017","userName":"XXXX2公司","orderSum":12,"moneyCnt":90},
						{"userNum":"A100018","userName":"XXXX3公司","orderSum":2,"moneyCnt":80}
					]
		}
	]';
$arr = [];
$arr = json_decode($json, true);
echo '<pre>';
$rank = [];
foreach ($arr as $key => $value) {
    var_dump($value);
    foreach ($value['rank'] as  $val) {

        array_push($rank, $val);
    }
}
//var_dump($rank);
//foreach ($arr as $key => $value) {
//    unset($arr[$key]['imageUrl']);
//}
//var_dump($arr);
//foreach ($arr as $key => $value) {
//    $count = get_count($value['rank']);
//    $arr[$key]['moneyCount'] = $count['money'];
//    $arr[$key]['orderCount'] = $count['order'];
//}
//function get_count($rank) {
//    $money = 0;
//    $order = 0;
//    foreach ($rank as $key => $value) {
//        $money += $value['moneyCnt'];
//        $order += $value['orderSum'];
//    }
//    return [  'money'=> $money, 'order' => $order];
//}
//var_dump($arr);