
<?php require_once '../inc/header.php'; ?>
<?php require '../../functions/db.php'; ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php');
    }
    $id = $_GET['id'];
    $row = getRecord('cities' , 'id' , $id);
    if($row == null){
        header('Location: index.php');
    }
?>
<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Edit New City</h3>
        <?php require('E:/xampp/htdocs/medical-project/functions/messages.php'); ?>
        <form method="POST" action="<?php echo 'handle-city.php?id='.$row['id'] ?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" value="<?php echo $row['city_name'] ?>" class="form-control" >
            </div>
            <button type="submit" name="edit_city" class="btn btn-success">Save</button>
        </form>
       
    </div>











<?php require_once '../inc/footer.php'; ?>