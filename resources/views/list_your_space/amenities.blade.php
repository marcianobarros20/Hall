<div id="js-manage-listing-content-container" class="manage-listing-content-container">
      <div class="manage-listing-content-wrapper">
        <div id="js-manage-listing-content" class="manage-listing-content">

        <div>
        <div>
        <div class="space-4">
        <h3>{{ trans('messages.lys.amenities_title') }}</h3>
        <p class="text-muted">{{ trans('messages.lys.amenities_desc',['site_name'=>$site_name]) }}</p>
        </div>
        <hr>
        </div>

        @foreach($amenities_type as $row_type)

        <div>
        <div class="js-section">
        <div style="display:none;" class="js-saving-progress saving-progress {{ $row_type->id }}">
        <h5>{{ trans('messages.lys.saving') }}...</h5>
        </div>

        <h4>{{ $row_type->name }}</h4>

        @if($row_type->description != '')
        <p class="text-muted">{{ $row_type->description }}</p>
        @endif

        <ul class="list-unstyled">
        @foreach($amenities as $row_amenities)

        @if($row_amenities->type_id == $row_type->id)
        <li>
        <span>&nbsp;&nbsp;</span>
        <label class="label-large label-inline amenity-label">
        <input type="checkbox" value="{{ $row_amenities->id }}" name="amenities" data-saving="{{ $row_type->id }}" {{ in_array($row_amenities->id, $prev_amenities) ? 'checked' : '' }}>
        <span>{{ $row_amenities->name }}</span>
        </label>
        <span>&nbsp;</span>

        @if($row_amenities->description != '')
        <span data-toggle="tooltip" class="icon icon-question" title="{{ $row_amenities->description }}"></span>
        @endif

        </li>
        @endif

        @endforeach

        </ul>

        <hr class="space-top-4 space-4">
        </div>
        </div>
        @endforeach

        <div class="not-post-listed row space-top-6 next_step">
        <div class="col-2 space-top-1">
        <a data-prevent-default="true" href="{{ url('manage-listing/'.$room_id.'/location') }}" class="back-section-button">{{ trans('messages.lys.back') }}</a>
        </div>
        <div class="col-10 text-right next_step">
        <a data-prevent-default="true" href="{{ url('manage-listing/'.$room_id.'/photos') }}" class="btn btn-large btn-primary next-section-button">{{ trans('messages.lys.next') }}</a>
        </div>
        </div>
        </div>
        </div>

        <div id="js-manage-listing-help" class="manage-listing-help hide"></div>
      </div>
      <div class="manage-listing-content-background"></div>
    </div>