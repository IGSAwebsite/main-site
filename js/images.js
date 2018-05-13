var images={"PR":["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.JPG"],
  "Parties":["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg"],
  "Festivals":["1.JPG","2.JPG","3.JPG","4.JPG","5.JPG","6.jpg","7.jpg","8.JPG","9.jpg"]};
var img_path="img/event_images/";
var slideIndex = 1;
function populate(folder){
path=img_path+folder+'/';
imgs=images[folder];
var parent=document.getElementById("img-div");
var old_images=parent.getElementsByTagName("IMG");
for (index = old_images.length - 1; index >= 0; index--) {
    old_images[index].parentNode.removeChild(old_images[index]);
}
for(j in imgs){
    
img=path+imgs[j];
img_element=document.createElement("IMG");
img_element.setAttribute("class","mySlides");
img_element.setAttribute("src",img);
img_element.setAttribute("style","width:100%; height:56%");
parent.appendChild(img_element);
}
showDivs(slideIndex);
}


function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function openCity(evt, Name) {
  var i, x, tablinks;
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  evt.currentTarget.className += " w3-red";
  populate(Name);
}
populate("PR");
