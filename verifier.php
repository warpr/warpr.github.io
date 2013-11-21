<!DOCTYPE html>
<html>
  <head>
    <title>Authorize desktop client</title>
    <style type="text/css">
          html, body, a, div, ul, li, h1, h2 {
              margin: 0; padding: 0; border: 0; outline: 0; font-size: 13px;
              vertical-align: baseline; background: transparent; color: #444;
              text-decoration: none; font-weight: normal;
          }

          * { box-sizing: border-box; }

          body { background-color: #aaa; }

          body { font-family: "DejaVu Sans", Verdana, Helvetica, sans-serif; }

          h1 { font-size: 32px; text-align: center; margin-top: 2em; }
          p { text-align: center; }

          p.verifier {
              font-size: 60px;
              color: #888;
              background: #ddd;
              padding: 1em 0;
              border-top: 1px solid #888;
              border-bottom: 1px solid #888;
          }
    </style>
  </head>
  <body>
    <h1>Authorize client</h1>
    <p>Please copy/paste the following verification code to your client:</p>
    <p class="verifier"><?= $_REQUEST["oauth_verifier"] ?></p>
  </body>
</html>
