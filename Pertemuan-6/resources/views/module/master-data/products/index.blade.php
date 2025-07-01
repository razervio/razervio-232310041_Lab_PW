@extends('templates.layouts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@section('content')

<div class="row mt-5">
    <div class="col-lg-8 col-xxl-8">
        <div class="card border-0">
            <div class="card-header bg-white border-0 px-4 py-3">
                <div class="card-title">
                    <h5 class="fw-bolder text-gray-900 m-0">List of Product</h5>
                </div>
            </div>
            <div class="card-body p-8">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="fs-6 fw-bold bg-light">
                            <tr class="fs-7">
                                <th>No</th>
                                <th width="30%">Name</th>
                                <th>Description</th>
                                <th width="20%">Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-6 text-secondary">
                            @if (count($products) > 0)
                                @foreach ($products as $index => $product)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            <div style="height: 30px; overflow: hidden;">
                                                {{ $product->description }}
                                            </div>
                                        </td>
                                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                        <td>{{ $product->is_active ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button 
                                                    class="btn btn-sm btn-danger" 
                                                    title="Remove" 
                                                    type="button"
                                                    onclick="RemoveItem('{{ $product->id }}')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                <button 
                                                    title="Edit" 
                                                    class="btn btn-sm btn-primary" 
                                                    type="button"
                                                    onclick="EditItem('{{ $product->id }}')">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <a 
                                                    href="{{ route('products.show', $product->id) }}" 
                                                    title="Detail" 
                                                    class="btn btn-sm btn-warning">
                                                    <i class="bi bi-arrow-right-square"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">No record found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-xxl-4">
        @include('module.master-data.products.create')
    </div>
</div>

<script>
    const RemoveItem = (id) => {
        if (confirm('Are you sure you want to remove this product?')) {
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function(){
                var data = JSON.parse(this.response);
                alert(data.message);
                window.location.href = "{{ route('products.index') }}";
            }
            xmlhttp.open("GET", "{{ url('') }}/master-data/products/" + id + "/delete", true);
            xmlhttp.send();
        }
    }

    const EditItem = (id) => {
        var targetDiv = document.getElementById('form-product');
        if (!targetDiv) {
            alert('Form product not found!');
            return;
        }
        
        let id_ = targetDiv.getElementsByClassName('id')[0];
        let name_ = targetDiv.getElementsByClassName('name')[0];   
        let description_ = targetDiv.getElementsByClassName('description')[0];
        let price_ = targetDiv.getElementsByClassName('price')[0];
        let is_active_y_ = targetDiv.getElementsByClassName('is_active_y')[0];
        let is_active_n_ = targetDiv.getElementsByClassName('is_active_n')[0];

        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function () {
            if (this.status === 200) {
                var data = JSON.parse(this.response);
                if (data) {
                    if (id_) id_.value = data.id;
                    if (name_) name_.value = data.name;
                    if (description_) description_.value = data.description;
                    if (price_) price_.value = data.price;
                    
                    if (data.is_active == 1) {
                        if (is_active_y_) is_active_y_.checked = true;
                        if (is_active_n_) is_active_n_.checked = false;
                    } else {
                        if (is_active_y_) is_active_y_.checked = false;
                        if (is_active_n_) is_active_n_.checked = true;
                    }
                } else {
                    alert('Product not found!');
                }
            } else {
                alert('Error loading product data!');
            }
        };
        xmlhttp.onerror = function() {
            alert('Network error occurred!');
        };
        
        // Fixed URL - added missing slash
        xmlhttp.open("GET", "{{ url('') }}/master-data/products/edit/" + id, true);
        xmlhttp.send();
    }
</script>
    
@endsection