@extends('app')
<template>
<form role="form" name="upload-document" action="" method="post" enctype="multipart/form-data"> 
    
    <div class="row">
        <div class="col s11 m11 float auto">
            <article class="card white project-basic no-shadow thin-border margin-top-2x">
                <div class="card-title primary-light-blue form-title primary-dark-text bold">
                    <a onclick="event.preventDefault(); document.getElementById('cat-form').submit();" class="blue-grey btn waves-effect waves-light margin-right-x" @click="goBack">
                        <i class="material-icons bold small">arrow_back</i>
                    </a>
                    Step 3 - Upload instructional documents
                    <a href="#!" class="tooltipped" data-position="right" data-delay="50" data-background-color="grey lighten-1" data-tooltip='<ul>
										<li>This field is optional</li>
										<li>Add multiple web links one by one</li>
										<li>File upload is not mandatory</li>
										<li>Uploaded files must be of given type</li>
										</ul>'> <i class="material-icons tiny relative blue-grey-text text-darken-1">info_outline</i> </a>
                </div>
                <div class="card-panel no-shadow">
                    <section class="upload-document-wrapper margin-top-off">
                        <div class="row margin-top-x">
                            <div class="col s12 no-padding input-wrapper document-link-wrapper">
                                <label class="col s12 no-padding label label-info bolder blue-grey-text text-darken-2">Instructional Document Link</label>
                                <div class="input-field col s11 border-x inline">
                                    <span class="hide absolute fadeIn no-border bottom-arrow absolute red white-text bold font-x error message doclink-error">Please insert a valid link!</span>
                                    <input placeholder="Add a web link. Don't forget to include http or https" name="document_link[]" type="text" data-required="false" class="preview-field validate no-border margin-bottom-off">
                                </div>
                                <a class="add-new-link hvr-pop relative left-space" href="javascript:;"> <i class="material-icons green-text small relative">add_circle</i> </a>
                               
                                <div class="input-field col s11 border-x inline">
                                    <input placeholder="Add another weblink" name="document_link[]" value="{{$link}}" type="text" class="validate no-border margin-bottom-off">
                                    <a href="#" data-draft_id="" data-document_link="" class="hvr-pop remove_field red center-align white-text absolute link_del">x</a>
                                </div>
                             
                            </div>
                        </div>
                        <div class="row margin-bottom-x margin-top-x">
                            <div class="col s12 no-padding input-wrapper">
                                <span class="col s12 no-padding label bolder blue-grey-text text-darken-2">Instructional Documents</span>
                                <input class="validate col s12 no-padding thin-border input-control clear float" type="file" name="document_file[]" id="filer_input" multiple="multiple"> 
                                <div class="jFiler-items jFiler-row">
                                    <ul class="jFiler-items-list jFiler-items-grid">
                                        <li class="jFiler-item" data-jfiler-index="2" style="">
                                            <div class="jFiler-item-container">
                                                <div class="jFiler-item-inner">
                                                    <div class="jFiler-item-thumb">
                                                        <div class="jFiler-item-status"></div>
                                                        <div class="jFiler-item-thumb-overlay">
                                                            <div class="jFiler-item-info">
                                                                <div style="display:table-cell;vertical-align: middle;">
                                                                    <span class="jFiler-item-title"> <b title="logo-talk.png"></b>
																		<input type="hidden" name="actual_file_name[]" value="">
																		
																	</span>
                                                                    <!--<span class="jFiler-item-others">3.09 MB</span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="jFiler-item-thumb-image">
                                                            <span class=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="jFiler-item-assets jFiler-row">
                                                        <ul class="list-inline pull-left">
                                                            <li></li>
                                                        </ul>
                                                        <ul class="list-inline pull-right">
                                                            <li>
                                                                <a id="a_tag" data-url="" class="icon-jfi-trash jFiler-item-trash-action file_del" data-draft_id="" data-org_name="" data-unq_name=""></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                     
                                    </ul>
                                </div>
                              
                            </div>
                        </div>
                    </section>
                </div>
            </article>
            <!--sample file upload -->
            <article class="card white sample-file-upload margin-top-3x no-shadow thin-border">
                <div class="card-title primary-light-blue padding-x form-title primary-dark-text bold">
                    Provide sample data
                </div>
                <div class="card-panel no-shadow margin-top-off">
                    <section class="sample-file-upload-wrapper">
                        <div class="row">
                            <div class="col s12 m12 no-padding">
                                <label class="label-title no-padding blue-grey-text text-darken-2 bold font-1-5x">Sample Datafile
                                    <a href="#!" class="tooltipped" data-position="right" data-delay="50" data-tooltip='<ul>
										<li>This field is optional</li>
										<li>We only support valid excel datasheet</li>
										<li>File type includes .xls .xlsx and .csv</li>
										<li>Maximum size limit is of 5 MB</li>
										</ul>'>
                                        <i class="material-icons tiny relative blue-text text-darken-3">info_outline</i>
                                    </a>
                                    
                                    <a href="#!" class="link red-text bold margin-left-3x" id="sample-link" data-url="" data-value="">
                                        <i class="material-icons relative right-space top">cloud_download</i> Download sample file to preview
                                    </a>
                                    
                                </label>
                                
                                <div class="file-field input-field no-padding pointer">
                                    
                                    <input type="hidden" id="actual_sample_file_name" name="actual_sample_file_name[]" value="">
                                    <input type="hidden" id="draft_sample_file_arr" name="draft_sample_file_arr[]"  value="">
                                    <input type="file" id="dropify" class="dropify sample_file" data-default-file="" data-max-file-size="5M" data-min-width="400" data-max-width="500" name="sample-file-upload[]" data-allowed-file-extensions="csv xls xlsx ods" />
                                    <input type="file" id="dropify" class="dropify" data-max-file-size="5M" data-min-width="400" data-max-width="500" name="sample-file-upload[]" data-allowed-file-extensions="csv xls xlsx ods" />
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="row margin-bottom-off margin-top-3x">
                        <div class="col s12 m12">
                            <button class="waves-effect waves-light btn green accent-4 bolder right no-shadow" value="sub_create_proj" name="sub_create_proj" type="submit">
                                <i class="material-icons right">check_circle</i> submit project
                            </button>
                            <button type="submit" name="upload_draft" value="upload_draft" class="margin-right-2x waves-effect waves-light btn right deep-orange bolder no-shadow">
                                <i class="material-icons right">move_to_inbox</i> save and exit
                            </button>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</form>
</template>
<script>
    export default {
    name: 'upload',
    data: function(){
      return{
        authenticated: false,
        list:[],
        result : [],
        error : "" ,
        code:"",   
        response: {
          title:''
          
        }
      };
    },
    ready: function() {

    },
    methods:{
        goBack: function(){
                this.$route.router.go({name: 'category'});
            }
     
  }
}
</script>

