<!DOCTYPE html>
<html lang="ja">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/register_style.css') }}">

</head>
<body>
    <div class="container">
        <form>
            <div class="row">
            <h4>アカウント</h4>
            <div class="input-group input-group-icon">
                <input type="text" placeholder="ニックネーム"/>
                <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>
            <div class="input-group input-group-icon">
                <input type="email" placeholder="メールアドレス"/>
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
            </div>
            <div class="input-group input-group-icon">
                <input type="password" placeholder="パスワード"/>
                <div class="input-icon"><i class="fa fa-key"></i></div>
            </div>
            <div class="input-group input-group-icon">
                <input type="password2" placeholder="パスワード確認"/>
                <div class="input-icon"><i class="fa fa-key"></i></div>
            </div>
            </div>
            <div class="row">
            <div class="col-half">
                <h4>生まれ年</h4>
                <div class="input-group">
                    <div class="col-third">
                        <input type="text" placeholder="YYYY"/>
                    </div>
                </div>
            </div>
            <div class="col-half">
                <h4>性別</h4>
                <div class="input-group">
                    <input type="radio" name="gender" value="male" id="gender-male"/>
                    <label for="gender-male">男性</label>
                    <input type="radio" name="gender" value="female" id="gender-female"/>
                    <label for="gender-female">女性</label>
                </div>
            </div>
            </div>
            {{-- {!! Form::select('prefecture',{$items->name},old('prefecture'),['class' => 'form-control','id' => 'prefecture','placeholder' => '▼都道府県']) !!} --}}
            {{-- 市区町村のプルダウンメニュー --}}
            <h4>お住まい</h4>
            <form action="prefecture" old="prefecture" class="form-control" id="select">
                <select id="prefecture">
                    <option value="" style="display: none;">▼都道府県</option>
                    @foreach ($items as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </form>
            <select name="city" id="city" class="form-control">
                <option value=""></option>
            </select>
            <div class="row">
                <h4>Payment Details</h4>
            <div class="col-half">
                <div class="input-group">
                    <select>
                        <option>01 Jan</option>
                        <option>02 Jan</option>
                    </select>
                <select>
                    <option>2015</option>
                    <option>2016</option>
                </select>
                </div>
            </div>
            </div>
            <div class="row">
                <h4>Terms and Conditions</h4>
                <div class="input-group">
                <input type="checkbox" id="terms"/>
                <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
                </div>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/js/register_script.js"></script>
</body>
</html>
