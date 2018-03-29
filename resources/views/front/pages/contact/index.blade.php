@extends('front.layout.template')

@section('content')
 <div class="row">
    <div class="col-md-6" id="form_container">
        <h2>Contact Us</h2>
        <p>
           Please send your message below. We will get back to you at the earliest!
        </p>

               @if ($errors->all())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p><i class="fa fa-exclamation-circle"></i> {{ $error }} </p>
                            @endforeach
                    </div>
                    @endif
                    
                    @if(Session::has('msg'))
                    <div class="alert-success alert">
                      <p><i class="fa fa-check"></i> {{ Session::get('msg') }} </p>
                    </div>
               @endif

            <!-- form start -->

        {!! Form::open(['route' => 'contactus.submit', 'role' => 'form', 'autocomplete' => 'off']) !!}

            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7">{{ old('message') }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-success pull-right" >Submit</button>
                </div>
            </div>

         {!! Form::close() !!}
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-5">
      <div>
            <address>
              <strong>Address:</strong><br />
              nexladder.com<br>
              SGM Nagar, Faridabad<br />
              Haryana, India<br />
              121001<br />
            </address>
      </div>
      <div style="width:480px;height:350px" id="map">
      </div>
    </div>



  </div>
  
  <script>
      function initMap() {
        var uluru = {lat: 28.403512, lng: 77.289361};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0OjNT5xwO2H1Rc-P-5Jo6Uap9yx--yMw&callback=initMap"></script>

@stop