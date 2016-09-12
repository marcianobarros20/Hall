<div id="js-manage-listing-content-container" class="manage-listing-content-container">
  <div class="manage-listing-content-wrapper">
  <div id="js-manage-listing-content" class="manage-listing-content">
  <div class="cya cya-needs-to-choose-model">
<div class="ib-better-off-state {{ ($result->booking_type == NULL) ? '' : 'hide' }}" id="before_select">
<div>
<div>
<div>
<h3>
<span>{{ trans('messages.lys.booking_title') }}</span>
</h3>
<p class="lead text-muted space-5">
<span>{{ trans('messages.lys.booking_desc') }}</span>
</p>
<div class="row">
<div style="height: 340.033px;" class="col-md-6">
<div style="height:100%;padding-bottom:82px;position:relative;" class="panel">
<div class="panel-body">
<div class="row row-condensed">
<div class="col-sm-7">
<span>{{ trans('messages.lys.review_each_request') }}</span>
</div>
<div class="col-sm-5 text-right">
<div class="cya-icon cya-icon-request">
</div>
</div>
</div>
</div>
<div class="panel-body space-2">
<ul class="text-muted space-6 initial-choose-model__choice-description">
<li class="space-2">
<span>{{ trans('messages.lys.guests_send_booking_requests') }}</span>
</li>
<li class="space-2">
<span>{{ trans('messages.lys.approve_decline_within_24hrs') }}</span>
</li>
</ul>
</div>
<div style="padding:20px;position:absolute;bottom:0;left:0;right:0;">
<button class="btn btn-large btn-block" ng-click="booking_select('request_to_book')">
<span>{{ trans('messages.lys.select') }}</span>
</button>
</div>
</div>
</div>
<div style="height: 340.033px;" class="col-md-6">
<div style="height:100%;padding-bottom:82px;position:relative;" class="panel">
<div class="panel-body">
<div class="row row-condensed">
<div class="col-sm-7">
<span>{{ trans('messages.lys.guest_book_instantly') }}</span>
</div>
<div class="col-sm-5 text-right">
<div class="cya-icon cya-icon-ib">
</div>
</div>
</div>
</div>
<div class="panel-body space-2">
<ul class="text-muted space-6 initial-choose-model__choice-description">
<!-- <li class="space-2">
<span>Set controls for who books and when.</span>
</li> -->
<li class="space-2">
<span>{{ trans('messages.lys.guests_book_without_needing_approval') }}</span>
</li>
</ul>
</div>
<div style="padding:20px;position:absolute;bottom:0;left:0;right:0;">
<button class="btn btn-large btn-block" ng-click="booking_select('instant_book')">
<span>{{ trans('messages.lys.select') }}</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="js-ib-state {{ ($result->booking_type == 'request_to_book') ? '' : 'hide' }}" id="request_to_book">
    <div data-placeholder="cya-header">
    <div>
    <div class="js-section space-5">
    <h3>{{ trans('messages.lys.instant_book') }}</h3>
    <p class="text-muted space-3">
    <span>{{ trans('messages.lys.guests_book_without_sending_requests') }}</span>
    <span>&nbsp;</span>
    <a href="javascript:about(0);" ng-click="booking_change('request_to_book')">{{ trans('messages.lys.change') }}</a>
    </p>
    </div>
    <hr>
    </div>
    </div>
<div class="row space-6">
<div class="text-center space-4">
<img src="{{ url('images/request-a9f91a2efae1e57a35cc333007da0e8e.png') }}">
</div>
<div class="space-1 text-center">
<h3>{{ trans('messages.lys.you_respond_request_within_24hrs') }}</h3>
</div>
<div class="row space-1 space-4">
<div class="col-sm-10 col-center">
<p class="text-center">
<span>{{ trans('messages.lys.request_book_with_confirmation') }}</span>
<span> &nbsp;</span>
</p>
</div>
</div>
<hr>
</div>
  
</div>
<div class="ib-better-off-state {{ ($result->booking_type == 'instant_book') ? '' : 'hide' }}" id="instant_book">
<div>
<div>
<div>
<div class="js-section space-5">
<h3>{{ trans('messages.lys.guests_request_book') }}</h3>
<p class="text-muted space-3">
<span>{{ trans('messages.lys.you_respond_request_within_24hrs') }}</span>
<span>&nbsp;</span>
<a href="javascript:about(0);" ng-click="booking_change('instant_book')">{{ trans('messages.lys.change') }}</a>
</p>
</div>
</div>
<hr>
</div>
<div>
<div class="row space-6">
<div class="text-center space-4">
<img src="{{ url('images/ib-006e2467911dd760e67f7972b4fea73b.png') }}">
</div>
<div class="space-1 text-center">
<h3>{{ trans('messages.lys.more_reservations_less_work') }}</h3>
</div>
<div class="row space-1 space-4">
<div class="col-sm-10 col-center">
<p class="text-center">
<span>{{ trans('messages.lys.guests_book_with_click') }}</span>
<span>&nbsp;</span>
<span>{{ trans('messages.lys.instant_book_often') }}</span>
<span> &nbsp;</span>
</p>
</div>
</div>
<hr>
</div>
<div class="row text-center hide">
<div class="row space-6">
<strong>{{ trans('messages.lys.what_new_with_instant_book') }}</strong>
</div>
<div class="row space-4">
<div class="col-sm-11 col-center">
<div class="col-sm-5 undefined">
<div class="row space-2">
<img src="{{ url('images/icon_safeguest@1x.png') }}">
</div>
<div class="row space-2">
<p>{{ trans('messages.lys.decide_who_stays') }}</p>
</div>
</div>
<div class="col-sm-5 col-sm-offset-2">
<div class="row space-2">
<img src="{{ url('images/icon_houserules@1x.png') }}">
</div>
<div class="row space-2">
<p>{{ trans('messages.lys.agree_house_rules') }}</p>
</div>
</div>
</div>
</div>
<div class="row space-4">
<div class="col-sm-11 col-center">
<div class="col-sm-5 undefined">
<div class="row space-2">
<img src="{{ url('images/icon_clock@1x.png') }}">
</div>
<div class="row space-2">
<p>{{ trans('messages.lys.set_min_max_nights') }}</p>
</div>
</div>
<div class="col-sm-5 col-sm-offset-2">
<div class="row space-2">
<img src="{{ url('images/icon_calendarsync@1x.png') }}">
</div>
<div class="row space-2">
<p>{{ trans('messages.lys.calendar_sync_fine_tuned') }}</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="js-ib-celebratory-msg-modal-container">
</div>
</div>
</div>
        <div id="js-manage-listing-help" class="manage-listing-help hide"></div>
      </div>
      <div class="manage-listing-content-background"></div>
    </div>