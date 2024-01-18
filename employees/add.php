<?php require_once('../config/app.php');?>
<?php require_once MAIN_PATH.('inc/header.php');?>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
        <h1 class="text-center border p-3 my-2">add employee</h1>
            <form action="<?php echo URL.'employees/requests/store.php';?>" method="POST" class="form">
            <div class="mb-3">
                <label for="">Name:</label>
                <input type="text" name="name"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="">choose the departement:</label>
                <select name="departement_id" class="form-control">
                    <?php $departements=getdata("departements");   ?>
                    <?php foreach($departements as $value): ?>
                    <option value="<?php echo $value['id']; ?>"><?php echo $value['title'];  ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="">email:</label>
                <input type="email" name="email"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="">phone:</label>
                <input type="text" name="phone"  class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="">salary:</label>
                <input type="number" name="salary" min="3500"  class="form-control">
            </div>
            <div class="mb-3">
                <input type="submit" value="Add" class="form-control text-white bg-success">
            </div>
            </form>

        </div>
    </div>
</div>
    
    <?php require_once MAIN_PATH.('inc/footer.php');?>