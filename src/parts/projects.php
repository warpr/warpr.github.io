<?php

$images = array(
  "licensedb" => array(
    "licensedb.about.png",
    "licensedb.agplv3.png",
    "licensedb.agplv3.json.png",
    "licensedb.agplv3.rdf.png"),
  "musicbrainz" => array(
    "musicbrainz.kingdom.png",
    "musicbrainz.koda-kumi.edit.png",
    "musicbrainz.kingdom.credits-inline.png",
    "musicbrainz.koda-kumi.json.png",
    "musicbrainz.koda-kumi.xml.png",
    "musicbrainz.coverartarchive.png"),
  "quaestio" => array(
    "quaestio.login.png", "quaestio.main.png", "quaestio.addnew.png"),
  "waldmeta" => array("waldmeta.teaser.png", "waldmeta.senet.png")
);

function fadeshow($name, $title) {
  global $images;
?>
<h2><?= $title ?></h2>
<div class="images col-md-12 col-lg-6">
  <ul data-toggle="modal" data-target="#<?= $name ?>-lightbox">
    <?php foreach ($images[$name] as $img) {
      echo "<li><img src=\"portfolio/$img\" /></li>";
    }; ?>
  </ul>
</div>
<?php
};

function lightbox($name, $title) {
  global $images;
?>
  <div id="<?= $name ?>-lightbox" class="modal fade lightbox" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4><?= $title ?></h4>
        </div>
        <div class="modal-body">
          <?php foreach ($images[$name] as $img) {
            echo "<img id=\"$img\" src=\"portfolio/$img\" />";
          } ?>
        </div>
        <div class="modal-footer">
          <div class="btn-group lightbox-switcher" data-toggle="buttons">
            <?php for ($i = 1; $i <= count($images[$name]); $i++) {
              echo "<label class=\"btn btn-default\">";
              $checked = $i == 0 ? 'checked="checked"' : '';
              echo "<input type=\"radio\" $checked>$i</input>";
              echo "</label>";
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php };
?>

<div class="col-sm-8 col-md-8 col-lg-9 full-height" id="content">

  <header id="projects-header">
    <h1>Projects</h1>
    <p>I am a web developer based in Rotterdam.</p>
    <p>
      This page contains examples of my <a href="#work">professional work</a>
      and <a href="#side">side projects</a> I have worked on in the past few years.
    </p>
    <p class="sign">
      &#x301C; <a href="https://frob.nl/cv/">Kuno Woudt</a>.
    </p>
  </header>

  <a id="side"></a>
  <section class="licensedb clearfix row">

    <?php lightbox("licensedb", "LicenseDB Screenshots"); ?>
    <?php fadeshow("licensedb", "LicenseDB"); ?>

    <div class="details col-md-12 col-lg-6">
      <div class="description">
        <p>
          <a href="https://licensedb.org">The License Database</a>
          is intended to be a metadata database about open source
          / free software / free culture copyright licenses.  The
          database is implemented as a set of git versioned turtle
          files, from which HTML/RDFa, RDF/XML and JSON-LD files
          are generated.  A hodge podge of scripts glue everything
          together.  I would like to reimplement all of this in a
          more coherent manner.
        </p>
      </div>

      <div class="attributes">
        <span class="key">date</span> <span class="date">February 2012 &mdash;</span><br />
        <span class="key">code</span> <a href="https://gitorious.org/licensedb/licensedb/">https://gitorious.org/licensedb/licensedb/</a><br />
        <span class="key">tech</span>
        <span class="label label-tech">RDF</span>
        <span class="label label-tech">node.js</span>
        <span class="label label-lang">Javascript</span>
        <span class="label label-lang">Python</span>
        <span class="label label-lang">PHP</span>
      </div>
    </div>
  </section>

  <section class="waldmeta clearfix row">

    <?php lightbox("waldmeta", "wald:meta Screenshots"); ?>
    <?php fadeshow("waldmeta", "wald:meta"); ?>

    <div class="details col-md-12 col-lg-6">
      <div class="description">
        <p>
          <a href="http://waldmeta.org">wald:meta</a> is a generic
          metadata database, built using Linked Data technologies
          such as
          <a href="http://www.markus-lanthaler.com/hydra/">Hydra</a>
          and <a href="http://json-ld.org/">JSON-LD</a>.
          It is currently in development, but should in the near
          future be used to run
          <a href="https://licensedb.org/">LicenseDB</a>.  It will
          also run <a href="https://senet.org">senet.org</a>, a
          MusicBrainz inspired videogame database.
        </p>
      </div>

      <div class="attributes">
        <span class="key">date</span> <span class="date">May 2013 &mdash;</span><br />
        <span class="key">code</span> <a href="https://gitorious.org/wald/">https://gitorious.org/wald/</a><br />
        <span class="key">tech</span>
        <span class="label label-tech">RDF</span>
        <span class="label label-tech">Python</span>
        <span class="label label-lang">Javascript</span>
        <span class="label label-lang">CouchDB</span>
      </div>
    </div>
  </section>

  <div class="spacer">&#x2766;</div>

  <a id="work"></a>
  <section class="musicbrainz clearfix row">

    <?php lightbox("musicbrainz", "MusicBrainz Screenshots"); ?>
    <?php fadeshow("musicbrainz", "MusicBrainz"); ?>

    <div class="details col-md-12 col-lg-6">
      <div class="description">
        <p>
          <a href="https://musicbrainz.org">MusicBrainz</a> is a
          community-maintained open source database of music
          information.
        </p>
        <p>
          As a contractor on MusicBrainz I've mostly
          worked on the musicbrainz.org server software, which is
          written in perl using the Catalyst framework.  Some of
          the data entry screens use javascript with jQuery and
          Knockout.  The main site uses PostgreSQL as the back-end
          database and a lucene based search server written in
          java.
        </p>
      </div>

      <div class="attributes">
        <span class="key">date</span> <span class="date">February 2010 &mdash; August 2013</span><br />
        <span class="key">code</span> <a href="https://github.com/metabrainz/musicbrainz-server/">https://github.com/metabrainz/musicbrainz-server/</a><br />
        <span class="key">tech</span>
        <span class="label label-lang">Perl</span>
        <span class="label label-lang">Javascript</span>
        <span class="label label-tech">PostgreSQL</span>
        <span class="label label-tech">Catalyst</span>
      </div>
    </div>
  </section>

  <section class="quaestio clearfix row">

    <?php lightbox("quaestio", "Quaestio Screenshots"); ?>
    <?php fadeshow("quaestio", "Quaestio"); ?>

    <div class="details col-md-12 col-lg-6">
      <div class="description">
        <p>
          At <a href="http://cope.nl">COPE</a> I started as a
          developer and system administrator on a survey tool
          called Quaestio and a 360 degree feedback tool called
          FeedbackTool.
        </p>
        <p>
          During my final year at COPE I was was
          the lead developer of Quaestio.  In this period I
          introduced continuous deployment and automated testing
          to the project, and started refactoring the codebase
          to a more modular architecture.
        </p>
      </div>

      <div class="attributes">
        <span class="key">date</span> <span class="date">May 2006 &mdash; January 2010</span><br />
        <span class="key">home</span> <a href="http://quaestio.com/">http://quaestio.com/</a><br />
        <span class="key">tech</span>
        <span class="label label-lang">PHP</span>
        <span class="label label-lang">Javascript</span>
        <span class="label label-tech">MySQL</span>
        <span class="label label-tech">XML/XSLT</span>
      </div>
    </div>
  </section>

</div>
