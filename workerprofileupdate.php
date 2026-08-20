<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PodiJOB — Create Your Worker Profile</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=Noto+Sans+Sinhala:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="workerprofileupdate.css">


</head>

<body>

    <div class="bg-photo" aria-hidden="true"></div>
    <div class="bg-overlay" aria-hidden="true"></div>

    <!-- ================= TOP BAR ================= -->
    <div class="topbar">
        <div class="logo">
            <div class="logo-mark">

            </div>
            <div class="logo-text">Podi<span>JOB</span></div>
        </div>
        <div class="lang-toggle" role="group" aria-label="Language">
            <button class="lang-btn" id="btnSi" onclick="setLang('si')">සිංහල</button>
            <button class="lang-btn" id="btnEn" onclick="setLang('en')">English</button>

        </div>
    </div>

    <!-- ================= PAGE HEAD ================= -->
    <div class="page-head">
        <div class="eyebrow"><span class="eyebrow-dot"></span><span data-i18n="eyebrow">Almost there</span></div>
        <h1 class="page-title" data-i18n="pageTitle">Create Your Worker Profile</h1>
        <p class="page-sub" data-i18n="pageSub">A complete profile helps customers trust you and find you faster.</p>
    </div>

    <!-- ================= STEPPER ================= -->
    <div class="stepper-wrap">
        <div class="stepper" id="stepper">
            <div class="step-item">
                <div class="step-node current" id="node1">1</div>
                <div class="step-line filled" id="line1"></div>
                <div class="step-label active" id="label1" data-i18n="step1Label">Personal</div>
            </div>
            <div class="step-item">
                <div class="step-node" id="node2">2</div>
                <div class="step-line" id="line2"></div>
                <div class="step-label" id="label2" data-i18n="step2Label">Skills</div>
            </div>
            <div class="step-item">
                <div class="step-node" id="node3">3</div>
                <div class="step-line" id="line3"></div>
                <div class="step-label" id="label3" data-i18n="step3Label">Preferences</div>
            </div>
            <div class="step-item">
                <div class="step-node" id="node4">4</div>
                <div class="step-line" id="line4"></div>
                <div class="step-label" id="label4" data-i18n="step4Label">Area</div>
            </div>
            <div class="step-item">
                <div class="step-node" id="node5">5</div>
                <div class="step-label" id="label5" data-i18n="step5Label">Preview</div>
            </div>
        </div>
    </div>

    <!-- ================= CONTENT ================= -->
    <div class="content-wrap">
        <form id="profileForm" novalidate>

            <!-- ============ STEP 1 — PERSONAL INFORMATION ============ -->
            <div class="card step-panel" id="panel1">
                <div class="step-heading">
                    <h2 data-i18n="s1Heading">Personal Information</h2>
                    <p data-i18n="s1Sub">Let's start with the basics about you.</p>
                </div>

                <div class="section-block">
                    <div class="photo-upload-row">
                        <div class="photo-circle" id="photoCircle"
                            onclick="document.getElementById('photoInput').click()">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                                <circle cx="12" cy="13" r="4" />
                            </svg>
                            <div class="cam-overlay"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path
                                        d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                                    <circle cx="12" cy="13" r="4" />
                                </svg></div>
                        </div>
                        <input type="file" id="photoInput" accept="image/*" style="display:none;">
                        <div class="photo-meta">
                            <span data-i18n="photoLabel"
                                style="font-weight:600;color:var(--ivory-dim);display:block;margin-bottom:3px;">Profile
                                Photo</span>
                            <span data-i18n="photoHint">Click the circle to upload a clear photo of your face. This
                                builds trust with customers.</span>
                        </div>
                    </div>
                </div>

                <div class="section-block">
                    <div class="field-grid">
                        <div class="field locked">
                            <label><span data-i18n="fullNameLabel">Full Name</span><span class="locked-badge"><svg
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <rect x="4" y="10" width="16" height="10" rx="2" />
                                        <path d="M8 10V7a4 4 0 0 1 8 0v3" />
                                    </svg><span data-i18n="autoFilled">Auto-filled</span></span></label>
                            <input type="text" id="fullName" value="Nimal Perera" readonly>
                        </div>
                        <div class="field locked">
                            <label><span data-i18n="phoneLabel">Phone Number</span><span class="locked-badge"><svg
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <rect x="4" y="10" width="16" height="10" rx="2" />
                                        <path d="M8 10V7a4 4 0 0 1 8 0v3" />
                                    </svg><span data-i18n="autoFilled">Auto-filled</span></span></label>
                            <input type="tel" id="phone" value="077 123 4567" readonly>
                        </div>
                    </div>

                    <div class="field-grid">
                        <div class="field full">
                            <label><span data-i18n="emailLabel">Email Address</span><span class="opt-tag"
                                    data-i18n="optionalTag">(optional)</span></label>
                            <input type="email" id="email" data-i18n-ph="emailPh" placeholder="you@example.com">
                            <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="13" />
                                    <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg><span data-i18n="emailError">Enter a valid email address</span></div>
                        </div>
                    </div>

                    <div class="field-grid">

                        <div class="field" id="f-district">
                            <label><span data-i18n="districtLabel">District</span><span
                                    class="req-star">*</span></label>
                            <select id="district"></select>
                            <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="13" />
                                    <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg><span data-i18n="districtError">Please select your district</span></div>
                        </div>

                        <div class="field" id="f-city">
                            <label><span data-i18n="cityLabel">City</span><span class="req-star">*</span></label>
                            <input type="text" id="city" data-i18n-ph="cityPh" placeholder="e.g. Gampaha">
                            <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="13" />
                                    <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg><span data-i18n="cityError">Please enter your city</span></div>
                        </div>

                    </div>
                </div>

                <div class="step-actions">
                    <span></span>
                    <button type="button" class="btn btn-primary" onclick="goToStep(2)">
                        <span data-i18n="next">Next</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- ============ STEP 2 — SKILLS & EXPERIENCE ============ -->
            <div class="card step-panel" id="panel2" style="display:none;">
                <div class="step-heading">
                    <h2 data-i18n="s2Heading">Skills &amp; Experience</h2>
                    <p data-i18n="s2Sub">Tell customers what you do best.</p>
                </div>

                <div class="section-block">
                    <div class="field" id="f-mainSkill">
                        <label><span data-i18n="mainSkillLabel">Main Job Category / Skill</span><span
                                class="req-star">*</span><span class="locked-badge"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <rect x="4" y="10" width="16" height="10" rx="2" />
                                    <path d="M8 10V7a4 4 0 0 1 8 0v3" />
                                </svg><span data-i18n="autoFilled">Auto-filled</span></span></label>
                        <div class="combo">
                            <div class="combo-input-wrap">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                </svg>

                                <input type="text" id="mainSkillInput" name="mainSkill" autocomplete="on"
                                    data-i18n-ph="mainSkillPh">
                            </div>
                            <div class="combo-list" id="mainSkillList"></div>
                        </div>
                        <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="13" />
                                <line x1="12" y1="16" x2="12.01" y2="16" />
                            </svg><span data-i18n="mainSkillError">Please select your main job category</span></div>
                    </div>

                    <div class="field">
                        <label><span data-i18n="additionalSkillsLabel">Additional Skills</span><span class="opt-tag"
                                data-i18n="optionalTag">(optional)</span></label>
                        <div class="chip-input-box" id="skillsBox">
                            <input type="text" id="skillsInput" data-i18n-ph="additionalSkillsPh"
                                placeholder="Type a skill and press Enter">
                        </div>
                        <div class="field-hint" data-i18n="skillsHint">e.g. Tiling, Waterproofing, Welding — press Enter
                            after each one</div>
                    </div>

                    <div class="field-grid">
                        <div class="field" id="f-experience">
                            <label><span data-i18n="experienceLabel">Years of Experience</span><span
                                    class="req-star">*</span></label>
                            <select id="experience">
                                <option value="" data-i18n="selectOption">Select...</option>
                                <option value="0-1" data-i18n="exp01">Less than 1 year</option>
                                <option value="1-3" data-i18n="exp13">1 – 3 years</option>
                                <option value="3-5" data-i18n="exp35">3 – 5 years</option>
                                <option value="5-10" data-i18n="exp510">5 – 10 years</option>
                                <option value="10+" data-i18n="exp10plus">10+ years</option>
                            </select>
                            <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="13" />
                                    <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg><span data-i18n="experienceError">Please select your experience level</span></div>
                        </div>
                    </div>

                    <div class="field" id="f-bio">
                        <label><span data-i18n="bioLabel">Professional Bio / About Me</span><span
                                class="req-star">*</span></label>
                        <textarea id="bio" maxlength="400" data-i18n-ph="bioPh"
                            placeholder="Tell customers about your experience, specialties, and what makes you reliable..."></textarea>
                        <div class="char-count"><span id="bioCount">0</span>/400</div>
                        <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="13" />
                                <line x1="12" y1="16" x2="12.01" y2="16" />
                            </svg><span data-i18n="bioError">Please write at least 20 characters about yourself</span>
                        </div>
                    </div>

                    <div class="field">
                        <label><span data-i18n="certLabel">Qualifications or Certificates</span><span class="opt-tag"
                                data-i18n="optionalTag">(optional)</span></label>
                        <div class="upload-zone" onclick="document.getElementById('certInput').click()">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <polyline points="17 8 12 3 7 8" />
                                <line x1="12" y1="3" x2="12" y2="15" />
                            </svg>
                            <p data-i18n="certUploadTitle">Click to upload files</p>
                            <span data-i18n="certUploadHint">PDF, JPG or PNG — you can add more than one</span>
                        </div>
                        <input type="file" id="certInput" accept=".pdf,.jpg,.jpeg,.png" multiple style="display:none;">
                        <div class="file-list" id="certList"></div>
                    </div>
                </div>

                <div class="section-block">
                    <div class="section-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 8l6 6 6-6" />
                            <path d="M5 15h14" />
                        </svg>
                        <span data-i18n="languagesLabel">Languages You Can Communicate In</span>
                    </div>
                    <div class="segmented" id="languagesGroup">
                        <button type="button" class="seg-option" data-lang="si" data-i18n="langSinhala">Sinhala</button>
                        <button type="button" class="seg-option" data-lang="en" data-i18n="langEnglish">English</button>
                        <button type="button" class="seg-option" data-lang="ta" data-i18n="langTamil">Tamil</button>
                    </div>
                </div>

                <div class="step-actions">
                    <button type="button" class="btn btn-ghost" onclick="goToStep(1)">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12" />
                            <polyline points="12 19 5 12 12 5" />
                        </svg>
                        <span data-i18n="back">Back</span>
                    </button>
                    <button type="button" class="btn btn-primary" onclick="goToStep(3)">
                        <span data-i18n="next">Next</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- ============ STEP 3 — WORK PREFERENCES ============ -->
            <div class="card step-panel" id="panel3" style="display:none;">
                <div class="step-heading">
                    <h2 data-i18n="s3Heading">Work Preferences</h2>
                    <p data-i18n="s3Sub">Set your rate, availability, and working schedule.</p>
                </div>

                <div class="section-block">
                    <div class="rate-row">
                        <div class="field" id="f-rate">
                            <label><span data-i18n="rateLabel">Expected Rate</span><span
                                    class="req-star">*</span></label>
                            <div class="rate-input-wrap"><span>Rs.</span><input type="number" id="rate" min="0"
                                    data-i18n-ph="ratePh" placeholder="3000"></div>
                            <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="13" />
                                    <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg><span data-i18n="rateError">Please enter your expected rate</span></div>
                        </div>
                        <div class="field">
                            <label><span data-i18n="rateTypeLabel">Rate Type</span></label>
                            <div class="segmented" id="rateTypeGroup">
                                <button type="button" class="seg-option" data-val="day" data-i18n="perDay">Per
                                    Day</button>
                                <button type="button" class="seg-option" data-val="hour" data-i18n="perHour">Per
                                    Hour</button>
                                <button type="button" class="seg-option" data-val="job" data-i18n="perJob">Per
                                    Job</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-block">
                    <div class="field" id="f-workType">
                        <label><span data-i18n="workTypeLabel">Work Type</span><span class="req-star">*</span></label>
                        <div class="segmented" id="workTypeGroup">
                            <button type="button" class="seg-option" data-val="fulltime"
                                data-i18n="fullTime">Full-time</button>
                            <button type="button" class="seg-option" data-val="parttime"
                                data-i18n="partTime">Part-time</button>
                            <button type="button" class="seg-option" data-val="temporary"
                                data-i18n="temporary">Temporary</button>
                            <button type="button" class="seg-option" data-val="contract"
                                data-i18n="contract">Contract</button>
                        </div>
                        <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="13" />
                                <line x1="12" y1="16" x2="12.01" y2="16" />
                            </svg><span data-i18n="workTypeError">Please select a work type</span></div>
                    </div>

                    <div class="field" id="f-availability">
                        <label><span data-i18n="availabilityLabel">Current Availability</span><span
                                class="req-star">*</span></label>
                        <div class="segmented" id="availabilityGroup">
                            <button type="button" class="seg-option" data-val="available"><span
                                    class="seg-dot available"></span><span
                                    data-i18n="available">Available</span></button>
                            <button type="button" class="seg-option" data-val="busy"><span
                                    class="seg-dot busy"></span><span data-i18n="busy">Busy</span></button>
                            <button type="button" class="seg-option" data-val="unavailable"><span
                                    class="seg-dot unavailable"></span><span data-i18n="notAvailable">Not
                                    Available</span></button>
                        </div>
                        <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="13" />
                                <line x1="12" y1="16" x2="12.01" y2="16" />
                            </svg><span data-i18n="availabilityError">Please select your availability</span></div>
                    </div>
                </div>

                <div class="section-block">
                    <div class="field" id="f-days">
                        <label><span data-i18n="workingDaysLabel">Preferred Working Days</span><span
                                class="req-star">*</span></label>
                        <div class="days-grid" id="daysGroup">
                            <button type="button" class="day-chip" data-val="mon" data-i18n="dayMon">Mon</button>
                            <button type="button" class="day-chip" data-val="tue" data-i18n="dayTue">Tue</button>
                            <button type="button" class="day-chip" data-val="wed" data-i18n="dayWed">Wed</button>
                            <button type="button" class="day-chip" data-val="thu" data-i18n="dayThu">Thu</button>
                            <button type="button" class="day-chip" data-val="fri" data-i18n="dayFri">Fri</button>
                            <button type="button" class="day-chip" data-val="sat" data-i18n="daySat">Sat</button>
                            <button type="button" class="day-chip" data-val="sun" data-i18n="daySun">Sun</button>
                        </div>
                        <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="13" />
                                <line x1="12" y1="16" x2="12.01" y2="16" />
                            </svg><span data-i18n="daysError">Please select at least one working day</span></div>
                    </div>

                    <div class="field">
                        <label><span data-i18n="workingHoursLabel">Preferred Working Hours</span></label>
                        <select id="workingHours">
                            <option value="morning" data-i18n="hoursMorning">Morning (6 AM – 12 PM)</option>
                            <option value="afternoon" data-i18n="hoursAfternoon">Afternoon (12 PM – 6 PM)</option>
                            <option value="evening" data-i18n="hoursEvening">Evening (6 PM – 10 PM)</option>
                            <option value="fullday" data-i18n="hoursFullDay">Full Day</option>
                            <option value="flexible" data-i18n="hoursFlexible">Flexible</option>
                        </select>
                    </div>
                </div>

                <div class="step-actions">
                    <button type="button" class="btn btn-ghost" onclick="goToStep(2)">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12" />
                            <polyline points="12 19 5 12 12 5" />
                        </svg>
                        <span data-i18n="back">Back</span>
                    </button>
                    <button type="button" class="btn btn-primary" onclick="goToStep(4)">
                        <span data-i18n="next">Next</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- ============ STEP 4 — SERVICE AREA ============ -->
            <div class="card step-panel" id="panel4" style="display:none;">
                <div class="step-heading">
                    <h2 data-i18n="s4Heading">Service Area</h2>
                    <p data-i18n="s4Sub">Where are you based, and how far will you travel for work?</p>
                </div>

                <div class="section-block">
                    <div class="field-grid">

                        <div class="field" id="f-serviceDistrict">
                            <label><span data-i18n="districtLabel">District</span><span class="locked-badge"><svg viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5">
                                        <rect x="4" y="10" width="16" height="10" rx="2" />
                                        <path d="M8 10V7a4 4 0 0 1 8 0v3" />
                                    </svg><span data-i18n="autoFilled">Auto-filled</span></span></label>
                            <select id="serviceDistrict"></select>
                            <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="13" />
                                    <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg><span data-i18n="districtError">Please select your district</span></div>
                        </div>

                        <div class="field" id="f-serviceCity">
                            <label><span data-i18n="serviceCityLabel">Main City</span><span class="locked-badge"><svg viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5">
                                        <rect x="4" y="10" width="16" height="10" rx="2" />
                                        <path d="M8 10V7a4 4 0 0 1 8 0v3" />
                                    </svg><span data-i18n="autoFilled">Auto-filled</span></span></label>
                            <input type="text" id="serviceCity" data-i18n-ph="cityPh" placeholder="e.g. Gampaha">
                            <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="13" />
                                    <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg><span data-i18n="cityError">Please enter your city</span></div>
                        </div>

                    </div>

                    <div class="field">

                        <label>
                            <span data-i18n="areasLabel">Areas Willing to Work</span>
                            <span class="opt-tag" data-i18n="optionalTag">(optional)</span>
                        </label>

                        <div class="chip-input-box" id="areasBox">

                            <div id="areaChips"></div>

                            <input
                                type="text"
                                id="areasInput"
                                placeholder="Type an area e.g. Kottawa"
                                autocomplete="off">

                            <button type="button" id="addAreaBtn">
                                <span data-i18n="addArea">Add</span> 
                            </button>

                        </div>

                        <div class="field-hint">
                            Add nearby towns or suburbs you're happy to travel to
                        </div>

                    </div>

                    <div class="field">
                        <label><span data-i18n="travelLabel">Willing to Travel to Nearby Cities?</span></label>
                        <div class="toggle-row">
                            <div class="toggle-switch" id="travelGroup">
                                <button type="button" class="toggle-opt" data-val="yes"
                                    data-i18n="travelYes">Yes</button>
                                <button type="button" class="toggle-opt" data-val="no" data-i18n="travelNo">No</button>
                            </div>
                        </div>
                    </div>

                    <div class="privacy-note">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="10" rx="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                        <span data-i18n="privacyNote">Your exact home address is never requested or shown publicly —
                            only your city and general service area are visible to customers.</span>
                    </div>
                </div>

                <div class="step-actions">
                    <button type="button" class="btn btn-ghost" onclick="goToStep(3)">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12" />
                            <polyline points="12 19 5 12 12 5" />
                        </svg>
                        <span data-i18n="back">Back</span>
                    </button>
                    <button type="button" class="btn btn-primary" onclick="goToStep(5)">
                        <span data-i18n="reviewProfile">Review Profile</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- ============ STEP 5 — PROFILE PREVIEW ============ -->
            <div class="card step-panel" id="panel5" style="display:none;">
                <div class="step-heading">
                    <h2 data-i18n="s5Heading">Preview Your Profile</h2>
                    <p data-i18n="s5Sub">This is how customers will see you on PodiJOB.</p>
                </div>

                <div class="preview-card" id="previewCard"></div>

                <div class="step-actions">
                    <button type="button" class="btn btn-ghost" onclick="goToStep(4)">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12" />
                            <polyline points="12 19 5 12 12 5" />
                        </svg>
                        <span data-i18n="back">Back</span>
                    </button>
                    <button type="submit" class="btn btn-primary" id="saveBtn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                            <polyline points="17 21 17 13 7 13 7 21" />
                            <polyline points="7 3 7 8 15 8" />
                        </svg>
                        <span data-i18n="saveProfile">Save Profile</span>
                    </button>
                </div>
            </div>

        </form>
    </div>

    <footer class="page-footer">© 2026 PodiJOB — <span data-i18n="footerNote">Built for Sri Lanka's skilled
            workers</span></footer>

    <!-- ================= SUCCESS OVERLAY ================= -->
    <div class="success-overlay" id="successOverlay">
        <div class="success-box">
            <div class="success-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12" />
                </svg></div>
            <div class="success-title" data-i18n="successTitle">Profile Created!</div>
            <p class="success-msg" data-i18n="successMsg">Your worker profile is live. Customers can now find and
                contact you on PodiJOB.</p>
            <button class="btn btn-primary" style="width:100%;"
                onclick="document.getElementById('successOverlay').classList.remove('show')">
                <span data-i18n="doneBtn">Done</span>
            </button>
        </div>
    </div>
    <script src="workerprofileupdate.js"></script>
</body>

</html>