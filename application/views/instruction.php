
      <style type="text/css">
      .quetion-paper ol li {
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 22px;
    list-style: auto;
}

.options {
    color: #6e6868;
    font-weight: 400;
}


body {
    font-family: 'Roboto', sans-serif;
    text-transform: capitalize;
    /*background-image: url(/assets/web/ba.png);*/
    background-size: cover;
    background-repeat: no-repeat;
}
.question {
    padding: 0px 0px 10px 0px;
}
button {
    background: linear-gradient(45deg, #e783c0, #7122bfeb);
    color: #ffffff;
    display: inline-block;
    font-family: 'montserratregular';
    font-size: 16px;
    padding: 10px 64px;
    border-radius: 3px;
    text-transform: uppercase;
    border: 1px solid white;
    font-weight: 700;
}
.paper-formate {
    background: #ffffffb3;
    box-shadow: 0px 0px 10px #ccc;
    border-radius: 6px;
}

.text-center.head {
    font-size: 27px;
    font-weight: 700;
    /* margin-bottom: 49px; */
    line-height: 70px;
}
.form-heading img {
    width: 52%;
}

.col-md-8.text-center.col-8 h3 {
    color: #ffffff;
    font-size: 27px;
    font-family: ui-monospace;
    font-weight: 900;
}
.max-mark {
    font-size: 15px;
    font-weight: 600;
}

.multioption ul {
    padding: 0px 22px;
    column-count: 2;
    color: #180328;
    font-weight: 700;
}

.multioption ul li {
    list-style: none;
}

.multioption ul li {
    margin-bottom: 0px;
}

.main-row{
  background: linear-gradient(45deg, #fb94c0, #560cbf);
    padding: 10px 20px;
}

.header-top-right {
    display: none;
}

h3{
  color: #fff;
    font-family: sans-serif;
}

.time-counter {
    display: flex;
    margin-top: 15px;
}
.paper-instructions li {
    margin: 0px;
    font-size: 15px;
    font-weight: 500;
    color: #6e6b6b;
    line-height: 25px;
    text-align: justify;
    margin-bottom: 4px;
}
li.main {
    color: #684685;
    font-size: 16px;
    font-weight: 600;
}

ol li{
  list-style: auto;
}

.paper-instruction-headline {
    font-size: 20px;
    font-weight: 600;
    color: #424044;
    line-height: 64px;

}

.registration-num{
  float: right;
}


*/
.tacbox input {
  height: 1em;
  width: 1em;
  vertical-align: middle;
}
.tacbox label {
    font-size: 15px;
    font-weight: 600;
    color: #684685;
}

.quetion-paper {
    height: 100vh;
    overflow-y: auto;
}

/*.quetion-paper::-webkit-scrollbar {
    display: none;
}*/
input[type=checkbox] {
  accent-color: green;
}

.multioption ul li {
    margin-bottom: 0px;
    list-style: upper-latin;
    color: #75548b;
}
.tacbox {
    padding: 0px 50px;
}


.header-top {
    background: linear-gradient(45deg, white, #f8f8f8);
    z-index: 99;
    height: 75px;
}

.class {
    text-align: center;
    font-size: 24px;
    line-height: 12px;
    font-weight: 600;
    color: #8f3bbf;
}
    </style>



 <section class="paper-main" style="background:url('https://bruzoo.in/assets/web/img/about3.png');background-size: cover;background-repeat: no-repeat;background-position: center;height: 100%;padding: 10px 0px;margin:40px 0px;">


      <div class="container">


 


        <div class="row">
          <div class="col-md-12 paper-formate ">
            <div class="row  main-row">
              <div class="col-md-2 col-4">
             <!--    <div class="form-heading">
                  <img src="https://bruzoo.in/assets/web/logo.png" >
                </div> -->
              </div>

              <div class="col-md-12 text-center ">
                <h3>BRUZOO EDUCATIONAL</h3>

                
              </div>
             

            
            </div>

                  <div class="row">
         <div class="col-md-12">
          <div class="text-center head">WEB DEVELOPMENT PAPER - I, 2022</div>
          <div class="class">High School</div>
          <form>
          <div class="registration-num">
            <label>Roll No.</label>
            <input type="text" name="" class="form-control">
          </div>
           <div class="paper-instructions">
             <div class="paper-instruction-headline">Instructions for Online Examinations:</div>
			 <?php echo get_admin_setting('general_instructions'); ?>
           <!-- <ol type="A">
           <li class="main">General information:
           <ol type="1">
            <li>The examination will comprise of Objective type Multiple Choice Questions (MCQs)</li>
            <li>All questions are compulsory and each carries One mark.</li>
            <li>The total number of questions, duration of examination, will be different based on
            the course, the detail is available on your screen.</li>
            <li>The Subjects or topics covered in the exam will be as per the Syllabus.</li>
            <li>There will be NO NEGATIVE MARKING for the wrong answers.</li>
          </ol>
            </li>
           <li class="main">Information & Instructions:
            <ol type="1">
              <li>The examination does not require using any paper, pen, pencil and calculator.</li>
            <li>Every student will take the examination on a Laptop/Desktop/Smart Phone</li>
            <li>On computer screen every student will be given objective type type Multiple Choice
            Questions (MCQs).</li>
            <li>Each student will get questions and answers in different order selected randomly
            from a fixed Question Databank.</li>
            <li>The students just need to click on the Right Choice / Correct option from the
            multiple choices /options given with each question. For Multiple Choice Questions,
            each question has four options, and the candidate has to click the appropriate
            option.</li>
            </ol>
          </li>
            
          </ol> -->
           </div>
		    <?php 
          if ($quiz_data->quiz_instruction) {
        ?>
          <div class="card-body">
            <div class="text-wrap p-lg-6">
              <h1 class="text-primary"><?php echo lang('front_quiz_instruction'); ?></h1>
              <hr>
              <?php 
                $lang_id = get_language_data_by_language($this->session->userdata('language'));
                $translate_instructions = get_translated_column_value($lang_id,'quizes',$quiz_data->id,'quiz_instruction');
                $translate_instructions = $translate_instructions ? $translate_instructions : $quiz_data->quiz_instruction;
                  echo xss_clean($translate_instructions); 
              ?>
            </div>
          </div>
        <?php  } ?>
           <div class="tacbox">
          <input id="checkbox" type="checkbox" />
          <label for="checkbox"> I Have read all the Instructions</label>
        </div>

        <div class="text-center">
          <a href="https://bruzoo.in/paper">
            <button class="proceed" type="button">Proceed</button>
          </a>
        </div>
         </form>
         </div>
       </div>
         
      </div>
    </div>
      </div>
    </section>