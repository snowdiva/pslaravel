<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>品书文学-登录</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../adminstyle/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../adminstyle/css/font-awesome.min.css">
    <link rel="stylesheet" href="../adminstyle/css/ionicons.min.css">
    <link rel="stylesheet" href="../adminstyle/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../adminstyle/css/skins/_all-skins.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>品书文学</b>管理后台</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">管理人员请登录</p>

        <form action="<?php echo e(url('/admin/login')); ?>" method="post">
            <div class="form-group has-feedback">
                <input name="name" type="text" class="form-control" placeholder="帐号...">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="passwd" type="password" class="form-control" placeholder="密码...">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="checkcode" id="">
                <div class="">
                    <img src="<?php echo e(captcha_src()); ?>" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <?php echo e(csrf_field()); ?>

                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../adminstyle/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../adminstyle/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../adminstyle/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
