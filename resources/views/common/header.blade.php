   
<div id="header" class="makent-header new {{ (!isset($exception)) ? (Route::current()->uri() == '/' ? 'shift-with-hiw' : '') : '' }}">    
    <header class="header--sm show-sm" aria-hidden="true" role="banner">
  <a href="javascript:void(0);" aria-label="Homepage" data-prevent-default="" class="link-reset burger--sm">
    <i class="icon icon-reorder icon-rausch"></i>
    <span class="screen-reader-only">
      {{ $site_name }}
    </span>
  </a>
  <div class="title--sm text-center">
      @if(!isset($exception)) 
        @if(Route::current()->uri() == '/' || Request::segment(1) == 'help')
          <a href="{{ url() }}" class="header-belo" style="{{ $logo_style }}">
            <span class="screen-reader-only">
              {{ $site_name }}
            </span>
          </a>
        @elseif(Request::segment(1) != 'help')
          <button class="btn btn-block search-btn--sm search-modal-trigger">
            <i class="icon icon-search icon-gray"></i>
            <span class="search-placeholder--sm">
              {{ trans('messages.header.where_are_you_going') }}
            </span>
          </button>
        @endif
      @endif
  </div>
  <div class="action--sm"></div>
  <nav role="navigation" class="nav--sm"><div class="nav-mask--sm"></div>
<div class="nav-content--sm panel text-white">
  <div class="nav-header {{ (Auth::user()->user()) ? '' : 'items-logged-in' }}">
    <div class="nav-profile clearfix">
      <div class="user-item pull-left">
        <a href="{{ url() }}/users/show/{{ (Auth::user()->user()) ? Auth::user()->user()->id : '0' }}" class="link-reset user-profile-link">
          <div class="media-photo media-round user-profile-image" style="background:rgba(0, 0, 0, 0) url({{ (Auth::user()->user()) ? Auth::user()->user()->profile_picture->header_src : '' }}) no-repeat scroll 0 0 / cover">
          </div>
          {{ (Auth::user()->user()) ? Auth::user()->user()->first_name : 'User' }}
        </a>
      </div>
    </div>
    <hr>
  </div>
  <div class="nav-menu-wrapper">
    <div class="va-container va-container-v va-container-h">
      <div class="va-middle nav-menu panel-body">
        <ul class="menu-group list-unstyled row-space-3">
          <li>
            <a rel="nofollow" class="link-reset menu-item" href="{{ url() }}">
              {{ trans('messages.header.home') }}
            </a>
          </li>
          <li class="{{ (Auth::user()->user()) ? 'items-logged-out' : '' }}">
            <a rel="nofollow" class="link-reset menu-item" href="{{ url() }}/signup_login" data-signup-modal="">
              {{ trans('messages.header.signup') }}
            </a>
          </li>
          <li class="{{ (Auth::user()->user()) ? 'items-logged-out' : '' }}">
            <a rel="nofollow" class="link-reset menu-item" href="{{ url() }}/login" data-login-modal="">
              {{ trans('messages.header.login') }}
            </a>
          </li>
          <li class="{{ (Auth::user()->user()) ? '' : 'items-logged-in' }}">
            <a class="link-reset menu-item" rel="nofollow" href="{{ url() }}/rooms/new">
              {{ trans('messages.header.list_your_space') }}
            </a>
          </li>
          <li class="{{ (Auth::user()->user()) ? '' : 'items-logged-in' }}">
            <a class="link-reset menu-item" rel="nofollow" href="{{ url() }}/inbox">
              {{ trans('messages.header.inbox') }}
              <i class="alert-count unread-count--sm fade text-center">
                0
              </i>
            </a>
          </li>
          <li class="{{ (Auth::user()->user()) ? '' : 'items-logged-in' }}">
            <a class="link-reset menu-item" rel="nofollow" href="{{ url() }}/rooms">
              {{ trans_choice('messages.header.your_listing', 2) }}
            </a>
          </li>
          <li class="{{ (Auth::user()->user()) ? '' : 'items-logged-in' }}">
            <a class="link-reset menu-item" rel="nofollow" href="{{ url() }}/trips/current">
              {{ trans('messages.header.your_trips') }}
            </a>
          </li>
          <li>
            <a class="search-modal-trigger link-reset menu-item" data-prevent-default="" rel="nofollow" href="{{ url() }}/s">
              {{ trans('messages.home.search') }}
            </a>
          </li>
        </ul>
        
        <ul class="menu-group list-unstyled row-space-3">
          <li>
            <a class="link-reset menu-item" rel="nofollow" href="{{ url() }}/help">
              {{ trans('messages.header.help') }}
            </a>
          </li>
          <li>
            <a class="link-reset menu-item" rel="nofollow" href="{{ url() }}/invite">
              {{ trans('messages.header.invite_friends') }}
            </a>
          </li>
          <li class="{{ (Auth::user()->user()) ? '' : 'items-logged-in' }}">
            <a class="link-reset menu-item logout" rel="nofollow" href="{{ url() }}/logout">
              {{ trans('messages.header.logout') }}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</nav>
  <div class="search-modal-container">
  <div class="modal hide" role="dialog" id="search-modal--sm" aria-hidden="false" tabindex="-1">
  <div class="modal-table">
    <div class="modal-cell">
      <div class="modal-content">
        <div class="panel-header modal-header">
          <a href="#" class="modal-close" data-behavior="modal-close">
            <span class="screen-reader-only">{{ trans('messages.home.close') }}</span>
            <span class="aria-hidden"></span>
          </a>
          {{ trans('messages.home.search') }}
        </div>
        <div class="panel-body">
          <div class="modal-search-wrapper--sm">
              <input type="hidden" name="source" value="mob">
              <div class="row">
                  <div class="searchbar__location-error hide" style="left:22px; top:2%;">{{ trans('messages.home.search_validation') }}</div>
                <div class="col-sm-12">
                  <label for="header-location--sm">
                    <span class="screen-reader-only">{{ trans('messages.header.where_are_you_going') }}</span>
                    <input type="text" placeholder="{{ trans('messages.header.where_are_you_going') }}" autocomplete="off" name="location" id="header-location--sm" class="input-large" value="{{ @$location }}">
                  </label>
                </div>
              </div>
              <div class="row row-condensed">
                <div class="col-sm-6">
                  <label class="checkin">
                    <span class="screen-reader-only">{{ trans('messages.home.checkin') }}</span>
                    <input type="text" name="checkin" id="modal_checkin" class="checkin input-large ui-datepicker-target" placeholder="{{ trans('messages.home.checkin') }}" value="{{ @$checkin }}">
                  </label>
                </div>
                <div class="col-sm-6">
                  <label class="checkout">
                    <span class="screen-reader-only">{{ trans('messages.home.checkout') }}</span>
                    <input type="text" name="checkout" id="modal_checkout" class="checkout input-large ui-datepicker-target" placeholder="{{ trans('messages.home.checkout') }}" value="{{ @$checkout }}">
                  </label>
                </div>
              </div>
              <div class="row space-2 space-top-1">
                <div class="col-sm-12">
                  <label for="header-search-guests" class="screen-reader-only">
                    {{ trans('messages.home.no_of_guests') }}
                  </label>
                  <div class="select select-block select-large">
                    <select id="modal_guests" name="guests--sm">
                    @for($i=1;$i<=16;$i++)
                      <option value="{{ $i }}" {{ ($i == @$guest) ? 'selected' : '' }}>{{ $i }} guest{{ ($i>1) ? 's' : '' }}</option>
                    @endfor
                    </select>
                  </div>
                </div>
              </div>
              <div class="panel room-type-filter--sm row-space-top-1">
                <div class="panel-body">
                  <div class="row text-center">
                   @foreach($header_room_type as $row)
                    <input type="checkbox" id="room-type-{{ $row->id }}--sm" name="room_types[]" value="{{ $row->id }}" {{ (@in_array($row->id,@$room_type_selected)) ? 'checked' : '' }}>
                    <label class="col-sm-4 modal-filter needsclick" for="room-type-{{ $row->id }}--sm">
                    @if($row->id == 1)
                    <i class="icon icon-entire-place icon-size-2 needsclick"></i>
                    @endif
                    @if($row->id == 2)
                    <i class="icon icon-private-room icon-size-2 needsclick"></i>
                    @endif
                    @if($row->id == 3)
                    <i class="icon icon-shared-room icon-size-2 needsclick"></i>
                    @endif
                    <br>{{ $row->name }}
                    </label>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="row row-space-top-2">
                <div class="col-sm-12">
                  <button type="submit" id="search-form--sm-btn" class="btn btn-primary btn-large btn-block">
                    <i class="icon icon-search"></i>
                    {{ trans('messages.header.find_place') }}
                  </button>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</header>


    <header class="regular-header clearfix hide-sm" id="old-header" role="banner">
  <a aria-label="Homepage" href="{{ url() }}" class="header-belo pull-left {{ (!isset($exception)) ? (Route::current()->uri() == '/' ? 'home-logo' : '') : '' }}" style="{{ (!isset($exception)) ? (Route::current()->uri() == '/' ? $home_logo_style : $logo_style) : $logo_style }}">
    <span class="screen-reader-only">
      {{ $site_name }}
    </span>
  </a>
