<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php $sname = $_GET['name'];

echo $sname;?></title>
</head>
<?php 

$con = mysqli_connect("localhost","root","bhuminaksh","nakshatra");
if($con)
{
  $query = "SELECT addr,poc1,p1,poc2,p2 FROM school WHERE name = '$sname' ";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result,MYSQLI_NUM);

}
?>
<style type="text/css">

#top
{
	height:100px;
	
	
}
#logo
{
	position:relative;
	left:580px;
}


.topline
{
	height:2px;
	background:#ecebbd;
}
#all
{

}
th
{
	color:#E18E2E;
	font-size:16px;
	font-family:Tahoma, Geneva, sans-serif;
	font-weight:lighter;
	margin-left:10px;
	
}
td
{
	padding-left:10px;
	font-size:16px;
	font-family:Tahoma, Geneva, sans-serif;
	color:#666;
}
table
{
	margin-top:10px;
	text-align:left;
	margin-left:10px;
	
	
}
table#poc td,table#hsv td
{
	padding-left:0px;
}
table#hsv 
{
	margin-left:40px;
}
table.sd
{
	display:inline-table;
}
.details
{
	position:relative;
	top:20px;
	left:10px;
	margin-right:10px;
	
}
.tags
{

	color:#990000;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
}

#edit
{
	color:#91a3b0;
	position:relative;
	left:30px;
	border:hidden;
	font-size:15px;
	background:#FFF;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	
}
#edit:hover
{
	text-decoration:underline;
}
#seperator
{
	margin-top:30px;
	height:1px;
	background-color:#666;
	margin-bottom:10px;
	
}
#headingstyle
{
	position:absolute;
	top:5px;
	left:540px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:30px;
	font-weight:bold;
	color:#E18E2E;
}
#popup { 
    display:none; 
    position:fixed;  
    height:400px;  
    width:320px;  
    background:#fff;  
    left: 500px;
    top: 120px;
    z-index:10;
    margin-left: 15px;      
    padding:15px;  
    font-size:15px;
	overflow:auto;
	padding-left:10px;
	
    
}
#popupclose
{
	position:absolute;
	right:5px;
	top:2px;
	font-size:22px;
	background-color:#FFF;
	color:#990000;
	border:hidden;
}
#popupclose:hover
{
	font-weight:bolder;
	
}
</style>


<body id="all">
<script src="jquery-2.0.2.min.js"></script>
<script>
			$(document).ready(
			function()
			{
					$("#edit").click(
					function()
					{
							$('#popup').fadeIn(500);
							$("#all").css("background-color","#dcdcdc");
						
					}
					);
					$("#popupclose").click(
					function()
					{
							$("#popup").hide();
							$("#all").css("background-color","#FFF");
					}
					);
			
			
			}
			);



</script>
	
	<div id="top">
    	<p id="headingstyle">Bhumi - Nakshatra</p>
   	</div>
	
   <div id="popup">
   <button id="popupclose">&times;</button>

   </div>
    <div id="schooldetails" class="details">
    		
    		<table id="skl">
            <div class="tags">School Details<button id="edit">Edit</button></div>
            
    		<tr>
    			<th>School Name</th>
    			<td><?php echo $sname;?></td>
    		</tr>
          
            <tr>
                <th>Location</th>
                <td><?php echo $row[0]?></td>
            </tr>
            
        </table> 
       
        <table id="poc" class="sd" >
        		<tr>
                <th>Point of Contact</th>
                </tr>
                <tr>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
            	</tr>
             	<tr>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[4]?></td>
           		 </tr>
        </table>
       
        <table id= "hsv"class="sd">
        		<tr>
                <th>Home specific Volunteers</th>
                </tr>
                <tr>
                <td>-</td>
                <td>-</td>
            	</tr>
             	<tr>
                <td>-</td>
                <td>-</td>
           		 </tr>
        </table>
        
       
        
   	    </div>
		<div id="seperator">
    	
        </div> 

		
</body>

</html>
