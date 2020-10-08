<!Doctype html>
<html>
<head>
<title>Calculation Programs of Java script</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrinl-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/814f02a415.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="jsprogstyled.css" type="text/css">
</head>
<body id="BGT">
<?php
   include '../redirect.php';
  ?>
	<head>
		<h2 class="text-center text-white heading "> Calculation Programs made thorugh Javascript </h2>
	</head>
	<main class="container-fluid">
		<div class="row rowstyled">
            <div class="col-md-3 dips intrestcalc"  data-toggle="collapse" data-target="#interest">
             	<h4> Simple Interest Calculator </h4>
            </div>
            <div class="col-md-3 dips Examcalcy" data-toggle="collapse" data-target="#exam">
             	<h4> Exam Grades calculator </h4>
            </div>
            <div class="col-md-3 dips Age " data-toggle="collapse" data-target="#calculate">
             	<h4> Age Identify </h4>
            </div>
            <div class="col-md-3 dips Greetings" data-toggle="collapse" data-target="#Greet">
             	<h4> Greetings </h4>
            </div>
        </div>
	</main>
  <br>
  <br>
  <section class="container-fluid">
    <div class="row styliedrow">
            <div class="col-md-3 dips temp" onclick="bgtemp()" data-toggle="collapse" data-target="#degree">
              <h4> Temperature Conversion </h4>
            </div>
            <div class="col-md-3 dips squares" onclick="bgSqrt()" data-toggle="collapse" data-target="#sqr">
              <h4> Find Square and Double </h4>
            </div>
            <div class="col-md-3 dips cube " onclick="bgcub()" data-toggle="collapse" data-target="#cub">
              <h4> Tables And cube </h4>
            </div>
            <div class="col-md-3 dips count" onclick="vchange()" data-toggle="collapse" data-target="#cont">
              <h4> Vowel count </h4>
            </div>
        </div>
  </section>
    <br>
    <br>
	<section class="container">
		<div class="collapse" id="interest">
			<div class="simple">
				<form class="pform">
					<label> Enter principal Amount: </label>
					<input type="text" placeholder="Enter Amount" id="p">
					<br>
					<br>
					<label> Enter interest rate (in %): </label>
					<input type="text" placeholder="Rate of interest" id="r">
					<br>
					<br>
					<label> Enter Number of years: </label>
					<input type="text" placeholder="No. of years" id="y">
					<br>
					<br>
					<a onclick="intrest()" class="clk"> Let's see</a>
			    </form>
				<p id="result"></p>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="collapse" id="exam">
			<div class="exm">
				<div class="title">
				  <h3> Exam Grades <br><span class="font"> Calcy </span> </h3>
			    </div>
			   <form class="fstyle">
				  <input type="text" placeholder="Enter Total  Full Marks" id="Fullmarks">
    		      <br>
    		      <br> 
    		      <input type="text" placeholder="Marks1" id="Marks1">
    		      <br>
    		      <br> 
    		      <input type="text" placeholder="Marks2" id="Marks2">
    		      <br>
    		      <br> 
    		      <input type="text" placeholder="Marks3" id="Marks3">
    		      <br>
    		      <br> 
    		      <input type="text" placeholder="Marks4" id="Marks4">
    		      <br>
    		      <br> 
    		      <input type="text" placeholder="Marks5" id="Marks5">
    		      <br>
    		      <br>
    		      <a onclick="grade()" class="clk">  Show results </a> 
    	        </form>
    	
    	        <div class="text">
    	          <p id="Show"> </p>
                </div>
            </div>
        </div>
	</section>

	<section class="container">
		<div class="collapse" id="calculate">
			<div class="Calcy">
				<form>
					<label> Enter your Age: </label>
					<input type="text" placeholder="Age" id="Age">
					<br>
					<a onclick="Adult()" class="clk"> Let's see </a>
				</form>
				   <p id="results"></p>
			</div>
		</div>
	</section>
	<section class="container ">
		<div class="collapse" id="Greet">
			<div class="waqt">
				<div id="clock">
		           <h2> The TIME IS HERE </h2>
			       <div id="time">
				      <div>
				      	<span id="hour">00</span><span>Hours</span>
				      </div>
				      <div>
				      	<span id="minutes">00</span><span>minutes</span>
				      </div>
				      <div>
				      	<span id="seconds">00</span><span>seconds</span>
				      </div>
			        </div>
			        <br>
			        <P id="day"> <span id="text"> </P>
                    <br>
			        <a onclick="Greetme()" class="btn gbtn"> Greet Me </a>
	            </div>
			</div>
	    </div>
	</section>
 <!-- temp code-->
  <section class=" container rature">
    <div class="collapse"  id="degree">
      <div class="deg">
        <form>
          <label> Enter Temperature </label>
          <input type="text" placeholder="Enter deg" id="T">
          <br>
          <br>
         <!-- <a onclick = "celcius()" class="clk" > Convert to Celsius </a>-->
          <a onclick = "Farehn()" class="clk" > Convert to Farehnite </a>
          <a onclick = "Kelvin()" class="clk" > Convert to kelvin </a>
          <br>
        </form>
          <br>
        <p id="tempresult"> </p>
      </div>
    </div>
  </section>

  <!--Square and double code-->
  <section class=" container rature">
    <div class="collapse"  id="sqr">
      <div class="Num">
        <form>
          <label> Enter Number </label>
          <input type="text" placeholder="Enter Number" id="N">
          <br>
          <br>
         <!-- <a onclick = "celcius()" class="clk" > Convert to Celsius </a>-->
          <a onclick = "Double()" class="clk" > Get Double </a>
          <a onclick = "Square()" class="clk" > Get square </a>
          <br>
        </form>
          <br>
        <p id="Numresult"> </p>
      </div>
    </div>
  </section>

   <!--Tables and cube code-->
  <section class=" container rature">
    <div class="collapse"  id="cub">
      <div class="cub">
        <form>
          <label> Enter Number </label>
          <input type="text" placeholder="Enter Number" id="C">
          <br>
          <br>
         <!-- <a onclick = "celcius()" class="clk" > Convert to Celsius </a>-->
          <a onclick = "Table()" class="clk" > Get Table </a>
          <a onclick = "Cube()" class="clk" > Get Cube </a>
          <br>
        </form>
          <br>
        <p id="cubresult"> </p>
      </div>
    </div>
  </section>
    
  <!--vowel count-->
  <section class=" container rature">
    <div class="collapse"  id="cont">
      <div class="vow">
        <form>
          <label> Enter Word </label>
          <input type="text" placeholder="Enter your word" id="V">
          <br>
          <br>
          <a onclick = "vowel()" class="clk" > Give me length </a>
          <br>
        </form>
          <br>
        <p id="vowresult"> </p>
      </div>
    </div>
  </section> 

	<!--intrest script-->
	<script type="text/javascript">
		function intrest(){
			var p = document.getElementById("p").value;
			var r = document.getElementById("r").value;
			var t = document.getElementById("y").value;

      var f = p*r*t/100;
      alert("Your intrest will be " +f+ "")
			document.getElementById('result').innerHTML = "Your intrest will be" +f+ "";
		}
	</script>
	<!--collapse-->
	<script type="text/javascript">
    	$('.dips').click(function(){
    		$('.collapse').collapse('hide');
    	});
    </script>
    <!-- Exam script-->
    <script type="text/javascript">
     function grade(){
       var M1 = document.getElementById('Marks1').value;
       var M2 = document.getElementById('Marks2').value;
       var M3 = document.getElementById('Marks3').value;
       var M4 = document.getElementById('Marks4').value;
       var M5 = document.getElementById('Marks5').value;
       var full = document.getElementById('Fullmarks').value;
       var G = " ";    
       var Total = parseFloat(M1) + parseFloat(M2) + parseFloat(M3) + parseFloat(M4) + parseFloat(M5);
       var perc = (Total/full) * 100;

       if (perc <=100 && perc >= 80){
       	G = 'A';
       }else if (perc <=79.9 && perc >=  60){
       	G = 'B';
       }else if (perc <=59.9 && perc >=49){
       	G = 'C';
       }else {
       	G = 'D';
       }

       if  (perc >=40){
       	alert ('Hooray you are pass');
       	document.getElementById('show').innerHTML = ` out of 500 your ${perc} % and Your Grade is ${G}.
       	<br> You are Pass. `
       }
       	else{
       	alert('Sorry you are fail');
       	document.getElementById('show').innerHTML = `out of 500 your ${perc} % and Your Grade is ${G}.
       	<br> You are Pass. ` 
       }
     }
  </script>
  <!--vote script-->
