<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------ Include the above in your HEAD tag ---------->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #004466;
            height: 100vh;

        }

        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }

        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
    /*animasion*/
        .backg{
            position:relative;
            height:500px;
            width:500px;
            border-radius:50%;
            background-color:rgba(0,0,0,0.1);
            transform:scale(0.7);

        }
        .animasion{
            padding-left: 320px ;
            width: 200px;
            height: 300px;
            padding-bottom: 330px;
        }
        .planet{
            height:200px;
            width:200px;
            border-radius: 50%;
            position: relative;
            background-color: #ff9933;
            top:45px;
            left:220px;
        }
        .r1{
            background-color: #ffbf80;
            height:20px;
            width:110px;
            border-radius:10px;
            position: relative;
            top:60px;
            left:85px;
        }
        .r2{
            background-color: #ffbf80;
            height: 15px;
            width:90px;
            border-radius:6.5px;
            position: relative;
            top:80px;
            left:110px;
        }
        .r3{
            background-color: #ffbf80;
            height:30px;
            width:120px;
            border-radius: 15px;
            position: relative;
            top:78px;
            left:50px;
        }
        .r4{
            background-color: #ffbf80;
            height:22px;
            width:90px;
            border-radius:11px;
            position: relative;
            top:70px;
            left:12px;
        }
        .r5{
            background-color: rgba(204, 102, 0,0.3);
            height:15px;
            width:40px;
            border-radius:7.5px;
            position: relative;
            bottom:50px;
            left:70px;
        }
        .r6{
            background-color: rgba(204, 102, 0,0.3);
            height:20px;
            width:60px;
            border-radius:11px;
            position: relative;
            bottom:25px;
            left:10px;
        }
        .r7{
            background-color: rgba(204, 102, 0,0.3);
            height:15px;
            width:45px;
            border-radius:7.5px;
            position: relative;
            top:40px;
            left:130px;
        }
        .r8{
            background-color: rgba(255,255,255,0.4);
            height:12px;
            width:30px;
            border-radius:7.5px;
            position: relative;
            top:7px;
            left:32px;
        }
        .shad{
            background-color: transparent;
            box-shadow: 15px 15px rgba(204, 102, 0,0.3);
            position: relative;
            height:200px;
            width:200px;
            border-radius: 50%;
            bottom: 164px;
            right:16px;
        }
        .astro{
            position: relative;
            left:131px;
            bottom: 250px;
            transform: rotate(-30deg);

        }
        .an{
            animation-name: flo;
            animation-duration: 5s;
            animation-iteration-count: infinite;
            position: relative;
            bottom: 80px;
            left:20px;

        }
        @keyframes flo{
            50%{
                transform: translateY(30px);
            }
        }
        .tank{
            background-color: #a6a6a6;
            height:120px;
            width:120px;
            border-radius: 10px;
            position: relative;
            left:95px;
            top:50px;
            transform: rotate(-30deg);
        }
        .helmet{
            background-color: white;
            height:93px;
            width:100px;
            border-radius:45%;
            position: relative;
            left:20px;
            z-index: 5;
        }
        .glass{
            background-color: #666666;
            height:60px;
            width:80px;
            border-top-left-radius:60%;
            border-top-right-radius:60%;
            border-bottom-left-radius:40%;
            border-bottom-right-radius:40%;
            position: relative;
            left:10px;
            top:7px;
        }
        .shine{
            background-color: rgba(166, 166, 166,0.7);
            height:15px;
            width:15px;
            border-radius: 50%;
            position: relative;
            left:10px;
            top:15px;
        }
        .dress{
            background-color:#f2f2f2;
            height:100px;
            width: 100px;
            border-radius: 10%;
            position: relative;
            bottom:5px;
            left:20px;

        }
        .handr{
            height: 26px;
            width:75px;
            background-color: #f2f2f2;
            border-radius:40px;
            position: relative;
            bottom:138px;
            left:95px;
            transform: rotate(-20deg);
        }
        .handl{
            height: 26px;
            width:75px;
            background-color: #f2f2f2;
            border-radius:40px;
            position: relative;
            bottom:111px;
            right:29px;
            transform: rotate(20deg);
        }
        .handr1{
            height: 26px;
            width:57px;
            background-color: #f2f2f2;
            border-radius:26px;
            position: relative;
            bottom: 18px;
            left:35px;
            transform: rotate(90deg);
        }
        .handl1{
            height: 26px;
            width:57px;
            background-color: #f2f2f2;
            border-radius:26px;
            position: relative;
            bottom: 17px;
            right:17px;
            transform: rotate(-90deg);
        }
        .glover{
            height:28px;
            width:26px;
            background-color: white;
            border-top-left-radius:50%;
            border-top-right-radius:50%;
            transform: rotate(-90deg);
            position: relative;
            bottom: 1px;
            right:16px;
        }
        .glovel{
            height:28px;
            width:26px;
            background-color: white;
            border-top-left-radius:50%;
            border-top-right-radius:50%;
            transform: rotate(90deg);
            position: relative;
            bottom: 1px;
            left:42px;
        }
        .thumbr{
            height: 10px;
            width:10px;
            border-radius: 50%;
            background-color: white;
            position: relative;
            right:7px;
            top:19px;
        }
        .thumbl{
            height: 10px;
            width:10px;
            border-radius: 50%;
            background-color: white;
            position: relative;
            left:21px;
            top:19px;
        }
        .b1{
            background-color: tomato;
            width:28px;
            height:5.5px;
            border-radius:13px;
            position: relative;
            top:18px;
            right: 1px;
        }
        .b2{
            background-color: tomato;
            width:28px;
            height:5.5px;
            border-radius:13px;
            position: relative;
            top:18px;
            right: 1px;
        }
        .c{
            background-color: white;
            width:55px;
            height:30px;
            border-radius:8px;
            position: relative;
            top:25px;
            left:23px;
        }
        .btn1{
            height:12px;
            width: 12px;
            border-radius: 50%;
            background-color: #4775ff;
            position: relative;
            left:5px;
            top:10px;
        }
        .btn2{
            height:12px;
            width: 12px;
            border-radius: 50%;
            background-color: #ffd147;
            position: relative;
            left:21px;
            bottom:2px;
        }
        .btn3{
            height:12px;
            width: 12px;
            border-radius: 50%;
            background-color: tomato;
            position: relative;
            bottom:14px;
            left:38px;
        }
        .btn4{
            height:20px;
            width:20px;
            border-radius: 50%;
            background-color: #a6a6a6;
            position: relative;
            left:19px;
            top:4px;
        }

        .legl{
            height:100px;
            width:40px;
            background-color: #f2f2f2;
            position: relative;
            bottom: 68px;
            left:5px;
            transform: rotate(20deg);
        }
        .legr{
            height:100px;
            width:40px;
            background-color: #f2f2f2;
            position: relative;
            bottom: 168px;
            left:96px;
            transform: rotate(-20deg);
        }
        .bootl1{
            background-color: white;
            width: 43px;
            height:35px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
            position: relative;
            top:65px;
            right:1.5px;
        }
        .bootr1{
            background-color: white;
            width: 43px;
            height:35px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
            position: relative;
            top:65px;
            right:1.5px;
        }
        .bootl2{
            background-color: tomato;
            width:45px;
            height: 5px;
            border-radius:21px;
            position: relative;
            top:30px;
            right: 1.5px;
        }
        .bootr2{
            background-color: tomato;
            width:45px;
            height: 5px;
            border-radius:21px;
            position: relative;
            top:30px;
            right: 1.5px;
        }
        .pipe{
            background-color:  transparent;
            height:80px;
            width:80px;
            border:10px solid #4775ff;
            border-radius:40px 0px 0px 70px;
            border-right: none;
            transform: rotate(180deg);
            position: relative;
            bottom: 330px;
            left:130px;
        }
        .pipe2{
            background-color:  transparent;
            height:90px;
            width:42px;
            border:10px solid #4775ff;
            border-radius:40px 0px 0px 0px;
            border-right: none;
            transform: rotate(90deg);
            position: relative;
            border-bottom: none;
            left:67px;
            bottom:34px;

        }
        .pipe3{
            height:10px;
            width: 10px;
            background-color: #4775ff;
            position: relative;
            border-radius: 65%;
            bottom:10px;
            left:37px;
        }
        .s1,.s2,.s3,.s4,.s5,.s6{
            background-color: white;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            position: relative;
        }
        .s1{
            bottom:150px;
            left:200px;
        }
        .s2{
            top:130px;
            left:254px;
        }
        .s3{
            bottom:98px;
            left:65px;
        }
        .s4{
            top: 216px;
            left:249px;
        }
        .s5{
            top: 139px;
            left:100px;
        }
        .s6{
            top:60px;
            left:370px;
        }
        a{
            color: white;
            font-size: 25px;
            font-family: "Rubik",sans-serif;
            position:absolute;
            right:20px ;
            top:20px;
            padding:8px 12px 8px 12px;
            border:2px solid white;
            text-decoration:none;
        }
    </style>
</head>
<body>

<div id="login">

    <div class="container">
{{--        <h3 class="text-center text-white pt-5">Login form</h3>--}}
        {{--animation--}}
        <div class="animasion">
            <div class="backg">
                <div class="planet">
                    <div class="r1"></div>
                    <div class="r2"></div>
                    <div class="r3"></div>
                    <div class="r4"></div>
                    <div class="r5"></div>
                    <div class="r6"></div>
                    <div class="r7"></div>
                    <div class="r8"></div>
                    <div class="shad"></div>
                </div>
                <div class="stars">
                    <div class="s1"></div>
                    <div class="s2"></div>
                    <div class="s3"></div>
                    <div class="s4"></div>
                    <div class="s5"></div>
                    <div class="s6"></div>
                </div>
                <div class="an">
                    <div class="tank"></div>
                    <div class="astro">

                        <div class="helmet">
                            <div class="glass">
                                <div class="shine"></div>
                            </div>
                        </div>
                        <div class="dress">
                            <div class="c">
                                <div class="btn1"></div>
                                <div class="btn2"></div>
                                <div class="btn3"></div>
                                <div class="btn4"></div>
                            </div>
                        </div>
                        <div class="handl">
                            <div class="handl1">
                                <div class="glovel">
                                    <div class="thumbl"></div>
                                    <div class="b2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="handr">
                            <div class="handr1">
                                <div class="glover">
                                    <div class="thumbr"></div>
                                    <div class="b1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="legl">
                            <div class="bootl1">
                                <div class="bootl2"></div>
                            </div>
                        </div>
                        <div class="legr">
                            <div class="bootr1">
                                <div class="bootr2"></div>
                            </div>
                        </div>
                        <div class="pipe">
                            <div class="pipe2">
                                <div class="pipe3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--end--}}
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        @csrf
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="email" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span>
                                    <input id="remember-me" name="remember_me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                        {{--                        <div id="register-link" class="text-right">--}}
                        {{--                            <a href="#" class="text-info">Register here</a>--}}
                        {{--                        </div>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>







