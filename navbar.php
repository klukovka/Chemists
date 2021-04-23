<?php 
function createNavbar($item, $search = ""){



$values = '
 <div class="col center"><a href="index.php" >Головна</a></div>
                    <div class="col center"><a href="illness_and_medicine.php" >Захворювання та лікування</a></div>
                    <div class="col center"><a href="payment_and_delivery.php" >Оплата і доставка</a></div>
                    <div class="col center"><a href="feedback.php" >Відгуки</a></div>
                    <div class="col center"><a href="contacts.php" >Контакти</a></div>
';

$active="class=\"active\"$item";
$items = str_replace($item, $active, $values);


    echo '    
     <nav class="fixed-top">
        <div class="row">
            <div class="col">
                <div class="center">
                    <a href="#" class="navbar-brand">APT</a>
                </div>
            </div>
            <div class="col-8">
                <div class="row nested">';
        echo"$items";
        echo '            </div>
                <div class="row justify-content-center">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Каталог</span>
                        </div>
                        <input type="text" placeholder="Пошук..." class="form-control"';
        echo "
        value=\"$search\"/>
        ";
            echo '          </div>
                </div>
            </div>
            <div class="col">
                <div class="center">
                    <a href="basket.php" class="navbar-brand"><i class="fas fa-shopping-basket">
                        </i></a> <span class="badge badge-light badge-pill">
                        1</span>
                </div>
            </div>
        </div>
        </div>
        </div>
    </nav>    
    ';
}
?>