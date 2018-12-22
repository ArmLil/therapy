<?

if(!isset($_GET['tab1'])) {
    include "main.php";
    exit();
}

include $_GET['tab1'].".php";
exit();

?>

