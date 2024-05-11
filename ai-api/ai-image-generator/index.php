<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Image Generator</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="styles2.css"> -->

    <!-- Favicons -->
    <link href="logo/web-ai.png" rel="icon">

    <style>
        /* App */
        .titles {
            color: #32de84;
            /* Andriod Green */
        }

        .container-section {
            background-color: #000000;
        }

        /* Header Breadcrumb */
        .head-bar {
            width: 100%;
            height: 70px;
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

        span {
            color: #32de84;
        }

        .breadcrumb {
            padding: 10px 20px;
            font-family: "Montserrat", sans-serif;
            font-size: 17px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: space-between;
            white-space: nowrap;
            transition: 0.3s;
        }
    </style>

</head>

<body>
    <div class="head-bar">
        <a href="index.php" class="logo">Web AI<span>.</span></a>
        <a href="../index.php" class="breadcrumb" style="color: #32de84;" onmouseover="this.style.color='#2bb673';" onmouseout="this.style.color='#32de84';">AI & API</a>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="visual" viewBox="0 0 900 600" version="1.1">
        <rect x="0" y="0" width="100vw" height="100vh" fill="#000000" />
        <path d="M0 297L8.8 277.5C17.7 258 35.3 219 53 222.2C70.7 225.3 88.3 270.7 106 291.3C123.7 312 141.3 308 159 286.7C176.7 265.3 194.3 226.7 212 221.7C229.7 216.7 247.3 245.3 265 238.3C282.7 231.3 300.3 188.7 318 184.2C335.7 179.7 353.3 213.3 371 239.8C388.7 266.3 406.3 285.7 423.8 287.7C441.3 289.7 458.7 274.3 476.2 275.8C493.7 277.3 511.3 295.7 529 285.7C546.7 275.7 564.3 237.3 582 213.7C599.7 190 617.3 181 635 202.8C652.7 224.7 670.3 277.3 688 300.7C705.7 324 723.3 318 741 296.5C758.7 275 776.3 238 794 243C811.7 248 829.3 295 847 305.5C864.7 316 882.3 290 891.2 277L900 264L900 0L891.2 0C882.3 0 864.7 0 847 0C829.3 0 811.7 0 794 0C776.3 0 758.7 0 741 0C723.3 0 705.7 0 688 0C670.3 0 652.7 0 635 0C617.3 0 599.7 0 582 0C564.3 0 546.7 0 529 0C511.3 0 493.7 0 476.2 0C458.7 0 441.3 0 423.8 0C406.3 0 388.7 0 371 0C353.3 0 335.7 0 318 0C300.3 0 282.7 0 265 0C247.3 0 229.7 0 212 0C194.3 0 176.7 0 159 0C141.3 0 123.7 0 106 0C88.3 0 70.7 0 53 0C35.3 0 17.7 0 8.8 0L0 0Z" fill="#7cc948" />
        <path d="M0 255L8.8 242.7C17.7 230.3 35.3 205.7 53 193C70.7 180.3 88.3 179.7 106 180.2C123.7 180.7 141.3 182.3 159 191.8C176.7 201.3 194.3 218.7 212 208.5C229.7 198.3 247.3 160.7 265 144.3C282.7 128 300.3 133 318 148.5C335.7 164 353.3 190 371 193.2C388.7 196.3 406.3 176.7 423.8 189.5C441.3 202.3 458.7 247.7 476.2 259.2C493.7 270.7 511.3 248.3 529 241.2C546.7 234 564.3 242 582 229.5C599.7 217 617.3 184 635 187.2C652.7 190.3 670.3 229.7 688 228.3C705.7 227 723.3 185 741 160.3C758.7 135.7 776.3 128.3 794 150.8C811.7 173.3 829.3 225.7 847 230C864.7 234.3 882.3 190.7 891.2 168.8L900 147L900 0L891.2 0C882.3 0 864.7 0 847 0C829.3 0 811.7 0 794 0C776.3 0 758.7 0 741 0C723.3 0 705.7 0 688 0C670.3 0 652.7 0 635 0C617.3 0 599.7 0 582 0C564.3 0 546.7 0 529 0C511.3 0 493.7 0 476.2 0C458.7 0 441.3 0 423.8 0C406.3 0 388.7 0 371 0C353.3 0 335.7 0 318 0C300.3 0 282.7 0 265 0C247.3 0 229.7 0 212 0C194.3 0 176.7 0 159 0C141.3 0 123.7 0 106 0C88.3 0 70.7 0 53 0C35.3 0 17.7 0 8.8 0L0 0Z" fill="#69c252" />
        <path d="M0 192L8.8 194C17.7 196 35.3 200 53 208.5C70.7 217 88.3 230 106 230.7C123.7 231.3 141.3 219.7 159 203.5C176.7 187.3 194.3 166.7 212 174.2C229.7 181.7 247.3 217.3 265 223.2C282.7 229 300.3 205 318 203.2C335.7 201.3 353.3 221.7 371 227.2C388.7 232.7 406.3 223.3 423.8 203C441.3 182.7 458.7 151.3 476.2 133.2C493.7 115 511.3 110 529 130.5C546.7 151 564.3 197 582 221.8C599.7 246.7 617.3 250.3 635 234.7C652.7 219 670.3 184 688 175C705.7 166 723.3 183 741 180.5C758.7 178 776.3 156 794 167.5C811.7 179 829.3 224 847 221.2C864.7 218.3 882.3 167.7 891.2 142.3L900 117L900 0L891.2 0C882.3 0 864.7 0 847 0C829.3 0 811.7 0 794 0C776.3 0 758.7 0 741 0C723.3 0 705.7 0 688 0C670.3 0 652.7 0 635 0C617.3 0 599.7 0 582 0C564.3 0 546.7 0 529 0C511.3 0 493.7 0 476.2 0C458.7 0 441.3 0 423.8 0C406.3 0 388.7 0 371 0C353.3 0 335.7 0 318 0C300.3 0 282.7 0 265 0C247.3 0 229.7 0 212 0C194.3 0 176.7 0 159 0C141.3 0 123.7 0 106 0C88.3 0 70.7 0 53 0C35.3 0 17.7 0 8.8 0L0 0Z" fill="#57bb5a" />
        <path d="M0 230L8.8 224.8C17.7 219.7 35.3 209.3 53 188.5C70.7 167.7 88.3 136.3 106 134.8C123.7 133.3 141.3 161.7 159 165.2C176.7 168.7 194.3 147.3 212 147.2C229.7 147 247.3 168 265 171.5C282.7 175 300.3 161 318 161.3C335.7 161.7 353.3 176.3 371 172.7C388.7 169 406.3 147 423.8 149.7C441.3 152.3 458.7 179.7 476.2 183.5C493.7 187.3 511.3 167.7 529 171.3C546.7 175 564.3 202 582 214C599.7 226 617.3 223 635 219.7C652.7 216.3 670.3 212.7 688 200C705.7 187.3 723.3 165.7 741 163.2C758.7 160.7 776.3 177.3 794 171.3C811.7 165.3 829.3 136.7 847 128.2C864.7 119.7 882.3 131.3 891.2 137.2L900 143L900 0L891.2 0C882.3 0 864.7 0 847 0C829.3 0 811.7 0 794 0C776.3 0 758.7 0 741 0C723.3 0 705.7 0 688 0C670.3 0 652.7 0 635 0C617.3 0 599.7 0 582 0C564.3 0 546.7 0 529 0C511.3 0 493.7 0 476.2 0C458.7 0 441.3 0 423.8 0C406.3 0 388.7 0 371 0C353.3 0 335.7 0 318 0C300.3 0 282.7 0 265 0C247.3 0 229.7 0 212 0C194.3 0 176.7 0 159 0C141.3 0 123.7 0 106 0C88.3 0 70.7 0 53 0C35.3 0 17.7 0 8.8 0L0 0Z" fill="#46b462" />
        <path d="M0 159L8.8 163.5C17.7 168 35.3 177 53 175C70.7 173 88.3 160 106 153C123.7 146 141.3 145 159 149.5C176.7 154 194.3 164 212 155.3C229.7 146.7 247.3 119.3 265 108.8C282.7 98.3 300.3 104.7 318 114.8C335.7 125 353.3 139 371 148.8C388.7 158.7 406.3 164.3 423.8 162.8C441.3 161.3 458.7 152.7 476.2 140C493.7 127.3 511.3 110.7 529 105.5C546.7 100.3 564.3 106.7 582 110C599.7 113.3 617.3 113.7 635 107C652.7 100.3 670.3 86.7 688 83C705.7 79.3 723.3 85.7 741 98C758.7 110.3 776.3 128.7 794 139.3C811.7 150 829.3 153 847 154C864.7 155 882.3 154 891.2 153.5L900 153L900 0L891.2 0C882.3 0 864.7 0 847 0C829.3 0 811.7 0 794 0C776.3 0 758.7 0 741 0C723.3 0 705.7 0 688 0C670.3 0 652.7 0 635 0C617.3 0 599.7 0 582 0C564.3 0 546.7 0 529 0C511.3 0 493.7 0 476.2 0C458.7 0 441.3 0 423.8 0C406.3 0 388.7 0 371 0C353.3 0 335.7 0 318 0C300.3 0 282.7 0 265 0C247.3 0 229.7 0 212 0C194.3 0 176.7 0 159 0C141.3 0 123.7 0 106 0C88.3 0 70.7 0 53 0C35.3 0 17.7 0 8.8 0L0 0Z" fill="#34ac68" />
        <path d="M0 98L8.8 93.2C17.7 88.3 35.3 78.7 53 75.3C70.7 72 88.3 75 106 79.5C123.7 84 141.3 90 159 86.3C176.7 82.7 194.3 69.3 212 77.7C229.7 86 247.3 116 265 125.5C282.7 135 300.3 124 318 124.2C335.7 124.3 353.3 135.7 371 127.5C388.7 119.3 406.3 91.7 423.8 88.5C441.3 85.3 458.7 106.7 476.2 112.8C493.7 119 511.3 110 529 98.7C546.7 87.3 564.3 73.7 582 81.2C599.7 88.7 617.3 117.3 635 130.8C652.7 144.3 670.3 142.7 688 129C705.7 115.3 723.3 89.7 741 87.7C758.7 85.7 776.3 107.3 794 121.3C811.7 135.3 829.3 141.7 847 138C864.7 134.3 882.3 120.7 891.2 113.8L900 107L900 0L891.2 0C882.3 0 864.7 0 847 0C829.3 0 811.7 0 794 0C776.3 0 758.7 0 741 0C723.3 0 705.7 0 688 0C670.3 0 652.7 0 635 0C617.3 0 599.7 0 582 0C564.3 0 546.7 0 529 0C511.3 0 493.7 0 476.2 0C458.7 0 441.3 0 423.8 0C406.3 0 388.7 0 371 0C353.3 0 335.7 0 318 0C300.3 0 282.7 0 265 0C247.3 0 229.7 0 212 0C194.3 0 176.7 0 159 0C141.3 0 123.7 0 106 0C88.3 0 70.7 0 53 0C35.3 0 17.7 0 8.8 0L0 0Z" fill="#23a46d" />
        <path d="M0 37L8.8 37.5C17.7 38 35.3 39 53 43.3C70.7 47.7 88.3 55.3 106 55.5C123.7 55.7 141.3 48.3 159 54.8C176.7 61.3 194.3 81.7 212 90.5C229.7 99.3 247.3 96.7 265 85.5C282.7 74.3 300.3 54.7 318 52.2C335.7 49.7 353.3 64.3 371 72.8C388.7 81.3 406.3 83.7 423.8 76.3C441.3 69 458.7 52 476.2 52.2C493.7 52.3 511.3 69.7 529 77.5C546.7 85.3 564.3 83.7 582 79.5C599.7 75.3 617.3 68.7 635 66.8C652.7 65 670.3 68 688 73C705.7 78 723.3 85 741 80.8C758.7 76.7 776.3 61.3 794 60.2C811.7 59 829.3 72 847 71.5C864.7 71 882.3 57 891.2 50L900 43L900 0L891.2 0C882.3 0 864.7 0 847 0C829.3 0 811.7 0 794 0C776.3 0 758.7 0 741 0C723.3 0 705.7 0 688 0C670.3 0 652.7 0 635 0C617.3 0 599.7 0 582 0C564.3 0 546.7 0 529 0C511.3 0 493.7 0 476.2 0C458.7 0 441.3 0 423.8 0C406.3 0 388.7 0 371 0C353.3 0 335.7 0 318 0C300.3 0 282.7 0 265 0C247.3 0 229.7 0 212 0C194.3 0 176.7 0 159 0C141.3 0 123.7 0 106 0C88.3 0 70.7 0 53 0C35.3 0 17.7 0 8.8 0L0 0Z" fill="#129c71" />
        <path d="M0 51L8.8 53.5C17.7 56 35.3 61 53 57C70.7 53 88.3 40 106 39.2C123.7 38.3 141.3 49.7 159 49.7C176.7 49.7 194.3 38.3 212 33.8C229.7 29.3 247.3 31.7 265 33.8C282.7 36 300.3 38 318 42.8C335.7 47.7 353.3 55.3 371 54.7C388.7 54 406.3 45 423.8 41.2C441.3 37.3 458.7 38.7 476.2 44.8C493.7 51 511.3 62 529 63.8C546.7 65.7 564.3 58.3 582 54.3C599.7 50.3 617.3 49.7 635 46.3C652.7 43 670.3 37 688 34.7C705.7 32.3 723.3 33.7 741 38.7C758.7 43.7 776.3 52.3 794 51.7C811.7 51 829.3 41 847 35C864.7 29 882.3 27 891.2 26L900 25L900 0L891.2 0C882.3 0 864.7 0 847 0C829.3 0 811.7 0 794 0C776.3 0 758.7 0 741 0C723.3 0 705.7 0 688 0C670.3 0 652.7 0 635 0C617.3 0 599.7 0 582 0C564.3 0 546.7 0 529 0C511.3 0 493.7 0 476.2 0C458.7 0 441.3 0 423.8 0C406.3 0 388.7 0 371 0C353.3 0 335.7 0 318 0C300.3 0 282.7 0 265 0C247.3 0 229.7 0 212 0C194.3 0 176.7 0 159 0C141.3 0 123.7 0 106 0C88.3 0 70.7 0 53 0C35.3 0 17.7 0 8.8 0L0 0Z" fill="#009473" />
    </svg>

    <header>
        <h1>AniaAI Image Generator</h1>
    </header>
    <section class="images-section"></section>
    <section class="bottom-section">
        <section class="input-container">
            <input>
            <div id="submit-icon">➢</div>
        </section>
    </section>

    <script src="app.js"></script>
</body>

</html>