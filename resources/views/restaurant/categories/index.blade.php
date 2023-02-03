@extends('restaurant.layouts.app')
@section('title','Categories')
@section('content')
    <!-- START - DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 justify-content-between">
            <div class="row justify-content-between align-items-center">
                <h6 class="ml-3 font-weight-bold">Restaurants Categories</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                <tr role="row">
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 145px;">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 101px;">Type</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 43px;">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 85px;">Image</th>
{{--                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 85px;">Action</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $res)
                                    <tr class="odd">
                                        <td class="sorting_1">{{$res->name}}</td>
                                        <td>{{$res->categoryable_type}}</td>
                                        <td>
{{--                                            <input data-id="{{$res->id}}" id="check" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $res->status ? 'checked' : '' }}>--}}

                                       </td>
                                        <td><img src="{{asset($res->image)}}" class="embed-responsive"></td>
{{--                                        <td>--}}
{{--                                            <div class="btn-group" role="group" aria-label="Basic example">--}}
{{--                                                <button type="button" data-id="{{$res}}" class="btn btn-sm btn-success edit-category-btn"><i class="fa fa-pencil-alt"></i></button>--}}
{{--                                                <button type="button" data-id="{{$res->id}}" class="btn btn-sm btn-danger delete-category-btn"><i class="fa fa-trash-alt"></i></button>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - DataTales Example -->

    <!-- START - Add Restaurant Modal -->
    <div class="modal fade bd-example-modal-lg" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form  class="add-category" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="input-label" for="exampleFormControlInput1">Name</label>
                                    <input type="text" name="name" class="form-control form-control-sm" placeholder="EX : Desi">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="input-label" for="exampleFormControlInput1">Type</label>
                                    <input type="text" name="type" class="form-control form-control-sm" placeholder="EX : Pakistani">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-6">
                                <label></label><small style="color: red">* </small>
                                <div class="custom-file">
                                    <input type="file" name="image" id="customFileEg1" class="custom-file-input" onchange="editLoadFile(event)">
                                    <label class="custom-file-label" for="customFileEg1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <center>
                                        <img class="mt-3 restaurant-logo" style="width: 30%;border: 1px solid; border-radius: 10px;"
                                             id="output1" src="{{asset('assets/web/images/Patty Burger.jpg')}}" alt="image"/>
                                    </center>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END - Add Restaurant Modal -->

    <!-- START - Edit Restaurant Modal -->
    <div class="modal fade bd-example-modal-lg" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form  class="edit-category" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="input-label" for="exampleFormControlInput1">Name</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Enter Category Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="input-label" for="exampleFormControlInput1">Type</label>
                                    <input type="text" name="type" id="type" class="form-control form-control-sm" placeholder="Enter Category Type">
                               <input type="hidden" name="category_id" id="category-id">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label></label><small style="color: red">* </small>
                                <div class="custom-file">
                                    <input type="file" name="image" id="customFileEg1" class="custom-file-input" onchange="loadFile(event)">
                                    <label class="custom-file-label" for="customFileEg1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <center>
                                        <img class="mt-3 category-logo" style="width: 30%;border: 1px solid; border-radius: 10px;"
                                             id="output" src="{{asset('assets/web/images/Patty Burger.jpg')}}" alt="image"/>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary update-restaurant" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END - Edit Restaurant Modal -->

    <!-- START - Delete Restaurant Modal -->
    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button"  id="ok_button"  class="btn btn-danger ok_button">OK</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Delete Restaurant Modal -->
@endsection
@section('script')
    <script>
        /* START - AJAX code add/edit/delete */
        $(document).ready(function(){
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                // blockUi();
                $.ajax({
                    type:'POST',
                    dataType:'json',
                    url:'{{route('restaurants.category.changeStatus')}}',
                    data:{'_token': '{{ csrf_token() }}','status': status, 'user_id': user_id},
                    // cache: false,
                    // contentType: false,
                    // processData: false,
                    success:function(data) {
                        // $.unblockUI();
                        if(data.status === 1){
                            successMsg(data.message);
                            // $('#addUserModal').modal('hide');
                            // $('#addRestaurantModal').modal('toggle');
                            // window.location.href = data.url;
                            // window.location.reload();
                        }
                        if(data.status === 0){
                            errorMsg(data.message);
                        }
                    },
                    error:function(data) {
                        console.log('error');
                        // $.unblockUI();
                    }
                });
            });
            /* START - AJAX code ADD restaurant */
            $('.add-category').on('submit',function (e){
                e.preventDefault();
                var data = $('.add-category');
                data = new FormData(data[0]);
                blockUi();
                $.ajax({
                    type:'POST',
                    dataType:'json',
                    url:'{{route('restaurants.category.store')}}',
                    data:data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(data) {
                        $.unblockUI();
                        if(data.status === 1){
                            successMsg(data.message);
                            $('#addCategoryModal').modal('hide');
                            // $('#addRestaurantModal').modal('toggle');
                            // window.location.href = data.url;
                            window.location.reload();
                        }
                        if(data.status === 0){
                            errorMsg(data.message);
                        }
                    },
                    error:function(data) {
                        console.log('error');
                        $.unblockUI();
                    }
                });
            });
            /* END - AJAX code ADD restaurant */

            /* START - AJAX code EDIT restaurant */
            $('.edit-category-btn').click(function (e) {
                //--- get object & parse into Javascript object
                var data = JSON.parse($(this).attr('data-id'));

                $('#editCategoryModal').modal('show');

                //--- set values from that object
                $('#name').val(data.name);
                $('#type').val(data.categoryable_type);
                $('#category-id').val(data.id);
                $('.category-logo').attr("src",'{{asset('')}}'+data.image);

                //--- EDIT AJAX Code
                $('.edit-category').submit(function (e) {
                    e.preventDefault();
                    var data = $('.edit-category');
                    data = new FormData(data[0]);

                    /*--- START - Update Record Ajax code */
                    blockUi();
                    $.ajax({
                        type: 'POST',
                        url: '{{route('restaurants.category.update')}}',
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data) {
                            $.unblockUI();
                            if (data.status === 1) {
                                successMsg(data.message);
                                $('#editCategoryModal').modal('hide');
                                window.location.reload();
                            }
                            if (data.status === 0) {
                                errorMsg(data.message);
                            }
                        },
                        error: function (data) {
                            console.log('error');
                            $.unblockUI();
                        }
                    });
                    /*--- END - Update Record Ajax code */
                });
            });
            /* END - AJAX code EDIT restaurant */

            /* START - AJAX code DELETE restaurant */
            var data_id;
            $('.delete-category-btn').click(function (e) {
                //--- get object & parse into Javascript object
                data_id = JSON.parse($(this).attr('data-id'));
                $('#confirmModal').modal('show');
            });
            //--- DELETE AJAX Code
            $('#ok_button').click(function(){
                var data = { "_token": "{{@csrf_token()}}", "data_id": data_id };
                blockUi();
                $.ajax({
                    type:'POST',
                    url:'{{route('restaurants.category.delete')}}',
                    data:data,
                    success:function (data){
                        $.unblockUI();
                        if(data.status === 1){
                            successMsg(data.message);
                            $('#confirmModal').modal('hide');
                            window.location.reload();
                        }
                        if(data.status === 0){
                            errorMsg(data.message);
                        }
                    },
                    error:function (data){
                        console.log('error');
                        $.unblockUI();
                    }
                });
            });
            /* END - AJAX code DELETE restaurant */


        });
        /*IMAGE*/
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

        var editLoadFile = function(event) {
            var output1 = document.getElementById('output1');
            output1.src = URL.createObjectURL(event.target.files[0]);
            output1.onload = function() {
                URL.revokeObjectURL(output1.src) // free memory
            }
        };
        /* END - AJAX code add/edit/delete */
    </script>
@endsection
