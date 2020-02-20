@extends('layouts.app')





@section('content')
     <div id="offers-page">
     <div class="content-box">
      <div class="row">
         <div class="col-md-8 offset-md-2">
         <h1>Sign Up and Receive Our Latest Offers</h1>
            <form>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="firstnameinput">First Name</label>
                        <input class="form-control" name="fname" type="text"  id="firstnameinput" placeholder="John">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="lastnameinput">Last Name</label>
                        <input class="form-control" name="lname" type="text"  id="lastnameinput" placeholder="Jacobs">
                     </div>
                  </div>
               </div>                
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="phoneinput">Phone Number</label>
                        <input class="form-control" name="phone" type="tel" value="(555)-555-5555" id="phoneinput">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="emailinput">Email address</label>
                        <input type="email" class="form-control" name="" id="emailinput" placeholder="name@example.com">
                     </div>
                  </div>
               </div>    
               <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                        <p>In signing up, I acknowledge that I am 18 years of age or older, and want to recieve from Billys Burgers. If I select to join Dine Rewards, I agree to the terms and conditions of the program.</p>
                     </div>  
                  </div>
               </div>            
               <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                     </div>  
                  </div>
               </div>            
                
            </form>
      </div>
     </div>
   </div> 
  </div>
@endsection