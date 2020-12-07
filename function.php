<?php
//$arr = array();
/*-----------------------------------
関数
-----------------------------------*/
function imgChange($arr){
	
	//合成画像をセット
	//$arr = range('a', 's');
	//$arr = range('a', 'e');
	//$arr = range($imageA,$imageB);
	$imgPath = 'img/';
 
	foreach ($arr as $key => $val) {
		if ($key === 0) {
			$canvas = imagecreatefrompng($imgPath . $val . '.png');
			imagesavealpha($canvas, true);
			continue;
		}
		${$val} = imagecreatefrompng($imgPath . $val.'.png');
		imagecopy($canvas, ${$val}, 0, 0, 0, 0, 500, 500);
		imagedestroy(${$val});
	}

	//ブラウザ上に画像を表示
	ob_start();
	imagepng($canvas);
	imagedestroy($canvas);
	$canvas = ob_get_clean();
	echo "<img src='data:image/png;base64,".base64_encode($canvas)."'>";
	
	print_r($arr);
	
}

/*-----------------------------------
関数
-----------------------------------*/
/*
if($_POST['action'] == 'call_this') {
  // call removeday() here
	imgChange('a','d');
}
*/
/*-----------------------------------
選択
-----------------------------------*/
if(isset($_POST['test1'])){
	$arr = range('b','d');
	imgChange($arr);
}
if(isset($_POST['test2'])){
	$arr = range('c','d');
	imgChange($arr);
}
if(isset($_POST['test3'])){
	$arr = range('a','e');
	imgChange($arr);
	
}
if(isset($_POST['test4'])){
	$arr = range('a','g');
	imgChange($arr);
	
}
if(isset($_POST['test5'])){
	$arr = range('a','h');
	imgChange($arr);
}
if(isset($_POST['test6'])){
	$arr = range('a','s');
	imgChange($arr);
}

if(isset($_POST['a'])){
	array_push($arr,'a');
	imgChange($arr);
}
if(isset($_POST['b'])){
	array_push($arr,'b');
	imgChange($arr);
}
if(isset($_POST['c'])){
	array_push($arr,'c');
	imgChange($arr);
}






































?>
