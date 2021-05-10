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
    <title>Товари</title>
</head>

<body>

    <?php 
include("navbar.php");
createNavbar(">Головна");
?>
    <?php

echo '
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col"><a href="index.php" style="color: rgb(34, 0, 49)">Головна</a></div>
                <div class="col">>></div>';
    
                  $db = new SQLite3("chemists.db");
    $db->enableExceptions(true); 

        $id_cat = $_GET["id"]??1;
        $id_sub = $_GET["idsub"]??1;

        $select = "SELECT * FROM cathegory WHERE id_category=$id_cat";
        $result = $db->query($select);
        $array = array();


            while($data = $result->fetchArray(SQLITE3_ASSOC))
        {
            $array[] = $data;
        }
        $cath = str_replace("?","i", $array[0]['title']);

        echo "
                <div class=\"col\"><a href='index.php?id=$id_cat' style='color: rgb(34, 0, 49)'>$cath</a></div>
                <div class=\"col\">>></div> ";
        

            $select = "SELECT * FROM subcathegory WHERE id_subcategory=$id_sub";

        $result = $db->query($select);
        $array = array();

          while($data = $result->fetchArray(SQLITE3_ASSOC))
        {
            $array[] = $data;
        }
        $subcath = str_replace("?","i", $array[0]['title']);

        echo "
                <div class=\"col\"><a>$subcath</a></div> 
    
    
                <div class=\"row\">
    
    ";



      $select = "SELECT * FROM product WHERE id_subcategory=$id_sub";
        $result = $db->query($select);
        $array = array();

            while($data = $result->fetchArray(SQLITE3_ASSOC))
        {
            $array[] = $data;
        }

           for($i=0; $i<count($array);$i++){

    echo '
           <div class="col-4">
                        <div class="card">
                            <img src="'.$array[$i]['_image'].'" class="card-img-top" style="height: 220px" />
                            <div class="card-body">
                                <h5 class="card-title">'.str_replace("?","i", $array[$i]['title']).'</h5>
                                <h6 class="card-subtitle">'.$array[$i]['price'].' грн</h6>
                                <p class="card-text">
                                    '.str_replace("?","i", $array[$i]['_description']).'
                                </p>
                                <a href="product.php?id='.$id_cat.'
                                &idsub='.$id_sub.'
                                &idprod='.$array[$i]['id_product'].'" class="btn
                        btn-outline-primary">Придбати</a>
                            </div>
                            <div class="card-footer">
                                    '.str_replace("?","i", $array[$i]['manufacturer']).'
                                
                            </div>
                        </div>
                    </div>
    
    ';

    }

        echo '
                </div>
        </div>
    </div>
    </div>
        '
?>
    <?php 
 include("footer.php");
 createFooter();
 ?>
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