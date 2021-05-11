<?php
use App\Models\District;
use App\User;

function systemDate()
{
    return stoday();
}

function systemVersion()
{
  return '1.0';
}

function user()
{
  return auth()->user();
}

function adminInc($file)
{
    return 'admin.shared.'.$file;
}

function uniqueSeries()
{
    $t = microtime(true);
    $micro = sprintf("%06d",($t - floor($t)) * 1000000);
    $d = new DateTime(date('Y-m-d H:i:s.'.$micro, $t));
    $series = substr(csrf_token(),0,10).$d->format("YmdHisu");
    return $series;
}

function authUserName()
{
  if (!auth()->guest()) {
    return auth()->user()->username;
  }
  return 'Guest';
}



function authLoginSecure($i)
{
  Auth::logout();
  Auth::login(User::find($i));
}

function systemValues($type='title',$index = '')
{


   $values = [
     'title'=>[
       'Mr'=>'Mr',
       'Miss'=>'Miss',
       'Mrs'=>'Mrs',
       'Master'=>'Master',
       'Baby'=>'Baby',
       'Sis'=>'Sister',
       'Fa'=>'Father',
       'Dr'=>'Dr',
       'Honerable'=>'Honerable'
     ],
   ];
   if (empty($index)) {
     return $values[$type];
   }
   return $values[$type][$index];
}

function defaultImage()
{
    return '/admin/images/default.jpg';
}


function empty_val($value='',$r='-')
{
  if (empty($value)) {
    return $r;
  }
  return $value;
}

function checkHtml($status = true)
{
  if ($status) {
    return '<span class="label label-info"><i class="fa fa-check"></i></span>';
  }
  return '<span class="label label-default"><i class="fa fa-times"></i></span>';
}




function userID()
{
  if (!auth()->guest()) {
    return auth()->user()->id;
  }
  return 0;
}

function isActiveRoute($route,$output='active')
 {      
    $resorce = [$route.'.index',$route.'.create',$route.'.edit',$route.'.show'];

    if (($pos = strpos($route, ".")) !== FALSE) { 
        $resorce = [$route];
    }
    $current = Route::currentRouteName();

    if (in_array($current,$resorce)) {
         return $output;
    }
 }

 function isActiveUrl($route,$add_str='',$output='active')
 {      
    $url = route($route).$add_str;
    $current = request()->fullUrl();

    if( $current== $url){
      return $output;
    }
    return '';

 }

 function money_format($amount)
 {
   return number_format($amount,2);
 }



function toDecimal($value='0.00',$d='0.00')
{
  // if ($value <='0') {
  //   return $d;
  // }
  return (float) str_replace(',', "", $value);
}


function extract_numbers($string,$stat = true)
{
   $numbers = preg_replace('/[^0-9]/', '', $string);
   $letters = preg_replace('/[^a-zA-Z]/', '', $string);
   if ($stat) {
      return $numbers;
   }
   return $letters;
}

function time_since($datetime,$full = false) {
    if (date('Y',strtotime($datetime)) > date('Y')) {
      return 'Unknown';
    }
    $now = new DateTime;
    $ago = new DateTime($datetime);

    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'min',
        's' => 'sec',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}


 function dateFormat($date,$f='d M, Y')
 {
   return date($f,strtotime($date));
 }

 
function strDates($range)
{
    return  date('Y-m-d',strtotime($range));
}


function annual($r='start')
{
  $d = [
      'start'=>date('Y-01-01'),
      'end'=>date('Y-12-31')
  ];
  return $d[$r];
}

function all($r='start')
{
  $d = [
      'start'=>'2010-01-01',
      'end'=>date('Y-m-d')
  ];
  return $d[$r];
}

function todayR($r='start')
{
  $d = [
      'start'=>stoday(),
      'end'=>stoday()
  ];
  return $d[$r];
}

function stoday()
{
    return  strDates('today');
}

function tomorrow()
{
    return  strDates('tomorrow');
}

function thisMonth($r='start')
{
    $d = [
        'start'=>strDates('first day of this month'),
        'end'=>stoday()
    ];
    return $d[$r];
}

function lastMonth($r='start')
{
    $d = [
        'start'=>strDates('first day of last month'),
        'end'=>strDates('last day of last month')
    ];
    return $d[$r];
}

function thisWeek($r='start')
{
    $d = [
        'start'=>strDates('monday this week'),
        'end'=>strDates('sunday this week')
    ];
    return $d[$r];
}

function lastWeek($r='start')
{
    $d = [
        'start'=>strDates('last week monday'),
        'end'=>strDates('last week sunday')
    ];
    return $d[$r];
}


function rangeMonth($datestr,$r='start') {
    date_default_timezone_set(date_default_timezone_get());
    $dt = strtotime($datestr);
    $res['start'] = date('Y-m-d', strtotime('first day of this month', $dt));
    $res['end'] = date('Y-m-d', strtotime('last day of this month', $dt));
    return $res[$r];
}

function formatTime($time='',$format= 'H:i:s')
{
  if (empty($time)) $time = date('H:i:s');
  return date($format,strtotime($time));
  
}
function formatDate($date='',$format= 'd, F Y')
{
  return date($format,strtotime($date));
  
}


function convert_number_to_words($number) {

    $hyphen      = '';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'Zero',
        1                   => 'One',
        2                   => 'Two',
        3                   => 'Three',
        4                   => 'Four',
        5                   => 'Five',
        6                   => 'Six',
        7                   => 'Seven',
        8                   => 'Eight',
        9                   => 'Nine',
        10                  => 'Ten',
        11                  => 'Eleven',
        12                  => 'Twelve',
        13                  => 'Thirteen',
        14                  => 'Fourteen',
        15                  => 'Fifteen',
        16                  => 'Fixteen',
        17                  => 'Feventeen',
        18                  => 'Eighteen',
        19                  => 'Nineteen',
        20                  => 'Twenty',
        30                  => 'Thirty',
        40                  => 'Fourty',
        50                  => 'Fifty',
        60                  => 'Sixty',
        70                  => 'Seventy',
        80                  => 'Eighty',
        90                  => 'Ninety',
        100                 => 'Hundred',
        1000                => 'Thousand',
        1000000             => 'Million',
        1000000000          => 'Billion',
        1000000000000       => 'Trillion',
        1000000000000000    => 'Quadrillion',
        1000000000000000000 => 'Quintillion'
    );

    if (!is_numeric($number)) {
        return false;
    }

    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }

    $string = $fraction = null;

    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }

    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }

    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }

    return $string;
}

function get_greeting_message()
{
  $Hour = date('G');
  if ( $Hour >= 5 && $Hour <= 11 ) {
      $text =  "Good Morning";
  } else if ( $Hour >= 12 && $Hour <= 18 ) {
      $text =  "Good Afternoon";
  } else if ( $Hour >= 19 || $Hour <= 4 ) {
      $text =  "Good Evening";
  }
  $user_name = auth()->user()->name;

  return 'Welcome to HMS! '.$text. ' '.$user_name;
}


