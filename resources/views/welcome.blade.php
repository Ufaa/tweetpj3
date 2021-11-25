<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- ←① -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- ←② -->
    <title>Laravel-Vue-todo</title>
</head>

<body>
    <div id="app">
        <!-- ←③ -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <br>
                </div>
                <div class="col-xs-6">

                    <table class="table">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tweet</th>
                                <th>完了ボタン</th>
                            </tr>
                        </thead>


                    </table>
                </div>
                <div class="col-xs-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tweetを入力してください">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="button">シェア</button>
                        </span>
                    </div>
                </div>
                <form action="/" method="post">
                    {{csrf_field()}}
                    @if ($errors->has('content'))
                    <tr>
                        <th></th>
                        <td>
                            <p>{{$errors->first('content')}}</p>
                        </td>
                    </tr>
                    @endif
                    <div class="form-group">
                        <!--<label>やることを追加してください</label>-->
                        <input type="text" name="content" class="form-control" placeholder="" style="width:675px;">
                        <button type="submit" class="btn btn-primary">追加</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script> <!-- ←④ -->
</body>

</html>