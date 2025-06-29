<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Viewer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      background: #000;
      color: white;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .controls {
      position: absolute;
      top: 20px;
      left: 20px;
      display: flex;
      gap: 10px;
    }

    .controls button,
    .controls a {
      padding: 10px 15px;
      background: #fff;
      color: #000;
      text-decoration: none;
      border: none;
      cursor: pointer;
      font-weight: bold;
      border-radius: 5px;
    }

    img, video {
      max-width: 100%;
      max-height: 90vh;
      object-fit: contain;
    }
  </style>
</head>
<body>
  <div class="controls">
    <button onclick="history.back()">← Back</button>
    <a id="downloadBtn" download>Download</a>
  </div>

  <div id="mediaContainer"></div>

  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const src = urlParams.get('src');
    const type = urlParams.get('type');

    const mediaContainer = document.getElementById('mediaContainer');
    const downloadBtn = document.getElementById('downloadBtn');
    downloadBtn.href = src;

    if (type === 'image') {
      const img = document.createElement('img');
      img.src = src;
      mediaContainer.appendChild(img);
    } else if (type === 'video') {
      const video = document.createElement('video');
      video.src = src;
      video.controls = true;
      video.autoplay = true;
      mediaContainer.appendChild(video);
    }
  </script>
</body>
</html>
