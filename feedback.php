<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include_once('addToDb.php'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Відгуки</title>

</head>

<body>


    <?php 
include("navbar.php");
createNavbar(">Відгуки");
?>
    <?php 
    $db = new SQLite3("chemists.db");
    $db->enableExceptions(true);

require_once 'classes/feedbacks.php';
echo'
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-4">
                    <div class="messageForm">


  <form class="col-md-5" method="POST">
                            <label class="label-form">Ім\'я</label>
                            <input type="text" name="name" id="name" class="input">
                            <br />
                            <label class="label-form">E-mail:</label>
                            <input type="email" name="email" id="email" class="input">
                            <br />
                            <label class="label-form">Відгук:</label>
                            <br />
                            <textarea rows="5" cols="20" name="feedback" id="feedback" class="input"></textarea>
                            <br />
                            <input type="submit" name="submit" id="submit" class="input" />
                        </form>
                    </div>
                </div>
                <div class="col-8"> ';
                
    
    function getAllFeedbacks($db, $table){        
        $select = "SELECT * FROM $table";
        $result = $db->query($select);
        $array = array();

        while($data = $result->fetchArray(SQLITE3_ASSOC))
        {
            $array[] = $data;
        }
        for($i=0; $i<count($array);$i++){
           $position = stripos($array[$i]['uEmail'], "admin");

          if($position===0){
        $admin = new feedbackAdmin($array[$i]['uName'],
        $array[$i]['uEmail'],$array[$i]['uMessage']);
        $admin->getInfo();           
          } else{
        $user = new feedback();
        $user->name = $array[$i]['uName'];
        $user->email = $array[$i]['uEmail'];
        $user->feedback = $array[$i]['uMessage'];
        $user->getInfo();
          }          
           
        }          
    }

    

    getAllFeedbacks($db, "feedback");
    
echo'
                    </div>
                </div>
            </div>
        </div>
';

?>


    < <?php 
 include("footer.php");
 createFooter();
 ?> <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
</body>

</html>