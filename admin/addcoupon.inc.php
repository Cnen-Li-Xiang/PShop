<div id="pshop" class="container">
	<div class="row">
		<div class="col-md-12 hidden-sm hidden-xs">
			<section>
			<form method="post" action="" enctype="multipart/form-data">
				<table class="edit_coupon">
					<colgroup>
						<col class="cg1"><col class="cg2">
					</colgroup>
					<tbody>
					<tr class="form-group"><td class="item">優惠名稱（英文）<td>

<div class="row">  
  <div class="col-xs-12 col-sm-10">
    <div class="controls">
      <input class="form-control" horizontal-label-span="2" placeholder="Summer Special Offer: 10% off on your entire order" name="promotion_title_en" required="required" type="text">
    </div>
  </div>
</div>
					<tr class="form-group"><td class="item">優惠名稱（中文）<td>

<div class="row">  
  <div class="col-xs-12 col-sm-10">
    <div class="controls">
      <input class="form-control" horizontal-label-span="2" placeholder="夏日優惠 : 全店即享9折" name="promotion_title_cht" required="required" style="" type="text">
    </div>
  </div>
</div>
					<tr class="form-group"><td class="item">特殊優惠<td>
<div class="row">  
  <div class="col-xs-12 col-sm-8">
    <div class="controls">
	<div class="row"> 
        <div class="col-sm-3">
            <label><input value="free_all" name="type[]" id="" type="radio" required="required" class="all_free" onclick="disableDiscount()">全免</label>
        </div>
        <div class="col-sm-3">
            <label><input value="free_all_but_ship" name="type[]" id="" type="radio" required="required" class="part_free" onclick="disableDiscount()">全免(需運費)</label>
        </div>
        <div class="col-sm-3">
            <label><input value="free_ship" name="type[]" id="" type="radio" required="required" onclick="enableDiscount()">免運費</label>
        </div>
        <div class="col-sm-3">
            <label><input value="none" name="type[]" id="" type="radio" required="required" onclick="enableDiscount()" checked>無</label>
        </div>
    </div>
    </div>
  </div>
</div>
					<tr class="form-group"><td class="item">折扣<td>
<div class="row">  
  <div class="col-xs-12 col-sm-8">
    <div class="controls">
	<div class="row">  
        <div class="col-sm-4">
        	<div class="input-group benefit-input" style="width:100%;">
        	    <input step="1" min="1" max="99" class="form-control discount" placeholder="" name="discount" type="number" required="required">
        	    <div class="input-group-addon">％</div>
        	</div>
        </div>
    </div>
    </div>
  </div>
</div>


					<tr class="form-group"><td class="item">可使用的次數<td>
<div class="row"> 
  <div class="col-xs-12 col-sm-8">
    <div class="controls">
	<div class="row"> 
        <div class="col-sm-4">
        <div class="input-group benefit-input" style="width:100%;">
          <input class="form-control inherent" placeholder="" step="1" min="1" name="max_use_count" type="number" required="required">
          <div class="input-group-addon">次</div>
        </div>
          <label type="checkbox-inline">
            <input name="infinity" type="checkbox" class="unique">
            無限
          </label>
        </div>
      </div>
      </div>
  </div>
</div>

					<tr><td class="item form-group">促銷限制<td>

<div class="row"> 
<div class="col-sm-6" control-group="" label="開始日期">
	<div class="row">  
		<label class="control-label col-xs-12" for="startOpened">開始日期</label>
		<div class="col-xs-12 col-sm-11">
		    <div class="controls">
		    	<div class="date">
            	<input class="form-control" name="startOpened" uib-datepicker-popup="yyyy/MM/dd" min-date="" max-date="" horizontal-label-span="1" placeholder="YYYY/MM/DD" type="text">
				</div>
        	</div>
		</div>
	</div>
</div>
<div class="col-sm-6" control-group="" label="結束日期">
	<div class="row">  
		<label class="control-label col-xs-12" for="endOpened">結束日期</label>
  		<div ng-show="viewOnly" style="clear:left; padding: 0 15px;"></div>
  		<div ng-hide="viewOnly" class="col-xs-12 col-sm-11">
    		<div class="controls">
    	      <div class="input-date-end-at date">
    	        <input class="form-control inherent" name="endOpened" uib-datepicker-popup="yyyy/MM/dd" is-open="state.datePicker.endOpened" max-date="'2099-12-31'" horizontal-label-span="1" placeholder="YYYY/MM/DD" type="text">
    	      </div>
    	      <p class="ng-scope">
    	        <label type="checkbox-inline">
    	          <input type="checkbox" name="forever" class="unique">
    	          永不過期
    	        </label>
    	      </p>
    	    </div>
    	</div>
    </div>
</div>
</div>
					<tr class=" form-group"><td class="item">促銷代碼<td>
<div class="row">
  <div ng-hide="viewOnly" class="col-xs-12">
    <div class="controls">
      <input class="form-control"  placeholder="e.g. SUMMERSPECIAL10OFF" name="coupon_code" ng-pattern="/^[0-9a-zA-Z\,]+$/" min="1" type="text">
    </div>
  </div>
</div>

					</tbody>
				</table>
				<div class="submit"><input name="submit" id="submit" class="button" value="新增優惠" type="submit"></div>
			</form>
			</section>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function() {
  $('input[name="startOpened"]').daterangepicker({
	locale: {
	  format:'YYYY-MM-DD'
	},
    singleDatePicker: true
  });
  $('input[name="endOpened"]').daterangepicker({
	locale: {
	  format:'YYYY-MM-DD'
	},
    singleDatePicker: true
  });

});

function disableDiscount(){
    if(!$('.discount').disable){
    	$('.discount').attr("disabled", true);
    }
}
function enableDiscount(){
    $('.discount').removeAttr("disabled");
}
$(document).ready(function() {
  enable_cb();
  $('.unique').click(enable_cb);
});

function enable_cb() {
  if (this.checked) {
    $(this).parent().parent().parent().parent().find('.inherent').attr("disabled", true);
  } else {
    $(this).parent().parent().parent().parent().find('.inherent').removeAttr("disabled");
  }
}
</script>