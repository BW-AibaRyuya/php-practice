<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100; $i++)//1〜100までループ 
  {
    if ($i % 4 === 0 && $i % 5 === 0) {　//4と5の両方の倍数か判定
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

var_dump($personalInfos);

//問題１
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。\n";

//問題２
foreach ($personalInfos as $index => $info) {
    $num = $index + 1;　//1から始まる番号
    echo $num . "番目の" . $info['name'] . "のメールアドレスは" . $info['mail'] . "で、電話番号は" . $info['tel'] . "です。\n";
}

//問題３
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => &$info) {
    $info['age'] = $ageList[$index];//年齢を追加
}
unset($info); 

var_dump($personalInfos);



// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

// Studentクラスのインスタンスを作成
$student = new Student(120, "山田");

// 出力
echo "学籍番号" . $student->studentId . "番の生徒は" . $student->studentName . "です。\n";


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    
    public function attend($subject)//引数で授業名を受け取る
    {
        echo $this->studentName . "は" . $subject . "の授業に参加しました。学籍番号：" . $this->studentId . "\n";
    }
}


$yamada = new Student(120, '山田');


$yamada->attend('PHP');

// Q5 定義済みクラス
//問題１
$today = new DateTime('2025-11-03');

$today->modify('-1 month');

echo $today->format('Y-m-d') . "\n";

//問題２
$birth = new DateTime('1992-04-25');

$interval = $birth->diff(new DateTime('2025-11-03'));//2つの日付の差を DateInterval で取得

echo "あの日から" . $interval->days . "日経過しました。\n";

//２

// Q3 オブジェクト-1 V
class Student 
{ 
    public $studentId; 
    public $studentName; 
 
    public function __construct($id, $name) 
    { 
        $this->studentId = $id; 
        $this->studentName = $name; 
    } 
 
    public function attend() 
    { 
        echo '授業に出席しました。'; 
    } 
} 
 
// Studentクラスのインスタンスを作成 
$student = new Student(120, "山田"); 
 
// 出力 
echo "学籍番号" . $student->studentId . "番の生徒は" . $student->studentName . "です。 
"; 
 
// var_dumpで中身を確認 
var_dump($student); 

//修正

// Studentクラス（Q3・Q4統合）
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    // 引数があれば授業名、なければ出席メッセージのみ
    public function attend($subject = null)
    {
        if ($subject) {
            echo $this->studentName . "は" . $subject . "の授業に参加しました。学籍番号：" . $this->studentId . "\n";
        } else {
            echo "授業に出席しました。\n";
        }
    }
}

// Q3用インスタンス
$student = new Student(120, "山田");
echo "学籍番号" . $student->studentId . "番の生徒は" . $student->studentName . "です。\n";
$student->attend();

// var_dumpで中身を確認
var_dump($student);


// Q4用インスタンス
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// var_dumpで中身を確認
var_dump($yamada);


// Q5 定義済みクラス
// 問題1
$today = new DateTime('2025-11-03');
$today->modify('-1 month');
echo $today->format('Y-m-d') . "\n";
var_dump($today);

// 問題2
$birth = new DateTime('1992-04-25');
$interval = $birth->diff(new DateTime('2025-11-03'));
echo "あの日から" . $interval->days . "日経過しました。\n";
var_dump($birth);
var_dump($interval);

//追加課題１
class Pokemon {

    public $name;
    public $element;

    // コンストラクタ
    public function __construct($name, $element)
    {
        $this->name = $name;
        $this->element = $element;
    }

    // attackメソッド
    public function attack($skill)
    {
        echo "いけ、{$this->element}ポケモン{$this->name}！！{$skill}だ！！\n";
    }
}

$pikachu = new Pokemon("ピカチュウ", "ネズミ");
$pikachu->attack("10万ボルト");


var_dump($pikachu);


//追加課題２
class Employee {

    public $employeeId;
    public $employeeName;

    // コンストラクタ
    public function __construct($employeeId, $employeeName)
    {
        $this->employeeId = $employeeId;
        $this->employeeName = $employeeName;
    }

    // checkInメソッド
    public function checkIn()
    {
        echo "{$this->employeeName}が出勤しました。 社員ID：{$this->employeeId}\n";
    }
}


$employee = new Employee(1, "山田太郎");
$employee->checkIn();


var_dump($employee);

//コンストラクタはオブジェクト生成時に呼ばれる初期化メソッド
//オブジェクトはクラスという設計図から new を使って作られる実体（インスタンス）。
//プロパティはオブジェクトの状態（データ）。メソッドはオブジェクトができること（操作）。
//var_dump() は変数の型・値・（文字列ならバイト数）・配列やオブジェクトの内部構造を表示するデバッグ関数。
?>