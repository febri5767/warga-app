@extends('layouts.master')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <div class="d-flex justify-content-around">
                <h4>Data User</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-3 ">
                <a href="/users/tambah" class="btn btn-success"><i class="fas fa-user-plus"></i> Tambah User</a>
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nomor HP</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>

                @foreach ($users as $usr)
                    <tr>
                        <td>{{ $usr->name }}</td>
                        <td>{{ $usr->username }}</td>
                        <td>{{ $usr->email }}</td>
                        <td>{{ $usr->nomer_hp }}</td>
                        <td>{{ $usr->level }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <a href="/users/edit/{{ $usr->id }}" class="btn btn-primary"><i
                                        class="fas fa-user-edit"></i> Edit</a>
                                <a href="javascript:void(0)" data-url="{{ route('users.delete', $usr->id) }}" class="btn btn-danger delete-user"><i class="fas fa-user-times"></i> Hapus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '.delete-user', function() {
                var dataURL = $(this).data('url');
                var trObj = $(this);

                if (confirm("Apakah anda yakin akan menghapus?") == true) {
                    $.ajax({
                        url: dataURL,
                        type: 'delete',
                        dataType: 'json',
                        success: function(data) {
                            trObj.parents("tr").remove();
                        }
                    });
                }
            });
        });
    </script>
@endsection
