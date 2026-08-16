const jobs = [

    {
        title: "Electrician",
        sinhala: "විදුලි කාර්මික",

        category: "Electrical",
        categorySi: "විදුලි කාර්මික",

        city: "Kandy",
        location: "මහනුවර",

        price: "Rs 3500 / Day",

        image:
            "https://randomuser.me/api/portraits/men/45.jpg",

        rating: "4.8"
    },

    {
        title: "Mason",
        sinhala: "පෙදරේරු",

        category: "Construction",
        categorySi: "ඉදිකිරීම්",

        city: "Colombo",
        location: "කොළඹ",

        price: "Rs 4500 / Day",

        image:
            "https://randomuser.me/api/portraits/men/32.jpg",

        rating: "4.7"
    },

    {
        title: "Plumber",
        sinhala: "ජලනල කාර්මික",

        category: "Plumbing",
        categorySi: "ජලනල කාර්මික",

        city: "Kegalle",
        location: "කෑගල්ල",

        price: "Rs 3000 / Day",

        image:
            "https://randomuser.me/api/portraits/men/12.jpg",

        rating: "4.9"
    },

    {
        title: "Driver",
        sinhala: "රියදුරු",

        category: "Driving",
        categorySi: "රියදුරු",

        city: "Galle",
        location: "ගාල්ල",

        price: "Rs 5000 / Day",

        image:
            "https://randomuser.me/api/portraits/men/65.jpg",

        rating: "4.6"
    },

    {
        title: "Painter",
        sinhala: "පින්තාරු කාර්මික",

        category: "Painter",
        categorySi: "පින්තාරු කාර්මික",

        city: "Kandy",
        location: "මහනුවර",

        price: "Rs 4000 / Day",

        image:
            "https://randomuser.me/api/portraits/men/75.jpg",

        rating: "4.8"
    }

];


/* =========================================================
   DOM ELEMENTS
========================================================= */

let grid;
let count;
let searchInput;
let category;
let city;
let district;

let pagination;

let currentPage = 1;

/*
   TESTING:
   3 jobs per page.
   
   Later jobs 6+ unaama meka 6 karanna puluwan.
*/
const jobsPerPage = 3;

let currentJobsData = [];


/* =========================================================
   GET DOM ELEMENTS
========================================================= */

function initIndexElements() {

    grid =
        document.querySelector(".jobs-grid");

    count =
        document.querySelector(".result-count");

    searchInput =
        document.getElementById("searchInput");

    category =
        document.getElementById("category");

    city =
        document.getElementById("city");

    district =
        document.getElementById("district");

    pagination =
        document.getElementById("pagination");

}


/* =========================================================
   TRANSLATE INDEX PAGE
========================================================= */

function translateIndexPage() {

    document
        .querySelectorAll("[data-si][data-en]")
        .forEach(function (el) {

            const si =
                el.getAttribute("data-si");

            const en =
                el.getAttribute("data-en");


            /* INPUT / TEXTAREA */

            if (
                el.tagName === "INPUT" ||
                el.tagName === "TEXTAREA"
            ) {

                el.placeholder =
                    language === "si"
                        ? si
                        : en;

                return;
            }


            /* SELECT OPTION */

            if (el.tagName === "OPTION") {

                el.textContent =
                    language === "si"
                        ? si
                        : en;

                return;
            }


            /* NORMAL ELEMENT */

            el.textContent =
                language === "si"
                    ? si
                    : en;

        });

}


/* =========================================================
   LOAD JOBS
========================================================= */

function loadJobs(data) {

    if (!grid) {

        console.error(
            ".jobs-grid element not found."
        );

        return;
    }


    /*
       Save current data.

       This is important because pagination
       must paginate filtered results too.
    */

    currentJobsData = data;


    grid.innerHTML = "";


    /* =====================================================
       RESULT COUNT
    ===================================================== */

    if (count) {

        count.textContent =
            `${data.length} ${
                language === "si"
                    ? "ප්‍රතිඵල හමු විය"
                    : "Results Found"
            }`;

    }


    /* =====================================================
       NO RESULTS
    ===================================================== */

    if (data.length === 0) {

        grid.innerHTML = `

            <div style="
                grid-column:1/-1;
                text-align:center;
                padding:50px 20px;
                color:#617080;
            ">

                ${
                    language === "si"
                        ? "රැකියා හමු නොවීය."
                        : "No jobs found."
                }

            </div>

        `;


        /*
           Hide pagination when no results
        */

        renderPagination();


        return;
    }


    /* =====================================================
       PAGINATION CALCULATION
    ===================================================== */

    const totalPages =
        Math.ceil(
            data.length / jobsPerPage
        );


    /*
       If current page is greater than
       available pages, return to page 1.
    */

    if (currentPage > totalPages) {

        currentPage = 1;

    }


    const startIndex =
        (currentPage - 1) * jobsPerPage;


    const endIndex =
        startIndex + jobsPerPage;


    const pageJobs =
        data.slice(
            startIndex,
            endIndex
        );


    /* =====================================================
       JOB CARDS
    ===================================================== */

    pageJobs.forEach(function (job) {

        const card =
            document.createElement("div");


        card.className =
            "job-card";


        card.innerHTML = `

            <div class="job-top">

                <div class="job-info">

                    <h3>

                        ${
                            language === "si"
                                ? job.sinhala
                                : job.title
                        }

                    </h3>


                    <div class="job-meta">

                        📍

                        ${
                            language === "si"
                                ? job.location
                                : job.city
                        }

                        <br>

                        🛠

                        ${
                            language === "si"
                                ? job.categorySi
                                : job.category
                        }

                        <br>

                        ⭐ ${job.rating}

                    </div>

                </div>


                <img
                    src="${job.image}"
                    class="worker-image"
                    alt="${job.title}"
                >

            </div>


            <div class="price">

                ${job.price}

            </div>


            <a
                href="workerprofile.php"
                class="profile-btn"
            >

                ${
                    language === "si"
                        ? "පැතිකඩ බලන්න"
                        : "View Profile"
                }

            </a>

        `;


        grid.appendChild(card);

    });


    /* =====================================================
       PAGINATION
    ===================================================== */

    renderPagination();

}


/* =========================================================
   PAGINATION
========================================================= */

function renderPagination() {

    /*
       If pagination element does not exist,
       don't crash the whole JS.
    */

    if (!pagination) {

        console.warn(
            "#pagination element not found."
        );

        return;
    }


    /*
       Clear old buttons
    */

    pagination.innerHTML = "";


    /*
       Calculate total pages
    */

    const totalPages =
        Math.ceil(
            currentJobsData.length /
            jobsPerPage
        );


    /*
       No pagination needed
    */

    if (totalPages <= 1) {

        pagination.style.display = "none";

        return;
    }


    /*
       Show pagination
    */

    pagination.style.display = "flex";


    /* =====================================================
       PREVIOUS BUTTON
    ===================================================== */

    const prevButton =
        document.createElement("button");


    prevButton.type =
        "button";


    prevButton.className =
        "pagination-btn";


    prevButton.innerHTML =
        "‹";


    prevButton.setAttribute(
        "aria-label",
        language === "si"
            ? "පෙර පිටුව"
            : "Previous page"
    );


    prevButton.disabled =
        currentPage === 1;


    prevButton.addEventListener(
        "click",
        function () {

            if (currentPage > 1) {

                currentPage--;

                loadJobs(
                    currentJobsData
                );

                scrollToResults();

            }

        }
    );


    pagination.appendChild(
        prevButton
    );


    /* =====================================================
       PAGE NUMBERS
    ===================================================== */

    for (
        let i = 1;
        i <= totalPages;
        i++
    ) {

        const pageButton =
            document.createElement("button");


        pageButton.type =
            "button";


        pageButton.className =
            "pagination-btn";


        /*
           Active page
        */

        if (i === currentPage) {

            pageButton.classList.add(
                "active"
            );

        }


        pageButton.textContent =
            i;


        pageButton.setAttribute(
            "aria-label",
            language === "si"
                ? `පිටුව ${i}`
                : `Page ${i}`
        );


        pageButton.addEventListener(
            "click",
            function () {

                /*
                   Don't reload same page
                */

                if (
                    currentPage === i
                ) {

                    return;
                }


                currentPage =
                    i;


                loadJobs(
                    currentJobsData
                );


                scrollToResults();

            }
        );


        pagination.appendChild(
            pageButton
        );

    }


    /* =====================================================
       NEXT BUTTON
    ===================================================== */

    const nextButton =
        document.createElement("button");


    nextButton.type =
        "button";


    nextButton.className =
        "pagination-btn";


    nextButton.innerHTML =
        "›";


    nextButton.setAttribute(
        "aria-label",
        language === "si"
            ? "ඊළඟ පිටුව"
            : "Next page"
    );


    nextButton.disabled =
        currentPage === totalPages;


    nextButton.addEventListener(
        "click",
        function () {

            if (
                currentPage < totalPages
            ) {

                currentPage++;

                loadJobs(
                    currentJobsData
                );

                scrollToResults();

            }

        }
    );


    pagination.appendChild(
        nextButton
    );

}


