<!DOCTYPE html>
<head>
	<title>Farmer System</title>
</head>
<?php

$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $crops = $_POST['crops'];
    $UserName = $_POST['UserName'];
    if (!empty($crops)) {
        $result = calculate_bill($crops);
        $result_str = $UserName.','.'<h1>the best crops to calitivate in<h1> ' . $crops . ' is ' . $result;
    }
}
function calculate_bill($crops) {
    $north =  array('Tea', 'coffee', 'Cassava', 'sweet potatoes');
    $south = array('Wheat.', 'Maize', 'Bananas.', 'Sugarcane');
    $east = array('dry beans', 'rice', 'cassava flour', 'Maize');
    $west = array('Wheat.', 'Maize', 'Bananas.', 'Sugarcane');
    $kigali = array('sweet potato', 'Irish potato', 'Bananas.', 'banana');

    if($crops == "kigali") {
        $bestCrop = $north[0].','.$north[1].','.$north[2].','.$north[3];
    }
    elseif($crops == "south") {
      $bestCrop = $south[0].','.$south[1].','.$south[2].','.$south[3];
    }
    elseif($crops == "east") {
      $bestCrop = $east[0].','.$east[1].','.$east[2].','.$east[3];
    }
    elseif($crops == "west") {
      $bestCrop = $west[0].','.$west[1].','.$west[2].','.$west[3];
    }
    elseif($crops == "kigali") {
      $bestCrop = $kigali[0].','.$kigali[1].','.$kigali[2].','.$kigali[3];
    }
    else{
      $bestCrop = 'enter you location properly';
    }
    return($bestCrop);
} 
?>
 
<body>
<style>
<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body{
        font-family: 'Poppins', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: rgb(246, 255, 255);
    
    }
    
    
    .continer{
    
        background-color: rgb(253, 253, 253);
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 10px;
        width: 400px;
    
    }
    
    .continer h1{
    
        text-align: center;
        margin: 50px;
    }
    
    .form{
    
        padding: 30px 40px;
    }
    
    .form-control{
        margin-bottom: 10px;
        padding-bottom: 5px;
        position: relative;
    }
    
    .form-control label{
        display: block;
        margin-bottom: 5px;
    
    }
    
    .form-control input{
        width: 100%;
        padding: 5px 15px;
        font-size: 16px;
        border: 1px solid rgb(158, 158, 158);
    }
    
    
    .form-control i.fa-check{
    
        position: absolute;
        top: 35px;
        bottom: 0px;
        right: 0px;
        margin-right: 10px;
        color: rgb(60, 199, 94);
        visibility: hidden;
    
    }
    
    
    .form-control i.fa-close{
    
        position: absolute;
        top: 35px;
        bottom: 0px;
        right: 0px;
        margin-right: 10px;
        color: rgb(199, 60, 60);
        visibility: hidden;
    
    }
    
    .form-control input:focus{
        outline: none;
        border: 1px solid rgb(110, 110, 110)
    }
    
    .form-control small{
        color: rgb(199, 60, 60);
        visibility: hidden;
    }
    
    .form-control span{
        font-size: 14px;
        position: absolute;
        top: 35px;
        right: 0px;
        margin-right: 30px;
        visibility: hidden;
    
    
    }
    .form-control span.strong{
        color: rgb(60, 199, 94);
        visibility: hidden;
    
    }
    
    .form-control span.middle{
        color: rgb(248, 211, 0);
        visibility: hidden;
    
    }
    
    .form-control span.week{
        color: rgb(199, 60, 60);
        visibility: hidden;
    
    }
    
    .form button.btn{
        width: 100%;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        background-color: rgb(238, 155, 0);
        color: #fff;
     
        
    }
    
    .form-control .sucsess input{
        border: 1px solid rgb(60, 199, 94);
    }
    
    .form-control.error input{
        border: 1px solid rgb(199, 60, 60);
    }
     
    .form-control.error small{
        visibility: visible;
    }
    
    
    .welcome-outer {
      min-height: 7%;
      position: relative;
      background-color: #f44336;
      color: #fff;
        margin-left: 10px;  
        margin-right: 10px;
        
    }
    
    </style>
</style>
	<div id="page-wrap">
		<h1>Farmer System</h1>
    <div class="container">
				<h2>AgroCulture</h2>
				<br><br>
				
    <div class="continer">
        <form class="form" id="form"action="" method="post">
        
            <p style="font-weight: bold;"> Let us help you choose the crop to caltivate<p>
            <div class="form-control">
                <label for="username">Name</label>
                <input type="text" required name="UserName" class="username"  placeholder="Eg. Sandrine">
            </div>
            <div class="form-control">
                <label for="username">Location/Province</label>
                <input type="text" required  name="crops"class="username"  placeholder="North/South/Kigali">
            </div>
            <div class="form-control">
                <label for="username">Season</label>
                <input type="tel" required name="season" class="username"  placeholder="Eg. Winter/Spring">
            </div>
            <button class="btn" type="submit" name="unit-submit" id="unit-submit" value="Submit" >Check</button>
          </form>
    </div>
		<div>
		    <?php echo '<br />' . $result_str; ?>
		</div>	
	</div>
</body>
</html>