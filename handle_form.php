<html>
<head>
<title>Form Feedback</title>
</head>
<body>
<?php #Script handle form

if (strlen($_POST["comments"]) >0){
    $_POST["comments"] = $_POST["comments"];
}
else{
    $_POST["comments"]=null;

    echo '<p><b> You Forgot to Enter Your Name!</b></p>';
}
if(!(strlen($_POST["email"]) >0)){
$_POST["email"]=null;
echo '<p><b> You Forgot to Enter Your Emails! </b></p>';
}
?>
</body>
</html>