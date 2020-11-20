<?php include('server.php'); 
if(empty($_SESSION['username']))
{
header('location:login.php');
}
?>
<html>
<head>
<title>Login</title>
<style>
*{
margin:0;
padding:0;
}
body
{
font-size:120%;
background:#f8f8ff;
}
.header
{
width:30%;
margin:50px auto 0px;
color:white;
background:#5f9ea0;
text-align:center;
border:1px solid #b0c4de;
border-bottom:none;
border-radius:10px 10px 0px 0px;
padding:20px;
}
form,.content
{
width:30%;
margin:0px auto;
padding:20px;
border:1px solid #b0c4de;
background:white;
border-radius:0px 0px 10px 10px;
}
.input-group
{
margin:10px 0px 10px 0;
}
.input-group label
{
display:block;
text-align:left;
margin:3px;
}
.input-group input
{
height:30px;
width:93%;
padding:5px 10px;
font-size:16px;
border-radius:5px;
border:1px solid gray;
}
.btn
{
padding:10px;
font-size:15px;
color:white;
background:#5f9ea0;
border:none;
border-radius:5px;
}
.error
{
width:92%;
margin:0px auto;
padding:10px;
border:1px solid #a94442;
color:#a94442;
background:#f2dede;
border-radius:5px;
text-align:left;
}
.success
{
color:#3c763d;
background:#dff0d8;
border:1px solid #3c763d;
margin-bottom:20px;
}
</style>
</head>
<body>
<div class="header">
<h2>Home Page</h2>
</div>
<div class="content">
<?php if(isset($_SESSION['success'])): ?>
<div class="error success">
<h3>
<?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
</h3>
</div>
<?php endif ?>
<?php if(isset($_SESSION["username"])): ?>
<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
<p><a href="index.php?logout='1'" style="color:red;">Logout</a></p>
<?php endif ?>
</div>
</body>
</html>