@extends('layouts.app')

@section('content')

<div class="container px-5 mx-auto">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">お問い合わせ
                </div>

                <form class="card-body" method="post" action="/store">
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">お名前</label>
                        <div class="col-sm-4">
                        <input type="name" class="form-control" id="inputFirstName" placeholder="例）山田">
                        </div>
                        <div class="col-sm-4">
                        <input type="name" class="form-control" id="inputLastName" placeholder="例）太郎">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="relative" class="col-sm-3 col-form-label">性別</label>
                        <div class="col-sm-8">
                        <input type="radio" name="gender" value="0" checked="checked">男性
                        <input type="radio" name="gender" value="1">女性
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">メールアドレス</label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputEmail" placeholder="例）test@example.com">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputZip" class="col-sm-3 col-form-label">郵便番号</label>
                        <label for="inputZip" class="col-sm-1 col-form-label">〒</label>
                        <div class="col-sm-7">
                        <input type="zip" class="form-control" id="inputZip" placeholder="例）123-4567">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-3 col-form-label">住所</label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputAddress" placeholder="例）東京都渋谷区千駄ケ谷1-2-3">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputBldName" class="col-sm-3 col-form-label">建物名</label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputBldName" placeholder="例）千駄ケ谷マンション101">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputContacts" class="col-sm-3 col-form-label">ご意見</label>
                        <div class="col-sm-8">
                        <textarea type="contacts" class="form-control" id="inputContacts"></textarea>
                        </div>
                    </div>

                    <div class="post">
                        <button type="submit" class="btn btn-primary">確認</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection