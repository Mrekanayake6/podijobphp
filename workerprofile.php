<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>John Perera — Electrician | PodiJOB</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=Noto+Sans+Sinhala:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- Worker Profile CSS -->
  <link rel="stylesheet" href="workerprofile.css">
</head>

<body>

  <?php

  include 'header.php';
  ?>

 
  <section class="profile-hero">

    <div class="container">

      <div class="hero-card">

        <div class="hero-photo-wrap">

          <img
            class="hero-photo"
            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=300&h=300&fit=crop&crop=faces"
            alt="John Perera">

          <div class="verified-pin" title="Verified">
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="#070b14"
              stroke-width="3"
              stroke-linecap="round"
              stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
          </div>

        </div>


        <div class="hero-main">

          <div class="hero-name">
            John Perera
          </div>

          <div
            class="hero-role"
            data-i18n="job_electrician">
            Electrician
          </div>


          <div class="hero-meta">

            <span class="meta-item">

              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>

              Kandy, Central Province

            </span>


            <span class="meta-item">

              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>

              <span data-i18n="years_exp_8">
                8 Years Experience
              </span>

            </span>

          </div>


          <div class="badge-row">

            <span class="badge badge-verified">

              <svg
                viewBox="0 0 24 24"
                width="13"
                height="13"
                fill="none"
                stroke="currentColor"
                stroke-width="2.5">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>

              <span data-i18n="verified_worker">
                Verified Worker
              </span>

            </span>


            <span class="badge badge-available">

              <span class="dot"></span>

              <span data-i18n="available">
                Available
              </span>

            </span>


            <span class="badge badge-rating">
              ⭐ 4.8 (24
              <span data-i18n="reviews_lower">
                reviews
              </span>)
            </span>

          </div>

        </div>


        <div class="hero-actions">

          <button
            type="button"
            class="btn btn-primary"
            onclick="contactWorker()">

            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>

            <span data-i18n="contact_worker">
              Contact Worker
            </span>

          </button>


          <button
            type="button"
            class="btn btn-outline"
            onclick="requestJob()">

            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2">
              <path d="M12 5v14M5 12h14"></path>
            </svg>

            <span data-i18n="request_job">
              Request a Job
            </span>

          </button>

        </div>

      </div>

    </div>

  </section>


  <!-- =====================================================
     MAIN PROFILE
     ===================================================== -->

  <main>

    <div class="container">

      <div class="profile-layout">

        <!-- LEFT -->
        <aside class="col-left">

          <div class="card mini-card">

            <img
              class="mini-photo"
              src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200&h=200&fit=crop&crop=faces"
              alt="John Perera">

            <div class="mini-name">
              John Perera
            </div>

            <div
              class="mini-role"
              data-i18n="job_electrician">
              Electrician
            </div>


            <div
              class="badge-row"
              style="justify-content:center;margin-top:12px;">

              <span class="badge badge-available">

                <span class="dot"></span>

                <span data-i18n="available">
                  Available
                </span>

              </span>

            </div>


            <div class="mini-stats">

              <div class="mini-stat">
                <b>4.8</b>
                <span data-i18n="rating">
                  Rating
                </span>
              </div>

              <div class="mini-stat">
                <b>24</b>
                <span data-i18n="jobs_done">
                  Jobs Done
                </span>
              </div>

              <div class="mini-stat">
                <b>8y</b>
                <span data-i18n="experience">
                  Experience
                </span>
              </div>

            </div>


            <div class="mini-actions">

              <button
                type="button"
                class="btn btn-primary"
                onclick="contactWorker()"
                data-i18n="contact_worker">
                Contact Worker
              </button>

              <button
                type="button"
                class="btn btn-outline"
                onclick="requestJob()"
                data-i18n="request_job">
                Request a Job
              </button>

            </div>

          </div>

        </aside>


        <!-- RIGHT -->
        <section class="col-right">


          <!-- ABOUT -->
          <div class="card">

            <div class="card-title">

              <div class="icon-chip">
                <svg
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="12" y1="16" x2="12" y2="12"></line>
                  <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
              </div>

              <span data-i18n="about_title">
                About Me
              </span>

            </div>

            <p
              class="about-text"
              data-i18n="about_text">
              Experienced electrician with over 8 years of
              experience in residential and commercial electrical
              work. I provide reliable and safe electrical
              installation and repair services, and I always aim
              to finish every job on time and to a high standard.
            </p>

          </div>


          <!-- SKILLS -->
          <div class="card">

            <div class="card-title">

              <div class="icon-chip">
                🔧
              </div>

              <span data-i18n="skills_title">
                Skills &amp; Services
              </span>

            </div>


            <div
              class="sub-label"
              data-i18n="main_skill">
              Main Skill
            </div>

            <div class="skill-main-tag">
              ⚡
              <span data-i18n="job_electrician">
                Electrician
              </span>
            </div>


            <div
              class="sub-label"
              data-i18n="other_skills">
              Other Skills
            </div>


            <div class="pill-row">

              <span
                class="pill"
                data-i18n="skill_wiring">
                House Wiring
              </span>

              <span
                class="pill"
                data-i18n="skill_repairs">
                Electrical Repairs
              </span>

              <span
                class="pill"
                data-i18n="skill_lighting">
                Lighting Installation
              </span>

              <span
                class="pill"
                data-i18n="skill_switchboard">
                Switchboard Installation
              </span>

              <span
                class="pill"
                data-i18n="skill_maintenance">
                Maintenance
              </span>

            </div>

          </div>


          <!-- EXPERIENCE -->
          <div class="card">

            <div class="card-title">

              <div class="icon-chip">
                🎓
              </div>

              <span data-i18n="exp_title">
                Experience &amp; Qualifications
              </span>

            </div>


            <div
              class="sub-label"
              data-i18n="experience">
              Experience
            </div>

            <div class="exp-badge">
              8+
              <span data-i18n="years">
                Years
              </span>
            </div>


            <div
              class="sub-label"
              data-i18n="qualifications">
              Qualifications
            </div>


            <div class="cert-grid">

              <div class="cert-card">

                <div
                  class="cert-name"
                  data-i18n="cert1_name">
                  National Vocational Qualification —
                  Electrical Installation (NVQ Level 4)
                </div>

                <div
                  class="cert-org"
                  data-i18n="cert1_org">
                  Issued by: Vocational Training Authority
                  of Sri Lanka
                </div>

                <a
                  href="#"
                  class="cert-link"
                  data-i18n="view_certificate">
                  View Certificate
                </a>

              </div>


              <div class="cert-card">

                <div
                  class="cert-name"
                  data-i18n="cert2_name">
                  Certified Electrical Safety Practitioner
                </div>

                <div
                  class="cert-org"
                  data-i18n="cert2_org">
                  Issued by: Ceylon Electricity Board
                </div>

                <a
                  href="#"
                  class="cert-link"
                  data-i18n="view_certificate">
                  View Certificate
                </a>

              </div>

            </div>

          </div>


          <!-- PRICING -->
          <div class="card">

            <div class="card-title">

              <div class="icon-chip">
                💰
              </div>

              <span data-i18n="pricing_title">
                Services &amp; Pricing
              </span>

            </div>


            <div class="price-grid">

              <div class="price-box">

                <div
                  class="p-label"
                  data-i18n="service_rate">
                  Service Rate
                </div>

                <div class="p-value">
                  Rs. 3,500
                  <span data-i18n="per_day">
                    / Day
                  </span>
                </div>

              </div>


              <div class="price-box alt">

                <div
                  class="p-label"
                  data-i18n="work_type">
                  Work Type
                </div>

                <div
                  class="p-value"
                  data-i18n="full_time">
                  Full-time
                </div>

              </div>

            </div>

          </div>


          <!-- SERVICE AREAS -->
          <div class="card">

            <div class="card-title">

              <div class="icon-chip">
                📍
              </div>

              <span data-i18n="areas_title">
                Service Areas
              </span>

            </div>


            <div class="area-row">

              <span class="area-pill">📍 Kandy</span>
              <span class="area-pill">📍 Peradeniya</span>
              <span class="area-pill">📍 Katugastota</span>
              <span class="area-pill">📍 Kundasale</span>

            </div>


            <div class="travel-note">

              <span data-i18n="willing_travel">
                Willing to travel:
              </span>

              <b data-i18n="yes">
                Yes
              </b>

            </div>

          </div>


          <!-- AVAILABILITY -->
          <div class="card">

            <div class="card-title">

              <div class="icon-chip">
                📅
              </div>

              <span data-i18n="availability_title">
                Availability
              </span>

            </div>


            <div
              class="avail-status"
              id="availStatus">

              <span class="dot"></span>

              <span data-i18n="available_for_work">
                Available for Work
              </span>

            </div>


            <div class="avail-grid">

              <div class="avail-box">

                <div
                  class="a-label"
                  data-i18n="preferred_days">
                  Preferred Working Days
                </div>

                <div
                  class="a-value"
                  data-i18n="days_value">
                  Monday – Saturday
                </div>

              </div>


              <div class="avail-box">

                <div
                  class="a-label"
                  data-i18n="working_hours">
                  Working Hours
                </div>

                <div class="a-value">
                  8:00 AM – 6:00 PM
                </div>

              </div>

            </div>

          </div>


          <!-- LANGUAGES -->
          <div class="card">

            <div class="card-title">

              <div class="icon-chip">
                🌐
              </div>

              <span data-i18n="languages_title">
                Languages
              </span>

            </div>


            <div class="lang-badges">

              <span
                class="lang-badge"
                data-i18n="lang_sinhala">
                Sinhala
              </span>

              <span
                class="lang-badge"
                data-i18n="lang_english">
                English
              </span>

              <span
                class="lang-badge"
                data-i18n="lang_tamil">
                Tamil
              </span>

            </div>

          </div>


          <!-- REVIEWS -->
          <div class="card">

            <div class="card-title">

              <div class="icon-chip">
                ⭐
              </div>

              <span data-i18n="reviews_title">
                Reviews &amp; Ratings
              </span>

            </div>


            <div class="review-summary">

              <div class="big-rating">
                4.8
              </div>

              <div>

                <div class="stars">
                  ★★★★★
                </div>

                <div class="count">
                  24
                  <span data-i18n="reviews_lower">
                    reviews
                  </span>
                </div>

              </div>

            </div>


            <div class="review-card">

              <div class="review-top">

                <img
                  class="review-avatar"
                  src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?w=100&h=100&fit=crop&crop=faces"
                  alt="Kasun Fernando">

                <div>

                  <div class="review-name">
                    Kasun Fernando
                  </div>

                  <div
                    class="review-date"
                    data-i18n="review1_date">
                    2 weeks ago
                  </div>

                </div>

                <div class="review-stars">
                  ★★★★★
                </div>

              </div>


              <p
                class="review-text"
                data-i18n="review1_text">
                Very professional and completed the electrical
                work on time. Explained everything clearly
                before starting.
              </p>

            </div>


            <div class="review-card">

              <div class="review-top">

                <img
                  class="review-avatar"
                  src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop&crop=faces"
                  alt="Nadeesha Silva">

                <div>

                  <div class="review-name">
                    Nadeesha Silva
                  </div>

                  <div
                    class="review-date"
                    data-i18n="review2_date">
                    1 month ago
                  </div>

                </div>

                <div class="review-stars">
                  ★★★★★
                </div>

              </div>


              <p
                class="review-text"
                data-i18n="review2_text">
                Fixed our switchboard issue quickly and the
                pricing was fair. Would definitely hire again.
              </p>

            </div>


            <div class="review-card">

              <div class="review-top">

                <img
                  class="review-avatar"
                  src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?w=100&h=100&fit=crop&crop=faces&sat=-50"
                  alt="Ruwan Bandara">

                <div>

                  <div class="review-name">
                    Ruwan Bandara
                  </div>

                  <div
                    class="review-date"
                    data-i18n="review3_date">
                    2 months ago
                  </div>

                </div>

                <div class="review-stars">
                  ★★★★☆
                </div>

              </div>


              <p
                class="review-text"
                data-i18n="review3_text">
                Good work overall, arrived a little later than
                planned but the wiring job was neat and safe.
              </p>

            </div>

          </div>


          <!-- STATISTICS -->
          <div class="card">

            <div class="card-title">

              <div class="icon-chip">
                📊
              </div>

              <span data-i18n="stats_title">
                Profile Statistics
              </span>

            </div>


            <div class="stats-grid">

              <div class="stat-box">
                <b>24</b>
                <span data-i18n="completed_jobs">
                  Completed Jobs
                </span>
              </div>

              <div class="stat-box">
                <b>8y</b>
                <span data-i18n="experience">
                  Experience
                </span>
              </div>

              <div class="stat-box">
                <b>4.8</b>
                <span data-i18n="rating_out_of">
                  Rating / 5
                </span>
              </div>

              <div class="stat-box">
                <b>95%</b>
                <span data-i18n="response_rate">
                  Response Rate
                </span>
              </div>

            </div>

          </div>

        </section>

      </div>

    </div>

  </main>


  <!-- =====================================================
     CTA
     ===================================================== -->

  <section class="cta-section">

    <div class="container">

      <div class="cta-card">

        <h2 data-i18n="cta_title">
          Need a skilled electrician?
        </h2>

        <p data-i18n="cta_subtitle">
          Contact this worker and discuss your job.
        </p>


        <div class="cta-btns">

          <button
            type="button"
            class="btn btn-primary"
            onclick="contactWorker()"
            data-i18n="contact_worker">
            Contact Worker
          </button>

          <button
            type="button"
            class="btn btn-outline"
            onclick="requestJob()"
            data-i18n="request_job">
            Request a Job
          </button>

        </div>

      </div>

    </div>

  </section>


  <!-- =====================================================
     SIMILAR WORKERS
     ===================================================== -->

  <section class="similar-section">

    <div class="container">

      <div class="similar-head">

        <h2 data-i18n="similar_title">
          Similar Workers
        </h2>

      </div>

      <div
        class="similar-grid"
        id="similarGrid">
      </div>

    </div>

  </section>


  <footer>

    <div class="container">

      <span data-i18n="footer_text">
        © 2026 PodiJOB. Connecting Sri Lanka's skilled workers
        with the people who need them.
      </span>

    </div>

  </footer>


  <!-- Worker Profile JS -->
  <script src="workerprofile.js"></script>

</body>

</html>