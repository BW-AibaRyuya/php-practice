<?php
// Q1 変数と文字列
$name = "相場";
echo "私の名前は「" . $name . "」です。";
echo "\n";

// Q2 四則演算
$num = 5 * 4;

echo $num;
echo "\n"; // 改行
// 変数を 2 で割った結果を表示
echo $num / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

$now = date('Y年m月d日 H時i分s秒');

echo "現在時刻は、" . $now . "です。";

// Q4 条件分岐-1 if文
$device = "mac";

if ($device === "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device === "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}

// Q5 条件分岐-2 三項演算子
$age = 20;

echo ($age < 18) ? "未成年です。" : "成人です。";//条件 ? trueの場合の値 : falseの場合の値


// Q6 配列
$kanto = ["東京都", "神奈川県", "栃木県", "千葉県", "茨城県", "群馬県", "埼玉県"];

echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$kanto_capitals = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

foreach ($kanto_capitals as $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
$kanto_capitals = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

if (isset($kanto_capitals["埼玉県"]))//「埼玉県」というキーが配列に存在するか確認
 {
    echo "埼玉県の県庁所在地は、" . $kanto_capitals["埼玉県"] . "です。";
}

//Q8　修正
$kanto_capitals = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

// foreach文で配列をループ
foreach ($kanto_capitals as $prefecture => $capital) {
    if ($prefecture === "埼玉県") {
        echo $prefecture . "の県庁所在地は、" . $capital . "です。";
    }
}

// Q9 連想配列-3
$prefectures = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市",
    "愛知県" => "名古屋市",
    "大阪府" => "大阪市"
];

$kanto = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県"];

foreach ($prefectures as $pref => $capital) {
    if (in_array($pref, $kanto)) //現在の都道府県が関東地方か判定
      {
        echo $pref . "の県庁所在地は、" . $capital . "です。";
    } else {
        echo $pref . "は関東地方ではありません。";
    }
    echo "\n";
}

// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。";
}

echo hello("金谷") . "\n";
echo hello("安藤") . "\n";

// Q11 関数-2
function calcTaxInPrice($price) {
    return $price * 1.10; // 消費税10%
}
// 税抜き価格を変数に代入
$price = 1000;
// 関数を呼び出して税込価格を取得
$taxInPrice = calcTaxInPrice($price);

echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";

// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 === 0) {
        return $num . "は偶数です。";
    } else {
        return $num . "は奇数です。";
    }
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case "A":
        case "B":
            return "合格です。";
        case "C":
            return "合格ですが追加課題があります。";
        case "D":
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade("A") . "\n";
echo evaluateGrade("X") . "\n";
//１
?>