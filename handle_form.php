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
if(isset($_POST["gender"])){
    if($_POST["gender"] == 'M'){
        $message = '<b><p>Good Day, Sir </b></p>';
    }
    if($_POST["gender"] == 'F'){
        $message = '<b><p>Good Day, Madam </b></p>';
    }
}else{
    $_POST["gender"] = null;
    echo '<p><b> You Forgot to Choose Your Gender! </b></p>';
}
?>
</body>
</html>