@extends('layouts.app')

@section('content')
    <section class="pageTitleSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pageTitleContent">
                        <h2>Blog</h2>
                        <div class="breadcrumbs">
                            <a href="/">HOME</a> &nbsp;/ &nbsp;<a href="#">Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-4 shopsidebar">
                    <aside class="widget widget_search wow fadeInUp animated" data-wow-duration="700ms"
                        data-wow-delay="300ms"
                        style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <form action="#" class="search-form" method="get" role="search">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" name="s" value="" placeholder="Search" class="search-field">
                            </label>
                            <input type="submit" value="Search" class="search-submit">
                        </form>
                    </aside>
                    <aside class="widget widget_product_categories wow fadeInUp animated" data-wow-duration="700ms"
                        data-wow-delay="350ms"
                        style="visibility: visible; animation-duration: 700ms; animation-delay: 350ms; animation-name: fadeInUp;">
                        <h3 class="widgetTitle">Categories</h3>
                        <div class="widgetBody">
                            <ul>
                                <li><a href="#">Black &amp; White</a><span>(03)</span></li>
                                <li><a href="#">Caterpillar</a><span>(05)</span></li>
                                <li><a href="#">Dozil</a><span>(10)</span></li>
                                <li><a href="#">Eleep Biz</a><span>(20)</span></li>
                                <li><a href="#">Kelvin Clin</a><span>(06)</span></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="widget widget_search wow fadeInUp animated" data-wow-duration="700ms"
                        data-wow-delay="400ms"
                        style="visibility: visible; animation-duration: 700ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <h3 class="widgetTitle">Text Widget</h3>
                        <div class="widgetBody">
                            <div class="text_widget">
                                <p>The Love Boat soon will be making another run the love boat promises something for
                                    everyone. </p>
                                <a class="poppins rmors" href="#">View All<i class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget_product_categories wow fadeInUp animated" data-wow-duration="700ms"
                        data-wow-delay="450ms"
                        style="visibility: visible; animation-duration: 700ms; animation-delay: 450ms; animation-name: fadeInUp;">
                        <h3 class="widgetTitle">Popular Tags</h3>
                        <div class="widgetBody">
                            <ul>
                                <li><a href="#">White</a><span>(10)</span></li>
                                <li><a href="#">Black</a><span>(08)</span></li>
                                <li><a href="#">blue</a><span>(02)</span></li>
                                <li><a href="#">yellow</a><span>(03)</span></li>
                                <li><a href="#">Red</a><span>(08)</span></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="widget wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="500ms"
                        style="visibility: visible; animation-duration: 700ms; animation-delay: 500ms; animation-name: fadeInUp;">
                        <h3 class="widgetTitle">Recent Posts</h3>
                        <div class="widgetBody">
                            <div class="topRatedProducts">
                                <div class="singleProductsa">
                                    <img src="img/shop1/w1.png" alt="">
                                    <h3><a href="#">FASHION LADIES BAG</a></h3>
                                    <p class="pricess">February 15, 2016</p>
                                </div>
                                <div class="singleProductsa">
                                    <img src="img/shop1/w2.png" alt="">
                                    <h3><a href="#">Trendy women T-Shirt</a></h3>
                                    <p class="pricess">March 20, 2016</p>
                                </div>
                                <div class="singleProductsa">
                                    <img src="img/shop1/w3.png" alt="">
                                    <h3><a href="#">FASHION Mens Hats</a></h3>
                                    <p class="pricess">April 02, 2016</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-9 col-sm-8">
                    <div class="loopBlog wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="550ms"
                        style="visibility: visible; animation-duration: 700ms; animation-delay: 550ms; animation-name: fadeInUp;">
                        <div class="lBThumbs">
                            <img src="img/blog/1.png" alt="">
                            <div class="lBDate">
                                <span>11</span>
                                <span>Jan</span>
                            </div>
                        </div>
                        <div class="loopBlogDetails">
                            <h3><a href="single_blog.html">Sunday Monday Happy Days</a></h3>
                            <div class="lbMetas">By <a href="single_blog.html">Admin</a> &nbsp;/ &nbsp;<a href="#">1
                                    Like</a> &nbsp;/&nbsp;<a href="#">1 Comment</a></div>
                            <div class="lbDet">
                                Here everyone one two three four five six seven eight Sclemeel schlemazel hasenfeffer
                                incorporated the comfortable nest
                                started from this tropic port The Love Boat soon will be making another run the love boat
                                promises something for
                                everyone one two three four five six seven eight Sclemeel schlemazel hasenfeffer
                                incorporated.
                            </div>
                            <a class="poppins rmors" href="single_blog.html">Read More<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                    <div class="loopBlog wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="600ms"
                        style="visibility: visible; animation-duration: 700ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="lBThumbs">
                            <img src="img/blog/2.png" alt="">
                            <div class="lBDate">
                                <span>02</span>
                                <span>Feb</span>
                            </div>
                        </div>
                        <div class="loopBlogDetails">
                            <h3><a href="single_blog.html">the tiny ship was tossed</a></h3>
                            <div class="lbMetas">By <a href="single_blog.html">Admin</a> &nbsp;/ &nbsp;<a href="#">1
                                    Like</a> &nbsp;/&nbsp;<a href="#">1 Comment</a></div>
                            <div class="lbDet">
                                Here everyone one two three four five six seven eight Sclemeel schlemazel hasenfeffer
                                incorporated the comfortable nest
                                started from this tropic port The Love Boat soon will be making another run the love boat
                                promises something for
                                everyone one two three four five six seven eight Sclemeel schlemazel hasenfeffer
                                incorporated.
                            </div>
                            <a class="poppins rmors" href="single_blog.html">Read More<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                    <div class="loopBlog wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="650ms"
                        style="visibility: visible; animation-duration: 700ms; animation-delay: 650ms; animation-name: fadeInUp;">
                        <div class="lBThumbs">
                            <img src="img/blog/3.png" alt="">
                            <div class="lBDate">
                                <span>17</span>
                                <span>Mar</span>
                            </div>
                        </div>
                        <div class="loopBlogDetails">
                            <h3><a href="single_blog.html">deluxe apartment in the sky</a></h3>
                            <div class="lbMetas">By <a href="single_blog.html">Admin</a> &nbsp;/ &nbsp;<a href="#">1
                                    Like</a> &nbsp;/&nbsp;<a href="#">1 Comment</a></div>
                            <div class="lbDet">
                                Here everyone one two three four five six seven eight Sclemeel schlemazel hasenfeffer
                                incorporated the comfortable nest
                                started from this tropic port The Love Boat soon will be making another run the love boat
                                promises something for
                                everyone one two three four five six seven eight Sclemeel schlemazel hasenfeffer
                                incorporated.
                            </div>
                            <a class="poppins rmors" href="single_blog.html">Read More<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtop32">
                <div class="col-lg-12">
                    <div class="sop_navigation text-center">
                        <a href="#">1</a>
                        <a class="current" href="#">2</a>
                        <a href="#">3</a>
                        <a class="next" href="#"><i class="flaticon-arrows-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
