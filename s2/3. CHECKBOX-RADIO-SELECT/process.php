<?php require_once "./templates/header.php"// HEADER ?>
<?php
// YOUR CODE HERE
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo isset($_POST['province'])?$_POST['province']: "null" // province ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <?php
                if (isset($_POST['gender'])){
                    if ($_POST['gender']=='Male'){
                        echo '<img src="./images/male.png" alt="male" style="width:50px;">';
                    }else echo '<img src="./images/female.png" alt="female" style="width:50px;">';

                }
            ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                // YOUR CODE HERE [subject]
                 $subjects=$_POST['subject'];
                foreach($subjects as $subject){
                    echo $subject . " ";
                }
            ?>
        </div>
    </div>

<?php require_once "./templates/footer.php"// FOOTER ?>