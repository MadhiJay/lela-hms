<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#Form {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: left;  
}
h2 {
	text-align: center;
	
}
h3{
	text-align: left;
	font-style: italic;
  color: #3cb371;
}
h4 {
	text-align: left;

}

input {
  padding: 10px;
  width: 50%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}


input.invalid {
  background-color: #ffdddd;
}


.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}


.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}


.step.finish {
  background-color: #4CAF50;
}
.btn-group button {
  background-color:#e5e5e5; 
  border: black;
  color: black;
  padding: 10px 25px;
  cursor: pointer; 
  float: left; 
}

.btn-group button:not(:last-child) {
  border-right: none; 
}


.btn-group:after {
  content: "";
  clear: both;
  display: table;
}


.btn-group button:hover {
  background-color: 0.9;
}

.custom-select {
  position: relative;
  font-family: Raleway;
}

.custom-select select {
  display: none; 
}

.select-selected {
  background-color: #e5e5e5;
}


.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}


.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}


.select-items div,.select-selected {
  color: #000000;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}


.select-items {
  position: absolute;
  background-color: #3c3c3c;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}


.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

.checkbox {
	position: relative;
	display: block;
	margin-top: 10px;
	margin-bottom: 20px;
}

.checkbox label {
	min-height: 21px;
	padding-left: 0;
	margin-bottom: 0;
	font-weight: 200;
	cursor: pointer;
}


</style>

<body>
<form id="Form" action="" method="POST" >


<div class="tab">
<h1>List your home with us & unlock your earning potential</h1>
<h2>Location</h2>
<h4>Travellers prefer to search by destination.so,where is your rental?</h4>
	
<label for="city"><h4>City</h4></label>
<input type="text" name="city" placeholder="start typing your city,town or village">

</div>

<div class="tab">
<h2>Property details</h2>
<h3>Key information</h3>
<h4>These basic details help us connect travellers with your home at the start of their search</h4>

<label for="title"><h4>Title for listing</h4></label>
<input type="text" name="title" size="100" placeholder="Say something about your property">



<h4>What type of space is it?</h4>
<div class="btn-group">
	<button>House</button>
	<button>Apartment</button>
	<button>Villa</button>
	<button>Cottage</button>
</div>


<h4>How many bedrooms does it have?</h4>
<div class="custom-select" style="width:400px;">
  <select>
    <option value="0">Choose bedrooms:</option>
    <option value="1">1 bedrooom</option>
    <option value="2">2 bedrooms</option>
    <option value="3">3 bedrooms</option>
    <option value="4">4 bedrooms</option>
    <option value="5">5 bedrooms</option>
    <option value="6">6 bedrooms</option>
    <option value="7">7 bedrooms</option>
    <option value="8">8 bedrooms</option>
    <option value="9">9 bedrooms</option>
    <option value="10">10 bedrooms</option>
    <option value="11">12 bedrooms</option>
    <option value="12">14 bedrooms</option>
    <option value="12">15 bedrooms</option>
    
  </select>
</div>


<h4>What type of beds does it have??</h4>
<div class="custom-select" style="width:400px;">
  <select>
    <option value="0">What type of bed?:</option>
    <option value="1">Super king,sleeps 2</option>
    <option value="2">King,sleeps 2</option>
    <option value="3">Double,sleeps 2</option>
    <option value="4">Single,sleep 1</option>
    <option value="5">Sofa bed</option>
    
    
  </select>
</div>

<h4>How many bathrooms does it have?</h4>
<div class="custom-select" style="width:400px;">
  <select>
    <option value="0">Choose batrooms:</option>
    <option value="1">1 bathrooom</option>
    <option value="2">2 bathrooms</option>
    <option value="3">3 bathrooms</option>
    <option value="4">4 bathrooms</option>
    <option value="5">5 bathrooms</option>
    <option value="6">6 bathrooms</option>
    <option value="7">7 bathrooms</option>
    <option value="8">8 bathrooms</option>
    <option value="9">9 bathrooms</option>
    <option value="10">10 bathrooms</option>
    <option value="11">12 bathrooms</option>
    <option value="12">14 bathrooms</option>
    <option value="12">15 bathrooms</option>
    
  </select>
</div>

<h3>Facilities and features</h3>
<h4>Here's where you can stand out to travellerssearching for specific features.</h4>

<h2><center>Travellers favourites</center></h2>
<div class="checkbox">
<input type="checkbox" name="f1" value="Ac">Air condition
<input type="checkbox" name="f2" value="wifi">Internet access
<input type="checkbox" name="f3" value="tv"> Cable/satellite TV
<input type="checkbox" name="f4" value="pool">Pool
<input type="checkbox" name="f5" value="pgrdn">Private garden
<input type="checkbox" name="f6" value="prkn">Parking space

	
</div>

<h3>Property description</h3>
<h4>Help guests get to know your place.what make it special.</h4>

<label>Tell us about your home</label>
<textarea name="cmt" cols="50" rows="20" autocomplete=""></textarea>



</div>

<div class="tab">
<h2>Prices,taxes,fees</h2>
<h4>You'll receive your payments in this currency.</h4>
<div class="custom-select" style="width:400px;">
  <select>
    <option value="0">Currency:</option>
    <option value="1">$ USD</option>
    <option value="2">$ CAD</option>
    <option value="3">£ GBP</option>
    <option value="4">€ EUR</option>
</select>
</div>


<label><h4>Minimum stay(Nights)</h4></label>
<input type="text" name="stay">

	
</div>
<div style="overflow:auto;">
    <div style="float:right;">

      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>


	
</form>

<script>


var currentTab = 0; 
showTab(currentTab); 

function showTab(n) {
 
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  
  fixStepIndicator(n)
}

function nextPrev(n) {
 
  var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;

  x[currentTab].style.display = "none";
  
  currentTab = currentTab + n;
    if (currentTab >= x.length) {
   
    document.getElementById("regForm").submit();
    return false;
  }
   showTab(currentTab);
}

function validateForm() {
  
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
    
    if (y[i].value == "") {
     
      y[i].className += " invalid";
      
      valid = false;
    }
  }
 
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; 
}

function fixStepIndicator(n) {
  
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  
  x[n].className += " active";
}




var x, i, j, selElmnt, a, b, c;

x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
 
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
 
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
       
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

document.addEventListener("click", closeAllSelect);
</script>



</body>
</html>