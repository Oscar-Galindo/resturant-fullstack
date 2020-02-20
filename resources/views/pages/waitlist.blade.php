@extends('layouts.app')





@section('content')
   @extends('layouts.app')





@section('content')
  <div id="waitlist-page">
     <div class="content-box">
      <div class="row">
         <div class="col-md-6">
         <h1>Get On The List</h1>
            <form>
               <div class="form-group">
                  <label for="textinput">Full Name</label>
                  <input type="email" class="form-control" name="full-name" id="textinput" placeholder="John Jacobs">
               </div>
               <div class="form-group">
                  <label for="emailinput">Email address</label>
                  <input type="email" class="form-control" name="" id="emailinput" placeholder="name@example.com">
               </div>
                  <div class="form-group">
                     <label for="phoneinput">Phone Number</label>
                     <input class="form-control" name="phone" type="tel" value="(555)-555-5555" id="phoneinput">
                  </div>
               <div class="form-group">
                  <label for="guestinput">How Many Guest</label>
                  <select class="form-control" name="guest" id="guestinput">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                  </select>
               </div>      
               <div class="form-group">
                  <label for="timeinput">Time Of Your Reservation</label>
                  <select class="form-control" name="time" id="timeinput">
                     <option value="6">6:00 PM</option>
                     <option value="7">7:00 PM</option>
                     <option value="8">8:00 PM</option>
                     <option value="9">9:00 PM</option>
                     <option value="10">10:00 PM</option>
                  </select>
               </div>  
               <div class="form-group">
                <button type="submit" class="btn btn-primary mb-2">Confirm</button>
               </div>    
            </form>
      </div>
      <div class="col-md-6">
        <p>Please Note: If you will not be able to make your scheduled reservation to call 30 minutes ahead to reschedule. You may have a short wiat once you arrive while we prepare while we prepare your table. </p> 
      </div>
     </div>
   </div> 
  </div>
@endsection
@endsection