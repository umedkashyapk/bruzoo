<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<style type="text/css">
	.titles {
    text-align: center;
    font-size: 15px;
    color: #ffffff;
    font-weight: 700;
    padding: 17px 0px;
}
.acti {
    box-shadow: 0px 0px 10px #ccc;
    padding: 33px 15px;
    border-radius: 10px;
}
.col-md-12.activities .titles {
    color: #534e4e;
    text-align: left;
    font-size: 17px;
    padding: 0px;
}

.col-md-12.activities .content {
    color: #696262;
}
	.top-rank-card {
    background: #374c98;
    box-shadow: 0px 0px 10px #Ccc;
    padding: 20px 15px;
    border-radius: 9px;
    margin-bottom: 15px;
}

.top-rank-card img {
    width: 47%;
    border-radius: 50%;
}

.top-rank-card {
    text-align: center;
}

.mt-5.top-rank {
    margin-bottom: 20px;
}
.card-icon i {
    color: #f38dc0;
    font-size: 40px;
}

.card-detail .hedline {
    font-size: 16px;
    font-family: sans-serif;
    color: #1f1c1c;
}

.total-rupee {
    font-size: 20px;
    padding: 16px 0px;
    color: #6a1cc0;
}

.card {
    box-shadow: 0px 0px 10px #a5a0a0;
    position: relative;
    margin-bottom: 1.5rem;
    width: 100%;
    padding: 16px 15px;
}

.white .section-title h3, .white .section-title p {
    color: #4a4747;
}
.section-title h3 {
    color: #410a6e;
    font-size: 30px;
    line-height: 22px;
    margin-bottom: 15px;
    text-transform: uppercase;
    margin-top: 10px;
}

.card.card-1 {
    border-left: 3px solid red;
}

.card.card-2 {
    border-left: 3px solid #385098;
}

.card.card-3 {
    border-left: 3px solid #0c6436;
}
.card.card-4 {
    border-left: 3px solid #d28633;
}

.card.card-4 .card-icon i {
    color: #c97264;
    font-size: 40px;
}
.card.card-3 .card-icon i {
    color: #0c4e26;
    font-size: 40px;
}

.card.card-2 .card-icon i {
    color: #385098;
    font-size: 40px;
}

.card.card-1 .card-icon i {
    color: #ec4651;
    font-size: 40px;
}
ul.user-list {
    column-count: 6;
}

ul.user-list li {
    list-style: auto;
    line-height: 31px;
}

ul.user-list li i {
    color: #f1c71e;
}

ul.user-list li:nth-child(6n+1) i {
    color: red;
}

ul.user-list li:nth-child(4n+3) i {
    color: green;
}

ul.user-list li:nth-child(2n+10) i {
    /* color: #959595; */
}

.list-area {
    background: #f3f3f3;
    text-align: center;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 10px #ccc;
    border-radius: 7px;
    padding: 18px 25px;
}

.col-md-5 {}
</style>
<div class="header_margin_padding">
                    
                        <style type="text/css">
  body{
  -webkit-print-color-adjust:exact !important;
  print-color-adjust:exact !important;
}

 * {
      -webkit-print-color-adjust: exact !important; /* Chrome, Safari */
      color-adjust: exact !important; /*Firefox*/
    }

            @media print {
      body{
        -webkit-print-color-adjust: exact;
      }
      table {
        background: #ffffff00 !important;
        -webkit-print-color-adjust: exact;
      }
    }

    @media print {
    tr{
        background: #000!important;
        -webkit-print-color-adjust: exact; 
    }

    .scholer-card p.card-no {
    position: absolute;
  }

    .scholer-card p.card-date {
    position: absolute;
  }



}


</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
  </script>