<!-- hide-sm -->
@if(Request::segment(1) != 'help')
  <ul class="nav pull-left  list-unstyled search-form-container" id="search-form-header">
  <li id="header-search" class="search-bar-wrapper pull-left medium-right-margin">
  <form action="{{ url() }}/s" class="search-form">
  <div class="search-bar">
  <i class="icon icon-search icon-gray h4"></i>
  <label class="screen-reader-only" for="header-search-form">{{ trans('messages.header.where_are_you_going') }}</label>
  <input type="text" placeholder="{{ trans('messages.header.where_are_you_going') }}" autocomplete="off" name="location" id="header-search-form" class="location" value="">
  </div>
  <div id="header-search-settings" class="panel search-settings header-menu">
  <div class="panel-body clearfix basic-settings">
  <div class="setting checkin">
  <label for="header-search-checkin" class="field-label">
  <strong>{{ trans('messages.home.checkin') }}</strong>
  </label>
  <input type="text" id="header-search-checkin" data-field-name="check_in_dates" name="checkin" class="checkin ui-datepicker-target" placeholder="{{ trans('messages.rooms.dd-mm-yyyy') }}"></div>

  <div class="setting checkout">
  <label for="header-search-checkout" class="field-label">
  <strong>{{ trans('messages.home.checkout') }}</strong>
  </label>
  <input type="text" id="header-search-checkout" data-field-name="check_out_dates" class="checkout ui-datepicker-target" name="checkout" placeholder="{{ trans('messages.rooms.dd-mm-yyyy') }}"></div>

  <div class="setting guests">
  <label for="header-search-guests" class="field-label">
  <strong>{{ trans_choice('messages.home.guest', 2) }}</strong>
  </label>
  <div class="select select-block">
  <select id="header-search-guests" data-field-name="number_of_guests" name="guests">
  @for($i=1;$i<=16;$i++)
    <option value="{{ $i }}"> {{ ($i == '16') ? $i.'+ ' : $i }} </option>
  @endfor
  </select>
  </div>
  </div>
  </div>

  <div class="panel-header menu-header normal-line-height">
  <small>
  <strong>{{ trans('messages.header.room_type') }}</strong>
  </small>
  </div>

  <div class="panel-body">
  <div class="row-space-4">
  @foreach($header_room_type as $row)
  <label class="checkbox menu-item" for="header_room_type_{{ $row->id }}">
  <input type="checkbox" id="header_room_type_{{ $row->id }}" name="room_types[]" value="{{ $row->id }}">
  @if($row->id == 1)
  <i class="icon icon-entire-place horizontal-margin-medium"></i>
  @endif
  @if($row->id == 2)
  <i class="icon icon-private-room horizontal-margin-medium"></i>
  @endif
  @if($row->id == 3)
  <i class="icon icon-shared-room horizontal-margin-medium"></i>
  @endif
  <span>{{ $row->name }}</span>
  </label>
  @endforeach
  </div>
  <button type="submit" class="btn btn-primary btn-block">
  <i class="icon icon-search"></i>
  <span>{{ trans('messages.header.find_place') }}</span>
  </button>
  </div>
  </div>
  </form>
