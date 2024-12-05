<?php require_once '../inc/header.php'; ?>



<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New City</h3>
        <?php require('E:/xampp/htdocs/medical-project/functions/messages.php'); ?>
        <form method="POST" action="<?php echo 'handle-city.php' ?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <button type="submit" name="add_city" class="btn btn-success">Save</button>
        </form>
       
    </div>











<?php require_once '../inc/footer.php'; ?>