@section('body')
<div id="filter-menu">
<div class="pure-g">
  <div class="pure-u-1-3">
    <div id="location-filter" class="filter-head" data-toggle="dropdown">{{{ trans('inviters.location') }}}</div>
    <ul class="dropdown-menu" role="menu" aria-labelledby="location-filter">
    </ul>
  </div>
  <div class="pure-u-1-3">
    <div class="filter-head">{{{ trans('inviters.time') }}}</div>
  </div>
  <div class="pure-u-1-3">
    <div class="filter-head">{{{ trans('inviters.salary') }}}</div>
  </div>
</div>
</div>
@stop
