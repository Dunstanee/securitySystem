<?php require_once('header.php');?>
<?php require_once('../Database/task.php');?>

<section>
    <div class="container">
        <div class="task">
            <h1>Assigned Task</h1>
            <?php 
            $i=1;
            while($get_task=mysqli_fetch_Assoc($indivdual_task)){
            ?>
            <div class="tt">
                <p><?php echo $i ;?>. <?php echo $get_task['task'] ;?></p>
            </div>
            <?php 
            $i++;
            }
            ?>
        </div>
    </div>
</section>

<?php require_once('footer.php');?>