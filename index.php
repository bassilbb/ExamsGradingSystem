<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <a class="navbar-brand" href="#">Examination    Grades   Caculation  for Final Year Students   </a>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="index.php">With this platform you can know the grade you have <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="about-us.php">Home</a>
          <a class="nav-item nav-link" href="rooms.php"></a>
         </div>
      </div> 
    </nav>

    </section>
    <title>Exams Grading System!</title>
   
    <script>

      function Total(){
         var sub1 = parseInt(document.getElementById("eng").value);
         var sub2 = parseInt(document.getElementById("mat").value);
         var sub3 = parseInt(document.getElementById("che").value);
         var sub4 = parseInt(document.getElementById("phy").value);
         var sub5 = parseInt(document.getElementById("bio").value);
         var sub6 = parseInt(document.getElementById("geo").value);
         var sub7 = parseInt(document.getElementById("gov").value);

         if(sub1>100|| sub2>100|| sub3>100|| sub4>100|| sub5>100|| sub6>100|| sub7>100){
           alert("Please Enter mark in range of 100");
         }
         else{
            var totol = sub1 + sub2 + sub3 + sub4 + sub5 + sub6 + sub7;
            document.getElementById("total").innerHTML = "English marks :"+sub1+ "<br> Mathmatics marks :"+sub2+ " <br> Chemistry marks :"+sub3+ " <br> physics marks :"+sub4+ " <br> Biology marks :"+sub5+
             " <br> Geography marks :"+sub6+ " <br> Government marks "+sub7+  " <br>............................................. <br> Your Totals  Marks are:"+totol;
             
         }
      }

      function Average(){
         var sub1 = parseInt(document.getElementById("eng").value);
         var sub2 = parseInt(document.getElementById("mat").value);
         var sub3 = parseInt(document.getElementById("che").value);
         var sub4 = parseInt(document.getElementById("phy").value);
         var sub5 = parseInt(document.getElementById("bio").value);
         var sub6 = parseInt(document.getElementById("geo").value);
         var sub7 = parseInt(document.getElementById("gov").value);

         
         if(sub1>100|| sub2>100||  sub3>100|| sub4>100|| sub5>100|| sub6>100|| sub7>100){
           alert("Please Enter mark in range of 100");
         }
         else{
          var total = sub1 + sub2 + sub3 + sub4 + sub5 + sub6 + sub7;
          var Ave=total/7;
          document.getElementById("average").innerHTML="Your average marks is:"+Ave;
         }

      }

      function grade(){
         var sub1 = parseInt(document.getElementById("eng").value);
         var sub2 = parseInt(document.getElementById("mat").value);
         var sub3 = parseInt(document.getElementById("che").value);
         var sub4 = parseInt(document.getElementById("phy").value);
         var sub5 = parseInt(document.getElementById("bio").value);
         var sub6 = parseInt(document.getElementById("geo").value);
         var sub7 = parseInt(document.getElementById("gov").value);
        
         if(sub1>100|| sub2>100|| sub3>100|| sub4>100|| sub5>100|| sub6>100|| sub7>100){
           alert("Please Enter mark in range of 100");
         }
         else{
          var total = sub1 + sub2 + sub3 + sub4 + sub5 + sub6 + sub7;
          var Ave=total/7;

          if(Ave>=80 && Ave<=100){
            document.getElementById("grade").innerHTML="Your grades is A";
          }
          else if(Ave>=75&& Ave<=80){
            document.getElementById("grade").innerHTML="Your grades is B+";
          }
          else if(Ave>=70 && Ave<=75){
            document.getElementById("grade").innerHTML="Your grades is B";
          }
          else if(Ave>=65 && Ave<=70){
            document.getElementById("grade").innerHTML="Your grades is C+";
          }
          else if(Ave>=60 && Ave<=65){
            document.getElementById("grade").innerHTML="Your grades is C";
          }
          else if(Ave>=55 && Ave<=60){
            document.getElementById("grade").innerHTML="Your grades is D+";
          }
          else if(Ave>=50 && Ave<=55){
            document.getElementById("grade").innerHTML="Your grades is E";
          }
          else if(Ave>=40 && Ave<=50){
            document.getElementById("grade").innerHTML="Your grades is F";
          }

         }

      }
    </script>

  </head>
  <body>
    <div id="main">
        <div  id="head"><h1>Exams Grading System</h1></div>

        <label>EnglishLang  </label><input type="text" id="eng"><br>
        <label>Mathmatics   </label><input  type="text" id="mat"><br>
        <label>Chemistries </label> <input type="text" id="che"><br>
        <label>Physicstries   </label> <input type="text" id="phy"><br>
        <label>Biologyiesss    </label> <input type="text" id="bio"><br>
        <label>Geographys </label> <input type="text" id="geo"><br>
        <label>Government</label>  <input type="text" id="gov"><br>
        <br>
        <button  class="btn1" onclick="Total()" >Total</button>
        <button  class="btn2" onclick="Average()">Average</button>
        <button  class="btn3" onclick="grade()">Grade</button>
    </div>
    <div id="result">
      <div id="head1"><h1>Total</h1></div>
      <div id="total">

      </div>

      <div id="head2"><h1>Average</h1></div>
      <div id="average">

      </div>

      <div id="head3"><h1>Grade</h1></div>
      <div id="grade">

      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>