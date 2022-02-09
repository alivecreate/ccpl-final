@extends('adm.layout.admin-index')
@section('title','Dashboard - Charotar Corporation')

@section('toast')
@include('adm.widget.toast')
@endsection

@section('custom-js')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.min.js"></script>

<script>
  $(document).ready(function() {
    $(".del-modal").click(function() {
      var delete_id = $(this).attr('data-id');
      var data_title = $(this).attr('data-title');
      var data_image = $(this).attr('data-image');

      $('.delete-form').attr('action', delete_id);
      $('.delete-title').html(data_title);
      $('.delete-data-image').attr('src', data_image);
    });
  });


  $(".slider").addClass("menu-is-opening menu-open");
  $(".slider a").addClass("active-menu");
</script>
<script type="text/javascript">
  $(".row_position").sortable({
    stop: function() {
      var selectedData = new Array();
      $('.row_position>tr').each(function() {
        selectedData.push($(this).attr("id"));
      });
      console.log(selectedData);
      updateOrder(selectedData);
    }
  });


  function updateOrder(data) {
    $.ajax({
      url: "{{url('api')}}/admin/slider/update-status",
      type: 'post',
      data: {
        position: data
      },
      success: function(result) {
        console.log(result);
      }
    })
  }

  function updateStatus($id) {
    $.ajax({
      url: "{{route('status.update')}}",
      type: 'post',
      data: {
        id: $id,
        table: 'slider'
      },
      success: function(result) {
        // console.log(result);
        location.reload();

      }
    })
  }
</script>
@endsection

@section('content')
@include('adm.widget.table-search-draggable')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add New : Banner</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
            <li class="breadcrumb-item active">Banner</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="card card-default">
        <div class="card-body">
          <div class="form-horizontal row">

            <div class="col-md-4 card card-info">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add New Banner</h3>
                  <div id="example1_wrapper">

                  </div>
                </div>

                <form method="post" enctype="multipart/form-data" class="form-horizontal" action="{{route('banner.store')}}">
                  @csrf

                  <div class="card-body p-2 pt-4">
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="hidden" class="form-control">

                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title')}}">

                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea class="form-control" name="description" placeholder="Banner Alt Text / Description">{{old('description')}}</textarea>

                        <span class="text-danger">@error('description') {{$message}} @enderror</span>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="url" class="form-control" name="url" placeholder="Banner Url" value="{{old('url')}}">

                        <span class="text-danger">@error('url') {{$message}} @enderror</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <!-- <input type="text" class="form-control" name="position" placeholder="Position" 
                        value="{{old('position')}}" required> -->

                        <select name="position"  class="form-control" required>
                          <option value="">Select Position</option>
                          <option value="home-banner-1">Home Banner 1</option>
                          <option value="home-banner-2">Home Banner 2</option>
                          <option value="home-banner-3">Home Banner 3</option>
                          <option value="home-banner-4">Home Banner 4</option>
                          <option value="home-banner-5">Home Banner 5</option>
                          <option value="left-banner-1">Left Sidebar 1</option>
                          <option value="led-banner-sidebar">LED Page (Left Sidebar)</option>
                          <option value="left-banner-block1">LED Page (block1)</option>
                          <option value="left-banner-block2">LED Page (block2)</option>
                          <option value="left-banner-block3">LED Page (block3)</option>
                        </select>

                        <span class="text-danger">@error('url') {{$message}} @enderror</span>
                      </div>
                    </div>


                    <div class="form-group row">

                      <div class="col-sm-12">
                        <input type="file" class="" name="image" placeholder="Slider Image" required accept="image/png,image/jpeg" required/>
                        <br>
                        <span class="text-danger col-12">@error('image') {{$message}} @enderror</span>

                        <p class="text-danger">
                          Image size for 1, 2( 910Px X 360Px ).<br>
                          Image size for 3, 4 ,5( 600Px X 300Px ).<br>
                          Supportable Format: JPG,JPEG,PNG
                        </p>

                      </div>
                    </div>



                    <!-- <div class="form-group">
                      <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" class="custom-control-input status-switch" 
                          name="status" value="0" id="customSwitch1">
                        <label class="custom-control-label float-right" for="customSwitch1">Status</label>
                      </div>
                    </div> -->


                    <!-- <div class="form-check">
                      <input type="checkbox" class="form-check-input  pull-right" name="status" id="exampleCheck1" checked />

                      <h5> <span class="badge badge-success">Active</span></h5> 
                    </div>-->

                  </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-info">Save Banner</button>
              </div>
              </form>
            </div>


            <div class="col-md-8 card card-info">
              <div class="card card-dark">
                <div class="card-header">
                  <h3 class="card-title">Banner List</h3>
                </div>

                <div class="card">
                  <div class="card-body">
                    <table id="example2 " class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Descriptions</th>
                          <th>Position</th>
                          <!-- <th>Status</th> -->
                          <th>Action</th>
                        </tr>   
                      </thead>

                      <tbody class="">
                        @foreach($banners as $key => $banner)
                        <tr id="{{$banner->id}}">
                          <td>{{$banner->banner_no}}</td>
                          <td><img width="100" src="{{url('web')}}/media/sm/{{$banner->image}}"></td>
                          <td>{{$banner->title}}</td>
                          <td>{{$banner->description}}</td>
                          <td>{{$banner->position}}</td>
<!--                           
                          <td>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="status" value="0" id="exampleCheck1" onClick="updateStatus({{$banner->id}})" @if($slider->status == 1)checked
                              @endif
                              @if(old('status'))checked
                              @endif
                              />
                              @if($banner->status == 0)<p class="badge badge-danger">Inactive</p>@else<p class="badge badge-success">Active</p>@endif
                          </td> -->

                  </div>


                  <td>

                    <!-- <a href="{{route('banner.edit',$banner->id)}}" class="btn btn-xs btn-info float-left mr-2" 
                    title="Edit banner"><i class="far fa-edit"></i></a> -->
                    
                    {{-- <a href="{{route('banner-image.edit',$banner->id)}}" class="btn btn-xs btn-info float-left mr-2" title="Upload banner Images"><i class="far fa-edit"></i></a> --}}
                    <button class="btn btn-xs btn-danger del-modal float-left" title="Delete banner" data-id="{{url('admin')}}/banner/{{$banner->id}}" data-image="{{url('web')}}/media/sm/{{ $banner->image}}" data-title="{{ $banner->title}}" data-toggle="modal" data-target="#modal-default"><i class="fas fa-trash-alt"></i>
                    </button>


                  </td>

                  </tr>
                  @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Descriptions</th>
                      <th>Position</th>

                      <!-- <th>Status</th> -->
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  </table>

                </div>
              </div>

            </div>


          </div>

        </div>


      </div>
  </section>
</div>


<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete Banner</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>Banner Name</label>
        <h5 class="modal-title delete-title">Delete Banner</h5>
        <img class="col-md-8 modal-title delete-data-image" src="">
      </div>
      <div class="modal-footer justify-content-between d-block ">

        <form class="delete-form float-right" action="" method="POST">
          @method('DELETE')
          @csrf
          <button type="button" class="btn btn-default mr-4" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger float-right" title="Delete Record"><i class="fas fa-trash-alt"></i> Delete</button>


        </form>
      </div>
    </div>
  </div>
</div>


@endsection