<input type="hidden" class="not-attemp" data-color_code="#495057" value="0">
<input type="hidden" class="correct" value="3">
<input type="hidden" class="wrong-answer" value="2">
<div class="container"> 
  <div class="row"> 
    <div class="col-md-12">
      <!-- <input type="button" class="print-btn btn float-right" value="print" /> -->

      
        
    </div>
    <div class="col-12 text-center">
<!--       <h2 class="heading">
        Neet Test          Quiz Summary          
        </h2> -->


        <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Result</h3>
                                       
                                    </div>
                                </div>
        <!-- <hr> -->
    </div> 
  </div>
  
  <div class="row">
    
  </div>

<div class="modal fade bd-example-modal-lg" id="Modal_result" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-custom">
    <div class="modal-content">      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Question Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="d-none" aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="result-modal">
          <div class="form-validation text-danger"></div>
         <form action="https://bruzoo.easygrowtech.co.in/my/test/summary/dzJja1ZWaGVETUYvNFJHcEJlZVhzUT09" role="form" novalidate="novalidate" id="result_file_mail" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="e71f141abe22b8156f9b4bfa5048a15a">                                               
          <input type="hidden" name="participant_id" class="participant-id" value="27">
            <div class="col-12">
              <div class="form-group">
                <label for="coupon_for">Email</label>                <input type="text" name="email" id="email_field" class="form-control border" value="">
              </div>
            </div>
            <div class="col-12">
              <label for="coupon_for">Subject</label>              <input type="text" name="subject" id="subject_field" class="form-control border" value="">
            </div>
            <div class="col-12 mb-3">
              <label for="coupon_for">Message</label>              <textarea name="message" class="form-control border"></textarea> 
            </div>
            <div class="col-12">
              <label for="coupon_for">Send type</label><br>
              
                <span><input type="radio" class="d-inline" checked="checked" name="attachment_type" value="attachment"></span><span>Attachment</span>
             
              <span><input type="radio" class="d-inline" name="attachment_type" value="link"></span><span>Link</span>
            </div>
            <div class="col-12 mt-3">
              <input type="submit" value="Send" class="btn btn-primary px-5">
            </div>
         </form>       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
]
<div class="row" id="print-areas">  
    <div class="clearfix "></div>  
    
    <div class="col-md-3">
     <div class="card card-1">
      <div class="row">
        <div class="col-md-4 col-6">
          <div class="card-icon">
            <i class="fa fa-users"></i>
          </div>
        </div>
          <div class="col-md-8 col-6">
          <div class="card-detail">
            <div class="hedline">
              Total Amount
            </div>
              <div class="total-rupee">
              10000
            </div>
          </div>
        </div>
      </div>
     </div>

      </div>

          <div class="col-md-3">
     <div class="card card-2 ">
      <div class="row">
        <div class="col-md-4 col-6">
          <div class="card-icon">
            <i class="fa fa-user"></i>
          </div>
        </div>
          <div class="col-md-8 col-6">
          <div class="card-detail">
            <div class="hedline">
              Total Amount
            </div>
              <div class="total-rupee">
              10000
            </div>
          </div>
        </div>
      </div>
     </div>

      </div>

          <div class="col-md-3">
     <div class="card card-3">
      <div class="row">
        <div class="col-md-4 col-6">
          <div class="card-icon">
            <i class="fa fa-inr"></i>
          </div>
        </div>
          <div class="col-md-8 col-6">
          <div class="card-detail">
            <div class="hedline">
              Total Amount
            </div>
              <div class="total-rupee">
              10000
            </div>
          </div>
        </div>
      </div>
     </div>

      </div>

         <div class="col-md-3">
     <div class="card card-4">
      <div class="row">
        <div class="col-md-4 col-6">
          <div class="card-icon">
            <i class="fa fa-trophy"></i>
          </div>
        </div>
          <div class="col-md-8 col-6">
          <div class="card-detail">
            <div class="hedline">
              Top Scorer
            </div>
              <div class="total-rupee">
              100
            </div>
          </div>
        </div>
      </div>
     </div>

      </div>
