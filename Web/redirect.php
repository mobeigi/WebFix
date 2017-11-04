<html>
    <head>
        <title>WebFix</title>
    </head>
    <body>
      <script type="text/javascript" >
      var url     = <?=(isset($_GET["url"]))                            ? '"'.htmlspecialchars($_GET["url"]).'"'  : '"about:blank"';  ?>;
      var width   = <?=(isset($_GET["width"]) && $_GET["width"] != 0)   ? intval(htmlspecialchars($_GET["width"]))                  : 'screen.width';   ?>;
      var height  = <?=(isset($_GET["height"]) && $_GET["height"] != 0) ? intval(htmlspecialchars($_GET["height"]))                 : 'screen.height';  ?>;

      window.open(url, "_blank", "width=" + width + ", height=" + height);
      </script>
    </body>
</html>