<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="updateProductLabel{{ $product->id }}">Edit Produk</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form action="{{ route('product.update', $product->id) }}" method="POST" class="mb-4">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="prod_name_{{ $product->id }}" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="prod_name_{{ $product->id }}" name="prod_name"
                            value="{{ $product->prod_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="prod_bets_size_{{ $product->id }}" class="form-label">Bets Size</label>
                        <input type="text" class="form-control" id="prod_bets_size_{{ $product->id }}"
                            name="prod_bets_size" value="{{ $product->prod_bets_size }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="prod_exp_yr_{{ $product->id }}" class="form-label">ED Product</label>
                        <input type="text" class="form-control" id="prod_exp_yr_{{ $product->id }}"
                            name="prod_exp_yr" value="{{ $product->prod_exp_yr }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="prod_package_{{ $product->id }}" class="form-label">Kemasan</label>
                        <input type="text" class="form-control" id="prod_package_{{ $product->id }}"
                            name="prod_package" value="{{ $product->prod_package }}" required>
                    </div>
                    <div class="mb-3 form-check form-switch">
                        <label for="prod_is_active_{{ $product->id }}">Active</label>
                        <input class="form-check-input" type="checkbox" name="prod_is_active"
                            id="prod_is_active_{{ $product->id }}" {{ $product->prod_is_active ? 'checked' : '' }}>
                    </div>
                    <button type="submit" class="btn btn-success">Update Produk</button>
                </form>
            </div>
        </div>
    </div>
</div>
