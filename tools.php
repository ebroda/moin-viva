<?php
if ((strtolower($_POST['code']) != 'PUT-YOUR-CODE-HERE') && (strtolower($_POST['code']) != 'AND-ANOTHER_CODE')){
    header("Location: /", true, 301);
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neu bei Viva con Agua Bremen</title>

    <link href="bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="styles.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class="container">
    
    <br />
    
<div class="row">
  <div class="col-12 text-center col-lg-8 offset-lg-2 ">
    <br/>
    <img style="width: 250px;" src="vcabremen.png" alt="Viva Con Agua Bremen" />
    <br/>
    <h4>Neu bei Viva con Agua Bremen</h4>
    <a href="/">zurück</a>
    <br/>
    <br/>
    </div>
  <div class="col-12 text-muted col-lg-8 offset-lg-2 ">
    Im Folgenden geben wir dir einen Überblick über die wichtigsten Tools für die Mitarbeit 
in der Bremer Crew von Viva con Agua. 
     Jedes Tool hat einen Button, über den du auf das Tool zugreifen kannst. Auf der Seite kannst du dir dann
einen Account erstellen und später dich wieder anmelden.

    <br /><br />
  </div>


  <div class="col-12 col-lg-8 offset-lg-2 viva-tools">
    <div class="alert alert-success">Gleich schon mal vorab: Bei Fragen sind wir natürlich für dich da. 
	Gerne per E-Mail - das kann aber
      auch mal einen Moment länger dauern: <a href="mailto:bremen@vivaconagua.org">bremen@vivaconagua.org</a>.
    </div>

    <br />

    <div class="card">
      <div class="card-body">
        <div class="no">1</div>
        <img src="whatsapp.svg" alt="whatsapp" />
        <h5 class="card-title">
          <a href="https://web.whatsapp.com" target="joinWa" class="card-title">WhatsApp</a>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">Kommunikation</h6>
	<p class="card-text">
	  Fur kurzfristige Absprachen nutzen wir WhatsApp. Hier gibt's Aktuelles rund um die Crew und auch mal 
	noch kurzfristige Supportanfragen. Auch die Einladungen zu den Treffen teilen wir hier.</p>
        <a href="https://chat.whatsapp.com/YOUR-LOGIN-CODE"
           target="joinSofeSlack" class="btn btn-success">Beitreten</a>
        </div>
    </div>

    <br />

    <div class="card">
      <div class="card-body viva-tool">
        <div class="no">2</div>
        <h5 class="card-title">
          <a href="#PUT-LINK-HERE" target="joinVC" class="card-title">Viva con Crew Bremen</a>
        </h5>
       <h6 class="card-subtitle mb-2 text-muted">Bremer Aktionsplanung</h6>
        <p class="card-text">
          Um unsere Aktionen, sowohl intern wie auch extern und die Konzerte, Festivals und Basketball-Aktionen, zu planen, 
	haben wir Viva con Crew entwickelt. Hier gibt es alle unsere Aktionen und ihr könnte euch hier für Konzerte und Aktionen eintragen,
wenn ihr dabei sein wollt. Das ist unser erster Planungsschritt.</p>

        <a href="#PUT-LINK-HERE" target="joinVC" class="btn btn-success card-link">zu Viva con Crew</a>
      </div>
    </div>

    <br />
    <div class="card">
      <div class="card-body viva-tool">
        <div class="no">3</div>
        <img src="vcapool.png" alt="pool" />
        <h5 class="card-title">
          <a href="https://pool3.vivaconagua.org" target="joinVcaPool" class="card-title">Viva con Agua - Pool</a>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">Konzerte, Festivals & andere Veranstaltungen,<br />Zugang ins VcA-Netzwerk</h6>
        <p class="card-text">Im Pool könnt ihr euch für Konzerte, Festivals, Basketballspiele und viele weitere Aktionen im Kosmos von Viva con Agua bewerben.</p>

        <a href="https://pool3.vivaconagua.org" target="joinOrgatool" class="btn btn-success card-link">zum Pool</a>
      </div>
    </div>
    <br />


    <div class="alert alert-success">
      <strong>Nu' aber!</strong><br />
      Wenn du hier angekommen bist, hast du alle wichtigen Accounts <br />für das Leben mit und für Viva con Agua in Bremen!
    </div>

  </div>
</div>
</div>
</body>
</html>
