@extends('layouts.app')
 @section('contect')
        <div class="row">
            <div class="col-md-3 register-left">
                <h3>Welcome</h3>
                <a name="" id="" class="btn btn-primary mx-auto" href="{{ route('products.create') }}"
                    role="button"> Add
                    Products</a>
                <br /><br />
                @include('alert.message')
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Product List</h3>
                                 <div class="row register-form">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                @if (count($products) > 0)
                                    @foreach ($products as $product)
                                        <tbody>
                                            <tr>
                                                <td scope="row">{{ $products->firstItem() + $loop->index ?? null }}</td>
                                                <td>{{ $product->name ?? null }}</td>
                                                <td>{{ $product->category->name ?? null }}</td>
                                                <td>{{ $product->size->name ?? null }}</td>
                                                <td>{{ $product->color->name ?? null }}</td>
                                                <td>{{ $product->price ?? null }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn btn-primary"
                                                        href="{{ route('products.edit', $product->id) }}">Edit</a> <br />
                                                    <form action="{{ route('products.destroy', $product->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    @endsection
