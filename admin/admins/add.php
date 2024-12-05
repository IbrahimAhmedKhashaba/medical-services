<?php require_once '../inc/header.php'; ?>



<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="POST" action="<?php echo 'handle-admin.php' ?>">
        <?php require('E:/xampp/htdocs/medical-project/functions/messages.php'); ?>
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="email" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password Confirmation</label>
                <input type="password" name="password_confirmation" class="form-control" >
            </div>

            <button type="submit" name="add_admin" class="btn btn-success">Save</button>
        </form>
       
    </div>











<?php require_once '../inc/footer.php'; ?>