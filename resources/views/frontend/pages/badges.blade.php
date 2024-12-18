@extends('frontend.master.template')

@section('content')
<div class="content-grid">
    <div class="section-banner">
        <img class="section-banner-icon" src="assets/img/banner/badges-icon.png" alt="badges-icon">
        <p class="section-banner-title">Badges</p>
        <p class="section-banner-text">Check out all your unlocked and locked badges!</p>
    </div>
    <div class="grid grid-3-3-3-3 top-space centered">
        @foreach($badges as $badge)
        <div class="badge-item-stat {{ in_array($badge->id, $unlockedBadgeIds) ? 'unlocked' : 'locked' }}">
            <img class="badge-item-stat-image-preview" src="assets/img/badge/bronze-s.png" alt="badge-bronze-s">
            <img class="badge-item-stat-image" src="assets/img/badge/bronze-b.png" alt="badge-bronze-b">
            <p class="badge-item-stat-title">{{ $badge->name }}</p>
            <p class="badge-item-stat-text">{{ $badge->description }}</p>
            <p class="text-sticker" style="color: {{ in_array($badge->id, $unlockedBadgeIds) ? 'green' : 'red' }}">
                <i class="fas {{ in_array($badge->id, $unlockedBadgeIds) ? 'fa-unlock' : 'fa-lock' }}"></i>
                {{ in_array($badge->id, $unlockedBadgeIds) ? 'UNLOCKED' : 'LOCKED' }}
            </p>
        </div>
        @endforeach
    </div>
</div>
@endsection
