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
                     <h3 class="register-heading">Edit User</h3>
                     <form action="{{ route('users.update', $user->id) }}" method="POST">
                         @csrf
                         @method('PUT')
                         <div class="row register-form">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
                                 </div>
                                 <div class="form-group">
                                     <input type="email" class="form-control" name="email" value="{{ $user->email }}" />
                                 </div>
                                 <div class="form-group">
                                     <input type="password" class="form-control" name="password"
                                         value="{{ $user->password }}" />
                                 </div>
                                 <div class="form-group">
                                     <div class="maxl">
                                         <label class="radio inline">
                                             <input type="radio" name="is_active" value="1"
                                                 {{ $user->is_active == '1' ? 'checked' : '' }}>
                                             <span> Active </span>
                                         </label>
                                         <label class="radio inline">
                                             <input type="radio" name="is_active" value="0"
                                                 {{ $user->is_active == '0' ? 'checked' : '' }}>
                                             <span>Inactive </span>
                                         </label>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" name="city" class="form-control" placeholder="City"
                                         value="{{ $user->city }}" />
                                 </div>
                                 <div class="form-group">
                                     <input type="text" name="country" class="form-control" placeholder="Country"
                                         value="{{ $user->country }}" />
                                 </div>
                                 <div class="form-group">
                                     <div class="item-input-wrap">
                                         <label for="birth_date">Date of Birth</label>
                                         <input name="birth_date" type="date" value="{{ $user->birth_date }}"
                                             placeholder="Please choose...">
                                     </div>
                                 </div>
                                 <input type="submit" class="btnRegister" value="Update" />
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection
