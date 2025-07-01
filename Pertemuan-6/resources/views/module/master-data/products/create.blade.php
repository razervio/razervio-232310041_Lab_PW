<div class="card border-0">
    <div class="card-header bg-white border-0 px-4 py-3">
        <h5 class="fw-bold m-0">Form Product</h5>
    </div>

    <div class="card-body pt-0">
        @if ($errors->any())
            <div class="alert alert-danger mb-5">
                <strong>Error!</strong><br>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success mb-5">
                <p class="mb-0">{{ $message }}</p>
            </div>
        @endif

        <form action="{{ url('/master-data/products') }}" method="post" autocomplete="off" id="form-product">
            @csrf

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="hidden" class="form-control id" name="id" />
                <input type="text" class="form-control name" name="name" />
                <div class="form-text text-danger"></div>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control description" name="description"></textarea>
                <div class="form-text text-danger"></div>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control price" name="price" />
                </div>
                <div class="form-text text-danger"></div>
            </div>

            <div class="mb-3">
                <label class="form-label">Active</label>
                <div class="d-flex justify-content-start align-items-center">
                    <label class="me-2">
                        <input type="radio" class="is_active_y" name="is_active" value="1" /> Yes
                    </label>
                    <label class="me-2">
                        <input type="radio" class="is_active_n" name="is_active" value="0" /> No
                    </label>
                </div>
                <div class="form-text text-danger"></div>
            </div>

            <div class="text-end">
                <button class="btn btn-danger py-2 px-4" type="reset">Clear</button>
                <button class="btn btn-primary py-2 px-4" type="submit">Save changes</button>
            </div>
        </form>
    </div>
</div>