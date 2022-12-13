<form method="POST" action="{{ route('thanks') }}" class="confirm__ar">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <br>
        お問い合わせありがとうございます。
    <br>
        メールを送信しました。
    <br>
    <div class="confirm_bk">
      <a href="{{ route('index') }}" class="back_btn"><span class="f-bold">戻る</span></a>
      <input onclick="submit();" type="button" value="この内容で送信する" class="confirm_btn">
    </div>
  </form>