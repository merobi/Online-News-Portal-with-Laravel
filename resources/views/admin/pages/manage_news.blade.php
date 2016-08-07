@extends('admin.admin_master')
@section('admin_main_content')

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
                <th>Id</th>
                <th>Category Name</th>
                <th>Featured</th>
                <th>News Type</th>
                <th>News Title</th>
                <th>Author Name</th>
               
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>   
        <tbody>
            <?php foreach ($all_news as $v_news) { ?>
                <tr>
                    <td><?php echo $v_news->id; ?></td>
                    <td><?php echo $v_news->category_name; ?></td>
                    <?php if ($v_news->is_fetured == 1) { ?>
                        <td>Yes</td>
                    <?php } else { ?>
                        <td>No</td>
                    <?php } if ($v_news->news_type == 0) { ?>
                        <td>Breaking News</td>
                    <?php } elseif ($v_news->news_type == 1) { ?>
                        <td>Recent News</td>
                    <?php } else { ?>
                        <td>Top News</td>
                    <?php } ?>
                    <td><?php echo $v_news->news_title; ?></td>
                    <td><?php echo $v_news->author_name; ?></td>
                    
                    <?php if ($v_news->publication_status == 1) { ?>
                        <td>Published</td>
                    <?php } else { ?>
                        <td>Unpublished</td>
                    <?php } ?>
                                 <td class="center">
                    
                    <?php
                    if($v_news->publication_status == 1)
                    {
                    ?>
                    <a class="btn btn-danger" href="{{URL::to('/unpublished-news/'.$v_news->id)}}">
                        <i class="halflings-icon remove"></i>  
                    </a>
                    <?php } 
                    else {
                    ?>
                    <a class="btn btn-success" href="{{URL::to('/published-news/'.$v_news->id)}}">
                        <i class="halflings-icon  ok"></i>  
                    </a>
                    <?php
                    } 
                    ?>
                    <a class="btn btn-info" href="{{URL::to('/edit-news/'.$v_news->id)}}">
                        <i class="halflings-icon white edit"></i>  
                    </a>
                    <a class="btn btn-danger" href="{{URL::to('/delete-news/'.$v_news->id)}}" onclick="return cheekDelete()">
                        <i class="halflings-icon white trash"></i> 
                    </a>
                </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>            
</div>

@endsection
