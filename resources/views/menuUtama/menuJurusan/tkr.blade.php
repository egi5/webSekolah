@extends('home', [
    'title' => 'TKR'
])

@section('containerMenuUtama')
@foreach ( $jurusan as $jurusan )
<div class=" blog-post-single">
    <div class="blog-item">
        <div class="post-content">
            <div class="post-date">
                <span class="day">30</span>
                <span class="month">Nov</span>
            </div>
            <div class="meta-info-blog">
                <span><i class="fa fa-calendar"></i> <a>{{ $jurusan->nama_jurusan }}</a> </span>
            </div>
            <div class="blog-title">
                {{-- <h2><a title="">{{ $jr->deskripsi }}</a></h2> --}}
            </div>
            <div class="blog-desc">
                {!! $jr->deskripsi !!}
            </div>							
        </div>
    </div>
</div>
@endforeach
    <div class="all-title-box">
        <div class="container text-center">
            {{-- <h1>{{ $jr->nama_jurusan }}</h1> --}}
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    {{-- <p class="lead">{!! $jr->deskripsi !!}</p> --}}
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <img src="menuHome/images/blog_1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Engineering</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star-half"></i>								
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <img src="menuHome/images/blog_2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Hotel Management</a></h2>
                            </div>
                            <div class="blog-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star-half"></i>								
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->	
                
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <img src="menuHome/images/blog_3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Biotechnology</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star-half"></i>								
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->
                
                <div class="col-lg-3 col-md-6 col-12">
                <div class="course-item">
                        <div class="image-blog">
                            <img src="menuHome/images/blog_4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Medical Sciences</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star-half"></i>								
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->			
            
            <hr class="hr3"> 
            
            <div class="row"> 
                <div class="col-lg-3 col-md-6 col-12">
                <div class="course-item">
                        <div class="image-blog">
                            <img src="menuHome/images/blog_4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Medical Sciences</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star-half"></i>								
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->
                
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <img src="menuHome/images/blog_2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Hotel Management</a></h2>
                            </div>
                            <div class="blog-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star-half"></i>								
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->
                
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <img src="menuHome/images/blog_5.jpg" alt="" class="img-fluid">
                        </div>		
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Finance</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star-half"></i>								
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <img src="menuHome/images/blog_6.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="#" title="">Fashion Designing</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                            </div>	
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star-half"></i>								
                            </div>
                        </div>
                        <div class="course-meta-bot">
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

@endsection