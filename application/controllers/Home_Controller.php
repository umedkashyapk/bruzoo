<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home_Controller extends Public_Controller {
    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
        $this->add_css_theme('sweetalert.css');
        $this->add_js_theme('sweetalert-dev.js'); 
        $this->add_css_theme('set2.css');
        $this->add_css_theme('slick.min.css');
        $this->add_css_theme('slick-theme.min.css');
        $this->add_js_theme('slick.min.js');
        $this->add_js_theme('home.js');
        $this->add_js_theme('jquery.validate.min.js');
        $this->load->library('form_validation');
        $this->load->model('HomeModel');
        $this->load->model('MembershipModel');
        $this->load->model('Payment_model');
		$this->load->model('TestModel');
        $this->add_css_theme('quiz_box.css');
        $this->add_css_theme('style.css');
        

    }
    
    function index() 
    {
        $user_id = isset($this->user['id']) ? $this->user['id'] : 0; 

        $this->set_title(sprintf(lang('home'), $this->settings->site_name));
        $category_data = $this->HomeModel->get_category();
        
        $testimonial_data = $this->HomeModel->get_testmonials();
        $sponser_data = $this->HomeModel->get_sponsers();

        $session_quiz_data = array();
        $session_quiz_question_data = array();

        if($this->session->quiz_session)
        {
            $get_quiz_session = $this->session->quiz_session;
            $session_quiz_data = $get_quiz_session['quiz_data'];
            $session_quiz_question_data = $get_quiz_session['quiz_question_data'];
        }

        $is_premium_member = FALSE;
        $get_logged_in_user_membership = $this->MembershipModel->get_user_membership($user_id);
        if($get_logged_in_user_membership) 
        {
            $is_premium_member = ($get_logged_in_user_membership->validity && $get_logged_in_user_membership->validity >= date('Y-m-d')) ? TRUE : FALSE;
        }

        $get_page_content = '';

        if($this->settings->pages_list)
        {
            $get_page_content = $this->db->select('content')->where('slug',$this->settings->pages_list)->get('pages')->row();
        }
        
        $paid_quizes_array = $this->Payment_model->get_user_paid_quiz_obj($user_id);
        
        $paid_s_m_array = $this->Payment_model->get_user_paid_study_matiral_obj($user_id);
          
        $latest_quiz_data = $this->HomeModel->get_latest_quiz(4,'quizes.added','DESC');
        
        $popular_quiz_data = $this->HomeModel->get_latest_quiz(4,'total_view','DESC');

        $upcoming_quiz_data = $this->HomeModel->get_upcoming_quiz();
        //p($upcoming_quiz_data);
       $latest_study_material_data = $this->HomeModel->get_latest_study_material(4,'study_material.added');
        
        $popular_study_material_data = $this->HomeModel->get_latest_study_material(4,'total_view');
       
        $content_data = array('Page_message' => lang('welcome_to_online_quiz'), 'page_title' => lang('home'),'category_data' => $category_data,'testimonial_data'=>$testimonial_data,'latest_quiz_data' => $latest_quiz_data, 'popular_quiz_data' => $popular_quiz_data,'session_quiz_data' => $session_quiz_data, 'session_quiz_question_data' => $session_quiz_question_data,'sponser_data'=>$sponser_data,'latest_study_material_data'=>$latest_study_material_data,'popular_study_material_data'=>$popular_study_material_data,'is_premium_member' => $is_premium_member,'paid_quizes_array'=>$paid_quizes_array,'paid_s_m_array' => $paid_s_m_array, 'upcoming_quiz_data' => $upcoming_quiz_data,'get_page_content'=>$get_page_content,);

        $data = $this->includes;
        $data['content'] = $this->load->view('home', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

    function about() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('about', $content_data, TRUE);
        

        $this->load->view($this->template, $data);
    }
    function refund_policy() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('refund_policy', $content_data, TRUE);
        

        $this->load->view($this->template, $data);
    }
    function privacy_policy() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('privacy_policy', $content_data, TRUE);
        

        $this->load->view($this->template, $data);
    }
    

    function result_view() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('result_view', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

     function register() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('register', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

     function paper() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('paper', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }


     function admission() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('admission', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

     function scholarship() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('scholarship', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

    function instructions() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('instructions', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }


function sendotp(){
	
	
	$message = "Welcome to Bruzoo, Your OTP 907612 for registration of mobile is 7042064744";
        $encodedMessage = urlencode($message);
        $api = "http://login.yourbulksms.net/sendhttp.php?authkey=20008AnUMQwq1OKJ6253d9cdP15&mobiles=7042064744&message=".$encodedMessage."&sender=BRUZOO&DLT_TE_ID=1501481520000038919&route=4&response=json";

$contents = file_get_contents($api);


if($contents !== false){
    echo $contents;
}
}
        function career() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('career', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

        function blog() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('blog', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

          function bruzoo_tv() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('bruzoo-tv', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

           function contact() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('contact', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

             function class() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('class', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

                 function course() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('course', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }


function submittestusers(){
	
	if(isset($_POST['username']) &&  isset($_POST['phone'])){
			
			$this->HomeModel->addguest_student($_POST);
			
			   $login = $this->HomeModel->login($this->input->post('username', TRUE), $this->input->post('phone', TRUE));

            if ($login && $login !='not-active') 
            {
                
                $this->session->set_userdata('logged_in', $login);
               
                
                $update_data['last_access'] = date('Y-m-d H:i:s');
                $this->db->where('id',$login['id'])->update('users',$update_data);

                $get_login_user_membership = $this->HomeModel->get_login_user_membership($login['id'],date('Y-m-d'));
                
                $this->session->set_userdata('membership',$get_login_user_membership);
                $data['status']='success';
               echo json_encode($data);
            }
		}
}


function checkusername(){
	if($_REQUEST['username']){
	 $this->db->where('username',$_REQUEST['username']);
    $query = $this->db->get('users');
    if ($query->num_rows() > 0){
         echo 'false';
    }
    else{
       
		echo  'true';
    }
	}
}

function checkmobile(){
	if($_REQUEST['phone']){
	 $this->db->where('mobile_number',$_REQUEST['phone']);
    $query = $this->db->get('users');
    if ($query->num_rows() > 0){
         echo 'false';
    }
    else{
       
		echo  'true';
    }
	}
}

 
	


            function test_series() 
    {


        $user_id = isset($this->user['id']) ? $this->user['id'] : 0; 

        $this->set_title(sprintf(lang('home'), $this->settings->site_name));
        $category_data = $this->HomeModel->get_category();
        
        $testimonial_data = $this->HomeModel->get_testmonials();
        $sponser_data = $this->HomeModel->get_sponsers();

        $session_quiz_data = array();
        $session_quiz_question_data = array();

        if($this->session->quiz_session)
        {
            $get_quiz_session = $this->session->quiz_session;
            $session_quiz_data = $get_quiz_session['quiz_data'];
            $session_quiz_question_data = $get_quiz_session['quiz_question_data'];
        }

        $is_premium_member = FALSE;
        $get_logged_in_user_membership = $this->MembershipModel->get_user_membership($user_id);
        if($get_logged_in_user_membership) 
        {
            $is_premium_member = ($get_logged_in_user_membership->validity && $get_logged_in_user_membership->validity >= date('Y-m-d')) ? TRUE : FALSE;
        }

        $get_page_content = '';

        if($this->settings->pages_list)
        {
            $get_page_content = $this->db->select('content')->where('slug',$this->settings->pages_list)->get('pages')->row();
        }
        
        $paid_quizes_array = $this->Payment_model->get_user_paid_quiz_obj($user_id);
        
        $paid_s_m_array = $this->Payment_model->get_user_paid_study_matiral_obj($user_id);
          
        $latest_quiz_data = $this->HomeModel->get_latest_quiz(4,'quizes.added','DESC');
        
        $popular_quiz_data = $this->HomeModel->get_latest_quiz(4,'total_view','DESC');

        $upcoming_quiz_data = $this->HomeModel->get_upcoming_quiz();
        //p($upcoming_quiz_data);
       $latest_study_material_data = $this->HomeModel->get_latest_study_material(4,'study_material.added');
        
        $popular_study_material_data = $this->HomeModel->get_latest_study_material(4,'total_view');
       
        $content_data = array('Page_message' => lang('welcome_to_online_quiz'), 'page_title' => lang('home'),'category_data' => $category_data,'testimonial_data'=>$testimonial_data,'latest_quiz_data' => $latest_quiz_data, 'popular_quiz_data' => $popular_quiz_data,'session_quiz_data' => $session_quiz_data, 'session_quiz_question_data' => $session_quiz_question_data,'sponser_data'=>$sponser_data,'latest_study_material_data'=>$latest_study_material_data,'popular_study_material_data'=>$popular_study_material_data,'is_premium_member' => $is_premium_member,'paid_quizes_array'=>$paid_quizes_array,'paid_s_m_array' => $paid_s_m_array, 'upcoming_quiz_data' => $upcoming_quiz_data,'get_page_content'=>$get_page_content,);
        $data = $this->includes;
        $data['content'] = $this->load->view('test-series', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }

                function donation() 
    {
        $data = $this->includes;
        $data['content'] = $this->load->view('donation', $content_data, TRUE);

        $this->load->view($this->template, $data);
    }


}