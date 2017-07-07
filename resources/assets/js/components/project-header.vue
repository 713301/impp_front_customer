@extends('app')
<template>
<header class="no-shadow hero-header">
<link rel="stylesheet" type="text/css" href="">
    <section class="blue darken-3 project-navigation">
        <div class="row margin-bottom-off">
            <div class="col s11 auto float">
                <div class="row project-row">
                    <div class="col s6 left relative project-caption">
                        <div class="circle icon white left">
                            <i class="material-icons medium grey-text text-lighten-2">help</i>
                        </div>
                        <div class="col s12 m6">
                           
                           		 <span class="absolute fadeIn no-border bottom-arrow absolute red white-text bold font-x error message">Project title must be between 5 to 200 characters!</span>
                          
                            <label class="label-title white-text bolder">Project Title
                                <a href="#!" class="tooltipped" data-position="right" data-delay="50" data-tooltip='<ul>
									<li>This field is required</li>
									<li>Title must be unique</li>
									<li>5 to 200 characters are allowed</li>
									</ul>'> <i class="material-icons tiny relative white-text">info_outline</i> </a>
                            </label>
                            <span class="hide absolute fadeIn no-border bottom-arrow absolute red white-text bold font-x error message title-error"></span> 
                            
                           	 	<input placeholder="Enter a title" required id="project_title" value="{{old('project_title')}}" name="project_title" type="text" class="input-field validate custom-font bold font-2-5x white-text" data-required="true" data-validate="^[A-Za-z\d\s]+$" data-max-length="256" autocomplete="off"> 
                            
                           		 <input placeholder="Enter a title" required id="project_title"  name="project_title" type="text" class="input-field validate custom-font bold font-2-5x white-text" data-required="true" data-validate="^[A-Za-z\d\s]+$" data-max-length="256" autocomplete="off">
                           
                        </div>
                    </div>
                    <div class="col s12 m5 offset-m1 relative project-steps">
                        <div class="row margin-bottom-off">
                          
                            <div class="col s4 center-align relative">
                                <hr/>
                                <a href="#" class="waves-effect waves-light circle icon tool center-align right"> <i class="material-icons font-3x relative"></i> </a>
                                <span class="top relative label-icon-info">Basic Details</span>
                            </div>
                           
                            <div class="col s4 center-align relative">
                                <hr/>
                                <a href="#" class="waves-effect waves-light circle icon tool center-align right "> <i class="material-icons font-3x relative"></i> </a>
                                <!--<span class="font-x white-text @if(isset($step) && !empty($step) && $step > 2) animated zoomIn bold @else bolder @endif">Step 2</span><br/>-->
                                <span class="top relative label-icon-info frmsubmit">Category Selection</span>
                            </div>
                            
                            <div class="col s4 center-align relative">
                                <a href="#" class="waves-effect waves-light circle icon tool center-align right"> <i class="material-icons font-3x relative"></i> </a>
                                <span class="top relative label-icon-info frmsubmit">Upload Resource</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
</template>

