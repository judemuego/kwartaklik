@extends('frontend.master.template')

@section('content')
<div class="content-grid">
    <div class="section-banner">
        <img class="section-banner-icon" src="{{ asset('assets/img/banner/accounthub-icon.png') }}" alt="accounthub-icon">
        <p class="section-banner-title">Account Hub</p>
        <p class="section-banner-text">Profile info, avatar and cover, Marketplace and much more!</p>
    </div>

    <div class="grid grid-3-9 medium-space">
        <div class="account-hub-sidebar">
            <div class="sidebar-box no-padding">
              <div class="sidebar-menu">
                <div class="sidebar-menu-item">
                  <div class="sidebar-menu-header accordion-trigger-linked">
                    <svg class="sidebar-menu-header-icon icon-profile">
                      <use xlink:href="#svg-profile"></use>
                    </svg>
                    <div class="sidebar-menu-header-control-icon">
                      <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                        <use xlink:href="#svg-minus-small"></use>
                      </svg>
                      <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                        <use xlink:href="#svg-plus-small"></use>
                      </svg>
                    </div>
                    <p class="sidebar-menu-header-title">My Profile</p>
                    <p class="sidebar-menu-header-text">Change your avatar &amp; cover, profile information and check points histroy!</p>
                  </div>
                  <div class="sidebar-menu-body accordion-content-linked accordion-open">
                    <a class="sidebar-menu-link active" href="{{url('profile')}}">Profile Info </a>
                    <a class="sidebar-menu-link" href="#">Points History</a>
                  </div>
                </div>
             
                <div class="sidebar-menu-item">
                  <div class="sidebar-menu-header accordion-trigger-linked">
                    <svg class="sidebar-menu-header-icon icon-store">
                      <use xlink:href="#svg-store"></use>
                    </svg>
                 
                    <div class="sidebar-menu-header-control-icon">
                      <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                        <use xlink:href="#svg-minus-small"></use>
                      </svg>
                      <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                        <use xlink:href="#svg-plus-small"></use>
                      </svg>
                    </div>
                    <p class="sidebar-menu-header-title">My Store</p>
                    <p class="sidebar-menu-header-text">Review your account, manage products check stats and much more!</p>
                  </div>
                  <div class="sidebar-menu-body accordion-content-linked">
                    <a class="sidebar-menu-link" href="#">My Account</a>
                    <a class="sidebar-menu-link" href="#">Sales Statement</a>
                    <a class="sidebar-menu-link" href="#">Manage Items</a>
                  </div>
                </div>
              </div>
              <div class="sidebar-box-footer">
                <p class="button primary" onclick="saveRecord()">Save Changes!</p>
                <p class="button white small-space">Discard All</p>
              </div>
            </div>
          </div>
      <div class="account-hub-content">
        
        <div class="section-header">
          
          <div class="section-header-info" style="text-align: center; padding: 20px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <p class="section-pretitle" style="font-size: 1.2rem; color: #6c757d; margin-bottom: 10px;">My Profile</p>
            <h2 class="section-title" style="font-size: 2rem; color: #333; margin-bottom: 5px;">
                Profile Info
            </h2>
            <h5 style="font-size: 1rem; color: #555; margin-bottom: 20px;">My Code: {{ Auth::user()->user_code }}</h5>
            <input type="hidden" value="{{ $subscriber->id }}" id="subscriber_id">
            
            <div style="margin-top: 20px; display: inline-block; background: #fff; padding: 15px; border: 1px solid #ddd; border-radius: 8px;">
                {{$qrCode}}
            </div>
        
            <p style="margin-top: 10px; font-size: 0.9rem; color: #777;">Scan the QR code to share your referral link!</p>
        
            <!-- Copyable link section -->
            <div style="margin-top: 20px;">
                <label for="referral-link" style="font-size: 1rem; color: #555;">Referral Link:</label>
                <input type="text" id="referral-link" value="http://kwartaklikapp.opimac.com?referral_code={{ Auth::user()->user_code }}" readonly
                    style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 1rem;">
                <button onclick="copyLink()" style="margin-top: 10px; padding: 8px 16px; font-size: 1rem; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                    Copy Link
                </button>
            </div>
        </div>
        
      
        
        </div>
        <div class="grid-column">
          <div class="grid grid-3-3-3 centered">
            <div class="user-preview small fixed-height">
              <figure class="user-preview-cover liquid">
                <img src="assets/img/cover/01.jpg" alt="cover-01">
              </figure>
              <div class="user-preview-info">
                <div class="user-short-description small">
                  <div class="user-short-description-avatar user-avatar">
                    <div class="user-avatar-border">
                      <div class="hexagon-100-110"></div>
                    </div>
                    <div class="user-avatar-content">
                      <div class="hexagon-image-68-74" data-src="assets/img/avatar/01.jpg"></div>
                    </div>
                    <div class="user-avatar-progress">
                      <div class="hexagon-progress-84-92"></div>
                    </div>
                    <div class="user-avatar-progress-border">
                      <div class="hexagon-border-84-92"></div>
                    </div>
                    <div class="user-avatar-badge">
                      <div class="user-avatar-badge-border">
                        <div class="hexagon-28-32"></div>
                      </div>
                      <div class="user-avatar-badge-content">
                        <div class="hexagon-dark-22-24"></div>
                      </div>
                      <p class="user-avatar-badge-text">24</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="upload-box">
              <svg class="upload-box-icon icon-members">
                <use xlink:href="assets/#svg-members"></use>
              </svg>
              <p class="upload-box-title">Change Avatar</p>
              <p class="upload-box-text">110x110px size minimum</p>
            </div>
            <div class="upload-box">
              <svg class="upload-box-icon icon-photos">
                <use xlink:href="assets/#svg-photos"></use>
              </svg>
              <p class="upload-box-title">Change Cover</p>
              <p class="upload-box-text">1184x300px size minimum</p>
            </div>
          </div>
          
          <div class="widget-box">
            <p class="widget-box-title">About Your Profile</p>
            <div class="widget-box-content">
              <form class="form">
                <div class="form-row split">
                  <div class="form-item">
                    <div class="form-input small active">
                      <label for="firstname">First Name</label>
                      <input type="text" id="firstname" name="firstname">
                    </div>
                  </div>
                  
                  <div class="form-item">
                    <div class="form-input small">
                      <label for="middlename">Middle Name</label>
                      <input type="text" id="middlename" name="middlenamee">
                    </div>
                  </div>
                  
                  <div class="form-item">
                    <div class="form-input small">
                      <label for="lastname">Last Name</label>
                      <input type="text" id="lastname" name="lastname">
                    </div>
                  </div>
                </div>
                <div class="form-row split">
                  <div class="form-item">
                    <div class="form-input small full">
                      <textarea id="bio" name="bio" placeholder="Write a little description about you..."></textarea>
                    </div>
                  </div>
                  <div class="form-item">
                    <div class="form-input small">
                      <label for="contact_number">Contact Number</label>
                      <input type="text" id="contact_number" name="contact_number">
                    </div>
                    
                    <div class="form-input small">
                      <label for="birthday">Birthday</label>
                      <input type="text" id="birthday" name="birthday">
                    </div>
                  </div>
                </div>

                <div class="form-row split">
                    <div class="form-item">
                      <div class="form-input">
                        <label for="occupation">Occupation</label>
                        <input type="text" id="occupation" name="occupation">
                      </div>
                    </div>

                    <div class="form-item">
                        <div class="form-item">
                            <div class="form-select">
                              <label for="gender">Gender</label>
                              <select id="gender" name="gender">
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                              </select>
                              <svg class="form-select-icon icon-small-arrow">
                                <use xlink:href="assets/#svg-small-arrow"></use>
                              </svg>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="form-row split">
                    <div class="form-item">
                      <div class="form-input">
                        <label for="complete_address">Complete Address</label>
                        <input type="text" id="complete_address" name="complete_address">
                      </div>
                    </div>
                  </div>

                  <div class="form-row split">
                    <div class="form-item">
                      <div class="form-input">
                        <label for="house_no">House No.</label>
                        <input type="text" id="house_no" name="house_no">
                      </div>
                    </div>

                    <div class="form-item">
                        <div class="form-item">
                            <div class="form-select">
                              <label for="region_id">Region</label>
                              <select id="region_id" name="region_id">
                                @foreach ($regions as $region)
                                    <option value="{{$region->region_id}}">{{$region->name}}</option>
                                @endforeach
                              </select>
                              <svg class="form-select-icon icon-small-arrow">
                                <use xlink:href="assets/#svg-small-arrow"></use>
                              </svg>
                            </div>
                        </div>
                    </div>

                    <div class="form-item">
                        <div class="form-item">
                            <div class="form-select">
                              <label for="province_id">Province</label>
                              <select id="province_id" name="province_id">
                            
                              </select>
                              <svg class="form-select-icon icon-small-arrow">
                                <use xlink:href="assets/#svg-small-arrow"></use>
                              </svg>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="form-row split">
                    <div class="form-item">
                        <div class="form-item">
                            <div class="form-select">
                              <label for="city_id">City</label>
                              <select id="city_id" name="city_id">
                              
                              </select>
                              <svg class="form-select-icon icon-small-arrow">
                                <use xlink:href="assets/#svg-small-arrow"></use>
                              </svg>
                            </div>
                        </div>
                    </div>

                    <div class="form-item">
                        <div class="form-item">
                            <div class="form-select">
                              <label for="barangay_id">Barangay</label>
                              <select id="barangay_id" name="barangay_id">
                               
                              </select>
                              <svg class="form-select-icon icon-small-arrow">
                                <use xlink:href="assets/#svg-small-arrow"></use>
                              </svg>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="form-row split">
                    <div class="form-item">
                      <div class="form-input">
                        <label for="street">Street</label>
                        <input type="text" id="street" name="street">
                      </div>
                    </div>

                    <div class="form-item">
                        <div class="form-input">
                          <label for="zip_code">Zip Code</label>
                          <input type="text" id="zip_code" name="zip_code">
                        </div>
                      </div>
                  </div>
              </form>
            </div>
          </div>

          <div class="widget-box">
            <p class="widget-box-title">My Account</p>
            <br>
            <div class="form-row split">
              <div class="form-item">
                <div class="form-input active">
                  <label for="email">Email</label>
                  <input type="text" id="email" name="email" value="{{Auth::user()->email}}">
                </div>
              </div>
              <div class="form-item">
                <div class="form-input active">
                  <label for="username">Username</label>
                  <input type="text" id="username" name="username" value="{{Auth::user()->username}}">
                </div>
              </div>
            </div>
            <div class="form-row split">
              <div class="form-item">
                <div class="form-input active">
                  <label for="email">User Code</label>
                  <input type="text" id="user_code" name="user_code" value="{{Auth::user()->user_code}}" disabled>
                </div>
              </div>
              <div class="form-item">
                <div class="form-input active">
                  <label for="username">Password</label>
                  <input type="password" id="password" name="password" value="{{Auth::user()->password}}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/profile.js')}}"></script>
@endsection