<?php 
require_once '../inc/header.php';
require('E:/xampp/htdocs/medical-project/functions/db.php');

$data = getData('admins');
?>

<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Admins</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                <?php $x=0; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"> <?php echo $row['admin_name'] ?>  </td>
                    <td class="text-center"> <?php echo $row['admin_email'] ?>  </td>
                    <td class="text-center"> <?php echo $row['admin_type'] ?>  </td>
                    
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>

    
<?php require_once BLA.'/inc/footer.php'; ?>