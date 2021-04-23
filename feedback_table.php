 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
         integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Контакти</title>
 </head>

 <body>

     <div class="container">

         <?php

    require_once 'classes/feedbacks.php';

    $db = new SQLite3("chemists.db");
    $db->enableExceptions(true);

    function getRows($db, $table){

        $select = "SELECT * FROM $table";
        try{
            $result = $db->query($select);
            $array = array();

        while($data = $result->fetchArray(SQLITE3_ASSOC))
        {
            $array[] = $data;
        }

        $output="";
        for($i=0; $i<count($array);$i++){
            $id = $array[$i]['id_feedback'];
            $name = $array[$i]['uName'];
            $mail = $array[$i]['uEmail'];
            $mess = $array[$i]['uMessage'];

            $output.="<tr><td>$id</td><td>$name</td><td>$mail</td><td>$mess</td></tr>";
        }

        echo "
          <h4 class=\"text-center\">SELECT * FROM FEEDBACK</h4>
          <table class=\"table table-striped table-hover\">            
             $output
          </table>        
        ";

        return $array;
        }
        catch (Exception $ex){
            echo $ex->getMessage();
        }       
    }

    getRows($db, "feedback");
?>



     </div>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
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