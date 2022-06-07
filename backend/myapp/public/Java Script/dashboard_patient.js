function toggleText() {
  var x = document.getElementById("details");
  var y = document.getElementById("no_op")
  var z = document.getElementById("report")
  if (x.style.display === "none") {
    //   x.style.display = "block";
  } else {
    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "block";
  }
}
function viewReport() {
  var w = document.getElementById("repo")
  if (w.style.display === "none") {
    //   x.style.display = "block";
  } else {
    w.style.display = "block";

  }
}
function showcardio() {
  var card = document.getElementById("cardio_doc");
  var title = document.getElementById("do");
  var urology = document.getElementById("urology_doc");

  card.style.display = "block";
  title.style.display = "block";
  urology.style.display = "none";
  Obstetrics.style.display = "none";
  neuro.style.display = "none";
  dental.style.display = "none";
  ortho.style.display = "none";

  // document.getElementById(cardio_doc).innerHTML = "";
  // var urology = document.getElementById("urology_doc")
  // var  Obstetrics = document.getElementById("Obstetrics_docs")
  // var  neuro = document.getElementById("neurological_docs")
  // var  dental = document.getElementById("dental_doc")
  // var ortho=document.getElementById("Orthopaedic_doc")


  // if (card.style.display === "none") {
  //   } else {
  //     card.style.display = "block";
  //     title.style.display = "block";
  // urology.style.display = "none";
  // Obstetrics.style.display = "none";
  // neuro.style.display = "none";
  // dental.style.display = "none";
  // ortho.style.display = "none";

}

function showurology() {
  // var card = document.getElementById("cardio_doc")
  var urology = document.getElementById("urology_doc");
  var title = document.getElementById("do");
  var card = document.getElementById("cardio_doc");

  urology.style.display = "block";
  title.style.display = "block";
  Obstetrics.style.display = "none";
  neuro.style.display = "none";
  dental.style.display = "none";
  ortho.style.display = "none";
  card.style.display = "none";
  // var  Obstetrics = document.getElementById("Obstetrics_docs")
  // var  neuro = document.getElementById("neurological_docs")
  // var  dental = document.getElementById("dental_doc")
  // var ortho=document.getElementById("Orthopaedic_doc")

  // if (urology.style.display === "none") {
  //   } else {
  //     // card.style.display = "none";
  //     title.style.display = "block";
  //     urology.style.display = "block";
  //     // Obstetrics.style.display = "none";
  //     // neuro.style.display = "none";
  //     // dental.style.display = "none";
  //     // ortho.style.display = "none";

  //   }
}

function showObstetrics() {
  // var card = document.getElementById("cardio_doc")
  var title = document.getElementById("do")
  // var urology = document.getElementById("urology_doc")
  var Obstetrics = document.getElementById("Obstetrics_docs")
  // var  neuro = document.getElementById("neurological_docs")
  // var  dental = document.getElementById("dental_doc")
  // var ortho=document.getElementById("Orthopaedic_doc")

  if (Obstetrics.style.display === "none") {
  } else {
    // card.style.display = "none";
    title.style.display = "block";
    // urology.style.display = "none";
    Obstetrics.style.display = "block";
    // neuro.style.display = "none";
    // dental.style.display = "none";
    // ortho.style.display = "none";


  }

}
function neuroshow() {
  // var card = document.getElementById("cardio_doc")
  var title = document.getElementById("do")
  // var urology = document.getElementById("urology_doc")
  // var  Obstetrics = document.getElementById("Obstetrics_docs")
  var neuro = document.getElementById("neurological_docs")
  // var  dental = document.getElementById("dental_doc")
  // var ortho=document.getElementById("Orthopaedic_doc")

  if (neuro.style.display === "none") {
  } else {
    // card.style.display = "none";
    title.style.display = "block";
    // urology.style.display = "none";
    // Obstetrics.style.display = "none";
    neuro.style.display = "block";
    // dental.style.display = "none";
    // ortho.style.display = "none";

  }
}
function showOrthopaedic_doc() {
  // var card = document.getElementById("cardio_doc")
  var title = document.getElementById("do")
  // var urology = document.getElementById("urology_doc")
  // var  Obstetrics = document.getElementById("Obstetrics_docs")
  // var  neuro = document.getElementById("neurological_docs")
  // var  dental = document.getElementById("dental_doc")
  var ortho = document.getElementById("Orthopaedic_doc")

  if (ortho.style.display === "none") {
  } else {
    ortho.style.display = "block";
    // card.style.display = "none";
    title.style.display = "block";
    // urology.style.display = "none";
    // Obstetrics.style.display = "none";
    // neuro.style.display = "none";
    // dental.style.display = "none";
  }
}
function dentalshow() {
  // var card = document.getElementById("cardio_doc")
  // var title=document.getElementById("do")
  // var urology = document.getElementById("urology_doc")
  // var  Obstetrics = document.getElementById("Obstetrics_docs")
  // var  neuro = document.getElementById("neurological_docs")
  var dental = document.getElementById("dental_doc")
  // var ortho=document.getElementById("Orthopaedic_doc")

  if (dental.style.display === "none") {
  } else {
    // ortho.style.display = "none";
    // card.style.display = "none";
    // title.style.display = "block";
    // urology.style.display = "none";
    // Obstetrics.style.display = "none";
    // neuro.style.display = "none";
    dental.style.display = "block";
  }
}