<?php 

require_once 'classes/feedbacks.php';


function addToBase(){

$correct = true;

$db = new SQLite3('chemists.db');
$db->enableExceptions(true);

$table="feedback";
$fb = new feedback();

if(!empty($_POST['name'])){
    $fb->name = $_POST['name'];
} else{
    $correct=false;
}

if(!empty($_POST['email'])){
    $fb->email =$_POST['email'];
}else{
    $correct=false;
}

if(!empty($_POST['feedback'])){
    $fb->feedback = $_POST['feedback'];
}else{
    $correct=false;
}

try{
$sql = "CREATE TABLE feedback (
    id_feedback INTEGER PRIMARY KEY AUTOINCREMENT,
    uName TEXT NOT NULL, 
    uEmail TEXT NOT NULL, 
    uMessage TEXT NOT NULL);";
    $db->query($sql);  
}
catch(Exception $ex){
 $text = $ex->getMessage();
    echo "<script>console.log('$text')</script>";
}
finally
{ 
    if($correct){  
    $addFeedback = "INSERT INTO $table (uName, uEmail, uMessage) 
    VALUES ('$fb->name', '$fb->email', '$fb->feedback');";
    $db->query($addFeedback);
    }
}

}

addToBase();
?>