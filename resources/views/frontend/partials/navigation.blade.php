<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
    <a class="user-avatar small no-outline online" href="{{ url('profile')}}">
      <div class="user-avatar-content">
        <div class="hexagon-image-30-32" data-src="assets/img/avatar/01.jpg"></div>
      </div>
      <div class="user-avatar-progress">
        <div class="hexagon-progress-40-44"></div>
      </div>
      <div class="user-avatar-progress-border">
        <div class="hexagon-border-40-44"></div>
      </div>
      <div class="user-avatar-badge">
        <div class="user-avatar-badge-border">
          <div class="hexagon-22-24"></div>
        </div>
        <div class="user-avatar-badge-content">
          <div class="hexagon-dark-16-18"></div>
        </div>
        <p class="user-avatar-badge-text">24</p>
      </div>
    </a>
    <ul class="menu small">
      <li class="menu-item">
        <a class="menu-item-link text-tooltip-tfr" href="{{ url('profile')}}" data-title="Profile">
          <svg class="menu-item-link-icon icon-newsfeed">
            <use xlink:href="#svg-newsfeed"></use>
          </svg>
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link text-tooltip-tfr" href="/dashboard" data-title="Overview">
          <svg class="menu-item-link-icon icon-overview">
            <use xlink:href="#svg-overview"></use>
          </svg>
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link text-tooltip-tfr" href="/badges" data-title="Badges">
          <svg class="menu-item-link-icon icon-badges">
            <use xlink:href="#svg-badges"></use>
          </svg>
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link text-tooltip-tfr" href="/tasks" data-title="Tasks">
          <svg class="menu-item-link-icon icon-quests">
            <use xlink:href="#svg-quests"></use>
          </svg>
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link text-tooltip-tfr" href="/events" data-title="Events">
          <svg class="menu-item-link-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link text-tooltip-tfr" href="/marketplace" data-title="Marketplace">
          <svg class="menu-item-link-icon icon-marketplace">
            <use xlink:href="#svg-marketplace"></use>
          </svg>
        </a>
      </li>
    </ul>
  </nav>
  <nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
    <figure class="navigation-widget-cover liquid">
      <img src="assets/img/cover/01.jpg" alt="cover-01">
    </figure>
    <div class="user-short-description">
      <a class="user-short-description-avatar user-avatar medium" href="{{ url('profile')}}">
        <div class="user-avatar-border">
          <div class="hexagon-120-132"></div>
        </div>
        <div class="user-avatar-content">
          <div class="hexagon-image-82-90" data-src="assets/img/avatar/01.jpg"></div>
        </div>
        <div class="user-avatar-progress">
          <div class="hexagon-progress-100-110"></div>
        </div>
        <div class="user-avatar-progress-border">
          <div class="hexagon-border-100-110"></div>
        </div>
        <div class="user-avatar-badge">
          <div class="user-avatar-badge-border">
            <div class="hexagon-32-36"></div>
          </div>
          <div class="user-avatar-badge-content">
            <div class="hexagon-dark-26-28"></div>
          </div>
          <p class="user-avatar-badge-text">24</p>
        </div>
      </a>
      <p class="user-short-description-title"><a href="{{ url('profile')}}">{{ Auth::user()->username}}</a></p>
      <p class="user-short-description-text"><a href="#">{{Auth::user()->email}}</a></p>
    </div>
    <div class="badge-list small">
      <div class="badge-item">
        <img src="assets/img/badge/gold-s.png" alt="badge-gold-s">
      </div>
      <div class="badge-item">
        <img src="assets/img/badge/age-s.png" alt="badge-age-s">
      </div>
      <div class="badge-item">
        <img src="assets/img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
      </div>
      <div class="badge-item">
        <img src="assets/img/badge/warrior-s.png" alt="badge-warrior-s">
      </div>
      <a class="badge-item" href="profile-badges.html">
        <img src="assets/img/badge/blank-s.png" alt="badge-blank-s">
        <p class="badge-item-text">+9</p>
      </a>
    </div>
    <div class="user-stats">
      <div class="user-stat">
        <p class="user-stat-title">930</p>
        <p class="user-stat-text">posts</p>
      </div>
      <div class="user-stat">
        <p class="user-stat-title">82</p>
        <p class="user-stat-text">friends</p>
      </div>
      <div class="user-stat">
        <p class="user-stat-title">5.7k</p>
        <p class="user-stat-text">visits</p>
      </div>
    </div>
    <ul class="menu">
      <li class="menu-item">
        <a class="menu-item-link" href="{{ url('profile')}}">
          <svg class="menu-item-link-icon icon-newsfeed">
            <use xlink:href="#svg-newsfeed"></use>
          </svg>
          Profile
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link" href="/dashboard">
          <svg class="menu-item-link-icon icon-overview">
            <use xlink:href="#svg-overview"></use>
          </svg>
          Overview
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link" href="/badges">
          <svg class="menu-item-link-icon icon-badges">
            <use xlink:href="#svg-badges"></use>
          </svg>
          Badges
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link" href="/tasks">
          <svg class="menu-item-link-icon icon-quests">
            <use xlink:href="#svg-quests"></use>
          </svg>
          Tasks
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link" href="/events">
          <svg class="menu-item-link-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
          Events
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link" href="/marketplace">
          <svg class="menu-item-link-icon icon-marketplace">
            <use xlink:href="#svg-marketplace"></use>
          </svg>
          Marketplace
        </a>
      </li>
    </ul>
  </nav>
  <nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden" data-simplebar>
    <div class="navigation-widget-close-button">
      <svg class="navigation-widget-close-button-icon icon-back-arrow">
        <use xlink:href="#svg-back-arrow"></use>
      </svg>
    </div>
    <div class="navigation-widget-info-wrap">
      <div class="navigation-widget-info">
        <a class="user-avatar small no-outline" href="{{ url('profile')}}">
          <div class="user-avatar-content">
            <div class="hexagon-image-30-32" data-src="assets/img/avatar/01.jpg"></div>
          </div>
          <div class="user-avatar-progress">
            <div class="hexagon-progress-40-44"></div>
          </div>
          <div class="user-avatar-progress-border">
            <div class="hexagon-border-40-44"></div>
          </div>
          <div class="user-avatar-badge">
            <div class="user-avatar-badge-border">
              <div class="hexagon-22-24"></div>
            </div>
            <div class="user-avatar-badge-content">
              <div class="hexagon-dark-16-18"></div>
            </div>
            <p class="user-avatar-badge-text">24</p>
          </div>
        </a>
        <p class="navigation-widget-info-title"><a href="{{ url('profile')}}">{{Auth::user()->username}}</a></p>
        <p class="navigation-widget-info-text">Welcome Back!</p>
      </div>
      <p class="navigation-widget-info-button button small secondary">Logout</p>
    </div>
    <p class="navigation-widget-section-title">Sections</p>
    <ul class="menu">
      <li class="menu-item">
        <a class="menu-item-link" href="{{ url('profile')}}">
          <svg class="menu-item-link-icon icon-newsfeed">
            <use xlink:href="#svg-newsfeed"></use>
          </svg>
          Profile
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link" href="/dashboard">
          <svg class="menu-item-link-icon icon-overview">
            <use xlink:href="#svg-overview"></use>
          </svg>
          Overview
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link" href="/badges">
          <svg class="menu-item-link-icon icon-badges">
            <use xlink:href="#svg-badges"></use>
          </svg>
          Badges
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link" href="/tasks">
          <svg class="menu-item-link-icon icon-quests">
            <use xlink:href="#svg-quests"></use>
          </svg>
          Task
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link" href="/events">
          <svg class="menu-item-link-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
          Events
        </a>
      </li>
      <li class="menu-item">
        <a class="menu-item-link" href="/marketplace">
          <svg class="menu-item-link-icon icon-marketplace">
            <use xlink:href="#svg-marketplace"></use>
          </svg>
          Marketplace
        </a>
      </li>
    </ul>
    <p class="navigation-widget-section-title">My Profile</p>
    <a class="navigation-widget-section-link" href="{{ url('profile')}}">Profile Info</a>
    <p class="navigation-widget-section-title">Account</p>
    <a class="navigation-widget-section-link" href="#">Account Info</a>
    <a class="navigation-widget-section-link" href="#">Change Password</a>
    <a class="navigation-widget-section-link" href="#">General Settings</a>
    <p class="navigation-widget-section-title">My Store</p>
    <a class="navigation-widget-section-title" href="#">
      Kwarta Coins
      <span class="highlighted my_account" ></span> 
    </a>
    <a class="navigation-widget-section-link" href="#">Sales Statement</a>
    <a class="navigation-widget-section-link" href="#">Manage Items</a>
  </nav>