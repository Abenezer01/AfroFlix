<!DOCTYPE html>
<!-- Our HTML5 document must start with a valid DOCTYPE -->
<html>
<head>
  <meta charset="UTF-8">
  <!-- We add a viewport meta tag for best rendering on mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AfroFlix</title>

  <style>
    .rmp-custom-overlay {
      background: rgba(255, 255, 255, 0.7);
      color: #000000;
      border: 2px solid #000000;
      position: absolute;
      left: 20px;
      top: 20px;
      font-size: 14px;
      padding: 8px;
      text-align: left;
      border-radius: 4px;
    }

    .rmp-custom-overlay > div:first {
      margin-bottom: 10px;
    }

    .rmp-custom-overlay {
       -webkit-transition-property: opacity,visibility;
       -moz-transition-property: opacity,visibility;
       transition-property: opacity,visibility;
       -webkit-transition-duration: .4s;
       -moz-transition-duration: .4s;
       transition-duration: .4s;
       -webkit-transition-timing-function: ease-in;
       -moz-transition-timing-function: ease-in;
       transition-timing-function: ease-in;
}

      .rmp-chrome .rmp-custom-overlay {
        opacity: 1;
        visibility: visible;
}

      .rmp-no-chrome .rmp-custom-overlay {
        opacity: 0;
        visibility: hidden;
}
  </style>
</head>
<body>
  <!-- Include Radiant Media Player JavaScript library -->
  <script src="https://cdn.radiantmediatechs.com/rmp/5.8.3/js/rmp.min.js"></script>
  <!-- Add a div container with a unique id - video and UI elements will be appended to this container -->
  <div id="rmpPlayer"></div>
  <!-- Set up player configuration options -->
<script src="https://cdn.radiantmediatechs.com/rmp/5.8.3/js/rmp.min.js"></script>
<div id="rmpPlayer"></div>
<script>
  var src = {
   //hls: 'http://yegnashare.com/han/vid/Minion%20Happy%20Birthday-Song%20%282%29.ts'
    mp4: '{{$episode->location}}'
    //dash:'http://192.168.106.1:1935/AfroFlix/mp4:taza.mp4/manifest.mpd'
  };

  var ccFiles = [
  ['en', 'English', 'https://www.radiantmediaplayer.com/media/cc.vtt'],
  ['fr', 'አማርኛ', 'https://www.radiantmediaplayer.com/media/cc-fr.vtt'],
  ['fr', 'ትግርኛ', 'https://www.radiantmediaplayer.com/media/cc-fr.vtt'],
  ['fr', 'Soomaali', 'https://www.radiantmediaplayer.com/media/cc-fr.vtt'],
  ['fr', 'Afaan Oromoo', 'https://www.radiantmediaplayer.com/media/cc-fr.vtt'],
];
  // player settings
  var settings = {
    licenseKey: 'Y2thbWtnZ2djYyEqXyU2dmRrPTBiPW92MnllaT9yb201ZGFzaXMzMGRiMEElXyo=',
    src: src,
    width:1920,
    height:920,
    skin: 's2',
    preload: 'auto',
    ccFiles: ccFiles,
    //crossorigin: 'anonymous',
    contentMetadata: {
      poster: [
        '{{ asset('/storage/' .$episode->poster) }}'
      ]
    }
  };
  var elementID = 'rmpPlayer';
  var rmp = new RadiantMP(elementID);
  rmp.init(settings);

  // we define our custom overlay div element
  var rmpContainer = document.getElementById(elementID);
  var rmpCustomOverlay = document.createElement('div');
  rmpCustomOverlay.className = 'rmp-custom-overlay';

  // callback that is being run when IP data is fetched from ipify servers
  function getIP(json) {
    // add public IP
    var textFieldIP = document.createElement('div');
    textFieldIP.textContent = 'Public IP: ' + json.ip;
    rmpCustomOverlay.appendChild(textFieldIP);
    // add client bandwidth
    var textFieldBW = document.createElement('div');
    textFieldBW.textContent = 'Client bandwidth: ' + Math.round(rmp.getBandwidthEstimate() / 1000) + ' kbps';
    setInterval(function () {
      textFieldBW.textContent = 'Client bandwidth: ' + Math.round(rmp.getBandwidthEstimate() / 1000) + ' kbps';
    }, 1000);
    rmpCustomOverlay.appendChild(textFieldBW);
  }
  // when ready event fires we append our custom overlay div element
  // so that this element is appended on top of other player elements
  rmpContainer.addEventListener('ready', function () {
    rmpContainer.appendChild(rmpCustomOverlay);
  });
</script>
<!-- script to get public IP address from ipify servers - https://www.ipify.org -->
<script type="application/javascript" src="https://api.ipify.org?format=jsonp&callback=getIP"></script>
</body>
</html>
