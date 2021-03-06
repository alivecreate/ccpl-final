@extends('adm.layout.admin-index')
@section('title','About Page Editor')

@section('toast')
  @include('adm.widget.toast')
@endsection

@section('custom-js')
<script>
$( document ).ready(function() {
  $(".del-modal").click(function(){
    var delete_id = $(this).attr('data-id');
    var data_title = $(this).attr('data-title');
    var data_url = $(this).attr('data-url');
    
    $('.delete-form').attr('action','/admin/url-list1/delete/'+ delete_id);
    $('.delete-title').html(data_title);
    $('.delete-url').attr('src',data_url);
  });  
});


$(".page").addClass( "menu-is-opening menu-open");
$(".page a").addClass( "active-menu");

</script>
@endsection

@section('content')
@include('adm.widget.table-search-draggable')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">



      <div class="row">
      
      <div class="col-sm-6">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Product Page Manage</li>
            </ol>
          </div>

        
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <a class="btn btn-dark btn-sm ml-1" onclick="goBack()"> ❮ Back</a>
              
          </ol>
        </div>
        
        <div class="col-sm-6">
            <h1>Product Page Manage</h1>
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
                  <h3 class="card-title">Product Page Manage</h3>
                  <div id="example1_wrapper">

                  </div>
                </div>
             
                <form method="post" enctype="multipart/form-data"  class="form-horizontal" 
                action="{{route('page-editor.store')}}">
                  @csrf

                  <div class="card-body p-2 pt-4">

                    <div class="form-group row">
                      <div class="col-sm-6">
                          <textarea id="summernote" name="description" placeholder="Product Descriptions">
                          {{$pageData->description}}</textarea>
                          <span class="text-danger">@error('description') {{$message}} @enderror</span>
                         
                          @include('adm.widget.seo-content')
                      
                        </div>

                        @include('adm.widget.seo-content-2')

                    <input type="hidden" name="type" value="product_page">  
                    </div>

                  <div class="card-footer text-center">
                    <button type="submit" class="btn btn-info"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Product Page</button>
                  </div>
                </form>
            </div>

        </div>


      </div>
    </section>
  </div>

  @endsection