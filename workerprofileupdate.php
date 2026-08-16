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
                        <div class="field" id="f-serviceCity">
                            <label><span data-i18n="serviceCityLabel">Main City</span><span
                                    class="req-star">*</span></label>
                            <input type="text" id="serviceCity" data-i18n-ph="cityPh" placeholder="e.g. Gampaha">
                            <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="13" />
                                    <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg><span data-i18n="cityError">Please enter your city</span></div>
                        </div>
                        <div class="field" id="f-serviceDistrict">
                            <label><span data-i18n="districtLabel">District</span><span
                                    class="req-star">*</span></label>
                            <select id="serviceDistrict"></select>
                            <div class="field-error"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="13" />
                                    <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg><span data-i18n="districtError">Please select your district</span></div>
                        </div>
                    </div>

                    <div class="field">
                        <label><span data-i18n="areasLabel">Areas Willing to Work</span><span class="opt-tag"
                                data-i18n="optionalTag">(optional)</span></label>
                        <div class="chip-input-box" id="areasBox">
                            <input type="text" id="areasInput" data-i18n-ph="areasPh"
                                placeholder="Type an area and press Enter e.g. Kottawa">
                        </div>
                        <div class="field-hint" data-i18n="areasHint">Add nearby towns or suburbs you're happy to travel
                            to</div>
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

    <script>
        /* ============================================================
           TRANSLATIONS
           ============================================================ */
        const translations = {
            en: {
                eyebrow: "Almost there", pageTitle: "Create Your Worker Profile",
                pageSub: "A complete profile helps customers trust you and find you faster.",
                step1Label: "Personal", step2Label: "Skills", step3Label: "Preferences", step4Label: "Area", step5Label: "Preview",
                s1Heading: "Personal Information", s1Sub: "Let's start with the basics about you.",
                s2Heading: "Skills & Experience", s2Sub: "Tell customers what you do best.",
                s3Heading: "Work Preferences", s3Sub: "Set your rate, availability, and working schedule.",
                s4Heading: "Service Area", s4Sub: "Where are you based, and how far will you travel for work?",
                s5Heading: "Preview Your Profile", s5Sub: "This is how customers will see you on PodiJOB.",
                photoLabel: "Profile Photo", photoHint: "Click the circle to upload a clear photo of your face. This builds trust with customers.",
                fullNameLabel: "Full Name", phoneLabel: "Phone Number", autoFilled: "Auto-filled",
                emailLabel: "Email Address", emailPh: "you@example.com", optionalTag: "(optional)", emailError: "Enter a valid email address",
                cityLabel: "City", cityPh: "e.g. Gampaha", cityError: "Please enter your city",
                districtLabel: "District", districtError: "Please select your district", selectDistrict: "Select district...",
                next: "Next", back: "Back",
                mainSkillLabel: "Main Job Category / Skill", mainSkillPh: "Search job category...", mainSkillError: "Please select your main job category",
                additionalSkillsLabel: "Additional Skills", additionalSkillsPh: "Type a skill and press Enter",
                skillsHint: "e.g. Tiling, Waterproofing, Welding — press Enter after each one",
                experienceLabel: "Years of Experience", experienceError: "Please select your experience level",
                selectOption: "Select...", exp01: "Less than 1 year", exp13: "1 – 3 years", exp35: "3 – 5 years", exp510: "5 – 10 years", exp10plus: "10+ years",
                bioLabel: "Professional Bio / About Me",
                bioPh: "Tell customers about your experience, specialties, and what makes you reliable...",
                bioError: "Please write at least 20 characters about yourself",
                certLabel: "Qualifications or Certificates", certUploadTitle: "Click to upload files",
                certUploadHint: "PDF, JPG or PNG — you can add more than one",
                languagesLabel: "Languages You Can Communicate In", langSinhala: "Sinhala", langEnglish: "English", langTamil: "Tamil",
                rateLabel: "Expected Rate", ratePh: "3000", rateError: "Please enter your expected rate",
                rateTypeLabel: "Rate Type", perDay: "Per Day", perHour: "Per Hour", perJob: "Per Job",
                workTypeLabel: "Work Type", fullTime: "Full-time", partTime: "Part-time", temporary: "Temporary", contract: "Contract",
                workTypeError: "Please select a work type",
                availabilityLabel: "Current Availability", available: "Available", busy: "Busy", notAvailable: "Not Available",
                availabilityError: "Please select your availability",
                workingDaysLabel: "Preferred Working Days", daysError: "Please select at least one working day",
                dayMon: "Mon", dayTue: "Tue", dayWed: "Wed", dayThu: "Thu", dayFri: "Fri", daySat: "Sat", daySun: "Sun",
                workingHoursLabel: "Preferred Working Hours",
                hoursMorning: "Morning (6 AM – 12 PM)", hoursAfternoon: "Afternoon (12 PM – 6 PM)", hoursEvening: "Evening (6 PM – 10 PM)",
                hoursFullDay: "Full Day", hoursFlexible: "Flexible",
                serviceCityLabel: "Main City", areasLabel: "Areas Willing to Work", areasPh: "Type an area and press Enter e.g. Kottawa",
                areasHint: "Add nearby towns or suburbs you're happy to travel to",
                travelLabel: "Willing to Travel to Nearby Cities?", travelYes: "Yes", travelNo: "No",
                privacyNote: "Your exact home address is never requested or shown publicly — only your city and general service area are visible to customers.",
                reviewProfile: "Review Profile",
                saveProfile: "Save Profile",
                successTitle: "Profile Created!", successMsg: "Your worker profile is live. Customers can now find and contact you on PodiJOB.", doneBtn: "Done",
                footerNote: "Built for Sri Lanka's skilled workers",
                newProfile: "New profile — no ratings yet",
                perDayShort: "/day", perHourShort: "/hr", perJobShort: "/job",
                yrsExp: "yrs exp", noSkillsYet: "No additional skills added",
                noAreasYet: "No additional areas added",
                willTravel: "Willing to travel", wontTravel: "Local jobs only",
                about: "About", skills: "Skills", serviceAreas: "Service Areas",
                categories: {
                    mason: "Mason", electrician: "Electrician", plumber: "Plumber", painter: "Painter", carpenter: "Carpenter",
                    welder: "Welder", driver: "Driver", gardener: "Gardener", cleaner: "Cleaner", tiler: "Tiler",
                    mechanic: "Mechanic", actech: "AC Technician", roofing: "Roofing Worker", labourer: "Labourer", other: "Other"
                }
            },
            si: {
                eyebrow: "අවසන් පියවර", pageTitle: "ඔබගේ කම්කරු පැතිකඩ සාදන්න",
                pageSub: "සම්පූර්ණ පැතිකඩක් පාරිභෝගිකයන්ගේ විශ්වාසය ලබාගැනීමට සහ ඉක්මනින් සොයාගැනීමට උපකාරී වේ.",
                step1Label: "පෞද්ගලික", step2Label: "හැකියා", step3Label: "අභිප්‍රේත", step4Label: "ප්‍රදේශය", step5Label: "පෙරදසුන",
                s1Heading: "පෞද්ගලික තොරතුරු", s1Sub: "ඔබ ගැන මූලික තොරතුරු වලින් පටන් ගනිමු.",
                s2Heading: "හැකියා සහ පළපුරුද්ද", s2Sub: "ඔබ වඩාත් දක්ෂ දේ පාරිභෝගිකයන්ට කියන්න.",
                s3Heading: "රැකියා අභිප්‍රේත", s3Sub: "ඔබගේ ගාස්තුව, ලබාගත හැකි බව සහ වැඩ කරන කාලසටහන සකසන්න.",
                s4Heading: "සේවා ප්‍රදේශය", s4Sub: "ඔබ පදිංචි කොහෙද, සහ රැකියා සඳහා කොපමණ දුරක් ගමන් කරයිද?",
                s5Heading: "ඔබගේ පැතිකඩ පෙරදසුන", s5Sub: "මෙය PodiJOB හි පාරිභෝගිකයන් ඔබව දකින ආකාරයයි.",
                photoLabel: "පැතිකඩ ඡායාරූපය", photoHint: "ඔබගේ මුහුණේ පැහැදිලි ඡායාරූපයක් උඩුගත කිරීමට කවය ක්ලික් කරන්න. මෙය පාරිභෝගිකයන් සමඟ විශ්වාසය ගොඩනගයි.",
                fullNameLabel: "සම්පූර්ණ නම", phoneLabel: "දුරකථන අංකය", autoFilled: "ස්වයංක්‍රීයව පුරවා ඇත",
                emailLabel: "විද්‍යුත් තැපෑල", emailPh: "you@example.com", optionalTag: "(අත්‍යවශ්‍ය නොවේ)", emailError: "වලංගු විද්‍යුත් තැපැල් ලිපිනයක් ඇතුළත් කරන්න",
                cityLabel: "නගරය", cityPh: "උදා: ගම්පහ", cityError: "කරුණාකර ඔබගේ නගරය ඇතුළත් කරන්න",
                districtLabel: "දිස්ත්‍රික්කය", districtError: "කරුණාකර ඔබගේ දිස්ත්‍රික්කය තෝරන්න", selectDistrict: "දිස්ත්‍රික්කය තෝරන්න...",
                next: "ඉදිරියට", back: "ආපසු",
                mainSkillLabel: "ප්‍රධාන රැකියා කාණ්ඩය / හැකියාව", mainSkillPh: "රැකියා කාණ්ඩය සොයන්න...", mainSkillError: "කරුණාකර ඔබගේ ප්‍රධාන රැකියා කාණ්ඩය තෝරන්න",
                additionalSkillsLabel: "අමතර හැකියා", additionalSkillsPh: "හැකියාවක් ටයිප් කර Enter ඔබන්න",
                skillsHint: "උදා: උළු කැපීම, ජල ආරක්ෂණය, වෙල්ඩින් — සෑම එකකින්ම පසුව Enter ඔබන්න",
                experienceLabel: "පළපුරුද්ද (අවුරුදු)", experienceError: "කරුණාකර ඔබගේ පළපුරුද්ද තෝරන්න",
                selectOption: "තෝරන්න...", exp01: "අවුරුද්දකට අඩු", exp13: "අවුරුදු 1 – 3", exp35: "අවුරුදු 3 – 5", exp510: "අවුරුදු 5 – 10", exp10plus: "අවුරුදු 10+",
                bioLabel: "වෘත්තීය පැතිකඩ විස්තරය",
                bioPh: "ඔබගේ පළපුරුද්ද, විශේෂඥතාවය සහ ඔබව විශ්වාසදායක කරන්නේ කුමක්ද යන්න පාරිභෝගිකයන්ට කියන්න...",
                bioError: "කරුණාකර ඔබ ගැන අවම වශයෙන් අකුරු 20ක්වත් ලියන්න",
                certLabel: "සුදුසුකම් හෝ සහතික", certUploadTitle: "ගොනු උඩුගත කිරීමට ක්ලික් කරන්න",
                certUploadHint: "PDF, JPG හෝ PNG — ඔබට එකකට වඩා එකතු කළ හැක",
                languagesLabel: "ඔබට සන්නිවේදනය කළ හැකි භාෂා", langSinhala: "සිංහල", langEnglish: "ඉංග්‍රීසි", langTamil: "දෙමළ",
                rateLabel: "අපේක්ෂිත ගාස්තුව", ratePh: "3000", rateError: "කරුණාකර ඔබගේ අපේක්ෂිත ගාස්තුව ඇතුළත් කරන්න",
                rateTypeLabel: "ගාස්තු වර්ගය", perDay: "දිනකට", perHour: "පැයකට", perJob: "රැකියාවකට",
                workTypeLabel: "රැකියා වර්ගය", fullTime: "පූර්ණකාලීන", partTime: "අර්ධකාලීන", temporary: "තාවකාලික", contract: "කොන්ත්‍රාත්",
                workTypeError: "කරුණාකර රැකියා වර්ගයක් තෝරන්න",
                availabilityLabel: "වර්තමාන ලබාගත හැකි බව", available: "ලබාගත හැක", busy: "කාර්යබහුලයි", notAvailable: "ලබාගත නොහැක",
                availabilityError: "කරුණාකර ඔබගේ ලබාගත හැකි බව තෝරන්න",
                workingDaysLabel: "කැමති වැඩ කරන දින", daysError: "කරුණාකර අවම වශයෙන් එක් වැඩ කරන දිනයක්වත් තෝරන්න",
                dayMon: "සඳු", dayTue: "අඟ", dayWed: "බදා", dayThu: "බ්‍රහ", dayFri: "සිකු", daySat: "සෙන", daySun: "ඉරි",
                workingHoursLabel: "කැමති වැඩ කරන වේලාවන්",
                hoursMorning: "උදෑසන (පෙ.ව 6 – ප.ව 12)", hoursAfternoon: "දහවල් (ප.ව 12 – 6)", hoursEvening: "සවස (ප.ව 6 – 10)",
                hoursFullDay: "මුළු දිනය", hoursFlexible: "නම්‍යශීලී",
                serviceCityLabel: "ප්‍රධාන නගරය", areasLabel: "වැඩ කිරීමට කැමති ප්‍රදේශ", areasPh: "ප්‍රදේශයක් ටයිප් කර Enter ඔබන්න උදා: කොට්ටාව",
                areasHint: "ඔබ ගමන් කිරීමට කැමති නගර හෝ තදාසන්න ප්‍රදේශ එකතු කරන්න",
                travelLabel: "ආසන්න නගර වලට ගමන් කිරීමට කැමතිද?", travelYes: "ඔව්", travelNo: "නැත",
                privacyNote: "ඔබගේ නිශ්චිත නිවසේ ලිපිනය කිසිවිටෙක ඉල්ලා නොමැති අතර, ප්‍රසිද්ධියේ පෙන්වන්නේ ද නැත — ඔබගේ නගරය සහ සාමාන්‍ය සේවා ප්‍රදේශය පමණක් පාරිභෝගිකයන්ට පෙනේ.",
                reviewProfile: "පැතිකඩ සමාලෝචනය කරන්න",
                saveProfile: "පැතිකඩ සුරකින්න",
                successTitle: "පැතිකඩ සාදන ලදී!", successMsg: "ඔබගේ කම්කරු පැතිකඩ දැන් ක්‍රියාත්මකයි. පාරිභෝගිකයන්ට දැන් ඔබව PodiJOB හි සොයාගෙන සම්බන්ධ විය හැක.", doneBtn: "සම්පූර්ණයි",
                footerNote: "ශ්‍රී ලංකාවේ දක්ෂ කම්කරුවන් සඳහා",
                newProfile: "නව පැතිකඩ — තවම ශ්‍රේණිගත කිරීම් නැත",
                perDayShort: "/දිනකට", perHourShort: "/පැයකට", perJobShort: "/රැකියාවකට",
                yrsExp: "අවු. පළපුරුද්ද", noSkillsYet: "අමතර හැකියා එකතු කර නැත",
                noAreasYet: "අමතර ප්‍රදේශ එකතු කර නැත",
                willTravel: "ගමන් කිරීමට කැමතියි", wontTravel: "ප්‍රාදේශීය රැකියා පමණි",
                about: "පිළිබඳව", skills: "හැකියා", serviceAreas: "සේවා ප්‍රදේශ",
                categories: {
                    mason: "මේසන්", electrician: "විදුලි කාර්මික", plumber: "ප්ලම්බර්", painter: "පේන්ටර්", carpenter: "වඩුවා",
                    welder: "වෙල්ඩර්", driver: "රියදුරු", gardener: "උයන් කරු", cleaner: "පිරිසිදු කරන්නා", tiler: "උළු අලවන්නා",
                    mechanic: "මිස්ත්‍රි", actech: "AC තාක්ෂණඥ", roofing: "වහල වැඩ කරන්නා", labourer: "කම්කරු", other: "වෙනත්"
                }
            }
        };

        const districtsList = ["Colombo", "Gampaha", "Kalutara", "Kandy", "Matale", "Nuwara Eliya", "Galle", "Matara", "Hambantota", "Jaffna", "Kilinochchi", "Mannar", "Vavuniya", "Mullaitivu", "Batticaloa", "Ampara", "Trincomalee", "Kurunegala", "Puttalam", "Anuradhapura", "Polonnaruwa", "Badulla", "Monaragala", "Ratnapura", "Kegalle"];

        const categories = [
            { id: "mason", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 16l6-6 3 3 8-8"/><path d="M14 3h5v5"/><path d="M3 21h8"/><path d="M3 21v-3"/></svg>' },
            { id: "electrician", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 4 14 12 14 11 22 20 10 12 10 13 2"/></svg>' },
            { id: "plumber", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0-1.4 0l-6 6a1 1 0 0 0 0 1.4l3 3a1 1 0 0 0 1.4 0l6-6a1 1 0 0 0 0-1.4z"/><path d="M6 20l3-3"/><path d="M2.5 21.5l3-3"/></svg>' },
            { id: "painter", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="14" height="6" rx="1"/><path d="M9 10v4a2 2 0 0 0 2 2h1"/><rect x="10" y="16" width="4" height="5" rx="1"/></svg>' },
            { id: "carpenter", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15l6-6 8 8-2 2-2-2-4 4H4z"/><path d="M14.5 6.5l3-3 3 3-3 3"/></svg>' },
            { id: "welder", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2c1.5 3 2 5 0 7-2-2-1.5-4 0-7z"/><path d="M12 9c2.5 2.5 3 6 1 9-1-1.5-1.5-2-1-3-1 1-2 2-1 4-2.5-1-4-4-3-7 .5-1.5 2-2.5 4-3z"/></svg>' },
            { id: "driver", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="2.6"/><path d="M12 3v6.4M12 14.6V21M4.2 7.8l5.4 3.1M14.4 13.1l5.4 3.1M19.8 7.8l-5.4 3.1M9.6 13.1l-5.4 3.1"/></svg>' },
            { id: "gardener", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s7-4.5 7-11a7 7 0 0 0-14 0c0 6.5 7 11 7 11z"/><path d="M12 22V11"/></svg>' },
            { id: "cleaner", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 14.5L4 20"/><path d="M13 4l7 7-9 9-4-4a3 3 0 0 1 0-4.2l3-3A3 3 0 0 1 14 8z"/></svg>' },
            { id: "tiler", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="8" height="8" rx="1"/><rect x="13" y="3" width="8" height="8" rx="1"/><rect x="3" y="13" width="8" height="8" rx="1"/><rect x="13" y="13" width="8" height="8" rx="1"/></svg>' },
            { id: "mechanic", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0-1.4 0l-6 6a1 1 0 0 0 0 1.4l3 3a1 1 0 0 0 1.4 0l6-6a1 1 0 0 0 0-1.4z"/><circle cx="7.5" cy="17.5" r="2"/><circle cx="17.5" cy="7.5" r="1.4"/></svg>' },
            { id: "actech", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="2" x2="12" y2="22"/><line x1="4.9" y1="4.9" x2="19.1" y2="19.1"/><line x1="2" y1="12" x2="22" y2="12"/><line x1="4.9" y1="19.1" x2="19.1" y2="4.9"/></svg>' },
            { id: "roofing", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12L12 4l9 8"/><path d="M5 11v9h14v-9"/></svg>' },
            { id: "labourer", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12a8 8 0 0 1 16 0"/><path d="M2 12h20"/><path d="M12 12V8"/></svg>' },
            { id: "other", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="5" cy="12" r="1.6"/><circle cx="12" cy="12" r="1.6"/><circle cx="19" cy="12" r="1.6"/></svg>' }
        ];

        const avatarGrad = ['#e3a13c', '#bf5535'];

        /* ============================================================
           STATE
           ============================================================ */
        let currentLang = "en";
        let currentStep = 1;
        const totalSteps = 5;

        let mainSkill = null;
        let additionalSkills = [];
        let languagesSelected = [];
        let rateType = "day";
        let workType = null;
        let availability = null;
        let workingDays = [];
        let serviceAreas = [];
        let willingTravel = null;
        let photoDataUrl = null;
        let certFiles = [];

        /* ============================================================
           INIT HELPERS
           ============================================================ */
        function fillDistrictSelect(selectEl) {
            selectEl.innerHTML = `<option value="" data-i18n="selectDistrict">${translations[currentLang].selectDistrict}</option>`;
            districtsList.forEach(d => {
                const opt = document.createElement("option");
                opt.value = d; opt.textContent = d;
                selectEl.appendChild(opt);
            });
        }

        function renderMainSkillList(filter) {
            const list = document.getElementById("mainSkillList");
            const t = translations[currentLang];
            const f = (filter || "").toLowerCase();
            const filtered = categories.filter(c => t.categories[c.id].toLowerCase().includes(f));
            if (filtered.length === 0) {
                list.innerHTML = `<div class="combo-empty">${currentLang === 'si' ? 'ප්‍රතිඵල නැත' : 'No results found'}</div>`;
                return;
            }
            list.innerHTML = filtered.map(c => `
    <div class="combo-item ${mainSkill === c.id ? 'selected' : ''}" data-cat="${c.id}">
      ${c.icon}<span>${t.categories[c.id]}</span>
    </div>
  `).join("");
            list.querySelectorAll(".combo-item").forEach(item => {
                item.addEventListener("click", () => {
                    mainSkill = item.dataset.cat;
                    document.getElementById("mainSkillInput").value = t.categories[mainSkill];
                    list.classList.remove("show");
                    document.getElementById("f-mainSkill").classList.remove("has-error");
                });
            });
        }

        const mainSkillInput = () => document.getElementById("mainSkillInput");

        /* ============================================================
           CHIP INPUT (generic factory for skills / areas)
           ============================================================ */
        function setupChipInput(inputId, boxId, arrRef, onChange) {
            const input = document.getElementById(inputId);
            input.addEventListener("keydown", e => {
                if (e.key === "Enter") {
                    e.preventDefault();
                    const val = input.value.trim();
                    if (val && !arrRef.arr.includes(val)) {
                        arrRef.arr.push(val);
                        renderChips(boxId, inputId, arrRef, onChange);
                    }
                    input.value = "";
                } else if (e.key === "Backspace" && input.value === "" && arrRef.arr.length) {
                    arrRef.arr.pop();
                    renderChips(boxId, inputId, arrRef, onChange);
                }
            });
        }
        function renderChips(boxId, inputId, arrRef, onChange) {
            const box = document.getElementById(boxId);
            const input = document.getElementById(inputId);
            box.querySelectorAll(".chip").forEach(c => c.remove());
            arrRef.arr.forEach((val, idx) => {
                const chip = document.createElement("span");
                chip.className = "chip";
                chip.innerHTML = `<span>${val}</span>`;
                const rm = document.createElement("button");
                rm.type = "button"; rm.className = "chip-remove";
                rm.innerHTML = `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>`;
                rm.onclick = () => { arrRef.arr.splice(idx, 1); renderChips(boxId, inputId, arrRef, onChange); };
                chip.appendChild(rm);
                box.insertBefore(chip, input);
            });
            if (onChange) onChange();
        }

        const skillsRef = { arr: additionalSkills };
        const areasRef = { arr: serviceAreas };

        /* ============================================================
           SEGMENTED / TOGGLE GROUPS
           ============================================================ */
        function setupSingleSelectGroup(groupId, setter, clearErrorField) {
            document.querySelectorAll(`#${groupId} .seg-option, #${groupId} .toggle-opt`).forEach(btn => {
                btn.addEventListener("click", () => {
                    document.querySelectorAll(`#${groupId} .seg-option, #${groupId} .toggle-opt`).forEach(b => b.classList.remove("selected"));
                    btn.classList.add("selected");
                    setter(btn.dataset.val || btn.dataset.lang);
                    if (clearErrorField) document.getElementById(clearErrorField).classList.remove("has-error");
                });
            });
        }
        function setupMultiSelectGroup(groupId, arr, clearErrorField) {
            document.querySelectorAll(`#${groupId} .seg-option, #${groupId} .day-chip`).forEach(btn => {
                btn.addEventListener("click", () => {
                    const val = btn.dataset.val || btn.dataset.lang;
                    const idx = arr.indexOf(val);
                    if (idx === -1) { arr.push(val); btn.classList.add("selected"); }
                    else { arr.splice(idx, 1); btn.classList.remove("selected"); }
                    if (clearErrorField) document.getElementById(clearErrorField).classList.remove("has-error");
                });
            });
        }

        /* ============================================================
           STEP NAVIGATION
           ============================================================ */
        function updateStepper() {
            for (let i = 1; i <= totalSteps; i++) {
                const node = document.getElementById("node" + i);
                const label = document.getElementById("label" + i);
                const line = document.getElementById("line" + i);
                node.classList.remove("done", "current");
                label.classList.remove("active");
                if (i < currentStep) { node.classList.add("done"); node.innerHTML = `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>`; }
                else if (i === currentStep) { node.classList.add("current"); node.textContent = i; label.classList.add("active"); }
                else { node.textContent = i; }
                if (line) { if (i < currentStep) line.classList.add("filled"); else line.classList.remove("filled"); }
            }
        }

        function validateStep(step) {
            let valid = true;
            if (step === 1) {
                const city = document.getElementById("city").value.trim();
                document.getElementById("f-city").classList.toggle("has-error", city.length === 0);
                if (city.length === 0) valid = false;
                const district = document.getElementById("district").value;
                document.getElementById("f-district").classList.toggle("has-error", district === "");
                if (district === "") valid = false;
                const email = document.getElementById("email").value.trim();
                if (email.length > 0) {
                    const ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
                    document.getElementById("email").closest(".field").classList.toggle("has-error", !ok);
                    if (!ok) valid = false;
                }
            }
            if (step === 2) {
                document.getElementById("f-mainSkill").classList.toggle("has-error", !mainSkill);
                if (!mainSkill) valid = false;
                const exp = document.getElementById("experience").value;
                document.getElementById("f-experience").classList.toggle("has-error", exp === "");
                if (exp === "") valid = false;
                const bio = document.getElementById("bio").value.trim();
                document.getElementById("f-bio").classList.toggle("has-error", bio.length < 20);
                if (bio.length < 20) valid = false;
            }
            if (step === 3) {
                const rate = document.getElementById("rate").value;
                document.getElementById("f-rate").classList.toggle("has-error", !rate || Number(rate) <= 0);
                if (!rate || Number(rate) <= 0) valid = false;
                document.getElementById("f-workType").classList.toggle("has-error", !workType);
                if (!workType) valid = false;
                document.getElementById("f-availability").classList.toggle("has-error", !availability);
                if (!availability) valid = false;
                document.getElementById("f-days").classList.toggle("has-error", workingDays.length === 0);
                if (workingDays.length === 0) valid = false;
            }
            if (step === 4) {
                const city = document.getElementById("serviceCity").value.trim();
                document.getElementById("f-serviceCity").classList.toggle("has-error", city.length === 0);
                if (city.length === 0) valid = false;
                const district = document.getElementById("serviceDistrict").value;
                document.getElementById("f-serviceDistrict").classList.toggle("has-error", district === "");
                if (district === "") valid = false;
            }
            return valid;
        }

        function goToStep(step) {
            if (step > currentStep) {
                if (!validateStep(currentStep)) {
                    const firstError = document.querySelector(`#panel${currentStep} .has-error`);
                    if (firstError) {
                        firstError.classList.add("shake");
                        setTimeout(() => firstError.classList.remove("shake"), 500);
                        firstError.scrollIntoView({ behavior: "smooth", block: "center" });
                    }
                    return;
                }
                // carry city/district defaults into step 4 the first time
                if (step === 4) {
                    const sc = document.getElementById("serviceCity");
                    const sd = document.getElementById("serviceDistrict");
                    if (sc.value === "") sc.value = document.getElementById("city").value;
                    if (sd.value === "") sd.value = document.getElementById("district").value;
                }
                if (step === 5) {
                    renderPreview();
                }
            }
            document.getElementById("panel" + currentStep).style.display = "none";
            currentStep = step;
            document.getElementById("panel" + currentStep).style.display = "block";
            updateStepper();
            window.scrollTo({ top: document.getElementById("panel" + currentStep).offsetTop - 90, behavior: "smooth" });
        }

        /* ============================================================
           PHOTO UPLOAD
           ============================================================ */
        document.getElementById("photoInput").addEventListener("change", function (e) {
            const file = e.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function (ev) {
                photoDataUrl = ev.target.result;
                document.getElementById("photoCircle").innerHTML = `<img src="${photoDataUrl}" alt="Profile photo"><div class="cam-overlay"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg></div>`;
            };
            reader.readAsDataURL(file);
        });

        /* ============================================================
           CERTIFICATE FILES
           ============================================================ */
        document.getElementById("certInput").addEventListener("change", function (e) {
            Array.from(e.target.files).forEach(f => certFiles.push(f.name));
            renderCertList();
            e.target.value = "";
        });
        function renderCertList() {
            const list = document.getElementById("certList");
            list.innerHTML = certFiles.map((name, idx) => `
    <div class="file-item">
      <svg class="file-icn" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
      <span>${name}</span>
      <button type="button" class="file-remove" onclick="removeCert(${idx})"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
    </div>
  `).join("");
        }
        function removeCert(idx) { certFiles.splice(idx, 1); renderCertList(); }

        /* ============================================================
           BIO CHAR COUNT
           ============================================================ */
        document.getElementById("bio").addEventListener("input", function () {
            document.getElementById("bioCount").textContent = this.value.length;
            if (this.value.trim().length >= 20) document.getElementById("f-bio").classList.remove("has-error");
        });

        /* Clear errors on input for simple text fields */
        ["city", "district", "email", "serviceCity", "serviceDistrict", "rate", "experience"].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.addEventListener("input", () => {
                const field = el.closest(".field");
                if (field) field.classList.remove("has-error");
            });
        });

        /* ============================================================
           PREVIEW RENDER
           ============================================================ */
        function renderPreview() {
            const t = translations[currentLang];
            const name = document.getElementById("fullName").value;
            const city = document.getElementById("serviceCity").value || document.getElementById("city").value;
            const exp = document.getElementById("experience").value;
            const expLabelMap = { "0-1": t.exp01, "1-3": t.exp13, "3-5": t.exp35, "5-10": t.exp510, "10+": t.exp10plus };
            const rate = document.getElementById("rate").value || "—";
            const rateSuffix = rateType === "day" ? t.perDayShort : rateType === "hour" ? t.perHourShort : t.perJobShort;
            const bio = document.getElementById("bio").value.trim();
            const roleLabel = mainSkill ? t.categories[mainSkill] : "—";
            const roleIcon = mainSkill ? categories.find(c => c.id === mainSkill).icon : "";

            const availClass = availability || "unavailable";
            const availLabel = availability === "available" ? t.available : availability === "busy" ? t.busy : availability === "unavailable" ? t.notAvailable : "—";

            const initials = name.split(" ").map(p => p[0]).slice(0, 2).join("").toUpperCase();
            const avatarHtml = photoDataUrl ? `<img src="${photoDataUrl}" alt="${name}">` : initials;

            const skillsChips = additionalSkills.length
                ? `<div class="preview-chips">${additionalSkills.map(s => `<span class="preview-chip">${s}</span>`).join("")}</div>`
                : `<div class="preview-empty">${t.noSkillsYet}</div>`;

            const areasChips = serviceAreas.length
                ? `<div class="preview-chips">${serviceAreas.map(a => `<span class="preview-chip">${a}</span>`).join("")}</div>`
                : `<div class="preview-empty">${t.noAreasYet}</div>`;

            const travelNote = willingTravel === "yes" ? t.willTravel : willingTravel === "no" ? t.wontTravel : "";

            document.getElementById("previewCard").innerHTML = `
    <div class="preview-top">
      <div class="preview-avatar">${avatarHtml}</div>
      <div style="flex:1;min-width:160px;">
        <div class="preview-name">${name}</div>
        <div class="preview-role">${roleIcon}<span>${roleLabel}</span></div>
        <div class="preview-loc">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>${city}${travelNote ? " • " + travelNote : ""}</span>
        </div>
      </div>
      <span class="avail-badge ${availClass}"><span class="dot"></span>${availLabel}</span>
    </div>

    <div class="preview-stats">
      <div class="preview-stat"><div class="num">${exp ? expLabelMap[exp] : "—"}</div><div class="lbl">${t.yrsExp}</div></div>
      <div class="preview-stat"><div class="num">Rs. ${rate}${rateSuffix}</div><div class="lbl">${t.rateLabel}</div></div>
      <div class="preview-stat"><div class="num">${workingDays.length}/7</div><div class="lbl">${t.workingDaysLabel}</div></div>
    </div>

    <div class="preview-rating">
      <div class="stars">
        ${Array(5).fill(0).map(() => `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>`).join("")}
      </div>
      <span class="rlabel">${t.newProfile}</span>
    </div>

    <div class="preview-section">
      <div class="preview-section-title">${t.about}</div>
      <div class="preview-bio">${bio || "—"}</div>
    </div>

    <div class="preview-section">
      <div class="preview-section-title">${t.skills}</div>
      ${skillsChips}
    </div>

    <div class="preview-section">
      <div class="preview-section-title">${t.serviceAreas}</div>
      ${areasChips}
    </div>
  `;
        }

        /* ============================================================
           FORM SUBMIT
           ============================================================ */
        document.getElementById("profileForm").addEventListener("submit", function (e) {
            e.preventDefault();
            const btn = document.getElementById("saveBtn");
            btn.disabled = true;
            setTimeout(() => {
                btn.disabled = false;
                document.getElementById("successOverlay").classList.add("show");

                // Done button click
                document.querySelector("#successOverlay .btn-primary").onclick = function () {
                    window.location.href = "workerdash.html";
                };
            }, 500);
        });

        /* ============================================================
           LANGUAGE SWITCHING
           ============================================================ */
        function setLang(lang) {
            currentLang = lang;
            document.documentElement.lang = lang;
            document.getElementById("btnEn").classList.toggle("active", lang === "en");
            document.getElementById("btnSi").classList.toggle("active", lang === "si");

            document.querySelectorAll("[data-i18n]").forEach(el => {
                const key = el.getAttribute("data-i18n");
                if (translations[lang][key] !== undefined) el.textContent = translations[lang][key];
            });
            document.querySelectorAll("[data-i18n-ph]").forEach(el => {
                const key = el.getAttribute("data-i18n-ph");
                if (translations[lang][key] !== undefined) el.setAttribute("placeholder", translations[lang][key]);
            });

            fillDistrictSelect(document.getElementById("district"));
            fillDistrictSelect(document.getElementById("serviceDistrict"));
            renderMainSkillList(mainSkillInput().value);

            if (currentStep === 5) renderPreview();
        }

        /* ============================================================
           COMBO BOX EVENTS (main skill search)
           ============================================================ */
        mainSkillInput().addEventListener("focus", () => {
            renderMainSkillList(mainSkillInput().value);
            document.getElementById("mainSkillList").classList.add("show");
        });
        mainSkillInput().addEventListener("input", () => {
            mainSkill = null;
            renderMainSkillList(mainSkillInput().value);
            document.getElementById("mainSkillList").classList.add("show");
        });
        document.addEventListener("click", e => {
            if (!e.target.closest(".combo")) document.getElementById("mainSkillList").classList.remove("show");
        });

        /* ============================================================
           INIT
           ============================================================ */
        fillDistrictSelect(document.getElementById("district"));
        fillDistrictSelect(document.getElementById("serviceDistrict"));
        renderMainSkillList("");

        setupChipInput("skillsInput", "skillsBox", skillsRef);
        setupChipInput("areasInput", "areasBox", areasRef);

        setupSingleSelectGroup("rateTypeGroup", v => rateType = v);
        document.querySelector('#rateTypeGroup .seg-option[data-val="day"]').classList.add("selected");

        setupSingleSelectGroup("workTypeGroup", v => workType = v, "f-workType");
        setupSingleSelectGroup("availabilityGroup", v => availability = v, "f-availability");
        setupSingleSelectGroup("travelGroup", v => willingTravel = v);
        setupMultiSelectGroup("daysGroup", workingDays, "f-days");
        setupMultiSelectGroup("languagesGroup", languagesSelected);

        setLang("en");
        updateStepper();
    </script>
</body>

</html>
