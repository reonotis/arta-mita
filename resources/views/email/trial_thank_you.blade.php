<!DOCTYPE html>
<html>
<body>

下記内容の体験申込を受け付けました<br>
-------------------------------<br>
■ご希望の日時<br>
　{{ $trial->date_time->format('Y-m-d H:i') }}<br>
■ご希望のコース<br>
　{{ \App\Consts\CommonConsts::TRIAL_COURSE_LIST[$trial->course_id] }}<br>
-------------------------------<br>
<br>
3営業日以内に担当者から返信メールをお送りいたします。<br>
いましばらくお待ちください。<br>
<br>
ご連絡がない場合は改めてお問い合わせ頂きますようお願いいたします。<br>
<br>
このメールはシステムからの自動送信メールです。<br>
返信を行っても確認する事は出来ませんのでご了承ください。<br>
<br>
</body>
</html>
