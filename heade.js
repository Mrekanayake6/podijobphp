


let language = "en";


/* =====================================================
   LANGUAGE
===================================================== */

function changeLanguage(lang) {

    language = lang;


    document
        .querySelectorAll("[data-si]")
        .forEach(el => {

            if (
                el.tagName === "INPUT"
            ) {

                el.placeholder =
                    lang === "si"
                        ? el.dataset.si
                        : el.dataset.en;

            }

            else {

                el.textContent =
                    lang === "si"
                        ? el.dataset.si
                        : el.dataset.en;

            }

        });


    document
        .querySelectorAll(".lang button")
        .forEach(btn => {

            btn.classList.remove(
                "active"
            );

        });


    if (lang === "si") {

        document
            .getElementById("siBtn")
            .classList.add("active");

    }

    else {

        document
            .getElementById("enBtn")
            .classList.add("active");

    }




}


/* =====================================================
   FIELD ERROR
===================================================== */

function markFieldError(input) {

    if (!input) return;


    input.classList.remove(
        "input-error"
    );


    void input.offsetWidth;


    input.classList.add(
        "input-error"
    );

}


function clearFieldError(event) {

    event.target.classList.remove(
        "input-error"
    );

}


/* =====================================================
   PASSWORD
===================================================== */

const EYE_OPEN_SVG = `

            <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">

                <path
                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>

                <circle
                    cx="12"
                    cy="12"
                    r="3"/>

            </svg>

        `;


const EYE_OFF_SVG = `

            <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">

                <path
                    d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.6 18.6 0 0 1 5.06-5.94M9.9 4.24A10.94 10.94 0 0 1 12 4c7 0 11 8 11 8a18.6 18.6 0 0 1-2.16 3.19"/>

                <line
                    x1="1"
                    y1="1"
                    x2="23"
                    y2="23"/>

            </svg>

        `;


function togglePasswordVisibility(
    btn,
    inputId
) {

    const input =
        document.getElementById(
            inputId
        );


    if (!input) return;


    if (
        input.type === "password"
    ) {

        input.type = "text";

        btn.innerHTML =
            EYE_OPEN_SVG;

        btn.setAttribute(
            "aria-label",
            "Hide password"
        );

    }

    else {

        input.type = "password";

        btn.innerHTML =
            EYE_OFF_SVG;

        btn.setAttribute(
            "aria-label",
            "Show password"
        );

    }

}


/* =====================================================
   FIELD ERROR CLEARING
===================================================== */

function initFieldErrorClearing() {

    [

        "userLoginIdentifier",
        "userLoginPassword",

        "workerLoginIdentifier",
        "workerLoginPassword",

        "userRegisterName",
        "userRegisterMobile",
        "userRegisterEmail",
        "userRegisterPassword",
        "userRegisterConfirm",

        "workerRegisterName",
        "workerRegisterMobile",
        "workerRegisterEmail",
        "workerRegisterPassword",
        "workerRegisterConfirm"

    ].forEach(id => {

        const el =
            document.getElementById(id);


        if (el) {

            el.addEventListener(
                "input",
                clearFieldError
            );

        }

    });


    const workerCategorySelect =
        document.getElementById(
            "workerCategory"
        );


    if (workerCategorySelect) {

        workerCategorySelect.addEventListener(
            "change",
            clearFieldError
        );

    }

}


/* =====================================================
   USER STORAGE
===================================================== */

function getSavedUser() {

    try {

        return JSON.parse(
            localStorage.getItem(
                "podijobUser"
            )
        ) || null;

    }

    catch (error) {

        return null;

    }

}


function saveUser(user) {

    localStorage.setItem(
        "podijobUser",
        JSON.stringify(user)
    );

}


/* =====================================================
   WORKER STORAGE
===================================================== */

function getSavedWorker() {

    try {

        return JSON.parse(
            localStorage.getItem(
                "podijobWorker"
            )
        ) || null;

    }

    catch (error) {

        return null;

    }

}


function saveWorker(worker) {

    localStorage.setItem(
        "podijobWorker",
        JSON.stringify(worker)
    );

}


/* =====================================================
   USER SESSION
===================================================== */

function getLoggedInUser() {

    try {

        return JSON.parse(
            localStorage.getItem(
                "podijobLoggedInUser"
            )
        ) || null;

    }

    catch (error) {

        return null;

    }

}


function setLoggedInUser(user) {

    if (user) {

        localStorage.setItem(
            "podijobLoggedInUser",
            JSON.stringify(user)
        );

    }

    else {

        localStorage.removeItem(
            "podijobLoggedInUser"
        );

    }

}


/* =====================================================
   WORKER SESSION
===================================================== */

