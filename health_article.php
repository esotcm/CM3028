<?php
/**
 * Created by PhpStorm.
 * User: duncanpogson
 * Date: 28/11/2016
 * Time: 21:25
 */
session_start();

include ("Database/LoginSystem/DB_Connect.php");
include ("header.php");
echo "
<main>
";

if (isset($_GET['ID'])) {
    //echo $_GET['ID'];

    $sql = "SELECT * FROM healthnews where itemID = 'ID'";
    $result = $conn->query($sql);

    while($row = $result->fetch_array())
    {
        $_articleID = $row['itemID'];
        $_articleName = $row['title'];
        $_articleAuthor = $row['userID'];
        $_articleText = $row['content'];

        echo "
        <article>
        <h2>{$_articleName}</h2>
        <h3>by {$_articleAuthor}</h3>
        {$_articleText}
        </article>";
    }
    echo "
    </main>
    ";

}else{
    // Fallback behaviour
    echo "Uh Oh, theres been an error, please go back and select a new article";
}

include ("footer.php");
