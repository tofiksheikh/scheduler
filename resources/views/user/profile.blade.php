    @extends('user.layout.layout')

@section('content')
    <div class="page_title_bar">
       <div class="container">
          <h2>Edit One-on-One Event Type</h2>
          <p>Choose the plan that suits you best</p>
       </div>
    </div>
        <section id="mainContainer">
          <div class="container">
              <div class="row align-items-start">
                <div class="col-md-3">
                      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                         <button class="nav-link " id="v-pills-branding-tab" data-bs-toggle="pill" data-bs-target="#v-pills-branding" type="button" role="tab" aria-controls="v-pills-branding" aria-selected="true">Branding</button>
                        <button class="nav-link" id="v-pills-myLink-tab" data-bs-toggle="pill" data-bs-target="#v-pills-myLink" type="button" role="tab" aria-controls="v-pills-myLink" aria-selected="false">My link</button>
                        <button class="nav-link" id="v-pills-phoneNum-tab" data-bs-toggle="pill" data-bs-target="#v-pills-phoneNum" type="button" role="tab" aria-controls="v-pills-phoneNum" aria-selected="false">Phone Number(s)</button>
                          <button class="nav-link" id="v-pills-Login-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Login" type="button" role="tab" aria-controls="v-pills-Login" aria-selected="false">Login</button>
                          <button class="nav-link" id="v-change_pwd-tab" data-bs-toggle="pill" data-bs-target="#v-change_pwd" type="button" role="tab" aria-controls="v-change_pwd" aria-selected="false">Change Password</button>
                         <button class="nav-link navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas"     aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">Cookie settings</button>
                      </div>
                </div>
                <div class="col-md-5">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <form action="javascript:;" id="profileTabInfoForm" method="post" name="profileTabInfoForm">
                        @csrf
                                 <div class="form-group">
                                    <div class="profileImg d-flex align-items-center">
                                        <div class="userImg me-4">
                                <div class="std_pro_thumbnail">
                                @if($user->profile_image)
                                 <img src="{{ asset($user->profile_image)}}" alt="">
                                 @else
                                <img src="{{ asset('frontend/assets/images/user.png')}}" width="80px">
                                 @endif
                              </div>
                                        </div>
                                        <div class="profileImgUpload">
                                            <div class="fileUploadBtn btn btn-border mb-2"><input type="file" name="profile_image" class="custom-file-input" accept="image/jpg,image/png" id="customFile">  Upload Picture</div>
                                            <p>JPG, GIF or PNG. Max size of 5MB.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Name <i class="fas fa-info-circle"></i></label>
                                    <input type="text" class="form-control txtName" name="full_name" value="{{$user->first_name}} {{$user->last_name}}">
                                </div>
                              <!--   <div class="form-group">
                                    <label>Welcome Message <i class="fas fa-info-circle"></i></label>
                                    <textarea class="form-control"></textarea>
                                </div> -->
                                <div class="form-group">
                                    <label>Language </label>
                                    <select class="selectpicker" name="language" id="language">
                                        <option value="1" {{(1 == $user->language ) ? 'selected' : ''}}>English</option>
                                        <option value="2" {{(2 == $user->language ) ? 'selected' : ''}}>French</option>
                                        <option value="3" {{(3 == $user->language ) ? 'selected' : ''}}>Spenish</option>
                                        <option value="4" {{(4 == $user->language ) ? 'selected' : ''}}>German</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date Format <i class="fas fa-info-circle"></i></label>
                                            <select class="selectpicker" name="date_format" id="date_format">
                                                <option value="Y/m/d" {{('Y/m/d' == $user->date_format ) ? 'selected' : ''}}>Y/m/d</option>
                                                <option value="Y-m-d" {{('Y-m-d' == $user->date_format ) ? 'selected' : ''}}>Y-m-d</option>
                                                <option value="d-m-Y" {{('d-m-Y' == $user->date_format ) ? 'selected' : ''}}>d-m-Y</option>
                                                <option value="d/m/Y" {{('d/m/Y' == $user->date_format ) ? 'selected' : ''}}>d/m/Y</option>
                                                <option value="m/d/Y" {{('m/d/Y' == $user->date_format ) ? 'selected' : ''}}>m/d/Y</option>
                                                <option value="m-d-Y" {{('m-d-Y' == $user->date_format ) ? 'selected' : ''}}>m-d-Y</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Time Format <i class="fas fa-info-circle"></i></label>
                                            <select class="selectpicker" name="time_format" id="time_format">
                                                <option value="12" {{(12 == $user->time_format ) ? 'selected' : ''}}>12h</option>
                                                <option value="24" {{(24 == $user->time_format ) ? 'selected' : ''}}>24h</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Country </label>
                                   <!--  <select class="">
                                        <option>India</option>
                                        <option>USA</option>
                                        <option>Spenish</option>
                                        <option>German</option>
                                    </select> -->
                                     <select name="country" id="country" class="selectpicker">
                                    
                                    <option value="1" {{(1 == $user->country ) ? 'selected' : ''}}>India</option>
                                    <option value="2" {{(2 == $user->country ) ? 'selected' : ''}}>UK</option>
                                    <option value="3" {{(3 == $user->country ) ? 'selected' : ''}}>USA</option>
                                    <option value="4" {{(4 == $user->country ) ? 'selected' : ''}}>Australia</option>
                                    <option value="5" {{(5 == $user->country ) ? 'selected' : ''}}>Africa</option>
                                    <option value="6" {{(6 == $user->country ) ? 'selected' : ''}}>Saudi Arabia</option>
                                 </select>
                                </div>
                                <div class="form-group">
                                    <label>Time Zone <span>Current Time:8:26am</span> </label>
                                    <select class="selectpicker" name="time_zone" id="time_zone">
                                        <option value="1" {{(1 == $user->time_zone ) ? 'selected' : ''}}>India Standard Time</option>
                                        <option value="2" {{(2 == $user->time_zone ) ? 'selected' : ''}}>Pakistan, Maldives Time</option>
                                        <option value="3" {{(3 == $user->time_zone ) ? 'selected' : ''}}>Yekaterinburg Time</option>
                                        <option value="4" {{(4 == $user->time_zone ) ? 'selected' : ''}}>India, Sri Lanka Time</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Save Chanegs</button>
                                    <button class="btn btn-secondary">Cancel</button>
                                    <a class="btn btn-danger" onclick="deleteAccount();">Delete Account</a>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane fade " id="v-pills-branding" role="tabpanel" aria-labelledby="v-pills-branding-tab">
                            <form action="javascript:;" id="brandingTabInfoForm" method="post" name="brandingTabInfoForm">
                        @csrf
                            <div class="form-group">
                                <label>Logo <i class="fas fa-info-circle"></i></label>
                                <div class="LogoImgOuter">
                                    <div class="LogoImg">
                                         @if($user->logo)
                                 <img src="{{ asset($user->logo)}}" alt="">
                                 
                                 @endif
                                    </div>
                                    <div class="profileImgUpload d-flex justify-content-between">
                                        <div class="fileUploadBtn btn btn-border"><input type="file" name="logo_image" class="logo-custom-file-input" accept="image/jpg,image/png" id="logocustomFile">  Upload Picture</div>
                                        <p>JPG, GIF or PNG. Max size of 5MB.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                 <div class="form-check form-switch">
                               
                                  <label class="form-check-label" for="flexSwitchCheckDefault"> Calendly Branding <i class="fas fa-info-circle"></i></label>
                                     <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                </div>
                            </div>
                             <div class="form-group">
                                <button class="btn btn-primary">Save Chanegs</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </div>
                             </form>
                        </div>
                       
                        <div class="tab-pane fade" id="v-pills-myLink" role="tabpanel" aria-labelledby="v-pills-myLink-tab">
                            <p>Changing your Calendly URL will mean that all of your copied links will no longer work and will need to be updated.</p>
                            <form action="javascript:;" id="myLinkTabInfoForm" method="post" name="myLinkTabInfoForm">
                        @csrf
                            <div class="d-flex mt-3 mb-3 align-items-center">
                               <span class="me-2"> calendly.com/ </span>
                                <input type="text" class="form-control" name="link" value="{{$user->link}}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Save Chanegs</button>
                            </div>
                             </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-phoneNum" role="tabpanel" aria-labelledby="v-pills-phoneNum-tab">
                            <h6>Your phone number(s) for workflows</h6>
                            <p>Phone numbers you add here will be used in any “text to host” workflows you create. Message and data rates may apply.</p>
                            <form action="javascript:;" id="phoneInfoForm" method="post" name="phoneInfoForm">
                        @csrf
                            <div class="form-group">
                                <input type="text" class="form-control numeric" id="phone_no" value="{{$user->phone}}" name="phone_no" pattern="[0-9]" placeholder="Enter Phone Number">
                                <label class="error numeric_error" style="color: Red; display: none">Please enter numbers Only</label>

                            </div>
                             <div class="form-group">
                               <button class="btn btn-primary">Save Chanegs</button> <button class="btn btn-secondary" disabled>Send verification code</button>
                            </div>
                            </form>
                            <p>Phone numbers you add here will be used in any “text to host” workflows you create. Message and data rates may apply.</p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Login" role="tabpanel" aria-labelledby="v-pills-Login-tab">
                            <div class="d-flex">
                                <span class="googleBtn"><i class="fab fa-google"></i></span>
                                You log in with a Google account.
                                <a href="#" class="btn">Unlink</a>
                            </div>
                            <div class="d-flex">
                                <div class="accoutInfo">
                                    <h6>Google account</h6>
                                    <p>{{$user->email}}</p>
                                </div>
                                <a href="#" class="btn">Change email</a>
                            </div>
                            <hr>
                            <a href="#" class="btn btn-border"><img src="images/microsoft.svg"> Switch to Microsoft login</a>
                            <p>Please <a href="#">contact support</a> if you need assistance.</p>
                        </div>
                         <div class="tab-pane fade" id="v-change_pwd" role="tabpanel" aria-labelledby="v-change_pwd-tab">
                            <h4>Change Password</h4>
                        <form action="javascript:;" id="changePasswordForm" method="post" name="changePasswordForm">
                        @csrf
                       
                              <div class="form-group">
                                 <label for="c_pwd" class="std_label">Current Password</label>
                                 <input type="password" class="form-control" name='current_password' value="" placeholder="Current Password" id="c_pwd">
                              </div>
                              <div class="form-group">
                                 <label for="n_pwd" class="std_label">New Password</label>
                                 <input type="password" class="form-control" name='new_password' value="" placeholder="New Password" id="n_pwd">
                              </div>
                              <div class="form-group">
                                 <label for="conf_pwd" class="std_label">Confirm Password</label>
                                 <input type="password" class="form-control" name='conf_password' value="" placeholder="Confirm Password" id="conf_pwd">
                              </div>
                              <div class="form-group">
                                 <button type="submit" class="btn btn-primary">Save Changes</button>
                              </div>
                       
</form>
                         </div>
                         <div class="offcanvas offcanvas-end bg-secondary" id="navbarOffcanvas" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                              <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Offcanvas</h5>
                              <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close">        </button>
                            </div>
                            <div class="offcanvas-body">          
                              <div class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <a class="nav-item nav-link active" aria-current="page" href="#">Bubbles</a>
                                <a class="nav-item nav-link" href="#">Cosmo</a>
                              </div>
                            </div>
                        </div> 
                      </div>



                  </div>
                </div>
          </div>
      </section>
      @endsection

       @push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('frontend/assets/js/user_profile.js')}}"></script>
@endpush