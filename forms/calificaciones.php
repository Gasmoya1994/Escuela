<form method="post">
    <!-- Tabla -->
    <input type="hidden" name="tabla" value="calificaciones">
    <!-- ID Asignatura -->
    <label for="ID_Asignatura">Asignatura</label>
    <input id="ID_Asignatura" name="ID_Asignatura" type="search" class="form-control" type="text" list="lista-asignaturas">
    <datalist id="lista-asignaturas">
    <?php
        $SQL = "SELECT a.ID, m.nombre, Dias, Horario FROM asignaturas AS a, materias AS m WHERE m.ID = a.ID_Materia";
        $RESULTS = $DBCONN->query($SQL);
        while($ROW = $RESULTS->fetch_assoc()){
            echo "<option value='".$ROW['ID']."'>".$ROW['nombre']." ".$ROW['Dias']." - ".$ROW["Horario"]."<option>";
        }
    ?>
    </datalist>
    <!-- Nota -->
    <label for="Nota">Nota</label>
    <input id="Nota" name="Nota" type="number" min="0" max="10" class="form-control">
    <!-- Trimestre -->
    <label for="Trimestre">Trimestre</label>
    <select id="Trimestre" name="Trimestre" class="form-control">
        <?php
            $ARRAY = ['1er','2do','3ro','DIC','FEB'];
            foreach($ARRAY as $i) echo "<option value='$i'>$i</option>";
        ?>
    </select>
    <!-- Fecha -->
    <label for="Fecha">Fecha</label>
    <input id="Fecha" name="Fecha" type="date" class="form-control" type="text">
    <button class="btn btn-success">Aceptar</button>
</form>