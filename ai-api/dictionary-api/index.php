<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Web Ai. | Dictionary API</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../images/logo2-modified.png" rel="icon">
    <link href="https://bootstrapmade.com/demo/templates/Append/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/" rel="preconnect">
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://bootstrapmade.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://bootstrapmade.com/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://bootstrapmade.com/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="https://bootstrapmade.com/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://bootstrapmade.com/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="https://bootstrapmade.com/demo/templates/Append/assets/css/main.css" rel="stylesheet">

    <!-- https://github.com/mattboldt/typed.js -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">

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
    </style>
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <div class="container-bread-crumb">
        <div class="head-bar">
            <a href="index.php" class="logo"><span style="color: #ffffff;">Web AI</span><span style="color:#32de84;">.</span></a>

            <a href="../index.php" class="breadcrumb" style="color: #32de84;" onmouseover="this.style.color='#2bb673';" onmouseout="this.style.color='#32de84';">AI & API</a>

        </div>
    </div>
    <main id="main">
        <!-- Dictionary AI -->
        <section id="web-ai-1" class="webai-page">
            <div class="container-fluid">
                <div class="px-4 py-5 my-5 text-center">
                    <!-- <img class="d-block mx-auto book-icon" src="../icons/book.svg" alt="" width="72" height="57"> -->
                    <!-- <img class="d-block mx-auto" src="../icons/book.svg" alt="" width="72" height="57" style="fill: #ffffff;"> -->
                    <svg id="i-book" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="72" height="57" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M16 7 C16 7 9 1 2 6 L2 28 C9 23 16 28 16 28 16 28 23 23 30 28 L30 6 C23 1 16 7 16 7 Z M16 7 L16 28" />
                    </svg>

                    <h1 class="display-5 fw-bold title-white">Welcome to the <span class="title">Dictionary APP API!</span></h1>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-3">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" id="searchinput" type="search" placeholder="Enter word" aria-label="Search">
                            <button class="btn btn-outline-success" id="searchbtn" type="submit">Search</button>
                        </form>
                    </div>
                    <h4 class="display-5 fw-bold" style="font-size: 30px; margin-top: 20px;"><span id="wordheading">Your
                            Word Appear Here!</span></h4>
                    <div class="col-lg-6 mx-auto">
                        <div class="container bg-light p-5" style="border-radius: 10px; height: 300px; overflow-y:scroll;">
                            <p class="lead mb-4 text-start"><span id="definition">
                                    Type your word in the searchbar at the top to see the meanings.
                                </span></p>
                        </div>
                    </div>
                </div>

                <!-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-3">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
        </div> -->
            </div>
            </div>
        </section>
        <!-- Dictionary AI End -->
    </main>

    <script>
        // Search Dictionary | searchinput & searchbtn
        const dictionary = (word) => {
            const options = {
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': 'c7652bc8cbmsh6ba89869b719900p1eae6bjsna5572da222c6',
                    'X-RapidAPI-Host': 'dictionary-by-api-ninjas.p.rapidapi.com'
                }
            };

            fetch('https://dictionary-by-api-ninjas.p.rapidapi.com/v1/dictionary?word=' + word, options)
                .then(response => response.json())
                .then((response) => {
                    wordheading.innerHTML = 'The meaning of "' + response.word + '" here:';
                    definition.innerHTML = response.definition.replace("2.", "<br>2.").replace("3.", "<br>3.").replace("4.", "<br>4.");
                    console.log(word, response);
                })
                .catch(err => console.error(err));
        }

        searchbtn.addEventListener("click", (e) => {
            e.preventDefault();
            dictionary(searchinput.value);
        })
    </script>
    <!-- Footer End -->
</body>


<!-- Mirrored from bootstrapmade.com/demo/templates/Append/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 15:11:57 GMT -->

</html>