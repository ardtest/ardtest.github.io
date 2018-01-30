<html>
<head>
<title>HOME</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

 <link rel="stylesheet" type="text/css" href="style.css">
<script>  
        function show()  
        {  
            $.ajax({  
                url: "transfer/voltage.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html); 
				}
             }); 
           $.ajax({  
                url: "transfer/current.php",  
                cache: false,  
                success: function(html){  
                    $("#content-1").html(html); 
                }
             });
           $.ajax({  
                url: "transfer/power.php",  
                cache: false,  
                success: function(html){  
                    $("#content-2").html(html); 
                }
             }); 
           $.ajax({  
                url: "transfer/energy.php",  
                cache: false,  
                success: function(html){  
                    $("#content-3").html(html); 
                }
             });			 
             
             $.ajax({  
                url: "transfer/relaystate.php",  
                cache: false,  
                success: function(html){  
                    $("#content-4").html(html); 
                }
             }); 

             
        }
        
        $(document).ready(function(){  
            show();  
            setInterval('show()',500);  
        }); 
        
 
      function AjaxFormRequest(result_id,led,url) {
      jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+led).serialize(),
         });
}


</script>
    
    
    
</head>
    <body>
         
          <div class="r">
          <div class="rl">
          <p class="r1">Переключатель Реле</p>
          <div class="r2" style="font-size:35px" >
          <form  id="led" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led', 'transfer/led.php')" >
          </form>
          </div>
          </div>
          
          <div class="rr">
          <p class="r1">Состояние</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-4"></div> 
          </div>
          </div>
		    </div>
		  
		     <br>
		  
		  <div class="r">
          <div class="rl">
          <p class="r1">Напряжение</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content"></div> 
          </div>
		  </div>
          
		  
          <div class="rr">
          <p class="r1">Ток</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-1"></div> 
          </div>
		  </div>
		  
		  </div>
		  
		     <br>	
		  
		  <div class="r">
		  <div class="rl">
          <p class="r1">Мощность</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-2"></div> 
          </div>
		  </div>
		  
		  <div class="rr">
          <p class="r1">Энергия</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-3"></div> 
          </div>
		  </div>
          
		  </div>
		
      
         

        
        
   </body>
</html> 