<div id="content-pro">
<div class="container">
 <ul id="registration-steps-pro">
     <li class="current-menu-item" class="signuptab" id="signup-content1">
         <a href="#">
             <div class="registration-step-circle-icon">01</div>
             <div class="registration-step-number">Step 1</div>
             <h5 class="registration-step-title">Choose your plan</h5>
         </a>
     </li>
     <li id="signup-content2"  class="signuptab">
         <a href="#">
             <div class="registration-step-circle-icon">02</div>
             <div class="registration-step-number">Step 2</div>
             <h5 class="registration-step-title">Create your account</h5>
         </a>
     </li>
     <li id="signup-content3"  class="signuptab">
         <a href="#">
             <div class="registration-step-circle-icon">03</div>
             <div class="registration-step-number">Step 3</div>
             <h5 class="registration-step-title">Billing information</h5>
         </a>
     </li>
     <li  id="signup-content4"  class="signuptab">
         <a href="#">
             <div class="registration-step-circle-icon">04</div>
             <div class="registration-step-number">Step 4</div>
             <h5 class="registration-step-title">Welcome to AfroFlix!</h5>
         </a>
     </li>
 </ul>
 <div class="clearfix"></div>
</div>
<div id="signup-content-container">
            <div id="signup-content1c" class="signupContents signupContents-active">
				@include('front.layout.steps.step1')
			</div>
			<div id="signup-content2c" class="signupContents">
				@include('front.layout.steps.step2')
			</div>
			<div id="signup-content3c" class="signupContents">
				@include('front.layout.steps.step3')
			</div>
			<div id="signup-content4c" class="signupContents">
				@include('front.layout.steps.step4')
			</div>
            </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('.signupContents').hide();
    $('.signupContents-active').show();

    function goToStep($from,$to){
        $('#signup-content'+$from).removeClass('current-menu-item');
        $('#signup-content'+$to).addClass('current-menu-item');

        $('#signup-content'+$from+'c').hide();
        $('#signup-content'+$to+'c').fadeIn('slow');
    }

    $('.btn-create-account').click(function(){
        goToStep(2,3);
    });
    $('.btn-signup').click(function() {
        goToStep(3,4);
    })
    $('.changePlan').click(function(){
        goToStep(3,1);
    });
    $('.btn-select-plan').click(function(){
        var id = $(this).attr('id');
        $('#label-total-plan').text($(this).data('button'));
        $('#label-total-cost').text($(this).data('plan-price'));
        if(!$(this).hasClass('btn-green-pro')){
            $('.pricing-table-col p button').removeClass('btn-green-pro');
            $(this).addClass('btn-green-pro');
            $('#input-plan').val($(this).data('button'));
        }
        goToStep(1,2);
    })
    $('#registration-steps-pro li').click(function(){

  var t = $(this).attr('id');
  console.log(t);
  if(!$(this).hasClass('current-menu-item')){
      //this is the start of our condition
    $('#registration-steps-pro li').removeClass('current-menu-item');
    $(this).addClass('current-menu-item');
    $('.signupContents').hide();
    $('#'+t + 'c').fadeIn('slow');
 }
});
$('#submit-btn-all').click(function(){
    var data=[];
    $('form').each(function() {
        var that = $(this);
        var formData = that.serializeArray().reduce(function(obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        data.push(formData);
    });
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    console.log(data);
    $.ajax({
                    /* the route pointing to the post function */
                    url: '/register',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN,data},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                        console.log(data);
                    }
                });
    });
});
</script>