</div>

<div class="row" id="print-areas">


    <div class="col-md-7" style="
    background: #fff;
    /* box-shadow: 0px 0px 10px #ccc; */
    /* padding: 42px 57px; */
    /* margin-bottom: 10px; */
">

    <ul class="user-list" style="
    background: #fff;
    box-shadow: 0px 0px 10px #ccc;
    padding: 42px 57px;
    margin-bottom: 10px;
">
        <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>  <li><i class="fa fa-circle"></i></li>
    </ul>
    </div>
    <div class="col-md-"></div>    
    <div class="col-md-5" style="
    background: #fff;
    box-shadow: 0px 0px 10px #ccc;
    padding: 20px 44px;
    margin-bottom: 10px;
">
              <div class=" text-center w-100 my-5 scholer-card " style="
    /* background: #fff; */
    /* box-shadow: 0px 0px 10px #ccc; */
    /* padding: 20px 44px; */
    /* margin-bottom: 10px; */
">
         <!--  <img width="300" class="thumbmail img-thumbmail text-center" src="https://bruzoo.easygrowtech.co.in/assets/images/logo/1670829860logo2.png"> -->

         <img src="https://bruzoo.easygrowtech.co.in/assets/images/card.jpg" id="animated-example" class="animated fadeInLeft">
         <p id="animated-example" class="animated fadeInLeft card-no">XXXX XXXX XX56 3456</p>
          <p id="animated-example" class="animated fadeInLeft card-date">09/23</p>




    <button style="
    margin-top: 7px;
    color: #fff;
    border: 1px solid #47b93b;
    background: #45ba39;
    border-radius: 5px;
">Unlock Now</button>
        </div>
            </div>

