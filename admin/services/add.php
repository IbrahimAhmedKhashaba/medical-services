<?php require_once '../inc/header.php'; ?>





    <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Service</h3>
        <?php require('E:/xampp/htdocs/medical-project/functions/messages.php'); ?>
        <form method="post" action="<?php echo 'handle-ser.php' ?>">
            <div class="form-group">
                <label >Name Of Service</label>
                <input type="text" name="name" class="form-control" >
            </div>
            
            <button type="submit" name="add_ser" class="btn btn-success">Save</button>
        </form>
       
    </div>


<?php require BLA.'inc/footer.php';  ?>




   

