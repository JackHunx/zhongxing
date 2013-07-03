function ajaxSendEmail()
{
    url =window.location.pathname+"?r=user/email";
    $.ajax({
        type:"POST",
        url:url,
        data:'',
        success:function(data){
            alert(data);
        }

})
}