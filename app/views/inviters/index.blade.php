@section('body')

@include('inviters.filter-menu')

<i class="fa fa-spinner fa-spin"></i>

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

{{ HTML::script('js/inviters-index.js') }}
@stop
