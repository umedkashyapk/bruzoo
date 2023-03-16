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
.time-counter {
    display: flex;
}
.quetion-paper {
    border: 1px solid #f58fc0;
    margin-top: 36px;
    position: relative;
}

.quetion-paper:before {
    content: "";
    border-right: 1px solid #f891c0;
    height: 100%;
    position: absolute;
    left: 49%;
}

.quetion-paper ol {
    padding-top: 28px;
    padding-bottom: 28px;
    column-count: 2;
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
p#demo {
    margin: 0px;
    font-size: 27px;
    color: #fff;
    margin: 6px 0px;
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



.mark-class i {
    font-size: 37px;
    color: #fff;
    margin-right: 10px;
}

h3{
  color: #fff;
    font-family: sans-serif;
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



input[type=radio] {
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

.col-md-12.paper-formate {
    background-position: center!important;
    background-repeat: no-repeat!important;
    background-attachment: fixed!important;
}

.class {
    text-align: center;
    font-size: 24px;
    line-height: 12px;
    font-weight: 600;
    color: #8f3bbf;
}

.container-fluid.sticky_top.bg-white {
    display: none;
}

.mark-class {
    display: block;
}

form.Country {
    display: none;
}
input[type=radio] {
    accent-color: green;
    color: red;
    margin: 4px 6px;
}
 </style>

  <section class="paper-main" style="background:url('https://bruzoo.in/assets/web/img/about3.png');background-size: cover;background-repeat: no-repeat;background-position: center;height: 100%;padding: 20px 0px;">


      <div class="container">


 


        <div class="row">
          <div class="col-md-12 paper-formate " style="background:url('<?php echo base_url()?>assets/images/logo-12.png');">
            <div class="row  main-row">
              <div class="col-md-2 col-4">
              </div>

              <div class="col-md-12 text-center ">
                <h3>BRUZOO EDUCATIONAL</h3>
              </div>
            </div>
          <form>
            
              <!--   <div class="text-center head">WEB DEVELOPMENT PAPER - I, 2022</div>
             <div class="class">High School</div> -->
          <div class="quetion-paper">
            <ol>
         <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>

        
           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>



           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>



           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>


           <li><div class="question">Please select your favorite Web language ?</div>
            <div class="multioption">
              <ul>
              <li><div class="options"><input type="radio" class="chb" id="html" name="fav_language" value="HTML">
              <label for="html">HTML</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="css" name="fav_language" value="CSS">
              <label for="css">CSS</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="javascript" name="fav_language" value="JavaScript">
              <label for="javascript">JavaScript</label>
          </div>
           </li>
           <li><div class="options"><input type="radio" class="chb" id="Jquery" name="fav_language" value="Jquery">
              <label for="Jquery">Jquery</label>
          </div>
         </li>
        </ul>
            </div>
          </li>



            
        </ol>
  <div class="text-center test-sub"><a href="https://bruzoo.in/answerkey"><button type="button">Submit</button></a></div>
      
          </div>
        </form>
      </div>
    </div>
      </div>
    </section>
<script>
// Set the date we're counting down to
var countDownDate = new Date().getTime() + 15 * 60 * 1000;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for hours, minutes and seconds
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML =  hours + ":"
  + minutes + ":" + seconds;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>