function getLoggedInWorker() {

    try {

        return JSON.parse(
            localStorage.getItem(
                "podijobLoggedInWorker"
            )
        ) || null;

    }

    catch (error) {

        return null;

    }

}


function setLoggedInWorker(worker) {

    if (worker) {

        localStorage.setItem(
            "podijobLoggedInWorker",
            JSON.stringify(worker)
        );

    }

    else {

        localStorage.removeItem(
            "podijobLoggedInWorker"
        );

    }

}


/* =====================================================
   DEMO USER
===================================================== */

const DEMO_USER = {

    name: "Demo User",

    email: "lakshanekanayake6@gmail.com",

    mobile: "0712345678",

    password: "123456",

    photo:
        "https://randomuser.me/api/portraits/men/45.jpg"

};


/* =====================================================
   MAIN HEADER UPDATE
===================================================== */

function updateHeader() {

    const userLoginBtn =
        document.getElementById(
            "userLoginBtn"
        );


    const workerLoginBtn =
        document.getElementById(
            "workerLoginBtn"
        );


    const profile =
        document.getElementById(
            "navProfile"
        );


    const profileImg =
        document.getElementById(
            "navProfileImg"
        );


    const profileIcon =
        document.getElementById(
            "navProfileIcon"
        );


    const profileName =
        document.getElementById(
            "navProfileName"
        );


    const profileMenu =
        document.getElementById(
            "navProfileMenu"
        );


    if (
        !userLoginBtn ||
        !workerLoginBtn ||
        !profile
    ) {

        return;

    }


    const user =
        getLoggedInUser();


    const worker =
        getLoggedInWorker();


    /* =================================================
       NO SESSION
    ================================================= */

    if (!user && !worker) {

        userLoginBtn.style.display =
            "inline-flex";

        workerLoginBtn.style.display =
            "inline-flex";

        profile.classList.remove(
            "show"
        );


        profileName.textContent =
            "Account";


        profileImg.removeAttribute(
            "src"
        );


        profileImg.style.display =
            "none";


        profileIcon.style.display =
            "inline";


        profileMenu?.classList.remove(
            "show"
        );


        return;

    }


    /* =================================================
       USER SESSION
    ================================================= */

    if (user) {

        userLoginBtn.style.display =
            "none";


        workerLoginBtn.style.display =
            "inline-flex";


        profile.classList.add(
            "show"
        );


        profileName.textContent =
            user.name || "User";


        if (user.photo) {

            profileImg.src =
                user.photo;


            profileImg.style.display =
                "block";


            profileIcon.style.display =
                "none";

        }

        else {

            profileImg.removeAttribute(
                "src"
            );


            profileImg.style.display =
                "none";


            profileIcon.style.display =
                "inline";

        }


        return;

    }


    /* =================================================
       WORKER SESSION
    ================================================= */

    if (worker) {

        workerLoginBtn.style.display =
            "none";


        userLoginBtn.style.display =
            "inline-flex";


        profile.classList.add(
            "show"
        );


        profileName.textContent =
            worker.name || "Worker";


        if (worker.photo) {

            profileImg.src =
                worker.photo;


            profileImg.style.display =
                "block";


            profileIcon.style.display =
                "none";

        }

        else {

            profileImg.removeAttribute(
                "src"
            );


            profileImg.style.display =
                "none";


            profileIcon.style.display =
                "inline";

        }

    }

}


/* =====================================================
   USER LOGIN
===================================================== */

function handleUserLogin(event) {

    event.preventDefault();


    const identifierInput =
        document.getElementById(
            "userLoginIdentifier"
        );


    const passwordInput =
        document.getElementById(
            "userLoginPassword"
        );


    const identifier =
        identifierInput.value.trim();


    const password =
        passwordInput.value;


    let hasEmptyField =
        false;


    if (!identifier) {

        markFieldError(
            identifierInput
        );

        hasEmptyField = true;

    }


    if (!password) {

        markFieldError(
            passwordInput
        );

        hasEmptyField = true;

    }


    if (hasEmptyField) {

        alert(

            language === "si"

                ? "Email/Mobile සහ Password ඇතුළත් කරන්න."

                : "Please enter your email/mobile and password."

        );

        return;

    }


    const savedUser =
        getSavedUser();


    let user =
        null;


    if (

        savedUser &&

        (

            identifier === savedUser.email ||

            identifier === savedUser.mobile

        ) &&

        password === savedUser.password

    ) {

        user =
            savedUser;

    }


    else if (

        (

            identifier === DEMO_USER.email ||

            identifier === DEMO_USER.mobile

        ) &&

        password === DEMO_USER.password

    ) {

        user =
            DEMO_USER;

    }


    if (!user) {

        alert(

            language === "si"

                ? "Login විස්තර වැරදියි."

                : "Invalid email/mobile or password."

        );

        return;

    }


    /* REMOVE WORKER SESSION */

    setLoggedInWorker(null);


    /* CREATE USER SESSION */

    setLoggedInUser(user);


    /* UPDATE HEADER */

    updateHeader();


    closeUserAuth();


    document
        .getElementById(
            "loginForm"
        )
        .reset();


    alert(

        language === "si"

            ? `ආයුබෝවන් ${user.name}! Login සාර්ථකයි.`

            : `Welcome ${user.name}! Login successful.`

    );

}


