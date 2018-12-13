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
						{"userNum":"A100016","userName":"XXXX1公司","orderSum":25,"moneyCnt":80},
						{"userNum":"A100017","userName":"XXXX2公司","orderSum":12,"moneyCnt":90},
						{"userNum":"A100018","userName":"XXXX3公司","orderSum":2,"moneyCnt":100}
					]
		}
	]';
$a=[];
$arr = [];
$array = [];
$arr_1 = [];
$arr = json_decode($json, true);
$list = [];
foreach ($arr as $key => $value)
{
   $list[$value['productId']] = get_rank_money($value['rank']);
}

function get_rank_money($rank)
{
    $arr = [];
    foreach ($rank as $item)
    {
        array_push($arr, $item['moneyCnt']);
    }
    return $arr;
}
print_r($list);
exit();

/////////
echo '<pre>';
foreach ($arr as $key=>$value) {
    foreach ($value['rank'] as $k =>$val) {
            array_push($array, $value['rank'][$k]['moneyCnt']
            );
        }
}
function get_product_id($arr)
{
    $arr_id = [];
    foreach ($arr as $key => $value) {
       array_push($arr_id, $value['productId']);
    }
    return$arr_id;
}

function compare_arrs($arr,$arrs)
{
    $arrr = [];
foreach ($arrs as $key =>$value) {
    if (count(array_diff($arr, $value)) == 0) {
    array_push($arrr,$key);
    }
}
return $arrr;
}
$arr_1 = array_chunk($array,3);
$vv=get_product_id($arr);
$arr_1 = array_combine ($vv, $arr_1);
$temp = $arr_1;
$list = [];
foreach ($arr_1 as $kk => $val) {
    unset($temp[$kk]);
    print_r($temp);
   array_push($list, compare_arrs($val, $temp));
}
exit;
print_r($list);
$arr_ids = get_firsts($a,$arr_1);
print_r($arr_ids);

//var_dump($array);

//var_dump($array);
//5, 查找出这个对象中rank下三组moneyCnt完全相同的两个元素，并将两个的id，返回为一个数组。
//$arr[]['rank'] []['moneyCnt']  $arr[]['productId']