<?php 
require_once '../inc/header.php';
require('E:/xampp/htdocs/medical-project/functions/db.php');

$data = getData('services');
?>

<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Services</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $x=0; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"> <?php echo $row['ser_name'] ?>  </td>
                    <td class="text-center">
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a>
                        <a href="handle-ser.php?id=<?php echo $row['id']?>" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>

    
<?php require_once BLA.'/inc/footer.php'; ?>