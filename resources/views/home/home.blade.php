@extends('template')

@section('main')
    <main id="site-content" role="main">
    	
<div class="hero shift-with-hiw js-hero">
  <div class="hero__background" data-native-currency="ZAR" aria-hidden="true">
    <div class="air-slideshow hero-slideshow">
      <ul class="air-slideshow__list list-unstyled js-hero-slideshow hide">
        <li class="air-slide air-slide--active">
          <img alt="" src="" width="100%">
        </li>
          <li class="air-slide">
            <img data-image-url="" alt="" role="presentation" width="100%">
          </li>
          <li class="air-slide">
            <img data-image-url="" alt="" role="presentation" width="100%">
          </li>
          <li class="air-slide">
            <img data-image-url="" alt="" role="presentation" width="100%">
          </li>
          <li class="air-slide">
            <img data-image-url="" alt="" role="presentation" width="100%">
          </li>
          <li class="air-slide">
            <img data-image-url="" alt="" role="presentation" width="100%">
          </li>
          <li class="air-slide">
            <img data-image-url="" alt="" role="presentation" width="100%">
          </li>
          <li class="air-slide">
            <img data-image-url="" alt="" role="presentation" width="100%">
          </li>
          <li class="air-slide">
            <img data-image-url="" alt="" role="presentation" width="100%">
          </li>
          <li class="air-slide">
            <img data-image-url="" alt="" role="presentation" width="100%">
          </li>
      </ul>
    </div>
      <video autoplay loop="loop" id="pretzel-video" class="video-playing">
      @if($browser != 'chrome')
        <source src="{{ $home_video }}" id="mp4" type="video/mp4">
      @endif
        <source src="{{ $home_video_webm }}" id="webm" type="video/webm">
      </video>
  </div>

  <div class="hero__content page-container page-container-full text-center">
    <div class="va-container va-container-v va-container-h">
      <div class="va-middle">
        <h2 class="text-branding text-jumbo text-contrast space-1">
          {{ trans('messages.home.title') }}
        </h2>
        <div class="h4 text-contrast space-4">
          {{ trans('messages.home.desc') }}
        </div>
        <div class="show-sm sm-search">
        <form id="simple-search" class="simple-search hide js-p1-simple-search">
<div class="alert alert-with-icon alert-error  hide space-2 js-search-error">
  <i class="icon alert-icon icon-alert-alt"></i>
        {{ trans('messages.home.search_validation') }}
</div>
    <label for="simple-search-location" class="screen-reader-only">
      {{ trans('messages.home.where_do_you_go') }}
    </label>
    <input type="text" placeholder="{{ trans('messages.home.where_do_you_go') }}" autocomplete="off" name="location" id="simple-search-location" class="input-large js-search-location">

    <div class="row row-condensed space-top-2 space-2">
      <div class="col-sm-6">
        <label for="simple-search-checkin" class="screen-reader-only">
          {{ trans('messages.home.checkin') }}
        </label>
        <input id="simple-search-checkin" type="text" name="checkin" class="input-large checkin js-search-checkin" placeholder="{{ trans('messages.home.checkin') }}">
      </div>
      <div class="col-sm-6">
        <label for="simple-search-checkout" class="screen-reader-only">
           {{ trans('messages.home.checkout') }}
          </label>
        <input id="simple-search-checkout" type="text" name="checkout" class="input-large checkout js-search-checkout" placeholder=" {{ trans('messages.home.checkout') }}">
      </div>
    </div>

    <div class="select select-block space-2">
      <label for="simple-search-guests" class="screen-reader-only">
        {{ trans('messages.home.no_of_guests') }}
      </label>
      <select id="simple-search-guests" name="guests" class="js-search-guests">
      @for($i=1;$i<=16;$i++)
        <option value="{{ $i }}"> {{ ($i == '16') ? $i.'+ '.trans_choice('messages.home.guest',$i) : $i.' '.trans_choice('messages.home.guest',$i) }} </option>
      @endfor
      </select>
    </div>
    <button type="submit" class="btn btn-primary btn-large btn-block">
      {{ trans('messages.home.no_of_guest') }}
    </button>
 </form>

  <div class="input-addon js-p1-search-cta" id="sm-search-field">
    <span class="input-stem input-large fake-search-field">
      {{ trans('messages.home.where_do_you_go') }}
    </span>
    <i class="input-suffix btn btn-primary icon icon-full icon-search"></i>
  </div>
        </div>
        <a href="javascript:void(0);" class="btn hide-sm btn-contrast btn-large btn-semi-transparent js-show-how-it-works">
         {{ trans('messages.home.how_it_works') }}
        </a>
      </div>
    </div>
    <div class="hero__content-footer hide-sm">
      <div class="col-sm-12">
