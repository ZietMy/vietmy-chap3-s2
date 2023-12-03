<?php require_once './templates/header.php'// HEADER ?>
<?php
    // YOUR CODE HERE 
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php echo isset($_POST['color'])?$_POST['color']: "null"//color; ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php echo isset($_POST['range'])?$_POST['range']: "null" //range; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo isset($_POST['date'])?$_POST['date']: "null"//date; ?></span>
    </div>

<?php require_once './templates/footer.php'//FOOTER ?>