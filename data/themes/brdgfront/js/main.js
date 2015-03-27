	$("#user-register-form").validate({
		rules: {
			mail: {
				required: true,
				email: true
			},
			'pass[pass1]': "required",
			'pass[pass2]': "required"
		},
		messages: {
			mail: {required: "Please enter your email",
				email: true},
			'pass[pass1]': "Please enter your password",
			'pass[pass2]': "Please enter your confirm password"
		}
	});


	$("#user-login").validate({
		rules: {
			name: {
				required: true
			},
			pass: "required"
		},
		messages: {
			name: {required: "Please enter your email",
				email: true},
			pass: "Please enter your password"
		}
	});

	$("select").uniform();

$('#tabs a').eq(0).html('Create new account <br />创建账号');
$('#tabs a').eq(1).html('Log in <br />登录');

$("#user-login .form-item-name label").html('E-mail / 邮箱 *');
$("#user-login .form-item-pass label").html('Password / 密码 *');
$("#user-login .form-submit").val('Log in / 登录');

$(".page-user-edit .form-item-current-pass label").html('Current Password / 当前密码 *');
$(".page-user-edit .form-item-name label").html('E-mail / 邮箱 *');
$(".page-user-edit .form-item-pass-pass1 label").html('New Password / 新密码 *');
$(".page-user-edit .form-item-pass-pass2 label").html('Confirm Password / 确认密码 *');
$(".page-user-edit .form-submit").val('Log in / 登录');

$("#user-register-form .form-item-mail label").html('E-mail / 邮箱 *');
$("#user-register-form .form-item-pass-pass1 label").html('Password / 密码 *');
$("#user-register-form .form-item-pass-pass2 label").html('Confirm Password / 确认密码 *');
$("#user-register-form .form-submit").val('Create new account / 创建账号');
