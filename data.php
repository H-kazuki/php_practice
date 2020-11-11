<?php
require_once('menu.php');

//カテゴリ
$appetizer = new Category(1, 'サラダ・前菜', 'img/appetizer1.jpg');
$maine = new Category(2, 'メイン', 'img/maine1.jpg');
$dessert = new Category(3, 'デザート', 'img/dessert1.jpg');
$drink = new Category(4, 'ドリンク', 'img/drink1.jpg');
$categorys = array($appetizer, $maine, $dessert, $drink);


//メニュー　ID　前菜・サラダ(1)、メイン(2)、デザート(3)、ドリンク(4)
//前菜・サラダ
$appetizer1 = new Menu(1, '生ハム', 300, 'appetizer1');
$appetizer2 = new Menu(1, '自家製ピクルス', 300, 'appetizer2');
$appetizer3 = new Menu(1, 'オリーブのマリネ', 300, 'appetizer3');
$appetizer4 = new Menu(1, 'トマトとアボカドのブルスケッタ', 400, 'appetizer4');
$appetizer5 = new Menu(1, 'トマトとモッツァレラのカプレーゼ', 450, 'appetizer5');
$appetizer6 = new Menu(1, 'シーザーサラダ', 400, 'appetizer6');
$appetizer7 = new Menu(1, 'エビとアボカドのサラダ', 500, 'appetizer7');
$appetizer8 = new Menu(1, '生ハムとアボカドの生春巻き', 500, 'appetizer8');
$appetizer9 = new Menu(1, '4種のチーズ盛り合わせ', 800, 'appetizer9');
$appetizer10 = new Menu(1, '小エビのアヒージョ', 400, 'appetizer10');
$appetizer11 = new Menu(1, '季節のアヒージョ', 500, 'appetizer11');
$appetizer12 = new Menu(1, 'ムール貝の白ワイン蒸し', 800, 'appetizer12');

//メイン
$maine1 = new Menu(2, '特製ペペロンチーノ', 500, 'maine1');
$maine2 = new Menu(2, '季節のパスタ', 700, 'maine2');
$maine3 = new Menu(2, 'エビとトマトのパスタ', 800, 'maine3');
$maine4 = new Menu(2, 'マルゲリータ', 600, 'maine4');
$maine5 = new Menu(2, 'ゴルゴンゾーラと蜂蜜のピザ', 600, 'maine5');
$maine6 = new Menu(2, '5種類のハーブのチキンステーキ', 600, 'maine6');
$maine7 = new Menu(2, '煮込みハンバーグ', 700, 'maine7');
$maine8 = new Menu(2, 'フィレステーキ', 1000, 'maine8');
$maine9 = new Menu(2, '牛タンの赤ワイン煮込み', 1000, 'maine9');
$maine10 = new Menu(2, 'きのこのリゾット', 800, 'maine10');
$maine11 = new Menu(2, 'イカスミのパエリア', 1000, 'maine11');
$maine12 = new Menu(2, '海の幸のパエリア', 1200, 'maine12');
//デザート
$dessert1 = new Menu(3, 'アイスクリーム', 250, 'dessert1');
$dessert2 = new Menu(3, 'ガトーショコラ', 350, 'dessert2');
$dessert3 = new Menu(3, '特製パンケーキ', 400, 'dessert3');
$dessert4 = new Menu(3, 'フレインチトースト', 400, 'dessert4');
//ドリンク
$drink1 = new Menu(4, 'ビール', 450, 'drink1');
$drink2 = new Menu(4, 'ハイボール', 450, 'drink2');
$drink3 = new Menu(4, 'カシスオレンジ', 600, 'drink3');
$drink4 = new Menu(4, 'ファジーネーブル', 600, 'drink4');
$drink5 = new Menu(4, 'ジントニック', 600, 'drink5');
$drink6 = new Menu(4, 'グラスワイン(赤)', 300, 'drink6');
$drink7 = new Menu(4, 'グラスワイン(白)', 300, 'drink7');
$drink8 = new Menu(4, 'オレンジジュース', 350, 'drink8');
$drink9 = new Menu(4, 'コーラ', 350, 'drink9');
$drink10 = new Menu(4, 'カルピス', 350, 'drink10');
$drink11 = new Menu(4, 'ジンジャーエール', 350, 'drink11');
$drink12 = new Menu(4, 'ウーロン茶', 350, 'drink12');
$drink13 = new Menu(4, 'コーヒー', 400, 'drink13');
$menus = array(
	//前菜・サラダ
	$appetizer1, $appetizer2 ,$appetizer3, $appetizer4, $appetizer5, $appetizer6, $appetizer7, $appetizer8, $appetizer9, $appetizer10, $appetizer11, $appetizer12,
	//メイン
	$maine1, $maine2, $maine3, $maine4, $maine5, $maine6, $maine7, $maine8, $maine9, $maine10, $maine11, $maine12,
	//デザート
	$dessert1, $dessert2, $dessert3, $dessert4,
	//ドリンク
	$drink1, $drink2, $drink3, $drink4, $drink5, $drink6, $drink7, $drink8, $drink9, $drink10, $drink11, $drink12, $drink13
	);

?>