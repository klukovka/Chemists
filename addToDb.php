<?php 
function addToBase($db, $table){

$fb = new feedback();
if(isset($_POST['name']))
    $fb->name = $_POST['name'];

if(isset($_POST['email']))
    $fb->email =$_POST['email'];

if(isset($_POST['feedback']))
    $fb->feedback = $_POST['feedback'];


try
{
    $sql = "CREATE TABLE feedback ('uName', 'uEmail', 'uMessage')";
    $db->query($sql);
    
}
catch (Exception $ex)
{
    $text = $ex->getMessage();
    echo "<script>console.log('$text')</script>";
}
finally
{
    $addFeedback = "INSERT INTO $table (uName, uEmail, uMessage) 
    VALUES ('$fb->name', '$fb->email', '$fb->feedback')";
    $db->query($addFeedback);
}
}
?>