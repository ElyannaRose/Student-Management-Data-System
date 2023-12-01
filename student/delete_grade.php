<?php
 include('dbcon.php');

 if (isset($_POST['delete'])){
$id = $_POST['id'];
$get_id = $_POST['get'];


$del = "delete from grade where grade_id='$id'"; 
$dg = $conn ->query($del);

?>
<script>
  window.location = "view_grade.php<?php echo '?id='.$get_id;  ?>";   
</script>

<?php } ?>