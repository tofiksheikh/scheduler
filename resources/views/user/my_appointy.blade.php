  @extends('user.layout.layout')

@section('content')


<section id="appointy_outer">
    <div class="container">
        <div class="titleBar d-flex justify-content-between">
            <h2>My Appointy</h2>
            <div class="dropdown userDashboard">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> <img src="{{ asset('frontend/assets/images/Plus.png') }}" width="15px"> Create  </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#"><i class="fas fa-id-card"></i> Event Type <p>Create a new template for your regularly scheduled events.</p> </a></li>
                <li><a class="dropdown-item" href="#"><i class="far fa-handshake"></i> One-off meeting <p>Invite someone to pick a time to meet with you.</p> </a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-list"></i> Meeting poll <p>Schedule a group meeting after offering times for a vote.</p> </a></li>
             
              </ul>
            </div>
        </div>

        <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="eventType-tab" data-bs-toggle="tab" data-bs-target="#eventType" type="button" role="tab" aria-controls="eventType" aria-selected="true">Event Types</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="scheduled-tab" data-bs-toggle="tab" data-bs-target="#scheduled" type="button" role="tab" aria-controls="scheduled" aria-selected="false">Scheduled Events</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="workflows-tab" data-bs-toggle="tab" data-bs-target="#workflows" type="button" role="tab" aria-controls="workflows" aria-selected="false">Workflows</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="eventType" role="tabpanel" aria-labelledby="eventType-tab">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="userPanel">
                            <div class="d-flex align-items-center">
                                <span class="userName">{{ucfirst(mb_substr(Auth::guard('user')->user()->first_name, 0, 1))}}</span>
                                <div class="userInfo">
                                    <p>{{Auth::guard('user')->user()->first_name}} {{Auth::guard('user')->user()->last_name}}</p>
                                    <p>calendly.com/{{Auth::guard('user')->user()->link}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown ms-auto">
                                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('frontend/assets/images/gear.png') }}" width="20px">
                                      </button>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-link"></i> Copy Link</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-code"></i> Add To Website</a></li>
                                      </ul>
                                    </div>
                    </div>
                    <div class="card-body">
                            <div class="row align-items-center mb-3">
                                <div class="col-sm-6 col-md-4">
                                        <div class="searchPanel">
                                            <input type="search" class="form-control">
                                            <button class="btn"><i class="fa fa-search"></i></button>
                                        </div>
                                </div>
                                <div class="col-sm-6 col-md-4 ms-auto text-end ">
                                     <a href="#" class="btn btn-primary"><img src="{{ asset('frontend/assets/images/Plus.png') }}" width="15px"> New event type</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="eventBox active">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="btn-group">
                                              <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('frontend/assets/images/green_gear.png') }}" width="20px">
                                              </button>
                                              <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-file"></i> Add Internal Note</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-clone"></i> Clone</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li> <div class=" form-switch">
                                                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault">On/Of</label>
                                                        </div>
                                                    </li>
                                              </ul>
                                            </div>
                                           
                                           
                                            <div class="form-check">
                                                <input type="checkbox" id="one" checked class="filled-in search_filter" name="free_shipping" value="1" placeholder="Free Shipping">
                                                <label for="one" ></label>
                                            </div>


                                        </div>
                                        <h4>30 Minute Meeting</h4>
                                        <p>30 mins , One-on-One</p>
                                        <a href="#" class="viewLink">View booking page</a>
                                        <div class="actionBox">
                                            <a href="#" class="btn btn-primary"><i class="far fa-copy"></i> Copy Link</a>
                                            <a href="#" class="btn btn-secondary"><i class="fas fa-share-alt"></i> Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="eventBox">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="btn-group">
                                              <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('frontend/assets/images/green_gear.png') }}" width="20px">
                                              </button>
                                              <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-file"></i> Add Internal Note</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-clone"></i> Clone</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li> <div class=" form-switch">
                                                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault">On/Of</label>
                                                        </div>
                                                    </li>
                                              </ul>
                                            </div>
                                             <div class="form-check">
                                                <input type="checkbox" id="two" class="filled-in search_filter" name="free_shipping" value="1" placeholder="Free Shipping">
                                                <label for="two" ></label>
                                            </div>
                                        </div>
                                        <h4>30 Minute Meeting</h4>
                                        <p>30 mins , One-on-One</p>
                                        <a href="#" class="viewLink">View booking page</a>
                                        <div class="actionBox">
                                            <a href="#" class="btn btn-primary"><i class="far fa-copy"></i> Copy Link</a>
                                            <a href="#" class="btn btn-secondary"><i class="fas fa-share-alt"></i> Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="eventBox">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="btn-group">
                                              <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('frontend/assets/images/green_gear.png') }}" width="20px">
                                              </button>
                                              <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-file"></i> Add Internal Note</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-clone"></i> Clone</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li> <div class=" form-switch">
                                                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault">On/Of</label>
                                                        </div>
                                                    </li>
                                              </ul>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="three" class="filled-in search_filter" name="free_shipping" value="1" placeholder="Free Shipping">
                                                <label for="three" ></label>
                                            </div>
                                        </div>
                                        <h4>30 Minute Meeting</h4>
                                        <p>30 mins , One-on-One</p>
                                        <a href="#" class="viewLink">View booking page</a>
                                        <div class="actionBox">
                                            <a href="#" class="btn btn-primary"><i class="far fa-copy"></i> Copy Link</a>
                                            <a href="#" class="btn btn-secondary"><i class="fas fa-share-alt"></i> Share</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
          </div>
          <div class="tab-pane fade" id="scheduled" role="tabpanel" aria-labelledby="scheduled-tab">
                <div class="card">
                    <div class="card-header text-end">
                                  Displaying 0 – 0 of 0 Events
                    </div>
                    <div class="card-body">
                            <div class="row align-items-center mb-3 eventNav_outer">
                                <div class="col-md-8 eventNav">
                                    <a href="#" class="active">Event Types</a> <a href="#">Pending</a> <a href="#">Past</a> <a href="#"  id="reportrange">Date Range <span></span></a>
                                </div>
                                

                                <div class="col-md-4 text-end ">
                                    <a href="#" class="btn btn-primary"><img src="{{ asset('frontend/assets/images/export.png') }}" width="20px"> Export</a> <a href="#" class="btn btn-primary"><img src="{{ asset('frontend/assets/images/filter.png') }}" width="20px"> Filter</a> 
                                </div>
                                <div class="eventTypeBox text-center mt-5">
                                    <img src="{{ asset('frontend/assets/images/cal.png') }}" width="150px">
                                    <h6 class="mt-3">No Events Yet</h6>
                                    <p class="mb-3">Share Event Type links to schedule events.</p>
                                    <a href="#" class="btn btn-primary">View Event Types</a>
                                </div>
                            </div>
                           
                    </div>
                </div>
          </div>
          <div class="tab-pane fade" id="workflows" role="tabpanel" aria-labelledby="workflows-tab">
                <div class="card">
                      <div class="card-body p-5">
                        <div class="col-md-7 p-5">
                              <h3>What is Lorem Ipsum?</h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also
                                the leap into electronic typesetting, remaining essentially unchanged.</p>
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

@endpush