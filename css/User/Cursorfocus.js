
//鼠标放上去，文本框效果
$(function() {
    $(".input,.login_input,.textarea").focus(function() {
        $(this).addClass("focus");
    }).blur(function() {
        $(this).removeClass("focus");
    });
});

        $(document).ready(function () {
            $("#aspnetForm").validate();

            $(":input").live('focus', function () {
                $("label[name='error']").css("color", "red");
            }).live('blur', function () {
                $("label[name='error']").css("color", "red");
            });
        });
   