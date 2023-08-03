<?php if(isset($_GET['id'])){

    $del = "DELETE FROM home_page WHERE id=".$_GET['id'];
    $sql = $con->query($del);

} ?>
<script>
var sql = "<?php echo $sql; ?>";
if(sql){
    var url = "http://localhost/maraichi/admin-panell/form-element.php";
    window.location.href = url;

}
</script>