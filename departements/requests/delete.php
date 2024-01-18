<?php

require_once('../../config/app.php');
$id=$_GET['id'];
delete('departements',$id);
redirect('departements/index.php');