/* =========================================================
   SCROLL TO RESULTS
========================================================= */

function scrollToResults() {

    const resultsSection =
        document.querySelector(
            ".results-section"
        );


    if (!resultsSection) {

        return;
    }


    /*
       Scroll to results section
    */

    resultsSection.scrollIntoView({
        behavior: "smooth",
        block: "start"
    });

}


/* =========================================================
   SEARCH JOBS
========================================================= */

function searchJobs() {

    if (!searchInput) {

        return;
    }


    const text =
        searchInput.value
            .trim()
            .toLowerCase();


    const selectedCategory =
        category
            ? category.value
            : "All";


    const selectedCity =
        city
            ? city.value
            : "All";


    const selectedDistrict =
        district
            ? district.value
            : "All";


    /* =====================================================
       FILTER JOBS
    ===================================================== */

    const result =
        jobs.filter(function (job) {


            /* =================================================
               TEXT SEARCH
            ================================================= */

            const textMatch =

                !text ||

                job.title
                    .toLowerCase()
                    .includes(text) ||

                job.sinhala
                    .includes(text) ||

                job.category
                    .toLowerCase()
                    .includes(text) ||

                job.categorySi
                    .includes(text) ||

                job.city
                    .toLowerCase()
                    .includes(text) ||

                job.location
                    .includes(text);


            /* =================================================
               CATEGORY
            ================================================= */

            const categoryMatch =

                selectedCategory === "All" ||

                job.category ===
                selectedCategory;


            /* =================================================
               CITY
            ================================================= */

            const cityMatch =

                selectedCity === "All" ||

                job.city ===
                selectedCity;


            /* =================================================
               DISTRICT
            ================================================= */

            const districtMatch =

                selectedDistrict === "All" ||

                job.city ===
                selectedDistrict;


            return (

                textMatch &&

                categoryMatch &&

                cityMatch &&

                districtMatch

            );

        });


    /*
       IMPORTANT:
       Search always starts from page 1.
    */

    currentPage = 1;


    /*
       Load filtered results.
    */

    loadJobs(result);

}


/* =========================================================
   SET INDEX LANGUAGE
========================================================= */

