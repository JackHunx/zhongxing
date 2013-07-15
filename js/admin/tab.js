$(function(){
  var href = window.location.search.split('?')[1];
  $("#main-nav li a").each(function(){
    //alert('here');
    if($(this).attr('class')!=null){
        //alert(href.indexOf($(this).attr('href').split('?')[1]));
        if(window.location.search.indexOf($(this).attr('href').split('?')[1])>0&&$(this).attr('href').split('?')[1]!='r=admin'){
            $(this).attr("class",'nav-top-item current');
            }else{
                if(href=='r=admin'&&$(this).attr('href').split('?')[1]=='r=admin')  
                    $(this).attr("class",'nav-top-item current');
            }
    }else{
    if($(this).attr('href').split('?')[1]==href)
    {
        $(this).attr("class","current");
       //alert(this);
    }
    }
  });  
    
    
    
})