<div id="searchbar">
<div class="searchbar" data-reactid=".1">
    <form action="{{ url('s') }}" class="simple-search" method="get" id="searchbar-form" name="simple-search">
    <div class="saved-search-wrapper searchbar__input-wrapper">
      <label class="input-placeholder-group searchbar__location">
        <span class="input-placeholder-label screen-reader-only">{{ trans('messages.home.where_do_you_go') }}</span>
        <input class="menu-autocomplete-input form-inline location input-large input-contrast" placeholder="{{ trans('messages.home.where_do_you_go') }}" type="text" name="location" id="location" aria-autocomplete="both" autocomplete="off" value="">
        </label>
        <div class="searchbar__location-error hide">{{ trans('messages.home.search_validation') }}</div>
        <label class="input-placeholder-group searchbar__checkin">
        <span class="input-placeholder-label screen-reader-only">{{ trans('messages.home.checkin') }}</span>
        <input type="text" id="checkin" class="checkin input-large input-contrast ui-datepicker-target" name="checkin" placeholder="{{ trans('messages.home.checkin') }}">
        </label>
        <label class="input-placeholder-group searchbar__checkout">
        <span class="input-placeholder-label screen-reader-only"> {{ trans('messages.home.checkout') }}</span>
        <input type="text" id="checkout" class="checkout input-large input-contrast ui-datepicker-target" name="checkout" placeholder=" {{ trans('messages.home.checkout') }}">
        </label>
        <label class="searchbar__guests">
        <span class="screen-reader-only">{{ trans('messages.home.no_of_guests') }}</span>
        <div class="select select-large">
        <select id="guests" name="guests">
        @for($i=1;$i<=16;$i++)
        <option value="{{ $i }}"> {{ ($i == '16') ? $i.'+ '.trans_choice('messages.home.guest',$i) : $i.' '.trans_choice('messages.home.guest',$i) }} </option>
        @endfor
        </select>
        </div>
        </label>
        <div id="autocomplete-menu-sbea76915" aria-expanded="false" class="menu hide" aria-role="listbox">
        <div class="menu-section">
        </div>
        </div>
        </div>
        <input type="hidden" name="source" value="bb">
        <button id="submit_location" type="submit" class="searchbar__submit btn btn-primary btn-large">{{ trans('messages.home.search') }}</button>
{!! Form::close() !!}

</div>
</div>

      </div>
    </div>
  </div>
</div>

<div class="hide show-md show-lg">
  
<section class="how-it-works how-it-works--overlay js-how-it-works" aria-hidden="true" style="top: 0px;display:none;height:361px;">
    <a href="javascript:void(0);" class="how-it-works__close panel-close js-close-how-it-works">
      <span class="screen-reader-only">
        {{ trans('messages.home.close') }} {{ trans('messages.home.how_it_works') }}
      </span>
    </a>

  <div class="page-container-responsive panel-contrast text-contrast">

    <h2 class="screen-reader-only">
      {{ trans('messages.home.how_it_works') }}
    </h2>

    <div class="row space-top-8 text-center">

      <div class="how-it-works__step how-it-works__step-one col-md-4">
        <div class="panel-body">
          <div class="how-it-works__image"></div>
          <h3>
            {{ trans('messages.home.discover_places') }}
          </h3>
          <p>
            {{ trans('messages.home.discover_places_desc') }}
          </p>
        </div>
      </div>

      <div class="how-it-works__step how-it-works__step-two col-md-4">
        <div class="panel-body">
          <div class="how-it-works__image"></div>
          <h3>
            {{ trans('messages.home.book_stay') }}
          </h3>
          <p>
            {{ trans('messages.home.book_stay_desc', ['site_name'=>$site_name]) }}
          </p>
        </div>
      </div>

      <div class="how-it-works__step how-it-works__step-three col-md-4">
        <div class="panel-body">
          <div class="how-it-works__image"></div>
          <h3>
            {{ trans('messages.home.travel') }}
          </h3>
          <p>
            {{ trans('messages.home.travel_desc') }}
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