</li>

  <li class="dropdown-trigger pull-left large-right-margin hide-sm hide" data-behavior="recently-viewed__container">
    <a class="no-crawl link-reset" href="{{ url() }}/login?_ga=1.237472128.1006317855.1436675116#" data-href="/history#docked-filters" data-behavior="recently-viewed__trigger">
      <span class="show-lg recently-viewed__label">
        {{ trans('messages.header.recently_viewed') }}
      </span>
      <span class="hide-lg recently-viewed__label">
        <i class="icon icon-recently-viewed icon-gray h4"></i>
      </span>
      <i class="icon icon-caret-down icon-light-gray h5"></i>
    </a>
    <div class="tooltip tooltip-top-left dropdown-menu recently-viewed__dropdown" data-behavior="recently-viewed__dropdown">
    </div>
  </li>
  <!-- show-md -->
    <li class="browse-container dropdown-trigger pull-left">
      <a class="link-reset header-browse-trigger" href="#" data-prevent-default="" id="header-browse-trigger">
  {{ trans('messages.header.browse') }}
   <i class="icon icon-caret-down icon-light-gray h5"></i>
</a>
<ul class="tooltip tooltip-top-left dropdown-menu list-unstyled">
  <li>
    <a href="{{ url('wishlists/popular') }}" class="link-reset menu-item header-browse-popular">
      {{ trans('messages.header.popular') }}
    </a>
  </li>
  <li>
    <a href="{{ url('locations') }}" class="hide link-reset menu-item header-browse-neighborhoods">
      {{ trans('messages.header.neighborhoods') }}
    </a>
  </li>
</ul>

    </li>
</ul>
  @endif

  <ul class="nav pull-right help-menu list-unstyled">
  @if(Request::segment(1) != 'help')
  <li id="header-help-menu" class="help-menu-container pull-left large-right-margin hide-md dropdown-trigger">
    <a class="help-toggle link-reset" href="{{ url('help') }}">
      {{ trans('messages.header.help') }}
    </a>
  </li>
  @endif
  <!-- <li id="header-help-menu" class="help-menu-container pull-left large-right-margin hide-md dropdown-trigger">
    <a class="help-toggle link-reset" href="{{ url('help') }}">
      {{ trans('messages.header.help') }}
      <i class="icon icon-caret-down icon-light-gray h5"></i>
    </a>
    <div class="tooltip tooltip-top-right dropdown-menu help-dropdown">
      <ul class="list-layout">
  <li class="search-bar--help hide">
    <form action="{{ url('help/search') }}" class="search-form--help menu-item">
      <div class="input-addon">
        <input type="text" placeholder="Search the help center" autocomplete="off" name="q" class="input-stem">
        <input type="hidden" name="search_from" value="hdr">
        <i class="btn btn-primary icon icon-search input-suffix form-submit--help"></i>
      </div>
    </form>
  </li>
  <li class="visit-helpcenter-cta hide">
    <a href="{{ url('help') }}" class="help-center-link menu-item">
      {{ trans('messages.header.visit_help_center') }} »
    </a>
  </li>
  <li class="loading"></li>
  <li class="all_faqs hide">
    <a href="{{ url('help') }}" class="link-reset menu-item">
      {{ trans('messages.header.see_all_faqs') }}
    </a>
  </li>
</ul>
    </div>
  </li> -->
    <li class="list-your-space pull-left">
        <a id="list-your-space" class="btn btn-special list-your-space-btn" href="{{ url('rooms/new') }}">
          {{ trans('messages.header.list_your_space') }}
        </a>
    </li>
</ul>


@if(!Auth::user()->check())
  <ul class="nav pull-right logged-out list-unstyled medium-right-margin">
  <li id="sign_up" class="pull-left medium-right-margin">
    <a data-signup-modal="" data-header-view="true" href="{{ url('signup_login') }}" data-redirect="" class="link-reset">
      {{ trans('messages.header.signup') }}
    </a>
  </li>
  <li id="login" class="pull-left">
    <a data-login-modal="" href="{{ url('login') }}" data-redirect="" class="link-reset">
      {{ trans('messages.header.login') }}
    </a>
  </li>
</ul>
@endif

