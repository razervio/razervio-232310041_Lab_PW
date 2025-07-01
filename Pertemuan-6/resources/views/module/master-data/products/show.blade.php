@extends('templates.layouts')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Back Button -->
            <div class="mb-3">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Products
                </a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-8 col-xxl-8">
            <div class="card">
                <div class="card-body">
                    <div class="info">
                        <h1 class="display-6 mb-3">{{ $products->name ?? 'No Name' }}</h1>
                        <h3 class="text-success mb-4">
                            Rp {{ $products->price ? number_format($products->price, 0, ',', '.') : '0' }}
                        </h3>

                        <div class="border-top border-bottom py-3 mt-4 mb-3">
                            <h5 class="mb-0">Description</h5>
                        </div>
                        <div class="description">
                            <p class="text-muted">
                                {{ $products->description ?? 'No description available' }}
                            </p>
                        </div>

                        <!-- Product Status -->
                        <div class="mt-4">
                            <span class="badge {{ $products->is_active ? 'bg-success' : 'bg-danger' }} fs-6">
                                {{ $products->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </div>

                        <!-- Product Image (if exists) -->
                        @if($products->image)
                        <div class="mt-4">
                            <h6>Product Image:</h6>
                            <img src="{{ asset('storage/' . $products->image) }}" 
                                 alt="{{ $products->name }}" 
                                 class="img-fluid rounded" 
                                 style="max-width: 300px;">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-xxl-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Product Information</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted">Created at</small>
                        <p class="mb-2">
                            {{ $products->created_at ? $products->created_at->format('d M Y, H:i') : 'Unknown' }}
                        </p>
                        
                        <small class="text-muted">Last Updated at</small>
                        <p class="mb-3">
                            {{ $products->updated_at ? $products->updated_at->format('d M Y, H:i') : 'Unknown' }}
                        </p>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button onclick="EditItem('{{ $products->id }}')" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                        <button onclick="RemoveItem('{{ $products->id }}')" class="btn btn-danger">
                            <i class="bi bi-trash"></i> Remove
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
        // Redirect to edit page or go back to index with edit modal
        window.location.href = "{{ route('products.index') }}";
        // You can also implement inline editing here if needed
    }
</script>

@endsection