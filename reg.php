	<?php 
	/*
	Template Name: reg
	Template Post Type: page
	*/
	?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package natifico
 */

get_header();
?>






<div class="topslider-2 page-blog-bg-color">
        <div class="topslider2-1180" >
                <h1>Register</h1>  
        </div> 
  </div>
<!-- КонецВверхний слайдер-->


<div class="reg-big-bg">
<div class="reg-form">
    <div>
        <p class="reg-input"><input type="email" placeholder="Your Name"></p>
        <p class="reg-input"><input type="email" placeholder="Your E-mail"></p>
        <p class="reg-input"><input type="email" placeholder="Password"></p>
        <p class="reg-input"><input type="email" placeholder="Repeat Password"></p>
        <p class="reg-input"><input type="email" placeholder="Phone"></p>
    </div>
    <div>
        <p class="reg-input"><input type="email" placeholder="Company Name"></p>
        <p class="reg-input"><input type="email" placeholder="Skype"></p>
        <p class="reg-input"><input type="email" placeholder="Adress"></p>
        <p class="reg-input"><input type="email" placeholder="ZIP Code"></p>
        <p class="reg-input"><input type="email" placeholder="Country"></p>
    </div>
   
    </div>
    <div class="reg-two-column">
<div class="two-column reg-two-column">

            
    <div class="reg-single-col">
      <div class="styled-input-container styled-input--square">
    
    
     
       
        <div class="styled-input-single">
          <input type="checkbox" name="fieldset-6" id="checkbox2-example-five" />
          <label class="pravilo " for="checkbox2-example-five"><span class="reg-pravilo">I agree with</span> <a href=""> Terms and Conditions</a></label>
        </div>
        <div class="styled-input-single">
            <input type="checkbox" name="fieldset-6" id="checkbox2-example-five" />
            <label class="pravilo " for="checkbox2-example-five"><span class="reg-pravilo">I hereby consent and allow the use of my and/or my company's information, including sharing with a third party, to assess, detect, prevent or otherwise enable detection and prevention of malicious, invalid or unlawful activity and/or general fraud prevention.</label>
          </div>
      </div>
    </div>
  </div>


<div class="reg-pass-recovery">
    <div class="pass-rec-button"><img src="../images/kapcha.png" alt=""></div>
    <div class="pass-send"><button>Registration</button></div>
</div>
</div>
</div>




<?php
get_sidebar();
get_footer();
