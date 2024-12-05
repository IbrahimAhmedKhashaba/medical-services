<?php require_once '../inc/header.php'; ?>
<?php require('E:/xampp/htdocs/medical-project/functions/db.php'); ?>


<?php
    $data = getData('orders'); 
?>

    <div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Orders</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Service</th>
                    <th scope="col">City</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Action</th>
       
                </tr>
            </thead>
            <tbody>
                <?php $x=0; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x++; ?></td>
                    <td class="text-center"><?php echo $row['order_name']; ?></td>
                    <td class="text-center"><?php echo $row['order_email']; ?></td>
                    <td class="text-center"><?php echo $row['order_mobile']; ?></td>
                    <?php
                        $rowCity = getRecord('cities','id' , $row['order_city_id']);
                        $rowService = getRecord('services','id' , $row['order_ser_id']);
                    ?>
                    <td class="text-center"><?php echo  $rowService['ser_name']; ?></td>
                    <td class="text-center"><?php echo $rowCity['city_name']; ?></td>
                    <td class="text-center"><?php echo $row['order_notes']; ?></td>
                    
                    <td class="text-center">
                        <a href="handle-order.php?id=<?php echo $row['id']?>" class="btn btn-danger delete" data-field="order_id" data-id="<?php echo $row['id']; ?>" data-table="orders" >Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

<?php require BLA.'inc/footer.php';  ?>




   

