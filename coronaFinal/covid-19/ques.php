<!DOCTYPE html>
<html>
 <head>
   <title></title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM31ON1gyExkL0=" crossorigin="anonymous"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

 <div class="container-fluid" id="main">
   <div class="doctor">
      <h2 class="bg-success p-5 mt-5"><i" class="fa fa-medkit" aria-hidden="true"></i>Call your doctor</h2>
      <ul class="p-5 ">If you think you have been exposed to COVID-19 and develop a fever and symptoms, such as cough or difficulty breathing, call your healthcare provider for medical advice.
       <li class="mt-2"><strong>If you don’t feel well, stay home.</strong>Even if you have mild symptoms like a headache and runny nose, stay in until you’re better. This lets doctors focus on people who are more
         seriously ill and protects health care workers and people you might meet along the way. You might hear this called self-quarantine. Try to stay in a separate room away from other people in your
         home. Use a separate bathroom if you can.</li>
        <li><strong>Call the doctor if you have trouble breathing.</strong>You need to get medical help as soon as possible. Calling ahead (rather than showing up) will let the doctor direct you to the proper place, which may not be your doctor’s office. If you don’t have a regular doctor, call
          your local board of health. They can tell you where to go for testing and treatment.</li>
        <li><strong>Follow your doctor’s advice and keep up with the news on COVID-19.</strong> Between your doctor and health care authorities, you’ll get the care you need and information on how to prevent the virus from spreading.</li>
      </ul>
   </div>
 <button onclick="myFunction1()" id="the-button1"  data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">Where can I get tested for COVID-19?<span class="arrow-up" id="arrow"><i  class="fa fa-angle-down" aria-hidden="true" ></i></span></button>

 <div id="myDIV1" class="answer">
 <p class="ans">The process and locations for testing vary from place to place. Contact your state, local, tribal, or territorial department for more information, or reach out to a medical provider. State and local public health departments have received tests from CDC while medical providers
    are getting tests developed by commercial manufacturers. While supplies of these tests are increasing, it may still be difficult to find someplace to get tested. See<a href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/testing.html">Testing for COVID-19</a>for more information.</p>
 </div>
 <button onclick="myFunction2()" id="the-button2"  data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">How are people tested for COVID-19?<span class="arrow-up" id="arrow"><i  class="fa fa-angle-down" aria-hidden="true" ></i></span></button>

 <div id="myDIV2"  class="answer">
 <p class="ans">To be tested for COVID-19, a sample is typically collected from your nose and/or throat with a special swab at a designated collection location staffed by health care professionals. Currently, a health care professional swabbing the back of the nasal cavity
   through the nostril is the preferred choice. Alternatively, the health care professional could may swab the back of your throat, or for patients with symptoms of COVID-19 the sample could may be collected by swabbing the inside of the front of the nose. Depending on, among
   other things, the type of swab used, a health care professional may collect the sample, or you may be able to collect the sample yourself at the collection site under the supervision of health care personnel</p>
 </div>
 <button onclick="myFunction3()" id="the-button3"  data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">Can a person test negative and later test positive for COVID-19?<span class="arrow-up" id="arrow"><i  class="fa fa-angle-down" aria-hidden="true" ></i></span></button>

 <div id="myDIV3"  class="answer">
 <p class="ans">Using the CDC-developed diagnostic test, a negative result means that the virus that causes COVID-19 was not found in the person’s sample. In the early stages of infection, it is possible the virus will not be detected.
For COVID-19, a negative test result for a sample collected while a person has symptoms likely means that the COVID-19 virus is not causing their current illness.</p>
 </div>
 <button onclick="myFunction4()" id="the-button4"  data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">If I have recovered from COVID-19, will I be immune to it?<span class="arrow-up" id="arrow"><i  class="fa fa-angle-down" aria-hidden="true" ></i></span></button>

 <div id="myDIV4" class="answer">
 <p class="ans">CDC and partners are investigating to determine if you can get sick with COVID-19 more than once. At this time, we are not sure if you can become re-infected. Until we know more, continue to take steps to protect yourself and others.</p>
 </div>
 <button onclick="myFunction5()" id="the-button5"  data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">I've heard that the immune system produces different types of antibodies when a person is infected with the COVID-19 coronavirus. How do they differ? Why is this important?<span class="arrow-up" id="arrow"><i  class="fa fa-angle-down" aria-hidden="true" ></i></span></button>

 <div id="myDIV5" class="answer">
 <p class="ans">When a person gets a viral or bacterial infection, a healthy immune system makes antibodies against one or more components of the virus or bacterium.

The COVID-19 coronavirus contains ribonucleic acid (RNA) surrounded by a protective layer, which has spike proteins on the outer surface that can latch on to certain human cells. Once inside the cells, the viral RNA starts to replicate and also turns on the production of proteins, both of which allow the virus to infect more cells and spread throughout the body, especially to the lungs.

