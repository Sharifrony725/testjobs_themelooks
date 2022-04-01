 @extends('layouts.app')
 @section('contect')
     <div class="row">
         <div class="col-md-3 register-left">
             <h3>Welcome</h3>
             <a name="" id="" class="btn btn-primary mx-auto" href="{{ route('users.index') }}" role="button">Show
                 Users</a>
             <br /><br />
             @include('alert.message')
         </div>
         <div class="col-md-9 register-right">
             <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <h3 class="register-heading">Register as a User</h3>
                     <form action="{{ route('users.store') }}" method="POST">
                         @csrf
                         <div class="row register-form">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="name" placeholder="Name"
                                         value="{{ old('name') }}" />
                                 </div>
                                 <div class="form-group">
                                     <input type="email" class="form-control" name="email" placeholder="Your Email "
                                         value="{{ old('email') }}" />
                                 </div>
                                 <div class="form-group">
                                     <input type="password" class="form-control" name="password" placeholder="Password "
                                         value="{{ old('password') }}" />
                                 </div>
                                 <div class="form-group">
                                     <div class="maxl">
                                         <label class="radio inline">
                                             <input name="is_active" id="is_active" value="1" type="radio" /> Active
                                         </label>
                                         <label class="radio inline">
                                             <input name="is_active" id="is_active" value="0" type="radio" /> Inactive
                                         </label>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" name="city" class="form-control" placeholder="City"
                                         value="{{ old('city') }}" />
                                 </div>
                                 <div class="form-group">
                                     <input type="text" name="country" class="form-control" placeholder="Country"
                                         value="{{ old('country') }}" />
                                 </div>
                                 <div class="form-group">
                                     <div class="item-input-wrap">
                                         <label for="birth_date">Date of Birth</label>
                                         <input name="birth_date" type="date" value="Y-M-D" placeholder="Please choose...">
                                     </div>
                                 </div>
                                 <input type="submit" class="btnRegister" value="Register" />
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection
