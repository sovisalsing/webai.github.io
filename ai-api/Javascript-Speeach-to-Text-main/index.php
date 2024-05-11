<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Speech to Text</title>

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
      background: #000000;
    }

    .container-cover {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin-top: 40px;
      margin-bottom: 40px;
      /* Assuming you want it to cover the viewport height */
    }

    section {
      background: #000000;
    }
  </style>
</head>

<body>
  <section style="width: 100%;">
    <div class="container-bread-crumb">
      <div class="head-bar">
        <a href="index.php" class="logo"><span style="color: #ffffff;">Web AI</span><span style="color:#32de84;">.</span></a>

        <a href="../index.php" class="breadcrumb" style="color: #32de84;" onmouseover="this.style.color='#2bb673';" onmouseout="this.style.color='#32de84';">AI & API</a>

      </div>
    </div>

    <div class="container-cover">
      <div class="container">
        <p class="heading">Speech to Text</p>
        <div class="options">
          <div class="anguage">
            <p>Language</p>
            <select name="input-language" id="language"></select>
          </div>
        </div>
        <div class="line"></div>
        <button class="btn record">
          <div class="icon">
            <ion-icon name="mic-outline"></ion-icon>
            <img src="bars.svg" alt="" />
          </div>
          <p>Start Listening</p>
        </button>
        <p class="heading">Result :</p>
        <div class="result" spellcheck="false" placeholder="Text will be shown here">
          <p class="interim"></p>
        </div>
        <div class="buttons">
          <button class="btn clear">
            <ion-icon name="trash-outline"></ion-icon>
            <p>Clear</p>
          </button>
          <button class="btn download" disabled>
            <ion-icon name="cloud-download-outline"></ion-icon>
            <p>Download</p>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- IONICONS -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- LANGUAGES -->
  <script src="languages.js"></script>

  <!-- SCRIPT -->
  <script src="script.js"></script>
</body>

</html>