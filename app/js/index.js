function login(){
    let $login_form = document.querySelector(".login-form");
    let $user = $login_form['username'];
    let $pass =  $login_form['PassWord'];
    let $login = document.querySelector('.login');
    console.log($login)
    $login.onclick = function(){
        if($user.value=="小彭"){
            if($pass.value=="123456"){

            }else{
                $pass.focus();
                alert('密码不正确');
                return false;
            }
        }else{
            $user.focus();
            alert('用户名不正确');
            return false;
        }
    }
    $login.onkeydown = function(e){
        e = e || window.event;
        let keyCode = e.keyCode || e.which;
        if(keyCode==13){
           this.onclick();
        }
    }

}