var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
  showModal()
})
function toggleText(){
  var x = document.getElementById("Myid");
  if (x.style.display === "none") {
  //   x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
// function toggleText2(){
//   var x = document.getElementById("Myid2");
//   if (x.style.display === "none") {
//   //   x.style.display = "block";
//   } else {
//     x.style.display = "none";
//   }
// }