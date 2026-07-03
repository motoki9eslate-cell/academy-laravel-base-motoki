<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:sans-serif;
        }

        body{
            background:#f5f5f5;
        }

        header{
            background:#1f5673;
            color:#fff;
            padding:20px 60px;

            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        header h1{
            font-size:32px;
        }

        header button{
            background:#fff;
            border:none;
            padding:12px 24px;
            cursor:pointer;
            border-radius:5px;
        }

        .container{
            width:1100px;
            margin:40px auto;
            background:#fff;
            padding:50px;
        }

        .profile{
            display:flex;
            align-items:center;
            gap:60px;
        }

        .profile img{
            width:220px;
            height:220px;
            border-radius:50%;
        }

        .intro{
            flex:1;
        }

        .intro h2{
            margin-bottom:20px;
            border-bottom:2px solid #999;
            display:inline-block;
        }

        .btn{
            margin-top:25px;
            background:#1f5673;
            color:white;
            border:none;
            padding:12px 25px;
            cursor:pointer;
            border-radius:4px;
        }

        .chart{
            margin-top:80px;
            text-align:center;
        }

        .chart h2{
            margin-bottom:25px;
        }

        .graph{
            margin-top:30px;
            height:350px;
            border:2px dashed #bbb;
            display:flex;
            justify-content:center;
            align-items:center;
            color:#888;
        }

        footer{
            margin-top:40px;
            text-align:center;
            background:#1f5673;
            color:#fff;
            padding:15px;
        }
    </style>

</head>
<body>

<header>

    <h1>My Portfolio</h1>

    <form method="POST" action="#">
        @csrf
        <button>ログアウト</button>
    </form>

</header>

<div class="container">

    <div class="profile">

        <img src="https://picsum.photos/250" alt="">

        <div class="intro">

            <h2>自己紹介</h2>

            <p>
                自分の自己紹介文が入ります。<br>
                自分の自己紹介文が入ります。<br>
                自分の自己紹介文が入ります。
            </p>

            <button class="btn">
                自己紹介を編集する
            </button>

        </div>

    </div>

    <div class="chart">

        <h2>学習チャート</h2>

        <button class="btn">
            編集する
        </button>

        <div class="graph">

            Chart.js Bar Chart

        </div>

    </div>

</div>

<footer>

portfolio site

</footer>

</body>
</html>