/* =====================================================
   USER REGISTER
===================================================== */

function handleUserRegister(event) {

    event.preventDefault();


    const nameInput =
        document.getElementById(
            "userRegisterName"
        );


    const mobileInput =
        document.getElementById(
            "userRegisterMobile"
        );


    const emailInput =
        document.getElementById(
            "userRegisterEmail"
        );


    const passwordInput =
        document.getElementById(
            "userRegisterPassword"
        );


    const confirmInput =
        document.getElementById(
            "userRegisterConfirm"
        );


    const name =
        nameInput.value.trim();


    const mobile =
        mobileInput.value.trim();


    const email =
        emailInput.value.trim();


    const password =
        passwordInput.value;


    const confirmPassword =
        confirmInput.value;


    const previewImage =
        document.getElementById(
            "userPhotoPreview"
        );


    const photo =

        previewImage &&
            previewImage.style.display === "block"

            ? previewImage.src

            : "";


    let hasEmptyField =
        false;


    if (!name) {

        markFieldError(nameInput);

        hasEmptyField = true;

    }


    if (!mobile) {

        markFieldError(mobileInput);

        hasEmptyField = true;

    }


    if (!email) {

        markFieldError(emailInput);

        hasEmptyField = true;

    }


    if (!password) {

        markFieldError(passwordInput);

        hasEmptyField = true;

    }


    if (!confirmPassword) {

        markFieldError(confirmInput);

        hasEmptyField = true;

    }


    if (hasEmptyField) {

        alert(

            language === "si"

                ? "සියලුම fields පුරවන්න."

                : "Please fill all fields."

        );

        return;

    }


    if (password.length < 6) {

        markFieldError(
            passwordInput
        );


        alert(

            language === "si"

                ? "Password එක අවම වශයෙන් characters 6ක් විය යුතුයි."

                : "Password must be at least 6 characters."

        );

        return;

    }


    if (
        password !==
        confirmPassword
    ) {

        markFieldError(
            passwordInput
        );


        markFieldError(
            confirmInput
        );


        alert(

            language === "si"

                ? "Passwords දෙක එක සමාන නැහැ."

                : "Passwords do not match."

        );

        return;

    }


    const user = {

        name,

        mobile,

        email,

        password,

        photo

    };


    saveUser(user);


    /* REMOVE WORKER SESSION */

    setLoggedInWorker(null);


    /* CREATE USER SESSION */

    setLoggedInUser(user);


    updateHeader();


    closeUserAuth();


    document
        .getElementById(
            "registerForm"
        )
        .reset();


    resetPhotoPreview(
        "userPhotoPreview",
        "userPhotoIcon"
    );


    alert(

        language === "si"

            ? "ගිණුම සාර්ථකව සාදා Login විය!"

            : "Account created and logged in successfully!"

    );

}


/* =====================================================
   WORKER LOGIN
===================================================== */

function handleWorkerLogin(event) {

    event.preventDefault();


    const identifierInput =
        document.getElementById(
            "workerLoginIdentifier"
        );


    const passwordInput =
        document.getElementById(
            "workerLoginPassword"
        );


    const identifier =
        identifierInput.value.trim();


    const password =
        passwordInput.value;


    let hasEmptyField =
        false;


    if (!identifier) {

        markFieldError(
            identifierInput
        );

        hasEmptyField = true;

    }


    if (!password) {

        markFieldError(
            passwordInput
        );

        hasEmptyField = true;

    }


    if (hasEmptyField) {

        alert(

            language === "si"

                ? "Email/Mobile සහ Password ඇතුළත් කරන්න."

                : "Please enter your email/mobile and password."

        );

        return;

    }


    const worker =
        getSavedWorker();


    if (

        !worker ||

        (

            identifier !== worker.email &&

            identifier !== worker.mobile

        ) ||

        password !== worker.password

    ) {

        alert(

            language === "si"

                ? "Worker Login විස්තර වැරදියි."

                : "Invalid worker login details."

        );

        return;

    }


    /* REMOVE USER SESSION */

    setLoggedInUser(null);


    /* CREATE WORKER SESSION */

    setLoggedInWorker(worker);


    /* UPDATE HEADER */

    updateHeader();


    closeWorkerAuth();


    document
        .getElementById(
            "workerLoginForm"
        )
        .reset();


    alert(

        language === "si"

            ? `ආයුබෝවන් ${worker.name}! Worker Login සාර්ථකයි.`

            : `Welcome ${worker.name}! Worker Login successful.`

    );

}