</div>

    
  
      </div>

  
  
        <div class="modal fade bd-example-modal-lg" id="Modal_235" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-custom">
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Question Detail</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="d-none" aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="left_content">
                <ul>
                  <!-- <strong> Question </strong> -->
                                            <div class="question-area">
                           <h5>The sum &amp; differences of two perpendicular&nbsp;vectors of equal magnitudes are-copy -1</h5>
                        </div>
                                                            <ul class="py-4">
                                          <li>                  
                                                    <div class="custom-control custom-checkbox wrong_answer">
                              <input type="checkbox" class="custom-control-input" id="question_235">
                              <label class="custom-control-label " for="question_235"> <h6>also perpendicular and of different lengths</h6><p></p></label>
                            </div>
                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox wrong_answer">
                              <input type="checkbox" class="custom-control-input" id="question_235" checked="">
                              <label class="custom-control-label " for="question_235"> <h6>also perpendicular and of equal lengths</h6><p></p></label>
                            </div>
                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox wrong_answer">
                              <input type="checkbox" class="custom-control-input" id="question_235" checked="">
                              <label class="custom-control-label text-danger wrong_check" for="question_235"> <h6>of equal lengths and have and acute angle between&nbsp;them</h6><p></p></label>
                            </div>
                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox wrong_answer">
                              <input type="checkbox" class="custom-control-input" id="question_235">
                              <label class="custom-control-label " for="question_235"> <h6>of equal length and have an obtuse angle between&nbsp;them</h6><p></p></label>
                            </div>
                                                </li>
                                          </ul>
                </ul>
                <label class="result">
                                      <a class="badge btn-danger text-white badge-xs rounded-10">Wrong</a>
                                  </label>
                                  <label class="result w-100">
                    Solution <div class="solution-area"><textarea readonly="">&lt;h6&gt;also perpendicular and of equal lengths&lt;/h6&gt;&lt;p&gt;&lt;/p&gt;</textarea></div>
                  </label>
                                        
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
      </div>
            <div class="modal fade bd-example-modal-lg" id="Modal_234" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-custom">
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Question Detail</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="d-none" aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="left_content">
                <ul>
                  <!-- <strong> Question </strong> -->
                                            <div class="question-area">
                           <h5>
                                    An aeroplane is moving on a circular path with a&nbsp;speed of 250 kmph. The change in velocity (in&nbsp;kmph) in half revolution is
                                -copy -1</h5>
                        </div>
                                                            <ul class="py-4">
                                          <li>                  
                                                    <div class="custom-control custom-checkbox wrong_answer">
                              <input type="checkbox" class="custom-control-input" id="question_234" checked="">
                              <label class="custom-control-label " for="question_234"> <h6>500</h6><p></p></label>
                            </div>
                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox wrong_answer">
                              <input type="checkbox" class="custom-control-input" id="question_234">
                              <label class="custom-control-label " for="question_234"> <h6>250</h6><p></p></label>
                            </div>
                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox wrong_answer">
                              <input type="checkbox" class="custom-control-input" id="question_234">
                              <label class="custom-control-label " for="question_234"> <h6>zero</h6><p></p></label>
                            </div>
                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox wrong_answer">
                              <input type="checkbox" class="custom-control-input" id="question_234" checked="">
                              <label class="custom-control-label text-danger wrong_check" for="question_234"> <h6>250&nbsp;√2</h6><p></p></label>
                            </div>
                                                </li>
                                          </ul>
                </ul>
                <label class="result">
                                      <a class="badge btn-danger text-white badge-xs rounded-10">Wrong</a>
                                  </label>
                                  <label class="result w-100">
                    Solution <div class="solution-area"><textarea readonly="">&lt;h6&gt;500&lt;/h6&gt;&lt;p&gt;&lt;/p&gt;</textarea></div>
                  </label>
                                        
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
      </div>
            <div class="modal fade bd-example-modal-lg" id="Modal_231" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-custom">
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Question Detail</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="d-none" aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="left_content">
                <ul>
                  <!-- <strong> Question </strong> -->
                                            <div class="question-area">
                           <h5>
                                    If the sum of two unit vectors is also a unit vector,&nbsp;then the magnitude of their difference is
                                -copy -1</h5>
                        </div>
                                                            <ul class="py-4">
                                          <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_231" checked="">
                              <label class="custom-control-label text-success" for="question_231"> <h6>√3</h6><p></p></label>
                            </div>

                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_231">
                              <label class="custom-control-label " for="question_231"> <h6>√5</h6><p></p></label>
                            </div>

                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_231">
                              <label class="custom-control-label " for="question_231"> <h6>√7</h6><p></p></label>
                            </div>

                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_231">
                              <label class="custom-control-label " for="question_231"> <h6>√2</h6><p></p></label>
                            </div>

                                                </li>
                                          </ul>
                </ul>
                <label class="result">
                                      <a class="badge btn-success text-white badge-xs rounded-10">Correct</a> 
                                  </label>
                                  <label class="result w-100">
                    Solution <div class="solution-area"><textarea readonly="">&lt;h6&gt;√3&lt;/h6&gt;&lt;p&gt;&lt;/p&gt;</textarea></div>
                  </label>
                                        
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
      </div>
            <div class="modal fade bd-example-modal-lg" id="Modal_233" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-custom">
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Question Detail</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="d-none" aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="left_content">
                <ul>
                  <!-- <strong> Question </strong> -->
                                            <div class="question-area">
                           <h5>
                                    A person aims a gun at a bird 
