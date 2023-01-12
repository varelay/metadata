<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<body>
<form class="container" action="funciones.php"  method="POST" enctype="multipart/form-data">
<div class="form-group">
<label>SRC_SCHEMA_ID:</label>
<input type="number" class="form-control" id="" name="SRC_SCHEMA_ID">
</div>
<br>
<div class="form-group">
<label>OBJ_NAME:</label>
<input type="text" class="form-control" id="" name="OBJ_NAME">
</div>
<br>
<div class="form-group">
<label>ERROR_THRESHOLD:</label>
<input type="text" class="form-control" id="" name="ERROR_THRESHOLD">
</div>
<br>
<div class="form-group">
<label>LOAD_GRP:</label>
<input type="text" class="form-control" id="" name="LOAD_GRP">
</div>
<br>
<div class="form-group">
<label>LOAD_TYPE:</label>
<input type="text" class="form-control" id="" name="LOAD_TYPE">
</div>
<br>
<div class="form-group">
<label>OBJ_JOB_PARAMETERS:</label>
    <input type="text" class="form-control" id="" name="OBJ_JOB_PARAMETERS">
</div>
<div id="divcon" style="text-align: center;" class="mt-3">
    <input class="btn btn-outline-primary mb-3" type="button" value="Agregar dependencia" id="agregar" />
</div>

</div>
<br>
<div class="form-group">
<label>SELECT_STMT:</label>
<input type="text" class="form-control" id="" name="SELECT_STMT">
</div>
<br>
<div class="form-group">
<label>FILTER_CONDITIONS:</label>
<input type="text" class="form-control" id="" name="FILTER_CONDITIONS">
</div>
<br>
<div class="form-group">
<label>ACTIVE_FLG:</label>
<input type="text" class="form-control" id="" name="ACTIVE_FLG">
</div>
<br>
<div class="form-group">
<label>INCR_COL_FILT1:</label>
<input type="text" class="form-control" id="" name="INCR_COL_FILT1">
</div>
<br>
<div class="form-group">
<label>INCR_DAYS:</label>
<input type="text" class="form-control" id="" name="INCR_DAYS">
</div>
<br>
<div class="form-group">
<label>SPLIT_BY_COL:</label>
<input type="text" class="form-control" id="" name="SPLIT_BY_COL">
</div>
<br>
<div class="form-group">
<label>MAPPERS:</label>
<input type="text" class="form-control" id="" name="MAPPERS">
</div>
<br>
<div class="form-group">
<label>HARDDELETE:</label>
<input type="text" class="form-control" id="" name="HARDDELETE">
</div>
<br>
<!--
<div class="form-group">
<label>CREATED_DTTM:</label>
<input type="text" class="form-control" id="" name="CREATED_DTTM">
</div>
<br>
<div class="form-group">
<label>UPDATED_DTTM:</label>
<input type="text" class="form-control" id="" name="UPDATED_DTTM">
</div>
<br>
-->
<div class="form-group">
<label>CREATED_BY:</label>
<input type="text" class="form-control" id="" name="CREATED_BY">
</div>
<br>
<div class="form-group">
<label>UPDATED_BY:</label>
<input type="text" class="form-control" id="" name="UPDATED_BY">
</div>
<br>
<div class="form-group">
<label>APP_ID:</label>
<input type="text" class="form-control" id="" name="APP_ID">
</div>
<br>
<div class="form-group">
<label>PARTITION_COL:</label>
<input type="text" class="form-control" id="" name="PARTITION_COL">
</div>
<br>
<div class="form-group">
<label>CONTAINER:</label>
<input type="text" class="form-control" id="" name="CONTAINER">
</div>
<br>
<center>
    <button type="submit" name="enviar_meta" class="btn btn-primary btn-sm" style="width: 400px; height: 40px; font-size: 1.1rem;">Generar</button>   
</form>
</center>
</body>
<script src="js/REV.js"></script>
<script src="js/CASE_OBJ_JOB_PARAMETERS.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>