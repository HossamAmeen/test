@extends('web._masters.main')

@section('content')
       <header class="single-header">
           <img src="{{asset('resources/assets/web/images/single-background.jpg')}}" class="img-responsive page-head">
        </header>
        
        <section class="articles-sec padding-sec">    
            <div class="container">
                <div class="row">
                    <div class="col-md-3 best-watch">

                        <h3 class="popular-head"> الاكتر مشاهده </h3>
                        @foreach($newsMostWatcheds as $newsMostWatched )
                            <div class="row popular">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-6">
                                            <img src="{{asset($newsMostWatched->img)}}" class="img-responsive" alt="article">
                                        </div>
                                        <div class="col-md-7 col-sm-6">
                                            <p class="description"><a href="{{url('news/'.$newsMostWatched->id)}}">{{$newsMostWatched->ar_title}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="row">

                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMahmoud.M.abdelshafy%2F&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="single">
				 	<h1 class="head">{{ $news->ar_title }}</h1>
					
					<div class="content-body">
						<img src="{{ asset($news->img) }}" alt="" class="img-responsive">
						<div class="info">
							<span class="pull-right date"><i class="fa fa-calendar"></i> {{ $news->date }}</span>
						</div>
                        <br/>
						<div class="body">
							{{ $news->description }}
						</div>
					</div>
				 </div>
                     </div>
                  </div>
                </div>
        </section>
<!--        real estate image-->
        <section>
            <img src="images/before-footer.png" class="img-responsive" alt="real estate background">
        </section>
@endsection