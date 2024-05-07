let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

// to implement slides in HTML
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("myslide");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }

  slides[slideIndex-1].style.display = "block";  
}

//to do temperature conversion
function temperatureConverter() {
    valNum =document.getElementById("UserInput").value;
    let fromtemp=document.getElementById("From").value;
    let totemp=document.getElementById("to").value;
    let output=0.00;
    if( fromtemp=="Fahrenheit"&& totemp=="Celsius"){
        output=   (5/9) * (valNum - 32);

    }
    else if( fromtemp=="Kelvin"&& totemp=="Rankine"){
        output=  valNum * 9/5;
    }else if( fromtemp=="Celsius"&& totemp=="Fahrenheit"){
        output=   parseFloat(valNum * 9/5) + 32

    }else if( fromtemp=="Fahrenheit"&& totemp=="Kelvin"){
        output=   parseFloat(valNum - 32) * 5/9 + 273.15
    }
    else if( fromtemp=="Fahrenheit"&& totemp=="Rankine"){
        output=   parseFloat(valNum) + 459.67;
    }
    else if( fromtemp=="Celsius"&& totemp=="Kelvin"){
        output=   parseFloat(valNum) + 273.15;
    }
    else if( fromtemp=="Celsius"&& totemp=="Rankine"){
        output=   (parseFloat(valNum) + 273.15) * 9/5;
    }
    else if( fromtemp=="Kelvin"&& totemp=="Celsius"){
        output=   parseFloat(valNum) - 273.15;
    }
    else if( fromtemp=="Kelvin"&& totemp=="Fahrenheit"){
        output=   (parseFloat(valNum)- 273.15) * 9/5 + 32;
    }
    else if( fromtemp=="Rankine"&& totemp=="Kelvin"){
        output=   parseFloat(valNum) / 1.8;
    }
    else if( fromtemp=="Rankine"&& totemp=="Celsius"){
        output=   (parseFloat(valNum) - 32) * 5/9;
    }
    else if( fromtemp=="Rankine"&& totemp=="Fahrenheit"){
        output=   parseFloat(valNum)- 459.67;
    }
    
    document.getElementById("outputVal").innerHTML=output;
  }

  //to change style sheet based on toggle button
  function changeToggleStyle() {
    var style = document.getElementById('style');
    var currentpage=style.href
    if (currentpage.includes('titlepage.css')) {
    style.href = 'styles/darktheme.css';
    } else {
       style.href = 'styles/titlepage.css';
    }
 }

 // to change the style sheet based on time
 window.addEventListener('load', function() {
    var currentTime = new Date().getHours();
    
    if (currentTime >= 18 || currentTime < 6) {
      // Night mode (from 6 PM to 6 AM)
      style.href = 'styles/darktheme.css';
    }
  });