<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raspberry Pi</title>
  <style>
    html, body {
      margin: 0;
      height: 100%;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    img {
      max-width: 100%;
      max-height: 100%;
      animation: spin 30s linear infinite;
      transform-origin: 50% 59%;
    }
    @keyframes spin {
      from { transform: rotate(0deg); }
      to   { transform: rotate(360deg); }
    }
  </style>
</head>
<body>
  <img src="raspberrypi.png" alt="Raspberry Pi">
</body>
</html>
