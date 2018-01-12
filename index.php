<html>
  <head>
    <script>
    function loadDoc() {
      var baza = document.getElementById("baza").value;
      var izvor = document.getElementById("izvor").value;
      var mera = document.getElementById("mera").value;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
         document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "back.php?baza="+baza+"&izvor="+izvor+"&mera="+mera, true);
      xhttp.send();
    }
    </script>
    <link href="stil.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <div id="main" class="wrapper">
      <div class="center">
        <select id="izvor" name="izvor">
          <option value="dram">Dram</option>
          <option value="dan">Dan</option>
          <option value="litra">Litra</option>
          <option value="kamen">Kamen</option>
        </select>
      <input class="jebote" id="baza" type="number" name="baza" value="1">
      <select id="mera" name="mera">
        <option value="dan">Dan</option>
        <option value="litra">Litra</option>
        <option value="kamen">Kamen</option>
        <option value="dram">Dram</option>
      </select>
      <button type="button" onclick="loadDoc()">Pretvori</button>

      <br/>
      <br/>

  </div>
  <div id="demo" class="center big"></div>
  <div id="opis" class="center">
    <h1>
      Algoritam razvijen na osnovu akademskog rada:
    </h1>
    <div class="center">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Mlr7iqVVnBk" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  </div>
  </body>
</html>
