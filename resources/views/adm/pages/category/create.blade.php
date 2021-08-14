@extends('adm.layout.admin-index')
@section('title','Dashboard - Charotar Corporation')

@section('toast')
  @include('adm.widget.toast')
@endsection

@section('custom-js')

<script>
$('.category_parent_id').on('change', function() {
        var parent = $(this).find(':selected').val();
        
        $('.parent_id').val(parent);

        $.get( `{{url('api')}}/get/getPetaKacheri/`+parent, { category_parent_id: parent })
        .done(function( data ) {
        if(JSON.stringify(data.length) == 0){
            $('.subcategory_parent_id').html('<option>Select Sub Category</option>');
        }
        else{
                $('.subcategory_parent_id').empty();     
            $('.subcategory_parent_id').html('<option value="">Select Sub Category</option>');
            for(var i = 0 ; i < JSON.stringify(data.length); i++){  
                $('.subcategory_parent_id').append('<option value='+JSON.stringify(data[i].id)+'>'+ data[i].name +'</option>')
            }
        }
    });
  });

  $('.subcategory_parent_id').on('change', function() {
        var parent = $(this).find(':selected').val();
        if(parent == ''){
          var mainCat = $('.category_parent_id').find(':selected').val();
          
          $('.parent_id').val(mainCat);

        }else{
          $('.parent_id').val(parent);
        }

    });

    
$(".category").addClass( "menu-is-opening menu-open");
$(".category a").addClass( "active-menu");

</script>
@endsection
@section('content')


<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1>ADD New : Caegory / Sub Category / Sub Category 2  </h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
            
            <div class="col-md-12 card card-info">
                 
              <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Category</h3>
              </div>
             
              <form method="post"  enctype="multipart/form-data" class="form-horizontal" action="{{route('admin.category.store')}}">
                @csrf
                <div class="card-body p-2 pt-4">
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="hidden" name="type" value="name">
                      <input type="text" class="form-control" name="name" 
                         placeholder="Category Name" value="{{old('name')}}">
                         
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6">
                      <textarea class="form-control" name="category_description"
                         placeholder="Description">{{old('category_description')}}</textarea>
                    <span class="text-danger">@error('category_description') {{$message}} @enderror</span>
                    </div>

                    <div class="col-sm-6">
                      <textarea class="form-control" name="slug"
                         placeholder="slug">{{old('slug')}}</textarea>
                    <span class="text-danger">@error('slug') {{$message}} @enderror</span>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <select name="category_parent_id" class="form-control category_parent_id">
                        <option value="0">Select Category</option>
                          @foreach($parent_categories as $parent_category)
                              <option value="{{$parent_category->id}}">{{$parent_category->name}}</option>
                          @endforeach
                      </select>
                      <span class="text-danger">@error('category_parent_id') {{$message}} @enderror</span>
                    </div>

                    <div class="col-sm-6">
                      <select name="subcategory_parent_id"  class="form-control subcategory_parent_id">
                        <option value="0">Select Sub Category</option>
                      </select>
                      <span class="text-danger">@error('subcategory_parent_id') {{$message}} @enderror</span>
                    </div>
                  </div>

                  
                  <input type="hidden" name="parent_id" class="parent_id" value="0">
                  @include('adm.pages.category.common-fields')


                <div class="form-group">
                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" class="custom-control-input status-switch" 
                      name="status" value="0" id="customSwitch1">
                    <label class="custom-control-label float-right" for="customSwitch1">Status</label>
                  </div>
                </div>

                  
                  </div>
                </div>


                <div class="card-footer">
                  <button type="submit" class="float-right btn btn-info"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Save Data</button>
                </div>
              </form>
            </div>

<!-- 
            <div class="col-md-4 card card-info">
       
              <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Sub Category</h3>
              </div>
             
              <form method="post" class="form-horizontal"  action="{{route('admin.category.subCategoryStore')}}">
              
              <input type="hidden" name="type" value="peta_kacheri">
              @csrf
                <div class="card-body p-2 pt-4">
                  <div class="form-group row">
                    <div class="col-sm-12">
                      
                      <input type="text" class="form-control" name="subcategory_name"
                         placeholder="Sub Category Name" value="{{@old(subcategory_name)}}">
                         <span class="text-danger">@error('subcategory_name') {{$message}} @enderror</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <textarea class="form-control" name="subcategory_description"
                         placeholder="Description">{{@old(subcategory_description)}}</textarea>
                         <span class="text-danger">@error('subcategory_description') {{$message}} @enderror</span>
                    </div>
                  </div>

                                    
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <textarea class="form-control" name="subcategory_slug"
                         placeholder="slug">{{old('subcategory_slug')}}</textarea>
                    <span class="text-danger">@error('subcategory_slug') {{$message}} @enderror</span>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <select name="category_parent_id1" class="form-control">
                        <option value="">Select Category</option>
                          @foreach($parent_categories as $parent_category)
                              <option value="{{$parent_category->id}}">{{$parent_category->name}}</option>
                          @endforeach
                      </select>
                      <span class="text-danger">@error('category_parent_id1') {{$message}} @enderror</span>
                    
                    </div>
                  </div>
                  
                  
                  @include('adm.pages.category.common-fields')
                  
                <div class="form-group">
                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" class="custom-control-input status-switch" name="status" value="0" id="customSwitch2">
                    <label class="custom-control-label float-right" for="customSwitch2">Status</label>
                  </div>
                </div>
                  

                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="float-right btn btn-danger"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Save Data</button>
                </div>
              </form>
            </div>

            <div class="col-md-4 card card-info">
              <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Sub Category 2</h3>
              </div>
             
              <form method="post" class="form-horizontal" action="{{route('admin.category.subCategory2Store')}}">
              <input type="hidden" name="type" value="department">
              @csrf
                <div class="card-body p-2 pt-4">
                  <div class="form-group row">
                    <div class="col-sm-12">
                      
                      <input type="text" class="form-control" name="subcategory2_name"
                         placeholder="Sub Category2 name" value="{{@old('subcategory2_name')}}">
                         <span class="text-danger">@error('subcategory2_name') {{$message}} @enderror</span>
                    
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <textarea class="form-control" name="subcategory2_description"
                         placeholder="Description">{{@old('subcategory2_description')}}</textarea>

                         <span class="text-danger">@error('subcategory2_description') {{$message}} @enderror</span>

                    </div>
                  </div>
 
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <textarea class="form-control" name="subcategory2_slug"
                         placeholder="slug">{{old('subcategory2_slug')}}</textarea>
                    <span class="text-danger">@error('subcategory2_slug') {{$message}} @enderror</span>
                    </div>
                  </div>

                  
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <select name="category_parent_id" class="form-control category_parent_id">
                        <option value="">Select Category</option>
                          @foreach($parent_categories as $parent_category)
                              <option value="{{$parent_category->id}}">{{$parent_category->name}}</option>
                          @endforeach
                      </select>
                      <span class="text-danger">@error('category_parent_id') {{$message}} @enderror</span>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <select name="subcategory_parent_id"  class="form-control subcategory_parent_id">
                        <option value="">Select Sub Category</option>
                      </select>
                      <span class="text-danger">@error('subcategory_parent_id') {{$message}} @enderror</span>
                    </div>
                  </div>

                  @include('adm.pages.category.common-fields')

                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input status-switch" name="status" 
                        value="0" id="customSwitch3">
                      <label class="custom-control-label float-right" for="customSwitch3">Status</label>
                    </div>
                  </div>
                    
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="float-right btn btn-warning"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Save Data</button>
                </div>
              </form>
            </div> -->


          </div>
        </div>


      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection
