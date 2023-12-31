@extends($activeTemplate.'layouts.frontend')
@section('content')
<section class="all-sections pt-60">
    <div class="container-fluid p-max-sm-0">
        <div class="sections-wrapper d-flex flex-wrap justify-content-center">
            <article class="main-section">
                <div class="section-inner">
                    <div class="blog-details-section blog-section">
                        <div class="container">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-9 col-lg-9 mb-30">
                                    <div class="blog-item-area">
                                        <div class="blog-item">
                                            <aside class="aside-bar left-aside">
                                                <div class="aside-inner">
                                                    <div class="add-item slot-1 mb-30">
                                                       
                                                        @php 
                                                            echo advertisements("841x280")
                                                        @endphp
                                                    </div>
                                                </div>
                                            </aside>
                                            <div class="blog-thumb">
                                                <img src="{{ getImage('assets/images/frontend/blog/'.$blog->data_values->blog_image_1,'728x465') }}" alt="@lang('blog')">
                                                <div class="blog-date text-center">
                                                    <h3 class="title">{{showDateTime($blog->created_at, 'd')}}</h3>
                                                    <span class="sub-title">{{showDateTime($blog->created_at, 'M')}}</span>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-inner">
                                                    <h3 class="title">{{__($blog->data_values->title)}}</h3>
                                                    <aside class="aside-bar left-aside">
                                                        <div class="aside-inner">
                                                            <div class="add-item slot-1 mb-30">
                                                               
                                                                @php 
                                                                    echo advertisements("841x280")
                                                                @endphp
                                                            </div>
                                                        </div>
                                                    </aside>
                                                    	@php echo $blog->data_values->description @endphp
                                                    	<aside class="aside-bar left-aside">
                                                            <div class="aside-inner">
                                                                <div class="add-item slot-1 mb-30">
                                                                    
                                                                    @php 
                                                                        echo advertisements("841x280")
                                                                    @endphp
                                                                </div>
                                                            </div>
                                                        </aside>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-social-area d-flex flex-wrap justify-content-between align-items-center">
                                            <h3 class="title">@lang('Share This Post')</h3>
                                            <ul class="blog-social">
                                                <li><a href="http://www.facebook.com/sharer.php?u={{ url(\Request::getRequestUri()) }}" target="__blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="http://twitter.com/share?url={{ url(\Request::getRequestUri()) }}&text=Simple Share Buttons&hashtags=simplesharebuttons" target="__blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="http://www.linkedin.com/shareArticle?mini=true&url={{ url(\Request::getRequestUri()) }}" target="__blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            
                                        </div>
                                                        <aside class="aside-bar left-aside">
                                                            <div class="aside-inner">
                                                                <div class="add-item slot-1 mb-30">
                                                                    
                                                                    @php 
                                                                        echo advertisements("841x280")
                                                                    @endphp
                                                                </div>
                                                            </div>
                                                        </aside>
                                    </div>
                                </div>

                                

                                <div class="col-xl-3 col-lg-3 mb-30">
                                    <div class="sidebar">
                                        
                                        
                                                                                <div class="widget">
                                            <div class="profile-widget">
                                                <div class="profile-widget-header">

                                                    <div class="profile-widget-author">
                                                        <div class="thumb">
                                                                                                                        @php 
                                                            $image = empty($blog->users->image) ? '' :$blog->users->image;
                                                            $username = empty($blog->users->username) ? '' :$blog->users->username;
                                                            @endphp
                                                            <img src="{{ userDefaultImage(imagePath()['profile']['user']['path'].'/'. $image, 'profile_image') }}" alt="{{__($username)}}">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="name">
                                                            <a>{{__($username)}}</a></span>

                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="profile-widget-author-meta mb-10-none">
                                                        <div class="location mb-10">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="btn-area mb-10">
                                                        <a href="{{route('profile', $username)}}" class="btn--base">@lang('View Profile')</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="profile-list-area">
                                                    <ul class="details-list">
                                                        <li><span>@lang('Rating')</span> <span> <span class="ratings"><i class="las la-star text--warning"></i></span> 5</span>
                                                        </li>
                                                        <li><span>@lang('Member Since')</span> <span>26 Jul 2023</span></li>
                                                        <li><span>@lang('Verified User')</span> 
Yes
                                                        </li>
                                                    </ul>
                                                    <div class="widget-btn mt-20">
                                                        <a href="{{route('profile', $username)}}" class="btn--base w-100">@lang('Hire Me')</a>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                                @include($activeTemplate.'partials.left_ad')

                                        
                                        
                                        
                                        <div class="widget">
                                            <h3 class="widget-title">@lang('FEATURED Article')</h3>
                                            <ul class="small-item-list" id="featuredService">
                                                @foreach($fservices as $ser)
                                                    <li class="small-single-item">
                                                        <div class="thumb">
                                                            <img src="{{getImage('assets/images/service/'.$ser->image, imagePath()['service']['size']) }}" alt="@lang('service image')">
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{route('service.details', [slug($ser->title), encrypt($ser->id)])}}">{{__($ser->title)}}</a></h5>
                                                            <div class="ratings">
                                                                <i class="fas fa-star text--warning"></i>
                                                                <span class="rating">({{$ser->rating}})</span>
                                                                <p class="author-like d-inline-flex flex-wrap align-items-center ms-2"><span class="las la-thumbs-up text--base"></span> ({{__($ser->likes)}})</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="widget-btn text-center">
                                            @if($fservices->total() > 4)
                                                <a href="javascript:void(0)" class="btn--base readMore" data-page="2" data-link="{{route('home')}}?page=">@lang('Show More')</a>
                                            @endif
                                        </div>
                                                @include($activeTemplate.'partials.left_ad')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
@include($activeTemplate.'partials.end_ad')

@endsection
@push('fbComment')
	@php echo loadFbComment() @endphp
@endpush


@push('script')
<script>
    'use strict';
    $('.readMore').on('click',function(){
       var link = $(this).data('link');
       var page = $(this).data('page');
       var href = link + page;
       var featuredServiceCount = {{$fservices->total()}};
       $.get(href, function(response){
            var html = $(response).find("#featuredService").html();
            $("#featuredService").append(html);
            var loadMoreCount = 4 * page;
            if(loadMoreCount >= featuredServiceCount){
                $('.readMore').hide()
            }
       });
       $(this).data('page', (parseInt(page) +1));
        
    });
</script>
@endpush