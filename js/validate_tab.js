$(function(){
  var href = window.location.search.split('?')[1];
  $("#validate_tab li a").each(function(){
    if($(this).attr('href').split('?')[1]==href)
    {
        $(this).parent().attr("class","current");
        //alert(this);
    }
  });  
    
    
    
})