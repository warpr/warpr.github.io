<?php if (getenv("FROB") == "static"): ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="/node_modules/moment/moment.js"></script>
  <script src="/node_modules/moment-timezone/moment-timezone.js"></script>
<?php else: ?>
  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="/node_modules/less/dist/less.js"></script>
  <script src="/node_modules/moment/moment.js"></script>
  <script src="/node_modules/moment-timezone/moment-timezone.js"></script>
<?php endif; ?>
<script src="/site.js"></script>


