<?php

$major_fn = dirname (__FILE__)."/../../activity/major.json";
$minor_fn = dirname (__FILE__)."/../../activity/minor.json";

$major = json_decode (file_get_contents ($major_fn), True);
$minor = json_decode (file_get_contents ($minor_fn), True);


/* $events_fn = dirname (__FILE__)."/../../activity/events.json"; */
/* $events = json_decode (file_get_contents ($events_fn), True); */

function render_avatar ($event) {
    $avatar = $event["avatar"] ? $event["avatar"] :
        "https://frob.nl/misc/avatar/skiip.64x64.png";

    /* echo "<img src=\"$avatar\" alt=\"avatar\" class=\"avatar img-rounded\" />"; */
}

function render_date ($event) {
    $date = new DateTime($event["datetime"]);
    $date->setTimezone (new DateTimeZone ('UTC'));
    $datetime = $event["datetime"];
    $title = date_format($date, "Y-m-d H:i T");

    echo "<span class=\"date\" title=\"$title\" ".
        "data-datetime=\"$datetime\">".date_format($date, "Y\WWN")."</span>";
}

function render_verb ($event) {
    $icons = array(
        "listen" => "fa-music",
        "favorite" => "fa-star",
        "post" => "fa-comment",
        "share" => "fa-share",

        "github" => "fa-github",
        "bitbucket" => "fa-bitbucket",
        "twitter" => "fa-twitter",
        "stackoverflow" => "fa-stack-overflow",
        );

    if (array_key_exists ($event["service"], $icons)) {
        $icon_class = $icons[$event["service"]];
    }
    else if (array_key_exists ($event["type"], $icons)) {
        $icon_class = $icons[$event["type"]];
    }
    else
    {
        $icon_class = "fa-warning";
    }

    echo "<a href=\"".$event["url"]."\">".
        "<i class=\"fa $icon_class\"></i>".
        "</a>";
}

function render_title ($event) {
    /* if (preg_match ("/<a.*href/", $event["title"])) */
    /* { */
    /*     $title = $event["title"]; */
    /* } */
    /* else */
    /* { */
    /*     $title = '<a href='.$event["url"].'>'.$event["title"].'</a>'; */
    /* } */

    $title = $event["title"];
    echo "<h5 class=\"title\">$title </h5>";
}

function get_summary ($event) {
    if (preg_match ("/<a.*href/", $event["summary"]))
    {
        return $event["summary"];
    }
    else
    {
        return '<a href='.$event["url"].'>'.$event["summary"].'</a>';
    }
}

function render_summary ($event) {
    $summary = get_summary ($event);
    echo "<p class=\"summary\">$summary</p>";
}

function render_minor_summary ($event) {
    $summary = get_summary ($event);
    echo "<span class=\"summary\">$summary</span>";
}

function render_event ($event) {
    $extra_classes = $event["service"] . " " . $event["level"];

?>
  <article class="activity-event clearfix row <?= $extra_classes ?>">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 verb">
      <?php render_verb($event); ?>
    </div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 event">
      <?php render_date($event); ?>
      <?php render_title($event); ?>
      <?php render_summary($event); ?>
    </div>
  </article>
  <hr class="activity" />
<?php
}

function render_minor_event ($event) {
    $extra_classes = $event["service"] . " " . $event["level"];

?>
  <article class="activity-event clearfix row <?= $extra_classes ?>">
    <div class="col-xs-offset-0 col-xs-12
                col-sm-offset-1 col-sm-11
                col-md-offset-1 col-md-11
                col-lg-offset-0 col-lg-12">
      <?php render_verb($event); ?>
      <?php render_minor_summary($event); ?>
      <?php render_date($event); ?>
    </div>
  </article>
  <hr class="activity" />
<?php
}


function render_events ($events, $limit) {
    $count = 0;

    foreach ($events["data"] as $event) {
        if ($event["service"] == "pump.io" &&
            strstr ($event["summary"], "https://frob.nl/blog/#entry") != False)
        {
            /* Skip identi.ca reposts of the blog, as the blog is already
               included properly. */
            continue;
        }

        if ($event["url"] == "https://twitter.com/byld/status/395860812029767680?p=v")
            continue;

        $event["level"] == "major" ?
            render_event ($event) : render_minor_event ($event);

        if (++$count >= $limit)
            return;
    }
}

?>
<div class="col-sm-8 col-md-8 col-lg-9 full-height" id="content">

  <header>
    <h1>Activity</h1>
  </header>

  <div class="row">
    <section class="col-sm-12 col-md-12 col-lg-7 col-lg-offset-1 major">
      <?php render_events ($major, 8) ?>
    </section>
    <section class="col-sm-12 col-md-12 col-lg-3 col-lg-offset-1 minor">
      <?php render_events ($minor, 12) ?>
    </section>
  </div>

</div>
