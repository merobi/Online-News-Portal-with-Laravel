@extends('master')
@section('main_content')
<div class="row">
    <div id="main-content" class="col-md-8">
       <?php
       foreach($news_by_category as $v_category)
       {
       ?>
        <div class="box">
            <a href="#"><h2 class="vid-name">{{$v_category->news_title}}</h2></a>
            <div class="info">
                <h5>By <a href="#">{{$v_category->author_name}}</a></h5>
                <span><i class="fa fa-calendar"></i> June 12, 2015</span> 
                <span><i class="fa fa-comment"></i> 0 Comments</span>
                <span><i class="fa fa-heart"></i>1,200</span>
                <ul class="list-inline">
                    <li><a href="#">Rate</a></li>
                    <li> - </li>
                    <li>
                        <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="wrap-vid">
                <div class="zoom-container">
                    <div class="zoom-caption">
                    </div>
                    <img src="{{asset($v_category->image)}}" />
                </div>
                <p>{{$v_category->short_description}}<a href="#">MORE...</a></p>
            </div>
        </div>
       <?php } ?>
    </div>
    <div id="sidebar" class="col-md-4">
        <!---- Start Widget ---->
        <div class="widget wid-follow">
            <div class="heading"><h4>Follow Us</h4></div>
            <div class="content">
                <ul class="list-inline">
                    <li>
                        <a href="facebook.com/">
                            <div class="box-facebook">
                                <span class="fa fa-facebook fa-2x icon"></span>
                                <span>1250</span>
                                <span>Fans</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="facebook.com/">
                            <div class="box-twitter">
                                <span class="fa fa-twitter fa-2x icon"></span>
                                <span>1250</span>
                                <span>Fans</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="facebook.com/">
                            <div class="box-google">
                                <span class="fa fa-google-plus fa-2x icon"></span>
                                <span>1250</span>
                                <span>Fans</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <img src="images/banner.jpg" />
            </div>
        </div>
        <!---- Start Widget ---->
        <div class="widget wid-post">
            <div class="heading"><h4>Category</h4></div>
            <div class="content">
                <div class="post wrap-vid">
                    <div class="zoom-container">
                        <div class="zoom-caption">
                            <span class="youtube">Youtube</span>
                            <a href="single.html">
                                <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                            </a>
                            <p>Video's Name</p>
                        </div>
                        <img src="images/1.jpg" />
                    </div>
                    <div class="wrapper">
                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                        <div class="info">
                            <h6>By <a href="#">Kelvin</a></h6>
                            <span><i class="fa fa-calendar"></i>25/3/2015</span> 
                            <span><i class="fa fa-heart"></i>1,200</span>
                        </div>
                    </div>
                </div>
                <div class="post wrap-vid">
                    <div class="zoom-container">
                        <div class="zoom-caption">
                            <span class="vimeo">Vimeo</span>
                            <a href="single.html">
                                <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                            </a>
                            <p>Video's Name</p>
                        </div>
                        <img src="images/2.jpg" />
                    </div>
                    <div class="wrapper">
                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                        <div class="info">
                            <h6>By <a href="#">Kelvin</a></h6>
                            <span><i class="fa fa-calendar"></i>25/3/2015</span> 
                            <span><i class="fa fa-heart"></i>1,200</span>
                        </div>
                    </div>
                </div>
                <div class="post wrap-vid">
                    <div class="zoom-container">
                        <div class="zoom-caption">
                            <span class="youtube">Youtube</span>
                            <a href="single.html">
                                <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                            </a>
                            <p>Video's Name</p>
                        </div>
                        <img src="images/3.jpg" />
                    </div>
                    <div class="wrapper">
                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                        <div class="info">
                            <h6>By <a href="#">Kelvin</a></h6>
                            <span><i class="fa fa-calendar"></i>25/3/2015</span> 
                            <span><i class="fa fa-heart"></i>1,200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- Start Widget ---->
        <div class="widget ">
            <div class="heading"><h4>Top News</h4></div>
            <div class="content">
                <div class="wrap-vid">
                    <div class="zoom-container">
                        <div class="zoom-caption">
                            <span class="vimeo">Vimeo</span>
                            <a href="single.html">
                                <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                            </a>
                            <p>Video's Name</p>
                        </div>
                        <img src="images/1.jpg" />
                    </div>
                    <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                    <div class="info">
                        <h5>By <a href="#">Kelvin</a></h5>
                        <span><i class="fa fa-calendar"></i>25/3/2015</span> 
                        <span><i class="fa fa-heart"></i>1,200</span>
                    </div>
                </div>
                <div class="wrap-vid">
                    <div class="zoom-container">
                        <div class="zoom-caption">
                            <span class="vimeo">Vimeo</span>
                            <a href="single.html">
                                <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                            </a>
                            <p>Video's Name</p>
                        </div>
                        <img src="images/2.jpg" />
                    </div>
                    <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                    <div class="info">
                        <h5>By <a href="#">Kelvin</a></h5>
                        <span><i class="fa fa-calendar"></i>25/3/2015</span> 
                        <span><i class="fa fa-heart"></i>1,200</span>
                    </div>
                </div>
                <div class="wrap-vid">
                    <div class="zoom-container">
                        <div class="zoom-caption">
                            <span class="vimeo">Vimeo</span>
                            <a href="single.html">
                                <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                            </a>
                            <p>Video's Name</p>
                        </div>
                        <img src="images/3.jpg" />
                    </div>
                    <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                    <div class="info">
                        <h5>By <a href="#">Kelvin</a></h5>
                        <span><i class="fa fa-calendar"></i>25/3/2015</span> 
                        <span><i class="fa fa-heart"></i>1,200</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection