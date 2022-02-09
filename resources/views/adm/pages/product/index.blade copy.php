@extends('adm.layout.admin-index')
@section('title','Product List')

@section('toast')
@include('adm.widget.toast')
@endsection

@section('custom-js')
<!-- DataTables  & Plugins -->
<script src="{{url('adm')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('adm')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('adm')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('adm')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('adm')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('adm')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('adm')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{url('adm')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{url('adm')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{url('adm')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('adm')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('adm')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script>
  $(document).ready(function() {
    $(".del-modal").click(function() {
      var delete_id = $(this).attr('data-id');
      var data_title = $(this).attr('data-title');

      $('.delete-form').attr('action', delete_id);
      $('.delete-title').html(data_title);
    });
  });


  $(".product").addClass("menu-is-opening menu-open");
  $(".product a").addClass("active-menu");

  function updateStatus($id) {
    $.ajax({
      url: "{{route('status.update')}}",
      type: 'post',
      data: {
        id: $id,
        table: 'product'
      },
      success: function(result) {
        // console.log(result);
        location.reload();

      }
    })
  }

  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>

@if(isset(getParentCategory($current_cat->id)['category']))
<?php $finalSlug = getParentCategory($current_cat->id)['category']->slug . '/';
$mainCategorySlug = $finalSlug;
?>
@endif

@if(isset(getParentCategory($current_cat->id)['subcategory']))
<?php $finalSlug = $finalSlug . getParentCategory($current_cat->id)['subcategory']->slug . '/';
$subCategorySlug = $finalSlug;
// dd($subCategorySlug);

?>
@endif

@if(isset(getParentCategory($current_cat->id)['subcategory2']))
<?php $finalSlug = $finalSlug . getParentCategory($current_cat->id)['subcategory2']->slug . '/';
$subCategory2Slug = $finalSlug;
// dd($subCategory2Slug);
?>
@endif

@endsection


@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
            <li class="breadcrumb-item active">Product</li>

            <a href="{{route('product.create')}}" class="btn btn-success btn-sm ml-2"><i class="fa fa-plus" aria-hidden="true"></i>
              &nbsp;&nbsp;Add New Product </a>
          </ol>
        </div>
      </div>
    </div>
  </section>


  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <div class="card">

            <div class="card-body table-responsive p-0">

              <form action="{{route('item.bulk-delete')}}" method="post">
                <input type="hidden" name="type" value="product">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>
                        <input type="checkbox" class="checkAll" name="status" id="checkAll" />

                      </th>

                      <th>ID</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th width="200">Category</th>
                      <th width="200">Sub Category</th>
                      <th width="200">Images</th>
                      <th>Status</th>
                      <th width="150">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $i => $product)


                    <tr>
                      <td>
                        <input type="checkbox" class="checkList" name="checkList[]" id="checkList" value="{{$product->id}}" />
                      </td>

                      <td>{{++$i}}</td>
                      @if(isset($product->image))
                      <td><img class="img-circle elevation-2 object-fit" height="30" width="30" src="{{asset('web')}}/media/xs/{{$product->image}}"></td>
                      @else

                      <td><img class="img-circle elevation-2" height="30" width="30" src="{{asset('adm')}}/img/no-item.jpeg"></td>
                      @endif
                      <td>{{$product->name}}</td>
                      <td>{{getParentCategory($product->category_id)['category']->name}}</td>


                      <td>
                        {{getParentCategory($product->category_id)['subcategory']->name}}
                        <h5>
                          @if(getParentCategory($product->category_id)['category'])
                          <span class='badge badge-primary p-1'>{{getParentCategory($product->category_id)['category']->name}}</span>
                          @endif

                          @if(getParentCategory($product->category_id)['subcategory'])
                          <span class='badge badge-danger p-1'>{{getParentCategory($product->category_id)['subcategory']->name}}</span>
                          @endif


                          @if(getParentCategory($product->category_id)['subcategory2'])
                          <span class='badge badge-warning p-1'>{{getParentCategory($product->category_id)['subcategory2']->name}}</span>
                          @endif
                        </h5>

                      </td>
                      <td>
                        <a href="{{url('admin')}}/photo?page=manage&item_id={{$product->id}}">Image</a>
                      </td>
                      <td>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input  pull-right" name="status" id="exampleCheck1" onClick="updateStatus({{$product->id}})" @if($product->status == 1)checked
                          @endif
                          @if(old('status'))checked
                          @endif
                          /}>

                          @if($product->status == 0)
                          <h5 for="status"> <span class="badge badge-danger">Inactive</span></h5>@else<h5> <span class="badge badge-success">Active</span></h5>@endif
                      </td>
            </div>
            </td>
            <td>

              @if(isset(getParentCategory($product->category_id)['category']))
              <?php $finalSlug = getParentCategory($product->category_id)['category']->slug . '/';
              // echo $mainCategorySlug = $finalSlug;
              ?>
              @endif

              @if(isset(getParentCategory($product->category_id)['subcategory']))
              <?php $finalSlug = $finalSlug . getParentCategory($product->category_id)['subcategory']->slug . '/';
              $subCategorySlug = $finalSlug;
              // echo($subCategorySlug);

              ?>
              @endif

              @if(isset(getParentCategory($product->category_id)['subcategory2']))
              <?php $finalSlug = $finalSlug . getParentCategory($product->category_id)['subcategory2']->slug . '/';
              $subCategory2Slug = $finalSlug;
              // echo($subCategory2Slug);
              ?>
              @endif

              <a target="_blank" href="{{url('')}}/{{$finalSlug}}{{$product->slug}}" class="btn btn-xs btn-warning float-left mr-2" title="Upload product Images">
                <i class="fa fa-eye"></i></a>

              <a href="{{route('product.edit',$product->id)}}" class="btn btn-xs btn-info float-left mr-2" title="Edit product"><i class="far fa-edit"></i></a>



              <button type="button" class="btn btn-xs btn-danger del-modal float-left" title="Delete product" data-id="{{url('admin')}}/product/{{$product->id}}" data-title="{{ $product->name}}" data-toggle="modal" data-target="#modal-default"><i class="fas fa-trash-alt"></i>
              </button>




            </td>
            </tr>
            @endforeach

            </tbody>
            <tfooter>
              <tr>
                <td colspan="8"><button type="submit" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>

            </tfooter>
            </table>

            </form>
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
        <h4 class="modal-title">Delete product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>Product Name</label>
        <h5 class="modal-title delete-title">Delete Product</h5>
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