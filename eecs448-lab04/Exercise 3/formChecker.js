function checkValid(){
  var r1 = document.getElementById("r1").checked
  var r2 = document.getElementById("r2").checked
  var r3 = document.getElementById("r3").checked
  var tooth = document.getElementById("tooth").value
  var za = document.getElementById("za").value
  var jet = document.getElementById("jet").value
  if (!r1 && !r2 && !r3){
    alert("Please select a shipping method")
    return(false)
  }

}
