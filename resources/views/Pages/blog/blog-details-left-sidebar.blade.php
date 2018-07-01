@extends('Layout/Default')
@section('content')


<!doctype html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> </html><![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> </html><![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> </html><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx" class="no-js">
<!--<![endif]-->

<head>
    </head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- ======= preloader part start ======= -->
   
    <!-- ======= preloader part start ======= -->

    <!-- ======= header part start ======= -->
   
    <!-- ======= header part end ======= -->

    <!-- ======= page title part srat ======= -->
    <section class="page-title-area parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title -->
                    <div class="page-title">
                        <div class="title">
                            <h2>blog details</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./index.php">blog</a></li>
                            <li class="active">blog details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= causes part start ======= -->
    <div class="single-blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- blog article -->
                    <article class="single-blog-content">
                        <img src="{{ URL:: to ('public/img/news/04.jpg')}}" alt="" />
                        <h2>single blog name</h2>
                        <div class="blog-get-info">
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span>22 aug 2017</span></a>
                            <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><span> 6.30pm</span></a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <span>380 likes</span></a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> <span>200 comments</span></a>
                        </div>
                        <p> lorem sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint </p>
                        <p> or sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt </p>
                        <p>explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <p>explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                        <blockquote class="theme-colored pt-20 pb-20">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div class="blog-get-info text-right">
                            <span>Share:</span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </article>
                    <!-- blog comment -->
                    <div class="blog-comment-wraper">
                        <h3>2 Comments</h3>
                        <div class="commnet-area">
                            <!-- comment -->
                            <div class="comment-author">
                                <img src="{{ URL:: to ('public/img/admin/01.jpg')}}" alt="" />
                            </div>
                            <div class="comment-content">
                                <i class="fa fa-user" aria-hidden="true"></i> <span>Lumiana john</span>
                                <i class="fa fa-clock-o" aria-hidden="true"></i> <span>25min ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com</p>
                                <a href="#">Reply<i class="fa fa-commenting-o" aria-hidden="true"></i></a>
                            </div>
                            <!-- reply comment -->
                            <div class="reply-commnet-content">
                                <div class="comment-author">
                                    <img src="{{ URL:: to ('public/img/admin/02.jpg')}}" alt="" />
                                </div>
                                <div class="comment-content">
                                    <i class="fa fa-user" aria-hidden="true"></i> <span>Lumiana john</span>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> <span>25min ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com</p>
                                    <a href="#">Reply<i class="fa fa-commenting-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="commnet-area">
                            <!-- comment -->
                            <div class="comment-author">
                                <img src="{{ URL:: to ('public/img/admin/03.jpg')}}" alt="" />
                            </div>
                            <div class="comment-content">
                                <i class="fa fa-user" aria-hidden="true"></i> <span>Lumiana john</span>
                                <i class="fa fa-clock-o" aria-hidden="true"></i> <span>25min ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com</p>
                                <a href="#">Reply<i class="fa fa-commenting-o" aria-hidden="true"></i></a>
                            </div>
                            <!-- reply comment -->
                            <div class="reply-commnet-content">
                                <div class="comment-author">
                                    <img src="{{ URL:: to ('public/img/admin/04.jpg')}}" alt="" />
                                </div>
                                <div class="comment-content">
                                    <i class="fa fa-user" aria-hidden="true"></i> <span>Lumiana john</span>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> <span>25min ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com</p>
                                    <a href="#">Reply<i class="fa fa-commenting-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="comment-heading">Leave a Comment</h3>
                    <!-- comment form -->
                    <div class="comment-form">
                        <form action="#" />
                            <div class="comment-input-form">
                                <input name="name" required="" placeholder="YOUR NAME" type="text" />
                            </div>
                            <div class="comment-input-form">
                                <input name="email" required="" placeholder="YOUR MAIL" type="email" />
                            </div>
                            <div class="comment-textarea">
                                <textarea data-gramm="true" spellcheck="false" data-gramm_editor="true" name="message" required="" placeholder="YOUR MESSAGE...."></textarea>
                            </div>
                            <button type="submit" class="post-button donate-btn hvr-shutter-out-horizontal blog-post-btn">Submit comment</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <aside class="sidebar-widget widget-search">
                        <form method="get" action="#" />
                            <input placeholder="Search here..." value="" name="search" type="search" />
                            <button title="Search" name="submit" type="submit" class="sub_search"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </aside>
                    <!-- single sidebar -->
                    <aside class="sidebar-widget">
                        <div class="widget-title">
                            <h2>archives</h2>
                        </div>
                        <ul>
                            <li><a href="#">Case Investigation</a></li>
                            <li><a href="#">Business Taxation</a></li>
                            <li><a href="#">donate now</a></li>
                            <li><a href="#">child care</a></li>
                            <li><a href="#">helping hand</a></li>
                            <li><a href="#">Gear up for giving</a></li>
                        </ul>
                    </aside>
                    <!-- single sidebar -->
                    <aside class="sidebar-widget">
                        <div class="widget-title recent-widget">
                            <h2>RECENT POST</h2>
                        </div>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/01.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/02.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/03.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                    </aside>
                    <!-- single sidebar -->
                    <aside class="sidebar-widget">
                        <div class="widget-title recent-widget">
                            <h2>twitter POST</h2>
                        </div>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/01.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/02.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ URL:: to ('public/img/recent/03.jpg')}}" alt="" />
                                </div>
                                <div class="post-info">
                                    <h3>white leg shrimp</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>October 18, 2018</p>
                                </div>
                            </div>
                        </a>
                    </aside>
                    <!-- single sidebar -->
                    <aside class="sidebar-widget">
                        <div class="widget-title">
                            <h2>everyday time</h2>
                        </div>
                        <ul>
                            <li class="category-active"><a href="#">Sat : 08:00am-12:00pm</a></li>
                            <li><a href="#">sun : 08:00am-12:00pm</a></li>
                            <li><a href="#">mon : 08:00am-12:00pm</a></li>
                            <li><a href="#">twe : 08:00am-12:00pm</a></li>
                            <li><a href="#">wed : 08:00am-12:00pm</a></li>
                            <li><a href="#">thu : 08:00am-12:00pm</a></li>
                            <li><a href="#">fri : 08:00am-12:00pm</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= causes part end ======= -->

    <!-- ======= call to action part start ======= -->
    
    <!-- ======= call to action part end ======= -->

    <!-- ======= footer area start ======= -->
   
</body>

</html>
@stop