/* =====================================================
   WORKER REGISTER
===================================================== */

function handleWorkerRegister(event) {

    event.preventDefault();


    const nameInput =
        document.getElementById(
            "workerRegisterName"
        );


    const skillInput =
        document.getElementById(
            "workerCategory"
        );


    const mobileInput =
        document.getElementById(
            "workerRegisterMobile"
        );


    const emailInput =
        document.getElementById(
            "workerRegisterEmail"
        );


    const passwordInput =
        document.getElementById(
            "workerRegisterPassword"
        );


    const confirmInput =
        document.getElementById(
            "workerRegisterConfirm"
        );


    const name =
        nameInput.value.trim();


    const skill =
        skillInput.value.trim();


    const mobile =
        mobileInput.value.trim();


    const email =
        emailInput.value.trim();


    const password =
        passwordInput.value;


    const confirmPassword =
        confirmInput.value;


    let hasEmptyField =
        false;


    if (!name) {

        markFieldError(
            nameInput
        );

        hasEmptyField = true;

    }


    if (!skill) {

        markFieldError(
            skillInput
        );

        hasEmptyField = true;

    }


    if (!mobile) {

        markFieldError(
            mobileInput
        );

        hasEmptyField = true;

    }


    if (!email) {

        markFieldError(
            emailInput
        );

        hasEmptyField = true;

    }


    if (!password) {

        markFieldError(
            passwordInput
        );

        hasEmptyField = true;

    }


    if (!confirmPassword) {

        markFieldError(
            confirmInput
        );

        hasEmptyField = true;

    }


    if (hasEmptyField) {

        alert(

            language === "si"

                ? "සියලුම fields පුරවන්න."

                : "Please fill all fields."

        );

        return;

    }


    if (password.length < 6) {

        markFieldError(
            passwordInput
        );


        alert(

            language === "si"

                ? "Password එක අවම වශයෙන් characters 6ක් විය යුතුයි."

                : "Password must be at least 6 characters."

        );

        return;

    }


    if (
        password !==
        confirmPassword
    ) {

        markFieldError(
            passwordInput
        );


        markFieldError(
            confirmInput
        );


        alert(

            language === "si"

                ? "Passwords දෙක එක සමාන නැහැ."

                : "Passwords do not match."

        );

        return;

    }


    const worker = {

        name,

        skill,

        mobile,

        email,

        password,

        photo: ""

    };


    saveWorker(worker);


    /* REMOVE USER SESSION */

    setLoggedInUser(null);


    /* CREATE WORKER SESSION */

    setLoggedInWorker(worker);


    updateHeader();


    closeWorkerAuth();


    document
        .getElementById(
            "workerRegisterForm"
        )
        .reset();


    alert(

        language === "si"

            ? "Worker ගිණුම සාර්ථකව සාදා Login විය!"

            : "Worker account created and logged in successfully!"

    );


    /* GO WORKER PROFILE */

    window.location.href =
        "workerProfileUpdate.php";

}


/* =====================================================
   PROFILE MENU
===================================================== */

function toggleNavProfileMenu() {

    const menu =
        document.getElementById(
            "navProfileMenu"
        );


    if (menu) {

        menu.classList.toggle(
            "show"
        );

    }

}


/* =====================================================
   PROFILE
===================================================== */

function goToUserProfile() {

    const user =
        getLoggedInUser();


    const worker =
        getLoggedInWorker();


    document
        .getElementById(
            "navProfileMenu"
        )
        ?.classList.remove(
            "show"
        );


    if (user) {

        window.location.href =
            "userProfile.html";

        return;

    }


    if (worker) {

        window.location.href =
            "workerProfileUpdate.html";

        return;

    }

}


/* =====================================================
   LOGOUT
===================================================== */

function logoutNav() {

    const user =
        getLoggedInUser();


    const worker =
        getLoggedInWorker();


    if (user) {

        setLoggedInUser(null);

    }


    if (worker) {

        setLoggedInWorker(null);

    }


    document
        .getElementById(
            "navProfileMenu"
        )
        ?.classList.remove(
            "show"
        );


    updateHeader();


    alert(

        language === "si"

            ? "ඔබ Logout විය."

            : "You have been logged out."

    );

}


/* =====================================================
   PROFILE PHOTO
===================================================== */

