<form method="POST" action="{{ route('confirm') }}" >
    <!--route contact で　フォームの内容がrouteに変遷するように定義している-->
    @csrf
    @method('POST')
    <div class="form-inner">
        <div class="form-cont">
            <div class="mg-b_40">
                <label for="your_name" class="required-tag">氏名</label><br>
                <input type="text" placeholder="wm129" id="name" name="your_name" value="{{ old('name') }}">
                @if($errors->has('name'))
                  <p class="required">{{ $errors->first('name') }}</p>
                  <!--エラーが返った時に値が入力されたままになるようにしている-->
                @endif
            </div>
            <div class="mg-b_40">
                <label for="email" class="required-tag lg-label">メールアドレス</label><br>
                <input type="email" placeholder="sample@example.com" id="mail" name="email" class="mg-b_10" value="{{ old('email') }}">
                <input type="email" placeholder="確認のため再度入力してください" id="mail" name="email_confirmation">
                @if($errors->has('email'))
                  <p class="required">{{ $errors->first('email') }}</p>
                @endif
                @if($errors->has('email2'))
                  <p class="required">{{ $errors->first('email2') }}</p>
                @endif
            </div>
            <div class="mg-b_40">
                <label for="contact" class="lg-label">お問い合わせ内容</label><br>
                <textarea name="contact" id="contact" cols="30" rows="10" placeholder="Contact">{{ old('contact') }}</textarea>
            </div>
        </div>
    </div>