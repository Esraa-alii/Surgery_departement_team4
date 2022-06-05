function toggleText(){
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
  function viewReport(){
  var w = document.getElementById("repo")
  if (w.style.display === "none") {
  //   x.style.display = "block";
  } else {
    w.style.display = "block";
   
  }
}