function previewAuthPhoto(
    input,
    previewId,
    iconId
) {

    const file =
        input.files &&
        input.files[0];


    if (!file) return;


    if (
        !file.type.startsWith(
            "image/"
        )
    ) {

        alert(

            language === "si"

                ? "Image file එකක් තෝරන්න."

                : "Please select an image file."

        );


        input.value = "";

        return;

    }


    const preview =
        document.getElementById(
            previewId
        );


    const icon =
        document.getElementById(
            iconId
        );


    const reader =
        new FileReader();


    reader.onload =
        function (e) {

            preview.src =
                e.target.result;


            preview.style.display =
                "block";


            icon.style.display =
                "none";

        };


    reader.readAsDataURL(file);

}


function resetPhotoPreview(
    previewId,
    iconId
) {

    const preview =
        document.getElementById(
            previewId
        );


    const icon =
        document.getElementById(
            iconId
        );


    if (preview) {

        preview.removeAttribute(
            "src"
        );


        preview.style.display =
            "none";

    }


    if (icon) {

        icon.style.display =
            "inline";

    }

}


/* =====================================================
   USER MODAL
===================================================== */

function openUserAuth() {

    document
        .getElementById(
            "userAuthModal"
        )
        .classList.add("show");


    document.body.classList.add(
        "modal-open"
    );

}


function closeUserAuth() {

    document
        .getElementById(
            "userAuthModal"
        )
        .classList.remove("show");


    document.body.classList.remove(
        "modal-open"
    );

}


function handleOverlayClick(e) {

    if (
        e.target.id ===
        "userAuthModal"
    ) {

        closeUserAuth();

    }

}


function switchAuthTab(tab) {

    const loginTabBtn =
        document.getElementById(
            "loginTabBtn"
        );


    const registerTabBtn =
        document.getElementById(
            "registerTabBtn"
        );


    const loginForm =
        document.getElementById(
            "loginForm"
        );


    const registerForm =
        document.getElementById(
            "registerForm"
        );


    if (tab === "login") {

        loginTabBtn.classList.add(
            "active"
        );


        registerTabBtn.classList.remove(
            "active"
        );


        loginForm.classList.add(
            "active"
        );


        registerForm.classList.remove(
            "active"
        );

    }

    else {

        registerTabBtn.classList.add(
            "active"
        );


        loginTabBtn.classList.remove(
            "active"
        );


        registerForm.classList.add(
            "active"
        );


        loginForm.classList.remove(
            "active"
        );

    }

}


/* =====================================================
   WORKER MODAL
===================================================== */

function openWorkerAuth() {

    document
        .getElementById(
            "workerAuthModal"
        )
        .classList.add("show");


    document.body.classList.add(
        "modal-open"
    );

}


function closeWorkerAuth() {

    document
        .getElementById(
            "workerAuthModal"
        )
        .classList.remove("show");


    document.body.classList.remove(
        "modal-open"
    );

}


function handleWorkerOverlayClick(e) {

    if (
        e.target.id ===
        "workerAuthModal"
    ) {

        closeWorkerAuth();

    }

}


function switchWorkerAuthTab(tab) {

    const loginTabBtn =
        document.getElementById(
            "workerLoginTabBtn"
        );


    const registerTabBtn =
        document.getElementById(
            "workerRegisterTabBtn"
        );


    const loginForm =
        document.getElementById(
            "workerLoginForm"
        );


    const registerForm =
        document.getElementById(
            "workerRegisterForm"
        );


    if (tab === "login") {

        loginTabBtn.classList.add(
            "active"
        );


        registerTabBtn.classList.remove(
            "active"
        );


        loginForm.classList.add(
            "active"
        );


        registerForm.classList.remove(
            "active"
        );

    }

    else {

        registerTabBtn.classList.add(
            "active"
        );


        loginTabBtn.classList.remove(
            "active"
        );


        registerForm.classList.add(
            "active"
        );


        loginForm.classList.remove(
            "active"
        );

    }

}


/* =====================================================
   ESCAPE
===================================================== */

document.addEventListener(
    "keydown",
    function (e) {

        if (e.key === "Escape") {

            closeUserAuth();

            closeWorkerAuth();

        }

    }
);


/* =====================================================
   PROFILE OUTSIDE CLICK
===================================================== */

document.addEventListener(
    "click",
    function (event) {

        const profile =
            document.getElementById(
                "navProfile"
            );


        const menu =
            document.getElementById(
                "navProfileMenu"
            );


        if (

            profile &&

            menu &&

            !profile.contains(
                event.target
            )

        ) {

            menu.classList.remove(
                "show"
            );

        }

    }
);


/* =====================================================
   INITIAL SESSION
===================================================== */

function initSession() {

    const user =
        getLoggedInUser();


    const worker =
        getLoggedInWorker();


    /*
     If both sessions somehow exist,
     worker session gets priority.
    */

    if (user && worker) {

        setLoggedInUser(null);

    }


    updateHeader();

}

