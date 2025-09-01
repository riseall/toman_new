@section('content')
    <h1>Halo ini Dashboard Super Admin</h1>
    <a href="{{ route('user.index') }}" class="btn btn-success">User</a>
    <a href="{{ route('product.show') }}" class="btn btn-success">Product</a>
    <a href="{{ route('permintaan.index') }}" class="btn btn-success">Permintaan</a>
@endsection