</div>

<div class="panel panel-dark">
  <div id="discovery-container">
    <div class="discovery-section hide page-container-responsive page-container-no-padding" id="discovery-saved-searches">
    </div>

    <div class="discovery-section hide page-container-responsive page-container-no-padding" id="weekend-recommendations">
    </div>

    <div class="discovery-section page-container-responsive page-container-no-padding row-space-6" id="discover-recommendations">
      <div class="section-intro text-center row-space-6 row-space-top-8">
        <h2 class="row-space-1">
          <strong>{{ trans('messages.home.explore_world') }}</strong>
        </h2>
        <p class="text-lead">
          {{ trans('messages.home.explore_desc') }}
        </p>
      </div>
      <div class="discovery-tiles">
        
<div class="row">
  @for($i=0;$i<= $city_count-1;$i++)

  @if($i ==0 || $i%10 ==0)

  <div class="col-lg-8 col-md-12 rm-padding-sm">

  @else
        
        {{--*/ $j = 6 /*--}}

        {{--*/ $x = 7 /*--}}

        @if($i == $j || $i == $j+10)
        
              <div class=" col-lg-8 col-md-12 rm-padding-sm hide-sm">
              
        @else
              @if($i==$x || $i==$x+10 )
              <div class="col-lg-4 col-md-6 hide-sm rm-padding-sm col-switch col-md-push-6 col-lg-push-0">
              @else
              <div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm">
              @endif
        @endif
  @endif

    <div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " style="background-image:url({{ $home_city[$i]->image_url }});">
    <a href="{{URL::to('/')}}/s?location={{$home_city[$i]->name}}&source=ds" class="link-reset" data-hook="discovery-card">
    <div class="va-container va-container-v va-container-h">
      <div class="va-middle text-center text-contrast">
          <div class="h2">
            <strong>
             {{$home_city[$i]->name}}
            </strong>
          </div>
      </div>
    </div>
    </a>
</div>

</div>

@endfor 
 
</div>

      </div>
    </div>
  </div>
</div>

<!--[if (gt IE 8)|!(IE)]><!-->
<div id="belong-video-player" class="fullscreen-video-player fullscreen-video-player--hidden" aria-hidden="true">
  <div class="row row-table row-full-height">
    <div class="col-sm-12 col-middle text-center">
      <video preload="none">
  <source src="{{ $home_video }}" type="video/mp4">
</video>

      <i id="play-button-belong" class="fullscreen-video-player__icon icon icon-video-play icon-white hide"></i>
      <a id="close-fullscreen-belong" class="fullscreen-video-player__close link-reset" href="{{URL::to('/')}}/#">
        <i class="icon icon-remove"></i>
        <span class="screen-reader-only">
          {{ trans('messages.home.exit_full_screen') }}
        </span>
      </a>
    </div>
  </div>
</div>
<div id="belo-video-player" class="fullscreen-video-player fullscreen-video-player--hidden" aria-hidden="true">
  <div class="row row-table row-full-height">
    <div class="col-sm-12 col-middle text-center">
      <video preload="none">
  <source src="{{ $home_video }}" type="video/mp4">
</video>

      <i id="play-button-belo" class="fullscreen-video-player__icon icon icon-video-play icon-white hide"></i>
      <a id="close-fullscreen-belo" class="fullscreen-video-player__close link-reset" href="{{URL::to('/')}}/#">
        <i class="icon icon-remove"></i>
        <span class="screen-reader-only">
          {{ trans('messages.home.exit_full_screen') }}
        </span>
      </a>
    </div>
  </div>
</div>
<!--<![endif]-->

    </main>
 @stop