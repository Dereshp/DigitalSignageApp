@extends('layouts.admin.master')
@section('content')
@include('partials.flash_message')
<!-- Row Starts --><div class = "spacer">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="blog">
									<div class="blog-header">
										<h5 class="blog-title">Add Allowed Content</h5>
									</div>
									<div class="blog-body">
										<form class="form-horizontal" role="form"  method="POST" action="{{ url('admin/allowedcontent/store') }}">
										{{ csrf_field() }}
										  <div class="form-group{{$errors->has('name') ? ' has-error' : '' }}">
										    <label for="" class="col-sm-2 control-label">Name</label>
										    <div class="col-xs-10 col-sm-5">
										      <input type="text" class="form-control" name = "name" value = "{{ old('name') }}" id="name" required autofocus>
										      @if ($errors->has('name'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('name') }}</strong>
			                                    </span>
                                			  @endif
										    </div>
										  </div>
											
										<div class="form-group">
										      <label for="contentcategory" class="col-lg-2 control-label">Content Category</label>
										      <div class="col-xs-10 col-sm-5">
										        <select name = "contentCategory" class="form-control" id="contentCategory">
										        <option value = " ">Select</option>
										          @foreach($contentCategories as $contentCategory)
										          <option value="{{$contentCategory->id }}">{{$contentCategory->name}}</option>
										          @endforeach
										        </select>
										      </div>
										    </div>


										   <div class="form-group">
										    <label for="" class="col-sm-2 control-label">Description</label>
										    <div class="col-sm-7">
										     <textarea class="form-control" rows="5" name="description" id = "description"></textarea>
										    </div>
										  </div>


										   <div class="form-group">
                            					<div class="col-md-6 col-md-offset-4">
                               				 	<button type="submit" class="btn btn-primary">Save</button>
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