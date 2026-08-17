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

    <link rel="stylesheet" href="header.css">


</head>

<body>


    <header class="navbar">

        <a href="index.php" class="logo">
            podi<span>JOB</span>
        </a>

        <nav class="nav-links">

            <a data-si="මුල් පිටුව" data-en="Home">
                Home
            </a>

            <a data-si="රැකියා" data-en="Jobs">
                Jobs
            </a>

            <a data-si="සේවකයින්" data-en="Workers">
                Workers
            </a>

            <a data-si="අප ගැන" data-en="About">
                About
            </a>

        </nav>


        <div class="nav-right">

            <!-- WORKER LOGIN BUTTON -->

            <button class="worker-login-btn" id="workerLoginBtn" onclick="openWorkerAuth()" data-si="සේවක Login"
                data-en="Worker Login">

                Worker Login

            </button>


            <!-- USER LOGIN BUTTON -->

            <button class="user-login-btn" id="userLoginBtn" onclick="openUserAuth()" data-si="පරිශීලක Login"
                data-en="User Login">

                User Login

            </button>


            <!-- PROFILE -->

            <div class="nav-profile" id="navProfile">

                <div class="nav-profile-circle" onclick="toggleNavProfileMenu()">

                    <span class="nav-profile-icon" id="navProfileIcon">
                        👤
                    </span>

                    <img id="navProfileImg" alt="Profile">

                </div>


                <span class="nav-profile-name" id="navProfileName">
                    Account
                </span>


                <div class="nav-profile-menu" id="navProfileMenu">

                    <button type="button" onclick="goToUserProfile()" data-si="පැතිකඩ" data-en="Profile">

                        Profile

                    </button>


                    <button type="button" onclick="logoutNav()" data-si="ඉවත් වන්න" data-en="Logout">

                        Logout

                    </button>

                </div>

            </div>


            <!-- LANGUAGE -->

            <div class="lang">

                <button id="siBtn" onclick="changeLanguage('si')">

                    සිංහල

                </button>


                <button id="enBtn" class="active" onclick="changeLanguage('en')">

                    English

                </button>

            </div>

        </div>

    </header>



    <!-- =========================================================
         USER AUTH MODAL
    ========================================================= -->

    <div class="auth-overlay" id="userAuthModal" onclick="handleOverlayClick(event)">

        <div class="auth-modal">

            <button class="auth-close" onclick="closeUserAuth()">

                &times;

            </button>


            <div class="auth-header">

                <h2>

                    <span data-si="PodiJOB" data-en="Welcome to">

                        Welcome to

                    </span>

                    podi<span style="color:var(--amber-light)">
                        JOB
                    </span>

                </h2>


                <p data-si="Login වන්න හෝ නව ගිණුමක් සාදන්න" data-en="Login or create your user account">

                    Login or create your user account

                </p>

            </div>


            <div class="auth-tabs">

                <button class="auth-tab-btn active" id="loginTabBtn" onclick="switchAuthTab('login')" data-si="Login"
                    data-en="Login">

                    Login

                </button>


                <button class="auth-tab-btn" id="registerTabBtn" onclick="switchAuthTab('register')"
                    data-si="ලියාපදිංචි වන්න" data-en="Register">

                    Register

                </button>

            </div>


            <div class="auth-forms">

                <!-- USER LOGIN -->

                <form class="auth-form active" id="loginForm" onsubmit="handleUserLogin(event)">

                    <div class="auth-field">

                        <label data-si="ඊමේල් / ජංගම අංකය" data-en="Email / Mobile Number">

                            Email / Mobile Number

                        </label>


                        <input type="text" id="userLoginIdentifier" data-si="ඊමේල් / ජංගම අංකය ඇතුළත් කරන්න"
                            data-en="Enter email or mobile number" placeholder="Enter email or mobile number">

                    </div>


                    <div class="auth-field">

                        <label data-si="මුරපදය" data-en="Password">

                            Password

                        </label>


                        <div class="auth-password-wrap">

                            <input type="password" id="userLoginPassword" data-si="මුරපදය ඇතුළත් කරන්න"
                                data-en="Enter password" placeholder="Enter password">


                            <button type="button" class="auth-password-toggle"
                                onclick="togglePasswordVisibility(this,'userLoginPassword')" aria-label="Show password">

                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">

                                    <path
                                        d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.6 18.6 0 0 1 5.06-5.94M9.9 4.24A10.94 10.94 0 0 1 12 4c7 0 11 8 11 8a18.6 18.6 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24" />

                                    <line x1="1" y1="1" x2="23" y2="23" />

                                </svg>

                            </button>

                        </div>

                    </div>


                    <div class="auth-row">

                        <label class="auth-remember">

                            <input type="checkbox" id="rememberUser">

                            <span data-si="මතක තබා ගන්න" data-en="Remember Me">

                                Remember Me

                            </span>

                        </label>


                        <a href="#" onclick="openForgotPassword('user'); return false;"
                            data-si="මුරපදය අමතක වුනාද?"
                            data-en="Forgot Password?">
                            Forgot Password?
                        </a>

                    </div>


                    <button type="submit" class="auth-submit" data-si="ඇතුල් වන්න" data-en="Login">

                        Login

                    </button>


                    <div class="auth-divider">

                        <span data-si="හෝ" data-en="OR">

                            OR

                        </span>

                    </div>


                    <button type="button" class="google-login-btn" onclick="googleLogin()">

                        <svg class="google-icon" viewBox="0 0 24 24">

                            <path fill="#4285F4"
                                d="M21.35 12.27c0-.79-.07-1.55-.23-2.27H12v4.3h5.23a4.47 4.47 0 0 1-1.94 2.94v2.45h3.14c1.84-1.69 2.92-4.18 2.92-7.42z" />

                            <path fill="#34A853"
                                d="M12 21.99c2.63 0 4.84-.87 6.45-2.35l-3.14-2.45c-.87.58-1.98.93-3.31.93-2.55 0-4.71-1.72-5.49-4.03H3.26v2.53A9.74 9.74 0 0 0 12 21.99z" />

                            <path fill="#FBBC05"
                                d="M6.51 14.09A5.85 5.85 0 0 1 6.2 12c0-.73.13-1.44.31-2.09V7.38H3.26A9.75 9.75 0 0 0 2.25 12c0 1.57.38 3.05 1.01 4.62l3.25-2.53z" />

                            <path fill="#EA4335"
                                d="M12 5.88c1.43 0 2.72.49 3.74 1.45l2.8-2.8C16.83 2.92 14.63 2 12 2a9.74 9.74 0 0 0-8.74 5.38l3.25 2.53C7.29 7.6 9.45 5.88 12 5.88z" />

                        </svg>


                        <span data-si="Google සමඟින් ඇතුල් වන්න" data-en="Continue with Google">

                            Continue with Google

                        </span>

                    </button>

                </form>


                <!-- =========================================================
     USER FORGOT PASSWORD
