@extends('admin_dashboard')
@section('admin')
<link rel="stylesheet" href="{{asset('backend/assets/css/attend.css')}}">
<style>
@charset "UTF-8";

/*
* CSS TOGGLE SWITCH
*
* Ionuț Colceriu - ghinda.net
* https://github.com/ghinda/css-toggle-switch
*
*/
/* supported values are px, rem-calc, em-calc
 */
/* imports
 */
/* Functions 
 */
/* Shared
 */
/* Hide by default
 */
.switch-toggle a,
.switch-light span span {
      display: none;
}

/* We can't test for a specific feature,
 * so we only target browsers with support for media queries.
 */
@media only screen {

      /* Checkbox
 */
      .switch-light {
            position: relative;
            display: block;
            /* simulate default browser focus outlines on the switch,
   * when the inputs are focused.
   */
      }

      .switch-light::after {
            clear: both;
            content: "";
            display: table;
      }

      .switch-light *,
      .switch-light *:before,
      .switch-light *:after {
            box-sizing: border-box;
      }

      .switch-light a {
            display: block;
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
      }

      .switch-light label,
      .switch-light>span {
            /* breathing room for bootstrap/foundation classes.
     */
            line-height: 2em;
            vertical-align: middle;
      }

      .switch-light input:focus~span a,
      .switch-light input:focus+label {
            outline-width: 2px;
            outline-style: solid;
            outline-color: Highlight;
            /* Chrome/Opera gets its native focus styles.
     */
      }

      @media (-webkit-min-device-pixel-ratio: 0) {

            .switch-light input:focus~span a,
            .switch-light input:focus+label {
                  outline-color: -webkit-focus-ring-color;
                  outline-style: auto;
            }
      }

      /* don't hide the input from screen-readers and keyboard access
 */
      .switch-light input {
            position: absolute;
            opacity: 0;
            z-index: 3;
      }

      .switch-light input:checked~span a {
            right: 0%;
      }

      /* inherit from label
 */
      .switch-light strong {
            font-weight: inherit;
      }

      .switch-light>span {
            position: relative;
            overflow: hidden;
            display: block;
            min-height: 2em;
            /* overwrite 3rd party classes padding
   * eg. bootstrap .well
   */
            padding: 0;
            text-align: left;
      }

      .switch-light span span {
            position: relative;
            z-index: 2;
            display: block;
            float: left;
            width: 50%;
            text-align: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
      }

      .switch-light a {
            position: absolute;
            right: 50%;
            top: 0;
            z-index: 1;
            display: block;
            width: 50%;
            height: 100%;
            padding: 0;
      }

      /* Radio Switch
 */
      .switch-toggle {
            position: relative;
            display: block;
            /* simulate default browser focus outlines on the switch,
   * when the inputs are focused.
   */
            /* For callout panels in foundation
  */
            padding: 0 !important;
            /* 2 items
   */
            /* 3 items
   */
            /* 4 items
   */
            /* 5 items
   */
            /* 6 items
   */
      }

      .switch-toggle::after {
            clear: both;
            content: "";
            display: table;
      }

      .switch-toggle *,
      .switch-toggle *:before,
      .switch-toggle *:after {
            box-sizing: border-box;
      }

      .switch-toggle a {
            display: block;
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
      }

      .switch-toggle label,
      .switch-toggle>span {
            /* breathing room for bootstrap/foundation classes.
     */
            line-height: 2em;
            vertical-align: middle;
      }

      .switch-toggle input:focus~span a,
      .switch-toggle input:focus+label {
            outline-width: 2px;
            outline-style: solid;
            outline-color: Highlight;
            /* Chrome/Opera gets its native focus styles.
     */
      }

      @media (-webkit-min-device-pixel-ratio: 0) {

            .switch-toggle input:focus~span a,
            .switch-toggle input:focus+label {
                  outline-color: -webkit-focus-ring-color;
                  outline-style: auto;
            }
      }

      .switch-toggle input {
            position: absolute;
            left: 0;
            opacity: 0;
      }

      .switch-toggle input+label {
            position: relative;
            z-index: 2;
            display: block;
            float: left;
            padding: 0 0.5em;
            margin: 0;
            text-align: center;
      }

      .switch-toggle a {
            position: absolute;
            top: 0;
            left: 0;
            padding: 0;
            z-index: 1;
            width: 10px;
            height: 100%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(4),
      .switch-toggle label:nth-child(2):nth-last-child(4)~label,
      .switch-toggle label:nth-child(2):nth-last-child(4)~a {
            width: 50%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(4)~input:checked:nth-child(3)+label~a {
            left: 50%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(6),
      .switch-toggle label:nth-child(2):nth-last-child(6)~label,
      .switch-toggle label:nth-child(2):nth-last-child(6)~a {
            width: 33.33%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(6)~input:checked:nth-child(3)+label~a {
            left: 33.33%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(6)~input:checked:nth-child(5)+label~a {
            left: 66.66%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(8),
      .switch-toggle label:nth-child(2):nth-last-child(8)~label,
      .switch-toggle label:nth-child(2):nth-last-child(8)~a {
            width: 25%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(8)~input:checked:nth-child(3)+label~a {
            left: 25%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(8)~input:checked:nth-child(5)+label~a {
            left: 50%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(8)~input:checked:nth-child(7)+label~a {
            left: 75%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(10),
      .switch-toggle label:nth-child(2):nth-last-child(10)~label,
      .switch-toggle label:nth-child(2):nth-last-child(10)~a {
            width: 20%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(10)~input:checked:nth-child(3)+label~a {
            left: 20%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(10)~input:checked:nth-child(5)+label~a {
            left: 40%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(10)~input:checked:nth-child(7)+label~a {
            left: 60%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(10)~input:checked:nth-child(9)+label~a {
            left: 80%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(12),
      .switch-toggle label:nth-child(2):nth-last-child(12)~label,
      .switch-toggle label:nth-child(2):nth-last-child(12)~a {
            width: 16.6%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(12)~input:checked:nth-child(3)+label~a {
            left: 16.6%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(12)~input:checked:nth-child(5)+label~a {
            left: 33.2%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(12)~input:checked:nth-child(7)+label~a {
            left: 49.8%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(12)~input:checked:nth-child(9)+label~a {
            left: 66.4%;
      }

      .switch-toggle label:nth-child(2):nth-last-child(12)~input:checked:nth-child(11)+label~a {
            left: 83%;
      }

      /* Candy Theme
 * Based on the "Sort Switches / Toggles (PSD)" by Ormal Clarck
 * http://www.premiumpixels.com/freebies/sort-switches-toggles-psd/
 */
      .switch-toggle.switch-candy,
      .switch-light.switch-candy>span {
            background-color: #2d3035;
            border-radius: 3px;
            box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.2);
      }

      .switch-light.switch-candy span span,
      .switch-light.switch-candy input:checked~span span:first-child,
      .switch-toggle.switch-candy label {
            color: #fff;
            font-weight: bold;
            text-align: center;
            text-shadow: 1px 1px 1px #191b1e;
      }

      .switch-light.switch-candy input~span span:first-child,
      .switch-light.switch-candy input:checked~span span:nth-child(2),
      .switch-candy input:checked+label {
            color: #333;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
      }

      .switch-candy a {
            border: 1px solid rgb(245, 245, 245);
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2), inset 0 1px 1px rgba(255, 255, 255, 0.45);
            background-color: #cbe1e7;
            background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.2), transparent);
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.2), transparent);
      }

      .switch-candy-blue a {
            background-color: #38a3d4;
      }

      .switch-candy-yellow a {
            background-color: #f5e560;
      }

      /* iOS Theme
*/
      .switch-ios.switch-light span span {
            color: #888b92;
      }

      .switch-ios.switch-light a {
            left: 0;
            top: 0;
            width: 2em;
            height: 2em;
            background-color: #fff;
            border-radius: 100%;
            border: 0.25em solid #D8D9DB;
            -webkit-transition: all .2s ease-out;
            -moz-transition: all .2s ease-out;
            transition: all .2s ease-out;
      }

      .switch-ios.switch-light>span {
            display: block;
            width: 100%;
            height: 2em;
            background-color: #D8D9DB;
            border-radius: 1.75em;
            -webkit-transition: all .4s ease-out;
            -moz-transition: all .4s ease-out;
            transition: all .4s ease-out;
      }

      .switch-ios.switch-light>span span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            line-height: 1.875em;
            vertical-align: middle;
            -webkit-transition: all .2s ease-out;
            -moz-transition: all .2s ease-out;
            transition: all .2s ease-out;
      }

      .switch-ios.switch-light>span span:first-of-type {
            opacity: 1;
            padding-left: 1.875em;
      }

      .switch-ios.switch-light>span span:last-of-type {
            padding-right: 1.875em;
      }

      .switch-ios.switch-light input:checked~span a {
            left: 100%;
            border-color: #4BD865;
            margin-left: -2em;
      }

      .switch-ios.switch-light input:checked~span {
            border-color: #4BD865;
            box-shadow: inset 0 0 0 30px #4BD865;
      }

      .switch-ios.switch-light input:checked~span span:first-of-type {
            opacity: 0;
      }

      .switch-ios.switch-light input:checked~span span:last-of-type {
            opacity: 1;
            color: #fff;
      }

      .switch-ios.switch-toggle {
            background-color: #D8D9DB;
            border-radius: 30px;
            box-shadow: inset rgba(0, 0, 0, 0.1) 0 1px 0;
      }

      .switch-ios.switch-toggle a {
            background-color: #4BD865;
            border: 0.125em solid #D8D9DB;
            border-radius: 1.75em;
            -webkit-transition: all 0.12s ease-out;
            -moz-transition: all 0.12s ease-out;
            transition: all 0.12s ease-out;
      }

      .switch-ios.switch-toggle label {
            height: 2.4em;
            color: #888b92;
            line-height: 2.4em;
            vertical-align: middle;
      }

      .switch-ios input:checked+label {
            color: #3e4043;
      }

      /* Holo Theme
 */
      .switch-toggle.switch-holo,
      .switch-light.switch-holo>span {
            background-color: #464747;
            border-radius: 1px;
            box-shadow: inset rgba(0, 0, 0, 0.1) 0 1px 0;
            color: #fff;
            text-transform: uppercase;
      }

      .switch-holo label {
            color: #fff;
      }

      .switch-holo>span span {
            opacity: 0;
            -webkit-transition: all 0.1s;
            -moz-transition: all 0.1s;
            transition: all 0.1s;
      }

      .switch-holo>span span:first-of-type {
            opacity: 1;
      }

      .switch-holo>span span,
      .switch-holo label {
            font-size: 85%;
            line-height: 2.15625em;
      }

      .switch-holo a {
            background-color: #666;
            border-radius: 1px;
            box-shadow: inset rgba(255, 255, 255, 0.2) 0 1px 0, inset rgba(0, 0, 0, 0.3) 0 -1px 0;
      }

      /* Selected ON switch-light
*/
      .switch-holo.switch-light input:checked~span a {
            background-color: #0E88B1;
      }

      .switch-holo.switch-light input:checked~span span:first-of-type {
            opacity: 0;
      }

      .switch-holo.switch-light input:checked~span span:last-of-type {
            opacity: 1;
      }

      /* Material Theme
 */
      /* switch-light
 */
      .switch-light.switch-material a {
            top: -0.1875em;
            width: 1.75em;
            height: 1.75em;
            border-radius: 50%;
            background: #fafafa;
            box-shadow: 0 0.125em 0.125em 0 rgba(0, 0, 0, 0.14), 0 0.1875em 0.125em -0.125em rgba(0, 0, 0, 0.2), 0 0.125em 0.25em 0 rgba(0, 0, 0, 0.12);
            -webkit-transition: right .28s cubic-bezier(.4, 0, .2, 1);
            -moz-transition: right .28s cubic-bezier(.4, 0, .2, 1);
            transition: right .28s cubic-bezier(.4, 0, .2, 1);
      }

      .switch-material.switch-light {
            overflow: visible;
      }

      .switch-material.switch-light::after {
            clear: both;
            content: "";
            display: table;
      }

      .switch-material.switch-light>span {
            overflow: visible;
            position: relative;
            top: 0.1875em;
            width: 3.25em;
            height: 1.5em;
            min-height: auto;
            border-radius: 1em;
            background: rgba(0, 0, 0, 0.26);
      }

      .switch-material.switch-light span span {
            position: absolute;
            clip: rect(0 0 0 0);
      }

      .switch-material.switch-light input:checked~span a {
            right: 0;
            background: #3f51b5;
            box-shadow: 0 0.1875em 0.25em 0 rgba(0, 0, 0, 0.14), 0 0.1875em 0.1875em -0.125em rgba(0, 0, 0, 0.2), 0 0.0625em 0.375em 0 rgba(0, 0, 0, 0.12);
      }

      .switch-material.switch-light input:checked~span {
            background: rgba(63, 81, 181, 0.5);
      }

      /* switch-toggle
 */
      .switch-toggle.switch-material {
            overflow: visible;
      }

      .switch-toggle.switch-material::after {
            clear: both;
            content: "";
            display: table;
      }

      .switch-toggle.switch-material a {
            top: 48%;
            width: 0.375em !important;
            height: 0.375em;
            margin-left: 0.25em;
            background: #3f51b5;
            border-radius: 100%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: -webkit-transform 0.4s ease-in;
            -moz-transition: -moz-transform 0.4s ease-in;
            transition: transform 0.4s ease-in;
      }

      .switch-toggle.switch-material label {
            color: rgba(0, 0, 0, 0.54);
            font-size: 1em;
      }

      .switch-toggle.switch-material label:before {
            content: '';
            position: absolute;
            top: 48%;
            left: 0;
            display: block;
            width: 0.875em;
            height: 0.875em;
            border-radius: 100%;
            border: 0.125em solid rgba(0, 0, 0, 0.54);
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
      }

      .switch-toggle.switch-material input:checked+label:before {
            border-color: #3f51b5;
      }

      /* ripple
 */
      .switch-light.switch-material>span:before,
      .switch-light.switch-material>span:after,
      .switch-toggle.switch-material label:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            z-index: 3;
            display: block;
            width: 4em;
            height: 4em;
            border-radius: 100%;
            background: #3f51b5;
            opacity: .4;
            margin-left: -1.25em;
            margin-top: -1.25em;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -webkit-transition: opacity .4s ease-in;
            -moz-transition: opacity .4s ease-in;
            transition: opacity .4s ease-in;
      }

      .switch-light.switch-material>span:after {
            left: auto;
            right: 0;
            margin-left: 0;
            margin-right: -1.25em;
      }

      .switch-toggle.switch-material label:after {
            width: 3.25em;
            height: 3.25em;
            margin-top: -0.75em;
      }

      @-webkit-keyframes materialRipple {
            0% {
                  -webkit-transform: scale(0);
            }

            20% {
                  -webkit-transform: scale(1);
            }

            100% {
                  opacity: 0;
                  -webkit-transform: scale(1);
            }
      }

      @-moz-keyframes materialRipple {
            0% {
                  -moz-transform: scale(0);
            }

            20% {
                  -moz-transform: scale(1);
            }

            100% {
                  opacity: 0;
                  -moz-transform: scale(1);
            }
      }

      @keyframes materialRipple {
            0% {
                  -webkit-transform: scale(0);
                  -moz-transform: scale(0);
                  -ms-transform: scale(0);
                  -o-transform: scale(0);
                  transform: scale(0);
            }

            20% {
                  -webkit-transform: scale(1);
                  -moz-transform: scale(1);
                  -ms-transform: scale(1);
                  -o-transform: scale(1);
                  transform: scale(1);
            }

            100% {
                  opacity: 0;
                  -webkit-transform: scale(1);
                  -moz-transform: scale(1);
                  -ms-transform: scale(1);
                  -o-transform: scale(1);
                  transform: scale(1);
            }
      }

      .switch-material.switch-light input:not(:checked)~span:after,
      .switch-material.switch-light input:checked~span:before,
      .switch-toggle.switch-material input:checked+label:after {
            -webkit-animation: materialRipple .4s ease-in;
            -moz-animation: materialRipple .4s ease-in;
            animation: materialRipple .4s ease-in;
      }

      /* trick to prevent the default checked ripple animation from showing
 * when the page loads.
 * the ripples are hidden by default, and shown only when the input is focused.
 */
      .switch-light.switch-material.switch-light input~span:before,
      .switch-light.switch-material.switch-light input~span:after,
      .switch-material.switch-toggle input+label:after {
            visibility: hidden;
      }

      .switch-light.switch-material.switch-light input:focus:checked~span:before,
      .switch-light.switch-material.switch-light input:focus:not(:checked)~span:after,
      .switch-material.switch-toggle input:focus:checked+label:after {
            visibility: visible;
      }
}

/* Bugfix for older Webkit, including mobile Webkit. Adapted from
 * http://css-tricks.com/webkit-sibling-bug/
 */
@media only screen and (-webkit-max-device-pixel-ratio: 2) and (max-device-width: 80em) {

      .switch-light,
      .switch-toggle {
            -webkit-animation: webkitSiblingBugfix infinite 1s;
      }
}

@-webkit-keyframes webkitSiblingBugfix {
      from {
            -webkit-transform: translate3d(0, 0, 0);
      }

      to {
            -webkit-transform: translate3d(0, 0, 0);
      }
}

/*# sourceMappingURL=toggle-switch.css.map */
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="content">
   <!-- Start Content-->
   <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box">
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <h4>
                         
                         
                        <a href="{{ route('employee.attend.list') }}" class="btn btn-primary float-sm-right"> <i class="fas fa-list"></i>Employee Attendance List</a>
                     </h4>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <!-- end page title --> 
      <div class="row">
         <div class="col-12">
            <div class="card">
             
             
               
              
               <div class="card-body">
                  <form action="{{ route('employee.attend.store') }}" method="post" id="myForm">
                     @csrf
                     <div class="form-group col-md-4">
                        <label for="date" class="control-label">Attendance Date</label>
                        <input type="date" name="date" id="date" class="checkdate form-control form-control-sm singledatepicker" placeholder="Attendance Date" autocomplete="off">
                     </div>
                     <table class="table sm table-bordered table-striped dt-responsive" style="width: 100%">
                        <thead>
                           <tr>
                              <th rowspan="2" class="text-center" style="vertical-align: middle">Sl.</th>
                              <th rowspan="2" class="text-center" style="vertical-align: middle">Employee Name</th>
                              <th colspan="3" class="text-center" style="vertical-align: middle">Attendance Status</th>
                           </tr>
                           <tr>
                              <th class="text-center btn present_all" style="display: table-cell;background-color:#114190">Present</th>
                              <th class="text-center btn leave_all" style="display: table-cell;background-color:#114190">Leave</th>
                              <th class="text-center btn absent_all" style="display: table-cell;background-color:#114190">Absent</th>
                           </tr>
                        </thead>
    <tbody>
       @foreach ($employees as $key => $employee)
       <tr id="div {{$employee->id}}" class="text-center">
          <input type="hidden" name="employee_id[]" value="{{$employee->id}}" class="employee_id">
          <td>{{$key+1}}</td>
          <td>{{$employee->name}}</td>
          <td colspan="3">
             <div class="switch-toggle switch-3 switch-candy">
                <input class="present" id="present{{$key}}" name="attend_status{{$key}}" value="present" type="radio" checked="checked">

                <label for="present{{$key}}">Present</label>
                <input class="leave" id="leave{{$key}}" name="attend_status{{$key}}" value="Leave" type="radio">

                <label for="leave{{$key}}">Leave</label>
                <input class="absent" id="absent{{$key}}" name="attend_status{{$key}}" value="Absent" type="radio">

                <label for="absent{{$key}}">Absent</label>
                <a></a>
             </div>
          </td>
       </tr>
       @endforeach
    </tbody>
 </table>
 <button type="submit" class="btn btn-success btn-sm"> Submit </button>
</form>
</div>
               <!-- end card body-->
               
            </div>
            <!-- end card -->
         </div>
         <!-- end col-->
      </div>
      <!-- end row-->
   </div>
   <!-- container -->
</div>
<!-- content -->

<script type="text/javascript">
      $(document).on('click','.present',function(){
      $(this).parents('tr').find('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');
      });
      $(document).on('click','.leave',function(){
      $(this).parents('tr').find('.datetime').css('pointer-events','').css('background-color','white').css('color','#495057');
      });
      $(document).on('click','.absent',function(){
      $(this).parents('tr').find('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#dee2e6');
      });
</script>
<script type="text/javascript">
      $(document).on('click','.present_all',function(){
      $("input[value=Present]").prop('checked',true);
      $('.datetime').css('ponter-events','none').css('background-color','#dee2e6').css('color','#495057');
      });
      $(document).on('click','.leave_all',function(){
      $("input[value=Leave]").prop('checked',true);
      $('.datetime').css('ponter-events','').css('background-color','white').css('color','#495057');
      });
      $(document).on('click','.absent_all',function(){
      $("input[value=Absent]").prop('checked',true);
      $('.datetime').css('ponter-events','none').css('background-color','#dee2e6').css('color','#dee2e6');
      });
</script>


@endsection