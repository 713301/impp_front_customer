<template>
 <section>
  <h3 class="page-header"></h3>
  
  <form @submit.prevent="" enctype="multipart/form-data" action="#" method="post">

    <div class="row">
      <div class="col s11 m11 float auto">
        <div class="card white project-basic no-shadow">
          <div class="card-title primary-light-blue form-title primary-dark-text bold">
            Step 1 - Basic project details
          </div>
        </div>
      </div>
    </div>
    <div class="card-panel no-shadow margin-top-off">
      <input type="hidden" name="drft_code" value="">
      <input type="hidden" name="drft_id" value="">
      <input type="hidden" class="hide" name="step" value="">
      <div class="row margin-bottom-off">
        <div class="row">
          <div class="col s12 m12 relative">
            <label class="label-title primary-black-text">Describe Project
              <a href="#!" class="tooltipped" data-position="right" data-delay="50" data-tooltip='<ul>
                <li>This field is required</li>
                <li>Description must be alphanumeric.</li>
                <li>Minimum of 10 characters.</li>
              </ul>'> <i class="material-icons tiny relative red-text darken-4 text-darken-3">info_outline</i> </a>
            </label>
            
            
            
            <span class="hide absolute fadeIn no-border bottom-arrow absolute red white-text bold font-x error message desc-error"></span>
            <textarea placeholder="(eg. In the given image, I want to identify category of image - parking, highway, shopping mall, house - and list visible and identifyable objects - car, tree, road, pond, building)" id="project_desc" name="project_desc" data-required="true" class="materialize-textarea thin-border margin-bottom-off" data-max-length="2048" v-model="response.project_desc" data-min-length="100" data-length="1000"></textarea>
            <p>{{response.project_desc}}</p>
          </div>
        </div>
        <div class="row margin-top-x">
          <div class="col s12 m12">
            <div class="col s4 m4 no-padding">
              <label class="label-title primary-black-text left">Expected project duration
                <a href="#!" class="tooltipped" data-position="right" data-delay="50" data-tooltip='<ul>
                  <li>This field is required</li>
                  <li>Must be between any of the types.</li>
                </ul>'> <i class="material-icons tiny relative red-text darken-4 text-darken-3">info_outline</i> </a>
              </label>
            </div>
            <div class="no-padding input-selection left col s6 m6">
              <input name="project_duration_type" type="radio" id="ongoing" value="ongoing" v-model="response.project_duration_type" />
              <label for="ongoing" class="black-text bolder">Ongoing</label>
              <p>{{response.project_duration_type}}</p>
              <input name="project_duration_type" type="radio" id="fixed" value="fixed" v-model="response.project_duration_type"/>
              
              <label for="fixed" class="black-text bolder margin-left-x">Fixed Duration</label>
            </div>
          </div>
        </div>
        <div class="row  number-of-days margin-bottom-off">
          <div class="col s12 m12 relative margin-top-x">
            <div class="col s4 m4 no-padding">
              <label class="label-title primary-black-text left">Fixed duration in
                <a href="#!" class="tooltipped" data-position="right" data-background-color="red darken-3" data-delay="50" data-tooltip='<ul>
                  <li>This field is required</li>
                  <li>Enter proposed duration</li>
                </ul>'> <i class="material-icons tiny relative red-text darken-4 text-darken-3">info_outline</i> </a>
              </label>
            </div>
            <div class="input-selection left col s3 m3 no-padding">
              <input name="duration-type" type="radio" id="months" value="months" />
              <label for="months" class="black-text bolder">Months</label>
              <input name="duration-type" type="radio" id="days" />
              <label for="days" class="black-text bolder margin-left-x">Days</label>
            </div>
            <select class="browser-default relative col s2 m2 input-selection-option" id="months-selection" name="duration-days">

             <option value="" disabled selected>Select Months</option>
             
           </select>
           <select class="browser-default relative col s2 m2 input-selection-option" id="days-selection" name="duration-days">
             <option value="" disabled selected>Select Days</option>
             
           </select>
           
         </div>
       </div>
       <div class="row">
        <div class="col s12 m12 relative margin-top-x">
          <div class="col s4 m4 no-padding">
            <label class="label-title primary-black-text left">Any service level instructions?
              <a href="#!" class="tooltipped" data-position="right" data-delay="50" data-tooltip='<ul>
                <li>This field is required</li>
                <li>If yes, enter desired time or quality levels</li>
              </ul>'> <i class="material-icons tiny relative red-text darken-4 text-darken-3">info_outline</i> </a>
            </label>
          </div>
          <div class="input-selection no-padding left col s6 m6">
            <input name="sla_instruction" type="radio" value="sla_yes" id="sla_yes" />
            <label for="sla_yes" class="black-text bolder">Yes</label>
            <input name="sla_instruction" value="sla_no" type="radio" />
            <label for="sla_no" class="black-text bolder margin-left-x">No</label>
            <div class="col s12 m12 no-padding">
             
             
              <textarea name="sla-desc" id="sla-desc" class="materialize-textarea thin-border margin-bottom-off" rows="10" cols="40"></textarea>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="row margin-bottom-off">
      <div class="col s12 m12">
        <div class="row margin-top-x margin-bottom-off">
          <div class="col s12 m12">
            <button type="submit" value="create_basic" class="waves-effect waves-light btn blue darken-4 bold right action">
              <i class="material-icons right">input</i> Save and next
            </button>
            <button type="submit" value="create_basic_draft" class="margin-right-2x waves-effect waves-light btn right yellow darken-2 bold action">
              <i class="material-icons right">move_to_inbox</i> Save and Exit
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>


</section>
</template>
<script>
  export default {
    name: 'Index'
  };
</script>