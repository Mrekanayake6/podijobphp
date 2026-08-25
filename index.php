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
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css"
        rel="stylesheet" />
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

    <section class="results-section" id="resu">

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


    <section class="about-podijob" id="about">

        <div class="about-container">

            <!-- LEFT CONTENT -->
            <div class="about-content">

                <span class="about-badge">
                    <i class="ri-hand-heart-line"></i>

                    <span
                        data-en="About Podi Job"
                        data-si="පොඩි ජොබ් ගැන">
                        About Podi Job
                    </span>
                </span>


                <h2>
                    <span
                        data-en="Small Jobs."
                        data-si="පොඩි වැඩ.">
                        Small Jobs.
                    </span>

                    <span
                        data-en="Big Opportunities."
                        data-si="විශාල අවස්ථා.">
                        Big Opportunities.
                    </span>
                </h2>


                <p
                    class="about-main-text"
                    data-en="Podi Job is a simple platform that connects people who need everyday services with trusted workers in their local area."
                    data-si="පොඩි ජොබ් යනු දෛනික සේවාවන් අවශ්‍ය පුද්ගලයින් ඔවුන්ගේ ප්‍රදේශයේ විශ්වාසදායක සේවකයින් සමඟ සම්බන්ධ කරන සරල වේදිකාවකි.">
                    Podi Job is a simple platform that connects people who need
                    everyday services with trusted workers in their local area.
                </p>


                <p
                    class="about-description"
                    data-en="From electrical work and plumbing to painting, cleaning, gardening and repairs, Podi Job makes it easier to find the right person for the job while helping local workers discover new opportunities."
                    data-si="විදුලි වැඩ, ජලනල වැඩ, පින්තාරු කිරීම, පිරිසිදු කිරීම, ගෙවතු වැඩ සහ අලුත්වැඩියා කිරීම් වැනි විවිධ සේවාවන් සඳහා සුදුසු පුද්ගලයා සොයා ගැනීම පහසු කරන අතර, දේශීය සේවකයින්ට නව රැකියා අවස්ථා සොයා ගැනීමටද පොඩි ජොබ් උපකාරී වේ.">
                    From electrical work and plumbing to painting, cleaning,
                    gardening and repairs, Podi Job makes it easier to find the
                    right person for the job while helping local workers discover
                    new opportunities.
                </p>


                <!-- BUTTONS -->
                <div class="about-actions">

                    <a href="#resu" class="about-btn primary">

                        <span
                            data-en="Find a Worker"
                            data-si="සේවකයෙකු සොයන්න">
                            Find a Worker
                        </span>

                        <i class="ri-arrow-right-line"></i>

                    </a>


                    <a href="#register" class="about-btn secondary">

                        <span
                            data-en="Join as a Worker"
                            data-si="සේවකයෙකු ලෙස එක්වන්න">
                            Join as a Worker
                        </span>

                    </a>

                </div>

            </div>


            <!-- RIGHT VISUAL -->
            <div class="about-visual">

                <!-- MAIN CARD -->
                <div class="about-card main-card">

                    <div class="about-icon">
                        <i class="ri-user-community-line"></i>
                    </div>

                    <div>

                        <strong
                            data-en="People Connecting"
                            data-si="මිනිසුන් සම්බන්ධ කිරීම">
                            People Connecting
                        </strong>

                        <span
                            data-en="Customers & Workers"
                            data-si="පාරිභෝගිකයින් සහ සේවකයින්">
                            Customers & Workers
                        </span>

                    </div>

                </div>


                <!-- CARD ONE -->
                <div class="about-card small-card card-one">

                    <div class="mini-icon">
                        <i class="ri-tools-line"></i>
                    </div>

                    <div>

                        <strong
                            data-en="Small Jobs"
                            data-si="පොඩි වැඩ">
                            Small Jobs
                        </strong>

                        <span
                            data-en="Everyday Services"
                            data-si="දෛනික සේවාවන්">
                            Everyday Services
                        </span>

                    </div>

                </div>


                <!-- CARD TWO -->
                <div class="about-card small-card card-two">

                    <div class="mini-icon">
                        <i class="ri-star-smile-line"></i>
                    </div>

                    <div>

                        <strong
                            data-en="Trusted Workers"
                            data-si="විශ්වාසදායක සේවකයින්">
                            Trusted Workers
                        </strong>

                        <span
                            data-en="Ratings & Reviews"
                            data-si="ශ්‍රේණිගත කිරීම් සහ අදහස්">
                            Ratings & Reviews
                        </span>

                    </div>

                </div>


                <div class="about-circle circle-one"></div>
                <div class="about-circle circle-two"></div>

            </div>

        </div>

    </section>



    <script src="index.js"></script>
    <?php include 'footer.php'; ?>

</body>

</html>