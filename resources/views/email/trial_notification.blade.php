<!DOCTYPE html>
<html>
<body>

下記内容の問い合わせを受け付けました<br>
■名前<br>
　 {{ $trial->name }}<br>
■メールアドレス<br>
　{{ $customer->email }}<br>
■ご希望の日時<br>
　{{ $trial->date_time->format('Y-m-d H:i') }}<br>
■ご希望のコース<br>
　{{ \App\Consts\CommonConsts::TRIAL_COURSE_LIST[$trial->course_id] }}<br>
<br>
</body>
</html>
