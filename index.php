<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PodiJob | Find Skilled Workers</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Noto+Sans+Sinhala:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="index.css">


</head>

<body>

    <?php include 'header.php'; ?>
    <section class="hero">

        <h1>

            <span>
                podiJOB
            </span>

            <span id="heroTitle" data-si="එකෙන් රැකියා සොයන්න" data-en="Find Jobs Easily">

                Find Jobs Easily

            </span>

        </h1>


        <p id="heroDesc" data-si="ඔබට අවශ්‍ය සේවකයන් පහසුවෙන් සොයාගන්න"
            data-en="Find skilled workers and jobs near your city">

            Find skilled workers and jobs near your city

        </p>


        <div class="search-panel">

            <input id="searchInput" data-si="රැකියාව සොයන්න" data-en="Search job / skill"
                placeholder="Search job / skill">


            <select id="category">

                <option value="All" data-si="සියලුම කාණ්ඩ" data-en="All Categories">

                    All Categories

                </option>


                <option value="Construction" data-si="පෙදරේරු" data-en="Construction">

                    Construction

                </option>


                <option value="Painter" data-si="පින්තාරු කාර්මික" data-en="Painter">

                    Painter

                </option>


                <option value="Electrical" data-si="විදුලි කාර්මික" data-en="Electrical">

                    Electrical

                </option>


                <option value="Plumbing" data-si="ජලනල කාර්මික" data-en="Plumber">

                    Plumber

                </option>


                <option value="Driving" data-si="රියදුරු" data-en="Driver">

                    Driver

                </option>

            </select>


            <select id="district">

                <option value="All" data-si="සියලුම දිස්ත්‍රික්ක" data-en="All Districts">

                    All Districts

                </option>


                <option value="Kandy" data-si="මහනුවර" data-en="Kandy">

                    Kandy

                </option>


                <option value="Kegalle" data-si="කෑගල්ල" data-en="Kegalle">

                    Kegalle

                </option>


                <option value="Galle" data-si="ගාල්ල" data-en="Galle">

                    Galle

                </option>


                <option value="Colombo" data-si="කොළඹ" data-en="Colombo">

                    Colombo

                </option>

            </select>


            <select id="city">

                <option value="All" data-si="සියලුම නගර" data-en="All Cities">

                    All Cities

                </option>


                <option value="Kandy" data-si="මහනුවර" data-en="Kandy">

                    Kandy

                </option>


                <option value="Kegalle" data-si="කෑගල්ල" data-en="Kegalle">

                    Kegalle

                </option>


                <option value="Galle" data-si="ගාල්ල" data-en="Galle">

                    Galle

                </option>


                <option value="Colombo" data-si="කොළඹ" data-en="Colombo">

                    Colombo

                </option>

            </select>


            <button class="search-btn" id="searchText" data-si="සොයන්න" data-en="Search">

                Search

            </button>

        </div>

    </section>


    <!-- =========================================================
         RESULTS
    ========================================================= -->

      <section class="results-section">

        <div class="result-header">

            <h2 id="resultTitle" data-si="ලබාගත හැකි රැකියා" data-en="Available Jobs">

                Available Jobs

            </h2>


            <div class="result-count"></div>

        </div>


        <div class="jobs-grid"></div>



         <!-- pagination -->

        <div class="pagination" id="pagination"></div>

    </section>





    <script src="index.js"></script>

</body>

</html>