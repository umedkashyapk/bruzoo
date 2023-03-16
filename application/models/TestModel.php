<?php defined('BASEPATH') OR exit('No direct script access allowed');
class TestModel extends CI_Model 
{
    function get_all_category() {
        return $this->db->where('category_is_delete',0)->where('category_status',1)->order_by('category_title','asc')->get('category')->result();
    }
    //study-material-detail/material
    function get_quiz_by_id($quiz_id) 
    {
        return $this->db->where('deleted','0')->where('id',$quiz_id)->order_by('id','asc')->where('is_quiz_active',1)->get('quizes')->row();
    }

    function get_leader_board_quiz_by_id($quiz_id) 
    {
        return $this->db->where('deleted','0')->where('id',$quiz_id)->where('leader_board',1)->where('is_quiz_active',1)->get('quizes')->row();
    }

    function my_quiz_history($user_id, $session_quiz_id, $pro_per_page, $page) 
    {
        return $this->db->select('participants.*,quizes.id as quiz_id, quizes.title as quiz_title, duration_min')
        ->join("quizes", "quizes.id = participants.quiz_id", "LEFT")
        ->where('participants.user_id',$user_id)
        ->where('quizes.id !=',$session_quiz_id)
        ->where('is_quiz_active',1)
        ->limit($pro_per_page, $page)
        ->order_by('participants.id','desc')
        ->get('participants')
        ->result();
    }

    function my_quiz_history_count($user_id, $session_quiz_id) 
    {
        $query = $this->db->select('participants.id,quizes.id as quiz_id, quizes.title as quiz_title')
        ->join("quizes", "quizes.id = participants.quiz_id", "LEFT")
        ->where('participants.user_id',$user_id)
        ->where('quizes.id !=',$session_quiz_id)
        ->where('is_quiz_active',1)

        ->order_by('participants.id','asc')
        ->get('participants');
        
        return $query->num_rows();    
    }

    function leader_board_quiz_history($quiz_id,$session_quiz_id) 
    {
        return $this->db->select('participants.*,users.id as user_id, first_name, last_name')
        ->join("users", "users.id = participants.user_id", "LEFT")
        
        ->where('participants.quiz_id !=',$session_quiz_id)
        ->where('participants.quiz_id',$quiz_id)
        ->order_by('participants.id','asc')
        ->get('participants')
        ->result();
    }  



	public function getcateogry() 
    {
        return $this->db->select('category_title, id')
        ->order_by('category.category_title','asc')
        ->get('category')
        ->result();
    }

