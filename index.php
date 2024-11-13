<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Die Staatsformen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    



<div id="nav-infos">
  
<h4>Informationen über die Stattsformen</h4>

<input type="button" value="Monarchie"
 data-title="Monarchie"
 data-beschreibung="Bitte wählen sie eine Staatsform aus von der sie Informationen erhalten möchten."
 data-beschreibung2=""
 data-content="1"
 id="info1"
 onclick="info1(), einstellungenclose()">

<input type="button" value="Republik"
data-title="Republik"
  data-beschreibung="Bitte wählen sie eine Staatsform aus von der sie Informationen erhalten möchten."
 data-beschreibung2=""
 id="info2"
 onclick="info2(), einstellungenclose()">

<input type="button" value="Diktatur"
data-title="Diktatur"
 data-beschreibung="ss"
 data-beschreibung2="ss"
 id="info3"
 onclick="info3(), einstellungenclose()">

</div>

<!-- Informations Block  -->

<div id="info">
 <img src="/src/icons/x.png" alt="Close" onclick="closeinfo()"> 
  <h1 class="center"  id="info-header">hh</h1>


<!-- Nav bar in Monarchie  -->


<div id="infonavmonarchie" style="display:none;">
<input type="button" value="1" 
            data-title-btn="rgg"
            data-beschreibung="1111"
            data-beschreibung2="1ww1w1w1w"
            class="navmonarchiebtn">

            <input type="button" value="2" 
            data-title-btn="2"
            data-beschreibung="2222"
            data-beschreibung2="thzjkddsftgf"
            class="navmonarchiebtn">

            <input type="button" value="3" 
            data-title-btn="3"
            data-beschreibung="333"
            data-beschreibung2="fefwfrg"
            class="navmonarchiebtn">

</div>
<div id="infonavrepublik" style="display:none;">
<input type="button" value="Teilautonome Republik" 
            data-title-btn="2222222222"
            data-beschreibung="114356"
            data-beschreibung2="hfghfgfgffhgf"
            class="navrepublikbtn">

            <input type="button" value="Islamische Republik" 
            data-title-btn="g54gf"
            data-beschreibung="trhhhhh"
            data-beschreibung2="su 78635e"
            class="navrepublikbtn">

            <input type="button" value="Föderale Republik" 
            data-title-btn="3"
            data-beschreibung="333"
            data-beschreibung2="fefwfrg"
            class="navrepublikbtn">

</div>
<p class="center" id="info-header-btn"></p>

  <p class="center" id="info-beschreibung">z</p>
  <p class="center" id="info-beschreibung2">z</p>
  <p id="copyright">icon:Flaticon.com</p>
</div>

<!-- Informations Block ENDE  -->

<div id="einstellungen">
  <img src="/src/icons/x.png" alt="close"onclick="einstellungenclose()">
<h1 class="center" >Einstellungen</h1>
<h3 class="center">Stellen sie hier ein was bei "Zusatz" angezeigt werden soll</h3>

<div id="einstellungenradio">
<label>
    <input type="radio" name="optionen" value="1" id="radio" > Teilautonome Republik
</label><br>

<label>
    <input type="radio" name="optionen" value="2" id="radio"> Islamische Republik
</label><br>

<label>
    <input type="radio" name="optionen" value="3" id="radio"> 	Föderale Republik
</label><br>

<label>
    <input type="radio" name="optionen" value="4" id="radio"> Deutschland
</label><br>
</div>

<input type="button" value="aktuallisieren" onclick="update(), einstellungenclose() ,checkbox() " id="einstellungsbtn" class="button-19">

</div>


<div id="nav-karte">

<h2>Karteneinstellungen</h2>

<div id="nav-formen" >   
<h4>Staatsformen:</h4>


<input type="radio" id="mo" name="karte" value="1" class="checkbox">   
<label for="1">Monarchie</label><br>

<input type="radio" id="re" name="karte" value="2" class="checkbox">
  <labeol for="2">Republik (alle Formen)</label> <br>
  
  <input type="radio" id="zusatzcb" name="karte" value="3" class="checkbox">
  <label for="3" id="zusatzlabel">Zusatz</label> <br>
<div id="einstellungszusatzdiv">
 <h5 id="einstellungentext" onclick="einstellungenopen(), closeinfo() ">  Weitere Einstellungen </h5>

</div>
 
<script src="js.js"></script>
</body>
</html>