/* =========================================================
FORGOT PASSWORD SYSTEM
========================================================= */

const forgotPasswordState = {
    user: {
        step: 1,
        identifier: "",
        otp: "",
        timer: null
    },

    worker: {
        step: 1,
        identifier: "",
        otp: "",
        timer: null
    }
};


/* =========================================================
   OPEN FORGOT PASSWORD
========================================================= */

function openForgotPassword(type) {

    const modalId =
        type === "user"
            ? "userAuthModal"
            : "workerAuthModal";

    const modal = document.getElementById(modalId);

    if (!modal) return;

    const forms = modal.querySelector(".auth-forms");

    if (!forms) return;

    /* Hide login/register */

    forms.querySelectorAll(".auth-form").forEach(form => {
        form.classList.remove("active");
    });

    /* Hide tabs */

    const tabs = modal.querySelector(".auth-tabs");

    if (tabs) {
        tabs.style.display = "none";
    }

    /* Show forgot password */

    const forgot =
        document.getElementById(
            type === "user"
                ? "userForgotPassword"
                : "workerForgotPassword"
        );

    if (!forgot) return;

    forgot.classList.add("active");

    resetForgotPassword(type);

    updateLanguageElements();
}


/* =========================================================
   BACK TO LOGIN
========================================================= */

function backToLogin(type) {

    const modal =
        document.getElementById(
            type === "user"
                ? "userAuthModal"
                : "workerAuthModal"
        );

    if (!modal) return;

    const forgot =
        document.getElementById(
            type === "user"
                ? "userForgotPassword"
                : "workerForgotPassword"
        );

    if (forgot) {
        forgot.classList.remove("active");
    }

    const tabs = modal.querySelector(".auth-tabs");

    if (tabs) {
        tabs.style.display = "";
    }

    const loginForm =
        document.getElementById(
            type === "user"
                ? "loginForm"
                : "workerLoginForm"
        );

    if (loginForm) {
        loginForm.classList.add("active");
    }

    resetForgotPassword(type);

    updateLanguageElements();
}


/* =========================================================
   RESET FORGOT PASSWORD
========================================================= */

function resetForgotPassword(type) {

    const state = forgotPasswordState[type];

    if (state.timer) {
        clearInterval(state.timer);
        state.timer = null;
    }

    state.step = 1;
    state.identifier = "";
    state.otp = "";

    const prefix =
        type === "user"
            ? "user"
            : "worker";

    const forgot =
        document.getElementById(
            prefix + "ForgotPassword"
        );

    if (!forgot) return;

    forgot.querySelectorAll(".forgot-step").forEach(step => {
        step.classList.remove("active");
    });

    const firstStep =
        document.getElementById(
            prefix + "ForgotStep1"
        );

    if (firstStep) {
        firstStep.classList.add("active");
    }

    /* Clear inputs */

    const identifier =
        document.getElementById(
            prefix + "ForgotIdentifier"
        );

    if (identifier) {
        identifier.value = "";
    }

    const newPassword =
        document.getElementById(
            prefix + "NewPassword"
        );

    const confirmPassword =
        document.getElementById(
            prefix + "ConfirmNewPassword"
        );

    if (newPassword) {
        newPassword.value = "";
    }

    if (confirmPassword) {
        confirmPassword.value = "";
    }

    /* Clear OTP */

    const otpInputs =
        forgot.querySelectorAll(".otp-input");

    otpInputs.forEach(input => {
        input.value = "";
    });

    /* Clear messages */

    forgot.querySelectorAll(".forgot-message").forEach(message => {
        message.textContent = "";
    });

    /* Reset resend button */

    const resendBtn =
        document.getElementById(
            prefix + "ResendBtn"
        );

    if (resendBtn) {
        resendBtn.disabled = true;
    }
}


/* =========================================================
   SHOW STEP
========================================================= */

function showForgotStep(type, stepNumber) {

    const prefix =
        type === "user"
            ? "user"
            : "worker";

    const container =
        document.getElementById(
            prefix + "ForgotPassword"
        );

    if (!container) return;

    container
        .querySelectorAll(".forgot-step")
        .forEach(step => {
            step.classList.remove("active");
        });

    const step =
        document.getElementById(
            prefix +
            "ForgotStep" +
            stepNumber
        );

    if (step) {
        step.classList.add("active");
    }

    forgotPasswordState[type].step = stepNumber;
}


/* =========================================================
   SEND OTP
========================================================= */

