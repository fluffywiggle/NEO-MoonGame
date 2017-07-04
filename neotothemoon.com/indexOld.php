<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | %UNITY_WEB_NAME%</title>
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <script src="TemplateData/UnityProgress.js"></script>
  </head>
  <body class="template">
    <div class="template-wrap clear">
      <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="860px" width="450px"></canvas>
      <br>
      <button type="button" class="template-wrap" style="z-index:10" onclick="runUnityLoader(); style.display='none';">Play</button>
      <div class="logo"></div>
      <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
      <div class="title">%UNITY_WEB_NAME%</div>
    </div>
    <script type='text/javascript'>
  /*    var Module = {
        TOTAL_MEMORY: %UNITY_WEBGL_TOTAL_MEMORY%,
        errorhandler: null,            // arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
        compatibilitycheck: null,
        dataUrl: "%UNITY_WEBGL_DATA_FOLDER%/%UNITY_WEBGL_FILE_NAME%.data",
        codeUrl: "%UNITY_WEBGL_DATA_FOLDER%/%UNITY_WEBGL_MAIN_MODULE_FILE_NAME%.js",
        memUrl: "%UNITY_WEBGL_DATA_FOLDER%/%UNITY_WEBGL_MAIN_MODULE_FILE_NAME%.mem",
      };*/
      function runUnityLoader() {
        var script = document.createElement("script");
        script.src = "Build/UnityLoader.js";
        document.body.appendChild(script);
      }
    </script>
  </body>
</html>
