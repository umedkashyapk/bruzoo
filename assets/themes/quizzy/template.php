<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Default Public Template 
*/
?>
<!DOCTYPE html>
<?php 

$is_rtl = '';
$rtl_dir = '';
$margin_auto = 'mr-auto'; 
$order_two = NULL; 
if ($this->session->is_rtl) 
{

  ?>
  <html lang="en" dir="rtl">
  <?php  
  $is_rtl = 'rtl_language';
  $rtl_dir = 'rtl';
  $margin_auto = 'ml-auto';
  $order_two = 'order-2';
}
else
{
  ?>
  <html lang="en">
  <?php 
}
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Language" content="en" />
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="theme-color" content="#4188c9">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/web/style.css"> -->
 <link rel="stylesheet" href="https://bruzoo.in/assets/web/css/color.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <style type="text/css">
    .section-title-wrapper:after {
  background: rgba(0, 0, 0, 0) url('<?php echo base_url('/assets/images/cap-dark.jpg'); ?>') repeat scroll 0 0;
}
.white.section-title-wrapper:after {
    background: rgba(0, 0, 0, 0) url('<?php echo base_url('/assets/images/cap-white.png'); ?>') repeat scroll 0 0;
}
  </style>

  <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php echo base_url('/assets/images/logo/'); ?><?php echo get_admin_setting('site_favicon'); ?>" />
  <!-- Generated: 2018-04-16 09:29:05 +0200 -->
  <?php 

  if(isset($meta_data) && $meta_data)
  {

    $meta_image = json_decode($meta_data['image']);

    ?>
    <meta name="keywords" content="<?php echo $meta_data['meta_keyword']; ?>">
    <meta name="description" content="<?php echo $meta_data['meta_description']; ?>">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="<?php echo $meta_data['title']; ?>">
    <meta itemprop="description" content="<?php echo strip_tags(xss_clean($meta_data['description'])); ?>">
    <?php
    if(is_array($meta_image))
    {
      foreach($meta_image as $meta_key => $meta_value)
      { 
        ?>    
        <meta itemprop="image" content="<?php echo $meta_value; ?>">
        <?php 
      }
    } 
    else 
    { 
      ?>  
      <meta itemprop="image" content="<?php echo $meta_data['image']; ?>">
    <?php } ?>  

    <!-- Twitter Card data -->
    <meta name="twitter:site" content="<?php echo $this->settings->site_name; ?>">
    <meta name="twitter:title" content="<?php echo $meta_data['title']; ?>">
    <meta name="twitter:description" content="<?php echo strip_tags(xss_clean($meta_data['description'])); ?>">
    <meta name="twitter:creator" content="<?php echo $this->settings->site_name; ?>">
    <?php
    if(is_array($meta_image))
    {
      foreach($meta_image as $meta_key => $meta_value)
      {

        ?>
        <meta name="twitter:image" content="<?php echo $meta_value; ?>">
        <?php 
      }
    } 
    else 
    { 
      ?>  
      <meta itemprop="image" content="<?php echo $meta_data['image']; ?>">
    <?php } ?>

    <!-- Open Graph data -->
    <meta property="og:title" content="<?php echo $meta_data['title']; ?>" />

    <meta property="og:url" content="<?php echo current_url();?>" />
    <?php
    if(is_array($meta_image))
    {
      foreach($meta_image as $meta_key => $meta_value)
      {

        ?>
        <meta property="og:image" content="<?php echo $meta_value;?>" />
        <?php 
      }
    } 
    else 
    { 
      ?>  
      <meta itemprop="image" content="<?php echo $meta_data['image']; ?>">
    <?php } ?>  
    <meta property="og:description" content="<?php echo strip_tags(xss_clean($meta_data['description'])); ?>" />
    <meta property="og:site_name" content="<?php echo $this->settings->site_name; ?>" />

    <?php
  }
  else
  { 
    ?> 
    <meta name="keywords" content="<?php echo $this->settings->meta_keywords; ?>">
    <meta name="description" content="<?php echo $this->settings->meta_description; ?>">
    <?php     
  } 
  ?>
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500,700|Work+Sans:400,700" rel="stylesheet">


  <?php 
  $meta_title = (isset($meta_data['meta_title']) && !empty($meta_data['meta_title']) ? $meta_data['meta_title'] : $this->settings->site_name);
  ?>
  <title><?php echo xss_clean($page_title); ?> - <?php echo xss_clean($meta_title); ?></title>
  <?php 
  if ($this->session->is_rtl) 
  {
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/themes/admin/css/");?>rtl.bootstrap.min.css">

    <?php  
  }
  ?>


  
  <?php if (isset($css_files) && is_array($css_files)) : ?>
  <?php foreach ($css_files as $css) : ?>
    <?php if ( ! is_null($css)) : ?>
      <?php $separator = (strstr($css, '?')) ? '&' : '?'; ?>
      <link rel="stylesheet" href="<?php echo xss_clean($css); ?><?php echo xss_clean($separator); ?>v=<?php echo xss_clean($this->settings->site_version); ?>"><?php echo "\n"; ?>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?>


<?php
$login_user_id = isset($this->user['id']) ? $this->user['id'] : 0;
$ad_left_time = 0;
$session_time = isset($this->session->quiz_session['quiz_data']['duration_min']) && ($this->session->quiz_session['quiz_data']['duration_min'] > 0 ) ? 'yes' : 'no';
$ad_active_quiz = '';
$ad_active_quiz_result_page_url = '';
$test_page = 'quiz';
if($this->session->quiz_session)
{
  $ad_added_time = $this->session->quiz_session['participants_content']['started']; 

  $ad_dt = new DateTime($ad_added_time);
  $ad_minutes_to_add = $this->session->quiz_session['quiz_data']['duration_min'];
  $ad_time = new DateTime($ad_added_time);
  $ad_time->add(new DateInterval('PT' . $ad_minutes_to_add . 'M'));
  $ad_expire_time = $this->session->quiz_session['participants_content']['end_time'];

  $ad_expire_time = strtotime($ad_expire_time);
  $ad_current_time = strtotime(date('Y-m-d H:i:s'));
  $ad_session_quiz_id = $this->session->quiz_session['quiz_data']['id'];
  if($ad_current_time >= $ad_expire_time)
  {
    return redirect('result/'.$ad_session_quiz_id);      
  }

  $ad_active_quiz = base_url("test/$ad_session_quiz_id/1");

  $ad_session_participant_id = $this->session->quiz_session['participants_content']['participant_id'];
  $running_encrypted_participant_id = encrypt_decrypt('encrypt',$ad_session_participant_id);
  $ad_active_quiz_result_page_url = base_url("my/test/summary/$running_encrypted_participant_id");

  $ad_page_is_quiz = strstr(uri_string(), "test/$ad_session_quiz_id/") ? 'YES' : '';
  if(empty($ad_page_is_quiz))
  {
    $ad_left_time = $ad_expire_time - $ad_current_time;
    $test_page = 'other';
  }
}

$disable_right_click = get_admin_setting('disable_right_click');
$disable_print_screen = get_admin_setting('disable_print_screen');
$disable_cut_copy_paste = get_admin_setting('disable_copy_paste_click');
$hader_logo_height = get_admin_setting('header_logo_height');
$hader_logo_height = $hader_logo_height > 1 ? $hader_logo_height : 65;

$flash_error_msg =  str_replace("'","`",$this->session->flashdata('error'));
$flash_success_msg =  str_replace("'","`",$this->session->flashdata('message'));

$user_id = isset($this->user['id']) ? $this->user['id'] : NULL; 
$full_name_of_user = isset($this->user['first_name']) ? $this->user['first_name']. ' '.$this->user['last_name'] : '';
$is_admin = (isset($this->user['is_admin']) && $this->user['is_admin']==1) ? "Administrator" : "User";
$is_tutor = (isset($this->user['role']) && $this->user['role']=="tutor") ? TRUE : FALSE;
$name_of_user = (strlen($full_name_of_user) > 15) ? substr($full_name_of_user, 0, 10).'...' : $full_name_of_user ;

$profile_url = "profile";

?>