While the immune system could potentially respond to different parts of the virus, it's the spike proteins that get the most attention. Immune cells recognize the spike proteins as a foreign substance and begin producing antibodies in response.</p>
 </div>

</div>
<div class="quar" id="quarantine" >
  <h1 class="mx-auto">Self-Quarantine Guide</h1>
  <p>If you have been identified as a contact to someone diagnosed with COVID-19 or you have
   just arrived to New Hampshire, follow these guidelines for 14 days from your last potential
   exposure to COVID-19:</p>
   <h2 class="thermo"> How to self-monitor: <img src="thermo.jpg"></h2>
   <ol><h4>Step 1 Do health checks every morning and every night or anytime you feel like
    you might have a fever:</h4>
    <li>Take your temperature with a thermometer and/or that of family members who are
    being monitored and cannot do so for themselves. You should do this at least two times
    a day.</li>
    <li>Watch for other symptoms such as fever, respiratory illness (cough, sore throat, runny
    nose, shortness of breath), mild flu-like illness (fatigue, chills, muscle aches) and/or loss
    of taste or smell.</li>
    <li>Write your temperature and symptoms in the log.</li>
    <li><ul>Protect others!
         <li>Stay home from school and work</li>
         <li>Do not take public transportation, taxis, or ride-shares</li>
         <li>Do not have any visitors to your house during this time</li>
         <li>If you must have visitors, tell them that you are under quarantine</li>
         <li>Keep your distance from others (about 6 feet or 2 meters)</li>
       </ul></li>
    <li>. If you need to seek medical care for other reasons call ahead to your
    healthcare provider and tell them you are under COVID-19 quarantine.</li>
   </ol>
   <img class="float-left pr-5" src="image/prevention.png">
   <div class="down">
   <h4 >Step 2 If the health department asks you to report your temperature and any
   symptoms, please follow their instructions.</h4>
   <h4>Step 3 If you feel feverish, or develop respiratory illness (a cough, sore throat,
   runny nose or shortness of breath), mild flu-like illness (fatigue, chills, or muscle
   aches), or loss of taste or smell:</h4>
   <ol>
    <li>. Seek medical advice – call ahead before you go to a healthcare provider’s office or
   emergency room. Tell them you are under COVID-19 quarantine and about your
   symptoms.</li>
    <li>Cover your mouth and nose with a tissue or your sleeve (not your hands) when coughing
    or sneezing.</li>
    <li>Wash hands often with soap and water for at least 20 seconds to avoid spreading the
    virus to others. If soap and water are not readily available, you can use an alcohol-based
    hand sanitizer that contains 60%-95% alcohol. Always wash hands with soap and water
    if hands are visibly dirty.</li>
    <li><ol>Stay home and separate yourself from others while you are sick. Do not go out in public.
    Do not take public transportation, taxis, or ride-shares. This is known as isolating. You
    should isolate yourself from others that you live with. Stay home until:
            <li>At least 7 days have passed since your symptoms first appeared
                AND </li>
            <li>At least 72 hours (3 days) have passed since recovery (the resolution of fever
            without the use of fever-reducing medications with improvement of respiratory
             symptoms)</li>
           </ol></li>
  </div>
</div>





<script>
 function myFunction1() {
   var x = document.getElementById("myDIV1");
   if (x.style.display === "block") {
     x.style.display = "none";
   } else {
     x.style.display = "block";
   }
 }
 function myFunction2() {
   var x = document.getElementById("myDIV2");
   if (x.style.display === "block") {
     x.style.display = "none";
   } else {
     x.style.display = "block";
   }
 }
 function myFunction3() {
   var x = document.getElementById("myDIV3");
   if (x.style.display === "block") {
     x.style.display = "none";
   } else {
     x.style.display = "block";
   }
 }
 function myFunction4() {
   var x = document.getElementById("myDIV4");
   if (x.style.display === "block") {
     x.style.display = "none";
   } else {
     x.style.display = "block";
   }
 }
 function myFunction5() {
   var x = document.getElementById("myDIV5");
   if (x.style.display === "block") {
     x.style.display = "none";
   } else {
     x.style.display = "block";
   }
 }




document.getElementById('the-button1').addEventListener('click', function() {
var icon = this.querySelector('#arrow i.fa');
icon.classList.toggle('rotate');
});
document.getElementById('the-button2').addEventListener('click', function() {
var icon = this.querySelector('#arrow i.fa');
icon.classList.toggle('rotate');
});
document.getElementById('the-button3').addEventListener('click', function() {
var icon = this.querySelector('#arrow i.fa');
icon.classList.toggle('rotate');
});
document.getElementById('the-button4').addEventListener('click', function() {
var icon = this.querySelector('#arrow i.fa');
icon.classList.toggle('rotate');
});
document.getElementById('the-button5').addEventListener('click', function() {
var icon = this.querySelector('#arrow i.fa');
icon.classList.toggle('rotate');
});



</script>
</body>
</html>
