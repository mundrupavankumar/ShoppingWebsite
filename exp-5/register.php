<?php include('server.php'); ?>
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
form
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
</style>
</head>
<body>
<div class="header">
<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php include('errors.php'); ?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username" value="<?php echo $username; ?>">
</div>
<div class="input-group">
<label>Email</label>
<input type="text" name="email" value="<?php echo $email; ?>">
</div>
<div class="input-group">
<label>Password</label>
<input type="text" name="password_1">
</div>
<div class="input-group">
<label>Confirm Password</label>
<input type="text" name="password_2">
</div>
<div class="input-group">
<button type="submit" name="register" class="btn">Register</button>
</div>
<p>Already a member?<a href="login.php">Sign in</a></p>
</form>
</body>
</html>