    function get_question_by_quiz_id($quiz_id,$number_questions) 
    {
        return $this->db->select('questions.*,

            (SELECT is_random_option FROM quizes where quizes.id = questions.quiz_id) as is_random_option,
            (SELECT content FROM paragraph where paragraph.id = questions.question_paragraph_id) as question_paragraph_text,
            (SELECT title FROM section where section.id = questions.question_section_id) as question_section_name,
            (SELECT section.order FROM section where section.id = questions.question_section_id limit 1) as question_section_order,

            ')
        ->where('deleted','0')->where('quiz_id',$quiz_id)->order_by('id','asc')->limit($number_questions)->get('questions')->result();
    }


    function get_random_question_by_quiz_id($quiz_id,$number_questions)
    {
        return $this->db->select('questions.*,
            (SELECT is_random_option FROM quizes where quizes.id = questions.quiz_id) as is_random_option,

            (SELECT content FROM paragraph where paragraph.id = questions.question_paragraph_id limit 1) as question_paragraph_text,
            (SELECT title FROM section where section.id = questions.question_section_id limit 1) as question_section_name,
            (SELECT section.order FROM section where section.id = questions.question_section_id limit 1) as question_section_order,
            ')->where('deleted','0')->where('quiz_id',$quiz_id)->order_by('id','RANDOM')->limit($number_questions)->get('questions')->result();
    }

    function get_question_by_question_id($quiz_id, $question_id) 
    {
        return $this->db->where('deleted','0')->where('quiz_id',$quiz_id)->where('id',$question_id)->order_by('id','asc')->get('questions')->row();
    }

    function insert_participant($data) 
    {
        $this->db->insert('participants', $data);
        return $this->db->insert_id();
    }
    function insert_user_questions($data) 
    {
        $this->db->insert('user_questions', $data);
        return $this->db->insert_id();
    }
    
    function update_participant($quiz_id, $participants_content, $participant_id)
    {
         
        $user_id = isset($this->user['id']) ? $this->user['id'] : 0;
        $this->db->set($participants_content)
        ->where('user_id', $user_id)
        ->where('quiz_id',$quiz_id)
        ->where('id',$participant_id)
        ->update('participants');
        return $this->db->affected_rows();

    }

    function delete_last_test($quiz_id,$user_id)
    {
        $this->db->where('user_id', $user_id)->where('quiz_id',$quiz_id)->delete('participants');
        return $this->db->affected_rows();

    }

    function check_test_is_done($quiz_id,$user_id)
    {
        return $this->db->where('quiz_id',$quiz_id)->where('user_id',$user_id)->order_by('id','desc')->get('participants')->row();
    }

    function get_all_users() {
        return $this->db->where('deleted','0')->where('status','1')->where('role !=','user')->order_by('username','asc')->get('users')->result();
    }

    function insert_article($data) 
    {
        $this->db->insert('articles', $data);
        return $this->db->insert_id();
    }

    function insert_article_fields($data) 
    {
     return $this->db->insert('article_fields', $data);
 }

 function batch_insert_article_fields($data) 
 {
     return $this->db->insert_batch('article_fields', $data);   
 }

 function update_article_fields($article_id, $field_id, $data)
 {
    $this->db->set($data)->where('id', $field_id)->where('article_id',$article_id)->update('article_fields');
    return $this->db->affected_rows();
}

function article_name_like_this($id, $title) 
{
    $this->db->like('article_title', $title);
    if ($id) 
    {
        $this->db->where('id !=', $id);
        $this->db->where('id <', $id);
    }
    return $this->db->count_all_results('articles');
}

function highlight_title_like_this($title) 
{
    $this->db->like('highlight_title', $title);
    $result = $this->db->count_all_results('articles');

    return  $result > 0 ? '-copy-'. $result: '-copy';
}

function compare_box_title_like_this($title) 
{
    $this->db->like('compare_box_title', $title);
    $result =  $this->db->count_all_results('articles');
    return  $result > 0 ? '-copy-'. $result: '-copy';
}

function compare_list_title_like_this($title) 
{
    $this->db->like('compare_list_title', $title);
    $result =  $this->db->count_all_results('articles');
    return  $result > 0 ? '-copy-'. $result: '-copy';
}

function get_articles() {
    $this->_get_datatables_query();
    if ($_POST['length'] != - 1) 
        $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->select('articles.id,article_title,category_title,first_name,last_name, (SELECT count(id) FROM article_fields WHERE article_id = articles.id) total_fields')
    ->order_by('articles.id', 'asc')
    ->get();
    return $query->result();
}

function get_article_by_id($article_id)
{
    return $this->db->where('id',$article_id)->get('articles')->row();
}

function get_article_field_by_id($article_id)
{
    return $this->db->where('article_id',$article_id)->get('article_fields')->result();
}

function update_article($article_id, $data) 
{
    $this->db->set($data)->where('id', $article_id)->update('articles');
    return $this->db->affected_rows();
}

function delete_fields_by_article_id($article_id) 
{
    $this->db->where('article_id', $article_id)->delete('article_fields');
    return $this->db->affected_rows();
}
function delete_article($article_id) 
{
    $this->db->where('id', $article_id)->delete('articles');
    return $this->db->affected_rows();
}

function update_article_images_by_id($article_id, $updated_image_value) {
    $this->db->set('article_image', $updated_image_value)->where('id', $article_id)->update('articles');
    return $this->db->affected_rows();
}

function check_atrticle_field_exist_or_not($article_id,$field_id)
{
    return $this->db->where('article_id',$article_id)->where('id',$field_id)->get('article_fields')->row();
}

function get_participant_by_id($participant_id) 
{
    return $this->db->where('id',$participant_id)->get('participants')->row_array();
     
}
function get_user_question_by_participant_id($participant_id)
{
    return $this->db->select('user_questions.*,(select solution from questions where questions.id = user_questions.question_id) as solution,(select solution_image from questions where questions.id = user_questions.question_id) as solution_image,(select render_content from questions where questions.id = user_questions.question_id) as render_content')->where('participant_id',$participant_id)->order_by('question_id','asc')->get('user_questions')->result_array();
   
}
function save_quiz_view_data($data)
{
    $this->db->insert('quiz_count',$data);
    return $this->db->insert_id();
}

function get_test_taken($quiz_id,$user_id)
{
    return $this->db->select('count(*) as count')->where('user_id',$user_id)->where('quiz_id',$quiz_id)->get('participants')->row_array();

}
 
function get_quiz_with_difficulty_level($category_id,$difficulty_level)
{
    return $this->db->select('quizes.*')->where('category_id',$category_id)->where('difficulty_level <',$difficulty_level)->where('is_quiz_active',1)->get('quizes')->result();
}

function get_current_user_result($quiz_id,$user_id)
{
    return $this->db->select('participants.*')
                    ->where('user_id',$user_id)->where('quiz_id',$quiz_id)->get('participants')->result();
}

function get_user_membership($user_id)
{
    return $this->db->select('validity')->where('user_id',$user_id)->order_by('purchased','desc')->get('user_membership_payment')->row();
}

function site_leader_board_quiz_history()
{
    $return = $this->db->select('SUM(earned_points) as total_earned,participants.*,users.id as user_id, first_name, last_name, 
        (participants.correct*100/participants.questions) score,
        (participants.correct*100/participants.total_attemp) accuray,
        TIMESTAMPDIFF(SECOND, participants.started, participants.completed) AS take_time_for_exam,
        (SELECT created FROM users where users.id = participants.user_id) as age,
        ')
        ->join("users", "users.id = participants.user_id", "LEFT")
        ->group_by('participants.user_id')

        ->order_by('score','DESC')
        ->order_by('accuray','DESC')
        ->order_by('take_time_for_exam','DESC')
        ->order_by('age','DESC')
        ->order_by('first_name','ASC')
        ->limit(20)
        ->get('participants')
        ->result();
        // p($return);
        return $return;
}

function user_is_prime($user_id)
{
    return $this->db->where('DATE(user_membership_payment.validity) >=',date("Y-m-d"))
    ->where('user_membership_payment.user_id',$user_id)
    ->where('category_id',0)
    ->order_by('validity','desc')
    ->get('user_membership_payment')
    ->row();
}


function check_quiz_multiple_attemp_by_category($category_id,$user_id)
{
    return $this->db->where('quizes.number_questions <= (select count(id) from questions where questions.quiz_id = quizes.id)')
    ->where('category_id',$category_id)
    ->where('is_quiz_active',1)
    ->get('quizes')
    ->result();
}


function get_category_by_id($category_id) {
    return $this->db->where('id', $category_id)->get('category')->row();
}

function number_of_time_quiz_pass_by_user($quiz_id, $user_id)
{

    $data_obj = $this->db->select('participants.*,(select passing from quizes where participants.quiz_id = quizes.id AND user_id = '.$user_id.') as passing_percentages')
        ->where('quiz_id',$quiz_id)
        ->where('user_id',$user_id)
        ->order_by('correct','desc')
        ->get('participants')
        ->result();

        $passed_quiz = 0;
        
        if($data_obj)
        {
         
            foreach ($data_obj as $object) 
            {            
                $correct = $object->correct < 0  ? 1 : $object->correct;
                $questions = $object->questions < 0  ? 1 : $object->questions;
                $quiz_passing_marks = $object->quiz_passing_marks < 0  ? 1 : $object->quiz_passing_marks;

                $user_percent_on_quiz = round(($correct / $questions) * 100);
                if($user_percent_on_quiz  >= $quiz_passing_marks)
                {
                    $passed_quiz++;
                }
            }
        }
        
    return $passed_quiz;
}

function is_quiz_already_given_or_pass($quiz_id, $user_id)
{
    $return = $this->db->select('participants.*,(select passing from quizes where participants.quiz_id = quizes.id AND user_id = '.$user_id.') as passing_percentages')
        ->where('quiz_id',$quiz_id)
        ->where('user_id',$user_id)
        ->order_by('correct','desc')
        ->get('participants')
        ->row();

        
        if(empty($return))
        {
            return FALSE; 
        } 
        $correct = $return->correct < 0  ? 1 : $return->correct;
        $questions = $return->questions < 0  ? 1 : $return->questions;
        $quiz_passing_marks = $return->quiz_passing_marks < 0  ? 1 : $return->quiz_passing_marks;

        $user_percent_on_quiz = ($correct / $questions) * 100;

        if($user_percent_on_quiz < $quiz_passing_marks)
        {
            return FALSE;
        }
        
    return $return;
}


function get_quiz_with_child_difficulty_level($category_id,$difficulty_level,$user_id)
{
    return $this->db->select('quizes.id,quizes.title,quizes.category_id,quizes.passing as quiz_passing_percentage, number_questions as quiz_minimum_questions,difficulty_level,multiple_attemp,

        (select questions from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as test_has_questions,

        (select user_id from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as user_id,

        (select correct from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as correct,

        (select quiz_passing_marks from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as quiz_passing_marks,


        ')
        ->where('category_id',$category_id)
        ->where('difficulty_level <',$difficulty_level)
        ->where('quizes.number_questions <= (select count(id) from questions where questions.quiz_id = quizes.id)')
        ->where('is_quiz_active',1)
        ->get('quizes')
        ->result();
}

function get_quiz_with_difficulty_level_result($quiz_id,$user_id)
{
    return $this->db->select('quizes.id,quizes.title,quizes.category_id,quizes.passing as quiz_passing_percentage, number_questions as quiz_minimum_questions,difficulty_level,multiple_attemp,

        (select questions from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as test_has_questions,

        (select user_id from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as user_id,

        (select correct from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as correct,

        (select quiz_passing_marks from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as quiz_passing_marks,


        ')
        ->where('quizes.id',$quiz_id)
        ->where('is_quiz_active',1)
        ->get('quizes')
        ->result();
}

function old_get_quiz_with_difficulty_level_result($category_id,$difficulty_level,$user_id)
{
    return $this->db->select('quizes.id as id,

        (select id from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as participants_id,

        (select count(id) from questions where questions.quiz_id = quizes.id) as quiz_added_question,

        number_questions,

        (select questions from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as participants_questions,

        (select user_id from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as user_id,
        
        category_id,

        (select correct from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as correct,

        (select quiz_passing_marks from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as quiz_passing_marks,

        (select round(((correct / questions) * 100 ),2) as correct_percentage from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as correct_percentage,

        passing as quiz_passing_percentage,difficulty_level,multiple_attemp,
        
        (select membership_id from user_membership_payment where DATE(user_membership_payment.validity) >= "'.date("Y-m-d").'" AND user_membership_payment.user_id = '. $user_id.' limit 1) as membership_payment_id,

        (select payment_id from user_membership_payment where DATE(user_membership_payment.validity) >= "'.date("Y-m-d").'"  AND user_membership_payment.user_id = '. $user_id.' limit 1) as membership_id,
        
        (select validity from user_membership_payment where DATE(user_membership_payment.validity) >= "'.date("Y-m-d").'"  AND user_membership_payment.user_id = '. $user_id.' limit 1) as membership_validity,

        ')

    ->join("participants", "participants.quiz_id = quizes.id", "LEFT")
    ->where('quizes.number_questions <= (select count(id) from questions where questions.quiz_id = quizes.id)')
    ->where('category_id',$category_id)
    ->where('difficulty_level',$difficulty_level)
    ->where('is_quiz_active',1)
    ->get('quizes')
    ->result();
}

function get_quiz_with_difficulty_level__($category_id,$difficulty_level,$user_id)
{
    return $this->db->select('quizes.id as id,

        (select id from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as participants_id,

        (select count(id) from questions where questions.quiz_id = quizes.id) as quiz_added_question,

        number_questions,

        (select questions from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as participants_questions,

        (select user_id from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as participants_questions,
        
        category_id,

        (select correct from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as correct,

        (select quiz_passing_marks from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as quiz_passing_marks,

        (select round(((correct / questions) * 100 ),2) as correct_percentage from participants where participants.quiz_id = quizes.id AND participants.user_id = '. $user_id.'  ORDER BY participants.correct DESC limit 1) as correct_percentage,

        passing as quiz_passing_percentage,difficulty_level,multiple_attemp,
        
        (select membership_id from user_membership_payment where DATE(user_membership_payment.validity) >= "'.date("Y-m-d").'" AND user_membership_payment.user_id = '. $user_id.' limit 1) as membership_payment_id,

        (select payment_id from user_membership_payment where DATE(user_membership_payment.validity) >= "'.date("Y-m-d").'"  AND user_membership_payment.user_id = '. $user_id.' limit 1) as membership_id,
        
        (select validity from user_membership_payment where DATE(user_membership_payment.validity) >= "'.date("Y-m-d").'"  AND user_membership_payment.user_id = '. $user_id.' limit 1) as membership_validity,

        ')

    ->join("participants", "participants.quiz_id = quizes.id", "LEFT")
    ->where('quizes.number_questions <= (select count(id) from questions where questions.quiz_id = quizes.id)')
    ->where('category_id',$category_id)
    ->where('difficulty_level',$difficulty_level)
    ->where('is_quiz_active',1)
    ->get('quizes')
    ->result();
}

function update_user_question_by_id($data,$user_question_id)
{
    $this->db->where('id', $user_question_id);
    $this->db->update('user_questions', $data);
}

function find_no_of_question($quiz_id)
{
    return $this->db->where('id',$quiz_id)
                    ->where('is_quiz_active',1)
                    ->where('quizes.number_questions <= (select count(id) from questions where questions.quiz_id = quizes.id)')
                    ->get('quizes')
                    ->row();
}
    
}
