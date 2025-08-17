@extends('layouts.app')

@section('title', 'Data Publication')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/admin/publication/create" class="btn btn-primary">Add Data</a>

        <!-- Form dan Icon Search -->
        <div class="d-flex align-items-center" style="gap: 10px;">
            <!-- Input Search (Hidden by default) -->
            <form action="{{ url('/admin/publication') }}" method="GET" id="searchForm" class="d-none">
                <div class="input-group">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                        placeholder="Cari judul atau deskripsi..." style="width: 250px;">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </div>
            </form>

            <!-- Tombol Icon Search -->
            <button class="btn btn-outline-secondary" id="toggleSearch">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Success</strong>
        <p>{{$message}}</p>
    </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hove table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = ($publications->currentPage() - 1) * $publications->perPage() + 1;
                @endphp
                @foreach ($publications as $publication)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$publication->title}}</td>
                    <td>{{$publication->description}}</td>
                    <td>
                        <img src="/image/{{$publication->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <div style="display: flex; gap: 10px;">
                            <a href="{{ route('publication.edit', $publication->id) }}" class="btn btn-warning">Edit</a>
                            <button type="button" class="btn btn-danger"
                                onclick="confirmDelete(`{{ route('publication.destroy', ['publication' => $publication->id]) }}`)">
                                DELETE
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-end">
        {{ $publications->withQueryString()->links('pagination::bootstrap-5') }}
    </div>
</div>

<!-- Modal Konfirmasi Delete -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="confirmDeleteLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus publikasi ini? Tindakan ini tidak dapat dibatalkan.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk Modal Delete -->
<script>
    function confirmDelete(url) {
        document.getElementById('deleteForm').setAttribute('action', url);
        $('#confirmDeleteModal').modal('show');
    }
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('toggleSearch');
        const form = document.getElementById('searchForm');

        toggleBtn.addEventListener('click', function() {
            form.classList.toggle('d-none');
        });

        // Warna random aktif pagination tetap
        const activePage = document.querySelector('.page-item.active .page-link');
        if (activePage) {
            const colors = ['#ff7a33', '#17a2b8', '#27245D', '#E83036', '#C5C5C5'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            activePage.style.backgroundColor = randomColor;
            activePage.style.borderColor = randomColor;
        }
    });
</script>

@endsection