function sendForgotOTP(type) {

    const prefix =
        type === "user"
            ? "user"
            : "worker";

    const input =
        document.getElementById(
            prefix + "ForgotIdentifier"
        );

    const message =
        document.getElementById(
            prefix + "ForgotMessage"
        );

    if (!input || !message) return;

    const identifier =
        input.value.trim();

    if (!identifier) {

        showForgotMessage(
            message,
            "Please enter your email or mobile number.",
            true
        );

        return;
    }

    /* Basic validation */

    const emailRegex =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    const mobileRegex =
        /^07[0-9]{8}$/;

    const isEmail =
        emailRegex.test(identifier);

    const isMobile =
        mobileRegex.test(identifier);

    if (!isEmail && !isMobile) {

        showForgotMessage(
            message,
            "Please enter a valid email or mobile number.",
            true
        );

        return;
    }

    forgotPasswordState[type].identifier =
        identifier;


    /*
       TEMPORARY DEVELOPMENT FLOW

       Replace this section with your PHP API request.

       Example:
       
       fetch("api/forgot-password.php", {
           method: "POST",
           headers: {
               "Content-Type": "application/json"
           },
           body: JSON.stringify({
               type: type,
               identifier: identifier
           })
       })
    */

    showForgotMessage(
        message,
        "OTP has been sent successfully.",
        false
    );

    showForgotStep(type, 2);

    startOtpTimer(type);

    setTimeout(() => {

        const firstOtp =
            document.querySelector(
                "#" +
                prefix +
                "ForgotStep2 .otp-input"
            );

        if (firstOtp) {
            firstOtp.focus();
        }

    }, 150);
}


/* =========================================================
   OTP TIMER
========================================================= */

function startOtpTimer(type) {

    const prefix =
        type === "user"
            ? "user"
            : "worker";

    const timerElement =
        document.getElementById(
            prefix + "OtpTimer"
        );

    const resendButton =
        document.getElementById(
            prefix + "ResendBtn"
        );

    if (!timerElement || !resendButton) return;

    let seconds = 60;

    timerElement.textContent = seconds;

    resendButton.disabled = true;

    const state =
        forgotPasswordState[type];

    if (state.timer) {
        clearInterval(state.timer);
    }

    state.timer =
        setInterval(() => {

            seconds--;

            timerElement.textContent =
                seconds;

            if (seconds <= 0) {

                clearInterval(state.timer);

                state.timer = null;

                resendButton.disabled = false;

                timerElement.textContent = "0";
            }

        }, 1000);
}


/* =========================================================
   RESEND OTP
========================================================= */

function resendForgotOTP(type) {

    const state =
        forgotPasswordState[type];

    if (!state.identifier) return;

    const prefix =
        type === "user"
            ? "user"
            : "worker";

    const message =
        document.getElementById(
            prefix + "OtpMessage"
        );

    if (message) {

        showForgotMessage(
            message,
            "A new OTP has been sent.",
            false
        );

    }

    clearOtpInputs(type);

    startOtpTimer(type);
}


/* =========================================================
   VERIFY OTP
========================================================= */

function verifyForgotOTP(type) {

    const prefix =
        type === "user"
            ? "user"
            : "worker";

    const container =
        document.getElementById(
            prefix + "ForgotStep2"
        );

    if (!container) return;

    const inputs =
        container.querySelectorAll(".otp-input");

    let otp = "";

    inputs.forEach(input => {
        otp += input.value.trim();
    });

    const message =
        document.getElementById(
            prefix + "OtpMessage"
        );

    if (otp.length !== 6) {

        showForgotMessage(
            message,
            "Please enter the complete 6-digit OTP.",
            true
        );

        return;
    }

    /*
       IMPORTANT:

       This is currently frontend demonstration logic.

       Real implementation must verify OTP
       through PHP/MySQL.

       Example:

       fetch("api/verify-reset-otp.php", {
           method: "POST",
           headers: {
               "Content-Type": "application/json"
           },
           body: JSON.stringify({
               type: type,
               identifier:
                   forgotPasswordState[type].identifier,
               otp: otp
           })
       });
    */


    forgotPasswordState[type].otp = otp;

    if (forgotPasswordState[type].timer) {
        clearInterval(
            forgotPasswordState[type].timer
        );

        forgotPasswordState[type].timer = null;
    }

    showForgotStep(type, 3);

    updatePasswordRules(type);
}


/* =========================================================
   RESET PASSWORD
========================================================= */

