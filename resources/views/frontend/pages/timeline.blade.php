@extends('frontend.master.template')

@section('content')
<div class="content-grid">
    <div class="profile-header">
        <figure class="profile-header-cover liquid">
        <img src="assets/img/cover/01.jpg" alt="cover-01">
        </figure>
        <div class="profile-header-info">
        <div class="user-short-description big">
            <a class="user-short-description-avatar user-avatar big" href="profile-timeline.html">
            <div class="user-avatar-border">
                <div class="hexagon-148-164"></div>
            </div>
            <div class="user-avatar-content">
                <div class="hexagon-image-100-110" data-src="assets/img/avatar/01.jpg"></div>
            </div>
            <div class="user-avatar-progress">
                <div class="hexagon-progress-124-136"></div>
            </div>
            <div class="user-avatar-progress-border">
                <div class="hexagon-border-124-136"></div>
            </div>
            <div class="user-avatar-badge">
                <div class="user-avatar-badge-border">
                <div class="hexagon-40-44"></div>
                </div>
                <div class="user-avatar-badge-content">
                <div class="hexagon-dark-32-34"></div>
                </div>
                <p class="user-avatar-badge-text">24</p>
            </div>
            </a>
            <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium" href="profile-timeline.html">
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
            <p class="user-short-description-title"><a href="profile-timeline.html">Marina Valentine</a></p>
            <p class="user-short-description-text"><a href="#">www.gamehuntress.com</a></p>
        </div>
        <div class="profile-header-social-links-wrap">
            <div id="profile-header-social-links-slider" class="profile-header-social-links">
            <div class="profile-header-social-link">
                <a class="social-link facebook" href="#">
                <svg class="icon-facebook">
                    <use xlink:href="#svg-facebook"></use>
                </svg>
                </a>
            </div>
            <div class="profile-header-social-link">
                <a class="social-link twitter" href="#">
                <svg class="icon-twitter">
                    <use xlink:href="#svg-twitter"></use>
                </svg>
                </a>
            </div>
            <div class="profile-header-social-link">
                <a class="social-link instagram" href="#">
                <svg class="icon-instagram">
                    <use xlink:href="#svg-instagram"></use>
                </svg>
                </a>
            </div>
            <div class="profile-header-social-link">
                <a class="social-link twitch" href="#">
                <svg class="icon-twitch">
                    <use xlink:href="#svg-twitch"></use>
                </svg>
                </a>
            </div>
            <div class="profile-header-social-link">
                <a class="social-link youtube" href="#">
                <svg class="icon-youtube">
                    <use xlink:href="#svg-youtube"></use>
                </svg>
                </a>
            </div>
            <div class="profile-header-social-link">
                <a class="social-link patreon" href="#">
                <svg class="icon-patreon">
                    <use xlink:href="#svg-patreon"></use>
                </svg>
                </a>
            </div>
            <div class="profile-header-social-link">
                <a class="social-link discord" href="#">
                <svg class="icon-discord">
                    <use xlink:href="#svg-discord"></use>
                </svg>
                </a>
            </div>
            </div>
            <div id="profile-header-social-links-slider-controls" class="slider-controls">
            <div class="slider-control left">
                <svg class="slider-control-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
                </svg>
            </div>
            <div class="slider-control right">
                <svg class="slider-control-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
                </svg>
            </div>
            </div>
        </div>
        <div class="user-stats">
            <div class="user-stat big">
            <p class="user-stat-title">930</p>
            <p class="user-stat-text">posts</p>
            </div>
            <div class="user-stat big">
            <p class="user-stat-title">82</p>
            <p class="user-stat-text">friends</p>
            </div>
            <div class="user-stat big">
            <p class="user-stat-title">5.7k</p>
            <p class="user-stat-text">visits</p>
            </div>
            <div class="user-stat big">
            <img class="user-stat-image" src="assets/img/flag/usa.png" alt="flag-usa">
            <p class="user-stat-text">usa</p>
            </div>
        </div>
        <div class="profile-header-info-actions">
            <p class="profile-header-info-action button secondary"><span class="hide-text-mobile">Add</span> Friend +</p>
            <p class="profile-header-info-action button primary"><span class="hide-text-mobile">Send</span> Message</p>
        </div>
        </div>
    </div>
    <div class="grid grid-3-6-3 mobile-prefer-content">
        <div class="grid-column">
        <div class="widget-box">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
                </div>
            </div>
            </div>
            <p class="widget-box-title">About Me</p>
            <div class="widget-box-content">
            <p class="paragraph">Hi! My name is Marina but some people may know me as GameHuntress! I have a Twitch channel where I stream, play and review all the newest games.</p>
            <div class="information-line-list">
                <div class="information-line">
                <p class="information-line-title">Joined</p>
                <p class="information-line-text">March 26th, 2017</p>
                </div>
                <div class="information-line">
                <p class="information-line-title">City</p>
                <p class="information-line-text">Los Angeles, California</p>
                </div>
                <div class="information-line">
                <p class="information-line-title">Country</p>
                <p class="information-line-text">United States</p>
                </div>
                <div class="information-line">
                <p class="information-line-title">Age</p>
                <p class="information-line-text">32 Years</p>
                </div>
                <div class="information-line">
                <p class="information-line-title">Web</p>
                <p class="information-line-text"><a href="#">www.gamehuntress.com</a></p>
                </div>
            </div>
            </div>
        </div>
        <div class="widget-box">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
                </div>
            </div>
            </div>
            <p class="widget-box-title">Badges <span class="highlighted">13</span></p>
            <div class="widget-box-content">
            <div class="badge-list">
                <div class="badge-item text-tooltip-tft" data-title="Gold User">
                <img src="assets/img/badge/gold-s.png" alt="badge-gold-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="Profile Age">
                <img src="assets/img/badge/age-s.png" alt="badge-age-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="Caffeinatted">
                <img src="assets/img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="The Warrior">
                <img src="assets/img/badge/warrior-s.png" alt="badge-warrior-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="Forum Traveller">
                <img src="assets/img/badge/traveller-s.png" alt="badge-traveller-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="Crazy Scientist">
                <img src="assets/img/badge/scientist-s.png" alt="badge-scientist-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="Night Creature">
                <img src="assets/img/badge/ncreature-s.png" alt="badge-ncreature-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="Mightier Than Sword">
                <img src="assets/img/badge/mightiers-s.png" alt="badge-mightiers-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="The Phantom">
                <img src="assets/img/badge/phantom-s.png" alt="badge-phantom-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="The Collector">
                <img src="assets/img/badge/collector-s.png" alt="badge-collector-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="Bronze Cup">
                <img src="assets/img/badge/bronzec-s.png" alt="badge-bronzec-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="Silver Cup">
                <img src="assets/img/badge/silverc-s.png" alt="badge-silverc-s">
                </div>
                <div class="badge-item text-tooltip-tft" data-title="Gold Cup">
                <img src="assets/img/badge/goldc-s.png" alt="badge-goldc-s">
                </div>
            </div>
            </div>
        </div>
        <div class="widget-box">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
                </div>
            </div>
            </div>
            <p class="widget-box-title">Friends <span class="highlighted">82</span></p>
            <div class="widget-box-content">
            <div class="user-status-list">
                <div class="user-status request-small">
                <a class="user-status-avatar" href="profile-timeline.html">
                    <div class="user-avatar small no-outline">
                    <div class="user-avatar-content">
                        <div class="hexagon-image-30-32" data-src="assets/img/avatar/07.jpg"></div>
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
                        <p class="user-avatar-badge-text">26</p>
                    </div>
                    </div>
                </a>
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Sarah Diamond</a></p>
                <p class="user-status-text small">2 friends in common</p>
                <div class="action-request-list">
                    <div class="action-request accept">
                    <svg class="action-request-icon icon-add-friend">
                        <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    </div>
                </div>
                </div>
                <div class="user-status request-small">
                <a class="user-status-avatar" href="profile-timeline.html">
                    <div class="user-avatar small no-outline">
                    <div class="user-avatar-content">
                        <div class="hexagon-image-30-32" data-src="assets/img/avatar/03.jpg"></div>
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
                        <p class="user-avatar-badge-text">16</p>
                    </div>
                    </div>
                </a>
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a></p>
                <p class="user-status-text small">5 friends in common</p>
                <div class="action-request-list">
                    <div class="action-request accept">
                    <svg class="action-request-icon icon-add-friend">
                        <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    </div>
                </div>
                </div>
                <div class="user-status request-small">
                <a class="user-status-avatar" href="profile-timeline.html">
                    <div class="user-avatar small no-outline">
                    <div class="user-avatar-content">
                        <div class="hexagon-image-30-32" data-src="assets/img/avatar/02.jpg"></div>
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
                        <p class="user-avatar-badge-text">13</p>
                    </div>
                    </div>
                </a>
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a></p>
                <p class="user-status-text small">0 friends in common</p>
                <div class="action-request-list">
                    <div class="action-request accept">
                    <svg class="action-request-icon icon-add-friend">
                        <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    </div>
                </div>
                </div>
                <div class="user-status request-small">
                <a class="user-status-avatar" href="profile-timeline.html">
                    <div class="user-avatar small no-outline">
                    <div class="user-avatar-content">
                        <div class="hexagon-image-30-32" data-src="assets/img/avatar/05.jpg"></div>
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
                        <p class="user-avatar-badge-text">12</p>
                    </div>
                    </div>
                </a>
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a></p>
                <p class="user-status-text small">1 friends in common</p>
                <div class="action-request-list">
                    <div class="action-request decline">
                    <svg class="action-request-icon icon-remove-friend">
                        <use xlink:href="#svg-remove-friend"></use>
                    </svg>
                    </div>
                </div>
                </div>
                <div class="user-status request-small">
                <a class="user-status-avatar" href="profile-timeline.html">
                    <div class="user-avatar small no-outline">
                    <div class="user-avatar-content">
                        <div class="hexagon-image-30-32" data-src="assets/img/avatar/10.jpg"></div>
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
                        <p class="user-avatar-badge-text">5</p>
                    </div>
                    </div>
                </a>
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a></p>
                <p class="user-status-text small">8 friends in common</p>
                <div class="action-request-list">
                    <div class="action-request accept">
                    <svg class="action-request-icon icon-add-friend">
                        <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <a class="widget-box-button button small secondary" href="profile-friends.html">See all Friends</a>
        </div>
        <div class="widget-box">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
                </div>
            </div>
            </div>
            <p class="widget-box-title">Videos <span class="highlighted">7</span></p>
            <div class="widget-box-content">
            <div class="video-box-list">
                <div class="video-box small">
                <div class="video-box-cover popup-video-trigger">
                    <figure class="video-box-cover-image liquid">
                    <img src="assets/img/cover/08.jpg" alt="cover-08">
                    </figure>
                    <div class="play-button">
                    <svg class="play-button-icon icon-play">
                        <use xlink:href="#svg-play"></use>
                    </svg>
                    </div>
                    <div class="video-box-info">
                    <p class="video-box-title">Mochi's Island Story Mode</p>
                    <p class="video-box-text">1 hour ago</p>
                    </div>
                </div>
                </div>
                <div class="video-box small">
                <div class="video-box-cover popup-video-trigger">
                    <figure class="video-box-cover-image liquid">
                    <img src="assets/img/cover/09.jpg" alt="cover-09">
                    </figure>
                    <div class="play-button">
                    <svg class="play-button-icon icon-play">
                        <use xlink:href="#svg-play"></use>
                    </svg>
                    </div>
                    <div class="video-box-info">
                    <p class="video-box-title">Sunset Cowboys - Walkthrough</p>
                    <p class="video-box-text">3 days ago</p>
                    </div>
                </div>
                </div>
                <div class="video-box small">
                <div class="video-box-cover popup-video-trigger">
                    <figure class="video-box-cover-image liquid">
                    <img src="assets/img/cover/05.jpg" alt="cover-05">
                    </figure>
                    <div class="play-button">
                    <svg class="play-button-icon icon-play">
                        <use xlink:href="#svg-play"></use>
                    </svg>
                    </div>
                    <div class="video-box-info">
                    <p class="video-box-title">Quest of the Ogre II: The Revenge USA...</p>
                    <p class="video-box-text">5 days ago</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="widget-box">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
                </div>
            </div>
            </div>
            <p class="widget-box-title">Blog Posts <span class="highlighted">5</span></p>
            <div class="widget-box-content">
            <div class="post-peek-list">
                <div class="post-peek">
                <a class="post-peek-image" href="profile-post.html">
                    <figure class="picture small round liquid">
                    <img src="assets/img/cover/19.jpg" alt="cover-19">
                    </figure>
                </a>
                <p class="post-peek-title"><a href="profile-post.html">Here's the how and why did I became a full time Gaming Streamer</a></p>
                <p class="post-peek-text">6 days ago</p>
                </div>
                <div class="post-peek">
                <a class="post-peek-image" href="profile-post.html">
                    <figure class="picture small round liquid">
                    <img src="assets/img/cover/10.jpg" alt="cover-10">
                    </figure>
                </a>
                <p class="post-peek-title"><a href="profile-post.html">I spoke with the developers of RoBot SaMurai II at the 2019 GamingCon</a></p>
                <p class="post-peek-text">3 weeks ago</p>
                </div>
                <div class="post-peek">
                <a class="post-peek-image" href="profile-post.html">
                    <figure class="picture small round liquid">
                    <img src="assets/img/cover/20.jpg" alt="cover-20">
                    </figure>
                </a>
                <p class="post-peek-title"><a href="profile-post.html">I will be at this month's StreamCon with NekoBebop</a></p>
                <p class="post-peek-text">4 weeks ago</p>
                </div>
                <div class="post-peek">
                <a class="post-peek-image" href="profile-post.html">
                    <figure class="picture small round liquid">
                    <img src="assets/img/cover/06.jpg" alt="cover-06">
                    </figure>
                </a>
                <p class="post-peek-title"><a href="profile-post.html">[Exclusive!] Check out all the new missions and story of the Fire Witch DLC!</a></p>
                <p class="post-peek-text">1 month ago</p>
                </div>
                <div class="post-peek">
                <a class="post-peek-image" href="profile-post.html">
                    <figure class="picture small round liquid">
                    <img src="assets/img/cover/07.jpg" alt="cover-07">
                    </figure>
                </a>
                <p class="post-peek-title"><a href="profile-post.html">Old Super Mochi's Island is getting a remake!</a></p>
                <p class="post-peek-text">1 month ago</p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="grid-column">
        <div class="widget-box no-padding">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Edit Post</p>
                <p class="simple-dropdown-link">Delete Post</p>
                <p class="simple-dropdown-link">Make it Featured</p>
                <p class="simple-dropdown-link">Report Post</p>
                <p class="simple-dropdown-link">Report Author</p>
                </div>
            </div>
            </div>
            <div class="widget-box-status">
            <div class="tag-sticker">
                <svg class="tag-sticker-icon primary icon-pinned">
                <use xlink:href="#svg-pinned"></use>
                </svg>
            </div>
            <div class="widget-box-status-content">
                <div class="user-status">
                <a class="user-status-avatar" href="profile-timeline.html">
                    <div class="user-avatar small no-outline">
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
                    </div>
                </a>
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Marina Valentine</a></p>
                <p class="user-status-text small">5 hours ago</p>
                </div>
                <p class="widget-box-status-text">Hi to all! Remember that today I'll be livestreaming along with <a href="profile-timeline.html">@NekoBebop</a> the new character of the brand new Xenowatch patch "Anya Darkness". See you there!</p>
                <a class="video-status small" href="https://www.twitch.tv/" target="_blank">
                <img class="video-status-image mobile" src="assets/img/cover/06.jpg" alt="cover-06">
                <figure class="video-status-image liquid">
                    <img src="assets/img/cover/06.jpg" alt="cover-06">
                </figure>
                <div class="video-status-info">
                    <p class="video-status-title"><span class="bold">GameHuntress</span> on <span class="highlighted">Twitch</span></p>
                    <p class="video-status-text">Watch the GameHuntress play all the greatest games for both new and old consoles!. Join her in this epic quest!</p>
                    <p class="video-status-meta">twitch.tv</p>
                </div>
                </a>
                <div class="tag-list">
                <a class="tag-item secondary" href="newsfeed.html">Stream</a>
                <a class="tag-item secondary" href="newsfeed.html">Xenowatch</a>
                <a class="tag-item secondary" href="newsfeed.html">Gaming</a>
                <a class="tag-item secondary" href="newsfeed.html">Twitch</a>
                </div>
                <div class="content-actions">
                <div class="content-action">
                    <div class="meta-line">
                    <div class="meta-line-list reaction-item-list">
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/happy.png" alt="reaction-happy">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
                            <p class="simple-dropdown-text">Matt Parker</p>
                            <p class="simple-dropdown-text">Destroy Dex</p>
                            <p class="simple-dropdown-text">The Green Goo</p>
                        </div>
                        </div>
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/love.png" alt="reaction-love">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
                            <p class="simple-dropdown-text">Sandra Strange</p>
                        </div>
                        </div>
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/like.png" alt="reaction-like">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                            <p class="simple-dropdown-text">Neko Bebop</p>
                            <p class="simple-dropdown-text">Nick Grissom</p>
                            <p class="simple-dropdown-text">Sarah Diamond</p>
                            <p class="simple-dropdown-text">Jett Spiegel</p>
                            <p class="simple-dropdown-text">Marcus Jhonson</p>
                            <p class="simple-dropdown-text">Jane Rodgers</p>
                            <p class="simple-dropdown-text"><span class="bold">and 2 more...</span></p>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">12</p>
                    </div>
                    <div class="meta-line">
                    <div class="meta-line-list user-avatar-list">
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/09.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/08.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/12.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/16.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/06.jpg"></div>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">14 Participants</p>
                    </div>
                </div>
                <div class="content-action">
                    <div class="meta-line">
                    <p class="meta-line-link">3 Comments</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-text">0 Shares</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="post-options">
            <div class="post-option-wrap">
                <div class="post-option reaction-options-dropdown-trigger">
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <p class="post-option-text">React!</p>
                </div>
                <div class="reaction-options reaction-options-dropdown">
                <div class="reaction-option text-tooltip-tft" data-title="Like">
                    <img class="reaction-option-image" src="assets/img/reaction/like.png" alt="reaction-like">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Love">
                    <img class="reaction-option-image" src="assets/img/reaction/love.png" alt="reaction-love">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                    <img class="reaction-option-image" src="assets/img/reaction/dislike.png" alt="reaction-dislike">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Happy">
                    <img class="reaction-option-image" src="assets/img/reaction/happy.png" alt="reaction-happy">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Funny">
                    <img class="reaction-option-image" src="assets/img/reaction/funny.png" alt="reaction-funny">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Wow">
                    <img class="reaction-option-image" src="assets/img/reaction/wow.png" alt="reaction-wow">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Angry">
                    <img class="reaction-option-image" src="assets/img/reaction/angry.png" alt="reaction-angry">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Sad">
                    <img class="reaction-option-image" src="assets/img/reaction/sad.png" alt="reaction-sad">
                </div>
                </div>
            </div>
            <div class="post-option">
                <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
                </svg>
                <p class="post-option-text">Comment</p>
            </div>
            <div class="post-option">
                <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
                </svg>
                <p class="post-option-text">Share</p>
            </div>
            </div>
        </div>
        <div class="widget-box no-padding">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Edit Post</p>
                <p class="simple-dropdown-link">Delete Post</p>
                <p class="simple-dropdown-link">Make it Featured</p>
                <p class="simple-dropdown-link">Report Post</p>
                <p class="simple-dropdown-link">Report Author</p>
                </div>
            </div>
            </div>
            <div class="widget-box-status">
            <div class="widget-box-status-content">
                <div class="user-status">
                <a class="user-status-avatar" href="profile-timeline.html">
                    <div class="user-avatar small no-outline">
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
                    </div>
                </a>
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Marina Valentine</a></p>
                <p class="user-status-text small">29 minutes ago</p>
                </div>
                <p class="widget-box-status-text">I have great news to share with you all! I've been officially made a game streaming verified partner by Streamy <a href="#">http://lyt.ly/snej25</a>. What does this mean? I'll be uploading new content every day, improving the quality and I'm gonna have access to games a month before the official release.</p>
                <p class="widget-box-status-text">This is a dream come true, thanks to all for the support!!!</p>
                <div class="content-actions">
                <div class="content-action">
                    <div class="meta-line">
                    <div class="meta-line-list reaction-item-list">
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/like.png" alt="reaction-like">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                            <p class="simple-dropdown-text">Neko Bebop</p>
                            <p class="simple-dropdown-text">Nick Grissom</p>
                            <p class="simple-dropdown-text">Sarah Diamond</p>
                        </div>
                        </div>
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/love.png" alt="reaction-love">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
                            <p class="simple-dropdown-text">Jett Spiegel</p>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">4</p>
                    </div>
                    <div class="meta-line">
                    <div class="meta-line-list user-avatar-list">
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/10.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/07.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/06.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/23.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/08.jpg"></div>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">7 Participants</p>
                    </div>
                </div>
                <div class="content-action">
                    <div class="meta-line">
                    <p class="meta-line-link">8 Comments</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-text">0 Shares</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="post-options">
            <div class="post-option-wrap">
                <div class="post-option reaction-options-dropdown-trigger">
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <p class="post-option-text">React!</p>
                </div>
                <div class="reaction-options reaction-options-dropdown">
                <div class="reaction-option text-tooltip-tft" data-title="Like">
                    <img class="reaction-option-image" src="assets/img/reaction/like.png" alt="reaction-like">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Love">
                    <img class="reaction-option-image" src="assets/img/reaction/love.png" alt="reaction-love">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                    <img class="reaction-option-image" src="assets/img/reaction/dislike.png" alt="reaction-dislike">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Happy">
                    <img class="reaction-option-image" src="assets/img/reaction/happy.png" alt="reaction-happy">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Funny">
                    <img class="reaction-option-image" src="assets/img/reaction/funny.png" alt="reaction-funny">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Wow">
                    <img class="reaction-option-image" src="assets/img/reaction/wow.png" alt="reaction-wow">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Angry">
                    <img class="reaction-option-image" src="assets/img/reaction/angry.png" alt="reaction-angry">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Sad">
                    <img class="reaction-option-image" src="assets/img/reaction/sad.png" alt="reaction-sad">
                </div>
                </div>
            </div>
            <div class="post-option">
                <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
                </svg>
                <p class="post-option-text">Comment</p>
            </div>
            <div class="post-option">
                <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
                </svg>
                <p class="post-option-text">Share</p>
            </div>
            </div>
        </div>
        <div class="widget-box no-padding">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Edit Post</p>
                <p class="simple-dropdown-link">Delete Post</p>
                <p class="simple-dropdown-link">Make it Featured</p>
                <p class="simple-dropdown-link">Report Post</p>
                <p class="simple-dropdown-link">Report Author</p>
                </div>
            </div>
            </div>
            <div class="widget-box-status">
            <div class="widget-box-status-content">
                <div class="user-status">
                <a class="user-status-avatar" href="profile-timeline.html">
                    <div class="user-avatar small no-outline">
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
                    </div>
                </a>
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Marina Valentine</a></p>
                <p class="user-status-text small">29 minutes ago</p>
                </div>
                <p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing a preview tommorrow at 9PM PCT!</p>
            </div>
            <figure class="widget-box-picture popup-picture-trigger">
                <img src="assets/img/cover/04.jpg" alt="cover-04">
            </figure>
            <div class="widget-box-status-content">
                <div class="tag-list">
                <a class="tag-item secondary" href="newsfeed.html">Cover</a>
                <a class="tag-item secondary" href="newsfeed.html">Preview</a>
                <a class="tag-item secondary" href="newsfeed.html">Art</a>
                <a class="tag-item secondary" href="newsfeed.html">Machine</a>
                <a class="tag-item secondary" href="newsfeed.html">Wasteland</a>
                </div>
                <div class="content-actions">
                <div class="content-action">
                    <div class="meta-line">
                    <div class="meta-line-list reaction-item-list">
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/love.png" alt="reaction-love">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
                            <p class="simple-dropdown-text">Destroy Dex</p>
                            <p class="simple-dropdown-text">The Green Goo</p>
                            <p class="simple-dropdown-text">Bearded Wonder</p>
                            <p class="simple-dropdown-text">Sandra Strange</p>
                            <p class="simple-dropdown-text">Matt Parker</p>
                            <p class="simple-dropdown-text">James Murdock</p>
                            <p class="simple-dropdown-text"><span class="bold">and 14 more...</span></p>
                        </div>
                        </div>
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/wow.png" alt="reaction-wow">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/wow.png" alt="reaction-wow"> <span class="bold">Wow</span></p>
                            <p class="simple-dropdown-text">Jett Spiegel</p>
                        </div>
                        </div>
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/like.png" alt="reaction-like">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                            <p class="simple-dropdown-text">Neko Bebop</p>
                            <p class="simple-dropdown-text">Nick Grissom</p>
                            <p class="simple-dropdown-text">Sarah Diamond</p>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">24</p>
                    </div>
                    <div class="meta-line">
                    <div class="meta-line-list user-avatar-list">
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/07.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/02.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/10.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/05.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/03.jpg"></div>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">27 Participants</p>
                    </div>
                </div>
                <div class="content-action">
                    <div class="meta-line">
                    <p class="meta-line-link">13 Comments</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-text">0 Shares</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="post-options">
            <div class="post-option-wrap">
                <div class="post-option reaction-options-dropdown-trigger">
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <p class="post-option-text">React!</p>
                </div>
                <div class="reaction-options reaction-options-dropdown">
                <div class="reaction-option text-tooltip-tft" data-title="Like">
                    <img class="reaction-option-image" src="assets/img/reaction/like.png" alt="reaction-like">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Love">
                    <img class="reaction-option-image" src="assets/img/reaction/love.png" alt="reaction-love">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                    <img class="reaction-option-image" src="assets/img/reaction/dislike.png" alt="reaction-dislike">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Happy">
                    <img class="reaction-option-image" src="assets/img/reaction/happy.png" alt="reaction-happy">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Funny">
                    <img class="reaction-option-image" src="assets/img/reaction/funny.png" alt="reaction-funny">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Wow">
                    <img class="reaction-option-image" src="assets/img/reaction/wow.png" alt="reaction-wow">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Angry">
                    <img class="reaction-option-image" src="assets/img/reaction/angry.png" alt="reaction-angry">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Sad">
                    <img class="reaction-option-image" src="assets/img/reaction/sad.png" alt="reaction-sad">
                </div>
                </div>
            </div>
            <div class="post-option active">
                <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
                </svg>
                <p class="post-option-text">Comment</p>
            </div>
            <div class="post-option">
                <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
                </svg>
                <p class="post-option-text">Share</p>
            </div>
            </div>
            <div class="post-comment-list">
            <div class="post-comment">
                <a class="user-avatar small no-outline" href="profile-timeline.html">
                <div class="user-avatar-content">
                    <div class="hexagon-image-30-32" data-src="assets/img/avatar/05.jpg"></div>
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
                    <p class="user-avatar-badge-text">12</p>
                </div>
                </a>
                <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Neko Bebop</a>It's always a pleasure to do this streams with you! If we have at least half the fun than last time it will be an incredible success!</p>
                <div class="content-actions">
                <div class="content-action">
                    <div class="meta-line">
                    <div class="meta-line-list reaction-item-list small">
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/happy.png" alt="reaction-happy">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
                            <p class="simple-dropdown-text">Marcus Jhonson</p>
                        </div>
                        </div>
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/like.png" alt="reaction-like">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                            <p class="simple-dropdown-text">Neko Bebop</p>
                            <p class="simple-dropdown-text">Nick Grissom</p>
                            <p class="simple-dropdown-text">Sarah Diamond</p>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">4</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                    <div class="reaction-options small reaction-options-small-dropdown">
                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                        <img class="reaction-option-image" src="assets/img/reaction/like.png" alt="reaction-like">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                        <img class="reaction-option-image" src="assets/img/reaction/love.png" alt="reaction-love">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                        <img class="reaction-option-image" src="assets/img/reaction/dislike.png" alt="reaction-dislike">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                        <img class="reaction-option-image" src="assets/img/reaction/happy.png" alt="reaction-happy">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                        <img class="reaction-option-image" src="assets/img/reaction/funny.png" alt="reaction-funny">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                        <img class="reaction-option-image" src="assets/img/reaction/wow.png" alt="reaction-wow">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                        <img class="reaction-option-image" src="assets/img/reaction/angry.png" alt="reaction-angry">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                        <img class="reaction-option-image" src="assets/img/reaction/sad.png" alt="reaction-sad">
                        </div>
                    </div>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-link light">Reply</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-timestamp">15 minutes ago</p>
                    </div>
                    <div class="meta-line settings">
                    <div class="post-settings-wrap">
                        <div class="post-settings post-settings-dropdown-trigger">
                        <svg class="post-settings-icon icon-more-dots">
                            <use xlink:href="#svg-more-dots"></use>
                        </svg>
                        </div>
                        <div class="simple-dropdown post-settings-dropdown">
                        <p class="simple-dropdown-link">Report Post</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="post-comment unread reply-2">
                <a class="user-avatar small no-outline" href="profile-timeline.html">
                <div class="user-avatar-content">
                    <div class="hexagon-image-30-32" data-src="assets/img/avatar/03.jpg"></div>
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
                    <p class="user-avatar-badge-text">16</p>
                </div>
                </a>
                <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Nick Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
                <div class="content-actions">
                <div class="content-action">
                    <div class="meta-line">
                    <div class="meta-line-list reaction-item-list small">
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/like.png" alt="reaction-like">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                            <p class="simple-dropdown-text">Neko Bebop</p>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">1</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                    <div class="reaction-options small reaction-options-small-dropdown">
                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                        <img class="reaction-option-image" src="assets/img/reaction/like.png" alt="reaction-like">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                        <img class="reaction-option-image" src="assets/img/reaction/love.png" alt="reaction-love">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                        <img class="reaction-option-image" src="assets/img/reaction/dislike.png" alt="reaction-dislike">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                        <img class="reaction-option-image" src="assets/img/reaction/happy.png" alt="reaction-happy">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                        <img class="reaction-option-image" src="assets/img/reaction/funny.png" alt="reaction-funny">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                        <img class="reaction-option-image" src="assets/img/reaction/wow.png" alt="reaction-wow">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                        <img class="reaction-option-image" src="assets/img/reaction/angry.png" alt="reaction-angry">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                        <img class="reaction-option-image" src="assets/img/reaction/sad.png" alt="reaction-sad">
                        </div>
                    </div>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-link light">Reply</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-timestamp">2 minutes ago</p>
                    </div>
                    <div class="meta-line settings">
                    <div class="post-settings-wrap">
                        <div class="post-settings post-settings-dropdown-trigger">
                        <svg class="post-settings-icon icon-more-dots">
                            <use xlink:href="#svg-more-dots"></use>
                        </svg>
                        </div>
                        <div class="simple-dropdown post-settings-dropdown">
                        <p class="simple-dropdown-link">Report Post</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="post-comment">
                <a class="user-avatar small no-outline" href="profile-timeline.html">
                <div class="user-avatar-content">
                    <div class="hexagon-image-30-32" data-src="assets/img/avatar/02.jpg"></div>
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
                    <p class="user-avatar-badge-text">19</p>
                </div>
                </a>
                <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Destroy Dex</a>YEAHHH!! <a href="profile-timeline.html">@MarinaValentine</a> I really enjoyed your last stream and it also was really funny! Can't wait!</p>
                <div class="content-actions">
                <div class="content-action">
                    <div class="meta-line">
                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                    <div class="reaction-options small reaction-options-small-dropdown">
                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                        <img class="reaction-option-image" src="assets/img/reaction/like.png" alt="reaction-like">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                        <img class="reaction-option-image" src="assets/img/reaction/love.png" alt="reaction-love">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                        <img class="reaction-option-image" src="assets/img/reaction/dislike.png" alt="reaction-dislike">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                        <img class="reaction-option-image" src="assets/img/reaction/happy.png" alt="reaction-happy">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                        <img class="reaction-option-image" src="assets/img/reaction/funny.png" alt="reaction-funny">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                        <img class="reaction-option-image" src="assets/img/reaction/wow.png" alt="reaction-wow">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                        <img class="reaction-option-image" src="assets/img/reaction/angry.png" alt="reaction-angry">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                        <img class="reaction-option-image" src="assets/img/reaction/sad.png" alt="reaction-sad">
                        </div>
                    </div>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-link light">Reply</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-timestamp">27 minutes ago</p>
                    </div>
                    <div class="meta-line settings">
                    <div class="post-settings-wrap">
                        <div class="post-settings post-settings-dropdown-trigger">
                        <svg class="post-settings-icon icon-more-dots">
                            <use xlink:href="#svg-more-dots"></use>
                        </svg>
                        </div>
                        <div class="simple-dropdown post-settings-dropdown">
                        <p class="simple-dropdown-link">Report Post</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="post-comment">
                <a class="user-avatar small no-outline" href="profile-timeline.html">
                <div class="user-avatar-content">
                    <div class="hexagon-image-30-32" data-src="assets/img/avatar/07.jpg"></div>
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
                    <p class="user-avatar-badge-text">26</p>
                </div>
                </a>
                <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Sarah Diamond</a>That sounds awesome Marina! And also thanks a lot for the art sneak peek! I went to the GameCon last week and had a great time playing the game's open demo.</p>
                <div class="content-actions">
                <div class="content-action">
                    <div class="meta-line">
                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                    <div class="reaction-options small reaction-options-small-dropdown">
                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                        <img class="reaction-option-image" src="assets/img/reaction/like.png" alt="reaction-like">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                        <img class="reaction-option-image" src="assets/img/reaction/love.png" alt="reaction-love">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                        <img class="reaction-option-image" src="assets/img/reaction/dislike.png" alt="reaction-dislike">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                        <img class="reaction-option-image" src="assets/img/reaction/happy.png" alt="reaction-happy">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                        <img class="reaction-option-image" src="assets/img/reaction/funny.png" alt="reaction-funny">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                        <img class="reaction-option-image" src="assets/img/reaction/wow.png" alt="reaction-wow">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                        <img class="reaction-option-image" src="assets/img/reaction/angry.png" alt="reaction-angry">
                        </div>
                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                        <img class="reaction-option-image" src="assets/img/reaction/sad.png" alt="reaction-sad">
                        </div>
                    </div>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-link light">Reply</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-timestamp">39 minutes ago</p>
                    </div>
                    <div class="meta-line settings">
                    <div class="post-settings-wrap">
                        <div class="post-settings post-settings-dropdown-trigger">
                        <svg class="post-settings-icon icon-more-dots">
                            <use xlink:href="#svg-more-dots"></use>
                        </svg>
                        </div>
                        <div class="simple-dropdown post-settings-dropdown">
                        <p class="simple-dropdown-link">Report Post</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
            <div class="post-comment-form">
                <div class="user-avatar small no-outline">
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
                </div>
                <form class="form">
                <div class="form-row">
                    <div class="form-item">
                    <div class="form-input small">
                        <label for="post-reply">Your Reply</label>
                        <input type="text" id="post-reply" name="post_reply">
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        <div class="widget-box no-padding">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Edit Post</p>
                <p class="simple-dropdown-link">Delete Post</p>
                <p class="simple-dropdown-link">Make it Featured</p>
                <p class="simple-dropdown-link">Report Post</p>
                <p class="simple-dropdown-link">Report Author</p>
                </div>
            </div>
            </div>
            <div class="widget-box-status">
            <div class="widget-box-status-content">
                <div class="user-status">
                <a class="user-status-avatar" href="profile-timeline.html">
                    <div class="user-avatar small no-outline">
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
                    </div>
                </a>
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Marina Valentine</a></p>
                <p class="user-status-text small">17 hours ago</p>
                </div>
                <p class="widget-box-status-text">Tomorow I'll be livestreaming along with <a href="profile-timeline.html">@DestroyDex</a> on my Youtube channel. We are gonna do a spedrun of Super Mochi Bros 3!</p>
                <a class="video-status" href="https://www.youtube.com/" target="_blank">
                <img class="video-status-image" src="assets/img/cover/50.jpg" alt="cover-50">
                <div class="video-status-info">
                    <p class="video-status-meta">youtube.com</p>
                    <p class="video-status-title"><span class="bold">GameHuntress</span> on <span class="highlighted">Youtube</span></p>
                    <p class="video-status-text">Watch the GameHuntress play all the greatest games.</p>
                </div>
                </a>
                <div class="tag-list">
                <a class="tag-item secondary" href="newsfeed.html">Stream</a>
                <a class="tag-item secondary" href="newsfeed.html">Youtube</a>
                <a class="tag-item secondary" href="newsfeed.html">Gaming</a>
                <a class="tag-item secondary" href="newsfeed.html">Retro</a>
                </div>
                <div class="content-actions">
                <div class="content-action">
                    <div class="meta-line">
                    <div class="meta-line-list reaction-item-list">
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/happy.png" alt="reaction-happy">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
                            <p class="simple-dropdown-text">Matt Parker</p>
                            <p class="simple-dropdown-text">Destroy Dex</p>
                            <p class="simple-dropdown-text">The Green Goo</p>
                        </div>
                        </div>
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/love.png" alt="reaction-love">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
                            <p class="simple-dropdown-text">Sandra Strange</p>
                            <p class="simple-dropdown-text">Jane Rodgers</p>
                        </div>
                        </div>
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/funny.png" alt="reaction-funny">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/funny.png" alt="reaction-funny"> <span class="bold">Funny</span></p>
                            <p class="simple-dropdown-text">Neko Bebop</p>
                            <p class="simple-dropdown-text">Nick Grissom</p>
                            <p class="simple-dropdown-text">Sarah Diamond</p>
                            <p class="simple-dropdown-text">Jett Spiegel</p>
                            <p class="simple-dropdown-text">Marcus Jhonson</p>
                            <p class="simple-dropdown-text"><span class="bold">and 12 more...</span></p>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">22</p>
                    </div>
                    <div class="meta-line">
                    <div class="meta-line-list user-avatar-list">
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/09.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/08.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/12.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/16.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/06.jpg"></div>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">30 Participants</p>
                    </div>
                </div>
                <div class="content-action">
                    <div class="meta-line">
                    <p class="meta-line-link">12 Comments</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-text">0 Shares</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="post-options">
            <div class="post-option-wrap">
                <div class="post-option reaction-options-dropdown-trigger">
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <p class="post-option-text">React!</p>
                </div>
                <div class="reaction-options reaction-options-dropdown">
                <div class="reaction-option text-tooltip-tft" data-title="Like">
                    <img class="reaction-option-image" src="assets/img/reaction/like.png" alt="reaction-like">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Love">
                    <img class="reaction-option-image" src="assets/img/reaction/love.png" alt="reaction-love">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                    <img class="reaction-option-image" src="assets/img/reaction/dislike.png" alt="reaction-dislike">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Happy">
                    <img class="reaction-option-image" src="assets/img/reaction/happy.png" alt="reaction-happy">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Funny">
                    <img class="reaction-option-image" src="assets/img/reaction/funny.png" alt="reaction-funny">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Wow">
                    <img class="reaction-option-image" src="assets/img/reaction/wow.png" alt="reaction-wow">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Angry">
                    <img class="reaction-option-image" src="assets/img/reaction/angry.png" alt="reaction-angry">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Sad">
                    <img class="reaction-option-image" src="assets/img/reaction/sad.png" alt="reaction-sad">
                </div>
                </div>
            </div>
            <div class="post-option">
                <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
                </svg>
                <p class="post-option-text">Comment</p>
            </div>
            <div class="post-option">
                <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
                </svg>
                <p class="post-option-text">Share</p>
            </div>
            </div>
        </div>
        <div class="widget-box no-padding">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Edit Post</p>
                <p class="simple-dropdown-link">Delete Post</p>
                <p class="simple-dropdown-link">Make it Featured</p>
                <p class="simple-dropdown-link">Report Post</p>
                <p class="simple-dropdown-link">Report Author</p>
                </div>
            </div>
            </div>
            <div class="widget-box-status">
            <div class="widget-box-status-content">
                <div class="user-status">
                <a class="user-status-avatar" href="profile-timeline.html">
                    <div class="user-avatar small no-outline">
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
                    </div>
                </a>
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Marina Valentine</a> wrote a <span class="bold">Blog Post</span></p>
                <p class="user-status-text small">2 days ago</p>
                </div>
            </div>
            <div class="post-preview medium">
                <figure class="post-preview-image liquid">
                <img src="assets/img/cover/19.jpg" alt="cover-19">
                </figure>
                <div class="post-preview-info">
                <p class="post-preview-timestamp">5 mins read</p>
                <p class="post-preview-title">Here's the how and why did I became a full time Gaming Streamer</p>
                <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="post-preview-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam...</p>
                <a class="post-preview-link" href="profile-post.html">Read more...</a>
                </div>
            </div>
            <div class="widget-box-status-content">
                <div class="tag-list">
                <a class="tag-item secondary" href="newsfeed.html">Streamer</a>
                <a class="tag-item secondary" href="newsfeed.html">Gaming</a>
                <a class="tag-item secondary" href="newsfeed.html">Job</a>
                <a class="tag-item secondary" href="newsfeed.html">Life</a>
                <a class="tag-item secondary" href="newsfeed.html">Experience</a>
                </div>
                <div class="content-actions">
                <div class="content-action">
                    <div class="meta-line">
                    <div class="meta-line-list reaction-item-list">
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/wow.png" alt="reaction-wow">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/wow.png" alt="reaction-wow"> <span class="bold">Wow</span></p>
                            <p class="simple-dropdown-text">Neko Bebop</p>
                            <p class="simple-dropdown-text">Nick Grissom</p>
                            <p class="simple-dropdown-text">Sarah Diamond</p>
                            <p class="simple-dropdown-text">Marcus Jhonson</p>
                        </div>
                        </div>
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/happy.png" alt="reaction-happy">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
                            <p class="simple-dropdown-text">Jett Spiegel</p>
                            <p class="simple-dropdown-text">Jane Rodgers</p>
                        </div>
                        </div>
                        <div class="reaction-item">
                        <img class="reaction-image reaction-item-dropdown-trigger" src="assets/img/reaction/like.png" alt="reaction-like">
                        <div class="simple-dropdown padded reaction-item-dropdown">
                            <p class="simple-dropdown-text"><img class="reaction" src="assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                            <p class="simple-dropdown-text">Neko Bebop</p>
                            <p class="simple-dropdown-text">Nick Grissom</p>
                            <p class="simple-dropdown-text">Sarah Diamond</p>
                            <p class="simple-dropdown-text">Jett Spiegel</p>
                            <p class="simple-dropdown-text">Marcus Jhonson</p>
                            <p class="simple-dropdown-text">Jane Rodgers</p>
                            <p class="simple-dropdown-text"><span class="bold">and 7 more...</span></p>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">19</p>
                    </div>
                    <div class="meta-line">
                    <div class="meta-line-list user-avatar-list">
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/13.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/12.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/11.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/03.jpg"></div>
                        </div>
                        </div>
                        <div class="user-avatar micro no-stats">
                        <div class="user-avatar-border">
                            <div class="hexagon-22-24"></div>
                        </div>
                        <div class="user-avatar-content">
                            <div class="hexagon-image-18-20" data-src="assets/img/avatar/04.jpg"></div>
                        </div>
                        </div>
                    </div>
                    <p class="meta-line-text">22 Participants</p>
                    </div>
                </div>
                <div class="content-action">
                    <div class="meta-line">
                    <p class="meta-line-link">5 Comments</p>
                    </div>
                    <div class="meta-line">
                    <p class="meta-line-text">0 Shares</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="post-options">
            <div class="post-option-wrap">
                <div class="post-option reaction-options-dropdown-trigger">
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <p class="post-option-text">React!</p>
                </div>
                <div class="reaction-options reaction-options-dropdown">
                <div class="reaction-option text-tooltip-tft" data-title="Like">
                    <img class="reaction-option-image" src="assets/img/reaction/like.png" alt="reaction-like">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Love">
                    <img class="reaction-option-image" src="assets/img/reaction/love.png" alt="reaction-love">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                    <img class="reaction-option-image" src="assets/img/reaction/dislike.png" alt="reaction-dislike">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Happy">
                    <img class="reaction-option-image" src="assets/img/reaction/happy.png" alt="reaction-happy">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Funny">
                    <img class="reaction-option-image" src="assets/img/reaction/funny.png" alt="reaction-funny">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Wow">
                    <img class="reaction-option-image" src="assets/img/reaction/wow.png" alt="reaction-wow">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Angry">
                    <img class="reaction-option-image" src="assets/img/reaction/angry.png" alt="reaction-angry">
                </div>
                <div class="reaction-option text-tooltip-tft" data-title="Sad">
                    <img class="reaction-option-image" src="assets/img/reaction/sad.png" alt="reaction-sad">
                </div>
                </div>
            </div>
            <div class="post-option">
                <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
                </svg>
                <p class="post-option-text">Comment</p>
            </div>
            <div class="post-option">
                <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
                </svg>
                <p class="post-option-text">Share</p>
            </div>
            </div>
        </div>
        <div class="loader-bars">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
        </div>
        </div>
        <div class="grid-column">
        <div class="widget-box no-padding">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
                </div>
            </div>
            </div>
            <p class="widget-box-title">Stream Box</p>
            <div class="widget-box-content small-margin-top">
            <div class="stream-box no-video-radius">
                <div class="stream-box-video">
                <iframe src="assets/https://player.twitch.tv/?channel=cohhcarnage" allowfullscreen></iframe>
                </div>
                <div class="stream-box-image">
                <figure class="picture tiny circle liquid">
                    <img src="assets/img/avatar/01-social.png" alt="avatar-01-social">
                </figure>
                </div>
                <div class="stream-box-info">
                <p class="stream-box-title"><a href="profile-stream.html">I'm Playing Athena’s Goddess Story...</a></p>
                <p class="stream-box-text"><a href="https://www.twitch.tv/" target="_blank">@GameHuntress</a></p>
                </div>
            </div>
            </div>
        </div>
        <div class="widget-box">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
                </div>
            </div>
            </div>
            <p class="widget-box-title">Photos <span class="highlighted">74</span></p>
            <div class="widget-box-content">
            <div class="picture-item-list small">
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/avatar/01.jpg" alt="avatar-01">
                </figure>
                </div>
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/10.jpg" alt="avatar-10">
                </figure>
                </div>
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/12.jpg" alt="avatar-12">
                </figure>
                </div>
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/02.jpg" alt="avatar-02">
                </figure>
                </div>
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/06.jpg" alt="avatar-06">
                </figure>
                </div>
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/13.jpg" alt="avatar-13">
                </figure>
                </div>
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/04.jpg" alt="avatar-04">
                </figure>
                </div>
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/15.jpg" alt="avatar-15">
                </figure>
                </div>
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/11.jpg" alt="avatar-11">
                </figure>
                </div>
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/08.jpg" alt="avatar-08">
                </figure>
                </div>
                <div class="picture-item">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/16.jpg" alt="avatar-16">
                </figure>
                </div>
                <a class="picture-item" href="profile-photos.html">
                <figure class="picture round liquid">
                    <img src="assets/img/cover/17.jpg" alt="avatar-17">
                </figure>
                <div class="picture-item-overlay round">
                    <p class="picture-item-overlay-text">+61</p>
                </div>
                </a>
            </div>
            </div>
        </div>
        <div class="widget-box">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
                </div>
            </div>
            </div>
            <p class="widget-box-title">Twitter Feed</p>
            <div class="widget-box-content">
            <div class="tweet-feed"></div>
            </div>
        </div>
        <div class="widget-box">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
                </div>
            </div>
            </div>
            <p class="widget-box-title">Groups <span class="highlighted">7</span></p>
            <div class="widget-box-content">
            <div class="filters">
                <p class="filter">Newest</p>
                <p class="filter active">Popular</p>
                <p class="filter">Active</p>
            </div>
            <div class="user-status-list">
                <div class="user-status request-small">
                <a class="user-status-avatar" href="group-timeline.html">
                    <div class="user-avatar small no-border">
                    <div class="user-avatar-content">
                        <div class="hexagon-image-40-44" data-src="assets/img/avatar/29.jpg"></div>
                    </div>
                    </div>
                </a>
                <p class="user-status-title"><a class="bold" href="group-timeline.html">Twitch Streamers</a></p>
                <p class="user-status-text small">265 members</p>
                <div class="action-request-list">
                    <div class="action-request accept">
                    <svg class="action-request-icon icon-join-group">
                        <use xlink:href="#svg-join-group"></use>
                    </svg>
                    </div>
                </div>
                </div>
                <div class="user-status request-small">
                <a class="user-status-avatar" href="group-timeline.html">
                    <div class="user-avatar small no-border">
                    <div class="user-avatar-content">
                        <div class="hexagon-image-40-44" data-src="assets/img/avatar/24.jpg"></div>
                    </div>
                    </div>
                </a>
                <p class="user-status-title"><a class="bold" href="group-timeline.html">Cosplayers of the World</a></p>
                <p class="user-status-text small">139 members</p>
                <div class="action-request-list">
                    <div class="action-request accept">
                    <svg class="action-request-icon icon-join-group">
                        <use xlink:href="#svg-join-group"></use>
                    </svg>
                    </div>
                </div>
                </div>
                <div class="user-status request-small">
                <a class="user-status-avatar" href="group-timeline.html">
                    <div class="user-avatar small no-border">
                    <div class="user-avatar-content">
                        <div class="hexagon-image-40-44" data-src="assets/img/avatar/25.jpg"></div>
                    </div>
                    </div>
                </a>
                <p class="user-status-title"><a class="bold" href="group-timeline.html">Stream Designers</a></p>
                <p class="user-status-text small">466 members</p>
                <div class="action-request-list">
                    <div class="action-request accept">
                    <svg class="action-request-icon icon-join-group">
                        <use xlink:href="#svg-join-group"></use>
                    </svg>
                    </div>
                </div>
                </div>
                <div class="user-status request-small">
                <a class="user-status-avatar" href="group-timeline.html">
                    <div class="user-avatar small no-border">
                    <div class="user-avatar-content">
                        <div class="hexagon-image-40-44" data-src="assets/img/avatar/28.jpg"></div>
                    </div>
                    </div>
                </a>
                <p class="user-status-title"><a class="bold" href="group-timeline.html">Street Artists</a></p>
                <p class="user-status-text small">951 members</p>
                <div class="action-request-list">
                    <div class="action-request decline">
                    <svg class="action-request-icon icon-leave-group">
                        <use xlink:href="#svg-leave-group"></use>
                    </svg>
                    </div>
                </div>
                </div>
                <div class="user-status request-small">
                <a class="user-status-avatar" href="group-timeline.html">
                    <div class="user-avatar small no-border">
                    <div class="user-avatar-content">
                        <div class="hexagon-image-40-44" data-src="assets/img/avatar/27.jpg"></div>
                    </div>
                    </div>
                </a>
                <p class="user-status-title"><a class="bold" href="group-timeline.html">Gaming Watchtower</a></p>
                <p class="user-status-text small">2.365 members</p>
                <div class="action-request-list">
                    <div class="action-request accept">
                    <svg class="action-request-icon icon-join-group">
                        <use xlink:href="#svg-join-group"></use>
                    </svg>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="widget-box">
            <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
                </div>
            </div>
            </div>
            <p class="widget-box-title">Latest Item</p>
            <div class="widget-box-content">
            <div class="product-preview small">
                <a href="marketplace-product.html">
                <figure class="product-preview-image liquid">
                    <img src="assets/img/marketplace/items/01.jpg" alt="item-01">
                </figure>
                </a>
                <div class="product-preview-info">
                <p class="text-sticker"><span class="highlighted">$</span> 12.00</p>
                <p class="product-preview-title"><a href="marketplace-product.html">Twitch Stream UI Pack</a></p>
                <p class="product-preview-category digital"><a href="marketplace-category.html">Stream Packs</a></p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection