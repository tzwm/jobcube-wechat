@section('body')

<div id="filter-menu">
  <div class="pure-g">
    <div class="pure-u-1-3">
      <div class="filter-head">
        <i class="fa fa-map-marker"></i>&nbsp;
        {{{ trans('inviters.location') }}}&nbsp;
        <i class="fa fa-angle-down"></i>
      </div>
    </div>
    <div class="pure-u-1-3">
      <div class="filter-head border-left">
        <i class="fa fa-clock-o"></i>&nbsp;
        {{{ trans('inviters.time') }}}&nbsp;
        <i class="fa fa-angle-down"></i>
      </div>
    </div>
    <div class="pure-u-1-3">
      <div class="filter-head border-left">
        <i class="fa fa-usd"></i>&nbsp;
        {{{ trans('inviters.salary') }}}&nbsp;
        <i class="fa fa-angle-down"></i>
      </div>
    </div>
  </div>
</div>

<div id="company-items">
  @include('inviters.company_item')
  @include('inviters.company_item')
  @include('inviters.company_item')
  @include('inviters.company_item')
  @include('inviters.company_item')
  @include('inviters.company_item')
  @include('inviters.company_item')
  @include('inviters.company_item')
  @include('inviters.company_item')
</div>

@stop
