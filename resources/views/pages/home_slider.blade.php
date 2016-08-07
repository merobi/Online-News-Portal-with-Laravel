@extends('master')
@section('slider')
<div class="row">
    <div class="col-sm-8">
        <!-- Carousel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
                 $featured_news=DB::table('news')
                                 ->where('is_fetured',1)
                                 ->where('publication_status',1)
                                 ->get();

                $i=1;
                foreach ($featured_news as $v_news) {
                
                ?>
                <div class="<?php if($i==1) {echo 'item active';} else {echo 'item';} ?>">
                    <img src="{{asset($v_news->image)}}" width="100" height="100" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <!-- <h2>Aenean feugiat in ante et </h2> -->
                            <br>
                            <h3>{{$v_news->news_title}}</h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
                </div>
                <?php $i++;} ?>
                
            </div>  
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- /carousel -->
    </div>
    <div class="col-sm-4" >
        <div id="owl-demo-1" class="owl-carousel">
            <img src="images/slide-2.jpg" />
            <img src="images/slide-1.jpg" />
            <img src="images/slide-3.jpg" />
        </div>
        <img src="images/banner.jpg" />
    </div>
</div>
@endsection