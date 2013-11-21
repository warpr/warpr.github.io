<!DOCTYPE html>
<html>
  <?php
     $title = "Activity";
     $activity_selected = "selected";
     $projects_selected = "";
     require('parts/head.php');
     ?>
  <body>
    <div class="container">
      <div class="row">
        <?php require('parts/sidebar.php'); ?>
        <?php require('parts/activity.php'); ?>
      </div>
    </div>
    <?php require('parts/foot.php');  ?>
  </body>
</html>
