@extends('adm.layout.admin-index')
@section('title','Manage:- Product')

@section('toast')
@include('adm.widget.toast')


@endsection

@section('custom-js')


<script>
  $('.delete_field').on('click', function() {
    $(this).parent('.image-block').remove();
  });

	
  $( ".row_position" ).sortable({
      stop: function() {
			var selectedData = new Array();
            $('.row_position>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
  });

  function updateOrder(data) {
  $.ajax({
      url:"{{url('api')}}/admin/item/update-item-priority",
      type:'post',
      data:{position:data, table: 'media'},
      success:function(result){
        console.log(result);
      }
  })
}

  $('.category_parent_id').on('change', function() {
    var parent = $(this).find(':selected').val();
    alert(parent);

    $.get(`{{url('api')}}/get/getSubCategories/` + parent, {
        category_parent_id: parent
      })

      .done(function(data) {
        // alert(JSON.stringify(data));

        if (JSON.stringify(data.length) == 0) {
          $('.sub_category_parent_id').html('<option value=>Select Sub Category</option>');
        } else {
          $('.sub_category_parent_id').empty();
          $('.sub_category_parent_id').html('<option value="">Select Sub Category</option>');
          for (var i = 0; i < JSON.stringify(data.length); i++) {
            $('.sub_category_parent_id').append('<option value=' + JSON.stringify(data[i].id) + '>' + data[i].name + '</option>')
          }
        }
      });
    $('.category_id').val(parent);

  });


  $('.sub_category_parent_id').on('change', function() {
    var parent = $(this).find(':selected').val();

    $.get(`{{url('api')}}/get/getDepartment/` + parent, {
        sub_category_parent_id: parent
      })
      .done(function(data) {
        // alert(JSON.stringify(data));

        if (JSON.stringify(data.length) == 0) {
          $('.subcategory2_id').html('<option value=>Select Sub Category2</option>');
        } else {
          $('.subcategory2_id').empty();
          $('.subcategory2_id').html('<option value="">Select Sub Category2</option>');
          for (var i = 0; i < JSON.stringify(data.length); i++) {
            $('.subcategory2_id').append('<option value=' + JSON.stringify(data[i].id) + '>' + data[i].name + '</option>')
          }
        }
      });

    $('.category_id').val(parent);

  });

  $('.subcategory2_id').on('change', function() {
    var parent = $(this).find(':selected').val();
    $('.category_id').val(parent);

  });


  $(".product").addClass("menu-is-opening menu-open");
  $(".product a").addClass("active-menu");

</script>

<script>
  var dataCounter = 1;
  $('.add-more').click(function() {
    // alert('text');

    var imageBlockCode = $('.image-container').html();

    dataCounter = Number(dataCounter) + 1;


    var data = ` 
        <div class="row col-sm-12 p-0 image-block mb-3">
            <div class="col-sm-4">
                <input type="file" class="image" name="image[]"   accept="image/png,image/jpeg">
            </div>

            <div class="col-sm-2">
                <input type="text" class="form-control title" name="title[]" placeholder="Title">
            </div>

            <div class="col-sm-2 p-0">
                <input type="text" class="form-control alt" name="alt[]" placeholder="Alt Text">
            </div>

            <div class="col-sm-3 ">
                <input type="text" class="form-control youtube_embed" name="youtube_embed[]" placeholder="Video Url">
            </div>


            <div class="col-sm-1 p-0 delField" style="margin: auto;">
              <button class="btn btn-sm btn-danger ml-3 delField" type="button">X</button>
            </div>

        </div>
        `;

    $('.res').append(data);

  });


  async function updateProductImage(e) {
    e.preventDefault();


    const formData = new FormData();
    formData.append('image_alt', e.target.image_alt.value);
    formData.append('image_title', e.target.image_title.value);

    axios.post(GLOBAL.API + 'media/update-product-image', formData)
      .then(res => {
        if (res.data == 'success') {
          // alert('1');
          toastr.success('Field Updated...')
          getMedias();
          console.log('done');
        } else if (res.data == 'not-exists') {
          alert('0');

          console.log('file Already deleted');
        }
      })
  }

  $(".update-form").submit(function(e) {
    e.preventDefault(); // prevent actual form submit
    var form = $(this);
    var url = form.attr('action'); //get submit url [replace url here if desired]
    $.ajax({
      type: "POST",
      url: url,
      data: form.serialize(), // serializes form input
      success: function(data) {
        console.log(data);

        toastr.success('Image Field Updated...');
      }
    });

  });

  $(".btnDelete").click(function(e) {
    var url = $(this).attr('data-url');
    var el = $(this);
    $.ajax({
      type: "GET",
      url: url,
      success: function(result) {

        toastr.error('Image Field Deleted...');
        el.closest('.update-form').remove().slideUp(1000);

      },
      error: function(result) {
        alert('error');
      }
    });
  });

  $('#summernote').summernote({
    placeholder: 'Photo Description Here...',
    tabsize: 2,
    height: 140
  });
</script>

@endsection
<?php
$pageType = $_GET['page'];
if ($_GET['page'] == 'add') {
  $pageTitle = "Add Photos";
} elseif ($_GET['page'] == 'manage') {
  $pageTitle = "Manage Photos";
}

?>

@section('content')

<?php
$sub_category = $_REQUEST['item_id'];

$productDetail = DB::table('products')->where('category_id', $sub_category)->first();
// dd($productDetail);
?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-6">
          <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>

            <li class="breadcrumb-item active">Manage Photos</li>

          </ol>
        </div>

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
          <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm ml-2">
            <i class="far fa-edit"></i>
              &nbsp;&nbsp;Edit Product </a>
            
              <a href="{{url('')}}/{{getMainCategoryFromProduct($product->category_id)->slug}}/{{getSubCategoryFromProduct($product->category_id)->slug}}/{{$product->slug}}" class="btn btn-warning btn-sm ml-2">
            <i class="fa fa-eye"></i>
              &nbsp;&nbsp;View Product </a>
            
            <a href="{{route('admin.photo')}}?page=list" class="btn btn-success btn-sm ml-2">
              <i class="fa fa-th-list nav-icon" aria-hidden="true"></i>
              &nbsp;&nbsp;Manage Photos </a>


            <a class="btn btn-dark btn-sm ml-1" onclick="goBack()"> ❮ Back</a>

          </ol>
        </div>
      </div>
      <div class="row mb-2">

        <div class="col-sm-6">
          <h1>Manage Photos</h1>
        </div>

      </div>
    </div>
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-body">
          <div class="form-horizontal row">

            <div class="col-md-12" style="
                        background: whitesmoke;
                        padding: 10px !important;
                    ">
              <div class="form-group row">
                <form action="" class="col-sm-12 row">

                  <label class="text-danger col-sm-12">Upload Photo Details</label>

                  <div class="col-sm-4">
                    @if(isset(getParentCategory($product->category_id)['category']))
                    <input type="text" class="form-control" name="main_category" value="{{getParentCategory($product->category_id)['category']->name}}" readonly>

                    @else

                    <select name="main_category" class="form-control category_parent_id" required>
                      <option value="">Select Main Category</option>
                      @foreach($Maincategories as $Maincategory)
                      <option value="{{$Maincategory->id}}" @if(getParentCategory($product->category_id)['category']['id']==$Maincategory->id)
                        selected
                        @endif

                        >{{$Maincategory->name}}</option>
                      @endforeach
                    </select>
                    <span class="text-danger">@error('category_id') {{$message}} @enderror</span>
                    @endif

                  </div>

                  <div class="col-sm-4">
                    @if(isset(getParentCategory($product->category_id)['subcategory']))
                    <input type="text" class="form-control" name="main_category" value="{{getParentCategory($product->category_id)['subcategory']->name}}" readonly>

                    @else

                    <input type="hidden" name="page" value="add" />
                    <select name="sub_category" class="form-control  mr-3 search-font1 sub_category_parent_id" required>
                      <option value="{{$_REQUEST['sub_category']}}">{{getCategory($_REQUEST['sub_category'])->name}}</option>
                    </select>


                    @endif
                    <span class="text-danger">@error('sub_category_parent_id') {{$message}} @enderror</span>
                  </div>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="main_category" value="{{$product->name}}" readonly>
                  </div>

                  @if(isset($_REQUEST['item_id']))
                  <div class=" mt-3 col-sm-12"></div>
                  @else
                  <button type="submit" class="btn btn-sm btn-info search_link">
                    <i class="fa fa-search" aria-hidden="true"></i> Confirm Search</button>
              </div>
              @endif

              </form>



            </div>
          </div>


        </div>

        @if(isset($_REQUEST['item_id']))

        <div class="form-horizontal row  mt-4">

          <div class="col-md-12">

            <form action={{route('upload.multiple-image')}} 
              class="col-sm-12" method="post" enctype="multipart/form-data">

              <div class="image-container col-sm-12 p-0">
                <div class="row image-block col-sm-12 mb-3 p-0" style="position: relative;
                    align-items: center;
                  ">

                  <input type="hidden" class="media_id" name="media_id" value="{{$product->id}}">
                  <input type="hidden" name="image_type" value="product">

                  <div class="col-sm-4">
                    <input type="file" class="image"
                     name="image[]" accept="image/png,image/jpeg">
                  </div>

                  <div class="col-sm-2">
                      <input type="text" class="form-control title" name="title[]" placeholder="Title">
                  </div>


                  <div class="col-sm-2">
                    <input type="text" class="form-control alt" name="alt[]" placeholder="Alt Text">
                </div>


                  <div class="col-sm-3">
                    <input type="text" class="form-control youtube_embed" name="youtube_embed[]" placeholder="Video Url">
                  </div>

                  <!-- <button type="button" class="delete_field">Delete</button> -->

                </div>

                <div class="res">

                </div>
              </div>
          </div>

          <div class="col-sm-3 pt-1" style="min-height:40px">
    <p class="text-danger">
      Image size should be( 1820Px   X   1022Px ).<br>
      Supportable Format: JPG, JPEG, PNG
    </p>
  </div>
          <div class="col-sm-9 pt-1" style="min-height:40px">

            <button class="btn btn-dark btn-sm pull-right mx-2 btn-upload" type="submit" style="font-size: 15px;padding: 1px 10px;vertical-align: middle;">
              <i class="fa fa-upload" aria-hidden="true"></i>&nbsp;&nbsp; Start Upload</button>

            <button type="button" class="add-more btn btn-primary btn-sm pull-right" style="font-size: 15px;padding: 1px 10px;vertical-align: middle;">
              <i class="fa fa-plus" aria-hidden="true"></i> &nbsp;&nbsp;Add More
            </button>

          </div>

          <hr />
        </div>



        </form>



        <div class="form-horizontal row text-center mb-3 text-center" style="
                  background: #dedede;
                  position: relative;display: flex;align-items: center;">

          <div class="col-sm-3">
            <strong>Photo</strong>
          </div>

          <div class="col-sm-2">
            <strong>Title</strong>
          </div>

          <div class="col-sm-2">
            <strong>Alt Text</strong>
          </div>

          <div class="col-sm-2">
            <strong>Video Url</strong>
          </div>

          <div class="col-sm-3">
            <strong>Action</strong>
          </div>

        </div>


        <div class="row">
          @foreach($images as $image)
          <form class="col-sm-12 update-form" action="{{route('update.multiple-image-field', $image->id)}}" 
           method="post" id="{{$image->id}}">

            @csrf
            <div class="row  col-sm-12 mb-3 text-center selected-images" style="">
            
            <div class="col-sm-3">

                  @if($image->image)
                  <img src="{{url('')}}/web/media/md/{{$image->image}}" height="130"  style="max-height:200px"/>
                  @else
                  <iframe 
                    width="200"
                    src="{{getYoutubeEmbed($image->youtube_embed)}}" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                     allowfullscreen></iframe>
                  @endif
                
                </div>

                <div class="col-sm-2">
                    <input type="text" class="form-control form-control-sm title" name="title" value="{{$image->image_title}}" 
                    placeholder="Title" >
                </div>

                <div class="col-sm-2">
                    <input type="text" class="form-control form-control-sm alt" name="alt" placeholder="Alt Text"  value="{{$image->image_alt}}" 
                     >
                </div>

                <div class="col-sm-2">
                    <input type="text" class="form-control form-control-sm youtube_embed" 
                    name="youtube_embed" placeholder="youtube_embed"  
                    value="{{$image->youtube_embed}}" 
                     >
                </div>

              <div class="col-sm-3">
                <button type="save" class="btnUpload btn btn-success btn-sm mr-2" style="font-size: 15px;padding: 1px 10px;vertical-align: middle;">
                  <i class="fa fa-floppy-o" aria-hidden="true"></i> &nbsp;&nbsp;Update Field
                </button>

                <a class="btnDelete btn btn-danger btn-sm mr-2" data-url="{{url('api')}}/media/media-delete/{{$image->id}}" style="font-size: 15px;padding: 1px 10px;vertical-align: middle;">
                  <i class="fas fa-trash-alt"></i> &nbsp;&nbsp;Delete
                </a>
              </div>

            </div>

          </form>

          @endforeach


        </div>
      </div>
    </div>
</div>
@endif





<div class="container">
          <h3 class="bg-warning pl-3">Arrange Photo Order</h3>
          <table  id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      
                    <th width="50">Order</th>
                      <th>Image</th>
                      <th width="300">Image Title</th>
                      <th width="300">Image Alt</th>
                      <th width="300">Video Url</th>
                    </tr>
                  </thead>
                  
                  <tbody  class="row_position">
                  @foreach(getSubCategoryImages($_REQUEST['item_id'], 0 , 'asc') as $image)
                      <tr id="{{$image->id}}"> 
                        <td>{{$image->item_no}}</td>
                        <td class="text-center">
                        
                  @if($image->image)
                  <img src="{{url('')}}/web/media/md/{{$image->image}}" height="130" style="max-height:200px"/>
                  @else
                  <iframe 
                    width="200"
                    src="{{getYoutubeEmbed($image->youtube_embed)}}" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                     allowfullscreen></iframe>
                  @endif
                  
                        </td>
                        <td>{{$image->image_title}}</td>
                        <td>{{$image->image_alt}}</td>
                        <td class=" text-center">{!! html_entity_decode($image->youtube_embed) !!}</td>
                        </tr>
                    @endforeach
                      </tbody>
                  </table>
        
        
                  </div>
                  </div>
          </div>
      </div>

</section>
</div>

@endsection