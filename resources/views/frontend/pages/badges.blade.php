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
    </div>
</div>
@endsection