@extends('admin.admin_master')
@section('admin_main_content')

<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
        </div>
    </div>
    <h2 style="color: green">
        <?php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', '');
        }
        ?>
    </h2>
    <div class="box-content">
        {!! Form::open(array('url' => '/update-news' , 'method'=>'post' ,'name'=>'edit_news' )) !!}
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="typeahead">News Title </label>
                <div class="controls">
                    <input type="text" name="news_title" value="<?php echo $news_info->news_title; ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                    <input type="hidden" name="id" value="<?php echo $news_info->id; ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="selectErrort">Category Name</label>
                <div class="controls">
                    <select id="selectErrort" data-rel="chosen" name="category_id">
                        <option>Select Category Name</option>
                        <?php
                        foreach ($published_category as $v_category) {
                            ?>
                            <option value='{{$v_category->id}}'>{{$v_category->category_name}}</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="selectErrorr">Is Featured</label>
                <div class="controls">
                    <select id="selectErrorr" data-rel="chosen" name="is_fetured">
                        <option>Select Featured</option>
                        <option value='1'>Yes</option>
                        <option value='0'>No</option>
                    </select>
                </div>
            </div>
            <div class="control-group hidden-phone">
                <label class="control-label" for="textarea4">Short Description</label>
                <div class="controls">
                    <textarea class="cleditor" id="textarea4" rows="3" name="short_description"><?php echo $news_info->short_description; ?></textarea>
                </div>
            </div>

            <div class="control-group hidden-phone">
                <label class="control-label" for="textarea44">Long Description</label>
                <div class="controls">
                    <textarea class="cleditor" id="textarea44" rows="3" name="long_description"><?php echo $news_info->long_description; ?></textarea>
                </div>
            </div>

<!--            <div class="control-group">
                <label class="control-label" for="typeahead">Image </label>
                <div class="controls">
                    <input type="file" name="image" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                </div>
            </div>-->


            <div class="control-group">
                <label class="control-label" for="selectErrffor">News Type</label>
                <div class="controls">
                    <select id="selectErrffor" data-rel="chosen" name="news_type">
                        <option>Select News Type</option>
                        <option value='0'>Breaking News</option>
                        <option value="1">Recent News</option>
                        <option value="2">Top News</option>

                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="selectError">Publication Status</label>
                <div class="controls">
                    <select id="selectError" data-rel="chosen" name="publication_status">
                        <option>Select Publication Status</option>
                        <option value='1'>Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
            </div>



            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update News</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
        {!! Form::close() !!}  

    </div>
</div><!--/span-->
<script type="text/javascript">
    document.forms['edit_news'].elements['category_id'].value={{ $news_info->category_id }}
    document.forms['edit_news'].elements['is_fetured'].value={{ $news_info->is_fetured }}
    document.forms['edit_news'].elements['news_type'].value={{ $news_info->news_type }}
    document.forms['edit_news'].elements['publication_status'].value={{ $news_info->publication_status }}
</script>
@endsection