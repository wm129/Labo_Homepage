<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to OhteraLabo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('/asset/css/style.css')}}" rel="stylesheet">
    <script src="js/fixmenu_pagetop.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <header>
        <h1 id="logo"><a href="index.html"><img src="" alt="SAMPLE COMPANY"></a></h1>
        <nav id="menubar">
            <ul>
                <li><a href="#new">What's New</a></li>
                <li><a href="#company">Company</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

<div id="container">

    <div id="contents">

        <section id="new">

            <h2>What's New</h2>
            <dl>
                <dt>2021/12/15</dt>
                <dd>fixmenu_pagetop.jsからscroll.jsに変更。既に利用中のお客様は特に設定の変更は不要です、引き続きご利用下さい。<span class="newicon">NEW</span></dd>
                <dt>2020/09/27</dt>
                <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                <dt>20XX/00/00</dt>
                <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                <dt>20XX/00/00</dt>
                <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                <dt>20XX/00/00</dt>
                <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                <dt>20XX/00/00</dt>
                <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                <dt>20XX/00/00</dt>
                <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                <dt>20XX/00/00</dt>
                <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
            </dl>

        </section>
<!--/#new-->

        <section id="company">

            <h2>Company</h2>

            <h3>会社概要</h3>
            <table class="ta1">
            <caption>見出しが必要であればここを使います</caption>
            <tr>
            <th>見出し</th>
            <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
            <th>見出し</th>
            <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
            <th>見出し</th>
            <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
            <th>見出し</th>
            <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
            <th>見出し</th>
            <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            <tr>
            <th>見出し</th>
            <td>ここに説明など入れて下さい。サンプルテキスト。</td>
            </tr>
            </table>

            <h2>当テンプレートについて</h2>

            <h3>当テンプレートはhtml5+CSS3(レスポンシブWEBデザイン)です</h3>
            <h3>リストタグを使いたい場合の注意点</h3>
            <p>そのままではリストマークが出ませんので、リストタグを使う場合は以下のようなスタイルを追加して下さい。</p>
            <p>&lt;ul <span class="color1">class=&quot;disc&quot;</span>&gt;<br>
            &lt;li&gt;リストタグ&lt;/li&gt;<br>
            &lt;li&gt;リストタグ&lt;/li&gt;<br>
            &lt;li&gt;リストタグ&lt;/li&gt;<br>
            &lt;/ul&gt;
            </p>
            <p>↓出力例</p>
            <ul class="disc">
                <li>リストタグ</li>
                <li>リストタグ</li>
                <li>リストタグ</li>
            </ul>
            <ol>
                <li>olタグはそのままででます。</li>
                <li>olタグはそのままででます。</li>
                <li>olタグはそのままででます。</li>
                <li>olタグはそのままででます。</li>
            </ol>

            <h3>h3タイトルです</h3>
            

    </section>
<!--/#company-->

<section id="service">

<h2>Service</h2>

<div class="list">
<img src="images/sample1.jpg" alt="">
<h4>ここの見出しのサイズは、cssフォルダのstyle.cssの「.list h4」で変更できます。</h4>
<p>左の画像の幅もstyle.cssの「.list img」のwidthの数字で変更できます。</p>
</div>

<div class="list">
<img src="images/sample2.jpg" alt="">
<h4>見出しを入れます。</h4>
<p>説明を入れます。</p>
</div>

<div class="list">
<img src="images/sample3.jpg" alt="">
<h4>見出しを入れます。</h4>
<p>説明を入れます。</p>
</div>

<div class="list">
<img src="images/sample4.jpg" alt="">
<h4>見出しを入れます。</h4>
<p>説明を入れます。</p>
</div>

<div class="list">
<img src="images/sample5.jpg" alt="">
<h4>見出しを入れます。</h4>
<p>説明を入れます。</p>
</div>

</section>
<!--/#service-->
<form method="POST" action="{{ route('confirm') }}" >
    <!--route contact で　フォームの内容がrouteに変遷するように定義している-->
    @csrf
    @method('POST')
    <div class="form-inner">
        <div class="form-cont">
            <div class="mg-b_40">
                <label for="your_name" class="required-tag">氏名</label><br>
                <input type="text" placeholder="wm129" id="name" name="your_name" value="{{ old('your_name') }}">
                @if($errors->has('your_name'))
                  <p class="required">{{ $errors->first('your_name') }}</p>
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
            <div class="button_1">
                <button class="button">問い合わせ送信</button>
            </div>
        </div>
    </div>
<!--/#contact-->

</div>
<!--/#contents-->

</div>
<!--/#container-->

<footer>
<small>Copyright&copy; <a href="index.html">SAMPLE COMPANY</a> All Rights Reserved.</small>
<span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
</footer>

<!--jQueryファイルの読み込み-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--ページの上部へ戻るボタンとスクリプト-->
<p class="scroll"><a href="#">↑</a></p>
<script src="js/scroll.js"></script>

</body>
</html>


