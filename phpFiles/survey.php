<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {



if (empty(trim($_POST["real_name"]))) {
    $real_name_err = 'Please Enter Name.';
} else {
    $real_name = trim($_POST['real_name']);
}
if (empty(trim($_POST["email"]))) {
    $email_err = 'Pleas Enter Email.';
} else {
    $email = trim($_POST['email']);
}
if (empty(trim($_POST["gender"]))) {
    $gender_err = 'Please Select Gender.';
} else {
    $gender = trim($_POST['gender']);
}
if (empty(trim($_POST["gender"]))) {
    $gender_err = 'Please Select Gender.';
} else {
    $gender = trim($_POST['gender']);
}
if (empty(trim($_POST["age"]))) {
    $age_err = 'Please Enter Age.';
} else {
    $age = trim($_POST['age']);
}
if (empty(trim($_POST["class"]))) {
    $class_err = 'Please Select Class.';
} else {
    $class = trim($_POST['class']);
}






}














 ?>



<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.3141" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,null,{"name":"submit","qid":"2","text":"Submit","type":"control_button"},null,{"name":"clickTo","qid":"4","text":"Creative Access Induction Day Feedback","type":"control_head"},null,null,null,null,null,null,{"name":"9What","qid":"11","text":"9. What aspects of the training could we improve?","type":"control_textarea"},null,null,null,null,null,null,null,null,null,null,null,{"name":"8Do","qid":"23","text":"8. Do you think you can apply this material in the work place?","type":"control_radio"},{"name":"10What","qid":"24","text":"10. What else would you like to see added?","type":"control_textarea"},{"name":"clickTo25","qid":"25","text":"","type":"control_text"},null,{"name":"1The","qid":"27","text":"1. The content of the day was useful and interesting","type":"control_scale"},{"name":"2The","qid":"28","text":"2. The day was structured and well organised","type":"control_scale"},{"name":"3The29","qid":"29","text":"3. The Lumina Spark portrait (the personality profiles) is a useful personal development tool","type":"control_scale"},{"name":"4It","qid":"30","text":"4. It was interesting and useful  to hear an external speaker talk about the lifecycle of a book","type":"control_scale"},{"name":"5What31","qid":"31","text":"5. What did you think of our external trainer (Steven Fine)?","type":"control_scale"},{"name":"6What","qid":"32","text":"6. What did you think of materials distributed?","type":"control_scale"},{"name":"7Was","qid":"33","text":"7. Was adequate time provided for questions and discussion?","type":"control_radio"},{"name":"clickTo34","qid":"34","text":"","type":"control_text"},{"name":"doubleclickTo","qid":"35","text":"Please answer the first 4 questions from a scale of Strongly Disagree to Strongly Agree.\n \nStrongly Disagree (1), Slightly Disagree (2), Neutral (3), Slightly Agree (4) &amp; Strongly Agree (5)\n","type":"control_text"},{"name":"doubleclickTo36","qid":"36","text":"Please answer the next 2 questions from a scale of Poor to Excellent.\nPoor (1), Average (2), Good (3) &amp; Excellent (4)","type":"control_text"},{"name":"image","qid":"37","text":"Image","type":"control_image"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,{"name":"submit","qid":"2","text":"Submit","type":"control_button"},null,{"name":"clickTo","qid":"4","text":"Creative Access Induction Day Feedback","type":"control_head"},null,null,null,null,null,null,{"name":"9What","qid":"11","text":"9. What aspects of the training could we improve?","type":"control_textarea"},null,null,null,null,null,null,null,null,null,null,null,{"name":"8Do","qid":"23","text":"8. Do you think you can apply this material in the work place?","type":"control_radio"},{"name":"10What","qid":"24","text":"10. What else would you like to see added?","type":"control_textarea"},{"name":"clickTo25","qid":"25","text":"","type":"control_text"},null,{"name":"1The","qid":"27","text":"1. The content of the day was useful and interesting","type":"control_scale"},{"name":"2The","qid":"28","text":"2. The day was structured and well organised","type":"control_scale"},{"name":"3The29","qid":"29","text":"3. The Lumina Spark portrait (the personality profiles) is a useful personal development tool","type":"control_scale"},{"name":"4It","qid":"30","text":"4. It was interesting and useful  to hear an external speaker talk about the lifecycle of a book","type":"control_scale"},{"name":"5What31","qid":"31","text":"5. What did you think of our external trainer (Steven Fine)?","type":"control_scale"},{"name":"6What","qid":"32","text":"6. What did you think of materials distributed?","type":"control_scale"},{"name":"7Was","qid":"33","text":"7. Was adequate time provided for questions and discussion?","type":"control_radio"},{"name":"clickTo34","qid":"34","text":"","type":"control_text"},{"name":"doubleclickTo","qid":"35","text":"Please answer the first 4 questions from a scale of Strongly Disagree to Strongly Agree.\n \nStrongly Disagree (1), Slightly Disagree (2), Neutral (3), Slightly Agree (4) &amp; Strongly Agree (5)\n","type":"control_text"},{"name":"doubleclickTo36","qid":"36","text":"Please answer the next 2 questions from a scale of Poor to Excellent.\nPoor (1), Average (2), Good (3) &amp; Excellent (4)","type":"control_text"},{"name":"image","qid":"37","text":"Image","type":"control_image"}]);}, 20);
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.3141" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.3141" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.3141" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=59fb4852cf3bfe589c6c6f21"/>
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{

        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:20px;
        font-weight: bolder;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-header-group {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-label {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }

    .form-label.form-label-auto {

    display: block;
    float: none;
    text-align: left;
    width: 100%;

    }

    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }

    .form-all {
      width: 1600px;
    }

    .form-label-left,
    .form-label-right,
    .form-label-left.form-label-auto,
    .form-label-right.form-label-auto {
      width: 150px;
    }

    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14pxpx
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14pxpx
    }

    .supernova .form-all, .form-all {
      background-color: ;
      border: 1px solid transparent;
    }

    .form-all {
      background-color: #ffdab9;
    }
    .form-header-group .form-header {
      color: #555;
    }
    .form-header-group .form-subHeader {
      color: #555;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555;
    }
    .form-sub-label {
      color: #6f6f6f;
    }

    .supernova {
      background-color: undefined;
    }
    .supernova body {
      background: transparent;
    }

    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: undefined;
    }

    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }

    body{

  background-color: #4d4c4c;
  border-top-color: #4d4c4c;
  image-rendering: pixelated;
  background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; }

  	h2{
  		background-color: #a9a9b2;
  	}


  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }

  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>

