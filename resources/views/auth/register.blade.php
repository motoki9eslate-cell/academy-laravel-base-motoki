<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f5f5f5;
        }

        .container{
            width:420px;
            margin:80px auto;
            background:#fff;
            padding:40px;
            border-radius:10px;
            box-shadow:0 5px 15px rgba(0,0,0,.15);
        }

        h1{
            text-align:center;
            margin-bottom:30px;
            color:#2d607d;
        }

        label{
            display:block;
            margin-top:15px;
            margin-bottom:5px;
            font-weight:bold;
        }

        input{
            width:100%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:5px;
            font-size:16px;
        }

        button{
            width:100%;
            margin-top:30px;
            padding:14px;
            background:#2d607d;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
            font-size:16px;
        }

        button:hover{
            background:#234b61;
        }

        .error{
            color:red;
            font-size:14px;
            margin-top:5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>ユーザー登録</h1>

    <form action="{{ route('register.store') }}" method="POST">

        @csrf

        <label>名前</label>
        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
        >

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror


        <label>メールアドレス</label>
        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
        >

        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror


        <label>パスワード</label>
        <input
            type="password"
            name="password"
        >

        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror


        <button type="submit">
            登録する
        </button>

    </form>

</div>

</body>
</html>