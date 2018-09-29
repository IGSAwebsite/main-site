var images={
  "Festivals":["fest_6.jpg","fest_1.JPG","fest_2.JPG","fest_3.JPG","fest_4.JPG","fest_5.JPG","fest_7.jpg","fest_8.JPG","fest_9.jpg"],
  "Parties":["welcome_party_2018_1.jpg","welcome_party_2018_2.jpg","welcome_party_2018_3.jpg","welcome_party_2018_4.jpg","part_3.jpg","part_1.jpg","part_2.jpg","part_4.jpg","part_5.jpg"],
  "PR":["PR_1.jpg","PR_2.jpg","PR_3.jpg","PR_4.jpg","PR_5.jpg","PR_6.jpg","PR_7.JPG"]};
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
populate("Festivals");
