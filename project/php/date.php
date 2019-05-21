<?php
$date = new DateTime('2017-10-11 09:20:30');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> 予約フォーム</title>
</head>  
<body>
    <header class="header">
   </header>
   <main class="main">
       <form methid="post" action="comp_re.php">
       <div class="main-wrapper">
            <div class="note">
                <p>※インターネットでのご予約は１時間後以降となりますので、お急ぎの方はお電話にてご予約ください</p>
                <p>※オプションの追加をご希望の方は、メッセージ欄にご記入ください。</p>
                <p>※マスコミ／エアラインプランのご予約はお電話にて承っております。</p>
                <p>お電話でのご予約はこちらからTEL.045-594-8885</p>
            </div>
            <fieldset>
            <div class="place-select">
                <label><h3>スタジオ選択</h3>
                <select name="studio" id="">
                    <option value="" >スタジオを選択してください</option>
                    <option value="板橋スタジオ"> 板橋スタジオ</option>
                    <option value="池袋スタジオ">池袋スタジオ</option>
                    <option value="新宿スタジオ">新宿スタジオ</option>
                    <option value="横浜スタジオ">横浜スタジオ</option>
                </select>
                </label>
            </div>
            <div class="plan-select">
                <label><h3>プランを選択する</h3>
                <input type="radio" name="plan" value="レディースコース"><span class="text">レディースコース</span><br>
                <input type="radio" name="plan" yalue="メンズコース"><span class="text">メンズコース</span><br>
                <input type="radio" name="plan" value="スタンダードコース"><span class="text">スタンダードコース</span><br>
                <input type="radio" name="plan" value="クイックコース"><span class="text">クイックコース</span><br>
                </label>
            </div>
            <div class="day-select">
            <label><h3> ご予約の日時を選択</h3>
                <input  name=date type="datetime-local" value="<?= $date->format('Y-m-d\TH:i') ?>"></input><br>
                </label>
            </div><br>
       </div>
        </div class="">
            <div class="">
            <button>前の画面に戻る</button>
            <div>
            </div class="">
            <div>
            <input type="submit" value="次へ進む">
            </div>
        </div>
        </fieldset>
       </form>
   </main>
</body>
</html>