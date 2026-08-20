
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
        serviceCityLabel: "Main City", areasLabel: "Areas Willing to Work", areasPh: "Type an area and press Enter e.g. Kottawa",addArea:"Add",
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
        serviceCityLabel: "ප්‍රධාන නගරය", areasLabel: "වැඩ කිරීමට කැමති ප්‍රදේශ", areasPh: "ප්‍රදේශයක් ටයිප් කර Enter ඔබන්න උදා: කොට්ටාව",addArea:"එකතු කරන්න",
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
            window.location.href = "workerdash.php";
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
/* =========================================================
   AREAS WILLING TO WORK
========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    const areasInput = document.getElementById("areasInput");
    const addAreaBtn = document.getElementById("addAreaBtn");
    const areaChips = document.getElementById("areaChips");


    /* Check elements */

    if (!areasInput || !addAreaBtn || !areaChips) {
        console.error("Areas elements not found!");
        return;
    }


    /* Store cities */

    let selectedAreas = [];


    /* =====================================================
       ADD CITY
    ===================================================== */

    function addArea() {

        const area = areasInput.value.trim();


        /* Empty */

        if (area === "") {
            return;
        }


        /* Duplicate */

        const duplicate = selectedAreas.some(function (item) {

            return item.toLowerCase() === area.toLowerCase();

        });


        if (duplicate) {

            areasInput.value = "";

            return;
        }


        /* Add */

        selectedAreas.push(area);


        /* Clear input */

        areasInput.value = "";


        /* Display */

        renderAreas();


        /* Focus */

        areasInput.focus();

    }


    /* =====================================================
       DISPLAY CITIES
    ===================================================== */

    function renderAreas() {

        areaChips.innerHTML = "";


        selectedAreas.forEach(function (area, index) {

            const chip = document.createElement("div");

            chip.className = "area-chip";


            const text = document.createElement("span");

            text.textContent = area;


            const removeBtn = document.createElement("button");

            removeBtn.type = "button";

            removeBtn.textContent = "×";


            removeBtn.addEventListener("click", function () {

                selectedAreas.splice(index, 1);

                renderAreas();

                areasInput.focus();

            });


            chip.appendChild(text);

            chip.appendChild(removeBtn);

            areaChips.appendChild(chip);

        });

    }


    /* =====================================================
       BUTTON CLICK
    ===================================================== */

    addAreaBtn.addEventListener("click", function (event) {

        event.preventDefault();

        addArea();

    });


    /* =====================================================
       ENTER KEY
    ===================================================== */

    areasInput.addEventListener("keydown", function (event) {

        if (event.key === "Enter") {

            event.preventDefault();

            addArea();

        }

    });

});
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
