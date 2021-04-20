<?php
    require_once 'classes/feedback.php';
    $db = new SQLite3("mydb.db");
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
            $name = $array[$i]['uName'];
            $mail = $array[$i]['uEmail'];
            $mess = $array[$i]['uMessage'];
            $output.="<tr><td>$name</td><td>$mail</td><td>$mess</td></tr>";
        }
        echo "<style>
        caption{
            font-weight: 600;
            padding-bottom: 20px;
            font-size: 24px;
        }
        table{
            width: 80%;
            border-collapse: collapse;
            margin-top: 30px;
        }
        body{
            width: 100wv;
            display: flex;
            justify-content: center;
            font-family: 'Century Gothic';
        }
        tr{
            background-color: #f5f5f5;
            height: 30px;
            border-bottom: 2px solid #FFFFFF;
        }
        th{
            background-color: #fa4251;
            color: #FFFFFF;
        }
        td{
            text-align: center;
        }
        </style>
        <table>
        <caption>SELECT * FROM $table</caption>
        <tr>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Feedback
            </th>
        </tr>",
        $output,        
        "</table>";
        return $array;
        }
        catch (Exception $ex){
            echo $ex->getMessage();
        }       
    }
    getRows($db, "feedback");
?>