<!DOCTYPE html>
<html lang="ja">
<style type="text/css">
table.calendar{
    border-collapse: separate;
    border: 2px solid #FF0099;
}
table.calendar th,
table.calendar tb{
    text-align:center;
    border:1px dotted #FF33CC;
}
.sunday{
    background-color:#FFc0c0;
}
.saturday{
    background-color:#c0c0ff;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>カレンダーを表示したい</title>
</head>
<body>
   <div>
    <?php
    //Strictエラーが発生する場合
    error_reporting(E_ALL & ~E_STRICT);
    // Strictエラーが発生する場合
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

    require_once 'Calendar/Month/Weeks.php';

    // 曜日に表示する文字列とcssクラス名を設定
    $weekdayDefines = array(array('日','sunday'), array('月','monday'),
                            array('火','tuesday'), array('水','wenesday'),
                            array('木','thursday'), array('金','friday'),
                            array('土','saturday')); 
    
    //  カレンダーの左側に表示させる曜日を指定
    $weekdayBase = 0;//0:日曜〜6:土曜

    //  カレンダーに表示する年月を所得する
    //  デフォルトの年月を設定
    $year  = (int) date('Y');
    $month = (int) date('n');

    // GETパラメーター指定して表示年月を取得
    if(isset($_GET['year_month'])){
        $yyyymm = trim($_GET['year_month']);
    

        // YYYYMM形式であれば年月を取得
        if(preg_match('/¥A([12]¥d{3})(1[012]|0[1-9])¥z/', $yyyymm, $match)) {
            $year  =(int) $match[1];
            $month =(int) $match[2];
        }
    }

    // カレンダーデータ生成
    $calendar = new Calendar_Month_Weeks($year, $month, $weekdayBase);
    $calendar->build();

    // カレンダー曜日部分の表示
    $thisMonth = $calendar->thisMonth(true);
    $prevMonth = $calendar->prevMonth(true);
    $nextMonth = $calendar->nextMonth(true);

    $prevMonthUrl = '?year_month=' . date('Ym', $prevMonth);
    $nextMonthUrl = '?year_month=' . date('Ym', $nextMonthUrl);
    $thisMonthUrl = date('Ym', $thisMonth);
    ?>

    <table class="calendar">
        <thead>
            <tr>
                <tb><a href="<?php echo $prevMonthUrl; ?>">&lt;&lt;</a></tb>
                <th colspan="5"><?php echo $thisMonthText; ?></th>
                <tb><a href="<?php echo $nextMonthUrl; ?>">&gt;&gt;</a></tb>
            </tr>
            <tr>
    <?php
    for ($i=0; $i<7; $i++){
        $weekday = ($weekdayBase + $i) %7;
        $weekdayText = $weekdayDefines[$weekday][0];
        $weekdayText = $weekdayDefines[$weekday][1];
        echo '<th class="' .$weekday. '">',$weekdayText,'</th>';
    }
    ?>
            </tr>
        </thead>
        <tbody>
    <?php
    // カレンダー日付部分を表示
    while($days = $calendar->fetch()){
        $days->build();
        $weekday = 0;

        echo '<tr>';
        while ($day = $days->fetch()){
            $weekdayClass = $weekdayDefines[$weekday][1];
            if($day->isEmpty()){
                $dayText = "&nbsp;";
            }

            echo '<tb class=" '.$weekdayClass.' ">', $dayText,'</tb>';

            $weekday++;
        }
        echo '</tr>';
    }
    ?>        
        </tbody>
    </table>
    </div> 
</body>
</html>