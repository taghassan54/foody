
                <div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3">
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Service Date</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p><small>How many eaters?</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p><small>your informations?</small></p>
            </div>

        </div>
    </div>

    <form role="form" action="/bookings" method="POST" >
        @csrf
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">Service Date</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">date</label>
                    <input maxlength="100" type="date" name="date" required required="required" class="form-control" placeholder="Enter First Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Start time</label>
                    <input maxlength="100" type="time" name="starttime"  required required="required" class="form-control" placeholder="Enter Last Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">End time</label>
                    <input maxlength="100" type="time" name="endtime" required required="required" class="form-control" placeholder="Enter Last Name" />
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">How many eaters?</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label"> number of eaters</label>
                    <input maxlength="200" type="text" name="number_of_eaters" required="required" class="form-control" placeholder=" Enter number of eaters" />
                </div>
                <div class="form-group">
                    <input type="hidden" name="foodtruck_id" value="{{ $foodtruck->id }}" />
                </div>

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">Your Informations?</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Your Name</label>
                    <input maxlength="200" type="text" name="name" required="required" class="form-control" placeholder="Enter Your Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Your Email Address</label>
                    <input maxlength="200" type="email" name="email" required="required" class="form-control" placeholder="Your Email Address" />
                </div>
                <div class="form-group">
                    <label class="control-label">Your phone </label>
                    <input maxlength="200" type="text" name="phone" required="required" class="form-control" placeholder="Your phone" />
                </div>
                 <button class="btn btn-success pull-right" type="submit">Finish!</button>
            </div>
        </div>


    </form>
</div>
    <br>
    <br>
    <br>
    <br>
    <br>


@section('js')

<script>
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='date'],input[type='time'],input[type='text'],input[type='email']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");

            }
        }
            if(!isValid)
            alert('الرجاء ملء جميع الحقول');
        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click') ;
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>
@stop


@section('css')

<style>
/* Latest compiled and minified CSS included as External Resource*/

/* Optional theme */

/*@import url('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css');*/
 body {
    margin-top:30px;
}
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>

@stop

