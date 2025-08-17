@extends('layouts.app')

@section('title', 'Data Home')

@section('content')

<div class="container">
    <a href="/admin/slider/create" class="btn btn-primary mb-3">Add Data</a>

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
                    <th>Publish</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1
                @endphp
                @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$slider->title}}</td>
                    <td>{{$slider->publish}}</td>
                    <td>
                        <img src="/image/{{$slider->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <div style="display: flex; gap: 10px;">
                            <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                            <button type="button" class="btn btn-danger"
                                onclick="confirmDelete(`{{ route('slider.destroy', ['slider' => $slider->id]) }}`)">
                                DELETE
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
</script>

@endsection