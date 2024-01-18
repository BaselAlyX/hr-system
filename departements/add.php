<?php require_once('../config/app.php');?>
<?php require_once MAIN_PATH.('inc/header.php');?>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
        <h1 class="text-center border p-3 my-2">add new departement</h1>
            <form action="<?php echo URL.'departements/requests/store.php';?>" method="POST" class="form">
            <div class="mb-3">
                <label for="">Name:</label>
                <input type="text" name="title"  class="form-control">
            </div>
            <div class="mb-3">
                <input type="submit" value="Add" class="form-control text-white bg-success">
            </div>
            </form>

        </div>
    </div>
</div>
    
    <?php require_once MAIN_PATH.('inc/footer.php');?>