<script> 
  var BASE_URL = '<?php echo base_url(); ?>'; 
  var csrf_Name = '<?php echo $this->security->get_csrf_token_name() ?>'; 
  var csrf_Hash = '<?php echo $this->security->get_csrf_hash(); ?>'; 
  var rtl_dir = "<?php echo xss_clean($rtl_dir); ?>";
  var are_you_sure = "<?php echo lang('are_you_sure'); ?>";
  var permanently_deleted = "<?php echo lang('it_will_permanently_deleted'); ?>";
  var yes_delere_it = "<?php echo lang('yes_delere_it'); ?>";
  var resume_quiz_lang = "<?php echo lang('resume_quiz'); ?>";
  var quiz_result_lang = "<?php echo lang('quiz_result'); ?>";
  var check_quiz_result = "<?php echo lang('check_quiz_result'); ?>";
  var table_search = "<?php echo lang('table_search'); ?>";
  var table_show = "<?php echo lang('table_show'); ?>";
  var table_entries = "<?php echo lang('table_entries'); ?>";
  var table_showing = "<?php echo lang('table_showing'); ?>";
  var table_to = "<?php echo lang('table_to'); ?>";
  var table_of = "<?php echo lang('table_of'); ?>";
  var java_error_msg = "<?php echo lang('java_error_msg'); ?>";
  var table_previous = "<?php echo lang('table_previous'); ?>";
  var table_next = "<?php echo lang('table_next'); ?>";
  var total_attemp = "<?php echo lang('your_total_attemp_is'); ?>";
  var yes_submit_now = "<?php echo lang('submit_test'); ?>";
  var quiz_already_running = "<?php echo lang('quiz_already_running'); ?>";
  var stop_running_quiz_msg = "<?php echo lang('plz_complete_or_stop_running_quiz'); ?>";
  var resume_quiz = "<?php echo lang('resume_quiz'); ?>";
  var already_attemped = "<?php echo lang('question_already_attempted'); ?>";
  var you_cant_resubmit_this_quiz_answer = "<?php echo lang('you_cant_resubmit_attempted_question'); ?>";
  var stop_quiz = "<?php echo lang('stop_quiz'); ?>";
  var no_answer_given_yet = "<?php echo lang('no_answer_given_yet'); ?>";
  <?php if(isset($stripe_key['publishable_key'])) { ?>
    var stripe_publishable_key = "<?php echo xss_clean($stripe_key['publishable_key']); ?>";
  <?php } ?>

  var is_answered_or_disable = false;
  var is_last_question_of_test = false;

  var flash_message = '<?php echo $flash_success_msg; ?>';
  var flash_error = '<?php echo $flash_error_msg; ?>';

  var error_report = '<?php echo xss_clean($this->error); ?>';
  var ad_left_time = '<?php echo xss_clean($ad_left_time); ?>';
  var ad_active_quiz = '<?php echo xss_clean($ad_active_quiz); ?>';
  var ad_active_quiz_result_page_url = '<?php echo xss_clean($ad_active_quiz_result_page_url); ?>';
  var test_page = '<?php echo xss_clean($test_page); ?>';
  var login_user_id = <?php echo xss_clean($login_user_id); ?>;
  login_user_id = parseInt(login_user_id); 

  var disable_right_click = '<?php echo xss_clean($disable_right_click); ?>';
  var disable_print_screen = '<?php echo xss_clean($disable_print_screen); ?>';
  var disable_cut_copy_paste = '<?php echo xss_clean($disable_cut_copy_paste); ?>';
  var session_time = '<?php echo xss_clean($session_time);?>';
  var set_default_theme_in_dark_mode = '<?php echo xss_clean($this->settings->set_default_theme_in_dark_mode);?>';
  <?php if(get_admin_setting('header_javascript')) { echo html_entity_decode(get_admin_setting('header_javascript')); } ?>
</script>


<style type="text/css">
 <?php if((get_admin_setting('custom_css'))) { echo html_entity_decode(get_admin_setting('custom_css'));} ?>
</style>

<?php
$list_google_advertisments = get_google_advertisments();
if($list_google_advertisments)
{
  ?>
  <script async="async" src="//www.google.com/adsense/search/ads.js"></script>
  <script type="text/javascript" charset="utf-8">
    (function(g,o){g[o]=g[o]||function(){(g[o]['q']=g[o]['q']||[]).push(
      arguments)},g[o]['t']=1*new Date})(window,'_googCsa');
    </script>
    <?php
  }
  ?>

</head>

