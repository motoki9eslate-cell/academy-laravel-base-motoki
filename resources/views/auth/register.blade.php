<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
</head>
<body>

    <h1>ユーザー登録</h1>

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <div>
            <label>氏名</label><br>
            <input type="text" name="name">
            @error('name')
    <p style="color:red;">{{ $message }}</p>
@enderror
        </div>

        <br>

        <div>
            <label>メールアドレス</label><br>
            <input type="email" name="email">
            @error('email')
    <p style="color:red;">{{ $message }}</p>
@enderror
        </div>  

        <br>

        <div>
            <label>パスワード</label><br>
            <input type="password" name="password">
            @error('password')
    <p style="color:red;">{{ $message }}</p>
@enderror
        </div>

        <br>

        <button type="submit">登録</button>

    </form>

</body>
</html>