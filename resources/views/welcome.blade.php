<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'API Documentation App') }}</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/customer.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
<body>

  <header class="no-shadow hero-header">
    <nav class="blue darken-3 top-navbar no-shadow">
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down navbar-left">
          <li>
            <a href="#" data-activates="slide-out" class="sidemenu-toggle"> <i class="material-icons small">menu</i></a>
          </li>

        </ul>


        <ul class="right navbar-right">

          <li>
            <a class=" notification-pane" data-activates="notify-dropdown">
              <i class="material-icons small dropdown-button" data-activates="notify-dropdown">notifications</i><ul id="notify-dropdown" class="dropdown-content animated flipInY ">
              <li class="text-center ">
                <img class="  padding-top-x " src="http://localhost/impp_vue_l5/public/images/bell.png">
                <span class="grey-text text-darken-4 padding-top-off bolder">No new notification</span></li>
              </ul>

            </a>
          </li>
          <li>
            <a data-activates="myaccount"> <i class="material-icons small dropdown-button" data-activates="myaccount">more_vert</i><ul id="myaccount" class="dropdown-content animated flipInY">
              <li>
                <a href="#!">My Account</a>
              </li>
              <form id="logout-form" action="http://localhost/impp_vue_l5/public/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="0avtfitJmGSFgpnSYQhYmQvGBEv5tT83boyWhfgt">
              </form>
              <li class="divider"></li>
              <li>
                <a href="http://localhost/impp_vue_l5/public/support">Get Support</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="http://localhost/impp_vue_l5/public/user/password/reset">Change Password</a>
              </li>

              <li class="divider"></li>
              <li>
                <a onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" href="http://localhost/impp_vue_l5/public/logout"> Exit iMPP </a>
              </li>

            </ul></a>
          </li>
        </ul>
      </div>
    </nav>

    <ul id="slide-out" class="side-nav" style="transform: translateX(-100%);">
      <li>
        <div class="userView blue darken-3">
          <div class="row margin-bottom-off">
            <div class="col s5 m5">
              <img src="http://localhost/impp_vue_l5/public/images/logo.png" class="full-width">
            </div>
            <div class="col s7 m7 no-padding">
              <h3 class="bolder brand-name white-text">impp</h3>
            </div>
          </div>
          <a href="#!user"> <img class="circle" src="http://localhost/impp_vue_l5/public/images/default-avatar.png"> </a>
          <a href="#!name" class="white-text name font-3x bolder">  Tamaghna       Banerjee </a>
          <a href="#!email"><span class="white-text email">         tamaghna.b@imerit.net
          </span></a>
        </div>
      </li>
      <li>
        <a class="link padding-left-2x" href="http://localhost/impp_vue_l5/public/dashboard"> <i class="material-icons relative secondary-dark-text">dashboard</i> <span class="sidenav-color"> <b>DASHBOARD</b> </span> </a>
      </li>
      <ul class="collapsible" data-collapsible="accordion">
        <li class="margin-top-0-5x">
          <div class="collapsible-header">
            <a href="http://localhost/impp_vue_l5/public/view/projects" class="subheader primary-blue-text side-nav-style side-div collapsible-style"> <i class="material-icons relative secondary-dark-text">filter_drama</i> <span class="sidenav-color"> <b>MY PROJECTS </b> </span> <i class="material-icons right">keyboard_arrow_down</i></a>
          </div>
          <div class="collapsible-body">
            <a href="http://localhost/impp_vue_l5/public/projects/draft" class="block float secondary-dark-text clear margin-left-5x">MANAGE PROJECTS</a>
            <a href="http://localhost/impp_vue_l5/public/project/basic" class="block float secondary-dark-text clear margin-left-5x">NEW PROJECT</a>

          </div>
        </li>
      </ul>
      <li>
        <div class="brand-view absolute full-width white center-align">
          <div class="row">
            <div class="col s12 m12 center-align bold">
              © &nbsp;iMerit Technology Services
            </div>
          </div>
        </div>
      </li>
    </ul>

    <section class="blue darken-3 project-navigation">
      <div class="row margin-bottom-off">
        <div class="col s11 auto float">
          <div class="row project-row">
            <div class="col s6 left relative project-caption">
              <div class="circle icon white left">
                <i class="material-icons medium grey-text text-lighten-2">help</i>
              </div>
              <div class="col s12 m6">



                <label class="label-title white-text bolder">Project Title
                  <a href="#!" class="tooltipped" data-position="right" data-delay="50" data-tooltip='<ul>
                    <li>This field is required</li>
                    <li>Title must be unique</li>
                    <li>5 to 200 characters are allowed</li>
                  </ul>'> <i class="material-icons tiny relative white-text">info_outline</i> </a>
                </label>
                <span class="hide absolute fadeIn no-border bottom-arrow absolute red white-text bold font-x error message title-error"></span> 

                <input placeholder="Enter a title" required id="project_title" value="{{old('project_title')}}" name="project_title" type="text" class="input-field validate custom-font bold font-2-5x white-text" data-required="true" data-validate="^[A-Za-z\d\s]+$" data-max-length="256" autocomplete="off"> 

              </div>
            </div>
            <div class="col s12 m5 offset-m1 relative project-steps">
              <div class="row margin-bottom-off">

                <div class="col s4 center-align relative">
                  <hr/>
                  <a href="#" class="waves-effect waves-light circle icon tool center-align right  dark-blue  "><i class="material-icons font-3x relative  white-text bold  "> perm_data_settings</i> </a>
                  <span class="top  grey-text text-lighten-3 bolder  relative label-icon-info frmsubmit">Basic Details</span>
                </div>

                <div class="col s4 center-align relative">
                  <hr/>
                  <a href="#" class="waves-effect waves-light circle icon tool center-align right  dark-blue  "> <i class="material-icons font-3x relative  grey-text text-lighten-2 "> format_list_bulleted </i> </a>
                  <!--<span class="font-x white-text @if(isset($step) && !empty($step) && $step > 2) animated zoomIn bold @else bolder @endif">Step 2</span><br/>-->
                  <span class="top  grey-text text-lighten-3 bolder  relative label-icon-info ">Category Selection</span>
                </div>

                <div class="col s4 center-align relative">
                  <a href="#" class="waves-effect waves-light circle icon tool center-align right  dark-blue  "> <i class="material-icons font-3x relative  grey-text text-lighten-2 "> cloud_upload</i> </a>
                  <span class="top  grey-text text-lighten-3 bolder  relative label-icon-info s">Upload Resource</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
  <div id="app" class="flex-center position-ref full-height container">


    <div class="content">
      <router-view></router-view>
    </div>
  </div>
</body>
<script>window.Laravel = { csrfToken: '{{ csrf_token() }}' };</script>
<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".sidemenu-toggle").sideNav();
  });
</script>
</html>