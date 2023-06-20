<?php
include("./Slime.class.php");

$slime_shape = [				// スライムの形
	[
		"footprints" => "=",    // スライムの足跡
		"mark" => "○"           // スライムのマーク
	],
	[
		"footprints" => "~",    // スライムの足跡
		"mark" => "★"          // スライムのマーク
	]
];

// インスタンス生成
$slimes =[];
foreach ($slime_shape as $slime_feature) {
	$slimes[] =  new Slime($slime_feature["footprints"], $slime_feature["mark"]);
}

$result = "";		// 勝ち負け
$goal_slime = "";	// 勝利したスライムを格納
$is_goal = false;	// ゴール判定

echo "GO!!".PHP_EOL;	// 開始の合図

do {

	echo "---------------------------------".PHP_EOL;	// 「枠」区切り
	$current_position = [];
	foreach ($slimes as $key => $slime) {
		
		// スライムを走らせる
		$slime->move_position();
		// 現在位置を取得
		$current_position[] = $slime->get_position();
	}

	// 位置情報からゴールしたかの判定
	foreach ($current_position as $key => $value) {

		// ゴールしたらflagをTrueに
		if ($value >= 10) {
			$is_goal = true;
			// 勝利したスライムを格納
			$goal_slime .= $slimes[$key]->get_mark().PHP_EOL;	// 配列
		}
			
	}

	usleep(100000);		// 0.1秒スリープ

} while (!$is_goal);	// true になったら抜ける

echo "---------------------------------".PHP_EOL;		
echo "winner!".PHP_EOL;
echo $goal_slime;