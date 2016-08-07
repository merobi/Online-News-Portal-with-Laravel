@extends('admin.admin_master')
@section('admin_main_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Category Id</th>
								  <th>Category Name</th>
								  
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
                               foreach ($all_category as $v_category) {
                               	
						  	?>
							<tr>
								<td><?php  echo $v_category->id?></td>
								<td class="center"><?php  echo $v_category->category_name?></td>
								
								<td class="center">
									<?php
									if($v_category->publication_status==1)
									{
										?>
									
									<span class="label label-success">Published</span>
									<?php
                                     }
                                     else{
                                     ?>
                                     <span class="label label-important">Unpublished</span>
                                   <?php
                                 }
                                   ?>
								</td>
								<td class="center">
									<?php
									if($v_category->publication_status==1)
									{
									?>
									<a class="btn btn-danger" href="{{URL::to('/unpublished-category/'.$v_category->id)}}">
										<i class="halflings-icon white remove"></i>  
									</a>
									<?php }
									else{
										
										?>
										<a class="btn btn-success" href="{{URL::to('/published-category/'.$v_category->id)}}">
										<i class="halflings-icon white ok"></i>  
									    </a>
										<?php }
										?>
									<a class="btn btn-info" href="{{URL::to('/edit-category/'.$v_category->id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-category/'.$v_category->id)}}" onclick="return cheekDelete()">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>

						     <?php } ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>

			@endsection