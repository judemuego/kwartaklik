@extends('frontend.master.template')

@section('content')
<div class="content-grid">
    <div class="section-banner">
        <img class="section-banner-icon" src="assets/img/banner/quests-icon.png" alt="quests-icon">
        <p class="section-banner-title">Quests</p>
        <p class="section-banner-text">Complete quests to gain experience and level up!</p>
    </div>
    <div class="section-header">
        <div class="section-header-info">
        <p class="section-pretitle">Get an early lead!</p>
        <h2 class="section-title">Featured Quests</h2>
        </div>
    </div>
    <div class="grid grid-3-3-3-3 centered">
        <div class="quest-item">
        <figure class="quest-item-cover liquid">
            <img src="assets/img/quest/cover/01.png" alt="cover-01">
        </figure>
        <p class="text-sticker small-text">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            60 EXP
        </p>
        <div class="quest-item-info">
            <div class="quest-item-badge">
            <img src="assets/img/quest/openq-b.png" alt="openq-b">
            </div>
            <p class="quest-item-title">Social King</p>
            <p class="quest-item-text">You have linked at least 8 social networks to your profile</p>
            <div class="progress-stat">
            <div id="quest-sk" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap small">
                <p class="bar-progress-info negative start"><span class="bar-progress-text no-space"></span>completed</p>
            </div>
            </div>
            <div class="quest-item-meta">
            <div class="user-avatar-list">
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
            <div class="quest-item-meta-info">
                <p class="quest-item-meta-title">+24 friends</p>
                <p class="quest-item-meta-text">completed this quest</p>
            </div>
            </div>
        </div>
        </div>
        <div class="quest-item">
        <figure class="quest-item-cover liquid">
            <img src="assets/img/quest/cover/02.png" alt="cover-02">
        </figure>
        <p class="text-sticker small-text">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 EXP
        </p>
        <div class="quest-item-info">
            <div class="quest-item-badge">
            <img src="assets/img/quest/completedq-b.png" alt="completedq-b">
            </div>
            <p class="quest-item-title">Friendly User</p>
            <p class="quest-item-text">Give 50 like and/or love reactions on your friends' posts</p>
            <div class="progress-stat">
            <div id="quest-fu" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap small">
                <p class="bar-progress-info negative start"><span class="bar-progress-text no-space"></span>completed</p>
            </div>
            </div>
            <div class="quest-item-meta">
            <div class="user-avatar-list">
                <div class="user-avatar micro no-stats">
                <div class="user-avatar-border">
                    <div class="hexagon-22-24"></div>
                </div>
                <div class="user-avatar-content">
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/14.jpg"></div>
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
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/11.jpg"></div>
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
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/15.jpg"></div>
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
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/04.jpg"></div>
                </div>
                </div>
                <div class="user-avatar micro no-stats">
                <div class="user-avatar-border">
                    <div class="hexagon-22-24"></div>
                </div>
                <div class="user-avatar-content">
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/13.jpg"></div>
                </div>
                </div>
            </div>
            <div class="quest-item-meta-info">
                <p class="quest-item-meta-title">+33 friends</p>
                <p class="quest-item-meta-text">completed this quest</p>
            </div>
            </div>
        </div>
        </div>
        <div class="quest-item">
        <figure class="quest-item-cover liquid">
            <img src="assets/img/quest/cover/03.png" alt="cover-03">
        </figure>
        <p class="text-sticker small-text">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 EXP
        </p>
        <div class="quest-item-info">
            <div class="quest-item-badge">
            <img src="assets/img/quest/openq-b.png" alt="openq-b">
            </div>
            <p class="quest-item-title">Nothing to Hide</p>
            <p class="quest-item-text">You have completed all your profile information fields</p>
            <div class="progress-stat">
            <div id="quest-nth" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap small">
                <p class="bar-progress-info negative start"><span class="bar-progress-text no-space"></span>completed</p>
            </div>
            </div>
            <div class="quest-item-meta">
            <div class="user-avatar-list">
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
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/04.jpg"></div>
                </div>
                </div>
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
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/03.jpg"></div>
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
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/22.jpg"></div>
                </div>
                </div>
                <div class="user-avatar micro no-stats">
                <div class="user-avatar-border">
                    <div class="hexagon-22-24"></div>
                </div>
                <div class="user-avatar-content">
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/14.jpg"></div>
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
            </div>
            <div class="quest-item-meta-info">
                <p class="quest-item-meta-title">+24 friends</p>
                <p class="quest-item-meta-text">completed this quest</p>
            </div>
            </div>
        </div>
        </div>
        <div class="quest-item">
        <figure class="quest-item-cover liquid">
            <img src="assets/img/quest/cover/04.png" alt="cover-04">
        </figure>
        <p class="text-sticker small-text">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            100 EXP
        </p>
        <div class="quest-item-info">
            <div class="quest-item-badge">
            <img src="assets/img/quest/openq-b.png" alt="openq-b">
            </div>
            <p class="quest-item-title">Store Manager</p>
            <p class="quest-item-text">You have uploaded at least 10 items in your shop</p>
            <div class="progress-stat">
            <div id="quest-sm" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap small">
                <p class="bar-progress-info negative start"><span class="bar-progress-text no-space"></span>completed</p>
            </div>
            </div>
            <div class="quest-item-meta">
            <div class="user-avatar-list">
                <div class="user-avatar micro no-stats">
                <div class="user-avatar-border">
                    <div class="hexagon-22-24"></div>
                </div>
                <div class="user-avatar-content">
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/15.jpg"></div>
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
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/03.jpg"></div>
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
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/14.jpg"></div>
                </div>
                </div>
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
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/05.jpg"></div>
                </div>
                </div>
                <div class="user-avatar micro no-stats">
                <div class="user-avatar-border">
                    <div class="hexagon-22-24"></div>
                </div>
                <div class="user-avatar-content">
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/22.jpg"></div>
                </div>
                </div>
            </div>
            <div class="quest-item-meta-info">
                <p class="quest-item-meta-title">+5 friends</p>
                <p class="quest-item-meta-text">completed this quest</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="section-header">
        <div class="section-header-info">
        <p class="section-pretitle">Gain EXP and level up!</p>
        <h2 class="section-title">Browse All Quests</h2>
        </div>
    </div>
    <div class="section-filters-bar v2">
        <form class="form">
        <div class="form-item split medium">
            <div class="form-select">
            <label for="quest-filter-show">Show</label>
            <select id="quest-filter-show" name="quest_filter_show">
                <option value="0">All Quests</option>
                <option value="1">Completed Quests</option>
                <option value="2">Open Quests</option>
            </select>
            <svg class="form-select-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
            </svg>
            </div>
            <div class="form-select">
            <label for="quest-filter-criteria">Filter By</label>
            <select id="quest-filter-criteria" name="quest_filter_criteria">
                <option value="0">Quest Progress</option>
                <option value="1">Quest EXP</option>
            </select>
            <svg class="form-select-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
            </svg>
            </div>
            <div class="form-select">
            <label for="quest-filter-order">Order By</label>
            <select id="quest-filter-order" name="quest_filter_order">
                <option value="0">Descending</option>
                <option value="1">Ascending</option>
            </select>
            <svg class="form-select-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
            </svg>
            </div>
            <button class="button secondary">Filter Quests</button>
        </div>
        </form>
    </div>
    <div class="table table-quests split-rows">
        <div class="table-header">
        <div class="table-header-column">
            <p class="table-header-title">Quest</p>
        </div>
        <div class="table-header-column">
            <p class="table-header-title">Description</p>
        </div>
        <div class="table-header-column centered padded-big-left">
            <p class="table-header-title">Experience</p>
        </div>
        <div class="table-header-column padded-big-left">
            <p class="table-header-title">Progress</p>
        </div>
        </div>
        <div class="table-body same-color-rows">
        <div class="table-row small">
            <div class="table-column">
            <div class="table-information">
                <img class="table-image" src="assets/img/quest/completedq-s.png" alt="completedq-s">
                <p class="table-title">Press Start!</p>
            </div>
            </div>
            <div class="table-column">
            <p class="table-text">Post a status update or any other post for the first time</p>
            </div>
            <div class="table-column centered padded-big-left">
            <p class="text-sticker void">
                <svg class="text-sticker-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
                </svg>
                20 EXP
            </p>
            </div>
            <div class="table-column padded-big-left">
            <div class="progress-stat-wrap">
                <div class="progress-stat">
                <div id="quest-line-ps" class="progress-stat-bar"></div>
                <div class="bar-progress-wrap">
                    <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="table-row small">
            <div class="table-column">
            <div class="table-information">
                <img class="table-image" src="assets/img/quest/openq-s.png" alt="openq-s">
                <p class="table-title">Nothing to Hide</p>
            </div>
            </div>
            <div class="table-column">
            <p class="table-text">You have completed all your profile information fields</p>
            </div>
            <div class="table-column centered padded-big-left">
            <p class="text-sticker void">
                <svg class="text-sticker-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
                </svg>
                40 EXP
            </p>
            </div>
            <div class="table-column padded-big-left">
            <div class="progress-stat-wrap">
                <div class="progress-stat">
                <div id="quest-line-nth" class="progress-stat-bar"></div>
                <div class="bar-progress-wrap">
                    <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="table-row small">
            <div class="table-column">
            <div class="table-information">
                <img class="table-image" src="assets/img/quest/completedq-s.png" alt="completedq-s">
                <p class="table-title">Friendly User</p>
            </div>
            </div>
            <div class="table-column">
            <p class="table-text">Give 50 like and/or love reactions on your friends' posts</p>
            </div>
            <div class="table-column centered padded-big-left">
            <p class="text-sticker void">
                <svg class="text-sticker-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
                </svg>
                40 EXP
            </p>
            </div>
            <div class="table-column padded-big-left">
            <div class="progress-stat-wrap">
                <div class="progress-stat">
                <div id="quest-line-fu" class="progress-stat-bar"></div>
                <div class="bar-progress-wrap">
                    <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="table-row small">
            <div class="table-column">
            <div class="table-information">
                <img class="table-image" src="assets/img/quest/completedq-s.png" alt="completedq-s">
                <p class="table-title">People's Herald</p>
            </div>
            </div>
            <div class="table-column">
            <p class="table-text">Shared 20 friend's posts on your profile page</p>
            </div>
            <div class="table-column centered padded-big-left">
            <p class="text-sticker void">
                <svg class="text-sticker-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
                </svg>
                60 EXP
            </p>
            </div>
            <div class="table-column padded-big-left">
            <div class="progress-stat-wrap">
                <div class="progress-stat">
                <div id="quest-line-ph" class="progress-stat-bar"></div>
                <div class="bar-progress-wrap">
                    <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="table-row small">
            <div class="table-column">
            <div class="table-information">
                <img class="table-image" src="assets/img/quest/openq-s.png" alt="openq-s">
                <p class="table-title">The Recycler</p>
            </div>
            </div>
            <div class="table-column">
            <p class="table-text">Shared 10 friend's posts that are at least one year old</p>
            </div>
            <div class="table-column centered padded-big-left">
            <p class="text-sticker void">
                <svg class="text-sticker-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
                </svg>
                40 EXP
            </p>
            </div>
            <div class="table-column padded-big-left">
            <div class="progress-stat-wrap">
                <div class="progress-stat">
                <div id="quest-line-tr" class="progress-stat-bar"></div>
                <div class="bar-progress-wrap">
                    <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="table-row small">
            <div class="table-column">
            <div class="table-information">
                <img class="table-image" src="assets/img/quest/openq-s.png" alt="openq-s">
                <p class="table-title">Social King</p>
            </div>
            </div>
            <div class="table-column">
            <p class="table-text">You have linked at least 8 social networks to your profile</p>
            </div>
            <div class="table-column centered padded-big-left">
            <p class="text-sticker void">
                <svg class="text-sticker-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
                </svg>
                60 EXP
            </p>
            </div>
            <div class="table-column padded-big-left">
            <div class="progress-stat-wrap">
                <div class="progress-stat">
                <div id="quest-line-sk" class="progress-stat-bar"></div>
                <div class="bar-progress-wrap">
                    <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="table-row small">
            <div class="table-column">
            <div class="table-information">
                <img class="table-image" src="assets/img/quest/openq-s.png" alt="openq-s">
                <p class="table-title">Buffed Profile</p>
            </div>
            </div>
            <div class="table-column">
            <p class="table-text">You have posted every day for at least 30 days in a row</p>
            </div>
            <div class="table-column centered padded-big-left">
            <p class="text-sticker void">
                <svg class="text-sticker-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
                </svg>
                60 EXP
            </p>
            </div>
            <div class="table-column padded-big-left">
            <div class="progress-stat-wrap">
                <div class="progress-stat">
                <div id="quest-line-bp" class="progress-stat-bar"></div>
                <div class="bar-progress-wrap">
                    <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="table-row small">
            <div class="table-column">
            <div class="table-information">
                <img class="table-image" src="assets/img/quest/openq-s.png" alt="openq-s">
                <p class="table-title">Hear The People</p>
            </div>
            </div>
            <div class="table-column">
            <p class="table-text">You have created and posted your first poll</p>
            </div>
            <div class="table-column centered padded-big-left">
            <p class="text-sticker void">
                <svg class="text-sticker-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
                </svg>
                20 EXP
            </p>
            </div>
            <div class="table-column padded-big-left">
            <div class="progress-stat-wrap">
                <div class="progress-stat">
                <div id="quest-line-htp" class="progress-stat-bar"></div>
                <div class="bar-progress-wrap">
                    <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="table-row small">
            <div class="table-column">
            <div class="table-information">
                <img class="table-image" src="assets/img/quest/openq-s.png" alt="openq-s">
                <p class="table-title">Store Manager</p>
            </div>
            </div>
            <div class="table-column">
            <p class="table-text">You have uploaded at least 10 items in your shop</p>
            </div>
            <div class="table-column centered padded-big-left">
            <p class="text-sticker void">
                <svg class="text-sticker-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
                </svg>
                100 EXP
            </p>
            </div>
            <div class="table-column padded-big-left">
            <div class="progress-stat-wrap">
                <div class="progress-stat">
                <div id="quest-line-sm" class="progress-stat-bar"></div>
                <div class="bar-progress-wrap">
                    <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                </div>
                </div>
            </div>
            </div>
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
@endsection