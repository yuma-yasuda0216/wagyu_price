<?php
# 配列操作
$countries = [
  '日本',
  'アメリカ',
  'カナダ',
  'ロツア',
];

//Q1
echo $countries[2];

//Q2
$countries = 'ロシア';
var_dump($countries);

//Q3
$countries = [
  '日本',
  'アメリカ',
  'カナダ',
  'ロツア',
  '中国',
];

#
$days = [
  'sunday' => '日曜日',
  'monday' => '月曜日',
  'tuesday' => '火曜日',
  'wednesday' => '土曜日',
  'thursday' => '木曜日',
  'friday' => '金曜日',
]

//Q4
echo $days['tuesday'];

//Q5
$days['wednesday'] = '水曜日';
var_dump($days);

//Q6
$days['saturday'] ='土曜日';

echo $days['saturday'];


# 繰り返し構文

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

// Q1
foreach ($array as $number => $a){
  $numbers = $number +1;
  echo $numbers . 'つめは' . $a, "\n";
}

// Q2
for($a=0; $a<=5; $a++){
  $number = $a +1;
  echo $number . 'つめは' . $array[$a], "\n";
}

# 多次元連想配列

$menu = [
  'カレーライス' => [
      '値段' => 1200,
      'ジャンル' => 'インド料理',
  ],
  'スパゲッティ' => [
      '値段' => 1000,
      'ジャンル' => 'イタリア料理',
  ],
  'ボルシチ' => [
      '値段' => 2000,
      'ジャンル' => 'ロシア料理',
  ],
];

// Q1
foreach ($menu as $cooking => $price){
  echo $cooking . 'は' . $price['ジャンル'] .'で値段は' . $price['値段'] . '円です。',"\n";
}

// Q2
$menu['そば']['値段']=800;
$menu['そば']['ジャンル']='日本料理';

// Q3
$menu['カレーライス']['人気度']=5;
$menu['スパゲッティ']['人気度']=3;
$menu['ボルシチ']['人気度']=4;
$menu['そば']['値段']=800;
$menu['そば']['ジャンル']='日本料理';
$menu['そば']['人気度']=4;

# 関数

// Q1
function calcDiscountPrice($discountPrice)
{
    $price= 0.8 * $discountPrice;
    return $discountPrice . '円の商品が今だけ' . $price . '円です！';
}

echo calcDiscountPrice(800);

// Q2
function whichIsBigger($number)
{
    switch ($number) {
        case 'big':
            return '第一引数の方が大きい。値："100"';
        
        case 'small':
            return '第一引数の方が大きい。値："50"';
    }
}

echo whichIsBigger('big'),"\n";
echo whichIsBigger('small');
// Q3


# オブジェクト

// Q1
class merchandise
{
    public $param1;
    public $param2;

    public function __construct($name,$price)
    {
        $this->param1=$name;
        $this->param2=$price;
    }
}

$aplle=new merchandise('りんご',100);

echo $aplle->param1 . 'の税抜き価格は' . $aplle->param2 . '円です。';

// Q2
class merchandise
{
    public $param1;
    public $param2;

    public function __construct($name,$price)
    {
        $this->param1=$name;
        $this->param2=$price;
    }
    
    public function fetchCalcTaxInPrice()
    {
        echo $this->param1 . 'の税込価格は' . $this->param2 . '円です。';
    }
}

$orange=new merchandise('みかん',220);
$orange->fetchCalcTaxInPrice();
?>
