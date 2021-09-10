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

    <form action="/user/register" method="post">
        @csrf
        <div class="container">

            @if (count($errors) > 0)
                <p>入力に誤りがあります。再入力してください</p>
            @endif

            <div class="row">
                <h4>アカウント</h4>

                <div class="input-group input-group-icon">
                    <input type="text" name="name" placeholder="ニックネーム" value="{{old('name')}}"/>
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                    @if ($errors->has('name'))
                        <tr><th>※</th><td>{{$errors->first('name')}}</td></tr>
                    @endif
                </div>

                <div class="input-group input-group-icon">
                    <input type="email" name="mail" placeholder="メールアドレス" value="{{old('mail')}}"/>
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    @if ($errors->has('mail'))
                        <tr><th>※</th><td>{{$errors->first('mail')}}</td></tr>
                    @endif
                </div>
                
                <div class="input-group input-group-icon">
                    <input type="password" name="pass" placeholder="パスワード"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                    @if ($errors->has('pass'))
                        <tr><th>※</th><td>{{$errors->first('pass')}}</td></tr>
                    @endif
                </div>
                
                <div class="input-group input-group-icon">
                    <input type="password" name="pass_confirmation" placeholder="パスワード確認"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                    @if ($errors->has('pass'))
                        <tr><th>※</th><td>{{$errors->first('pass')}}</td></tr>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-half">
                    <h4>生まれ年</h4>
                    <div class="input-group">
                        <div class="col-third">
                            <input type="text" name="birth_year" placeholder="YYYY" value="{{old('birth_year')}}"/>
                        </div>
                    </div>
                </div>

                <div class="col-half">
                    <h4>性別</h4>
                    <div class="input-group">
                        <input type="radio" name="gender" value="1" id="gender-male"/>
                        <label for="gender-male">男性</label>
                        <input type="radio" name="gender" value="2" id="gender-female"/>
                        <label for="gender-female">女性</label>
                    </div>
                </div>
            </div>
            
                {{-- {!! Form::select('prefecture',{$items->name},old('prefecture'),['class' => 'form-control','id' => 'prefecture','placeholder' => '▼都道府県']) !!} --}}
                {{-- 市区町村のプルダウンメニュー --}}
                <h4>お住まい</h4>
                <form action="prefecture" old="prefecture" class="form-control" id="select">
                    <select id="prefecture" name="prefecture" value="{{old('prefecture')}}">
                        <option value="" style="display: none;">▼都道府県</option>
                        @foreach ($items as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </form>
                <select name="city" id="city" class="form-control" value="{{old('city')}}">
                    <option value=""></option>
                </select>
    
                <div class="row">
                    <h4>利用規約</h4>
                    <div class="input-group">
                    <input type="checkbox" id="terms"/>
                    <label for="terms">利用規約に同意します。</label>
                    </div>
                </div>
        <input type="submit" value="登録">    
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/js/register_script.js"></script>
</body>
</html>
