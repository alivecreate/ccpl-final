@extends('adm.layout.admin-index')
@section('title','Add:- Product')

@section('toast')
@include('adm.widget.toast')
@endsection

@section('custom-js')


<script>
  $('.category_parent_id').on('change', function() { 
    var parent = $(this).find(':selected').val();
    // alert(parent);

    $.get(`{{url('api')}}/get/getPetaKacheri/` + parent, {
        category_parent_id: parent
      })
      .done(function(data) {
        // alert(JSON.stringify(data));

        if (JSON.stringify(data.length) == 0) {
          $('.sub_category_parent_id').html('<option>Sub Category</option>');
        } else {
          $('.sub_category_parent_id').empty();
          $('.sub_category_parent_id').html('<option value="">Sub Category</option>');
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
          $('.subcategory2_id').html('<option>Select Sub Category2</option>');
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



  $(".award_recognization").addClass("menu-is-opening menu-open");
  $(".award_recognization a").addClass("active-menu");
</script>

@endsection
@section('content')



<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>EDIT:Award Recognization </h1>
        </div>

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
            <li class="breadcrumb-item active">Award Recognization</li>
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

            <div class="col-md-12">

              <form enctype="multipart/form-data" method="post" class="form-horizontal" action="{{route('admin.update',$award->id)}}">
                @csrf
                <div class="form-group row">
                  <!-- <div class="col-sm-4">
                    <label for="client_id"><span >*</span>Main Category</label>
                    <select name="category_parent_id" class="form-control category_parent_id" required>
                      <option value="">Select Category</option>
                      @foreach($parent_categories as $parent_category)
                      <option value="{{$parent_category->id}}"
                        
                        @if(old('category_id')==$parent_category->id)
                        selected
                        @elseif($parent_category->id == $selectedMainCategory->id)
                          selected
                        @endif
                        >{{$parent_category->name}}</option>
                      @endforeach
                    </select>
                    <span >@error('category_id') {{$message}} @enderror</span>
                  </div> -->
                  <!-- <div class="col-sm-4">
                    <label for="client_id">Sub Category</label>
                    <select name="sub_category_parent_id" class="form-control sub_category_parent_id">
                      <option value="">Select Sub Category</option>
                      @foreach($selectedSubCategories as $selectedSubCategory)
                        <option value="{{$selectedSubCategory->id}}"
                        
                        @if(old('sub_category_parent_id')==$selectedSubCategory->id)
                        selected
                        @elseif($selectedSubCategory->id == $selectedSubCategory->id)
                          selected
                        @endif

                        >{{$selectedSubCategory->name}}</option>
                      @endforeach
                    </select>
                    <span >@error('sub_category_parent_id') {{$message}} @enderror</span>
                  </div> -->

                  <input type="hidden" name="category_id" class="category_id" value="award_recognization">

                  <input type="hidden" name="admin_id" value="{{session('LoggedUser')->id}}">

                  <!-- <div class="col-sm-4">
                     <label for="client_id">Product Range</label>
                      <select name="subcategory2_id"  class="form-control subcategory2_id">
                        <option value="">Select Product Range</option>
                      </select>
                      <span >@error('subcategory2_id') {{$message}} @enderror</span>
                      <input type="hidden" name="category_id" class="category_id">
                      
                      <input type="hidden" name="admin_id" value="{{session('LoggedUser')->id}}">
                    </div>                  -->
                </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="name"><span >*</span>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$award->name}}" required>

                    <span >@error('name') {{$message}} @enderror</span>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="short_description">Short Desctiption</label>
                    <input type="text" class="form-control" name="short_description" 
                    placeholder="Short Desctiption" value="{{$award->short_description}}">

                    <span >@error('short_description') {{$message}} @enderror</span>
                  </div>
                </div>

                  <div class="form-group row">
                      <div class="col-sm-12">
                        <label for="full_description">Full Desctiption</label>
                        <textarea id="summernote" name="full_description" placeholder="Award Recognization Descriptions" >{{$award->full_description}}</textarea>

                        <span >@error('full_description') {{$message}} @enderror</span>
                      </div>
                  </div>
<!--                   
                <div class="form-group row">
                  <h5 class="bg-dark pl-4 pr-4">SEO CONTENTS</h5>
                  <div class="col-sm-12">
                    <label   for="meta_title">SEO Title</label>
                    <input type="text" class="form-control" name="meta_title" placeholder="Seo Friendly Title" value="{{old('meta_title')}}">
                    <span >@error('meta_title') {{$message}} @enderror</span>
                  </div>
                  <div class="col-sm-12">
                    <label  for="meta_keyword">Keyword</label>
                    <input type="text" class="form-control" name="meta_keyword" placeholder="Seo Keywords with ," value="{{old('meta_keyword')}}">
                    <span >@error('meta_keyword') {{$message}} @enderror</span>
                  </div>
                  <div class="col-sm-12">
                    <label  for="meta_description">Description</label>
                    <textarea type="text" class="form-control" name="meta_description" placeholder="Seo Friendly Title">{{old('meta_description')}}</textarea>
                    <span >@error('meta_description') {{$message}} @enderror</span>
                  </div>
                </div> -->

            </div>

                <div class="col-sm-6">
                <div class="form-group row">
                  <label for="slug">Enter URL label</label>
                  <input type="text" class="form-control" name="slug" placeholder="Seo Friendly Url" value="{{$award->slug}}" >
                  <span >@error('slug') {{$message}} @enderror</span>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12">
                  <h5 class="bg-dark pl-4 pr-4">SEO CONTENTS</h5>
                  <div class="col-sm-12">
                    <label   for="meta_title">SEO Title</label>
                    <input type="text" class="form-control" name="meta_title" placeholder="Seo Friendly Title" value="{{$award->meta_title}}">
                    <span >@error('meta_title') {{$message}} @enderror</span>
                  </div>
                  <div class="col-sm-12">
                    <label  for="meta_keyword">Keyword</label>
                    <input type="text" class="form-control" name="meta_keyword" placeholder="Seo Keywords with ," value="{{$award->meta_keyword}}">
                    <span >@error('meta_keyword') {{$message}} @enderror</span>
                  </div>
                  <div class="col-sm-12">
                    <label  for="meta_description">Description</label>
                    <textarea type="text" class="form-control" name="meta_description" placeholder="Seo Friendly Title">{{$award->meta_description}}</textarea>
                    <span >@error('meta_description') {{$message}} @enderror</span>
                  </div>
                  </div>
                  <!-- <div class="col-sm-6">
                    <label for="image_alt">Image Alt</label>
                    <input type="text" class="form-control" name="image_alt" placeholder="Image Alter Text (SEO)" value="{{old('image_alt')}}">

                    <span >@error('image_alt') {{$message}} @enderror</span>
                  </div> -->

                  <!-- <div class="col-sm-6">
                    <label for="image_title">Image Title</label>
                    <input type="text" class="form-control" name="image_title" placeholder="Product Image Title (SEO)" value="{{old('image_title')}}">

                    <span >@error('image_title') {{$message}} @enderror</span>
                  </div> -->
                  
                </div>

                
                <!-- <div class="col-sm-12 row mt-4">
                  <div class="col-sm-6">
                    <label   for="search_index">Allow search engines to show?</label>
                    <select class="form-control" name="search_index">
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                  </div>

                  <div class="col-sm-6">
                    <label   for="search_follow">Follow links on this Page?</label>
                    <select class="form-control" name="search_follow">
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                  </div>
                </div> -->
                <!-- <div class="col-sm-12">
                  <label  for="canonical_url">Canonical URL</label>
                  <input type="text" class="form-control" name="canonical_url" placeholder="Canonical URL">
                  <span ></span>
                </div> -->
                </div>
                </div>


                <div class="form-check">
                  <input type="checkbox" class="form-check-input  pull-right" name="status" id="exampleCheck1" checked />

                  <h5> <span class="badge badge-success">Active</span></h5>
                  </td>
                </div>



                <div class="card-footer  text-center">
                  <button type="submit" class="btn btn-info"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Update</button>
                </div>

            </div>
            </div>
            </form>
          </div>



        </div>
      </div>


    </div>
  </section>
</div>

@endsection