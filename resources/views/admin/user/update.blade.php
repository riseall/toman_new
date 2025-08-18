<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="updateUserLabel{{ $user->id }}">Edit User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control"
                            value="{{ old('username', $user->username) }}">
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="first_name" class="form-label">Nama Depan</label>
                        <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}">
                        @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Nama Belakang</label>
                        <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}">
                        @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Telepon</label>
                        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>

                    {{-- @can('assign roles') --}}
                    <div class="mb-3">
                        <label for="role" class="form-label">Role:</label>
                        <select class="form-select @error('role') is-invalid @enderror" id="role" name="role">
                            <option value="">-- Pilih Role --</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}"
                                    {{ old('role', $userRole) == $role->name ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- @else
                        <p class="text-muted">Anda tidak memiliki izin untuk mengubah role pengguna.</p>
                    @endcan --}}

                    <div class="mb-3 form-check form-switch">
                        <label for="is_active_{{ $user->id }}">Active</label>
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" name="is_active"
                            id="is_active_{{ $user->id }}" value="1"
                            {{ old('is_active', $user->is_active ?? 1) ? 'checked' : '' }}>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('user.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
