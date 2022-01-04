<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Basic Table</h2>
            <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
            <div class="text-left mt-2 mb-2">
                <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
            </div>
            <table class="table" style="margin-top: 2%">
                <thead>
                    <tr>
                        <th>Nama Data</th>
                        <th>deskripsi</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                    <tr>
                        <td>{{$item->nama_data}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <button class="btn btn-warning">Ubah</button>
                            <button style="margin-left: 2%" class="btn btn-danger"
                                onclick=deleted(<?= $item->id ?>)>Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('addData')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="data">Nama Data</label>
                        <input type="text" class="form-control" name="data" required>
                    </div>
                    <div class="form-group">
                        <label for="data">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" cols="30" rows="10" required></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    function deleted(id) {
        console.log(id);
        $.ajax({
            url: "{{url('/deletedata')}}/" + id,
            type: "delete",
            data: {
                _token: "{{ csrf_token() }}",
                id: id,
            },
            success: function (data) {
                console.log(data);
                window.location.reload(true);
            },
            error: function () {
                swal('Gagal hapus data', 'error');
            }
        });
    }

</script>
