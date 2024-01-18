<?php require_once('../config/app.php');?>
<?php require_once MAIN_PATH.('inc/header.php');?>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
        <h1 class="text-center border p-3 my-2">ALL Departements</h1>
           
<table class="table table-bordered"><thead><tr>
    <th>#</th>
    <th>name</th>
    <th>edit</th>
    <th>delete</th>
</tr></thead>
<tbody>
    <?php $all_departements = getdata("departements"); ?>
    <?php foreach ($all_departements as $departements):    ?>
    <tr>
        <td><?php echo $departements['id'];  ?></td>
        <td><?php echo $departements['title'];  ?></td>
        <td><a href="#" class="btn btn-info">Edit</a></td>
        <td><a href="<?php echo URL . 'departements/requests/delete.php?id=' . $departements['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</tbody>


</table>
        </div>
    </div>
</div>
    
    <?php require_once MAIN_PATH.('inc/footer.php');?>