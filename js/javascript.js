window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


var i = 0;
var txt = ' Here you can know all about Marriage!!! '; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

function textClear(){
	document.getElementById("demo").innerHTML = "";
}

function openContent(evt, dataName) {
  var i, tabcontent, tablinks;
  document.getElementById('tabber').style.display = "block";
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(dataName).style.display = "block";
    evt.currentTarget.className += " active";
}


function myButton(){
  var answers = [0,1,1,0,1,1]
  var r = document.forms[1];
  var i;
  var percent = document.getElementById("html");
  var percent2 = document.getElementById("html2")
  var width = percent.offsetWidth;
  var newWidth = width + 25;
  var oldWidth = width - 25;
  var showPercent = 0;
  var id1=1; 
  var id2=2;
  for(i=0; i<r.length; i++){
    var qName = document.getElementsByName('opt'+i+'[]');
     for(var j=0; j<qName.length; j++){
      if(qName[j].checked){
        document.getElementById('opt_'+(i+ id1)).disabled = "true";
        id1++;
        document.getElementById('opt_'+(i+ id2)).disabled = "true"; 
        id2++;
          if(qName[j].value == answers[i]){
          percent.style.width = width + 40 + "px";
          showPercent = showPercent+10;
          }else{
          percent.style.width = width - 40 + "px";
          if(showPercent>0){
            showPercent = showPercent-10;
          }else{
          showPercent=0;
        }
        }
        if(showPercent>0){
          percent.innerHTML = showPercent+"%";
          percent2.innerHTML = showPercent+"%";
        }
        else{
          percent.innerHTML = "0%";
          percent2.innerHTML = "0%";

        }

      
        }

      }
      
    }
}


$(".radio-group__option").change(updateLog);