@if(Auth::user()->check())
  <ul class="nav pull-right list-unstyled medium-right-margin">
  <li id="inbox-item" class="inbox-item pull-left dropdown-trigger js-inbox-comp">
    <a href="{{ url('inbox') }}" rel="nofollow" class="no-crawl link-reset inbox-icon">
      <i class="alert-count text-center {{ (Auth::user()->user()->inbox_count()) ? '' : 'fade' }}">{{ Auth::user()->user()->inbox_count() }}</i>
      <i class="icon icon-envelope icon-gray">
        <span class="text-hide hide">
          {{ trans('messages.header.inbox') }}
        </span>
      </i>
    </a>
    <div class="tooltip tooltip-top-right dropdown-menu list-unstyled header-dropdown
                notifications-dropdown hide">
    </div>
  </li>
</ul>


  <ul class="nav pull-right list-unstyled" role="navigation">
  <li class="user-item pull-left medium-right-margin dropdown-trigger">
    <a class="link-reset header-avatar-trigger" id="header-avatar-trigger" href="{{ url('login') }}">
      <div class="media-photo media-round user-profile-image" style="background: rgba(0, 0, 0, 0) url({{ Auth::user()->user()->profile_picture->header_src }}) no-repeat scroll 0 0 / cover" ></div>
      <span class="value_name">
        {{ Auth::user()->user()->first_name }}
      </span>
      <i class="icon icon-caret-down icon-light-gray h5"></i>
    </a>
    <ul class="tooltip tooltip-top-right dropdown-menu list-unstyled header-dropdown">
      <li>
        <a href="{{ url('dashboard') }}" rel="nofollow" class="no-crawl link-reset menu-item item-dashboard">
          {{ trans('messages.header.dashboard') }}
        </a>
      </li>
      <li class="listings">
        <a href="{{ url('rooms') }}" rel="nofollow" class="no-crawl link-reset menu-item item-listing">
          <span class="plural">
            {{ trans_choice('messages.header.your_listing',2) }}
          </span>
        </a>
      </li>
      <li class="reservations" style="display: none;">
        <a href="{{ url('my_reservations') }}" rel="nofollow" class="no-crawl link-reset menu-item item-reservation">
           {{ trans('messages.header.your_reservations') }}
        </a>
      </li>
      <li>
        <a href="{{ url('trips/current') }}" rel="nofollow" class="no-crawl link-reset menu-item item-trips">
          {{ trans('messages.header.your_trips') }}
        </a>
      </li>
      @if(Auth::user()->user()->wishlists)
      <li>
        <a href="{{ url('wishlists/my') }}" id="wishlists" class="no-crawl link-reset menu-item item-wishlists">
          {{ trans_choice('messages.header.wishlist',2) }}
        </a>
      </li>
      @endif
      <li class="groups hide">
        <a href="{{ url('groups') }}" rel="nofollow" class="no-crawl link-reset menu-item item-groups">
          {{ trans('messages.header.groups') }}
        </a>
      </li>
      <li>
        <a href="{{ url('invite') }}" class="no-crawl link-reset menu-item item-invite-friends">
          {{ trans('messages.referrals.travel_credit') }}
          <span class="label label-pink label-new">
          </span>
        </a>
      </li>
      <li>
        <a href="{{ url('users/edit') }}" rel="nofollow" class="no-crawl link-reset menu-item item-user-edit">
         {{ trans('messages.header.edit_profile') }}
        </a>
      </li>
      <li>
        <a href="{{ url('account') }}" rel="nofollow" class="no-crawl link-reset menu-item item-account">
          {{ trans('messages.header.account') }}
        </a>
      </li>
      <li class="business-travel hide">
        <a href="{{ url('business') }}" rel="nofollow" class="no-crawl link-reset menu-item item-business-travel">
          {{ trans('messages.header.business_travel') }}
        </a>
      </li>
      <li>
        <a href="{{ url('logout') }}" rel="nofollow" class="no-crawl link-reset menu-item header-logout">
          {{ trans('messages.header.logout') }}
        </a>
      </li>
    </ul>
  </li>
</ul>
@endif

</header>
</div>

<div class="flash-container">
@if(Session::has('message') && (!Auth::user()->check() || Route::current()->uri() == 'rooms/{id}' || Route::current()->uri() == 'payments/book/{id?}'))
  <div class="alert {{ Session::get('alert-class') }}" role="alert">
    <a href="#" class="alert-close" data-dismiss="alert"></a>
  {{ Session::get('message') }}
  </div>
@endif
</div>
