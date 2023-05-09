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
              <div class="card eventCard">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <h4>When can people book this event?</h4>
                                <p>30 min, 60 rolling calendar days</p>
                            </div>
                            <div class="col-md-5 text-end">
                                <a class="btn" href="#" tabindex="-1">Cancel</a>
                                   <a class="btn btn-primary" href="#" tabindex="-1">Save & Close</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="daterange_outer br-bottom pb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Date range</h4>
                                    <p>Invitees can schedule...</p>
                                    <ul class="daterangeEventList">
                                        <li>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="daterange" value="a" id="daterange1">
                                              <label class="form-check-label" for="daterange1"></label>
                                            </div>
                                            <input type="text" class="form-control w-80">
                                            <select class="selectpicker">
                                                <option value="Calender Days">Calender Days </option>
                                                <option value="weekdays">weekdays Excludes weekends and only counts Mon - Fri</option>
                                            </select>
                                            <span class="ms-4">into the future</span>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="daterange" value="b" id="daterange2">
                                              <label class="form-check-label" for="daterange2">
                                                Within a date range
                                              </label>
                                            </div>
                                           
                                           <input type="text" name="datetimes" class="form-control ms-4" id="datetimes" />
                                        </li>
                                        <li>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="daterange" value="c" id="daterange3">
                                              <label class="form-check-label" for="daterange3">
                                               Indefinitely into the future
                                              </label>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                                 <div class="col-md-6">
                                    <p>Set a range of dates when you can accept meetings.</p>
                                 </div>
                            </div>
                        </div>
                         <div class="Duration_outer br-bottom">
                             <div class="row">
                                <div class="col-md-6">
                                    <label>Duration</label>
                                    <select class="selectpicker">
                                        <option>15 min</option>
                                        <option>30 min</option>
                                        <option>45 min</option>
                                        <option>60 min</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <p>Define how long your event will be. It can be as long as 12 hours.</p>
                                </div>
                            </div>
                         </div>
                          <div class="eventType_outer  pt-4">
                             <div class="row">
                                <div class="col-md-6">
                                    <h5>How do you want to offer your availability for this event type?</h5>
                                </div>
                                <div class="col-md-6">
                                    <p>Select one of your schedules or define custom hours specific to this type of event.</p>
                                </div>
                            </div>
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button class="nav-link active"  data-bs-toggle="pill" data-bs-target="#existing" type="button" role="tab" aria-controls="existing" aria-selected="true">Use an existing schedule</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#customHr" type="button" role="tab" aria-controls="customHr" aria-selected="false">Set custom hours</button>
                              </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="existing" role="tabpanel">
                                    <h4>Which schedule do you want to use?</h4>
                                    <select class="selectpicker" >
                                        <option>Working Hours</option>
                                        <option>Working Hours</option>
                                        <option>Working Hours</option>
                                    </select>
                                    <h6 class="mt-3 mb-3"><i class="fas fa-globe"></i> India Standard Time</h6>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="workingHr">
                                            <h5>WEEKLY HOURS</h5>
                                            <table class="table">
                                                <tr><th>SUN</th><td>Unavailable</td> </tr>
                                                <tr><th>MON</th><td>9:00am – 5:00pm</td> </tr>
                                                <tr><th>TUE</th><td>9:00am – 5:00pm</td> </tr>
                                                <tr><th>WED</th><td>9:00am – 5:00pm</td> </tr>  
                                                <tr><th>THU</th><td>9:00am – 5:00pm</td> </tr>
                                                <tr><th>FRI</th><td>9:00am – 5:00pm</td> </tr>
                                                <tr><th>SAT</th><td>Unavailable</td> </tr>
                                            </table>
                                        </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="note">
                                                <h5>DATE OVERRIDES</h5>
                                                <p>To override your hours on specific dates, update your schedule under Availability</p>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="tab-pane fade" id="customHr" role="tabpanel">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>TIME ZONE</h4>
                                            <select class="selectpicker" data-live-search="true">
                                                <option>Pacific Time - US & Canada</option>
                                                <option>Mountain Time - US & Canada</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#">Save as new schedule</a>
                                                <ul class="nav nav-pills mt-3" id="view" role="tablist">
                                                  <li class="nav-item" role="presentation">
                                                    <button class="nav-link active"  data-bs-toggle="pill" data-bs-target="#listView" type="button" role="tab" aria-controls="listView" aria-selected="true"><i class="fas fa-list"></i> List view</button>
                                                  </li>
                                                  <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#calenderView" type="button" role="tab" aria-controls="calenderView" aria-selected="false"><i class="fas fa-calender"></i> Calendar view</button>
                                                  </li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="viewOuter">
                                        <div class="tab-content" id="view-tabContent">
                                              <div class="tab-pane fade show active" id="listView" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <h5>Set your weekly hours</h5>
                                                            <table class="table">
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                          <input class="form-check-input" type="checkbox"  name="mainWeek" id="sun">
                                                                          <label class="form-check-label" for="sun">sun</label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        
                                                                        <div class="unCheckCont">Unavailable</div>
                                                                        <div class="CheckCont">
                                                                            <div class="weekRow">
                                                                                <div class="d-flex align-items-center">
                                                                                    <input type="Time" class="form-control">
                                                                                    <span class="me-2 ms-2"> - </span>
                                                                                     <input type="Time" class="form-control">
                                                                                     <button class="btn removeBtn"><i class="fas fa-trash"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="weekappendCont">
                                                                            </div>
                                                                        </div>

                                                                    </td>
                                                                    <td><button class="btn weekappend"><i class="fas fa-plus"></i></button></td>
                                                                    <td>
                                                                        <div class="dropdown copyBtn">
                                                                          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="far fa-copy"></i>
                                                                          </button>
                                                                          <ul class="dropdown-menu">
                                                                            <li>Copy times to</li>
                                                                            <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Sunday">
                                                                                  <label class="form-check-label" for="wed-Sunday">Sunday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-monday">
                                                                                  <label class="form-check-label" for="wed-monday">monday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Tuesday">
                                                                                  <label class="form-check-label" for="wed-Tuesday">Tuesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Wednesday">
                                                                                  <label class="form-check-label" for="wed-Wednesday">Wednesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Thursday">
                                                                                  <label class="form-check-label" for="wed-Thursday">Thursday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Friday">
                                                                                  <label class="form-check-label" for="wed-Friday">Friday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Saturday">
                                                                                  <label class="form-check-label" for="wed-Saturday">Saturday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li><button class="btn btn-primary">Apply</button></li>

                                                                           
                                                                          </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                          <input class="form-check-input" checked name="mainWeek" type="checkbox" id="mon">
                                                                          <label class="form-check-label" for="mon">MON</label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        
                                                                        <div class="unCheckCont">Unavailable</div>
                                                                        <div class="CheckCont">
                                                                            <div class="weekRow">
                                                                                <div class="d-flex align-items-center">
                                                                                    <input type="Time" class="form-control">
                                                                                    <span class="me-2 ms-2"> - </span>
                                                                                     <input type="Time" class="form-control">
                                                                                     <button class="btn removeBtn"><i class="fas fa-trash"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="weekappendCont">
                                                                            </div>
                                                                        </div>

                                                                    </td>
                                                                    <td><button class="btn weekappend"><i class="fas fa-plus"></i></button></td>
                                                                    <td>
                                                                        <div class="dropdown copyBtn">
                                                                          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="far fa-copy"></i>
                                                                          </button>
                                                                          <ul class="dropdown-menu">
                                                                            <li>Copy times to</li>
                                                                            <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="mon-Sunday">
                                                                                  <label class="form-check-label" for="mon-Sunday">Sunday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="mon-Monday">
                                                                                  <label class="form-check-label" for="mon-Monday">Monday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="mon-Tuesday">
                                                                                  <label class="form-check-label" for="mon-Tuesday">Tuesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="mon-Wednesday">
                                                                                  <label class="form-check-label" for="mon-Wednesday">Wednesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="mon-Thursday">
                                                                                  <label class="form-check-label" for="mon-Thursday">Thursday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="mon-Friday">
                                                                                  <label class="form-check-label" for="mon-Friday">Friday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="mon-Saturday">
                                                                                  <label class="form-check-label" for="mon-Saturday">Saturday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li><button class="btn btn-primary">Apply</button></li>

                                                                           
                                                                          </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                          <input class="form-check-input" checked name="mainWeek" type="checkbox" id="tue">
                                                                          <label class="form-check-label" for="tue">TUE</label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        
                                                                        <div class="unCheckCont">Unavailable</div>
                                                                        <div class="CheckCont">
                                                                            <div class="weekRow">
                                                                                <div class="d-flex align-items-center">
                                                                                    <input type="Time" class="form-control">
                                                                                    <span class="me-2 ms-2"> - </span>
                                                                                     <input type="Time" class="form-control">
                                                                                     <button class="btn removeBtn"><i class="fas fa-trash"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="weekappendCont">
                                                                            </div>
                                                                        </div>

                                                                    </td>
                                                                    <td><button class="btn weekappend"><i class="fas fa-plus"></i></button></td>
                                                                    <td>
                                                                        <div class="dropdown copyBtn">
                                                                          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="far fa-copy"></i>
                                                                          </button>
                                                                          <ul class="dropdown-menu">
                                                                            <li>Copy times to</li>
                                                                            <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="tue-Sunday">
                                                                                  <label class="form-check-label" for="tue-Sunday">Sunday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="tue-monday">
                                                                                  <label class="form-check-label" for="tue-monday">Monday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="tue-Tuesday">
                                                                                  <label class="form-check-label" for="tue-Tuesday">Tuesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="tue-Wednesday">
                                                                                  <label class="form-check-label" for="tue-Wednesday">Wednesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="tue-Thursday">
                                                                                  <label class="form-check-label" for="tue-Thursday">Thursday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="tue-Friday">
                                                                                  <label class="form-check-label" for="tue-Friday">Friday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="tue-Saturday">
                                                                                  <label class="form-check-label" for="tue-Saturday">Saturday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li><button class="btn btn-primary">Apply</button></li>

                                                                           
                                                                          </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                          <input class="form-check-input" type="checkbox" checked name="mainWeek" id="wed">
                                                                          <label class="form-check-label" for="wed">wed</label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        
                                                                        <div class="unCheckCont">Unavailable</div>
                                                                        <div class="CheckCont">
                                                                            <div class="weekRow">
                                                                                <div class="d-flex align-items-center">
                                                                                    <input type="Time" class="form-control">
                                                                                    <span class="me-2 ms-2"> - </span>
                                                                                     <input type="Time" class="form-control">
                                                                                     <button class="btn removeBtn"><i class="fas fa-trash"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="weekappendCont">
                                                                            </div>
                                                                        </div>

                                                                    </td>
                                                                    <td><button class="btn weekappend"><i class="fas fa-plus"></i></button></td>
                                                                    <td>
                                                                        <div class="dropdown copyBtn">
                                                                          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="far fa-copy"></i>
                                                                          </button>
                                                                          <ul class="dropdown-menu">
                                                                            <li>Copy times to</li>
                                                                            <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Sunday">
                                                                                  <label class="form-check-label" for="wed-Sunday">Sunday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-monday">
                                                                                  <label class="form-check-label" for="wed-monday">monday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-tuesday">
                                                                                  <label class="form-check-label" for="wed-tuesday">tuesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Wednesday">
                                                                                  <label class="form-check-label" for="wed-Wednesday">Wednesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Thursday">
                                                                                  <label class="form-check-label" for="wed-Thursday">Thursday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Friday">
                                                                                  <label class="form-check-label" for="wed-Friday">Friday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="wed-Saturday">
                                                                                  <label class="form-check-label" for="wed-Saturday">Saturday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li><button class="btn btn-primary">Apply</button></li>

                                                                           
                                                                          </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                          <input class="form-check-input" type="checkbox" checked name="mainWeek" id="thu">
                                                                          <label class="form-check-label" for="thu">thu</label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        
                                                                        <div class="unCheckCont">Unavailable</div>
                                                                        <div class="CheckCont">
                                                                            <div class="weekRow">
                                                                                <div class="d-flex align-items-center">
                                                                                    <input type="Time" class="form-control">
                                                                                    <span class="me-2 ms-2"> - </span>
                                                                                     <input type="Time" class="form-control">
                                                                                     <button class="btn removeBtn"><i class="fas fa-trash"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="weekappendCont">
                                                                            </div>
                                                                        </div>

                                                                    </td>
                                                                    <td><button class="btn weekappend"><i class="fas fa-plus"></i></button></td>
                                                                    <td>
                                                                        <div class="dropdown copyBtn">
                                                                          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="far fa-copy"></i>
                                                                          </button>
                                                                          <ul class="dropdown-menu">
                                                                            <li>Copy times to</li>
                                                                            <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="thu-Sunday">
                                                                                  <label class="form-check-label" for="thu-Sunday">Sunday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="thu-monday">
                                                                                  <label class="form-check-label" for="thu-monday">monday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="thu-Tuesday">
                                                                                  <label class="form-check-label" for="thu-Tuesday">Tuesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="thu-Wednesday">
                                                                                  <label class="form-check-label" for="thu-Wednesday">Wednesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="thu-Thursday">
                                                                                  <label class="form-check-label" for="thu-Thursday">Thursday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="thu-Friday">
                                                                                  <label class="form-check-label" for="thu-Friday">Friday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="thu-Saturday">
                                                                                  <label class="form-check-label" for="thu-Saturday">Saturday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li><button class="btn btn-primary">Apply</button></li>

                                                                           
                                                                          </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                          <input class="form-check-input" type="checkbox" checked name="mainWeek" id="fri">
                                                                          <label class="form-check-label" for="fri">fri</label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        
                                                                        <div class="unCheckCont">Unavailable</div>
                                                                        <div class="CheckCont">
                                                                            <div class="weekRow">
                                                                                <div class="d-flex align-items-center">
                                                                                    <input type="Time" class="form-control">
                                                                                    <span class="me-2 ms-2"> - </span>
                                                                                     <input type="Time" class="form-control">
                                                                                     <button class="btn removeBtn"><i class="fas fa-trash"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="weekappendCont">
                                                                            </div>
                                                                        </div>

                                                                    </td>
                                                                    <td><button class="btn weekappend"><i class="fas fa-plus"></i></button></td>
                                                                    <td>
                                                                        <div class="dropdown copyBtn">
                                                                          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="far fa-copy"></i>
                                                                          </button>
                                                                          <ul class="dropdown-menu">
                                                                            <li>Copy times to</li>
                                                                            <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="fri-Sunday">
                                                                                  <label class="form-check-label" for="fri-Sunday">Sunday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="fri-monday">
                                                                                  <label class="form-check-label" for="fri-monday">monday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="fri-Tuesday">
                                                                                  <label class="form-check-label" for="fri-Tuesday">Tuesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="fri-Wednesday">
                                                                                  <label class="form-check-label" for="fri-Wednesday">Wednesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="fri-Thursday">
                                                                                  <label class="form-check-label" for="fri-Thursday">Thursday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="fri-Friday">
                                                                                  <label class="form-check-label" for="fri-Friday">Friday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="fri-Saturday">
                                                                                  <label class="form-check-label" for="fri-Saturday">Saturday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li><button class="btn btn-primary">Apply</button></li>

                                                                           
                                                                          </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check">
                                                                          <input class="form-check-input" type="checkbox" checked name="mainWeek" id="sat">
                                                                          <label class="form-check-label" for="sat">sat</label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        
                                                                        <div class="unCheckCont">Unavailable</div>
                                                                        <div class="CheckCont">
                                                                            <div class="weekRow">
                                                                                <div class="d-flex align-items-center">
                                                                                    <input type="Time" class="form-control">
                                                                                    <span class="me-2 ms-2"> - </span>
                                                                                     <input type="Time" class="form-control">
                                                                                     <button class="btn removeBtn"><i class="fas fa-trash"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="weekappendCont">
                                                                            </div>
                                                                        </div>

                                                                    </td>
                                                                    <td><button class="btn weekappend"><i class="fas fa-plus"></i></button></td>
                                                                    <td>
                                                                        <div class="dropdown copyBtn">
                                                                          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="far fa-copy"></i>
                                                                          </button>
                                                                          <ul class="dropdown-menu">
                                                                            <li>Copy times to</li>
                                                                            <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="sat-Sunday">
                                                                                  <label class="form-check-label" for="sat-Sunday">Sunday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="sat-monday">
                                                                                  <label class="form-check-label" for="sat-monday">monday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="sat-Tuesday">
                                                                                  <label class="form-check-label" for="sat-Tuesday">Tuesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="sat-Wednesday">
                                                                                  <label class="form-check-label" for="sat-Wednesday">Wednesday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="sat-Thursday">
                                                                                  <label class="form-check-label" for="sat-Thursday">Thursday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="sat-Friday">
                                                                                  <label class="form-check-label" for="sat-Friday">Friday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li>
                                                                                <div class="form-check">
                                                                                  <input class="form-check-input" type="checkbox" id="sat-Saturday">
                                                                                  <label class="form-check-label" for="sat-Saturday">Saturday</label>
                                                                                </div>
                                                                             </li>
                                                                             <li><button class="btn btn-primary">Apply</button></li>

                                                                           
                                                                          </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="note">
                                                                <h5>Add date overrides</h5>
                                                                <p>Add dates when your availability changes from your weekly hours</p>
                                                                <a href="#" class="btn btn-primary">Add a date override</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                              </div>
                                              <div class="tab-pane fade" id="calenderView" role="tabpanel">ca</div>
                                          </div>
                                    </div>
                              </div>
                            </div>
                         </div>
              </div>
          </div>
      </section>
      @endsection