function setIndexLanguage(lang) {

    /*
       ONLY en / si
    */

    if (
        lang !== "en" &&
        lang !== "si"
    ) {

        lang = "en";

    }


    /*
       Header.js already has:

       let language = "en";

       So use that variable.
    */

    language = lang;


    /* =====================================================
       SAVE LANGUAGE
    ===================================================== */

    localStorage.setItem(
        "podijobLanguage",
        language
    );


    /* =====================================================
       TRANSLATE INDEX
    ===================================================== */

    translateIndexPage();


    /* =====================================================
       RELOAD JOB CARDS
    ===================================================== */

    /*
       Keep current page when changing language.
    */

    loadJobs(
        currentJobsData.length
            ? currentJobsData
            : jobs
    );


    /* =====================================================
       HTML LANGUAGE
    ===================================================== */

    document.documentElement.lang =
        language === "si"
            ? "si"
            : "en";


    /*
       UPDATE HEADER BUTTONS
    */

    if (
        typeof changeLanguage ===
        "function"
    ) {

        changeLanguage(
            language
        );

    }

}


/* =========================================================
   LANGUAGE BUTTON LISTENER
========================================================= */

function initLanguageButtons() {

    document.addEventListener(
        "click",
        function (event) {


            const siButton =
                event.target.closest(
                    "#siBtn"
                );


            const enButton =
                event.target.closest(
                    "#enBtn"
                );


            /* =================================================
               SINHALA
            ================================================= */

            if (siButton) {

                setIndexLanguage(
                    "si"
                );

                return;

            }


            /* =================================================
               ENGLISH
            ================================================= */

            if (enButton) {

                setIndexLanguage(
                    "en"
                );

                return;

            }

        }
    );

}


/* =========================================================
   SEARCH EVENTS
========================================================= */

function initSearchEvents() {


    /* =====================================================
       SEARCH BUTTON
    ===================================================== */

    const searchBtn =
        document.querySelector(
            ".search-btn"
        );


    if (searchBtn) {

        searchBtn.addEventListener(
            "click",
            searchJobs
        );

    }


    /* =====================================================
       ENTER KEY
    ===================================================== */

    if (searchInput) {

        searchInput.addEventListener(
            "keyup",
            function (event) {

                if (
                    event.key ===
                    "Enter"
                ) {

                    searchJobs();

                }

            }
        );

    }


    /* =====================================================
       CATEGORY
    ===================================================== */

    if (category) {

        category.addEventListener(
            "change",
            searchJobs
        );

    }


    /* =====================================================
       CITY
    ===================================================== */

    if (city) {

        city.addEventListener(
            "change",
            searchJobs
        );

    }


    /* =====================================================
       DISTRICT
    ===================================================== */

    if (district) {

        district.addEventListener(
            "change",
            searchJobs
        );

    }

}


/* =========================================================
   INITIALIZE INDEX
========================================================= */

document.addEventListener(
    "DOMContentLoaded",
    function () {


        /* =================================================
           GET ELEMENTS
        ================================================= */

        initIndexElements();


        /*
           Make sure pagination exists.
        */

        if (!pagination) {

            console.warn(
                "Pagination container #pagination not found."
            );

        }


        /* =================================================
           GET SAVED LANGUAGE
        ================================================= */

        const savedLanguage =
            localStorage.getItem(
                "podijobLanguage"
            ) || "en";


        language =
            savedLanguage;


        /* =================================================
           TRANSLATE INDEX
        ================================================= */

        translateIndexPage();


        /* =================================================
           LOAD JOBS
        ================================================= */

        currentPage = 1;

        currentJobsData = jobs;

        loadJobs(jobs);


        /* =================================================
           SEARCH
        ================================================= */

        initSearchEvents();


        /* =================================================
           LANGUAGE BUTTONS
        ================================================= */

        initLanguageButtons();


        /* =================================================
           UPDATE HTML LANGUAGE
        ================================================= */

        document.documentElement.lang =
            language === "si"
                ? "si"
                : "en";


        /*
           Tell header.js to update
           English / Sinhala active button.
        */

        if (
            typeof changeLanguage ===
            "function"
        ) {

            changeLanguage(
                language
            );

        }

    }

);