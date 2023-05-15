<?
include ("connect_LP2.php");
if (isset($_POST['update']) ) {
include ("change_qty.php");
}
if (isset($_POST['delete']) ) {
    include ("delete_shopping_item.php");
    }
?>