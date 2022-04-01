 @extends('layouts.app')
 @section('contect')
     <div class="row">
         <div class="col-md-3 register-left">
             <h3>Welcome</h3>
             <a name="" id="" class="btn btn-primary mx-auto" href="{{ route('products.index') }}" role="button">Show
                 Products</a>
             <br /><br />
             @include('alert.message')
         </div>
         <div class="col-md-9 register-right">
             <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <h3 class="register-heading">Add Product</h3>
                     <form action="{{ route('products.store') }}" method="POST">
                         @csrf
                         <div class="row register-form">
                             <div class="col-md-10">
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="name" placeholder="Name"
                                         value="{{ old('name') }}" />
                                 </div>
                                 <div class="form-group">
                                     <select name="category_id" id="category_id" class="form-control aiz-selectpicker">
                                         <option style="display:none"> Category</option>
                                         @foreach ($categories as $category)
                                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <select name="size_id" id="size_id" class="form-control aiz-selectpicker">
                                         <option style="display:none">Size</option>
                                         @foreach ($sizes as $size)
                                             <option value="{{ $size->id }}">{{ $size->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <select name="color_id" id="color_id" class="form-control aiz-selectpicker">
                                         <option style="display:none">Color</option>
                                         @foreach ($colors as $color)
                                             <option value="{{ $color->id }}">{{ $color->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <input type="number" class="form-control" name="price" placeholder="Price"
                                         value="{{ old('price') }}" />
                                 </div>
                                 <input type="submit" class="btnRegister" value="Submit" />
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection
