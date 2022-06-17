<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

    <div class="register">
        <form action="" method="post" class="register">
            <center><h1>ĐĂNG KÍ</h1></center>
            <div class="name">
                <h5>Họ và tên <p class="Obligatory">*</p></h5>
                <input type="text" name="name" id="name" placeholder="Nguyễn Văn A">
            </div>
            <div class="company">
                <h5>Tên công ty <p class="Obligatory">*</p></h5>
                <input type="text" name="company" id="company" placeholder="Công ty ABC">
            </div>
            <div class="address">
                <h5>Địa chỉ</h5>
                <input type="text" name="address" id="address" placeholder="">
            </div>
            <div class="field">
                <h5>Lĩnh vực <p class="Obligatory">*</p></h5>
                <input type="text" name="field" id="field" placeholder="">
            </div>
            <div class="Email">
                <h5>Email <p class="Obligatory">*</p></h5>
                <input type="text" name="Email" id="Email" placeholder="aido@gmail.com">
            </div>
            <div class="user">
                <h5>Tên đăng nhập <p class="Obligatory">*</p></h5>
                <input type="text" name="user" id="user" placeholder="">
            </div>
            <div class="password">
                <h5>Mật khẩu <p class="Obligatory">*</p></h5>
                <input type="password" name="password" id="password" placeholder="">
                <img src="{{ asset('images/show.png') }}" alt="" id="hide_show_pass">
            </div>
            <div class="confirm-pass">
                <h5>Xác nhận mật khẩu <p class="Obligatory">*</p></h5>
                <input type="password" name="confirm-pass" id="confirm_pass" placeholder="">
                <img src="{{ asset('images/show.png') }}" alt="" id="hide_show_cfpass">
            </div>
            <div class="SDT">
                <h5>Số điện thoại <p class="Obligatory">*</p></h5>
                <input type="text" name="SDT" id="SDT" placeholder="">
            </div>
            <div class="check">
                <input type="checkbox" name="term" id="term" >
                <p>Tôi đồng ý với <a href="">các điều khoản </a>của Tachcare</p>
            </div>
            <div class="submit-register">
                <input type="submit" value="Đăng kí" id="register">
            </div>
        </form>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(document).ready(function(){
            $('#hide_show_pass').click(function(){
                if(document.getElementById('password').type == 'password'){
                    document.getElementById('password').type ='text'
                    document.getElementById('hide_show_pass').src = String(document.getElementById('hide_show_pass').src).replace('show','hide')
                }
                    
                else{
                    document.getElementById('password').type ='password'
                    document.getElementById('hide_show_pass').src=String(document.getElementById('hide_show_pass').src).replace('hide','show')
                }
                    
            })
            $('#hide_show_cfpass').click(function(){
                if(document.getElementById('confirm_pass').type == 'password'){
                    document.getElementById('confirm_pass').type ='text'
                    document.getElementById('hide_show_cfpass').src = String(document.getElementById('hide_show_cfpass').src).replace('show','hide')
                }
                    
                else{
                    document.getElementById('confirm_pass').type ='password'
                    document.getElementById('hide_show_cfpass').src=String(document.getElementById('hide_show_cfpass').src).replace('hide','show')
                }
                    
            })
        })
    </script>
</body>
</html>