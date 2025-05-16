<?php

?> 

<?php
    $personas = array(
        array("id"=>1,"Nombre"=>"Adrian","Edad"=>20,"DNI"=>7613761),
        array("id"=>2,"Nombre"=>"Dickens","Edad"=>22,"DNI"=>1434315),
        array("id"=>3,"Nombre"=>"Jeff","Edad"=>25,"DNI"=>135135),
        array("id"=>4,"Nombre"=>"Damian","Edad"=>18,"DNI"=>4646246)
    );
?> 

<html>
    <head>
        <title>Lista de personas</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">DNI</th>
                </tr>
            </thead>
            <tbody>
<?php
    foreach ($personas as $person) {
?> 

        <tr>
        <th scope="row"><?php echo $person["id"]?> </th>
        <td><?php echo $person["Nombre"]?></td>
        <td><?php echo $person["Edad"]?></td>
        <td><?php echo $person["DNI"]?></td>

        </tr>
<?php
    }     
?> 
  </tbody>




</table>
            </div>
        
        </div>

        <script src="bootstrap.bundle.min.js"></script>
    </body>
    
</html>
