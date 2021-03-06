@extends('layouts.admin.master')
@section('content')
@include('partials.flash_message')
<!-- Row Starts --><div class = "spacer">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog">
                  <div class="blog-header">
                    <h5 class="blog-title">Edit Content Category</h5>
                  </div>
                  <div class="blog-body">
                    <form class="form-horizontal" role="form"  method="POST" action="{{url('admin/contentcategory/update',array($contentCategory->id))}}">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Category Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name = "name" id="name" value="{{$contentCategory->name}}">
                        </div>
                      </div>

                     

                      <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-7">
                         <textarea class="form-control" rows="5" name="description" id = "description">{{$contentCategory->description}}</textarea>
                        </div>
                      </div>

        

                       <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row Ends -->
          </div>        
@endsection