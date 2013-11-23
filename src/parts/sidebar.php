
<div class="col-sm-4 col-md-4 col-lg-3 full-height" id="menu">
  <div id="photo-border" class="img-circle" >
    <img id="photo" src="/me.png" class="img-circle" />
  </div>
  <h1 class="h3">Kuno Woudt</h1>
  <span id="timezone"><i class="fa fa-clock-o"></i> UTC+1</span>

  <div id="expanded-timezone">
    <p>
      my time <span id="kuno-time"> ... </span><br/>
      your time <span id="your-time"> ... </span>
    </p>
  </div>

  <div id="contact">
    <p><i class="fa fa-comments"></i> warp on <a href="https://www.freenode.net/">freenode irc</a></p>
    <p><i class="fa fa-skype"></i> kunowoudt</p>
    <p><i class="fa fa-envelope"></i> <a class="email" property="foaf:mbox" href="mailto:kuno@frob.nl">kuno@frob.nl</a></p>
    <p><i class="fa fa-phone"></i> <span class="tel" property="foaf:phone">+31 651 255 985</span></p>
  </div>

  <div id="menu-wrapper">
    <div class="menu-item h4 <?= $activity_selected ?>"><i class="fa fa-star"></i><a href="/">Activity</a></div>
    <div class="menu-item h4 <?= $projects_selected ?>"><i class="fa fa-code"></i><a href="/projects/">Projects</a></div>
    <div class="menu-item h4"><i class="fa fa-inbox"></i><a href="/cv/">R&eacute;sum&eacute;</a></div>
  </div>
</div>

