@extends('front.layout.template')

@section('content')
 <div class="row">
    <div class="col-md-6" id="form_container">
        <h2>Contact Us</h2>
        <p>
           Please send your message below. We will get back to you at the earliest!
        </p>
        <form role="form" method="post" id="">

            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required />
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-success pull-right" >Submit</button>
                </div>
            </div>

        </form>
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-5">
      <div>
            <address>
              Written by <a href="mailto:webmaster@example.com">Jon Doe</a>.<br> 
              Visit us at:<br>
              Example.com<br>
              Box 564, Disneyland<br>
              USA
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