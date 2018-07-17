function zhuce(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var chong = document.getElementById('repass').value;
    var phone = document.getElementById('tel').value;
    if(username==""){
	
        $.jGrowl("用户名不能为空！", { header: '提醒' });
        // alert('asd');
        event.preventDefault();
    }else if(password==""){
		
        $.jGrowl("密码不能为空！", { header: '提醒' });
        event.preventDefault();
    }else if(password !== repass){
        $.jGrowl("需两次输入同样密码！", { header: '提醒' });
        event.preventDefault();
    }else if(phone == ""){
        $.jGrowl("手机不能为空！", { header: '提醒' });
        event.preventDefault();
    }
}