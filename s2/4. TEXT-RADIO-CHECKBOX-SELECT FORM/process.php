<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
  
    ?>
        <tr>
            <td><?php echo isset($_POST['name'])?$_POST['name']: "null"//name; ?></td>
            <td><?php echo isset($_POST['email'])?$_POST['email']: "null"//email; ?></td>
            <td><?php echo isset($_POST['password'])?$_POST['password']: "null"//password; ?></td>
            <td><?php echo isset($_POST['number'])?$_POST['number']: "null"//number; ?></td>
            <td><?php echo isset($_POST['message'])?$_POST['message']: "null"//message; ?></td>
            <td><?php echo isset($_POST['province'])?$_POST['province']: "null"//province; ?></td>
            <td><?php echo isset($_POST['gender'])?$_POST['gender']: "null"// gender ?></td>
            <td>
                <?php 
                    $subjects=$_POST['subject'];
                    foreach($subjects as $subject){
                        echo $subject . "| ";
                    }
                ?>
            </td>
            
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>