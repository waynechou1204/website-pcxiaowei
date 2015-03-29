<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>拼车晓位 | 主页</title>

    <link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <!-- <link href="css/style.css" rel='stylesheet' type='text/css' /> -->
    <link rel="stylesheet" href="css/main.css" type='text/css'/>    
    <link href="css/footer.css" rel='stylesheet' type='text/css' />
    
</head>

<body data-spy="scroll" data-target="#myScrollspy">

    <?php include 'header.php'; ?>

    <div class="container">
        <div class="page-header">
            <h1>搜索/发布 <small>寻找同行的小伙伴</small></h1>
        </div>
        <div class="row">
            <div class="col-xs-3" id="myScrollspy">
                <ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="230" data-offset-bottom="230">
                    <li class="active"><a href="#section-location-set">选择地点</a></li>
                    <li><a href="#section-time-set">选择时间</a></li>
                    <li><a href="#section-result-select">搜索结果</a></li>
                    <li><a href="#section-publish">主动发布</a></li>
                    
                </ul>
            </div>

            <div class="col-xs-9">
                <h1 id="section-location-set">选择地点</h1>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">出发地</span>
                    <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
                </div>
                <br />
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">目的地</span>
                    <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2">
                </div>
                <p>地图</p>
                <p>价格</p>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr><hr>
                <hr>
                <hr>
                <hr>
                <hr>

                <h1 id="section-time-set">选择时间</h1>
                <p>日期</p>
                <p>时间</p>
                <p>搜索按钮</p>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr><hr>
                <hr>
                <hr>
                <hr>
                <hr>

                <h1 id="section-result-select">搜索结果</h1>
                <p>一堆结果，UI明显，and简洁</p>
                <p>各种排序</p>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr><hr>
                <hr>
                <hr>
                <hr>
                <hr>

                <h1 id="section-publish">主动发布</h1>
                <p>没有满意结果，那就主动发布</p>
                <p>返回成功页面</p>
                <p>分享按钮！</p>
                <hr>
                <hr>
                <hr><hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>

            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html> 