<script type="text/javascript">
  	function Adult(){
  	var A = document.getElementById('Age').value;
  	if (A>=18) {
  		Swal.fire(
         'Nice!',
         'You can Vote now!',
         'success'
);
  	}else{
  		swal.fire('sorry', 'you are still Children', 'warning');
  	}
   }
  </script>
  <!-- Clock javascript-->
    <script type="text/javascript">
    	function clock(){
    		var hours = document.getElementById('hour');
    		var minutes = document.getElementById('minutes');
    		var seconds = document.getElementById('seconds');
    		var day = document.getElementById('day');
            var date = new Date();
            var month = date.getMonth();
            var d = date.getDate();
            var y = date.getYear();

    		var h = new Date().getHours();
    		var M = new Date().getMinutes();
    		var S = new Date().getSeconds();
    		var dat = new Date().getDay();
    		var din = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
    		var s = din[dat];

    		hours.innerHTML = h;
    		minutes.innerHTML = M;
    		seconds.innerHTML = S;
    		day.innerHTML = "today is: "+s+" <br> date is: "+d+"-"+month+"-"+y+"";
            
    	}
    	var time = setInterval(clock,1000);

    	function Greetme(clock){
    		var h = new Date().getHours();
    		if (h>=12 && h<16){
    			alert('Good Afternoon');
    		}else if (h>=16 && h<=20) {
    			alert('Good Evening');
    		}else if (h>=20 && h<24) {
    			alert('Good night');
    		}else{
    			alert('Good morning');
    		}
    	}
    </script>

    <!-- temp script-->
    <script type="text/javascript">
      function Farehn(){
        var x = document.getElementById('T').value;
        var y = parseFloat(x) * 9/5 + 32;
        document.getElementById('tempresult').innerHTML ="" +x+"°C =" +y+  "Farehnite";
      }

      function Kelvin(){
        var a = document.getElementById('T').value;
        var b = parseFloat(a) + 273.15;
        document.getElementById('tempresult').innerHTML = ""+a+"°C =" +b+"kelvin";
      }
        
      /*function celcius(){
        var c = document.getElementById('T').value;
        var d = parseFloat(c) * 9/5 + 32;
        document.getElementById('tempresult').innerHTML = ""+c+"°C =" +d+"Celsius"; 
      }*/

      function bgtemp(){
        document.getElementById('BGT').style.background = "#26de81";
      } 
    </script>
    <!--Sqaure script-->
    <script type="text/javascript">
      function Double(){
        var a = document.getElementById('N').value;
        var b = parseFloat(a) * 2;
        swal.fire(
          'The double of ' +a+ ' is',
          '' +b+ '',
          'success',
        );
        document.getElementById('Numresult').innerHTML = "The Double of " +a+ " is = " +b+ ""; 
      }

      function Square(){
        var x = document.getElementById('N').value;
        var y = parseFloat(x) * document.getElementById('N').value;
        var z = Math.sqrt(x);
        swal.fire(
          'Square of ' +x+ ' is',
          '' +y+ '',
          'success'
          )
        document.getElementById('Numresult').innerHTML = "The Square of "  +x+ " is =" +y+ " <br> The Square root is =  "+z+"";
      }

       function bgSqrt(){
        document.getElementById('BGT').style.background = "#eb2f06";
      } 
    </script>

    <!-- table and cube script-->
    <script type="text/javascript">
      function Table(){
        var tab = document.getElementById('C').value;
        var p;
        for (p=1; p<=10; p++){
         document.getElementById('cubresult').innerHTML += tab+" * "+p+ " = " + tab*p + "<br>"
        }
      }

      function Cube(){
        var c = document.getElementById('C').value;
        var d = parseFloat(c) * parseFloat(c) * parseFloat(c);
        var e = Math.cbrt(c);
        swal.fire(
          'Cube of ' +c+ ' is',
          '' +d+ '',
          'success')
          document.getElementById('cubresult').innerHTML = "The Cube of " +c+ " is = " +d+ "<br> and the Cube root is = " +e+ ""; 
      }  

      function bgcub(){
        document.getElementById('BGT').style.background = "#0c2461";
      }
    </script>

    <script type="text/javascript">
      function vowel(){
        var word = document.getElementById('V').value;
        var count = 0;
        var vowels = "aeiou";
        var char = document.getElementById('V').value.length;

        for (var i = 0; i< word.length; i++) {
          if (vowels.indexOf(word[i].toLowerCase()) > -1) {
            count++;
          }
        }
        document.getElementById('vowresult').innerHTML = "This sentence has "+count+" vowels in it. <br> and have " +char+ "  characters in it."
      }
      function vchange(){
       document.getElementById('BGT').style.background = "#f8c291" 
      }
      </script>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body> 
</html>
