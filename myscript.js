//Carousel at home page
var cars = ["Resources/ABC.jpg", "Resources/DEF.jpg", "Resources/GHI.jpg", "Resources/XYZ.jpg"];
var i = 0;
document.getElementById("cimg").src = cars[i];
function prev() 
{
  if (i < 0 || i > cars.length - 1) 
  {
    i = cars.length -1;
  }
  document.getElementById("cimg").src = cars[i];
  i--;
}
function next() 
{
  if (i > cars.length - 1 || i < 0) 
  {
    i = 0;
  }
  document.getElementById("cimg").src = cars[i];
  i++;
}







//Select dropdown
function validate() {
  return (vname() && vcontact() && vemail());
}
function vname(){
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Enter a name");
    return false;
  }
  else{
    var nameformat = /^[A-Z]{1}[a-z]{1,}\s[A-Z]{1}[a-z]{1,}$/;
    if (nameformat.test(x)) {
      return true;
    } else {
      alert("You have entered an invalid name!");
      return false;
    }
  }
}
function vcontact() {
  var x = document.forms["myForm"]["cno"].value;
  if (isNaN(x) || x == "") {
    alert("Enter a valid contact number");
    return false;
  } else {
    var callformat = /^[6-9]{1}[0-9]{9}$/;
    if (callformat.test(x)) {
      return true;
    } else {
      alert("You have entered an invalid contact number!");
      return false;
    }
  }
}
function vemail(){
  var x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Enter your email id");
  } else {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (mailformat.test(x)) {
      return true;
    } else {
      alert("You have entered an invalid email address!");
      return false;
    }
  }
}

//commentbox
function submit(){
  var postbutton = document.getElementById("post");
  var textbox = document.getElementById("textbox");
  postbutton.addEventListener('click', () =>{
      textbox.value = "";
      alert("Your message has been sent successfully to our server. We appreciate your custom and will be in touch shortly.");
      // more lines of code can be added to send input data to the database
  })
}
//navbar




//Car Purchase List
function sub()
{
  if(validate()==true)
  {
    alert("Your pre-booking has been successfully registered, our team will shortly contact you regarding more details and paperwork. Thank You!");
  }
}


//Contact us submit handling
function valcon()
{
  var x = document.forms["myForm"]["txt"].value;
  if (x == "") 
  {
    alert("Enter something before submit!!");
  } 
  else 
  {
  alert("Your message has been sent successfully to our server. We appreciate your feedback and will be in touch shortly.");
  }
}