function resetPassword(type) {

    const prefix =
        type === "user"
            ? "user"
            : "worker";

    const password =
        document.getElementById(
            prefix + "NewPassword"
        );

    const confirm =
        document.getElementById(
            prefix + "ConfirmNewPassword"
        );

    const message =
        document.getElementById(
            prefix + "ResetMessage"
        );

    if (!password || !confirm) return;

    const passwordValue =
        password.value;

    const confirmValue =
        confirm.value;


    const lengthValid =
        passwordValue.length >= 8;

    const uppercaseValid =
        /[A-Z]/.test(passwordValue);

    const numberValid =
        /[0-9]/.test(passwordValue);


    if (
        !lengthValid ||
        !uppercaseValid ||
        !numberValid
    ) {

        showForgotMessage(
            message,
            "Password does not meet the required requirements.",
            true
        );

        return;
    }


    if (passwordValue !== confirmValue) {

        showForgotMessage(
            message,
            "Passwords do not match.",
            true
        );

        return;
    }


    /*
       IMPORTANT:

       Send password to PHP backend here.

       Example:

       fetch("api/reset-password.php", {
           method: "POST",
           headers: {
               "Content-Type": "application/json"
           },
           body: JSON.stringify({
               type: type,
               identifier:
                   forgotPasswordState[type].identifier,
               otp:
                   forgotPasswordState[type].otp,
               password: passwordValue
           })
       });
    */


    showForgotStep(type, 4);
}


/* =========================================================
   BACK TO FORGOT STEP
========================================================= */

function backToForgotStep(type, step) {

    showForgotStep(type, step);

    if (step === 1) {

        const prefix =
            type === "user"
                ? "user"
                : "worker";

        const identifier =
            document.getElementById(
                prefix + "ForgotIdentifier"
            );

        if (identifier) {
            identifier.focus();
        }
    }
}


/* =========================================================
   CLEAR OTP
========================================================= */

function clearOtpInputs(type) {

    const prefix =
        type === "user"
            ? "user"
            : "worker";

    const container =
        document.getElementById(
            prefix + "ForgotStep2"
        );

    if (!container) return;

    container
        .querySelectorAll(".otp-input")
        .forEach(input => {
            input.value = "";
        });
}


/* =========================================================
   MESSAGE
========================================================= */

function showForgotMessage(
    element,
    message,
    isError
) {

    if (!element) return;

    element.textContent = message;

    element.style.color =
        isError
            ? "#ef767a"
            : "#69c98b";
}


/* =========================================================
   PASSWORD RULES
========================================================= */

function updatePasswordRules(type) {

    const prefix =
        type === "user"
            ? "user"
            : "worker";

    const input =
        document.getElementById(
            prefix + "NewPassword"
        );

    if (!input) return;

    input.addEventListener(
        "input",
        function () {

            const value =
                input.value;

            const length =
                value.length >= 8;

            const upper =
                /[A-Z]/.test(value);

            const number =
                /[0-9]/.test(value);


            updateRule(
                prefix + "RuleLength",
                length
            );

            updateRule(
                prefix + "RuleUpper",
                upper
            );

            updateRule(
                prefix + "RuleNumber",
                number
            );

        }
    );
}


/* =========================================================
   RULE UI
========================================================= */

function updateRule(id, valid) {

    const rule =
        document.getElementById(id);

    if (!rule) return;

    if (valid) {
        rule.classList.add("valid");
    } else {
        rule.classList.remove("valid");
    }
}


/* =========================================================
   OTP INPUT BEHAVIOUR
========================================================= */

document.addEventListener(
    "DOMContentLoaded",
    function () {

        document
            .querySelectorAll(".otp-input")
            .forEach((input, index, inputs) => {

                input.addEventListener(
                    "input",
                    function () {

                        this.value =
                            this.value.replace(
                                /[^0-9]/g,
                                ""
                            );

                        if (
                            this.value &&
                            inputs[index + 1]
                        ) {

                            inputs[index + 1].focus();

                        }

                    }
                );


                input.addEventListener(
                    "keydown",
                    function (event) {

                        if (
                            event.key === "Backspace" &&
                            !this.value &&
                            inputs[index - 1]
                        ) {

                            inputs[index - 1].focus();

                        }

                    }
                );


                input.addEventListener(
                    "paste",
                    function (event) {

                        event.preventDefault();

                        const pasted =
                            (
                                event.clipboardData ||
                                window.clipboardData
                            )
                                .getData("text")
                                .replace(
                                    /[^0-9]/g,
                                    ""
                                )
                                .slice(0, 6);

                        if (!pasted) return;

                        pasted
                            .split("")
                            .forEach(
                                (digit, i) => {

                                    if (inputs[i]) {
                                        inputs[i].value =
                                            digit;
                                    }

                                }
                            );

                        const last =
                            Math.min(
                                pasted.length,
                                inputs.length
                            ) - 1;

                        if (inputs[last]) {
                            inputs[last].focus();
                        }

                    }
                );

            });


        updatePasswordRules("user");
        updatePasswordRules("worker");

    }
);


/* =====================================================
   INITIALIZE
===================================================== */



initSession();

initFieldErrorClearing();