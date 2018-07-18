function zhuce(){
    var username = document.getElementById("zhuid").value;
    var password = document.getElementById("zhupassword").value;
    var chong = document.getElementById('chongpassword').value;
    var phone = document.getElementById('zhuphone').value;
    if(username==""){
        $.jGrowl("用户名不能为空！", { header: '提醒' });
        // alert('asd');
        event.preventDefault();
    }else if(password==""){
        $.jGrowl("密码不能为空！", { header: '提醒' });
        event.preventDefault();
    }else if(password !== chong){
        $.jGrowl("需两次输入同样密码！", { header: '提醒' });
        event.preventDefault();
    }else if(phone == ""){
        $.jGrowl("手机不能为空！", { header: '提醒' });
        event.preventDefault();
    }
}