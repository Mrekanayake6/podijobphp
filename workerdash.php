<!DOCTYPE html>
<html lang="en" data-lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>PodiJOB — Worker Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=Noto+Sans+Sinhala:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="workerdash.css">
</head>

<body>

  <div class="app-shell">
    <!-- ================= SIDEBAR ================= -->
    <aside class="sidebar">
      <div class="brand">
       
        <a href="index.php" class="logo">
            podi<span>JOB</span>
        </a>
        
      </div>
      <nav class="nav-group">
        <a href="#dashboard" class="nav-item active"><span class="ic">▦</span><span data-i18n="nav.dashboard">Dashboard</span></a>
        <a href="#profile-preview" class="nav-item"><span class="ic">◍</span><span data-i18n="nav.myProfile">My Profile</span></a>
        <a href="#" class="nav-item" onclick="openModal('editProfileModal');return false;"><span class="ic">✎</span><span data-i18n="nav.editProfile">Edit Profile</span></a>
        <a href="#job-requests" class="nav-item"><span class="ic">📥</span><span data-i18n="nav.jobRequests">Job Requests</span><span class="nav-badge">3</span></a>
        <a href="#my-jobs" class="nav-item"><span class="ic">🧰</span><span data-i18n="nav.myJobs">My Jobs</span></a>
        <a href="#availability" class="nav-item"><span class="ic">🕒</span><span data-i18n="nav.availability">Availability</span></a>
        <a href="#reviews" class="nav-item"><span class="ic">★</span><span data-i18n="nav.reviews">Reviews</span></a>
        <a href="#" class="nav-item" onclick="openModal('notifModal');return false;"><span class="ic">🔔</span><span data-i18n="nav.notifications">Notifications</span><span class="nav-badge">4</span></a>
        <a href="#" class="nav-item" onclick="openModal('settingsModal');return false;"><span class="ic">⚙</span><span data-i18n="nav.settings">Settings</span></a>
      </nav>
      <div class="sidebar-foot">
        <div class="mini-profile">
          <img class="avatar sm worker-avatar" src="https://i.pravatar.cc/80?img=13" alt="">
          <div class="who">
            <div class="n">Kasun Fernando</div>
            <div class="s" data-i18n="worker.skill">Electrician</div>
          </div>
        </div>
        <button class="logout-btn"><span>⏻</span><span data-i18n="action.logout">Log Out</span></button>
      </div>
    </aside>

    <!-- ================= MAIN ================= -->
    <main class="main" id="dashboard">
      <!-- Top header -->
      <div class="topbar">
        <h1 data-i18n="header.dashboard">Dashboard</h1>
        <div class="topbar-right">
          <button class="icon-btn" onclick="openModal('notifModal')" aria-label="Notifications">
            🔔<span class="dot-badge">4</span>
          </button>
          <div class="lang-switch">
            <button id="langSi" onclick="setLang('si')">සිංහල</button>
            <button id="langEn" class="active" onclick="setLang('en')">English</button>
          </div>
          <div class="profile-menu">
            <button class="profile-trigger" onclick="toggleDropdown()">
              <img class="avatar sm worker-avatar" src="https://i.pravatar.cc/80?img=13" alt="">
              <span class="n">Kasun</span>
              <span class="car">▾</span>
            </button>
            <div class="dropdown glass" id="profileDropdown">
              <a href="#profile-preview"><span>◍</span><span data-i18n="dropdown.viewProfile">View Profile</span></a>
              <a href="#" onclick="openModal('editProfileModal');return false;"><span>✎</span><span data-i18n="nav.editProfile">Edit Profile</span></a>
              <a href="#" onclick="openModal('settingsModal');return false;"><span>⚙</span><span data-i18n="nav.settings">Settings</span></a>
              <hr>
              <button class="danger"><span>⏻</span><span data-i18n="action.logout">Log Out</span></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Welcome hero -->
      <section class="hero glass">
        <div class="hero-inner">
          <div>
            <h2 data-i18n="hero.welcome">Welcome back, Kasun 👋</h2>
            <p data-i18n="hero.sub">Here's what's happening with your PodiJOB profile today.</p>
            <span class="avail-pill" id="heroAvailPill"><span class="pulse-dot"></span><span data-i18n="avail.available">Available for Work</span></span>
          </div>
          <button class="btn btn-gold" onclick="openModal('availModal')" data-i18n="action.editAvailability">Edit Availability</button>
        </div>
      </section>

      <!-- Profile completion -->
      <section class="card glass completion-card" id="completionCard">
        <!-- filled by JS -->
      </section>

      <!-- Stats -->
      <section class="stat-grid">
        <div class="card glass stat-card">
          <div class="stat-top">
            <div class="stat-ic">👁</div>
          </div>
          <div class="stat-num">156</div>
          <div class="stat-label" data-i18n="stat.profileViews">Profile Views</div>
          <div class="stat-trend">▲ 12% <span data-i18n="stat.thisMonth">this month</span></div>
        </div>
        <div class="card glass stat-card">
          <div class="stat-top">
            <div class="stat-ic">💼</div>
          </div>
          <div class="stat-num">8</div>
          <div class="stat-label" data-i18n="stat.jobRequests">Job Requests</div>
          <div class="stat-trend">▲ 3 <span data-i18n="stat.new">new</span></div>
        </div>
        <div class="card glass stat-card">
          <div class="stat-top">
            <div class="stat-ic">✓</div>
          </div>
          <div class="stat-num">24</div>
          <div class="stat-label" data-i18n="stat.completedJobs">Completed Jobs</div>
          <div class="stat-trend neutral" data-i18n="stat.allTime">All time</div>
        </div>
        <div class="card glass stat-card">
          <div class="stat-top">
            <div class="stat-ic">⭐</div>
          </div>
          <div class="stat-num">4.8</div>
          <div class="stat-label" data-i18n="stat.rating">Rating</div>
          <div class="stat-trend" data-i18n="stat.fromReviews">From 24 reviews</div>
        </div>
      </section>

      <!-- Availability + Visibility -->
      <section class="two-col" id="availability">
        <div class="card glass">
          <div class="section-head">
            <h2 data-i18n="avail.title">Work Availability</h2>
          </div>
          <div class="info-row green">
            <div class="info-ic">🟢</div>
            <div>
              <div class="t" data-i18n="avail.available">Available for Work</div>
              <div class="d" data-i18n="avail.desc">Customers can currently contact you.</div>
            </div>
          </div>
          <button class="btn btn-outline btn-block" onclick="openModal('availModal')" data-i18n="action.changeAvailability">Change Availability</button>
        </div>

        <div class="card glass" id="visibilityCard">
          <div class="section-head">
            <h2 data-i18n="visibility.title">Profile Visibility</h2>
          </div>
          <div class="info-row green" id="visRow">
            <div class="info-ic">🟢</div>
            <div>
              <div class="t" data-i18n="visibility.visible">Your profile is visible to customers.</div>
              <div class="d" data-i18n="visibility.desc">Customers can find your profile when searching for workers.</div>
            </div>
          </div>
          <div style="display:flex;align-items:center;justify-content:space-between;padding-top:6px;">
            <span style="font-size:13px;font-weight:600;color:var(--text-hi);" data-i18n="visibility.toggleLabel">Profile Visible</span>
            <button class="toggle on" id="visToggle" onclick="toggleVisibility()" aria-label="Toggle profile visibility"></button>
          </div>
        </div>
      </section>

      <!-- Job Requests -->
      <section class="card glass" id="job-requests" style="margin-bottom:18px;">
        <div class="section-head">
          <h2 data-i18n="req.title">Recent Job Requests</h2>
          <a class="link-more" href="#" onclick="return false;"><span data-i18n="action.viewAllRequests">View All Requests</span> →</a>
        </div>
        <div class="req-list" id="reqList"></div>
      </section>

      <!-- My Jobs -->
      <section class="card glass" id="my-jobs" style="margin-bottom:18px;">
        <div class="section-head">
          <h2 data-i18n="jobs.title">My Jobs</h2>
        </div>
        <div class="tabs" id="jobTabs">
          <button class="tab-btn active" data-tab="active" data-i18n="jobs.active">Active</button>
          <button class="tab-btn" data-tab="upcoming" data-i18n="jobs.upcoming">Upcoming</button>
          <button class="tab-btn" data-tab="completed" data-i18n="jobs.completed">Completed</button>
        </div>
        <div id="jobGridWrap"></div>
      </section>

      <!-- Profile preview + Reviews -->
      <section class="two-col">
        <div class="card glass" id="profile-preview">
          <div class="pv-head">
            <img class="avatar lg worker-avatar" src="https://i.pravatar.cc/120?img=13" alt="">
            <div>
              <div class="pv-name">Kasun Fernando</div>
              <div class="pv-skill" data-i18n="worker.skill">Electrician</div>
              <div class="pv-city">📍 Kandy</div>
            </div>
          </div>
          <div class="pv-stats">
            <div class="pv-stat"><b>4.8 ⭐</b><span data-i18n="pv.rating">Rating</span></div>
            <div class="pv-stat"><b>6 <span data-i18n="pv.yrs">yrs</span></b><span data-i18n="pv.experience">Experience</span></div>
            <div class="pv-stat"><b style="color:#2E8B62;" data-i18n="avail.available">Available for Work</b><span data-i18n="pv.status">Status</span></div>
          </div>
          <div class="pv-actions">
            <a class="btn btn-outline" href="#" onclick="showToast(t('toast.publicView'));return false;" data-i18n="action.viewPublicProfile">View Public Profile</a>
            <button class="btn btn-ghost" onclick="openModal('editProfileModal')" data-i18n="nav.editProfile">Edit Profile</button>
          </div>
        </div>

        <div class="card glass" id="reviews">
          <div class="section-head">
            <h2 data-i18n="reviews.title">Reviews</h2>
            <a class="link-more" href="#" onclick="return false;"><span data-i18n="action.viewAllReviews">View All Reviews</span> →</a>
          </div>
          <div class="rev-summary">
            <div class="rev-score">4.8</div>
            <div>
              <div class="rev-stars">★★★★★</div>
              <div class="rev-count">24 <span data-i18n="reviews.reviewsWord">Reviews</span></div>
            </div>
          </div>
          <div id="revList"></div>
        </div>
      </section>

      <!-- Recent Activity -->
      <section class="card glass" style="margin-bottom:18px;">
        <div class="section-head">
          <h2 data-i18n="activity.title">Recent Activity</h2>
        </div>
        <div class="activity-list" id="activityList"></div>
      </section>

      <!-- Quick actions -->
      <section class="card glass" style="margin-bottom:18px;">
        <div class="section-head">
          <h2 data-i18n="qa.title">Quick Actions</h2>
        </div>
        <div class="qa-grid" id="qaGrid"></div>
      </section>

      <!-- Notifications preview -->
      <section class="card glass">
        <div class="section-head">
          <h2 data-i18n="notif.title">Notifications</h2>
          <a class="link-more" href="#" onclick="openModal('notifModal');return false;"><span data-i18n="action.viewAllNotifications">View All Notifications</span> →</a>
        </div>
        <div id="notifPreviewList"></div>
      </section>
    </main>
  </div>

  <!-- ================= Mobile bottom nav ================= -->
  <nav class="bottom-nav">
    <a href="#dashboard" class="bn-item active"><span class="ic">▦</span><span data-i18n="nav.dashboard">Dashboard</span></a>
    <a href="#job-requests" class="bn-item"><span class="ic">📥</span><span data-i18n="nav.jobRequests">Requests</span></a>
    <a href="#my-jobs" class="bn-item"><span class="ic">🧰</span><span data-i18n="nav.myJobs">Jobs</span></a>
    <a href="#availability" class="bn-item"><span class="ic">🕒</span><span data-i18n="nav.availability">Availability</span></a>
    <a href="#" class="bn-item" onclick="openModal('settingsModal');return false;"><span class="ic">⚙</span><span data-i18n="nav.settings">Settings</span></a>
  </nav>

  <!-- ================= Modals ================= -->

  <!-- Availability -->
  <div class="modal-overlay" id="availModal">
    <div class="modal glass">
      <div class="modal-head">
        <h3 data-i18n="action.changeAvailability">Change Availability</h3>
        <button class="modal-close" onclick="closeModal('availModal')">✕</button>
      </div>
      <div class="avail-options" id="availOptions">
        <label class="avail-opt selected"><input type="radio" name="availOpt" value="available" checked><span data-i18n="avail.available">Available for Work</span></label>
        <label class="avail-opt"><input type="radio" name="availOpt" value="busy"><span data-i18n="avail.busy">Busy</span></label>
        <label class="avail-opt"><input type="radio" name="availOpt" value="off"><span data-i18n="avail.notAvailable">Not Available</span></label>
      </div>
      <div class="modal-actions">
        <button class="btn btn-outline" onclick="closeModal('availModal')" data-i18n="action.cancel">Cancel</button>
        <button class="btn btn-gold" onclick="saveAvailability()" data-i18n="action.save">Save</button>
      </div>
    </div>
  </div>

  <!-- Edit Profile -->
  <div class="modal-overlay" id="editProfileModal">
    <div class="modal glass">
      <div class="modal-head">
        <h3 data-i18n="edit.title">Edit Profile</h3>
        <button class="modal-close" onclick="closeModal('editProfileModal')">✕</button>
      </div>
      <div class="avatar-edit-row">
        <div class="avatar-edit-wrap">
          <img class="avatar lg" id="editAvatarPreview" src="https://i.pravatar.cc/120?img=13" alt="">
          <button type="button" class="avatar-edit-btn" onclick="document.getElementById('avatarFileInput').click()" aria-label="Change profile photo" data-i18n-aria="edit.changePhoto">📷</button>
          <input type="file" id="avatarFileInput" accept="image/*" class="visually-hidden" onchange="handleAvatarUpload(event)">
        </div>
        <div>
          <div class="avatar-edit-title" data-i18n="edit.profilePhoto">Profile Photo</div>
          <div class="avatar-edit-desc" data-i18n="edit.photoHint">JPG or PNG, square image works best</div>
        </div>
      </div>
      <div class="form-grid">
        <div class="field"><label data-i18n="edit.city">City</label><input type="text" value="Kandy"></div>
        <div class="field"><label data-i18n="edit.district">District</label><input type="text" value="Kandy"></div>
        <div class="field"><label data-i18n="edit.mainSkill">Main Skill</label><input type="text" value="Electrician"></div>
        <div class="field"><label data-i18n="edit.experience">Experience (years)</label><input type="number" value="6"></div>
        <div class="field"><label data-i18n="edit.expectedRate">Expected Rate (Rs.)</label><input type="number" value="2500"></div>
        <div class="field"><label data-i18n="edit.rateType">Rate Type</label>
          <select>
            <option data-i18n="edit.perDay">Per Day</option>
            <option data-i18n="edit.perJob">Per Job</option>
            <option data-i18n="edit.perHour">Per Hour</option>
          </select>
        </div>
      </div>
      <div class="form-grid full">
        <div class="field"><label data-i18n="edit.additionalSkills">Additional Skills</label><input type="text" value="Wiring, Panel Installation, AC Repair"></div>
        <div class="field"><label data-i18n="edit.bio">Bio</label><textarea>Licensed electrician with 6 years of experience in residential and commercial wiring across Kandy.</textarea></div>
      </div>
      <div class="modal-actions">
        <button class="btn btn-outline" onclick="closeModal('editProfileModal')" data-i18n="action.cancel">Cancel</button>
        <button class="btn btn-gold" onclick="saveProfile()" data-i18n="action.saveChanges">Save Changes</button>
      </div>
    </div>
  </div>

  <!-- Settings -->
  <div class="modal-overlay" id="settingsModal">
    <div class="modal glass">
      <div class="modal-head">
        <h3 data-i18n="nav.settings">Settings</h3>
        <button class="modal-close" onclick="closeModal('settingsModal')">✕</button>
      </div>
      <div class="form-grid">
        <div class="field"><label data-i18n="settings.name">Name</label><input type="text" value="Kasun Fernando"></div>
        <div class="field"><label data-i18n="settings.mobile">Mobile Number</label><input type="text" value="077 123 4567"></div>
        <div class="field"><label data-i18n="settings.email">Email</label><input type="email" value="kasun@example.com"></div>
        <div class="field"><label data-i18n="settings.password">Change Password</label><input type="password" placeholder="••••••••"></div>
      </div>
      <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 0;border-top:1px solid var(--border-faint);margin-top:6px;">
        <span style="font-size:13px;font-weight:600;color:var(--text-hi);" data-i18n="settings.contactPref">Contact Preferences</span>
        <button class="toggle on"></button>
      </div>
      <div class="modal-actions" style="justify-content:space-between;">
        <button class="btn btn-danger-outline" data-i18n="settings.deleteAccount">Delete Account</button>
        <div style="display:flex;gap:10px;">
          <button class="btn btn-outline" onclick="closeModal('settingsModal')" data-i18n="action.cancel">Cancel</button>
          <button class="btn btn-gold" onclick="saveSettings()" data-i18n="action.saveChanges">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Notifications -->
  <div class="modal-overlay" id="notifModal">
    <div class="modal glass">
      <div class="modal-head">
        <h3 data-i18n="notif.title">Notifications</h3>
        <button class="modal-close" onclick="closeModal('notifModal')">✕</button>
      </div>
      <div id="notifFullList"></div>
    </div>
  </div>

  <div class="toast" id="toast"></div>
  <script src="workerdash.js"></script>
</body>

</html>