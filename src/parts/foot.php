<?php if (getenv("FROB") == "static"): ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
  <script src="/bower_components/momentjs/moment.js"></script>
  <script src="/node_modules/moment-timezone/moment-timezone.js"></script>
<?php else: ?>
  <script src="../bower_components/jquery/jquery.min.js"></script>
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../bower_components/less/dist/less-1.5.1.js"></script>
  <script src="../bower_components/momentjs/moment.js"></script>
  <script src="../node_modules/moment-timezone/moment-timezone.js"></script>
<?php endif; ?>
<script src="/site.js"></script>


