<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="refresh" content="30" />
    <title>online?</title>
    <style>
      html, body, a, div, ul, li, h1, h2 {
          margin: 0; padding: 0; border: 0; outline: 0; font-size: 13px;
          vertical-align: baseline; background: transparent; color: #666;
          text-decoration: none; font-weight: normal;
      }

      * { box-sizing: border-box; }

      body { font-family: "DejaVu Sans", Verdana, Helvetica, sans-serif; }

      body { background: #080808; }
      td { padding: 0.5em 1em; }
      table {
         margin: 10em auto;
         border: 1px dashed #222;
         border-radius: 8px;
         padding: 1em;
         background: #111;
      }
      tr.online  td#online div { background: #4f6; }
      tr.offline td#online div { background: #f64; }
      td#online div {
          border-radius: 8px;
          min-width: 2em;
          min-height: 1.2em;
          text-align: center;
          font-weight: bolder;
          color: #111;
      }
    </style>
  </head>
  <body>
    <div>
      <table id="status">
      <tr><th> </th><th>host</th><th>ipv4 (lan)</th><th>ipv4 (wan)</th><th>ipv6</th></tr>
      <?php
         $data = json_decode (file_get_contents ("https://frob.nl/343a94f2-751d-4fd6-865c-be7ff4192be7"), True);
         foreach ($data as $key => $val) {
            $online_class = $val["offline"] ? "offline" : "online";
            ?>
            <tr class="<?=$online_class?>">
              <td id="online"><div> </div></td>
              <td id="host"><?=$key?></td>
              <td id="lan-ipv4"><?=$val["lan-ipv4"]?></td>
              <td id="wan-ipv4"><?=$val["wan-ipv4"]?></td>
              <td id="ipv6"><?=$val["ipv6"]?></td>
            </tr>
            <?php
         }
       ?>
      </table>
    </div>
  </body>
</html>