========================================================= -->

                <div class="forgot-password-form" id="userForgotPassword">

                    <!-- STEP 1 -->
                    <div class="forgot-step active" id="userForgotStep1">

                        <div class="forgot-icon">
                            🔐
                        </div>

                        <div class="forgot-title">
                            <h3
                                data-si="මුරපදය අමතකද?"
                                data-en="Forgot Password?">
                                Forgot Password?
                            </h3>

                            <p
                                data-si="ඔබගේ ගිණුම සොයා ගැනීමට ඊමේල් ලිපිනය හෝ ජංගම අංකය ඇතුළත් කරන්න."
                                data-en="Enter your email or mobile number to find your account.">
                                Enter your email or mobile number to find your account.
                            </p>
                        </div>

                        <div class="auth-field">

                            <label
                                data-si="ඊමේල් / ජංගම අංකය"
                                data-en="Email / Mobile Number">
                                Email / Mobile Number
                            </label>

                            <input
                                type="text"
                                id="userForgotIdentifier"
                                data-si="ඊමේල් හෝ ජංගම අංකය ඇතුළත් කරන්න"
                                data-en="Enter email or mobile number"
                                placeholder="Enter email or mobile number"
                                autocomplete="off">

                        </div>

                        <div class="forgot-message" id="userForgotMessage"></div>

                        <button
                            type="button"
                            class="auth-submit"
                            onclick="sendForgotOTP('user')"
                            data-si="OTP යවන්න"
                            data-en="Send OTP">
                            Send OTP
                        </button>

                        <button
                            type="button"
                            class="forgot-back-btn"
                            onclick="backToLogin('user')">

                            <span>←</span>

                            <span
                                data-si="Login වෙත ආපසු"
                                data-en="Back to Login">
                                Back to Login
                            </span>

                        </button>

                    </div>


                    <!-- STEP 2 -->
                    <div class="forgot-step" id="userForgotStep2">

                        <div class="forgot-icon">
                            📩
                        </div>

                        <div class="forgot-title">

                            <h3
                                data-si="OTP තහවුරු කරන්න"
                                data-en="Verify OTP">
                                Verify OTP
                            </h3>

                            <p
                                data-si="ඔබට ලැබුණු අංක 6ක OTP එක ඇතුළත් කරන්න."
                                data-en="Enter the 6-digit OTP sent to you.">
                                Enter the 6-digit OTP sent to you.
                            </p>

                        </div>


                        <div class="otp-container">

                            <input class="otp-input" maxlength="1" inputmode="numeric">
                            <input class="otp-input" maxlength="1" inputmode="numeric">
                            <input class="otp-input" maxlength="1" inputmode="numeric">
                            <input class="otp-input" maxlength="1" inputmode="numeric">
                            <input class="otp-input" maxlength="1" inputmode="numeric">
                            <input class="otp-input" maxlength="1" inputmode="numeric">

                        </div>


                        <div class="otp-timer">

                            <span
                                data-si="නැවත OTP යැවිය හැක්කේ"
                                data-en="Resend OTP in">
                                Resend OTP in
                            </span>

                            <strong id="userOtpTimer">60</strong>

                            <span>s</span>

                        </div>


                        <button
                            type="button"
                            class="resend-otp-btn"
                            id="userResendBtn"
                            onclick="resendForgotOTP('user')"
                            disabled
                            data-si="නැවත OTP යවන්න"
                            data-en="Resend OTP">
                            Resend OTP
                        </button>


                        <div class="forgot-message" id="userOtpMessage"></div>


                        <button
                            type="button"
                            class="auth-submit"
                            onclick="verifyForgotOTP('user')"
                            data-si="OTP තහවුරු කරන්න"
                            data-en="Verify OTP">
                            Verify OTP
                        </button>


                        <button
                            type="button"
                            class="forgot-back-btn"
                            onclick="backToForgotStep('user', 1)">

                            <span>←</span>

                            <span
                                data-si="ආපසු"
                                data-en="Back">
                                Back
                            </span>

                        </button>

                    </div>


                    <!-- STEP 3 -->
                    <div class="forgot-step" id="userForgotStep3">

                        <div class="forgot-icon">
                            🔑
                        </div>

                        <div class="forgot-title">

                            <h3
                                data-si="නව මුරපදයක් සාදන්න"
                                data-en="Create New Password">
                                Create New Password
                            </h3>

                            <p
                                data-si="ඔබගේ නව මුරපදය ඇතුළත් කරන්න."
                                data-en="Enter a new password for your account.">
                                Enter a new password for your account.
                            </p>

                        </div>


                        <div class="auth-field">

                            <label
                                data-si="නව මුරපදය"
                                data-en="New Password">
                                New Password
                            </label>

                            <div class="auth-password-wrap">

                                <input
                                    type="password"
                                    id="userNewPassword"
                                    placeholder="Enter new password">

                                <button
                                    type="button"
                                    class="auth-password-toggle"
                                    onclick="togglePasswordVisibility(this,'userNewPassword')">

                                    <svg viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">

                                        <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.6 18.6 0 0 1 5.06-5.94M9.9 4.24A10.94 10.94 0 0 1 12 4c7 0 11 8 11 8a18.6 18.6 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24" />

                                        <line x1="1" y1="1" x2="23" y2="23" />

                                    </svg>

                                </button>

                            </div>

                        </div>


                        <div class="password-rules">

                            <div id="userRuleLength">
                                <span>✓</span>
                                <span
                                    data-si="අවම අක්ෂර 8ක්"
                                    data-en="At least 8 characters">
                                    At least 8 characters
                                </span>
                            </div>

                            <div id="userRuleUpper">
                                <span>✓</span>
                                <span
                                    data-si="විශාල අකුරක්"
                                    data-en="One uppercase letter">
                                    One uppercase letter
                                </span>
                            </div>

                            <div id="userRuleNumber">
                                <span>✓</span>
                                <span
                                    data-si="අංකයක්"
                                    data-en="One number">
                                    One number
                                </span>
                            </div>

                        </div>


                        <div class="auth-field">

                            <label
                                data-si="මුරපදය තහවුරු කරන්න"
                                data-en="Confirm Password">
                                Confirm Password
                            </label>

                            <div class="auth-password-wrap">

                                <input
                                    type="password"
                                    id="userConfirmNewPassword"
                                    placeholder="Confirm new password">

                                <button
                                    type="button"
                                    class="auth-password-toggle"
                                    onclick="togglePasswordVisibility(this,'userConfirmNewPassword')">

                                    <svg viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">

                                        <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.6 18.6 0 0 1 5.06-5.94M9.9 4.24A10.94 10.94 0 0 1 12 4c7 0 11 8 11 8a18.6 18.6 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24" />

                                        <line x1="1" y1="1" x2="23" y2="23" />

                                    </svg>

                                </button>

                            </div>

                        </div>


                        <div class="forgot-message" id="userResetMessage"></div>


                        <button
                            type="button"
                            class="auth-submit"
                            onclick="resetPassword('user')"
                            data-si="මුරපදය වෙනස් කරන්න"
                            data-en="Reset Password">
                            Reset Password
                        </button>

                    </div>


                    <!-- STEP 4 -->
                    <div class="forgot-step" id="userForgotStep4">

                        <div class="forgot-success-icon">
                            ✓
                        </div>

                        <div class="forgot-title">

                            <h3
                                data-si="මුරපදය සාර්ථකව වෙනස් කරන ලදී"
                                data-en="Password Reset Successful">
                                Password Reset Successful
                            </h3>

                            <p
                                data-si="ඔබගේ මුරපදය සාර්ථකව වෙනස් කර ඇත. දැන් නව මුරපදයෙන් Login විය හැක."
                                data-en="Your password has been successfully changed. You can now login with your new password.">
                                Your password has been successfully changed. You can now login with your new password.
                            </p>

                        </div>


                        <button
                            type="button"
                            class="auth-submit"
                            onclick="backToLogin('user')"
                            data-si="Login වෙත යන්න"
                            data-en="Back to Login">
                            Back to Login
                        </button>

                    </div>

                </div>


                <!-- USER REGISTER -->

                <form class="auth-form" id="registerForm" onsubmit="handleUserRegister(event)">

                    <div class="auth-photo-wrap">

                        <label class="auth-photo-circle" for="userProfilePhoto">

                            <span class="auth-photo-icon" id="userPhotoIcon">
                                👤
                            </span>


                            <img id="userPhotoPreview" alt="Profile preview">


                            <span class="auth-photo-edit">
                                ✎
                            </span>


                            <input type="file" id="userProfilePhoto" accept="image/*"
                                onchange="previewAuthPhoto(this,'userPhotoPreview','userPhotoIcon')">

                        </label>


                        <span class="auth-photo-hint" data-si="පැතිකඩ ඡායාරූපයක් එක් කරන්න"
                            data-en="Add a profile photo">

                            Add a profile photo

                        </span>

                    </div>


                    <div class="auth-field">

                        <label data-si="සම්පූර්ණ නම" data-en="Full Name">

                            Full Name

                        </label>


                        <input type="text" id="userRegisterName" data-si="සම්පූර්ණ නම ඇතුළත් කරන්න"
                            data-en="Enter your full name" placeholder="Enter your full name">

                    </div>


                    <div class="auth-field">

                        <label data-si="ජංගම අංකය" data-en="Mobile Number">

                            Mobile Number

                        </label>


                        <input type="text" id="userRegisterMobile" data-si="ජංගම අංකය ඇතුළත් කරන්න"
                            data-en="Enter mobile number" placeholder="Enter mobile number">

                    </div>


                    <div class="auth-field">

                        <label data-si="ඊමේල්" data-en="Email">

                            Email

                        </label>


                        <input type="email" id="userRegisterEmail" data-si="ඊමේල් ලිපිනය ඇතුළත් කරන්න"
                            data-en="Enter email address" placeholder="Enter email address">

                    </div>


                    <div class="auth-field">

                        <label data-si="මුරපදය" data-en="Password">

                            Password

                        </label>


                        <input type="password" id="userRegisterPassword" data-si="මුරපදය ඇතුළත් කරන්න"
                            data-en="Enter password" placeholder="Enter password">

                    </div>


                    <div class="auth-field">

                        <label data-si="මුරපදය තහවුරු කරන්න" data-en="Confirm Password">

                            Confirm Password

                        </label>


                        <input type="password" id="userRegisterConfirm" data-si="මුරපදය නැවත ඇතුළත් කරන්න"
                            data-en="Re-enter password" placeholder="Re-enter password">

                    </div>


                    <button type="submit" class="auth-submit" data-si="ගිණුම සාදන්න" data-en="Create Account">

                        Create Account

                    </button>

                </form>

            </div>

        </div>

    </div>


    <!-- =========================================================
         WORKER AUTH MODAL
    ========================================================= -->

    <div class="auth-overlay" id="workerAuthModal" onclick="handleWorkerOverlayClick(event)">

        <div class="auth-modal">

            <button class="auth-close" onclick="closeWorkerAuth()">

                &times;

            </button>


            <div class="auth-header">

                <h2>

                    <span data-si="PodiJOB" data-en="Welcome to">

                        Welcome to

                    </span>

                    podi<span style="color:var(--amber-light)">
                        JOB
                    </span>

                </h2>


                <p data-si="සේවකයෙකු ලෙස Login වන්න හෝ නව ගිණුමක් සාදන්න"
                    data-en="Login or register as a skilled worker">

                    Login or register as a skilled worker

                </p>

            </div>


            <div class="auth-tabs">

                <button class="auth-tab-btn active" id="workerLoginTabBtn" onclick="switchWorkerAuthTab('login')"
                    data-si="Login" data-en="Login">

                    Login

                </button>


                <button class="auth-tab-btn" id="workerRegisterTabBtn" onclick="switchWorkerAuthTab('register')"
                    data-si="ලියාපදිංචි වන්න" data-en="Register">

                    Register

                </button>

            </div>


            <div class="auth-forms">

                <!-- WORKER LOGIN -->

                <form class="auth-form active" id="workerLoginForm" onsubmit="handleWorkerLogin(event)">

                    <div class="auth-field">

                        <label data-si="ඊමේල් / ජංගම අංකය" data-en="Email / Mobile Number">

                            Email / Mobile Number

                        </label>


                        <input type="text" id="workerLoginIdentifier" data-si="ඊමේල් / ජංගම අංකය ඇතුළත් කරන්න"
                            data-en="Enter email or mobile number" placeholder="Enter email or mobile number">

                    </div>


                    <div class="auth-field">

                        <label data-si="මුරපදය" data-en="Password">

                            Password

                        </label>


                        <div class="auth-password-wrap">

                            <input type="password" id="workerLoginPassword" data-si="මුරපදය ඇතුළත් කරන්න"
                                data-en="Enter password" placeholder="Enter password">


                            <button type="button" class="auth-password-toggle"
                                onclick="togglePasswordVisibility(this,'workerLoginPassword')">

                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">

                                    <path
                                        d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.6 18.6 0 0 1 5.06-5.94M9.9 4.24A10.94 10.94 0 0 1 12 4c7 0 11 8 11 8a18.6 18.6 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24" />

                                    <line x1="1" y1="1" x2="23" y2="23" />

                                </svg>

                            </button>

                        </div>

                    </div>


                    <div class="auth-row">

                        <label class="auth-remember">

                            <input type="checkbox" id="rememberWorker">

                            <span data-si="මතක තබා ගන්න" data-en="Remember Me">

                                Remember Me

                            </span>

                        </label>


                        <a href="#" onclick="openForgotPassword('worker'); return false;"
                            data-si="මුරපදය අමතක වුනාද?"
                            data-en="Forgot Password?">
                            Forgot Password?
                        </a>

                    </div>


                    <button type="submit" class="auth-submit" data-si="ඇතුල් වන්න" data-en="Login">

                        Login

                    </button>


                    <div class="auth-divider">

                        <span data-si="හෝ" data-en="OR">

                            OR

                        </span>

                    </div>


                    <button type="button" class="google-login-btn" onclick="googleLogin()">

                        <svg class="google-icon" viewBox="0 0 24 24">

                            <path fill="#4285F4"
                                d="M21.35 12.27c0-.79-.07-1.55-.23-2.27H12v4.3h5.23a4.47 4.47 0 0 1-1.94 2.94v2.45h3.14c1.84-1.69 2.92-4.18 2.92-7.42z" />

                            <path fill="#34A853"
                                d="M12 21.99c2.63 0 4.84-.87 6.45-2.35l-3.14-2.45c-.87.58-1.98.93-3.31.93-2.55 0-4.71-1.72-5.49-4.03H3.26v2.53A9.74 9.74 0 0 0 12 21.99z" />

                            <path fill="#FBBC05"
                                d="M6.51 14.09A5.85 5.85 0 0 1 6.2 12c0-.73.13-1.44.31-2.09V7.38H3.26A9.75 9.75 0 0 0 2.25 12c0 1.57.38 3.05 1.01 4.62l3.25-2.53z" />

                            <path fill="#EA4335"
                                d="M12 5.88c1.43 0 2.72.49 3.74 1.45l2.8-2.8C16.83 2.92 14.63 2 12 2a9.74 9.74 0 0 0-8.74 5.38l3.25 2.53C7.29 7.6 9.45 5.88 12 5.88z" />

                        </svg>


                        <span data-si="Google සමඟින් ඇතුල් වන්න" data-en="Continue with Google">

                            Continue with Google

                        </span>

                    </button>

                </form>

                <!-- ==
     WORKER FORGOT PASSWORD
