 <div id="footer" class="container-brand-dark footer-surround footer-container">
 <footer class="page-container-responsive" ng-controller="footer">
  <div class="row row-condensed">

    <div class="col-md-3 col-md-offset-1">
      <div class="language-curr-picker clearfix">
        <div class="select select-large select-block row-space-2">
  <label id="language-selector-label" class="screen-reader-only">
    {{ trans('messages.footer.choose_language') }}
  </label>
 {!! Form::select('language',$language, (Session::get('language')) ? Session::get('language') : $default_language[0]->value, ['class' => 'language-selector', 'aria-labelledby' => 'language-selector-label', 'id' => 'language_footer']) !!}
</div>

          
<div class="select select-large select-block row-space-2">
  <label id="currency-selector-label" class="screen-reader-only">{{ trans('messages.footer.choose_currency') }}</label>
  {!! Form::select('currency',$currency, (Session::get('currency')) ? Session::get('currency') : $default_currency[0]->code, ['class' => 'currency-selector', 'aria-labelledby' => 'currency-selector-label', 'id' => 'currency_footer']) !!}
</div>

        <div class="cx-number"></div>
      </div>
    </div>

    <div class="col-md-2 col-md-offset-1 hide-sm">
      <h2 class="h5">{{ trans('messages.footer.company') }}</h2>
      <ul class="list-layout">
      @foreach($company_pages as $company_page)
        <li><a href="{{ url($company_page->url) }}" class="link-contrast">{{ $company_page->name }}</a></li>
      @endforeach
      </ul>
    </div>

    <div class="col-md-2 hide-sm">
      <h2 class="h5">{{ trans('messages.footer.discover') }}</h2>
      <ul class="list-layout">
        <li><a href="{{ url('invite') }}" class="link-contrast">{{ trans('messages.referrals.travel_credit') }}</a></li>
      @foreach($discover_pages as $discover_page)
        <li><a href="{{ url($discover_page->url) }}" class="link-contrast">{{ $discover_page->name }}</a></li>
      @endforeach
      </ul>
    </div>

    <div class="col-md-2 hide-sm">
      <h2 class="h5">{{ trans('messages.footer.hosting') }}</h2>
      <ul class="list-layout">
      @foreach($hosting_pages as $hosting_page)
        <li><a href="{{ url($hosting_page->url) }}" class="link-contrast">{{ $hosting_page->name }}</a></li>
      @endforeach
      </ul>
    </div>
  </div>

  <div class="col-sm-12 space-4 space-top-4 show-sm">
    <ul class="list-layout list-inline text-center h5">
      @foreach($company_pages as $company_page)
        <li><a href="{{ url($company_page->url) }}" class="link-contrast">{{ $company_page->name }}</a></li>
      @endforeach
    </ul>
  </div>

  <hr class="footer-divider space-top-8 space-4 hide-sm">

  <div class="text-center">
    <h2 class="h5 space-4 hide-sm">{{ trans('messages.footer.join_us_on') }}</h2>
    <ul class="list-layout list-inline">
      <link itemprop="url" href="">
      <meta itemprop="logo" content="">
      @for($i=0; $i<count($join_us); $i++)
        <li>
          <a href="{{ $join_us[$i]->value }}" class="link-contrast footer-icon-container" target="_blank">
            <span class="screen-reader-only">{{ ucfirst($join_us[$i]->name) }}</span>
            <i class="icon footer-icon icon-{{ str_replace('_','-',$join_us[$i]->name) }}"></i> 
          </a>        
        </li>
      @endfor
    </ul>
    <div class="space-top-2 text-muted">
      © {{ $site_name }}, Inc.
    </div>
  </div>
</footer>
</div>