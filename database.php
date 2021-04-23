    <?php 
if(!file_exists("chemists.db")){
$db = new SQLite3("chemists.db");
$db->enableExceptions(true);

$sql = "CREATE TABLE feedback (
    id_feedback INTEGER PRIMARY KEY AUTOINCREMENT,
    uName TEXT NOT NULL, 
    uEmail TEXT NOT NULL, 
    uMessage TEXT NOT NULL)";
$db->query($sql);

$sql = "CREATE TABLE cathegory (
    id_category INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL)";
$db->query($sql);


$sql = "CREATE TABLE subcathegory (
    id_subcategory INTEGER PRIMARY KEY AUTOINCREMENT,
    id_category INTEGER NOT NULL,
    title TEXT NOT NULL,
     FOREIGN KEY (id_category)
       REFERENCES cathegory (id_category) )";
$db->query($sql);

$sql = "CREATE TABLE product (
    id_product INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL, 
    _description TEXT NOT NULL, 
    price TEXT NOT NULL,
    manufacturer TEXT NOT NULL,
    _image TEXT NOT NULL,
    id_subcategory INTEGER NOT NULL,
     FOREIGN KEY (id_subcategory)
       REFERENCES subcathegory (id_subcategory) 
    )";
$db->query($sql);

$sql = "CREATE TABLE purchase (
    id_purchase INTEGER PRIMARY KEY AUTOINCREMENT,
    _name TEXT NOT NULL, 
    home_address TEXT NOT NULL,
    telephone TEXT NOT NULL, 
    _message TEXT NOT NULL,
    email TEXT NOT NULL
    )";
$db->query($sql);

$sql = "CREATE TABLE product_puschase (
    id_product_purchase INTEGER PRIMARY KEY AUTOINCREMENT,
    id_purchase INTEGER NOT NULL,
    id_product INTEGER NOT NULL ,
    amount INTEGER NOT NULL,
     FOREIGN KEY (id_purchase)
       REFERENCES purchase (id_purchase),
       FOREIGN KEY (id_product)
       REFERENCES product (id_product))";
$db->query($sql);
}
else{
$db = new SQLite3("chemists.db");
}
?>