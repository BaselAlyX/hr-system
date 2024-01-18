<?php require_once('../config/app.php');?>
<?php require_once MAIN_PATH.('inc/header.php');?>
<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
        <h1 class="text-center border p-3 my-2">ALL employees</h1>
           
<table class="table table-bordered"><thead><tr>
    <th>#</th>
    <th>name</th>
    <th>email</th>
    <th>phone</th>
    <th>salary</th>
    <th>departement name</th>
    <th>edit</th>
    <th>delete</th>
</tr></thead>
<tbody>
    <?php $employees = jointables('employees','departements'); ?>
    <?php foreach ($employees as $emp):    ?>
    <tr>
        <td><?php echo $emp['id'];  ?></td>
        <td><?php echo $emp['name'];  ?></td>
        <td><?php echo $emp['email'];  ?></td>
        <td><?php echo $emp['phone'];  ?></td>
        <td><?php echo $emp['salary'];  ?></td>
        <td><?php echo $emp['title'];  ?></td>
        <td><a href="#" class="btn btn-info">Edit</a></td>
        <td><a href="<?php echo URL . 'employees/requests/delete.php?id=' . $emp['emp_id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</tbody>


</table>
        </div>
    </div>
</div>
    
    <?php require_once MAIN_PATH.('inc/footer.php');?>