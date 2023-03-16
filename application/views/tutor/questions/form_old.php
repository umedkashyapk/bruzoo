<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $update = isset($question_id) && $question_id ? '_update' : '' ?>
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <?php
        $data['tab_quiz_id'] = $quiz_id;
        $this->load->view('tutor/quiz/tab_list',$data);
      ?>
    </div>
    <hr>
    <?php if($update)
    { ?>

        <div class="col-md-12">
          <a href="<?php echo base_url('tutor/questions/translate-questions/').$question_id ?>" class="btn btn-warning float-right">Translate Questions</a>
        </div>
      <div class="clearfix"></div>
    <hr>

      <?php
    }?>
    <div class="typeit_toolbar_edit"></div>
    <div class="textbox-and-buttons-container"></div>

    <div class="col-12">      
        <?php echo form_open_multipart('', array('role'=>'form','novalidate'=>'novalidate')); ?>
        <div class="row"> 
          <!-- <div class="col-2 offset-10 float-right">
            <button class="btn btn-info  btn-block float-right add-keypad" data-index="" type="button"><?php //echo lang('admin_add_keypad'); ?></button>
          </div> -->
          <div class="col-12">
            <div class="form-group <?php echo form_error('title') ? ' has-error' : ''; ?>">
              <?php echo  form_label(lang('admin_title'), 'title'); ?> 
              <span class="required">*</span>
              <?php 
                $populateData = $this->input->post('title') ? $this->input->post('title') : (isset($question_data['title']) ? $question_data['title'] :  '' );
              ?>
              <textarea name="title" id="title" class="form-control custom-area" rows="5" ><?php echo xss_clean($populateData);?></textarea>
              <span class="small form-error"> <?php echo strip_tags(form_error('title')); ?> </span>
            </div>
          </div>



          <div class="col-6">
            <div class="question_img_block form-group <?php echo form_error('image_upload_error') ? ' has-error' : ''; ?>">
              <?php echo  form_label(lang('admin_upload_image'), 'image'); ?>
              <?php 
                $populateData = isset($question_data['image']) ? $question_data['image'] :  '';
              ?>
              <input type="File" name="image" id="image" class="form-control">
              <span class="small form-error"> <?php echo strip_tags(form_error('image_upload_error')); ?> </span>
              <?php 
                if($populateData)
                {
              ?>
                <img src='<?php echo base_url("assets/images/questions/$populateData"); ?>' class="question_image popup">

              <?php
                }
              ?>
            </div>
          </div>

          <div class="col-6">
            <div class="question_img_block form-group <?php echo form_error('solutionimage_error') ? ' has-error' : ''; ?>">
              <?php echo  form_label(lang('admin_upload_solution_image'), 'solutionimage'); ?>
              <?php 
                $populateData = isset($question_data['solution_image']) ? $question_data['solution_image'] :  '';
              ?>
              <input type="File" name="solutionimage" id="solutionimage" class="form-control">
              <span class="small form-error"> <?php echo strip_tags(form_error('solutionimage_error')); ?> </span>
              <?php 
                if($populateData)
                {
              ?>
                <img src='<?php echo base_url("assets/images/questions/solution/$populateData"); ?>' class="question_image popup">

              <?php
                }
              ?>
            </div>
          </div>    
          <div class="col-12">
            <div class="form-group <?php echo form_error('solution') ? ' has-error' : ''; ?>">
              <?php echo  form_label(lang('solution'), 'solution'); ?>
              
              <?php
              
                $populateData = $this->input->post('solution') ? $this->input->post('solution') : (isset($question_data['solution']) ? $question_data['solution'] :  '' );

              ?>
              <textarea name="solution" id="p_desc" class="form-control custom-area" rows="5" ><?php echo xss_clean($populateData);?></textarea>
              <span class="small form-error"> <?php echo strip_tags(form_error('solution')); ?> </span>
            </div>
          </div>

          <div class="clearfix"></div>

          <?php $first_choies = isset($choices_array[0]) ? $choices_array[0] : ''; ?>
          <div class="clearfix"></div> 
          <div class="col-12">
            <div class="after_ticket_section row">

              <div class="col-md-8">
                <div class="form-group <?php echo form_error('choices[]') && empty($first_choies) ? ' has-error' : ''; ?> choice_block">
                  <label class="control-label"> <?php echo lang('question_choices'); ?>  <span class="text-danger">*</span></label>
                  <textarea name="choices[0]" id="choices" class="form-control choices custom-area" rows="5" ><?php echo xss_clean($first_choies); ?></textarea>
                  <span class="small form-error"> <?php echo xss_clean($first_choies) ? '' : strip_tags(form_error("choices[]")); ?> </span>
                </div>
              </div>

              <?php 
                $first_is_checked = '';
                foreach ($arr_is_correct as $array_key => $correct_value) 
                {
                  if(empty($first_is_checked))
                  {
                    $first_is_checked = $correct_value == $first_choies ? 'checked' : '';
                  }
                }
                $no_of_option = $no_of_option ? $no_of_option : 0;
              ?>

              <div class="col-2">
                <div class="form-group togle_button">
                  <label for="status" ><?php echo lang('admin_is_correct'); ?> </label>
                  <label class="custom-switch form-control">
                    <input type="checkbox" name="is_correct[0]" value="1" class="custom-switch-input is_correct"  <?php echo xss_clean($first_is_checked);  ?>>
                    <span class="custom-switch-indicator"></span>
                  </label>
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group mt-4 pt-2">
                  <button class="btn btn-primary  btn-block add-more" data-index="<?php echo xss_clean($no_of_option); ?>" type="button">
                    <?php echo lang('admin_add_more'); ?></button>
                  </div>
                </div>

                <div class="clearfix"></div>

                <?php 
                  if($choices_array)
                  { 
                    unset($choices_array[0]);

                    $is_checked = '';
                    $i = 0;

                    foreach ( $choices_array as  $choices_value) 
                    { 
                      $i++;
                      foreach ($arr_is_correct as $array_key => $correct_value) 
                      {
                        if(empty($is_checked))
                        {
                          $is_checked = $correct_value == $choices_value ? 'checked' : '';
                        }
                      } 
                ?>

                    <div class="copied_ticket_section col-12">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group <?php echo form_error('choices[]') && empty($choices_value) ? ' has-error' : ''; ?>">
                            <label class="control-label">Options <span class="text-danger">*</span></label>
                            <textarea name="choices[<?php echo xss_clean($i); ?>]" id="choices" class="form-control choices custom-area" rows="5" ><?php echo xss_clean($choices_value); ?></textarea>
                            <span class="small form-error"> <?php echo xss_clean($choices_value) ? '' : strip_tags(form_error("choices[]")); ?> </span>
                          </div>
                        </div>

                        <div class="col-2">
                          <div class="form-group togle_button">
                            <label for="status" >Is Correct </label>
                            <label class="custom-switch form-control">
                              <input type="checkbox" name="is_correct[<?php echo xss_clean($i); ?>]" value="1" class="custom-switch-input is_correct"  <?php echo xss_clean($is_checked);  ?>>
                              <span class="custom-switch-indicator"></span>
                            </label>
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group mt-4 pt-2 ">
                            <button class="btn btn-danger  btn-block remove_block_btn<?php echo xss_clean($update); ?>" type="button">Remove</button>
                          </div>
                        </div>  
                        <div class="clearfix"></div>

                      </div>
                    </div>
                <?php
                  $is_checked = '';
                  } }
                ?>

              </div>
            </div>
            <div class="clearfix"></div>
            <hr>

            <div class="col-12">
              <?php $saveUpdate = isset($question_id) ? lang('core_button_update') : lang('core_button_save'); ?>
              <input type="submit"  value="<?php echo ucfirst($saveUpdate);?>" class="btn btn-primary px-5">
              <a href="<?php echo base_url('tutor/quiz/questions/').$quiz_id;?>" class="btn btn-dark px-5"><?php echo lang('core_button_cancel'); ?></a>
            </div>
            <div class="clearfix"></div>
          </div>
          <?php echo form_close();?>
        </div>        

      <section class="copy_ticket_section d-none">
        <div class="copied_ticket_section col-12">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group choice_block">
                <label class="control-label"><?php echo lang('question_choices'); ?> <span class="text-danger">*</span></label>
                <textarea name="choices[]" id="choices" class="form-control choices custom-area checkkk" rows="5" ></textarea>

              </div>
            </div>

            <div class="col-2">
              <div class="form-group togle_button">
                <label for="status" ><?php echo lang('admin_is_correct'); ?> </label>
                <label class="custom-switch form-control">
                  <input type="checkbox" name="is_correct[]" value="1" class="custom-switch-input is_correct"  data-size="sm">
                  <span class="custom-switch-indicator"></span>
                </label>
              </div>
            </div>

            <div class="col-md-2">
              <div class="form-group mt-4 pt-2 ">
                <button class="btn btn-danger  btn-block remove_block_btn<?php echo xss_clean($update); ?>" type="button"><?php echo lang('admin_record_remove'); ?></button>
              </div>
            </div>  
            <div class="clearfix"></div>

          </div>
        </div>
      </section> 
    </div>
  </div>
