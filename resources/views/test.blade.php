<!DOCTYPE html>
<html>

<head>
    <title>sangcahaya.id</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container" id="appVue">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
                <button class="btn btn-sm btn-primary" v-on:click.prevent="tambahData">Tambah Data</button>
                <br>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="item in data">
                                <tr>
                                    <td>@{{ item . name }}</td>
                                    <td>@{{ item . email }}</td>
                                    <td>@{{ item . created_at }}</td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalTambahData" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Warning</h4>
                </div>

                <div class="modal-body">
                    <form name="myform" @submit.prevent="insertData" id="myForm">
                        <div class="form-group">
                            <label for="category_name">Name</label>
                            <input type="text" class="form-control" name="nama" placeholder="Enter Category Name">
                        </div>

                        <div class="form-group">
                            <label for="category_description">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Category Name">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-sm btn-flat" type="button">Add</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        var vue = new Vue({
            el: "#appVue",
            data: {
                data: [],
                nama:null,
                email: null
            },
            mounted() {
                this.getData();
            },
            methods: {
                getData: function() {
                    var url = "{{ url('getData') }}";
                    axios.get(url)
                        .then(resp => {
                            console.log(resp.data);
                            this.data = resp.data;
                        })
                        .catch(err => {
                            console.log(err);
                        })
                        .finally(() => {
                        })
                },
                tambahData: function() {
                    $('#modalTambahData').modal('show');
                },
                insertData() {
                var formData = new FormData(document.getElementById("myForm"));
                let instance = this;
                console.log('masuk');
                // axios.post('addData', formData)
                //     .then(function (response) {
                //         console.log(formData);
                //         // instance.$router.push("/categories");
                //     })
                //     .catch(function (error) {
                //         console.log(error);
                //     });
            }
            }
        });
    </script>
</body>

</html>