==== -->

                <div class="forgot-password-form" id="workerForgotPassword">

                    <!-- STEP 1 -->

                    <div class="forgot-step active" id="workerForgotStep1">

                        <div class="forgot-icon">
                            🔐
                        </div>

                        <div class="forgot-title">

                            <h3
                                data-si="මුරපදය අමතකද?"
                                data-en="Forgot Password?">
                                Forgot Password?
                            </h3>

                            <p
                                data-si="ඔබගේ සේවක ගිණුම සොයා ගැනීමට ඊමේල් ලිපිනය හෝ ජංගම අංකය ඇතුළත් කරන්න."
                                data-en="Enter your email or mobile number to find your worker account.">
                                Enter your email or mobile number to find your worker account.
                            </p>

                        </div>


                        <div class="auth-field">

                            <label
                                data-si="ඊමේල් / ජංගම අංකය"
                                data-en="Email / Mobile Number">
                                Email / Mobile Number
                            </label>

                            <input
                                type="text"
                                id="workerForgotIdentifier"
                                data-si="ඊමේල් හෝ ජංගම අංකය ඇතුළත් කරන්න"
                                data-en="Enter email or mobile number"
                                placeholder="Enter email or mobile number">

                        </div>


                        <div class="forgot-message" id="workerForgotMessage"></div>


                        <button
                            type="button"
                            class="auth-submit"
                            onclick="sendForgotOTP('worker')"
                            data-si="OTP යවන්න"
                            data-en="Send OTP">
                            Send OTP
                        </button>


                        <button
                            type="button"
                            class="forgot-back-btn"
                            onclick="backToLogin('worker')">

                            ←
                            <span
                                data-si="Login වෙත ආපසු"
                                data-en="Back to Login">
                                Back to Login
                            </span>

                        </button>

                    </div>


                    <!-- STEP 2 -->

                    <div class="forgot-step" id="workerForgotStep2">

                        <div class="forgot-icon">
                            📩
                        </div>

                        <div class="forgot-title">

                            <h3
                                data-si="OTP තහවුරු කරන්න"
                                data-en="Verify OTP">
                                Verify OTP
                            </h3>

                            <p
                                data-si="ඔබට ලැබුණු අංක 6ක OTP එක ඇතුළත් කරන්න."
                                data-en="Enter the 6-digit OTP sent to you.">
                                Enter the 6-digit OTP sent to you.
                            </p>

                        </div>


                        <div class="otp-container">

                            <input class="otp-input worker-otp" maxlength="1" inputmode="numeric">
                            <input class="otp-input worker-otp" maxlength="1" inputmode="numeric">
                            <input class="otp-input worker-otp" maxlength="1" inputmode="numeric">
                            <input class="otp-input worker-otp" maxlength="1" inputmode="numeric">
                            <input class="otp-input worker-otp" maxlength="1" inputmode="numeric">
                            <input class="otp-input worker-otp" maxlength="1" inputmode="numeric">

                        </div>


                        <div class="otp-timer">

                            <span
                                data-si="නැවත OTP යැවිය හැක්කේ"
                                data-en="Resend OTP in">
                                Resend OTP in
                            </span>

                            <strong id="workerOtpTimer">60</strong>

                            <span>s</span>

                        </div>


                        <button
                            type="button"
                            class="resend-otp-btn"
                            id="workerResendBtn"
                            onclick="resendForgotOTP('worker')"
                            disabled
                            data-si="නැවත OTP යවන්න"
                            data-en="Resend OTP">
                            Resend OTP
                        </button>


                        <div class="forgot-message" id="workerOtpMessage"></div>


                        <button
                            type="button"
                            class="auth-submit"
                            onclick="verifyForgotOTP('worker')"
                            data-si="OTP තහවුරු කරන්න"
                            data-en="Verify OTP">
                            Verify OTP
                        </button>


                        <button
                            type="button"
                            class="forgot-back-btn"
                            onclick="backToForgotStep('worker',1)">

                            ←
                            <span
                                data-si="ආපසු"
                                data-en="Back">
                                Back
                            </span>

                        </button>

                    </div>


                    <!-- STEP 3 -->

                    <div class="forgot-step" id="workerForgotStep3">

                        <div class="forgot-icon">
                            🔑
                        </div>

                        <div class="forgot-title">

                            <h3
                                data-si="නව මුරපදයක් සාදන්න"
                                data-en="Create New Password">
                                Create New Password
                            </h3>

                            <p
                                data-si="ඔබගේ නව මුරපදය ඇතුළත් කරන්න."
                                data-en="Enter a new password for your worker account.">
                                Enter a new password for your worker account.
                            </p>

                        </div>


                        <div class="auth-field">

                            <label
                                data-si="නව මුරපදය"
                                data-en="New Password">
                                New Password
                            </label>

                            <div class="auth-password-wrap">

                                <input
                                    type="password"
                                    id="workerNewPassword"
                                    placeholder="Enter new password">

                                <button
                                    type="button"
                                    class="auth-password-toggle"
                                    onclick="togglePasswordVisibility(this,'workerNewPassword')">

                                    <svg viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2">

                                        <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.6 18.6 0 0 1 5.06-5.94M9.9 4.24A10.94 10.94 0 0 1 12 4c7 0 11 8 11 8a18.6 18.6 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24" />

                                        <line x1="1" y1="1" x2="23" y2="23" />

                                    </svg>

                                </button>

                            </div>

                        </div>


                        <div class="password-rules">

                            <div id="workerRuleLength">
                                <span>✓</span>
                                <span
                                    data-si="අවම අක්ෂර 8ක්"
                                    data-en="At least 8 characters">
                                    At least 8 characters
                                </span>
                            </div>

                            <div id="workerRuleUpper">
                                <span>✓</span>
                                <span
                                    data-si="විශාල අකුරක්"
                                    data-en="One uppercase letter">
                                    One uppercase letter
                                </span>
                            </div>

                            <div id="workerRuleNumber">
                                <span>✓</span>
                                <span
                                    data-si="අංකයක්"
                                    data-en="One number">
                                    One number
                                </span>
                            </div>

                        </div>


                        <div class="auth-field">

                            <label
                                data-si="මුරපදය තහවුරු කරන්න"
                                data-en="Confirm Password">
                                Confirm Password
                            </label>

                            <div class="auth-password-wrap">

                                <input
                                    type="password"
                                    id="workerConfirmNewPassword"
                                    placeholder="Confirm new password">

                            </div>

                        </div>


                        <div class="forgot-message" id="workerResetMessage"></div>


                        <button
                            type="button"
                            class="auth-submit"
                            onclick="resetPassword('worker')"
                            data-si="මුරපදය වෙනස් කරන්න"
                            data-en="Reset Password">
                            Reset Password
                        </button>

                    </div>


                    <!-- STEP 4 -->

                    <div class="forgot-step" id="workerForgotStep4">

                        <div class="forgot-success-icon">
                            ✓
                        </div>

                        <div class="forgot-title">

                            <h3
                                data-si="මුරපදය සාර්ථකව වෙනස් කරන ලදී"
                                data-en="Password Reset Successful">
                                Password Reset Successful
                            </h3>

                            <p
                                data-si="ඔබගේ සේවක ගිණුමේ මුරපදය සාර්ථකව වෙනස් කර ඇත."
                                data-en="Your worker account password has been successfully changed.">
                                Your worker account password has been successfully changed.
                            </p>

                        </div>


                        <button
                            type="button"
                            class="auth-submit"
                            onclick="backToLogin('worker')"
                            data-si="Login වෙත යන්න"
                            data-en="Back to Login">
                            Back to Login
                        </button>

                    </div>

                </div>


                <!-- WORKER REGISTER -->

                <form class="auth-form" id="workerRegisterForm" onsubmit="handleWorkerRegister(event)">

                    <div class="auth-field">

                        <label data-si="සම්පූර්ණ නම" data-en="Full Name">

                            Full Name

                        </label>


                        <input type="text" id="workerRegisterName" data-si="සම්පූර්ණ නම ඇතුළත් කරන්න"
                            data-en="Enter your full name" placeholder="Enter your full name">

                    </div>


                    <div class="auth-field">

                        <label data-si="ක්ෂේත්‍රය / රැකියාව" data-en="Skill / Job Category">

                            Skill / Job Category

                        </label>


                        <select id="workerCategory" name="workerCategory">

                            <option value="" disabled selected data-si="රැකියා ක්ෂේත්‍රය තෝරන්න"
                                data-en="Select a job category">

                                Select a job category

                            </option>


                            <option value="Electrical" data-si="විදුලි කාර්මික" data-en="Electrician">

                                Electrician

                            </option>


                            <option value="Construction" data-si="පෙදරේරු" data-en="Mason">

                                Mason

                            </option>


                            <option value="Plumbing" data-si="ජලනල කාර්මික" data-en="Plumber">

                                Plumber

                            </option>


                            <option value="Carpenter" data-si="වඩු කාර්මික" data-en="Carpenter">

                                Carpenter

                            </option>


                            <option value="Painter" data-si="පින්තාරු කාර්මික" data-en="Painter">

                                Painter

                            </option>


                            <option value="Welder" data-si="වෙල්ඩින් කාර්මික" data-en="Welder">

                                Welder

                            </option>


                            <option value="Driving" data-si="රියදුරු" data-en="Driver">

                                Driver

                            </option>


                            <option value="Gardening" data-si="ගෙවතු වගා කාර්මික" data-en="Gardener">

                                Gardener

                            </option>


                            <option value="Cleaning" data-si="පිරිසිදු කිරීමේ සේවක" data-en="Cleaner">

                                Cleaner

                            </option>


                            <option value="Tailoring" data-si="ඇඳුම් මැහුම් ශිල්පී" data-en="Tailor">

                                Tailor

                            </option>


                            <option value="Technician" data-si="තාක්ෂණික ශිල්පී" data-en="Technician">

                                Technician

                            </option>


                            <option value="Other" data-si="වෙනත්" data-en="Other">

                                Other

                            </option>

                        </select>

                    </div>


                    <div class="auth-field">

                        <label data-si="ජංගම අංකය" data-en="Mobile Number">

                            Mobile Number

                        </label>


                        <input type="text" id="workerRegisterMobile" data-si="ජංගම අංකය ඇතුළත් කරන්න"
                            data-en="Enter mobile number" placeholder="Enter mobile number">

                    </div>


                    <div class="auth-field">

                        <label data-si="ඊමේල්" data-en="Email">

                            Email

                        </label>


                        <input type="email" id="workerRegisterEmail" data-si="ඊමේල් ලිපිනය ඇතුළත් කරන්න"
                            data-en="Enter email address" placeholder="Enter email address">

                    </div>


                    <div class="auth-field">

                        <label data-si="මුරපදය" data-en="Password">

                            Password

                        </label>


                        <input type="password" id="workerRegisterPassword" data-si="මුරපදය ඇතුළත් කරන්න"
                            data-en="Enter password" placeholder="Enter password">

                    </div>


                    <div class="auth-field">

                        <label data-si="මුරපදය තහවුරු කරන්න" data-en="Confirm Password">

                            Confirm Password

                        </label>


                        <input type="password" id="workerRegisterConfirm" data-si="මුරපදය නැවත ඇතුළත් කරන්න"
                            data-en="Re-enter password" placeholder="Re-enter password">

                    </div>


                    <button type="submit" class="auth-submit" data-si="ගිණුම සාදන්න" data-en="Create Account">

                        Create Account

                    </button>

                </form>

            </div>

        </div>

    </div>

    <script src="heade.js"></script>

</body>

</html>