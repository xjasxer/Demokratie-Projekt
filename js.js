  function info1() {
var button = document.getElementById('info1')

document.getElementById('info-header').textContent = button.getAttribute("data-title")
document.getElementById('info-beschreibung').textContent = button.getAttribute("data-beschreibung")
document.getElementById('info-beschreibung2').textContent = button.getAttribute("data-beschreibung2")
document.getElementById('info').style.display = "block";
  }
   
  function info2() {
    var button = document.getElementById('info2')
    
    document.getElementById('info-header').textContent = button.getAttribute("data-title")
    document.getElementById('info-beschreibung').textContent = button.getAttribute("data-beschreibung")
    document.getElementById('info-beschreibung2').textContent = button.getAttribute("data-beschreibung2")
    document.getElementById('info').style.display = "block";
      }
      function info3() {
        var button = document.getElementById('info3')
        
        document.getElementById('info-header').textContent = button.getAttribute("data-title")
        document.getElementById('info-beschreibung').textContent = button.getAttribute("data-beschreibung")
        document.getElementById('info-beschreibung2').textContent = button.getAttribute("data-beschreibung2")
        document.getElementById('info').style.display = "block";
          }

  function closeinfo() {
   document.getElementById('info').style.display = "none"
  }


var checkboxes = document.getElementsByClassName("checkbox");
for (var i = 0; i < checkboxes.length; i++) {
  checkboxes[i].addEventListener("change", checkbox);
}


  function checkbox() {
var a = document.getElementById('mo');
var b = document.getElementById('re');
var c = document.getElementById('dik');

if (!a.checked && !b.checked) {
  document.body.style.backgroundImage = "url('/src/img/weltkarte_ipad.jpg')";
  
} else {


if (a.checked) {
  document.body.style.backgroundImage = "url('/src/img/monarchie_ipad.png')";
}
if (b.checked) {
  document.body.style.backgroundImage = "url('/src/img/republik_ipad.png')";

}
if (a.checked && b.checked) {
  document.body.style.backgroundImage = "url('/src/img/monarchie-republik_ipad.png')";

} 


}} 

function einstellungenopen() {
  document.getElementById('einstellungen').style.display = 'block'
}
function einstellungenclose() {
  document.getElementById('einstellungen').style.display = 'none'
}

function update() {
  let selectedOption = document.querySelector('input[name="optionen"]:checked');
            
            if (selectedOption) {
                let result = selectedOption.value;

                if (result === "") {
document.getElementById('zusatzlabel').textContent = "111"
                } else if (result === "2") {

                } else if (result === "3") {

                }
                else if (result === "4") {
                  
                }
            } else {

            }
}