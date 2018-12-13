<?php

$json = '[
		{
			"id":1,
			"title":"a new title",
			"category":"cate 1",
			"author": {
				"id":132,
				"name":"joe",
				"avatar":"img/132/13/joe.jpg"
			},
			"replies":	[
						{
							"id":1132,
							"username":"Jason",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf1"
						},
						{
							"id":1133,
							"username":"Jason1",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf2"
						},
						{
							"id":1134,
							"username":"Jason2",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf3"
						},
						{
							"id":1135,
							"username":"Jason5",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf4"
						},
						{
							"id":1136,
							"username":"Jason7",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf5"
						}
					]
		},
		{
			"id":2,
			"title":"a new title",
			"category":"cate 1",
			"author": {
				"id":133,
				"name":"joe122312",
				"avatar":"img/132/13/joe.jpg"
			},
			"replies":	[
						{
							"id":1132,
							"username":"Jason",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf6"
						},
						{
							"id":1133,
							"username":"Jason1",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf7"
						},
						{
							"id":1134,
							"username":"Jason2",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf8"
						},
						{
							"id":1135,
							"username":"Jason5",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf9"
						},
						{
							"id":1136,
							"username":"Jason7",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf10"
						}
					]
		},
		{
			"id":3,
			"title":"a new title",
			"category":"cate 1",
			"author": {
				"id":1352,
				"name":"Tom",
				"avatar":"img/132/13/joe.jpg"
			},
			"replies":	[
						{
							"id":1132,
							"username":"Jason",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf11"
						},
						{
							"id":1133,
							"username":"Jason1",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf12"
						},
						{
							"id":1134,
							"username":"Jason2",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf13"
						},
						{
							"id":1135,
							"username":"Jason5",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf14"
						},
						{
							"id":1136,
							"username":"Jason7",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf15"
						}
					]
		},
		{
			"id":4,
			"title":"a new title",
			"category":"cate 1",
			"author": {
				"id":2132,
				"name":"joe",
				"avatar":"img/132/13/joe.jpg"
			},
			"replies":	[
						{
							"id":1132,
							"username":"Jason",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf16"
						},
						{
							"id":1133,
							"username":"Jason1",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf17"
						},
						{
							"id":1134,
							"username":"Jason2",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf18"
						},
						{
							"id":1135,
							"username":"Jason5",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf19"
						},
						{
							"id":1136,
							"username":"Jason7",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf20"
						}
					]
		},
		{
			"id":5,
			"title":"a new title",
			"category":"cate 1",
			"author": {
				"id":1312,
				"name":"joe1235",
				"avatar":"img/132/13/joe.jpg"
			},
			"replies":	[
						{
							"id":1132,
							"username":"Jason",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf21"
						},
						{
							"id":1133,
							"username":"Jason1",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf22"
						},
						{
							"id":1134,
							"username":"Jason2",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf23"
						},
						{
							"id":1135,
							"username":"Jason5",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf24"
						},
						{
							"id":1136,
							"username":"Jason7",
							"content":"hewllo ,sdssd,sdfsasa sdafasd,sdafsadfasdf25"
						}
					]
		}
	]';

//1,写出一个函数
//参数为作者名字，返回他的文章
$arr = [];
$arr = json_decode($json, true);
echo "<pre>";
function get_author_article($name,$arr)
{
    foreach ($arr as $key => $value) {
        if ($name ==$value['author']['name']) {
            return $value;
        }
    }
}
$result = get_author_article('joe1235',$arr);
var_dump($result);
