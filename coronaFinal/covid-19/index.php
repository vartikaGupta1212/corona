<!DOCTYPE html>
<html lang="en" >
  <head>
      <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM31ON1gyExkL0=" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body onload="fetch()">
    <nav class="navbar navbar-expand-sm  nav-style">

       <a class="navbar-brand" href="#">COVID-19</a>


       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link" href="covid19.php">What is COVID-19</a>
         </li>

         <li class="nav-item">
           <a class="nav-link" href="prevention.php">Prevention</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="">Analysis</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#contactid">contact</a>
         </li>



       </ul>
    </nav>
    <div class="d-flex justify-content-around align-items-center">
      <div class="text-primary">
        <h1 class ="count">4,494,389</h1>
        <p>Confirmed</p>
      </div>
      <div class="text-success">
        <h1 class ="count">75,062</h1>
        <p>Deaths</p>
      </div>
      <div class="text-danger">
        <h1 class ="count">3,490,908</h1>
        <p>Recovered</p>
      </div>
      <div class="text-primary">
        <h1 class ="count">919018 </h1>
        <p>Active Cases</p>
      </div>
    </div>
  <section class="corona-update container-fluid">
    <div class="mb-3">
      <h3 class="text-center text-uppercase">covid-19 updates</h3>
    </div>
  </section>
    <div class="table-responsive">

      <table class=" table table-bordered table-striped text-center px-5" id="tbval">
        <tr>
          <th>Country</th>
          <th>TotalConfirmed</th>
          <th>TotalRecovered</th>
          <th>TotalDeaths</th>
          <th>NewRecovered</th>
          <th>NewDeaths</th>
        </tr>
      </table>
    </div>
  <div class="container-fluid sub-section py-5 " id="contactid">
    <div class="section-header text-center mb-5 mt-4">
      <h1>6 Steps Prevention Against Corona</h1>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
        <form action="" method="POST">
          <div class="form-group">
            <label >Name</label>
              <input type="text" class="form-control" name="username" placeholder="name" required>
          </div>
         <div class="form-group">
           <label >Email address</label>
             <input type="email" class="form-control"  name="email" placeholder="email" required>
         </div>
         <div class="form-group">
           <label >Mobile</label>
             <input type="number" class="form-control"  name="mobile" placeholder="mobile" required>
         </div>
         <div class="form-group">
           <label>Select Symptoms</label> <br>
            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
              <label class="custom-control-label" for="customcheckbox1">Cold</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
              <label class="custom-control-label" for="customcheckbox2">Fever</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
              <label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
              <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
            </div>
          </div>
         <div class="form-group">
          <label >Message</label>
           <textarea class="form-control" name="msg" rows="3"></textarea>
         </div>
         <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
       </form>
      </div>
     </div>
     <div class="container scrolltop float-right pr-5">
      <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
     </div>



    <script type="text/javascript">
      $('.count').counterUp({
       delay:10,
       time:3000
      });
      function fetch(){
      $.get("https://api.covid19api.com/summary",
       function(data){
        // console.log(data['Countries'].length)
        var tbval=document.getElementById('tbval');
        for(var i=1;i<data['Countries'].length;i++){
          var x=tbval.insertRow();
          x.insertCell(0);
          tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
          tbval.rows[i].cells[0].style.background='#7a4a91';
          tbval.rows[i].cells[0].style.color='#fff';

          x.insertCell(1);
          tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
          tbval.rows[i].cells[1].style.background='#4bb7d8';

          x.insertCell(2);
          tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
          tbval.rows[i].cells[2].style.background='#f36e23';

          x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
          tbval.rows[i].cells[3].style.background='#4bb7d8';

          x.insertCell(4);
          tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
          tbval.rows[i].cells[4].style.background='#9cc850';

          x.insertCell(5);
          tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewDeaths'];
          tbval.rows[i].cells[5].style.background='#f36e23';
        }
       })
      }
      mybutton=document.getElementById("myBtn");
      window.onscroll=function(){
        scrollFunction()
      };
      function scrollFunction(){
        if(document.body.scrollTop>100||document.documentElement.scrollTop>100)
        {
          mybutton.style.display="block";
        }
        else{
          mybutton.style.display="none";
        }
      }
      function topFunction(){
        document.body.scrollTop=0;
        document.documentElement.scrollTop=0;

      }



    </script>
  </body>
</html>

<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
  $username=mysqli_real_escape_string($con,$_POST['username']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
  $symp=$_POST['coronasym'];
  $msg=mysqli_real_escape_string($con,$_POST['msg']);
  $chk="";
  foreach($symp as $chk1){
    $chk .= $chk1.",";
  }
  $insertquery="insert into coronacase(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$msg')";
  $query= mysqli_query($con,$insertquery);

if($query){
  ?>
  <script>
  alert("inserted");
  </script>
  <?php
}else{

 ?>
 <script>
 alert("not inserted");
 </script>
 <?php
}
}
 ?>
