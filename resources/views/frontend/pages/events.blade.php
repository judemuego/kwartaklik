@extends('frontend.master.template')

@section('content')
<div class="content-grid">
    <div class="section-banner">
        <img class="section-banner-icon" src="assets/img/banner/events-icon.png" alt="events-icon">
        <p class="section-banner-title">Events</p>
        <p class="section-banner-text">Easily manage and create events or reminders!</p>
    </div>
    <div class="section-header">
        <div class="section-header-info">
        <p class="section-pretitle">See what's next!</p>
        <h2 class="section-title">Upcoming Events</h2>
        </div>
    </div>
    <div class="grid grid-3-3-3-3 centered">
        <div class="event-preview">
        <figure class="event-preview-cover liquid">
            <img src="assets/img/cover/47.jpg" alt="cover-47">
        </figure>
        <div class="event-preview-info">
            <div class="event-preview-info-top">
            <div class="date-sticker">
                <p class="date-sticker-day">13</p>
                <p class="date-sticker-month">Aug</p>
            </div>
            <p class="event-preview-title popup-event-information-trigger">Breakfast with Neko</p>
            <p class="event-preview-timestamp"><span class="bold">8:30</span> AM</p>
            <p class="event-preview-text">Hi Neko! I'm creating this event to invite you to have breakfast before work. Meet me at Coffebucks.</p>
            </div>
            <div class="event-preview-info-bottom">
            <div class="decorated-text">
                <svg class="decorated-text-icon icon-pin">
                <use xlink:href="#svg-pin"></use>
                </svg>
                <p class="decorated-text-content">Downtown Coffeebucks</p>
            </div>
            <div class="meta-line">
                <div class="meta-line-list user-avatar-list">
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
                    <div class="hexagon-image-18-20" data-src="assets/img/avatar/01.jpg"></div>
                    </div>
                </div>
                </div>
                <p class="meta-line-text">will assist</p>
            </div>
            <p class="button white white-tertiary">Remove from Calendar</p>
            </div>
        </div>
        </div>
        <div class="event-preview">
        <figure class="event-preview-cover liquid">
            <img src="assets/img/cover/23.jpg" alt="cover-23">
        </figure>
        <div class="event-preview-info">
            <div class="event-preview-info-top">
            <div class="date-sticker">
                <p class="date-sticker-day">13</p>
                <p class="date-sticker-month">Aug</p>
            </div>
            <p class="event-preview-title popup-event-information-trigger">Streaming Party</p>
            <p class="event-preview-timestamp"><span class="bold">10:00</span> PM - <span class="bold">11:30</span> PM</p>
            <p class="event-preview-text">The biggest party for Twitch streamers! Come and join us at Shenron Arena.</p>
            </div>
            <div class="event-preview-info-bottom">
            <div class="decorated-text">
                <svg class="decorated-text-icon icon-pin">
                <use xlink:href="#svg-pin"></use>
                </svg>
                <p class="decorated-text-content">Shenron Arena</p>
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
                <p class="meta-line-text">+31 will assist</p>
            </div>
            <p class="button white white-tertiary">Remove from Calendar</p>
            </div>
        </div>
        </div>
        <div class="event-preview">
        <figure class="event-preview-cover liquid">
            <img src="assets/img/cover/33.jpg" alt="cover-33">
        </figure>
        <div class="event-preview-info">
            <div class="event-preview-info-top">
            <div class="date-sticker">
                <p class="date-sticker-day">26</p>
                <p class="date-sticker-month">Aug</p>
            </div>
            <p class="event-preview-title popup-event-information-trigger">CosWorld 2019 After Party</p>
            <p class="event-preview-timestamp"><span class="bold">11:00</span> PM</p>
            <p class="event-preview-text">Join us at the CosWorld after party! We'll be eating, drinking and having a great time exchanging experiences...</p>
            </div>
            <div class="event-preview-info-bottom">
            <div class="decorated-text">
                <svg class="decorated-text-icon icon-pin">
                <use xlink:href="#svg-pin"></use>
                </svg>
                <p class="decorated-text-content">CosWorld Arena</p>
            </div>
            <div class="meta-line">
                <div class="meta-line-list user-avatar-list">
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
                </div>
                <p class="meta-line-text">+24 will assist</p>
            </div>
            <p class="button white white-tertiary">Remove from Calendar</p>
            </div>
        </div>
        </div>
        <div class="event-preview">
        <figure class="event-preview-cover liquid">
            <img src="assets/img/cover/40.jpg" alt="cover-40">
        </figure>
        <div class="event-preview-info">
            <div class="event-preview-info-top">
            <div class="date-sticker">
                <p class="date-sticker-day">9</p>
                <p class="date-sticker-month">Sep</p>
            </div>
            <p class="event-preview-title popup-event-information-trigger">Artistic Painting Course</p>
            <p class="event-preview-timestamp"><span class="bold">6:00</span> PM</p>
            <p class="event-preview-text">Come to have a great time with us at our artistic painting course! Begginers and experts welcome!</p>
            </div>
            <div class="event-preview-info-bottom">
            <div class="decorated-text">
                <svg class="decorated-text-icon icon-pin">
                <use xlink:href="#svg-pin"></use>
                </svg>
                <p class="decorated-text-content">Xavier's Art Center</p>
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
                <p class="meta-line-text">+17 will assist</p>
            </div>
            <p class="button white white-tertiary">Remove from Calendar</p>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection