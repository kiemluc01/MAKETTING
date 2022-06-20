<div class="login">
    <form action="" method="post" class="login" onsubmit="return false">
        <center><h1>ĐĂNG NHẬP</h1></center>            
        <div class="content" id="login_content">
            
            <div class="user">
                <h5>Tài khoản </h5>
                <input type="text" name="user" id="user" placeholder="Nhập email hoặc tên đăng nhập">
            </div>
            <div class="password">
            <h5>Mật khẩu</h5> 
                <input type="password" name="password" id="password" placeholder="Nhập mật khẩu">
                <img src="Public/images/show.png" alt="" id="hide_show_pass">
            </div>      
            <div class="submit-login" style="margin-bottom: 5px;">
                <center><input type="submit" value="Đăng nhập" id="login"></center>
                <center>
                    <a href="">Quên mật khẩu?</a><br>
                    <span>bạn chưa có tài khoản? <a href=".?option=register">đăng kí</a></span>
                </center>
                
            </div>
            
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
        $('#login').click(function(){
            var user = $('#user').val()
            var password = $('#password').val()
            $.ajax({
                    url: "Models/Login.php",
                    type: "POST",
                    data: {
                        user: user,
                        pass: password
                    },
                    success: function(result) {
                        if(result == "error"){
                            var warning = '<center><span id="warning" style="color: red;">Sai tài khoản hoặc mật khẩu</span></center>'
                            $('#login_content').append(warning)
                        }else if(result == "locked"){
                            var warning = '<center><span id="warning" style="color: red;">Tài khoản đã bị khóa</span></center>'
                            $('#login_content').append(warning)
                        }else{
                            alert("Đăng nhập thành công!")
                            location.href =".?option=staff"
                        }
                    }
                })
        })       
    })
</script>
<style>
    #warning{
        margin: 0!important;
        width: 100%;
        padding:10px;
        background-color: rgb(255, 202, 202);
    }
    * {
    padding: 0%;
    margin: 0%;
}

form {
    width: 25%;
    height: 500px;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #697A8D;
    border-radius: 10px/10px;
    padding-left: 1%;
    font-family: Arial, Helvetica, sans-serif;
    justify-content: center;
    margin-top: 100px;
}

h1 {
    margin-top: 70px;
}

.content {
    margin-top: 70px;
}

div {
    margin-bottom: 30px;
    position: relative;
}

img {
    width: 25px;
    height: 15px;
    position: absolute;
    margin-top: 8px;
    margin-left: -32px;
}

h5,
p {
    display: inline-block;
    margin-bottom: 10px;
}

input {
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    height: 30px;
    border-radius: 8px/8px;
    border: 1px solid #697A8D;
}

input#login {
    background-color: #696CFF;
    height: 35px;
    color: #FFF;
    border: none;
    border-radius: 10px/10px;
}

.submit-login p {
    margin-top: 40px;
    margin-left: 40px;
}

.forget {
    color: #696CFF;
    margin-left: 190px;
}

.submit-login p>a {
    margin-left: 50px;
    color: #696CFF;
}
    input{
        text-indent: 10px;
    }
    #login{
        text-indent: 0px!important;
    }
</style>