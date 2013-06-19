/**
 * @author Administrator
 */
function initValidator(base){
	
	$("#registerForm").validate({
		onkeyup:false,
		//设置验证规则   
		rules: {
			"User[username]": {
				required: true,
				userNameCheck: true,
                remote:{
                    url:"/zhongxing/index.php?r=user/check_username",
                    type:"get",
                    data:{
                        username:function(){
                            return $("#username").val();
                        }
                    }
                }
			},
			"User[password]": {
				required: true,
				rangelength: [6, 12]
			},
			"passWordAgain": {
				required: true,
				rangelength: [6, 12],
				equalTo: "#passWord"
			},
			"corpName": {
				required: true
			},
			"sms": {
				required: true,
				isMobile: true
			},
			"User[email]": {
				required: true,
				isEmail: true,
                remote:{
                    url:"/zhongxing/index.php?r=user/check_email",
                    type:"get",
                    data:{
                        username:function(){
                            return $("#email").val();
                        }
                    }
                }
			},
            "User[realname]":{
                required:true,
                rangelength:[2,6],
                isChinese:true,
            }
		},
		//设置错误信息  
		messages: {
			"User[username]": {
				required: "请输入用户名",
				userNameCheck: "请输入5-20位字母开头的字母或数字和下划线",
                remote:"用户名已经被注册"
			},
			"User[password]": {
				required: "请输入密码",
				rangelength: "密码长度为6-12位"
			},
			"passWordAgain": {
				required: "请再次输入密码",
				rangelength: "密码长度为6-12位",
				equalTo: "两次输入密码不相同"
			},
			"corpName": {
				required: "请输入公司名称"
			},
			"sms": {
				required: "请输入手机号码",
				isMobile: "请输入有效的手机号码"
			},
			"User[email]": {
				required: "请输入邮箱",
				isEmail: "请正确填写邮箱格式",
                remote:"邮箱已经注册,请更换邮箱"
			},
            "User[realname]":{
                required:"请输入姓名",
                rangelength:"姓名长度2-6位",
                isChinese:"请填写中文名称"
            }
            
		},
		errorElement:"font",
		errorPlacement: function(error, element){
			error.appendTo(element.parent().find(".tipinfo"));
		},success:"valid"
	});

}
