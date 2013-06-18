<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>School registration</title>
</head>

<style type="text/css">


#top
{
  height:100px;
	
}
#logout
{


}
#topofpage
{
	font-size:40px;
	font-weight:bolder;
	padding:5px;
	background-color:#E18E2E;
	color:#FFF;
	width:60px;
	border:hidden;
	position:fixed;
	bottom:5px;
	left:1250px;

}

.buttons
{
	font-family:Tahoma, Geneva, sans-serif;
	background-color:#E18E2E;
	font-size:12pt;
	color:#ecebbd;
	font-weight:bold;
	height:20px;
	outline:none;
	border:0px;
	

}
.buttons:focus,.buttons:hover,
{
	
	border:solid 1px;
	border-color:#100c08;
}
.buttons:active,.buttons:visited
{
	background:#666;
}
#dynamic
{
	width:200%;
	position:relative;
	top:5px;
	
}
#loading
{
	position:fixed;
	left:565px;
	font-family:Tahoma, Geneva, sans-serif;
	color:#990000;

	font-size:20px;

}

input
{
	outline:none;
	margin-left:5px;
	display:inline;
}
input[type = text]
{
	height:30px;
	margin-top:5px;
	margin-bottom:2px;
	font-size:16px;
	padding-left:4px;
	padding-right:4px;
	 position:relative;
   left:-6px;
   width:220px;
	
	
	
}
.Clones
{
	height:35px;
 	background:#ecebbd;
	margin-bottom:3px;
}
#prefix
{
	display:inline;
	position:relative;
	left:2px;
}

li
{
	display:inline;
}
#menu
{
	position:relative;
	left:480px;
}
.menuitems
{
	background:#91a3b0;
	color:#FFF;
	font-size:18px;
	margin-right:2px;
	font-family:Tahoma, Geneva, sans-serif;
	border:hidden;
	

}
.activated
{
	background:#E18E2E;
		color:#FFF;
	font-size:18px;
	margin-right:2px;
	font-family:Tahoma, Geneva, sans-serif;
	border:hidden;
}
#headingstyle
{
	position:absolute;
	top:5px;
	left:580px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:30px;
	font-weight:bold;
	color:#E18E2E;
}

#all
{
	overflow-x:hidden;
	margin-bottom:80px;
}
#addschool
{
	position:relative;
	left:540px;
	top:40px
}
#result
{
	position:relative;
	left:545px;
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	color:#990000;
	display:inline;
	top:10px;
}
.comment
{
	position:relative;
	left:10px;
	font-size:16px;
	font-family:Arial, Helvetica, sans-serif;
	color:#990000;
	display:inline;
}
.labels
{
	font-size:16px;
	color:#100c08;
	font-family:Tahoma, Geneva, sans-serif;
		
}
textarea
{
	outline:none;
	-moz-outline:none;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:16px;
	color:#100c08;
	resize:none;
	padding-left:3px;
	padding-right:3px;
	-moz-border:2px #666;
	width:220px;
	height:70px;
	
}
textarea:hover,textarea:focus,textarea:active
{
	-moz-border:2px #666;
	-moz-outline:none;
}
textbox
{
  
}

.clearFieldBlurred 
{ 
	padding-left:5px;
	color: #E18E2E; 
	font-style:normal;
	font-size:16px;
	font-family:Tahoma, Geneva, sans-serif; 
}
.clearActive
{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:16px;
	color:#100c08;
}
#submitbutton
{
	position:relative;
	left:80px;
	margin-top:10px;
	height:30px;
	font-size:18px;
	color:#FFF;
	border:hidden;
	background-color:#E18E2E;
	margin-bottom:50px;
	
}
#submitbutton:hover,#submitbutton:active,#submitbutton:focus
{
	border:1px solid;
	border-color:#100c08;
}
.SchoolList
{
	display:table;
	position:relative;
	top:30px;
	left:520px;
	font:Tahoma, Geneva, sans-serif;
	font-size:22px;
	text-decoration:none;
	color:#666;
	margin:1px;
	
}
.SchoolList:hover
{
	color:#E18E2E;
}
#success
{
	display:inline;
	position:relative;
	left:300px;
	font:Tahoma, Geneva, sans-serif;
	color:#990000;
	font-size:18px;
}
#list
{
	position:absolute;
	top:10px;
	width:280px;
}
p.listlink
{	
	display:block;
	margin-bottom:5px;
	width:280px;
	word-wrap:break-word;
	word-break:break-all;
	
}



</style>




<body id="all" >
<script type="text/javascript" src="jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="jquery.clearfield.packed.js"></script>
<script type="text/javascript">
var flag = true;
$(document).ready(function(){
								
								$("#newschool").hide();
								$("#loading").hide();
								$("#list").hide();
								$('.clearField').clearField();
			
								$("#result").hide();
								$(".comment").hide();
								$("#topofpage").hide();
	
	

									
									
			$("#add").click(
			function(){
						
						$("#list").hide();
						$("#result").hide();
						$("#add").removeClass().addClass("activated");
						$("#schools").removeClass().addClass("menuitems");
						$("#loading").hide();
						$("#newschool").fadeIn(500);
				
			}
			);
			$("#schools").click(
			function()
			{
						$("#add").removeClass().addClass("menuitems");
						$("#schools").removeClass().addClass("activated");
						$("#newschool").hide();
						$("#loading").show();
						$(".SchoolList").remove();
						$.ajax(
						{
							cache:false,
							dataType: 'html',
							url: 'SchoolList.php',
							success:function(data)
							{
								
								$("#loading").hide();
								$("#list").append(data);
								$("#list").fadeIn(300);
							}
							
						
						}
						
						
						
						
						);
									
			
			}
			
			
			
			);
			
			$("#submitbutton").click(
			function(){
						var flag = 0;
						$(".comment").hide();
						$("#result").text("Please fill all the details");
						$("#result").hide();
						
			var n = $.trim($("#skl_name").val());
			if(n == "" || n == "School Name")
			{
				$("#result").fadeIn(500);
				flag = 1;
			}
			var a = $.trim($("#address").val());
			if(a == "" || a == "Address")
			{
				$("#result").fadeIn(500);
				flag = 1;
			}
			var pc1 = $.trim($("#poc1").val());
			if(pc1 == "" || pc1 == "Person of Contact 1")
			{
				$("#result").fadeIn(500);
				flag = 1;	
			}
			var p1 = $.trim($("#phone1").val());
			if(p1 == "" || p1 == "Phone")
			{
				$("#result").fadeIn(500);
				flag = 1;
			}
			else if(!validateContact(p1) && p1 != "Phone")
			{
					$("p#p1").fadeIn(500);
					flag = 1;
			}
			var pc2 = $.trim($("#poc2").val());
			if(pc2 == "" || pc2 == "Person of Contact 2")
			{
				$("#result").fadeIn(500);
				flag = 1;
			}
			var p2 = $.trim($("#phone2").val());
			if(p2 == "" && p2 == "Phone")
			{
				$("#result").fadeIn(500);
				flag = 1;
			}
			else if(!validateContact(p2) && p2 != "Phone")
			{
					$("p#p2").fadeIn(500);
					flag = 1;
			}
			
			if(flag)
			{
				return false;
			}
			else
			{
				
				var serialdata = "sklname="+n+"&address="+a+"&poc1="+pc1+"&phone1="+p1+"&poc2="+pc2+"&phone2="+p2;

				$.ajax({
						cache:false,
						data:serialdata,
						dataType:'text',
						type: 'POST',
						url: 'SchoolRegister.php',
						
						success:function(result)
						{
						
							$("#result").text("✔ Added successfully !").show().fadeOut(1800);	
							$("#skl_name").removeClass().addClass("clearFieldBlurred").val("School Name                (include space between words)");
							$("#address").removeClass().addClass("clearFieldBlurred").val("Address");
							$("#poc1").removeClass().addClass("clearFieldBlurred").val("Point of Contact 1");
							$("#phone1").removeClass().addClass("clearFieldBlurred").val("Phone");
							$("#poc2").removeClass().addClass("clearFieldBlurred").val("Point of Contact 2");
							$("#phone2").removeClass().addClass("clearFieldBlurred").val("Phone");
							
							
						},
						error:function(xhr,status,msg)
						{
						},
					
					
					
					
					});
			}
			
			
			
			
			
			
			
			
			
			
					
							
				
				
			}
			
			
			);
			$(window).scroll(
			function()
			{
		
				var s = $(window).scrollTop();
				if(s > 200)
				{
					$("#topofpage").fadeIn(800);
				}
				else
				{
					$("#topofpage").fadeOut(800);
				}
				
			
			}
			);
			$("#topofpage").click(
			function()
			{
				$("body").animate({scrollTop:0},'slow');
			
			}
			);
			
			
			
});
function validateContact(cno)
{
	var filter = /^[0-9-+]+$/;
	if(filter.test(cno))
	{
	return true
	}
	else
	{
	return false
	}

}

</script>
	<div id="top">
		<img src="bhumilogo.png" />
        <p id="headingstyle">Nakshatra</p>
	</div>
	<div id="menu">
		<ul>
        	<li><button id="add" class="menuitems">Add new school</button></li>
            <li><button id="schools" class="menuitems" >List of schools</button></li>
            
		</ul>
	</div>

	<div id="dynamic">
		<div id="newschool">
				<p id="result">Please fill all the details</p>
                
                <form id="addschool" method="POST" onsubmit="return false;">
                	
                    <textarea rows="3" cols="30" class="clearField" id="skl_name" autocomplete="off" spellcheck="false">School Name                (include space between words)</textarea> <br /><br />
					
                    <textarea rows="3" cols="30" class="clearField" id="address" autocomplete="off" spellcheck="false">Address</textarea><br /><br />
               			
                    <input type="text" size="28" class="clearField" id="poc1" value="Point of Contact 1" autocomplete="off" spellcheck="false"/><br /><br />
                    <input type="text" size="28" class="clearField" id="phone1"value="Phone" autocomplete="off" spellcheck="false"/><p id="p1" class="comment">Enter a valid number</p><br /><br />
                    <input type="text" size="28" class="clearField" id="poc2" value="Point of Contact 2" autocomplete="off" spellcheck="false"/><br /><br />
                    <input type="text" size="28" class="clearField" id="phone2" value="Phone" autocomplete="off" spellcheck="false"/><p id="p2" class="comment">Enter a valid number</p><br />
                    <input type="submit" value="Add" id="submitbutton" /> 
               
                </form>
                
		</div>
		<div id="list">
		</div>
		<p id="loading">
			Loading... Please wait!
		</p>
    	<button id="topofpage">&uarr;</button>

    </div>



</body>
</html>
