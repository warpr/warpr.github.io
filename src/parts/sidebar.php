
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
    <p><i class="fa fa-github"></i> <a class="github" href="https://github.com/warpr/">github.com/warpr</a></p>
  </div>

  <div id="menu-wrapper">
     <a class="menu-item <?= $activity_selected ?>" href="/"><div class="h4"><i class="fa fa-star"></i>Activity</div></a>
     <a class="menu-item <?= $projects_selected ?>" href="/projects/"><div class="h4"><i class="fa fa-code"></i>Projects</div></a>
     <a class="menu-item" href="/cv/"><div class="h4"><i class="fa fa-inbox"></i>R&eacute;sum&eacute;</div></a>
     <a class="menu-item secret" href="https://320x200.org/"><div class="h4"><i class="fa fa-archive"></i>Archive</div></a>
  </div>
</div>

