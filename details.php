<?php
include('config/db_connect.php');
/**Check GET request id param */
if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($conn, $_GET['id']);
    
    /**Make sql */
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    /**Get the query result */
    $result = mysqli_query($conn, $sql);

    /**Fetch result in array format */
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

}

?>
<!DOCTYPE html>
<html lang>
<?php include('templates/header.php');?> 
<div class="container center">
    <?php if($pizza): ?>

        <p><h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
    </p>
    <p>Create by: <?php echo htmlspecialchars($pizza['email']); ?></p>
    <p><?php echo date($pizza['created_at']); ?></p>
    <h5>Ingredients: </h5>
    <p><?php echo htmlspecialchars($pizza['ingredients'])?></p>
    
    <?php else: ?>
        <h5>No such pizza exist</h5>
    <?php endif;?>

</div>

<?php include('templates/footer.php');?>

</html>