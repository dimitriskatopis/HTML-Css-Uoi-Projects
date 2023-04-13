<?php include "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body><br><br><br>
    <div class="container">
        <div class="text">
            <p><h4>εδω μπορειτε να αφησετε ονομα και email ωστε να επικοινωνεισετε με επισκεπτες τις σελιδας(ΥΠΟ ΚΑΤΑΣΚΕΥΗ:προβλεπεται αμεση υλοποιηση της σελιδας χωρις σφαλματα και με πληρης λειτουργικοτητα ωστε να αξιοποιηθει καταλληλα.-στο μελλον θα υπαρχει δυνατοτητα προσθηκης φωτογραφιων απο χρηστες.) </h4></p>
 
   <form action="page8.php" method="post">
    name<input type="text" name="n">
    email<input type="email" name="e">
    <input type="submit" name="">
</form>


<br>
<br><br>
<p><h4>διαγραφη στοιχειων της βασης </h4></p>
<form action="page8.php" method="post">
    id <input type="text" name="id">
    <input type="submit" name="">
</form>

<?php include ("connect.php");?>
<?php
$mysqli = connect_db();

   

$n = $_POST['n'];
$e = $_POST['e'];
$idd =$_POST['id'];
if ($stmt = $mysqli->prepare("INSERT emails(name,email)VALUES (?,?)")) {
    $stmt->bind_param("ss",$n ,$e);
    $stmt->execute();
    $stmt->close();

}else echo "error";

        
if ($stmt = $mysqli->prepare ("DELETE FROM emails WHERE id = ? ")) {

    $stmt->bind_param("i",$idd);
    $stmt->execute();
    $stmt->close();

}
else echo "ERROR";

if ($result = $mysqli->query ("SELECT * FROM emails")) {
    if ($result->num_rows >0){
        while ($row = $result->fetch_assoc()){
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " -Email: " . $row["email"]. "<br>";
            

        }
    }
}










?>
</div>
</div>
</body>


</html>
<?php include "bottom.php"; ?>
