<!DOCTYPE html>
<html>
  <?php
     $title = "Projects";
     $activity_selected = "";
     $projects_selected = "selected";
     require('parts/head.php');
     ?>
  <body>
    <div class="container">
      <div class="row">
        <?php require('parts/sidebar.php'); ?>
        <?php require('parts/projects.php'); ?>
      </div>
    </div>
    <?php require('parts/foot.php');  ?>
    <script>projects();</script>
  </body>
</html>
