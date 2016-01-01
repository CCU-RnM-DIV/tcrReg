<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>105偏鄉教師寒假教學專業成長研習 線上報名系統</title>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



</head>

<body>

    <div class="container">

        <div class="header clearfix" style="margin-top: 5px;">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation"><a href="http://dream.k12cc.tw">研習營首頁</a></li>
                    <li role="presentation"><a href="/">報名首頁</a></li>
                    <li role="presentation"><a href="/general">{{isset(Auth::user()->email) ? Auth::user()->email : '報名管理'}}</a></li>
                </ul>
            </nav>
            <h3 class="text-muted"><a href="index.php">105偏鄉教師寒假教學專業成長研習 線上報名系統</a></h3>
        </div>

        <div style="width: 100%; background-image: url('/assets/images/banner.png'); background-repeat: no-repeat; background-size: 100%;">
            <div style="padding-top: 100px;padding-bottom: 80px;"></div>
        </div>

        <h4 class="text-danger text-center">若有相關帳戶問題請連絡 resttc@ccu.edu.tw</h4>

        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> 功能表
                        </h3>
                    </div>
                    <div class="panel panel-body">
                        <a href="/general/update" class="btn btn-warning">修改資料</a>
                        <br><br>
                        <a href="/general/select-subject" class="btn btn-success">修改報名科目</a>
                        <br><br>
                        <a href="#" class="btn btn-success">修改葷素資訊</a>
                        <br><br>
                        <a href="/logout" class="btn btn-danger">登出系統</a>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> 注意事項
                        </h3>
                    </div>
                    <div class="panel panel-body">
                        <p>除 E-Mail 帳號不得修改外，</p>
                        <p>其餘資料可在 <strong>2016-01-08 22:00:00</strong> 前修改。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                @yield('right-content')
            </div>

        </div>


    </div>

    @yield('footer')

</body>