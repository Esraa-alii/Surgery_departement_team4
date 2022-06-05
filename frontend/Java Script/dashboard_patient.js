function toggleText(){
  var x = document.getElementById("details");
  var y = document.getElementById("no_op")
  var z = document.getElementById("report")
  if (x.style.display === "none") {
  } else {
    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "block";
  }
}
function viewReport(){
var w = document.getElementById("repo")
if (w.style.display === "none") {
//   x.style.display = "block";
} else {
  w.style.display = "block";
 
}
}

function showcardio(){
var card = document.getElementById("cardio_doc")
var title=document.getElementById("do")
var urology = document.getElementById("urology_doc")
// var  Obstetrics = document.getElementById("Obstetrics_docs")
// var  neuro = document.getElementById("neurological_docs")
// var  dental = document.getElementById("dental_doc")
// var ortho=document.getElementById("Orthopaedic_doc")
var btn=document.getElementById("Bnow")

if (card.style.display === "none") {
  } else {
  
  //  urology.remove();
    card.style.display = "block";
    title.style.display = "block";
    btn.style.display = "block";

  }
  }

function showurology(){
var card = document.getElementById("cardio_doc")
var title=document.getElementById("do")
var urology = document.getElementById("urology_doc")
// var  Obstetrics = document.getElementById("Obstetrics_docs")
// var  neuro = document.getElementById("neurological_docs")
// var  dental = document.getElementById("dental_doc")
// var ortho=document.getElementById("Orthopaedic_doc")
var btn=document.getElementById("Bnow")

if (urology.style.display === "none") {
  } else {
    card.remove();
    // neuro.remove();
    // dental.remove();
    // ortho.remove();
    
    // Obstetrics.remove();
    title.style.display = "block";
    urology.style.display = "block";
    btn.style.display = "block";


  }
}

function showObstetrics(){
// var card = document.getElementById("cardio_doc")
var title=document.getElementById("do")
// var urology = document.getElementById("urology_doc")
var  Obstetrics = document.getElementById("Obstetrics_docs")
// var  neuro = document.getElementById("neurological_docs")
var  dental = document.getElementById("dental_doc")
// var ortho=document.getElementById("Orthopaedic_doc")
var btn=document.getElementById("Bnow")

if (Obstetrics.style.display === "none") {
} else {
  //  urology.remove();
//     neuro.remove();
    dental.remove();
//     ortho.remove();
//     card.remove();
    title.style.display = "block";
    Obstetrics.style.display = "block";
    btn.style.display = "block";

  
}

}
function neuroshow(){
// var card = document.getElementById("cardio_doc")
var title=document.getElementById("do")
var urology = document.getElementById("urology_doc")
// var  Obstetrics = document.getElementById("Obstetrics_docs")
var  neuro = document.getElementById("neurological_docs")
// var  dental = document.getElementById("dental_doc")
// var ortho=document.getElementById("Orthopaedic_doc")
var btn=document.getElementById("Bnow")

if (neuro.style.display === "none") {
} else {
    urology.remove();
    // Obstetrics.remove();
    // dental.remove();
    // ortho.remove();
    // card.remove();
    title.style.display = "block";
    neuro.style.display = "block";
    btn.style.display = "block";


}
}
function showOrthopaedic_doc(){
// var card = document.getElementById("cardio_doc")
var title=document.getElementById("do")
// var urology = document.getElementById("urology_doc")
// var  Obstetrics = document.getElementById("Obstetrics_docs")
var  neuro = document.getElementById("neurological_docs")
// var  dental = document.getElementById("dental_doc")
var ortho=document.getElementById("Orthopaedic_doc")
var btn=document.getElementById("Bnow")

if (ortho.style.display === "none") {
} else {
  // urology.remove();
  // Obstetrics.remove();
  neuro.remove();
  // dental.remove();
  // card.remove(); 
  ortho.style.display = "block";
  title.style.display = "block";
  btn.style.display = "block";

}
}
function dentalshow(){
// var card = document.getElementById("cardio_doc")
var title=document.getElementById("do")
// var urology = document.getElementById("urology_doc")
// var  Obstetrics = document.getElementById("Obstetrics_docs")
// var  neurشo = document.getElementById("neurological_docs")
var  dental = document.getElementById("dental_doc")
var ortho=document.getElementById("Orthopaedic_doc")
var btn=document.getElementById("Bnow")

if (dental.style.display === "none") {
} else { 
  // urology.remove();
  // Obstetrics.remove();
  // neuro.remove();
  ortho.remove();
  // card.remove();
  title.style.display = "block";
  dental.style.display = "block";
  btn.style.display = "block";

}
}