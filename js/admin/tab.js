$(function(){
  var href = window.location.search.split('?')[1];
  $("#main-nav li a").each(function(){
    //alert('here');
    if($(this).attr('href').split('?')[1]==href)
    {
        if($(this).attr('class')!=null)
        {
            $(this).attr("class",'nav-top-item current');
        }else{
             $(this).attr("class","current");
        }
      
        //alert(this);
    }
  });  
    
    
    
})