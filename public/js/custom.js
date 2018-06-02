$("#btn-login").click(function(e) {
	var username = $("#username").val();
	var password = $("#password").val();
	if(username === "") {
		$("#username-error").text("Vui lòng nhập tên đăng nhập");
		e.preventDefault();
	} else {
		$("#username-error").text("");
	}
	if(password === "") {
		$("#password-error").text("Vui lòng nhập mật khẩu");
		e.preventDefault();
	} else {
		$("#password-error").text("");
	}
});