<body class="h-100 <?php echo xss_clean($is_rtl); ?>">
  <!-- Back to top button -->
  <input type="hidden" id="BASE_URL_OF_SITE" value="<?php echo base_url(); ?>">
  <a id="back-to-top-button"><i class="fas fa-angle-double-up"></i></a>
  <div class="page">
    <div class="page-main">
      <?php  if(!empty(strip_tags(get_admin_setting('top_text_left'))) OR !empty(strip_tags(get_admin_setting('top_text_right')))) 
      { 
        ?>
        <!-- <div class="top-bar">
             <div class="container">
               <div class="navbar navbar-expand-lg">
                 <div class="col-6">
                   <span class="text-white"><?php echo strip_tags(get_admin_setting('top_text_left'));?></span>
                 </div>
                 <div class="col-6">
                   <span class="text-white float-right"><?php echo strip_tags(get_admin_setting('top_text_right'));?></span>
                 </div>
               </div>
             </div> 

           </div> -->

           <div class="header-top">
            <div class="container">
              <div class="row">
                <div class="col-lg-5  d-none d-lg-block d-md-block">

                  <!--<span>Have any question? <a href="tel:18008901707" style="color: #ed1c24;font-weight: bold;">1800-890-1707</a></span>-->
                </div>
                <div class="col-lg-2  col-12">
                  <div id="google_translate_element"></div>
                </div>
                <div class="col-lg-2  col-12">

                  <div class="select-country">
                    <form class="Country">
                      <select class="form-control">
                        <option value="select">Select Country</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antartica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo">Congo, the Democratic Republic of the</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                        <option value="Croatia">Croatia (Hrvatska)</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="France Metropolitan">France, Metropolitan</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                        <option value="Holy See">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran (Islamic Republic of)</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                        <option value="Korea">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia, Federated States of</option>
                        <option value="Moldova">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                        <option value="Saint LUCIA">Saint LUCIA</option>
                        <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia (Slovak Republic)</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                        <option value="Span">Spain</option>
                        <option value="SriLanka">Sri Lanka</option>
                        <option value="St. Helena">St. Helena</option>
                        <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syrian Arab Republic</option>
                        <option value="Taiwan">Taiwan, Province of China</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Viet Nam</option>
                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                        <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                        <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                      </select>
                    </form>

                    <div class="mark-class">
                    <div class="time-counter">
                      <i class="fa fa-clock-o" aria-hidden="true"></i>
                      <p id="demo"></p>
                    </div>
                    <!-- <div>MM - <span>230</span></div>. -->
                  </div>
                  </div>
                </div>
                <div class="col-lg-3  col-12">
                  <div class="header-top-right">
                    <div class="content">
                    <!--   <a href="<?php echo base_url()?>student-login"><i class="zmdi zmdi-account"></i>Login
                    </a> -->
                      <?php

                          if ($user_id) 
                          { ?>

                                <li class="nav-item">
                                  
                                  <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" title="<?php echo xss_clean($full_name_of_user); ?>"><span class="avatar" >
                                    <?php $loginImage = ($this->session->logged_in['image'] ? base_url('assets/images/user_image/'.$this->session->logged_in['image']) : base_url('assets/images/user_image/avatar-1.png'))?>
                                      <img  alt="" src="<?php echo xss_clean($loginImage);?>" class="rounded-circle mr-1 w-100 h-100">
                                  </span>

                                    <span class="ml-2 d-none d-lg-block">
                                      <span class="text-defaultt"> <?php echo xss_clean($name_of_user); ?></span>
                                    </span>

                                  </a>

                                  <div class="dropdown-menu">
                                    <?php $rtl_icon = $this->session->is_rtl ? 'rtl-icon' : ""; ?>
                                    <a class="dropdown-item" href="<?php echo base_url($profile_url);?>">
                                      <i class="dropdown-icon fe fe-user <?php echo $rtl_icon;?>"></i><?php echo lang('user_profile') ?> 
                                    </a>
                                    
										<a class="dropdown-item" href="<?php echo base_url("my/history");?>">
                                          <i class="dropdown-icon fas fa-fire <?php echo $rtl_icon;?>"></i>Exam History
                                        </a>
                                                              
                                    <?php if ($is_admin == 'Administrator') 
                                    { 
                                      if(is_loged_in_user_is_subadmin() == FALSE)
                                      { ?>
                                        <a class="dropdown-item" href="<?php echo base_url("admin/settings");?>">
                                          <i class="dropdown-icon fe fe-settings <?php echo $rtl_icon;?>"></i><?php echo lang('admin_admin_settings') ?>
                                        </a>
                                        <?php
                                      }
                                      else
                                      {
                                        ?>
                                        <a class="dropdown-item" href="<?php echo base_url("admin/dashboard");?>">
                                          <i class="dropdown-icon fas fa-fire <?php echo $rtl_icon;?>"></i><?php echo lang('dashboard') ?>
                                        </a>
                                        <?php
                                      }
                                    } ?>

                                                              
                                    <?php 
                                    if ($is_tutor == TRUE) 
                                    { ?>
                                      <a class="dropdown-item" href="<?php echo base_url("tutor");?>">
                                        <i class="dropdown-icon fas fa-fire <?php echo $rtl_icon;?>"></i><?php echo lang('dashboard') ?>
                                      </a>
                                      <?php
                                    } ?>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="<?php echo base_url("logout");?>">
                                      <i class="dropdown-icon fe fe-log-out <?php echo $rtl_icon;?>"></i><?php echo lang('sign_out') ?>
                                    </a>

                                  </div>

                                </li>

                                <?php
                          }
                          else
                          {
                            ?>
                            <li class="nav-item">
                              <a href="<?php echo base_url('login'); ?>" class="nav-link">
                                <i class="fas fa-sign-in-alt mr-3"></i><?php echo lang('login') ?>
                              </a>
                            </li>
                            <?php
                          } ?>

                    </div>
                    <!--  <div class="content"><a href="<?php echo base_url()?>register"><i class="zmdi zmdi-account"></i>  Register</a> </div> -->
                    <div class="content"><a href="#"><i class="zmdi zmdi-account"></i>  View Status</a> </div>
                    <!-- <div class="content"><a href="<?php echo base_url()?>assets/web/#"><i class="zmdi zmdi-shopping-basket"></i> Chechout</a></div> -->
                  </div>

                  
                </div>
              </div>
            </div>
          </div>
          <?php 
        } ?>
        <div class="sticky-header-top" data-sticy="<?php echo get_admin_setting('is_sticky_header'); ?>"></div>
        <div class="container-fluid sticky_top bg-white">
          <div class="container-fluid">
            <div class="row header">
              <div class="col-md-2 col-sm-6 col-xs-6">
                <a class="header-brand" href="<?php echo base_url()?>">
                  <img class="header-brand-img" src="<?php echo base_url('/assets/images/logo/'); ?><?php echo get_admin_setting('site_logo'); ?>" style="height: <?php echo $hader_logo_height; ?>px;">
                </a>
              <!-- <div class="row">
                <div class="col-md-6 col-xl-6  col-6">
                    <a class="header-brand" href="<?php echo base_url()?>">
                      <img class="header-brand-img" src="<?php echo base_url('/assets/images/logo/'); ?><?php echo get_admin_setting('site_logo'); ?>" style="height: <?php echo $hader_logo_height; ?>px;">
                    </a>
                </div>
                <div class="col-md-6 col-xl-6  col-6">
                    <div id="dl-menu" class="dl-menuwrapper mt-2">
                      <button class="dl-trigger"><?php echo lang('categories') ?></button>
                        <?php get_categories_tree() ?>
                    </div>           
                </div>
              </div> -->

            </div>
            <div class="col-md-10 col-sm-6 col-xs-6 m-auto before_togle_menu_width">
                  
               <div class="text-right  my-auto mobile_nav_bar_button">
                     <button class="navbar-toggler" id="menu_togle_btn" type="button" data-toggle="collapse" data-target="#headerMenuCollapse" aria-controls="headerMenuCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fas fa-bars"></i>
                    </button>
                  </div> 

                  <div class="mainmenu-area ">
                    <div class="mainmenu d-none d-lg-block">
                      <nav>
                        <ul id="nav">
                          <li class="current"><a href="<?php echo base_url()?>">Home</a></li>
                          <li><a href="<?php echo base_url()?>about"> About</a></li>

                          <li><a href="<?php echo base_url()?>admission">Admission</a></li>
                          <li><a href="<?php echo base_url()?>scholarship">Scholarship</a>

                          </li>
                          <li class="dropdown"><a href="#">Courses</a>
                            <div class="dropdown-content">
                              <div class="row">
                                <div class="col-md-3">
                                  <div class="drop-content-list">
                                    <ul class="first-list">
                                      <li class="main-list"><a class="coure-tag" href="<?php echo base_url()?>course">NEET</a></li>
                                      <li class="main-list"><a class="coure-tags" href="#">JEE</a></li>
                                      <ul class="sub-list">
                                        <li><a class="coure-tag" href="#">JEE Main</a></li>
                                        <li><a class="coure-tag" href="#">JEE Advance</a></li>
                                      </ul>
                                      <li class="main-list"><a class="coure-tags" href="#">SSC</a></li>
                                      <ul class="sub-list">
                                        <li><a class="coure-tag" href="#">CGL</a></li>
                                        <li><a class="coure-tag" href="#">CPO</a></li>
                                        <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">chsl</font></font></a></li>
                                        <li><a class="coure-tag" href="#">MTS</a></li>
                                        <li><a class="coure-tag" href="#">GD</a></li>
                                      </ul>

                                    </ul>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                 <div class="drop-content-list">
                                   <ul class="first-list">
                                    <li class="main-list"><a class="coure-tags" href="#">Defence</a></li>
                                    <ul class="sub-list">
                                      <li><a class="coure-tag" href="#">Airforce</a></li>
                                      <li><a class="coure-tag" href="#">Army</a></li>
                                      <li><a class="coure-tag" href="#">Navy</a></li>
                                      <li><a class="coure-tag" href="#">Police</a></li>
                                      <li><a class="coure-tag" href="#">AFCAT</a></li>
                                      <li><a class="coure-tag" href="#">NDA</a></li>
                                      <li><a class="coure-tag" href="#">CDS</a></li>
                                    </ul>
                                    <li class="main-list"><a class="coure-tag" href="#">State Exam</a></li>

                                  </ul>

                                </div>
                              </div>
                              <div class="col-md-3">
                               <div class="drop-content-list">
                                <ul class="first-list">
                                  <li class="main-list"><a class="coure-tags" href="#">Foundation</a></li>
                                  <ul class="sub-list">
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NEET</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">JEE</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Airforce</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Army</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Navy</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NDA</font></font></a></li>
                                  </ul>

                                  <li class="main-list"><a class="coure-tags" href="#">Entrance Exam</a></li>
                                  <ul class="sub-list">
                                    <li><a class="coure-tag" href="#">University</a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Navodaya Vidyalaya</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sainik School</font></font></a></li>
                                  </ul>
                                  <li class="main-list"><a class="coure-tags" href="#">Nursing</a></li>

                                </ul>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="drop-content-list">
                                <ul class="first-list">
                                 <li class="main-list"><a class="coure-tag blink" href="#">Bruzoo Scholarship Exam<i class="fa fa-star blinks"></i></a></li>
                                 <li class="main-list"><a class="coure-tags" href="#">NET/JRF</a></li>
                                 <ul class="sub-list">
                                  <li><a class="coure-tag" href="#">UGC</a></li>
                                  <li><a class="coure-tag" href="#">CSIR</a></li>
                                </ul>

                                <li class="main-list"><a class="coure-tags" href="#">Civil Services</a></li>
                                <ul class="sub-list">
                                  <li><a class="coure-tag" href="#">UPSC</a></li>
                                  <li><a class="coure-tag" href="#">State PCS</a></li>
                                </ul>
                                <li class="main-list"><a class="coure-tag" href="#">Bank</a></li>
                                <ul class="sub-list">
                                  <li><a class="coure-tag" href="#">RBI</a></li>
                                  <li><a class="coure-tag" href="#">SBI</a></li>
                                  <li><a class="coure-tag" href="#">IBPS</a></li>
                                </ul>


                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- <li><a href="<?php echo base_url()?>class">Class</a></li> -->
                    <li class="dropdowns"><a href="<?php echo base_url()?>class">Classes</a>
                      <div class="dropdown-contents">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="drop-content-list">
                              <ul class="first-list">
                                <li class="main-list"><a class="coure-tag" href="<?php echo base_url()?>class">LKG, UKG, Nursery</a></li>
                                <li class="main-list"><a class="coure-tag" href="<?php echo base_url()?>class">Primary School</a></li>
                                <li class="main-list"><a class="coure-tag" href="<?php echo base_url()?>class">Middle School</a></li>
                                <li class="main-list"><a class="coure-tag" href="<?php echo base_url()?>class">Secondary Education School</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="drop-content-list">
                              <ul class="first-list">
                                <li class="main-list"><a class="coure-tags" href="<?php echo base_url()?>class">Senior Secondary School</a></li>
                                <ul class="sub-list">
                                  <li><a class="coure-tag" href="#">Arts</a></li>
                                  <li><a class="coure-tag" href="#">Commerce</a></li>
                                  <li><a class="coure-tag" href="#">Medical</a></li>
                                  <li><a class="coure-tag" href="#">Non Medical</a></li>
                                </ul>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li><a href="<?php echo base_url()?>test-series">Test Series</a></li>
                    <li><a href="<?php echo base_url()?>blog">Blog</a></li>
                    <li><a class="" href="<?php echo base_url()?>career">Teacher</a></li>
                    <li><a href="<?php echo base_url()?>bruzoo-tv">Bruzoo TV</a></li>
                    <li><a href="<?php echo base_url()?>contact">Contact</a>
                    </li><li><a href="<?php echo base_url()?>cart"><i class="fa fa-shopping-cart"></i></a>
                      <div class="cart-counter">0</div>


                    </li>

                  </ul>



                </nav>
              </div>



        </div> 

      </div>

            <!-- <div class="col-md-3 col-sm-12 col-xs-12 theme_or_profile_section ">

              <div class="row  ">
                
                <div class="col-md-8 col-sm-8 col-xs-8 my-auto  text-center header_profile_menu_option">
                  <div class="navbar navbar-expand-lg py-1 my-auto">
                    <ul class="navbar-nav nav nav-tabs navbar-right my-auto  border-0">
                          <?php

                          if ($user_id) 
                          { ?>

                                <li class="nav-item">
                                  
                                  <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" title="<?php echo xss_clean($full_name_of_user); ?>"><span class="avatar" >
                                    <?php $loginImage = ($this->session->logged_in['image'] ? base_url('assets/images/user_image/'.$this->session->logged_in['image']) : base_url('assets/images/user_image/avatar-1.png'))?>
                                      <img  alt="" src="<?php echo xss_clean($loginImage);?>" class="rounded-circle mr-1 w-100 h-100">
                                  </span>

                                    <span class="ml-2 d-none d-lg-block">
                                      <span class="text-defaultt"> <?php echo xss_clean($name_of_user); ?></span>
                                    </span>

                                  </a>

                                  <div class="dropdown-menu dropdown-menu-arrow">
                                    <?php $rtl_icon = $this->session->is_rtl ? 'rtl-icon' : ""; ?>
                                    <a class="dropdown-item" href="<?php echo base_url($profile_url);?>">
                                      <i class="dropdown-icon fe fe-user <?php echo $rtl_icon;?>"></i><?php echo lang('user_profile') ?> 
                                    </a>
                                    

                                                              
                                    <?php if ($is_admin == 'Administrator') 
                                    { 
                                      if(is_loged_in_user_is_subadmin() == FALSE)
                                      { ?>
                                        <a class="dropdown-item" href="<?php echo base_url("admin/settings");?>">
                                          <i class="dropdown-icon fe fe-settings <?php echo $rtl_icon;?>"></i><?php echo lang('admin_admin_settings') ?>
                                        </a>
                                        <?php
                                      }
                                      else
                                      {
                                        ?>
                                        <a class="dropdown-item" href="<?php echo base_url("admin/dashboard");?>">
                                          <i class="dropdown-icon fas fa-fire <?php echo $rtl_icon;?>"></i><?php echo lang('dashboard') ?>
                                        </a>
                                        <?php
                                      }
                                    } ?>

                                                              
                                    <?php 
                                    if ($is_tutor == TRUE) 
                                    { ?>
                                      <a class="dropdown-item" href="<?php echo base_url("tutor");?>">
                                        <i class="dropdown-icon fas fa-fire <?php echo $rtl_icon;?>"></i><?php echo lang('dashboard') ?>
                                      </a>
                                      <?php
                                    } ?>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="<?php echo base_url("logout");?>">
                                      <i class="dropdown-icon fe fe-log-out <?php echo $rtl_icon;?>"></i><?php echo lang('sign_out') ?>
                                    </a>

                                  </div>

                                </li>

                                <?php
                          }
                          else
                          {
                            ?>
                            <li class="nav-item">
                              <a href="<?php echo base_url('login'); ?>" class="nav-link">
                                <i class="fas fa-sign-in-alt mr-3"></i><?php echo lang('login') ?>
                              </a>
                            </li>
                            <?php
                          } ?>

                    </ul>
                  </div>
                </div>


                <div class="col-md-4 col-sm-4 col-xs-4 text-center  my-auto">
                    <label id="switch" class="switch mt-2">
                        <input type="checkbox" class="toggleTheme" id="slider">
                        <span class="slider round"></span>
                      </label>
                </div>
              </div>

            </div> -->
          </div>
        </div>
      </div>



      <div class="header py-0 navigation-wrap start-header start-style" id="navbar">
        <div class=" my-auto">
          <div class="navbar navbar-expand-lg py-0 m-auto">
            <div class="collapse navbar-collapse text-center m-auto" id="headerMenuCollapse">


              <ul class="navbar-nav nav nav-tabs navbar-right  border-0  m-auto">


                <?php 
                $front_menu_order = get_front_menu_order();
                if($front_menu_order)
                {
                  foreach ($front_menu_order as $menu_order_array) 
                  { 


                    if($menu_order_array->slug == 'pages_menu')
                    { 

                      $menu_category_array =  get_header_menu_item_helper(); 
                      if($menu_category_array)
                      {
                        foreach ($menu_category_array as $menu_array) 
                        {
                          ?>

                          <li class="nav-item">
                            <a href="<?php echo base_url('pages/').$menu_array->slug; ?>" class='nav-link <?php echo (uri_string() == "pages/$menu_array->slug") ? "active" : ""; ?>'>
                              <?php echo ucfirst($menu_array->title); ?></a>
                            </li>
                            <?php
                          }
                        }

                      }





                      if($menu_order_array->slug == 'my_history')
                        { ?>

                          <li class="nav-item ">

                            <a class="nav-link <?php echo (uri_string() == 'my/history') ? 'active' : ''; ?>" href="<?php echo base_url('my/history')?>"><?php echo lang($menu_order_array->title); ?></a>
                          </li>   
                          <?php
                        }


                        if($menu_order_array->slug == 'common_leader_board')
                          { ?>

                            <li class="nav-item ">

                              <a class="nav-link <?php echo (uri_string() == 'site/common-leader-board') ? 'active' : ''; ?>" href="<?php echo base_url('site/common-leader-board')?>"> <?php echo lang($menu_order_array->title); ?></a>
                            </li>   
                            <?php
                          }



                          if($menu_order_array->slug == 'home')
                          { 
                            $active_menu = (base_url() == current_url()) ? 'active' : '';
                            ?>

                            <li class="nav-item <?php echo $active_menu; ?>">

                              <a class="nav-link <?php echo $active_menu; ?>" href="<?php echo base_url();?>"> <?php echo lang($menu_order_array->title); ?></a>
                            </li>   
                            <?php
                          }


                          if($menu_order_array->slug == 'membership')
                            { ?>

                              <li class="nav-item ">

                                <a class="nav-link <?php echo (uri_string() == 'membership') ? 'active' : ''; ?>" href="<?php echo base_url('membership')?>"> <?php echo lang($menu_order_array->title); ?></a>
                              </li>   
                              <?php
                            }




                            if($menu_order_array->slug == 'all_quiz_categories')
                              { ?>

                                <li class="nav-item ">

                                  <a class="nav-link <?php echo (uri_string() == 'all-quiz-categories') ? 'active' : ''; ?>" href="<?php echo base_url('all-quiz-categories')?>"> <?php echo lang($menu_order_array->title); ?></a>
                                </li>   
                                <?php
                              }




                              if($menu_order_array->slug == 'contact')
                                { ?>

                                  <li class="nav-item ">

                                    <a class="nav-link <?php echo (uri_string() == 'contact') ? 'active' : ''; ?>" href="<?php echo base_url('contact')?>"> <?php echo lang($menu_order_array->title); ?></a>
                                  </li>   
                                  <?php
                                }


                                if($menu_order_array->slug == 'profile')
                                  { ?>

                                    <li class="nav-item ">

                                      <a class="nav-link <?php echo (uri_string() == 'profile') ? 'active' : ''; ?>" href="<?php echo base_url('profile')?>"> <?php echo lang($menu_order_array->title); ?></a>
                                    </li>   
                                    <?php
                                  }

                                  if($menu_order_array->slug == 'blogs')
                                    { ?>

                                      <li class="nav-item ">

                                        <a class="nav-link <?php echo (uri_string() == 'blogs') ? 'active' : ''; ?>" href="<?php echo base_url('blogs')?>"> <?php echo lang($menu_order_array->title); ?></a>
                                      </li>   
                                      <?php
                                    }

                                    if($menu_order_array->slug == 'language')
                                      { ?>

                                        <li class="nav-item">
                                          <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"> <i class=" mr-2 fa fa-language"></i><?php echo lang($menu_order_array->title); ?></a>
                                          <div class="dropdown-menu dropdown-menu-arrow" id="session-language-dropdown">
                                            <?php 
                                            foreach ($this->languages as $key=>$name) : ?>
                                              <a href="<?php echo base_url('change-language'); ?>" rel="<?php echo xss_clean($key); ?>" class="dropdown-item ">
                                                <?php if ($key == $this->session->language) : ?>
                                                  <i class="fa fa-check selected-session-language"></i>
                                                <?php endif; ?>
                                                <?php echo xss_clean($name); ?>
                                              </a>
                                            <?php endforeach; ?>
                                          </div>
                                        </li>

                                        <?php
                                      }

                                    }
                                  }
                                  ?>


                                  <li class="nav-item display_on_mobile_only">
                                    <ul id="nav">
                          <li class="current"><a href="<?php echo base_url()?>">Home</a></li>
                          <li><a href="<?php echo base_url()?>about">About</a></li>
                          <li><a href="<?php echo base_url()?>admission">Admission</a></li>
                          <li><a href="<?php echo base_url()?>scholarship">Scholarship</a>

                          </li>
                          <li class="dropdownss"  type="button" data-toggle="collapse" data-target="#collapsdrop"><a href="#">Courses</a>
                            <div class="dropdown-content collapse" id="collapsdrop">
                              <div class="row">
                                <div class="col-md-3">
                                  <div class="drop-content-list">
                                    <ul class="first-list">
                                      <li class="main-list"><a class="coure-tag" href="<?php echo base_url()?>course">NEET</a></li>
                                      <li class="main-list"><a class="coure-tags" href="#">JEE</a></li>
                                      <ul class="sub-list">
                                        <li><a class="coure-tag" href="#">JEE Main</a></li>
                                        <li><a class="coure-tag" href="#">JEE Advance</a></li>
                                      </ul>
                                      <li class="main-list"><a class="coure-tags" href="#">SSC</a></li>
                                      <ul class="sub-list">
                                        <li><a class="coure-tag" href="#">CGL</a></li>
                                        <li><a class="coure-tag" href="#">CPO</a></li>
                                        <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">chsl</font></font></a></li>
                                        <li><a class="coure-tag" href="#">MTS</a></li>
                                        <li><a class="coure-tag" href="#">GD</a></li>
                                      </ul>

                                    </ul>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                 <div class="drop-content-list">
                                   <ul class="first-list">
                                    <li class="main-list"><a class="coure-tags" href="#">Defence</a></li>
                                    <ul class="sub-list">
                                      <li><a class="coure-tag" href="#">Airforce</a></li>
                                      <li><a class="coure-tag" href="#">Army</a></li>
                                      <li><a class="coure-tag" href="#">Navy</a></li>
                                      <li><a class="coure-tag" href="#">Police</a></li>
                                      <li><a class="coure-tag" href="#">AFCAT</a></li>
                                      <li><a class="coure-tag" href="#">NDA</a></li>
                                      <li><a class="coure-tag" href="#">CDS</a></li>
                                    </ul>
                                    <li class="main-list"><a class="coure-tag" href="#">State Exam</a></li>

                                  </ul>

                                </div>
                              </div>
                              <div class="col-md-3">
                               <div class="drop-content-list">
                                <ul class="first-list">
                                  <li class="main-list"><a class="coure-tags" href="#">Foundation</a></li>
                                  <ul class="sub-list">
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NEET</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">JEE</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Airforce</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Army</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Navy</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NDA</font></font></a></li>
                                  </ul>

                                  <li class="main-list"><a class="coure-tags" href="#">Entrance Exam</a></li>
                                  <ul class="sub-list">
                                    <li><a class="coure-tag" href="#">University</a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Navodaya Vidyalaya</font></font></a></li>
                                    <li><a class="coure-tag" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sainik School</font></font></a></li>
                                  </ul>
                                  <li class="main-list"><a class="coure-tags" href="#">Nursing</a></li>

                                </ul>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="drop-content-list">
                                <ul class="first-list">
                                 <li class="main-list"><a class="coure-tag blink" href="#">Bruzoo Scholarship Exam<i class="fa fa-star blinks"></i></a></li>
                                 <li class="main-list"><a class="coure-tags" href="#">NET/JRF</a></li>
                                 <ul class="sub-list">
                                  <li><a class="coure-tag" href="#">UGC</a></li>
                                  <li><a class="coure-tag" href="#">CSIR</a></li>
                                </ul>

                                <li class="main-list"><a class="coure-tags" href="#">Civil Services</a></li>
                                <ul class="sub-list">
                                  <li><a class="coure-tag" href="#">UPSC</a></li>
                                  <li><a class="coure-tag" href="#">State PCS</a></li>
                                </ul>
                                <li class="main-list"><a class="coure-tag" href="#">Bank</a></li>
                                <ul class="sub-list">
                                  <li><a class="coure-tag" href="#">RBI</a></li>
                                  <li><a class="coure-tag" href="#">SBI</a></li>
                                  <li><a class="coure-tag" href="#">IBPS</a></li>
                                </ul>


                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- <li><a href="<?php echo base_url()?>class">Class</a></li> -->
                    <li class="dropdownsss"  type="button" data-toggle="collapse" data-target="#collapsdrops"><a href="#">Class</a>
                            <div class="dropdown-contents collapse" id="collapsdrops">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="drop-content-list">
                              <ul class="first-list">
                                <li class="main-list"><a class="coure-tag" href="<?php echo base_url()?>class">LKG, UKG, Nursery</a></li>
                                <li class="main-list"><a class="coure-tag" href="<?php echo base_url()?>class">Primary School</a></li>
                                <li class="main-list"><a class="coure-tag" href="<?php echo base_url()?>class">Middle School</a></li>
                                <li class="main-list"><a class="coure-tag" href="<?php echo base_url()?>class">Secondary Education School</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="drop-content-list">
                              <ul class="first-list">
                                <li class="main-list"><a class="coure-tags" href="<?php echo base_url()?>class">Senior Secondary School</a></li>
                                <ul class="sub-list">
                                  <li><a class="coure-tag" href="#">Arts</a></li>
                                  <li><a class="coure-tag" href="#">Commerce</a></li>
                                  <li><a class="coure-tag" href="#">Medical</a></li>
                                  <li><a class="coure-tag" href="#">Non Medical</a></li>
                                </ul>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li><a href="<?php echo base_url()?>test-series">Test Series</a></li>
                    <li><a href="<?php echo base_url()?>blog">Blog</a></li>
                    <li><a class="" href="<?php echo base_url()?>career">Teacher</a></li>
                    <li><a href="<?php echo base_url()?>bruzoo-tv">Bruzoo TV</a></li>
                    <li><a href="<?php echo base_url()?>contact">Contact</a>


                    </li>

                  </ul>

    
                                  </li>


                                  <?php
                                  if ($user_id) 
                                    { ?>
                                      <li class="nav-item display_on_mobile_only">

                                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" title="<?php echo xss_clean($full_name_of_user); ?>"><span class="avatar" >
                                         <?php $loginImage = ($this->session->logged_in['image'] ? base_url('assets/images/user_image/'.$this->session->logged_in['image']) : base_url('assets/images/user_image/avatar-1.png'))?>
                                         <img  alt="" src="<?php echo xss_clean($loginImage);?>" class="rounded-circle mr-1 w-100 h-100">
                                       </span>

                                       <span class="ml-2 d-lg-block">
                                        <span class="text-defaultt"> <?php echo xss_clean($name_of_user); ?></span>
                                      </span>

                                    </a>

                                    <div class="dropdown-menu">
                                      <?php $rtl_icon = $this->session->is_rtl ? 'rtl-icon' : ""; ?>
                                      <a class="dropdown-item" href="<?php echo base_url($profile_url);?>">
                                        <i class="dropdown-icon fe fe-user <?php echo $rtl_icon;?>"></i><?php echo lang('user_profile') ?> 
                                      </a>



                                      <?php if ($is_admin == 'Administrator') 
                                      { 
                                        if(is_loged_in_user_is_subadmin() == FALSE)
                                          { ?>
                                            <a class="dropdown-item" href="<?php echo base_url("admin/settings");?>">
                                              <i class="dropdown-icon fe fe-settings <?php echo $rtl_icon;?>"></i><?php echo lang('admin_admin_settings') ?>
                                            </a>
                                            <?php
                                          }
                                          else
                                          {
                                            ?>
                                            <a class="dropdown-item" href="<?php echo base_url("admin/dashboard");?>">
                                              <i class="dropdown-icon fas fa-fire <?php echo $rtl_icon;?>"></i><?php echo lang('dashboard') ?>
                                            </a>
                                            <?php
                                          }
                                        } ?>


                                        <?php 
                                        if ($is_tutor == TRUE) 
                                          { ?>
                                            <a class="dropdown-item" href="<?php echo base_url("tutor");?>">
                                              <i class="dropdown-icon fas fa-fire <?php echo $rtl_icon;?>"></i><?php echo lang('dashboard') ?>
                                            </a>
                                            <?php
                                          } ?>

                                          <div class="dropdown-divider"></div>

                                          <a class="dropdown-item" href="<?php echo base_url("logout");?>">
                                            <i class="dropdown-icon fe fe-log-out <?php echo $rtl_icon;?>"></i><?php echo lang('sign_out') ?>
                                          </a>

                                        </div>

                                      </li>

                                      <?php
                                    }
                                    else
                                    {
                                      ?>
                                      <li class="nav-item display_on_mobile_only">
                                        <a href="<?php echo base_url('login'); ?>" class="nav-link">
                                          <i class="fas fa-sign-in-alt mr-3"></i><?php echo lang('login') ?>
                                        </a>
                                      </li>
                                      <?php
                                    } ?>



                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>   







                  <div class="header_margin_padding">
                    <?php 
                    $advertisments_on_position = get_advertisment_by_position('common_under_menu');
                    if($advertisments_on_position)
                    {
                      foreach ($advertisments_on_position as $key => $advertisment_on_position) 
                      {
                        $ads_img_url = $path = base_url("assets/images/advertisment/$advertisment_on_position->image");
                        ?>
                        <div class="w-100 my-3 header_add_section">
                          <div class="container">
                            <div class="row">
                              <div class="col-12 text-center">
                                <?php
                                if($advertisment_on_position->is_goole_adsense == 0)
                                  { ?>
                                    <a class="w-100 h-100 d-flex" target="_blank" href="<?php echo $advertisment_on_position->url; ?>">
                                      <img class="w-100 advertisment_image_on_front" height="150px" src="<?php echo $ads_img_url; ?>">
                                    </a>
                                    <?php
                                  }
                                  else
                                  {
                                    echo "<div class='w-100 px-2 bg-white'>". htmlspecialchars_decode($advertisment_on_position->google_ad_code)."</div>";
                                  }
                                  ?>

                                </div>
                              </div>
                            </div>
                            </div> <?php 
                          } 
                        }
                        ?>

                        <?php echo ($content) ?>
                      </div>




                      <?php 
                      $advertisments_on_position = get_advertisment_by_position('common_before_footer');
                      if($advertisments_on_position)
                      {
                        foreach ($advertisments_on_position as $advertisment_on_position) 
                        {
                          $ads_img_url = $path = base_url("assets/images/advertisment/$advertisment_on_position->image");
                          ?>
                          <div class="w-100 my-3 footer_add_section">
                            <div class="container">
                              <div class="row">
                                <div class="col-12 text-center">
                                  <?php
                                  if($advertisment_on_position->is_goole_adsense == 0)
                                    { ?>
                                      <a class="w-100 h-100 d-flex" target="_blank" href="<?php echo $advertisment_on_position->url; ?>">
                                        <img class="w-100 advertisment_image_on_front" height="150px" src="<?php echo $ads_img_url; ?>">
                                      </a>
                                      <?php
                                    }
                                    else
                                    {
                                      echo "<div class='w-100 px-2 bg-white'>". htmlspecialchars_decode($advertisment_on_position->google_ad_code)."</div>";
                                    }
                                    ?>
                                  </div>
                                </div>
                              </div>
                              </div> <?php 
                            }
                          } ?>

