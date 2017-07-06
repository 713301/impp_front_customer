
@extends('app')
<template>
	<link rel="stylesheet" type="text/css" href="">
	<form role="form" name="category-selection" action="#" method="post">
		<section class="row">
			<div class="col s11 m11 float auto">
				<article class="card white category-selection margin-top-3x z-depth-15">
					<div class="card-title primary-light-blue padding-x form-title primary-dark-text bold">
						<a onclick="event.preventDefault(); document.getElementById('cat-form').submit();" class="blue darken-3 btn waves-effect waves-light margin-right-x no-shadow">
							<i class="material-icons small">arrow_back</i>
						</a>

						Step 2 - Select project type <a href="#!" class="tooltipped" data-position="right" data-delay="50" data-background-color="red" data-tooltip='<ul>
						<li>This field is required</li>
						<li>Must select atleast any of the type</li>
					</ul>'> <i class="material-icons tiny relative red-text">info_outline</i> </a>
				</div>
				<div class="white col s12 m12 padding-x padding-top-off center-align project-filter-wrapper margin-top-x">
					<div class="col s12 m10 auto float margin-top-2x no-padding">
						<h5 class="grey-text bold padding-x text-darken-3 lighter margin-top-off margin-bottom-off relative"> 
							Filter by category 
							<a href="" class="link red-text text-darken-2 font-1-5x bold right padding-right-3x absolute right-space">View all types</a></h5>
							<div class="row">
								<input value="text" name="proj_taxonomy" class="type_taxnomy" type="radio" id="text" />
								<a href="#" class="col s6 m3 grey-text text-darken-2 border-x padding-x bold">								
									<i class="material-icons fa-3x block">chrome_reader_mode</i>
									Text Analysis
								</a>
								<a href="" class="col s6 m3 grey-text text-darken-2 border-x padding-x bold">
									<i class="material-icons fa-3x block">developer_board</i>
									Machine Learning
								</a>

								<a href="" class="col s6 m3 grey-text text-darken-2 border-x padding-x bold">
									<i class="material-icons fa-3x block">important_devices</i>
									Computer Vision
								</a>

								<a href="" class="col s6 m3 grey-text text-darken-2 border-x padding-x bold">
									<i class="material-icons fa-3x block">build</i>
									Deep Learning
								</a>
							</div>
						</div>
					</div>
					<div class="card-panel no-shadow margin-top-off clear">
						<h6 class="deep-orange-text text-darken-1 bold margin-top-off">Select a project type best suits your requirements or start from scratch. </h6>
						<section class="category-selection-wrapper margin-top-2x" id="category-details">
							<div class="row">
								<div class="col s12 m12 padding-x thin-border category-selection-row">
									<div class="col s12 m2">

										
									</div>
									<div class="col s12 m9 offset-m1">
										<h4 class="bolder secondary-dark-text margin-top-x"></h4>
										<div class="col s12 m12 input-sub-category no-padding">
										
										</div>
								</div>
							</div>
						</div> 

						
						<div class="row">
							<div class="col s12 m12 padding-x thin-border category-selection-row">
								<div class="col s12 m2">
									
								</div>
								<div class="col s12 m9 offset-m1">
									<h4 class="bolder secondary-dark-text margin-top-x">Unsure which project type?</h4>
									<div class="col s12 m12 input-sub-category margin-top-x no-padding">
										<ul>
											<li class="margin-right-x left">
												<input name="proj_subtype" type="radio" />
												<label for="skip-step" class="bolder border-dark grey-dark-text case-capital"> Skip this step </label>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div> 
					</section>
					<div class="row margin-top-x margin-bottom-off">
						<div class="col s12 m12">
							<button type="submit" name="category_draft_next" value="category_draft_next" class="waves-effect waves-light btn blue darken-4 bold right">
								<i class="material-icons right">input</i>
								Save and next
							</button>
							<button type="submit" name="category_draft" value="category_draft" class="margin-right-2x waves-effect waves-light btn right yellow darken-2 bold">
								<i class="material-icons right">move_to_inbox</i>
								Save and Exit
							</button>
						</div>
					</div>
				</article>
			</div>
		</section>
		</form>
	</template>
	





