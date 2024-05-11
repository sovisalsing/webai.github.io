<!DOCTYPE html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <title>Text to Speech</title>

  <style>
    /* Header Breadcrumb */
    .head-bar {
      width: 100%;
      height: 70px;
      /* background-color: #28282B; */
      background-color: rgb(40, 40, 43, 0.7);
      color: #ffffff;
      display: flex;
      justify-content: space-between;
      border-radius: 10px;
    }

    .logo {
      font-size: 24px;
      /* margin: 0; */
      margin: 20px;
      font-weight: 600;
      font-family: "Montserrat", sans-serif;
    }

    a {
      color: #ffffff;
      text-decoration: none;
    }

    .breadcrumb {
      padding: 22px 20px;
      font-family: "Montserrat", sans-serif;
      font-size: 17px;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: space-between;
      white-space: nowrap;
      transition: 0.3s;
    }

    .container-bread-crumb {
      /* background: #000000; */
    }
  </style>
</head>

<body class="container mt-5 bg-light">

  <div class="container-bread-crumb">
    <div class="head-bar">
      <a href="index.php" class="logo"><span style="color: #ffffff;">Web AI</span><span style="color:#32de84;">.</span></a>

      <a href="../index.php" class="breadcrumb" style="color: #32de84;" onmouseover="this.style.color='#2bb673';" onmouseout="this.style.color='#32de84';">AI & API</a>

    </div>
  </div>

  <div style="margin-bottom: 30px;"></div>

  <h1 class="text-dark">Text to Speech</h1>
  <div class="row">
    <div class="col-md-5">
      <p class="lead text-dark mt-4">Select Voice</p>

      <!-- Select Menu for Voice -->
      <select id="voices" class="form-select text-dark"></select>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-6">
      <!-- Range Slliders for Volume, Rate & Pitch -->
      <div class="d-flex mt-4 text-dark">
        <div>
          <p class="lead">Volume</p>
          <input type="range" min="0" max="1" value="1" step="0.1" id="volume" />
          <span id="volume-label" class="ms-2">1</span>
        </div>
        <div class="mx-5">
          <p class="lead">Rate</p>
          <input type="range" min="0.1" max="10" value="1" id="rate" step="0.1" />
          <span id="rate-label" class="ms-2">1</span>
        </div>
        <div>
          <p class="lead">Pitch</p>
          <input type="range" min="0" max="2" value="1" step="0.1" id="pitch" />
          <span id="pitch-label" class="ms-2">1</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Text Area  for the User to Type -->
  <textarea id="myTextarea" class="form-control bg-light text-dark mt-5 textbox-text" cols="30" rows="10" placeholder="Enter text here..."></textarea>

  <!-- Control Buttons -->
  <div class="mb-5">
    <button id="start" class="btn btn-success mt-5 me-3">Start</button>
    <button id="pause" class="btn btn-warning mt-5 me-3">Pause</button>
    <button id="resume" class="btn btn-info mt-5 me-3">Resume</button>
    <button id="cancel" class="btn btn-danger mt-5 me-3" onclick="clearTextarea()">Cancel</button>
  </div>

  <script>
    // JavaScript
    function clearTextarea() {
      document.getElementById("myTextarea").value = ""; // Clears the textarea
    }
  </script>
</body>
<script src="script.js"></script>