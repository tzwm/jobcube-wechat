@section('body')

<div class="position box">
  <div>{{{ trans('inviters.show.invite_you') }}}</div>
  <div class="position-value">高级产品经理 [20K-30K]</div>
</div>

<div class="company-intro box">
  <div class="company-name">广州市丰海科技股份有限公司</div>
  <div class="company-intro-item">
    <span class="company-intro-item-key">{{{ trans('inviters.show.industry') }}}</span>
    <span class="company-intro-item-value">移动互联网</span>
  </div>
  <div class="company-intro-item">
    <span class="company-intro-item-key">{{{ trans('inviters.show.department') }}}</span>
    <span class="company-intro-item-value">产品部</span>
  </div>
  <div class="company-intro-item">
    <span class="company-intro-item-key">{{{ trans('inviters.show.company_stage') }}}</span>
    <span class="company-intro-item-value">初创型</span>
  </div>
  <div class="company-intro-item">
    <span class="company-intro-item-key">{{{ trans('inviters.show.company_size') }}}</span>
    <span class="company-intro-item-value">100-499人</span>
  </div>
</div>

<div class="position-info box">
  <div class="position-info-key">
    <span class="red-span"></span>
    {{{ trans('inviters.show.position_introduction') }}}
  </div>
  <div class="position-info-value">
    xxx
    xxx
    xxx
    xxx
  </div>
</div>

<div class="commit-btn">{{{ trans('inviters.show.commit') }}}</div>

<script>
  $(document).ready(function() {
    $('body').css({'background-color': '#f7f7f7'});
  });
</script>

@stop
