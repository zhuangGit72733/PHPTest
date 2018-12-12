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
						{"userNum":"A100016",
						"userName":"XXXX1公司",
						"orderSum":25,
						"moneyCnt":100
						},
						{"userNum":"A100017","userName":"XXXX2公司","orderSum":12,"moneyCnt":90},
						{"userNum":"A100018","userName":"XXXX3公司","orderSum":2,"moneyCnt":80}
					]
		}
	]';
$arr = [];
$arr = json_decode($json, true);
echo "<pre>";
$i = 0;
foreach ($arr as $key =>$value) {
    foreach ($value['rank'] as $k => $val) {
        $arr[$key]['rank'][$k]['id'] = $i;
        $i++;
    }
}
var_dump($arr);



//2,在rank中添加id字段 $arr[5]['rank'] [0]['userNum']
