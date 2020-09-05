<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
    <title>Menu Items of restaurant</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style type="text/css">
    
.back-img {
    background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(11.jpg);
    width: 100%;
    height: 750px;
    background-size: cover;
    background-position: center;
    align-items: center;
}
    .header h1{
        width: 100%;
        background-color: rgba(119, 136, 153, 0.288);
        color: white;
        font-family: 'Pacifico', cursive;
        text-align: center;
        padding: 15px;
    }
    
    </style>
</head>
<body>
<div class="back-img">
	<div class="container">
	<div class="header">
		<h1>welcome to my GAURAV's restaurant</h1>
	</div>
	<select id="drop" class="form-control" onclick="getNameList()"> 
		<option>Select an item</option>
	</select>
	<br>
	<br>
	<div class="profile"></div>
</div>

    <script src="jquery-3.5.1.min.js"></script>
	<script defer="true" src="script.js"></script>
</body>
</html>
