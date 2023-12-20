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
  // if (x == "") {
  //   alert("Enter a valid email id");
  //   return false;
  // }
  // return validate_email(x);
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
function modifyList(x)
{
    with(document.forms.myForm)
    {
        if(x == 1)
        {
            optionList[1].text="Ignus";
            optionList[1].value=1;
            optionList[2].text="Nero";
            optionList[2].value=2;
            optionList[3].text="Thrax";
            optionList[3].value=3;
            optionList[4].text="Champion";
            optionList[4].value=4;
            optionList[5].text="Zeno";
            optionList[5].value=5;
        }
        if(x == 2)
        {
            optionList[1].text="Infernus";
            optionList[1].value=1;
            optionList[2].text="Vacca";
            optionList[2].value=2;
            optionList[3].text="Zentorno";
            optionList[3].value=3;
            optionList[4].text="Monroe";
            optionList[4].value=4;
            optionList[5].text="Osiris";
            optionList[5].value=5;
        }
        if(x == 3)
        {
            optionList[1].text="Stinger";
            optionList[1].value=1;
            optionList[2].text="Turismo R";
            optionList[2].value=2;
            optionList[3].text="Cheetah";
            optionList[3].value=3;
            optionList[4].text="Carbonizzare";
            optionList[4].value=4;
            optionList[5].text="Furia";
            optionList[5].value=5;
        }
        if(x == 4)
        {
            optionList[1].text="T20";
            optionList[1].value=1;
            optionList[2].text="Emerus";
            optionList[2].value=2;
            optionList[3].text="GP1";
            optionList[3].value=3;
            optionList[4].text="Italia GTB";
            optionList[4].value=4;
            optionList[5].text="Tyrus";
            optionList[5].value=5;
        }
        if(x == 5)
        {
            optionList[1].text="Banshee";
            optionList[1].value=1;
            optionList[2].text="Gauntlet";
            optionList[2].value=2;
            optionList[3].text="Buffalo";
            optionList[3].value=3;
            optionList[4].text="G Hellfire";
            optionList[4].value=4;
            optionList[5].text="Verlierer";
            optionList[5].value=5;
        }
        if(x == 6)
        {
            optionList[1].text="Stallion";
            optionList[1].value=1;
            optionList[2].text="Bullet";
            optionList[2].value=2;
            optionList[3].text="Dominator";
            optionList[3].value=3;
            optionList[4].text="FMJ";
            optionList[4].value=4;
            optionList[5].text="Flash GT";
            optionList[5].value=5;
        }
        if(x == 7)
        {
            optionList[1].text="Comet";
            optionList[1].value=1;
            optionList[2].text="Growler";
            optionList[2].value=2;
            optionList[3].text="Astron";
            optionList[3].value=3;
            optionList[4].text="811";
            optionList[4].value=4;
            optionList[5].text="Neon";
            optionList[5].value=5;
        }
        if(x == 8)
        {
            optionList[1].text="Jester";
            optionList[1].value=1;
            optionList[2].text="Jester RR";
            optionList[2].value=2;
            optionList[3].text="Jester Classic";
            optionList[3].value=3;
            optionList[4].text="Sugoi";
            optionList[4].value=4;
            optionList[5].text="RT3000";
            optionList[5].value=5;
        }
    }
}
function color(x)
{
    with(document.forms.myForm)
    {
        if(x == "Red")
        {
            document.getElementById("clr").style.backgroundColor="red";
        }
        if(x == "Blue")
        {
            document.getElementById("clr").style.backgroundColor="dodgerblue";
        }
        if(x == "Green")
        {
            document.getElementById("clr").style.backgroundColor="mediumseagreen";
        }
        if(x == "Violet")
        {
            document.getElementById("clr").style.backgroundColor="slateblue";
        }
        if(x == "Yellow")
        {
            document.getElementById("clr").style.backgroundColor="gold";
        }
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