<!--       <div class="footer mt-5">

        <div class="container">
          <div class="row">

            <?php 
            $footer_sec_1 =  get_footer_section_helper(1); 
            $footer_sec_2 =  get_footer_section_helper(2); 
            $footer_sec_3 =  get_footer_section_helper(3); 
            $footer_sec_4 =  get_footer_section_helper(4); 
            ?>

            <div class="col-lg-3 Footer_section_1">

              <div class="row">
                <?php
                if($footer_sec_1)
                {                          
                  foreach ($footer_sec_1 as  $first_section_array) 
                  {
                    if($first_section_array->type =='text')
                    {
                      ?>

                      <div class="col-12">
                        <h4 class="text_heading"><?php echo xss_clean($first_section_array->title); ?> </h4>
                        <p class="footer_text_1"><?php echo xss_clean($first_section_array->value); ?> </p>
                      </div>

                      <?php
                    }
                    elseif($first_section_array->type =='link')
                    {

                      ?>

                      <div class="col-12 colum_link_section_1">
                        <a class="link_section_1" href="<?php echo xss_clean($first_section_array->value); ?>"> <?php echo xss_clean($first_section_array->title); ?></a>                              
                      </div>

                      <?php
                    }

                    elseif($first_section_array->type =='editor')
                    {

                      ?>

                      <div class="col-12">
                        <h6><?php echo xss_clean($first_section_array->title); ?> </h6>
                        <?php echo xss_clean($first_section_array->value); ?>
                      </div>

                      <?php
                    }

                    elseif($first_section_array->type =='image')
                    {
                      ?>
                      <div class="col-12 column_1">
                        <h6><?php echo xss_clean($first_section_array->title); ?> </h6>
                        <div class="img_content"> 
                          <?php $img = $first_section_array->value ? $first_section_array->value : 'default.png'; ?>
                          <img src="<?php echo base_url('/assets/images/footer/section/').$img; ?>" class="field_img">
                        </div>
                      </div>
                      <?php
                    }
                  }
                }
                ?>
              </div>

            </div>





            <div class="col-lg-3 Footer_section_2">

              <div class="row">
                <?php
                if($footer_sec_2)
                {                          
                  foreach ($footer_sec_2 as  $second_section_array) 
                  {
                    if($second_section_array->type =='text')
                    {
                      ?>

                      <div class="col-12">
                        <h4 class="text_heading"><?php echo xss_clean($second_section_array->title); ?> </h4>
                        <?php echo xss_clean($second_section_array->value); ?>
                      </div>

                      <?php
                    }
                    elseif($second_section_array->type =='link')
                    {

                      ?>

                      <div class="col-12 colum_link_section_2">
                        <a class="link_section_2" href="<?php echo xss_clean($second_section_array->value); ?>"> <?php echo xss_clean($second_section_array->title); ?></a>                              
                      </div>

                      <?php
                    }

                    elseif($second_section_array->type =='editor')
                    {

                      ?>

                      <div class="col-12">
                        <h6><?php echo xss_clean($second_section_array->title); ?> </h6>
                        <?php echo xss_clean($second_section_array->value); ?>
                      </div>

                      <?php
                    }

                    elseif($second_section_array->type =='image')
                    {
                      ?>
                      <div class="col-12">
                        <h6><?php echo xss_clean($second_section_array->title); ?> </h6>
                        <div class="img_content"> 
                          <?php $img = $second_section_array->value ? $second_section_array->value : 'default.png'; ?>
                          <img src="<?php echo base_url('/assets/images/footer/section/').$img; ?>" class="field_img">
                        </div>
                      </div>
                      <?php
                    }
                  }
                }
                ?>
              
              </div>


            </div>


            <div class="col-lg-3 Footer_section_3">

              <div class="row">
                <?php
                if($footer_sec_3)
                {                          
                  foreach ($footer_sec_3 as  $third_section_array) 
                  {
                    if($third_section_array->type =='text')
                    {
                      ?>

                      <div class="col-12">
                        <h4 class="text_heading"><?php echo xss_clean($third_section_array->title); ?> </h4>
                        <?php echo xss_clean($third_section_array->value); ?>
                      </div>

                      <?php
                    }
                    elseif($third_section_array->type =='link')
                    {

                      ?>

                      <div class="col-12 colum_link_section_3">
                        <a class="link_section_3" href="<?php echo xss_clean($third_section_array->value); ?>"> <?php echo xss_clean($third_section_array->title); ?></a>                              
                      </div>

                      <?php
                    }

                    elseif($third_section_array->type =='editor')
                    {

                      ?>

                      <div class="col-12">
                        <h6><?php echo xss_clean($third_section_array->title); ?> </h6>
                        <?php echo xss_clean($third_section_array->value); ?>
                      </div>

                      <?php
                    }

                    elseif($third_section_array->type =='image')
                    {
                      ?>
                      <div class="col-12">
                        <h6><?php echo xss_clean($third_section_array->title); ?> </h6>
                        <div class="img_content"> 
                          <?php $img = $third_section_array->value ? $third_section_array->value : 'default.png'; ?>
                          <img src="<?php echo base_url('/assets/images/footer/section/').$img; ?>" class="field_img">
                        </div>
                      </div>
                      <?php
                    }
                  }
                }
                ?>
              </div>

            </div>


            <div class="col-lg-3 Footer_section_4">

              <div class="row">
                <?php
                if($footer_sec_4)
                {                          
                  foreach ($footer_sec_4 as  $fourth_section_array) 
                  {
                    if($fourth_section_array->type =='text')
                    {
                      ?>

                      <div class="col-12">
                        <h4 class="text_heading"><?php echo xss_clean($fourth_section_array->title); ?> </h4>
                        <?php echo xss_clean($fourth_section_array->value); ?>
                      </div>

                      <?php
                    }
                    elseif($fourth_section_array->type =='link')
                    {

                      ?>

                      <div class="col-12">
                        <a href="<?php echo xss_clean($fourth_section_array->value); ?>"> <?php echo xss_clean($fourth_section_array->title); ?></a>                              
                      </div>

                      <?php
                    }

                    elseif($fourth_section_array->type =='editor')
                    {

                      ?>

                      <div class="col-12">
                        <h6><?php echo xss_clean($fourth_section_array->title); ?> </h6>
                        <?php echo xss_clean($fourth_section_array->value); ?>
                      </div>

                      <?php
                    }

                    elseif($fourth_section_array->type =='image')
                    {
                      ?>
                      <div class="col-12">
                        <h6><?php echo xss_clean($fourth_section_array->title); ?> </h6>
                        <div class="img_content"> 
                          <?php $img = $fourth_section_array->value ? $fourth_section_array->value : 'default.png'; ?>
                          <img src="<?php echo base_url('/assets/images/footer/section/').$img; ?>" class="field_img">
                        </div>
                      </div>
                      <?php
                    }
                  }
                }
                ?>
              </div>

            </div>
          </div>

        </div>
      </div> -->
      <section class="footer-top">
        <!--     <div class="container "> -->
          <div class="row">
            <div class="col-md-9" style="background-image: url('<?php echo base_url()?>assets/images/footerbackg03-01.png'); background-position:center; background-repeat:no-repeat;background-size: cover;">
              <div class="footer-left-side">
                <div class="row">
                 <div class="col-md-3 col-12">
                  <div class="all-couses-list">
                    <div class="headline-top">COMPANY</div>
                    <ul>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">Careers <span class="hire">We are Hiring</span></a></li>
                      <li><a href="#">Bruzoo TV</a></li>
                      <li><a href="#">Social Initiative - Education for All</a></li>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Support</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Students Stories - The Learning Tree</a></li>

                    </ul>
                  </div>
                </div>

                <div class="col-md-2 col-12">
                  <div class="all-couses-list">
                    <div class="headline-top"> COURSES</div>
                    <ul>

                      <li><a href="#">NEET</a></li>
                      <li><a href="#">State Exam</a></li>
                      <li><a href="#">Nursing</a></li>
                      <li><a href="#">Bruzoo Scholarship Exam</a></li>

                    </ul>
                    <div class="headline-top">JEE</div>
                    <ul>
                      <li><a href="#">JEE Main</a>
                      </li><li><a href="#">JEE Advance</a>
                      </li></ul>
                      <div class="headline-top">Foundation</div>
                      <ul>
                        <li><a href="#">NEET</a></li>
                        <li><a href="#">JEE</a></li>
                        <li><a href="#">Airforce</a></li>
                        <li><a href="#">Army</a></li>
                        <li><a href="#">Navy</a></li>
                        <li><a href="#">NDA</a></li>
                      </ul>
                    </div>
                  </div>



                  <div class="col-md-2 col-12">
                    <div class="all-couses-list">
                      <div class="headline-top">SSC</div>
                      <ul>

                       <li><a href="#">CGL</a></li>
                       <li><a href="#">CPO</a></li>
                       <li><a href="#"> CHSL</a></li>
                       <li><a href="#">MTS</a></li>
                       <li><a href="#">GD</a></li>
                     </ul>
                     <div class="headline-top">Entrance Exam</div>
                     <ul>

                       <li><a href="#">University</a>
                       </li><li><a href="#">Navodaya Vidyalaya</a>
                       </li><li><a href="#">Sainik School</a>
                       </li></ul>
                       <div class="headline-top">NET/JRF</div>
                       <ul>

                         <li><a href="#">UGC</a></li>
                         <li><a href="#"> CSIR  </a></li>

                       </ul></div>
                     </div>


                     <div class="col-md-2 col-12">
                      <div class="all-couses-list">
                        <div class="headline-top">Defence</div>
                        <ul>
                          <li><a href="#">Airforce</a></li>
                          <li><a href="#"> Army</a></li>
                          <li><a href="#"> Navy</a></li>
                          <li><a href="#"> Police</a></li>
                          <li><a href="#">AFCAT</a></li>
                          <li><a href="#">NDA</a></li>
                          <li><a href="#"> CDS</a></li>
                        </ul>
                        <div class="headline-top">Civil Services</div>
                        <ul>
                          <li><a href="#"> UPSC
                          </a></li><li><a href="#"> State PCS</a></li>

                        </ul>
                        <div class="headline-top">Bank</div>
                        <ul>

                         <li><a href="#"> RBI</a></li>
                         <li><a href="#"> SBI</a></li>
                         <li><a href="#"> IBPS</a></li>
                       </ul>

                     </div>
                   </div>
                   <div class="col-md-2 col-12">
                    <div class="all-couses-list">
                     <div class="headline-top">CLASSES</div>
                     <ul>
                      <li><a href="#">LKG, UKG, Nursery</a>
                      </li><li><a href="#">Primary School</a>
                      </li><li><a href="#">Middle School</a>
                      </li><li><a href="#">Secondary Education School</a>
                      </li></ul>
                      <div class="headline-top">Senior Secondary School</div>
                      <ul>
                        <li><a href="#">Arts</a></li>
                        <li><a href="#">Commerce</a></li>
                        <li><a href="#">Medical</a></li>
                        <li><a href="#">Non Medical</a></li>

                      </ul>  

                    </div>
                  </div>


                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="teacher-img">
                <img src="<?php echo base_url()?>assets/images/teacher.png" style="width:100%;height: auto;">
              </div>
            </div>
          </div>
          <!-- </div> -->
        </section>


        <section class="footer-widget-area" style="background: url('<?php echo base_url()?>assets/images/footer-bg.jpg');">
          <div class="container-fluid">
            <div class="row">
             <div class="col-md-5">
              <div class="office">
                <h3>Quick Links</h3>

                <div class="office mt-4">
                  <ul class="quick-link">
                       <!--  <li class="current"><a href="<?php echo base_url()?>">Home</a></li>
                        <li><a href="<?php echo base_url()?>about-us">About</a></li>
                         <li><a href="<?php echo base_url()?>admissions">Admission</a></li>
                         <li><a href="#">Class</a> -->
                          <li><a href="<?php echo base_url()?>donation">Donation &amp; Scholarship</a>
                                                  <!-- <li class="demo"><a href="<?php echo base_url()?>career">Teacher</a></li>
                                                    <li><a href="#">Event</a></li> -->
                                                  </li><li><a href="<?php echo base_url()?>vision-mission">Vision &amp; Mission</a></li>
                                                  <!-- <li><a href="<?php echo base_url()?>contact">Contact</a> -->
                                                    <li><a href="<?php echo base_url()?>advantages">Bruzoo Advantage</a></li>
                                                    <li><a href="<?php echo base_url()?>faq">FAQ</a></li>
                                                    <li><a href="<?php echo base_url()?>disclaimer">disclaimer</a></li>
                                                    <li><a href="<?php echo base_url()?>privacy_policy">Privacy Policy</a>
                                                    </li><li><a href="<?php echo base_url()?>refund_policy"> return &amp; refund policy</a></li>
                                                    <li><a href="<?php echo base_url()?>shipping">Shipping &amp; Delivery </a></li>
                                                    <li><a href="<?php echo base_url()?>terms-and-conditions">Terms &amp; Conditions</a></li>
                                                  </ul>
                                                </div>
                                                <!-- <h3 class="mt-3"><a href="">Privacy Policy</a></h3> -->
                                                <div class="social-media-header">
                                                 <div class="social-icons">
                                                  <a href="https://www.facebook.com/bruzoo.in/photos/a.132132186019599/132132172686267/"><i class="zmdi zmdi-facebook"></i></a>
                                                  <a href="https://twitter.com/Bruzoo2/status/1506493246825852930/photo/1"><i class="zmdi zmdi-twitter"></i></a>
                                                  <a href="https://www.linkedin.com/posts/bru-zoo-96454a229_bruzoo-joinclass-class-activity-6912259137376587777-U1iZ?utm_source=linkedin_share&amp;utm_medium=member_desktop_web"><i class="zmdi zmdi-linkedin"></i></a>

                                                  <a href="https://www.instagram.com/p/Cbbvny0JJ35/"><i class="zmdi zmdi-instagram"></i></a>
                                                </div>
                                              </div>




                                            </div>
                                          </div>

                                          <div class="col-md-3">
                                            <div class="office">
                                              <h3>Head office</h3>
                                              <p>BRUZOO EDUCATIONAL (OPC) PRIVATE LIMITED
                                                HISAR, HISSAR-125001
                                              HARYANA</p>

                                              <div class="office mt-4">
                                                <h6>Other Office Locations</h6>
                                                <div class="location">
                                                  <button class="location_btn"><a href="#" class="text-white">United State</a></button>
                                                  <button class="location_btn"><a href="#" class="text-white">UK</a></button>
                                                  <button class="location_btn"><a href="#" class="text-white">China</a></button>
                                                  <button class="location_btn"><a href="#" class="text-white">Japan</a></button>
                                                  <button class="location_btn"><a href="#" class="text-white">Nepal</a></button>
                                                  <button class="location_btn"><a href="#" class="text-white">Bhutan</a></button>
                                                  <button class="location_btn"><a href="#" class="text-white"> South afreica</a></button>


                                                </div>
                                              </div>




                                            </div>
                                          </div>

                                          <div class="col-md-4">
                                           <div class="get-in-touch office">
                                            <h3>Contact Us</h3>
                                            <ul class="info-contact">
                                              <li class="info-mail">
                                                <p>
                                                  <span>Email : </span> <a href="mailto:info@bruzoo.in">info@bruzoo.in</a><br>
                                                </p>
                                              </li>
                                              <li class="info-phone whatsApp">
                                                <p>
                                                 <span>Connect via <br>WhatsApp : </span> <a href="https://wa.me/+91 9817703400" target="_blank">+91 9817703400</a><br>
                                               </p>
                                             </li>
                                             <li class="info-phone">
                                              <p>
                                                <span>Toll-free <br>(Sales/ Support) : </span> <a href="tel:1800-890-1707">1800-890-1707</a></p>
                                              </li>
                                              <li class="info-phone">
                                                <p>
                                                  <span>Timings : </span> <a href="">8:00 AM to 9:00 PM<br>
                                                  Monday to Saturday</a>
                                                </p>
                                              </li>
                                            </ul>

                                          </div>
                                        </div>

                                      </div>
                                    </div>
                                  </section>


                                  <footer class="footer">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-12 text-center copyright_footer">
                                          <?php echo $this->settings->footer_text ?>
                                        </div>
                                      </div>
                                    </div>
                                    <?php 
                                    if($this->settings->cookies_content_display == "YES")
                                    {

                                     ?>

                                     <!-- START Bootstrap-Cookie-Alert -->
                                     <div class="alert text-center cookiealert" role="alert">
                                      <!-- <b><?php //echo 'Do you like cookies' ?></b> &#x1F36A; <?php //echo 'We use cookies'; ?> <a href="https://cookiesandyou.com/" target="_blank"><?php //echo 'Learn more'; ?></a> -->
                                      <?php echo $this->settings->cookies_content; ?>

                                      <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
                                       <?php echo $this->settings->cookies_content_btn_text; ?>
                                     </button>
                                   </div>
                                   <!-- END Bootstrap-Cookie-Alert -->

                                   <?php
                                 } ?>

                               </footer>

                             </div>
                           </div>

                           <?php // Javascript files ?>
                           <?php if (isset($js_files) && is_array($js_files)) : ?>
                           <?php foreach ($js_files as $js) : ?>
                            <?php if ( ! is_null($js)) : ?>
                              <?php $separator = (strstr($js, '?')) ? '&' : '?'; ?>
                              <?php echo "\n"; ?><script type="text/javascript" src="<?php echo xss_clean($js); ?><?php echo xss_clean($separator); ?>v = <?php echo xss_clean($this->settings->site_version); ?>"></script><?php echo "\n"; ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if (isset($js_files_i18n) && is_array($js_files_i18n)) : ?>
                        <?php foreach ($js_files_i18n as $js) : ?>
                          <?php if ( ! is_null($js)) : ?>
                            <?php echo "\n"; ?><script type="text/javascript"><?php echo "\n" . $js . "\n"; ?></script><?php echo "\n"; ?>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>

                      <script type="text/javascript">  
                        <?php if(!empty(get_admin_setting('footer_javascript'))) { echo html_entity_decode(get_admin_setting('footer_javascript')); } ?>
                      </script>





                      <script>
                        $(function() {
                          $( '#dl-menu' ).dlmenu({
                            animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
                          });
                        });
                      </script>


                      <div class="modal fade" id="quiz_all_in_one_modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content quiz_all_in_one_modal_content">
                            <div class="modal-header">
                              <h2 class="modal-title quiz_all_in_one_modal_title text-info text-uppercase" id="quiz_all_in_one_modal_title">Modal title</h2>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body quiz_all_in_one_modal_body">
                              ...
                            </div>
                            <div class="modal-footer quiz_all_in_one_modal_footer">
                              <a href="javascript:void(0)" class="btn btn-warning quiz_all_in_one_modal_footer_action">Action</a>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                          <!-- bar chart -->
    <script type="text/javascript">
      $(function() {
  $("#bars li .bar").each( function( key, bar ) {
    var percentage = $(this).data('percentage');
    
    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});






$(document).ready(function(){
  $(".testimonial .indicators li").click(function(){
    var i = $(this).index();
    var targetElement = $(".testimonial .tabs li");
    targetElement.eq(i).addClass('active');
    targetElement.not(targetElement[i]).removeClass('active');
            });
            $(".testimonial .tabs li").click(function(){
                var targetElement = $(".testimonial .tabs li");
                targetElement.addClass('active');
                targetElement.not($(this)).removeClass('active');
            });
        });
$(document).ready(function(){
    $(".slider .swiper-pagination span").each(function(i){
        $(this).text(i+1).prepend("0");
    });
});







$(document).ready(function(){
  $(".testimonial .indicators li").click(function(){
    var i = $(this).index();
    var targetElement = $(".testimonial .tabs li");
    targetElement.eq(i).addClass('active');
    targetElement.not(targetElement[i]).removeClass('active');
            });
            $(".testimonial .tabs li").click(function(){
                var targetElement = $(".testimonial .tabs li");
                targetElement.addClass('active');
                targetElement.not($(this)).removeClass('active');
            });
        });
$(document).ready(function(){
    $(".slider .swiper-pagination span").each(function(i){
        $(this).text(i+1).prepend("0");
    });
});
    </script>

                    </body>
                    </html>