from a point, at a&nbsp;horizontal distance of 100 m.If gun can impart 
a&nbsp;speed of 500m/s to the bullet,at what height above&nbsp;the bird must he 
aim his gun in order to hit it?&nbsp;(g = 10 ms-2)
                                -copy -1</h5>
                        </div>
                                                            <ul class="py-4">
                                          <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_233">
                              <label class="custom-control-label " for="question_233"> <h6>50 cm</h6><p></p></label>
                            </div>

                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_233">
                              <label class="custom-control-label " for="question_233"> <h6>10 cm</h6><p></p></label>
                            </div>

                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_233">
                              <label class="custom-control-label " for="question_233"> <h6>40 cm</h6><p></p></label>
                            </div>

                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_233" checked="">
                              <label class="custom-control-label text-success" for="question_233"> <h6>20 cm</h6><p></p></label>
                            </div>

                                                </li>
                                          </ul>
                </ul>
                <label class="result">
                                      <a class="badge btn-success text-white badge-xs rounded-10">Correct</a> 
                                  </label>
                                  <label class="result w-100">
                    Solution <div class="solution-area"><textarea readonly="">&lt;h6&gt;20 cm&lt;/h6&gt;&lt;p&gt;&lt;/p&gt;</textarea></div>
                  </label>
                                        
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
      </div>
            <div class="modal fade bd-example-modal-lg" id="Modal_232" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-custom">
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Question Detail</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="d-none" aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="left_content">
                <ul>
                  <!-- <strong> Question </strong> -->
                                            <div class="question-area">
                           <h5>
                                    The hight y and distance x along 
the horizontal&nbsp;plane of a projectile on a certain planet (With 
no&nbsp;surrounding atmosphere) are given as y=y=8t-5t2&nbsp;mtr.&nbsp;and x = 6t metres, where t is in seconds. The&nbsp;velocity with which the projectile is projected is&nbsp;
                                -copy -1</h5>
                        </div>
                                                            <ul class="py-4">
                                          <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_232">
                              <label class="custom-control-label " for="question_232"> <h6>8 m/s</h6><p></p></label>
                            </div>

                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_232" checked="">
                              <label class="custom-control-label text-success" for="question_232"> <h6>10 m/s</h6><p></p></label>
                            </div>

                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_232">
                              <label class="custom-control-label " for="question_232"> <h6>6 m/s</h6><p></p></label>
                            </div>

                                                </li>
                                              <li>                  
                                                    <div class="custom-control custom-checkbox right_answer">
                              <input type="checkbox" class="custom-control-input" id="question_232">
                              <label class="custom-control-label " for="question_232"> <h6>unpredictable</h6><h6></h6><p></p></label>
                            </div>

                                                </li>
                                          </ul>
                </ul>
                <label class="result">
                                      <a class="badge btn-success text-white badge-xs rounded-10">Correct</a> 
                                  </label>
                                  <label class="result w-100">
                    Solution <div class="solution-area"><textarea readonly="">&lt;h6&gt;10 m/s&lt;/h6&gt;&lt;h6&gt;&lt;/h6&gt;&lt;p&gt;&lt;/p&gt;</textarea></div>
                  </label>
                                        
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
      </div>
      
</div>

<section class="popular" xss="removed">
              <div class="container">
<div class="row">
	<div class="col-md-7">
		             
	</div>
<div class="col-md-5">
    <div class="row" style="
    background: #fff;
    box-shadow: 0px 0px 10px #ccc;
    padding: 44px;
">
        <div class="col-md-4">
            <div class="list-area">
                <ul>
                    <li><i class="fa fa-circle" style="
    color: red;
    margin-bottom: 31px;
"></i></li>
                    <div class="list-txt">Wrong Answer</div>
                </ul>
            </div>
        </div>

    <div class="col-md-4">
            <div class="list-area">
                <ul>
                    <li><i class="fa fa-circle" style="
    color: #356a0d;
    margin-bottom: 31px;
"></i></li>
                    <div class="list-txt">Correct Answer</div>
                </ul>
            </div>
        </div>

    
    <div class="col-md-4">
            <div class="list-area">
                <ul>
                    <li><i class="fa fa-circle" style="
    color: #f1c71e;
    margin-bottom: 31px;
"></i></li>
                    <div class="list-txt">Not Attempt</div>
                </ul>
            </div>
        </div></div>
</div>
</div>
                 
                 </div>
             </section>
