@extends('frontend.master.template')

@section('content')
<div class="content-grid">
    <div class="section-banner">
        <img class="section-banner-icon" src="assets/img/banner/badges-icon.png" alt="badges-icon">
        <p class="section-banner-title">Badges</p>
        <p class="section-banner-text">Check out all your unlocked and locked badges!</p>
    </div>
    <div class="grid grid-3-3-3-3 top-space centered">
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            20 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/bronze-s.png" alt="badge-bronze-s">
        <img class="badge-item-stat-image" src="assets/img/badge/bronze-b.png" alt="badge-bronze-b">
        <p class="badge-item-stat-title">Bronze User</p>
        <p class="badge-item-stat-text">Has posted more than 1 post on their profile</p>
        <div class="progress-stat">
            <div id="badge-bronze" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/silver-s.png" alt="badge-silver-s">
        <img class="badge-item-stat-image" src="assets/img/badge/silver-b.png" alt="badge-silver-b">
        <p class="badge-item-stat-title">Silver User</p>
        <p class="badge-item-stat-text">Has posted more than 100 posts on their profile</p>
        <div class="progress-stat">
            <div id="badge-silver" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            60 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/gold-s.png" alt="badge-gold-s">
        <img class="badge-item-stat-image" src="assets/img/badge/gold-b.png" alt="badge-gold-b">
        <p class="badge-item-stat-title">Gold User</p>
        <p class="badge-item-stat-text">Has posted more than 500 posts on their profile</p>
        <div class="progress-stat">
            <div id="badge-gold" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            100 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/platinum-s.png" alt="badge-platinum-s">
        <img class="badge-item-stat-image" src="assets/img/badge/platinum-b.png" alt="badge-platinum-b">
        <p class="badge-item-stat-title">Platinum User</p>
        <p class="badge-item-stat-text">Has posted more than 1000 posts on their profile</p>
        <div class="progress-stat">
            <div id="badge-platinum" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/traveller-s.png" alt="badge-traveller-s">
        <img class="badge-item-stat-image" src="assets/img/badge/traveller-b.png" alt="badge-traveller-b">
        <p class="badge-item-stat-title">Forum Traveller</p>
        <p class="badge-item-stat-text">Created at least 1 topic on 5 different groups forums</p>
        <div class="progress-stat">
            <div id="badge-traveller" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
                <p class="bar-progress-info negative center"><span class="light">Next Tier:</span><span class="bar-progress-text"></span></p>
            </div>
            </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
        <img class="badge-item-stat-image" src="assets/img/badge/caffeinated-b.png" alt="badge-caffeinated-b">
        <p class="badge-item-stat-title">Caffeinated</p>
        <p class="badge-item-stat-text">Commented on a friend's post inside 30 seconds of posted</p>
        <div class="progress-stat">
            <div id="badge-caffeinated" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            80 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/upowered-s.png" alt="badge-upowered-s">
        <img class="badge-item-stat-image" src="assets/img/badge/upowered-b.png" alt="badge-upowered-b">
        <p class="badge-item-stat-title">Ultra Powered</p>
        <p class="badge-item-stat-text">Received 50+ reacts inside 30 minutes of posting</p>
        <div class="progress-stat">
            <div id="badge-upowered" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/scientist-s.png" alt="badge-scientist-s">
        <img class="badge-item-stat-image" src="assets/img/badge/scientist-b.png" alt="badge-scientist-b">
        <p class="badge-item-stat-title">Crazy Scientist</p>
        <p class="badge-item-stat-text">Helped us beta test new awesome features</p>
        <div class="progress-stat">
            <div id="badge-scientist" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            20 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/ncreature-s.png" alt="badge-ncreature-s">
        <img class="badge-item-stat-image" src="assets/img/badge/ncreature-b.png" alt="badge-ncreature-b">
        <p class="badge-item-stat-title">Night Creature</p>
        <p class="badge-item-stat-text">Created 100+ posts between 1AM and 5AM</p>
        <div class="progress-stat">
            <div id="badge-ncreature" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/warrior-s.png" alt="badge-warrior-s">
        <img class="badge-item-stat-image" src="assets/img/badge/warrior-b.png" alt="badge-warrior-b">
        <p class="badge-item-stat-title">The Warrior</p>
        <p class="badge-item-stat-text">Helped the team enforce the communty rules</p>
        <div class="progress-stat">
            <div id="badge-warrior" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            60 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/liked-s.png" alt="badge-liked-s">
        <img class="badge-item-stat-image" src="assets/img/badge/liked-b.png" alt="badge-liked-b">
        <p class="badge-item-stat-title">Liked User</p>
        <p class="badge-item-stat-text">Received 500+ like or love reactions in their profile posts</p>
        <div class="progress-stat">
            <div id="badge-liked" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            80 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/sloved-s.png" alt="badge-sloved-s">
        <img class="badge-item-stat-image" src="assets/img/badge/sloved-b.png" alt="badge-sloved-b">
        <p class="badge-item-stat-title">Super Loved User</p>
        <p class="badge-item-stat-text">Received 1000+ like or love reactions in their profile posts</p>
        <div class="progress-stat">
            <div id="badge-sloved" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/qconq-s.png" alt="badge-qconq-s">
        <img class="badge-item-stat-image" src="assets/img/badge/qconq-b.png" alt="badge-qconq-b">
        <p class="badge-item-stat-title">Quest Conqueror</p>
        <p class="badge-item-stat-text">Succesfully completed at least 10 quests at 100%</p>
        <div class="progress-stat">
            <div id="badge-qconq" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/villain-s.png" alt="badge-villain-s">
        <img class="badge-item-stat-image" src="assets/img/badge/villain-b.png" alt="badge-villain-b">
        <p class="badge-item-stat-title">Super Villain</p>
        <p class="badge-item-stat-text">Received 100+ dislike reactions in their profile posts</p>
        <div class="progress-stat">
            <div id="badge-villain" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            20 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/age-s.png" alt="badge-age-s">
        <img class="badge-item-stat-image" src="assets/img/badge/age-b.png" alt="badge-age-b">
        <p class="badge-item-stat-title">Profile Age</p>
        <p class="badge-item-stat-text">Congratz! You've been part of the community for 2 years</p>
        <div class="progress-stat">
            <div id="badge-age" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
                <p class="bar-progress-info negative center"><span class="light">Next Tier:</span><span class="bar-progress-text"></span></p>
            </div>
            </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            60 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/tstruck-s.png" alt="badge-tstruck-s">
        <img class="badge-item-stat-image" src="assets/img/badge/tstruck-b.png" alt="badge-tstruck-b">
        <p class="badge-item-stat-title">Thunderstruck</p>
        <p class="badge-item-stat-text">The user reacted first on 50+ friends posts</p>
        <div class="progress-stat">
            <div id="badge-tstruck" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            20 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/uexp-s.png" alt="badge-uexp-s">
        <img class="badge-item-stat-image" src="assets/img/badge/uexp-b.png" alt="badge-uexp-b">
        <p class="badge-item-stat-title">Universe Explorer</p>
        <p class="badge-item-stat-text">Joined and posted on 20 different groups</p>
        <div class="progress-stat">
            <div id="badge-uexp" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/globet-s.png" alt="badge-globet-s">
        <img class="badge-item-stat-image" src="assets/img/badge/globet-b.png" alt="badge-globet-b">
        <p class="badge-item-stat-title">Globe Trotter</p>
        <p class="badge-item-stat-text">Has at least 10 friends from different countries</p>
        <div class="progress-stat">
            <div id="badge-globet" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/verifieds-s.png" alt="badge-verifieds-s">
        <img class="badge-item-stat-image" src="assets/img/badge/verifieds-b.png" alt="badge-verifieds-b">
        <p class="badge-item-stat-title">Verified Streamer</p>
        <p class="badge-item-stat-text">Has linked a stream that was verified by the staff</p>
        <div class="progress-stat">
            <div id="badge-verifieds" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            80 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/gempost-s.png" alt="badge-gempost-s">
        <img class="badge-item-stat-image" src="assets/img/badge/gempost-b.png" alt="badge-gempost-b">
        <p class="badge-item-stat-title">Rare GemPost</p>
        <p class="badge-item-stat-text">Received 100+ likes and 50+ comments on a single post</p>
        <div class="progress-stat">
            <div id="badge-gempost" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/peoplesp-s.png" alt="badge-peoplesp-s">
        <img class="badge-item-stat-image" src="assets/img/badge/peoplesp-b.png" alt="badge-peoplesp-b">
        <p class="badge-item-stat-title">People's Person</p>
        <p class="badge-item-stat-text">Has accepted at least 200 friends requests</p>
        <div class="progress-stat">
            <div id="badge-peoplesp" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/rulerm-s.png" alt="badge-rulerm-s">
        <img class="badge-item-stat-image" src="assets/img/badge/rulerm-b.png" alt="badge-rulerm-b">
        <p class="badge-item-stat-title">Ruler of Masses</p>
        <p class="badge-item-stat-text">Has created and admins 5+ different groups</p>
        <div class="progress-stat">
            <div id="badge-rulerm" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            20 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/marketeer-s.png" alt="badge-marketeer-s">
        <img class="badge-item-stat-image" src="assets/img/badge/marketeer-b.png" alt="badge-marketeer-b">
        <p class="badge-item-stat-title">The Marketeer</p>
        <p class="badge-item-stat-text">Has posted at least 10 items on their shop</p>
        <div class="progress-stat">
            <div id="badge-marketeer" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="light">Next Tier:</span><span class="bar-progress-text"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            80 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/tycoon-s.png" alt="badge-tycoon-s">
        <img class="badge-item-stat-image" src="assets/img/badge/tycoon-b.png" alt="badge-tycoon-b">
        <p class="badge-item-stat-title">Bussiness Tycoon</p>
        <p class="badge-item-stat-text">Sold more than 100 items on their shop</p>
        <div class="progress-stat">
            <div id="badge-tycoon" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/mightiers-s.png" alt="badge-mightiers-s">
        <img class="badge-item-stat-image" src="assets/img/badge/mightiers-b.png" alt="badge-mightiers-b">
        <p class="badge-item-stat-title">Mightier Than Sword</p>
        <p class="badge-item-stat-text">Wrote at least 50 blog posts in their profile</p>
        <div class="progress-stat">
            <div id="badge-mightiers" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/phantom-s.png" alt="badge-phantom-s">
        <img class="badge-item-stat-image" src="assets/img/badge/phantom-b.png" alt="badge-phantom-b">
        <p class="badge-item-stat-title">The Phantom</p>
        <p class="badge-item-stat-text">Visited other profiles but hasn’t posted in 1+ year</p>
        <div class="progress-stat">
            <div id="badge-phantom" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/forumsf-s.png" alt="badge-forumsf-s">
        <img class="badge-item-stat-image" src="assets/img/badge/forumsf-b.png" alt="badge-forumsf-b">
        <p class="badge-item-stat-title">Forums Fan</p>
        <p class="badge-item-stat-text">Started at least 20 topics on the forums</p>
        <div class="progress-stat">
            <div id="badge-forumsf" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/fcultivator-s.png" alt="badge-fcultivator-s">
        <img class="badge-item-stat-image" src="assets/img/badge/fcultivator-b.png" alt="badge-fcultivator-b">
        <p class="badge-item-stat-title">Friendship Cultivator</p>
        <p class="badge-item-stat-text">Commented first on 100+ friend's posts</p>
        <div class="progress-stat">
            <div id="badge-fcultivator" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            20 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/splanner-s.png" alt="badge-splanner-s">
        <img class="badge-item-stat-image" src="assets/img/badge/splanner-b.png" alt="badge-splanner-b">
        <p class="badge-item-stat-title">Super Planner</p>
        <p class="badge-item-stat-text">Has created at least 25 public or private events</p>
        <div class="progress-stat">
            <div id="badge-splanner" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/collector-s.png" alt="badge-collector-s">
        <img class="badge-item-stat-image" src="assets/img/badge/collector-b.png" alt="badge-collector-b">
        <p class="badge-item-stat-title">The Collector</p>
        <p class="badge-item-stat-text">Bought at least 5 items in the markeplace</p>
        <div class="progress-stat">
            <div id="badge-collector" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/prophoto-s.png" alt="badge-prophoto-s">
        <img class="badge-item-stat-image" src="assets/img/badge/prophoto-b.png" alt="badge-prophoto-b">
        <p class="badge-item-stat-title">Pro Photographer</p>
        <p class="badge-item-stat-text">Uploaded more than 500 photos to their profile</p>
        <div class="progress-stat">
            <div id="badge-prophoto" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/rmachine-s.png" alt="badge-rmachine-s">
        <img class="badge-item-stat-image" src="assets/img/badge/rmachine-b.png" alt="badge-rmachine-b">
        <p class="badge-item-stat-title">Referral Machine</p>
        <p class="badge-item-stat-text">Referred at least 50 friends that joined the comunity</p>
        <div class="progress-stat">
            <div id="badge-rmachine" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            20 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/bronzec-s.png" alt="badge-bronzec-s">
        <img class="badge-item-stat-image" src="assets/img/badge/bronzec-b.png" alt="badge-bronzec-b">
        <p class="badge-item-stat-title">Bronze Cup</p>
        <p class="badge-item-stat-text">Won third place on a verified forum competition</p>
        <div class="progress-stat">
            <div id="badge-bronzec" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            40 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/silverc-s.png" alt="badge-silverc-s">
        <img class="badge-item-stat-image" src="assets/img/badge/silverc-b.png" alt="badge-silverc-b">
        <p class="badge-item-stat-title">Silver Cup</p>
        <p class="badge-item-stat-text">Won second place on a verified forum competition</p>
        <div class="progress-stat">
            <div id="badge-silverc" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            60 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/goldc-s.png" alt="badge-goldc-s">
        <img class="badge-item-stat-image" src="assets/img/badge/goldc-b.png" alt="badge-goldc-b">
        <p class="badge-item-stat-title">Gold Cup</p>
        <p class="badge-item-stat-text">Won first place on a verified forum competition</p>
        <div class="progress-stat">
            <div id="badge-goldc" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
        <div class="badge-item-stat">
        <p class="text-sticker">
            <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
            </svg>
            100 Exp
        </p>
        <img class="badge-item-stat-image-preview" src="assets/img/badge/platinumc-s.png" alt="badge-platinumc-s">
        <img class="badge-item-stat-image" src="assets/img/badge/platinumc-b.png" alt="badge-platinumc-b">
        <p class="badge-item-stat-title">Platinum Cup</p>
        <p class="badge-item-stat-text">Won an official Social Network competition</p>
        <div class="progress-stat">
            <div id="badge-platinumc" class="progress-stat-bar"></div>
            <div class="bar-progress-wrap">
            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection