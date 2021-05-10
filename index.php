<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include_once('database.php'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Головна сторінка</title>
</head>

<body>

    <?php 
include("navbar.php");
createNavbar(">Головна");
?>

    <div class="container">
        <div class="main">
            <div class="row justify-content-center">
                <?php 
    $db = new SQLite3("chemists.db");
    $db->enableExceptions(true); 

        $get_id = $_GET["id"]??1;


     $select = "SELECT * FROM cathegory";
        $result = $db->query($select);
        $array = array();

        echo '    <div class="col-3 category allpad">
                    <ul class="list-unstyled">';

    while($data = $result->fetchArray(SQLITE3_ASSOC))
        {
            $array[] = $data;
        }

    for($i=0; $i<count($array);$i++){
        $cath = str_replace("?","i", $array[$i]['title']);
        $id = $array[$i]['id_category'];
        if($get_id==$id){
        echo "<li><a href='index.php?id=$id' style='color: rgb(34, 0, 49);  font-weight: bold;'>$cath</a></li>";
        }
        else{
        echo "<li><a href='index.php?id=$id' style='color: rgb(34, 0, 49)'>$cath</a></li>";
        }
    }


echo '
                </ul>
            </div>
            <div class="col-7 category allpad">
                <div class="row nested"> ';

                
        $select = "SELECT * FROM subcathegory WHERE id_category=$get_id";

        $result = $db->query($select);
        $array = array();

          while($data = $result->fetchArray(SQLITE3_ASSOC))
        {
            $array[] = $data;
        }

            for($i=0; $i<count($array);$i++){
        $subcath = str_replace("?","i", $array[$i]['title']);
        $id_sub = $array[$i]['id_subcategory'];

        echo "
                    <div class=\"col-4\">
                        <a href='products.php?id=$get_id&idsub=$id_sub' style='color: rgb(34, 0, 49)'>$subcath</a>
                    </div>";

    }



    
echo'
                </div>
            </div>
        </div>    
        
        
                <div class="row">
                    <div class="container allpad center" style="font-size: 20px;">Популярні товари</div>
                </div>
                <div class="row">
        
        ';
        
         $select = "SELECT p.*, s.id_category FROM product p, subcathegory s WHERE p.id_product<4 and p.id_subcategory=s.id_subcategory;";

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
                                <a href="product.php?id='.$array[$i]['id_category'].'
                                &idsub='.$array[$i]['id_subcategory'].'
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
        </div>';

        ?>

                <?php 
 include("footer.php");
 createFooter();
 ?>



                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                    crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                    crossorigin="anonymous">
                </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                    crossorigin="anonymous">
                </script>
</body>

</html>