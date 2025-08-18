<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addProductLabel">Tambah Produk</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form action="{{ route('product.add') }}" method="POST" class="mb-4">
                    @csrf
                    <div class="mb-3">
                        <label for="prod_name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="prod_name" name="prod_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="prod_bets_size" class="form-label">Bets Size</label>
                        <input type="text" class="form-control" id="prod_bets_size" name="prod_bets_size" required>
                    </div>
                    <div class="mb-3">
                        <label for="prod_exp_yr" class="form-label">ED Product</label>
                        <input type="text" class="form-control" id="prod_exp_yr" name="prod_exp_yr" required>
                    </div>
                    <div class="mb-3">
                        <label for="prod_package" class="form-label">Kemasan</label>
                        <input type="text" class="form-control" id="prod_package" name="prod_package" required>
                    </div>
                    <div class="mb-3 form-check form-switch">
                        <label for="prod_is_active">Active</label>
                        <input class="form-check-input" type="checkbox" name="prod_is_active" id="prod_is_active"
                            value="1" checked>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah Produk</button>
                </form>
            </div>
        </div>
        {{-- <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div> --}}
    </div>
</div>
