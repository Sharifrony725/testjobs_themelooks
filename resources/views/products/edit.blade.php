 @extends('layouts.app')
 @section('contect')
        <div class="row">
            <div class="col-md-3 register-left">
                <h3>Welcome</h3>
                <a name="" id="" class="btn btn-primary mx-auto" href="{{ route('products.index') }}"
                    role="button">Show
                    Products</a>
                <br /><br />
                @include('alert.message')
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Edit Product</h3>
                        <form action="{{ route('products.update',$product->id) }}" method="POST">
                            @csrf
                              @method('PUT')
                            <div class="row register-form">
                              <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"
                                           value="{{ $product->name }}"  />
                                    </div>
                                    <div class="form-group">
                                        <select name="category_id" id="category_id" class = "form-control aiz-selectpicker">
                                            <option  style="display:none"> Category</option>
                                         @foreach ($categories as  $category)
                                              <option value="{{ $category->id }}" @if ($category->id == $product->category_id)
                                                selected
                                              @endif >{{ $category->name }}</option>
                                         @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="size_id" id="size_id" class = "form-control aiz-selectpicker">
                                            <option  style="display:none">Size</option>
                                             @foreach ($sizes as  $size)
                                              <option value="{{ $size->id }}" @if ($size->id == $product->size_id)
                                                selected
                                              @endif>{{ $size->name }}</option>
                                         @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="color_id" id="color_id" class = "form-control aiz-selectpicker">
                                            <option  style="display:none">Color</option>
                                           @foreach ($colors as  $color)
                                              <option value="{{ $color->id }}" @if ($color->id == $product->size_id)
                                                  selected
                                              @endif>{{ $color->name }}</option>
                                         @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="price" value="{{ $product->price }}"
                                             />
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
