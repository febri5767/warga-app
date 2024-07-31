@extends('layouts.master')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <div class="d-flex justify-content-around">
                <h4>Data Warga</h4>
            </div>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <p>{{ $message }}</p>
            @endif
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="/warga/tambah" class="btn btn-success"><i class="fas fa-user-plus"></i> Tambah Warga</a>

                {{-- <div class="input_search">
                    <input id="input_search" class="form-control form-control-sm" type="text" placeholder="Nama">
                </div> --}}
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th>Pekerjaan</th>
                    <th>Golongan Darah</th>
                    <th>Action</th>
                </tr>
                @foreach ($warga as $wrg)
                    <tr>
                        <td>{{ $wrg->nama }}</td>
                        <td>{{ $wrg->tempat_lahir }}</td>
                        <td>{{ $wrg->tgl_lahir }}</td>
                        <td>
                            @foreach ($data_kelamin as $kelamin)
                                @if ($kelamin->id == $wrg->kelamin_id)
                                    {{ $kelamin->kelamin }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($data_status as $status)
                                @if ($status->id == $wrg->status_id)
                                    {{ $status->status }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($data_goldar as $goldar)
                                @if ($goldar->id == $wrg->goldar_id)
                                    {{ $goldar->goldar }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $wrg->pekerjaan }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <a href="/warga/edit/{{ $wrg->id }}" class="btn btn-primary"><i
                                        class="fas fa-user-edit"></i> Edit</a>
                                <a href="javascript:void(0)" data-url="{{ route('warga.delete', $wrg->id) }}"
                                    class="btn btn-danger delete-warga"><i class="fas fa-user-times"></i> Hapus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                {{-- <tbody id="Content"></tbody> --}}
            </table>
            {!! $warga->withQueryString()->links('pagination::bootstrap-5') !!}
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

            $(document).on('click', '.delete-warga', function() {
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
        //     // $("#input_search").on('keyup', function() {
        //     //      var nama = $(this).val();
        //     //     $.ajax({
        //     //         url: "{{ url('searchNama') }}"  + '/' + nama,
        //     //         type: "get",
        //     //         data: {
        //     //             'nama': nama
        //     //         },
        //     //         success: function(response) {
        //     //             // Callback sukses
        //     //             console.log(response); // Menampilkan respon di konsol
        //     //             $('#Content').html(response);
        //     //         },
        //     //         error: function(error) {
        //     //             // Callback kesalahan
        //     //             alert('Terjadi kesalahan saat mengirim data');
        //     //             console.error("Error:", error);
        //     //         }
        //     //     });
        //     // });
        // });
    </script>
@endsection
