<?php require_once './templates/header.php' ?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
?>
    <li class="list-group-item"><?php echo isset($_POST['name'])?$_POST['name']: "null" ?></li>
    <li class="list-group-item"><?php echo isset($_POST['email'])?$_POST['email']: "null"// email; ?></li>
    <li class="list-group-item"><?php echo isset($_POST['password'])?$_POST['password']: "null"// password; ?></li>
    <li class="list-group-item"><?php echo isset($_POST['number'])?$_POST['number']: "null" // number; ?></li>
    <li class="list-group-item"><?php echo isset($_POST['message'])?$_POST['message']: "null"// message; ?></li>

</ul>
<?php require_once './templates/footer.php' ?>