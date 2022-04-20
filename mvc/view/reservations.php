<?php
include 'header.php'; 
?>

<div id='content'>
<button class='btn-create' onClick="loadPage('index.php?controller=reservations&todo=createForm', sendToContent);">Create</button>
<?php
if(isset($reservations) ){
     echo $reservations;
}
?>
</div>
<?php
include 'footer.php'; 
?>
