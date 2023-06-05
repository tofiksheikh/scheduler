 @extends('user.layout.layout')

@section('content')

    <section id="appointy_outer">
    <div class="container">
        <div class="titleBar d-flex justify-content-between mb-4">
            <h2>Create New Event Type</h2>
            <a href="#" class="btn btn-primary"><img src="{{ asset('frontend/assets/images/Plus.png') }}" width="15px"> Create</a>
        </div>
        <div class="card">
            <div class="card-body">
                 <div class="row">
                    <div class="col-md-6">
                        <div class="eventTypeBox">
                            <a href="{{url('add-event-form/One-on-One')}}">
                                <div class="eventTypeImg"><img src="{{ asset('frontend/assets/images/one_on_one-c0ed81ea039b15906953.svg') }}"></div>
                                <div class="eventTypeCont">
                                    <h4>One-on-One</h4>
                                    <h6>One host  with  one invitee</h6>
                                    <p>Good for: coffee chats, 1:1 interviews, etc.</p>
                                </div>
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="eventTypeBox">
                            <a href="{{url('add-event-form/Group')}}">
                                <div class="eventTypeImg"><img src="{{ asset('frontend/assets/images/group-eaa808c3bb66b614c714.svg') }}"></div>
                                <div class="eventTypeCont">
                                    <h4>Group</h4>
                                    <h6>One host  with  group of invitees</h6>
                                    <p>Good for: webinars, online classes, etc.</p>
                                </div>
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="eventTypeBox">
                            <a href="{{url('add-event-form/One-on-One')}}">
                                <div class="eventTypeImg"><img src="{{ asset('frontend/assets/images/collective-dff7740f53ebd8dd98cc.svg') }}"></div>
                                <div class="eventTypeCont">
                                    <h4>One-on-One</h4>
                                    <h6>More than one host  with  group of invitees</h6>
                                    <p>Good for: panel interviews, group sales calls, etc.</p>
                                </div>
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="eventTypeBox">
                            <a href="{{url('add-event-form/Round Robin')}}">
                                <div class="eventTypeImg"><img src="{{ asset('frontend/assets/images/group-eaa808c3bb66b614c714.svg') }}"></div>
                                <div class="eventTypeCont">
                                    <h4>Round Robin</h4>
                                    <h6>one rotating host with one invitee</h6>
                                    <p>Good for: distributing incoming sales leads</p>
                                </div>
                                <i class="fas fa-angle-right"></i>
                            </a>
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