@extends('admin.admin_master')
@section('admin_main_content')
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Category Form </h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<h2 style="color:green">
                      <?php
                        $message=Session::get('message');
                        if($message){
                        	echo $message;
                        	Session::put('message','');
                        }
                      ?>
					</h2>
					<div class="box-content">
						{!! Form::open(array('url' => '/update-category' , 'method'=>'post','name'=>'edit_category')) !!}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Category Name</label>
							  <div class="controls">
								<input type="text" value="{{$category_info->category_name}}" name="category_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" >
								<input type="hidden" value="{{$category_info->id}}" name="id">
							  </div>
							</div>
							

							          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category Description</label>
							  <div class="controls">
								<textarea class="cleditor"  id="textarea2" rows="3" name="category_description">{{$category_info->category_description}}</textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">Publication Status</label>
							  <div class="controls">
								<select Name="publication_status">
                                   <option value="">--Select publication status--</option>
                                   <option value="1">Published</option>
                                   <option value="0">Unpublished</option>
								</select>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" name="btn" class="btn btn-primary">Update Category</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						{!! Form::close() !!}  

					</div>
				</div><!--/span-->

			</div>
			<script type="text/javascript">
             document.forms['edit_category'].elements['publication_status'].value={{ $category_info->publication_status }}
            </script>


			@endsection