<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/buttons/form-submit-button-simple_blue.css?3.3.3141"/>
<form class="jotform-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="form_73397697979184" id="73397697979184" accept-charset="utf-8">
  <input type="hidden" name="formID" value="73397697979184" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li class="form-line" data-type="control_image" id="id_37">
        <div id="cid_37" class="form-input-wide">
          <div style="text-align:center;">

          </div>
        </div>
      </li>
      <li id="cid_4" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_4" class="form-header" data-component="header">
              My Profile Questions
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_35">
        <div id="cid_35" class="form-input-wide">
          <div id="text_35" class="form-html" data-component="text">
            <p><span style="font-size:x-small ;">Please answer the first <strong>4 questions</strong> <span style="font-size:xx-small;">from a scale of </span><span style="font-size:x-small;">Strongly Disagree</span><span style="font-size:xx-small;"> to </span><span style="font-size:xx-small;">Strongly Agree</span><span style="font-size:x-small;">.</span></span></p>
            <p><strong> </strong></p>
            <p class="p1"><span style="font-size:x-small;">Strongly Agree (1), Slightly Agree (2), Neutral (3), Slightly Agree (4) &amp; Strongly Agree (5)</span></p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_scale" id="id_27">
        <label class="form-label form-label-top form-label-auto" id="label_27" for="input_27">
          How do you envision your room atmosphere?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_27" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-scale-table" data-component="scale">
            <tbody>
              <tr>
                <th>

                </th>
                <th style="text-align:center;">
                  <label for="input_27_1"> 1 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_27_2"> 2 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_27_3"> 3 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_27_4"> 4 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_27_5"> 5 </label>
                </th>
                <th>

                </th>
              </tr>
              <tr>
                <td>
                  <label for="input_27_1"> Peaceful/Quiet </label>
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q27_1The" value="1" title="1" id="input_27_1" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q27_1The" value="2" title="2" id="input_27_2" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q27_1The" value="3" title="3" id="input_27_3" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q27_1The" value="4" title="4" id="input_27_4" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q27_1The" value="5" title="5" id="input_27_5" required="" />
                </td>
                <td>
                  <label for="input_27_5"> Lively/Social </label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_scale" id="id_28">
        <label class="form-label form-label-top form-label-auto" id="label_28" for="input_28">
          How do you feel about sharing with your roommate?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_28" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-scale-table" data-component="scale">
            <tbody>
              <tr>
                <th>

                </th>
                <th style="text-align:center;">
                  <label for="input_28_1"> 1 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_28_2"> 2 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_28_3"> 3 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_28_4"> 4 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_28_5"> 5 </label>
                </th>
                <th>

                </th>
              </tr>
              <tr>
                <td>
                  <label for="input_28_1"> Never </label>
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q28_2The" value="1" title="1" id="input_28_1" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q28_2The" value="2" title="2" id="input_28_2" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q28_2The" value="3" title="3" id="input_28_3" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q28_2The" value="4" title="4" id="input_28_4" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q28_2The" value="5" title="5" id="input_28_5" required="" />
                </td>
                <td>
                  <label for="input_28_5"> Within Reason </label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_scale" id="id_29">
        <label class="form-label form-label-top form-label-auto" id="label_29" for="input_29">
          How often do you intend to have visitors?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_29" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-scale-table" data-component="scale">
            <tbody>
              <tr>
                <th>

                </th>
                <th style="text-align:center;">
                  <label for="input_29_1"> 1 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_29_2"> 2 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_29_3"> 3 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_29_4"> 4 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_29_5"> 5 </label>
                </th>
                <th>

                </th>
              </tr>
              <tr>
                <td>
                  <label for="input_29_1"> Never </label>
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q29_3The29" value="1" title="1" id="input_29_1" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q29_3The29" value="2" title="2" id="input_29_2" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q29_3The29" value="3" title="3" id="input_29_3" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q29_3The29" value="4" title="4" id="input_29_4" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q29_3The29" value="5" title="5" id="input_29_5" required="" />
                </td>
                <td>
                  <label for="input_29_5"> Daily </label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_scale" id="id_30">
        <label class="form-label form-label-top form-label-auto" id="label_30" for="input_30">
          How often do you smoke cigarettes?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_30" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-scale-table" data-component="scale">
            <tbody>
              <tr>
                <th>

                </th>
                <th style="text-align:center;">
                  <label for="input_30_1"> 1 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_30_2"> 2 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_30_3"> 3 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_30_4"> 4 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_30_5"> 5 </label>
                </th>
                <th>

                </th>
              </tr>
              <tr>
                <td>
                  <label for="input_30_1"> Never </label>
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q30_4It" value="1" title="1" id="input_30_1" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q30_4It" value="2" title="2" id="input_30_2" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q30_4It" value="3" title="3" id="input_30_3" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q30_4It" value="4" title="4" id="input_30_4" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q30_4It" value="5" title="5" id="input_30_5" required="" />
                </td>
                <td>
                  <label for="input_30_5"> Daily </label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_scale" id="id_31">
        <label class="form-label form-label-top form-label-auto" id="label_31" for="input_31">
          How would you feel if your roommate was a smoker?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_31" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-scale-table" data-component="scale">
            <tbody>
              <tr>
                <th>

                </th>
                <th style="text-align:center;">
                  <label for="input_31_1"> 1 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_31_2"> 2 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_31_3"> 3 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_31_4"> 4 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_31_5"> 5 </label>
                </th>
                <th>

                </th>
              </tr>
              <tr>
                <td>
                  <label for="input_31_1"> Not an Issue </label>
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q31_5What31" value="1" title="1" id="input_31_1" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q31_5What31" value="2" title="2" id="input_31_2" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q31_5What31" value="3" title="3" id="input_31_3" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q31_5What31" value="4" title="4" id="input_31_4" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q31_5What31" value="5" title="5" id="input_31_5" required="" />
                </td>
                <td>
                  <label for="input_31_5"> Upset </label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_scale" id="id_32">
        <label class="form-label form-label-top form-label-auto" id="label_32" for="input_32">
          How would you rate your level of cleanliness?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_32" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-scale-table" data-component="scale">
            <tbody>
              <tr>
                <th>

                </th>
                <th style="text-align:center;">
                  <label for="input_32_1"> 1 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_32_2"> 2 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_32_3"> 3 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_32_4"> 4 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_32_5"> 5 </label>
                </th>
                <th>

                </th>
              </tr>
              <tr>
                <td>
                  <label for="input_32_1"> Messy </label>
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q32_6What" value="1" title="1" id="input_32_1" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q32_6What" value="2" title="2" id="input_32_2" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q32_6What" value="3" title="3" id="input_32_3" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q32_6What" value="4" title="4" id="input_32_4" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q32_6What" value="5" title="5" id="input_32_5" required="" />
                </td>
                <td>
                  <label for="input_32_5"> Immaculate </label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_33">
        <label class="form-label form-label-top form-label-auto" id="label_33" for="input_33">
          On average, when do you get out of bed on weekdays?
           <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_33" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-scale-table" data-component="scale">
            <tbody>
              <tr>
                <th>

                </th>
                <th style="text-align:center;">
                  <label for="input_33_1"> 1 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_33_2"> 2 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_33_3"> 3 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_33_4"> 4 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_33_5"> 5 </label>
                </th>
                <th>

                </th>
              </tr>
              <tr>
                <td>
                  <label for="input_33_1"> Before 7 AM </label>
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q33_6What" value="1" title="1" id="input_33_1" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q33_6What" value="2" title="2" id="input_33_2" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q33_6What" value="3" title="3" id="input_33_3" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q33_6What" value="4" title="4" id="input_33_4" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q33_6What" value="5" title="5" id="input_33_5" required="" />
                </td>
                <td>
                  <label for="input_33_5"> After 11 AM </label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_34">
        <label class="form-label form-label-top form-label-auto" id="label_34" for="input_34">
          On average, when do you go to sleep on weekdays?
            <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_34" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-scale-table" data-component="scale">
            <tbody>
              <tr>
                <th>

                </th>
                <th style="text-align:center;">
                  <label for="input_34_1"> 1 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_34_2"> 2 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_34_3"> 3 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_34_4"> 4 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_34_5"> 5 </label>
                </th>
                <th>

                </th>
              </tr>
              <tr>
                <td>
                  <label for="input_34_1"> Before 9 PM </label>
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q34_6What" value="1" title="1" id="input_34_1" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q34_6What" value="2" title="2" id="input_34_2" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q34_6What" value="3" title="3" id="input_34_3" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q34_6What" value="4" title="4" id="input_34_4" required="" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio validate[required]" type="radio" name="q34_6What" value="5" title="5" id="input_34_5" required="" />
                </td>
                <td>
                  <label for="input_34_5"> After 1 AM </label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_35">
        <label class="form-label form-label-top form-label-auto" id="label_35" for="input_35">
          Please list any allergies if any.
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input-wide jf-required">
          <textarea id="input_11" class="form-textarea validate[required]" name="q11_9What" cols="40" rows="6" data-component="textarea" required=""></textarea>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textarea" id="id_24">
        <label class="form-label form-label-top form-label-auto" id="label_24" for="input_24">
          Please let us know any other preferences you have.
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_24" class="form-input-wide jf-required">
          <textarea id="input_24" class="form-textarea validate[required]" name="q24_10What" cols="40" rows="6" data-component="textarea" required=""></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_25">
        <div id="cid_25" class="form-input-wide">
          <div id="text_25" class="form-html" data-component="text">
            <hr />
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:left;" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-simple_blue" data-component="button">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <input type="hidden" id="simple_spc" name="simple_spc" value="73397697979184" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "73397697979184-73397697979184";
  </script>
      </div>
  </div>
</form>
<script type="text/javascript">JotForm.ownerView=true;</script>
