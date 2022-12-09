<form method="POST" action="{{ route('send') }}" class="confirm__ar">
    {{ csrf_field() }}
    {{ method_field('POST') }}
      <dt class="confirm__tag">氏名</dt>
      <dd>{{ $inputs['name'] }}</dd>
      <input type="hidden" name="your_name" value="{{ $inputs['your_name'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">メールアドレス</dt>
      <dd>{{ $inputs['email'] }}</dd>
      <input type="hidden" name="email" value="{{ $inputs['email'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">お問い合わせ内容</dt>
      <dd>
        {!! nl2br(e($inputs['content'])) !!}
        <input type="hidden" name="content" value="{{ $inputs['content'] }}">
      </dd>
    </dl>
    <div class="confirm_bk">
      <a href="{{ route('index') }}" class="back_btn"><span class="f-bold">戻る</span></a>
      <input onclick="submit();" type="button" value="この内容で送信する" class="confirm_btn">
    </div>
  </form>