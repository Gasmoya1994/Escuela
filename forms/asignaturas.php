<!-- ID	ID_usuario	ID_materia	Dias	Horario -->
<form method="post">
    <input type="hidden" name="tabla" value="asignaturas">
    <label for="ID_usuario">usuario</label>
    <input type="search" class="form-control" name="ID_usuario" list="lista-usuarios" id="ID_usuario">
    <datalist id="lista-usuarios">
        <?php
        $SQL="select * from usuarios";
        $RESULTADOS=$DBCONN->query($SQL);
        while($ROW=$RESULTADOS->fetch_assoc()){
            echo "<option value='".$ROW["id"]."'>".$ROW["usuario"]."</option>";
        }
        ?>
    </datalist>
    <label for="ID_materia">materia</label>
    <select name="ID_materia" class="form-control" id="ID_materia">
        <?php
        $SQL="select * from materias";
        $RESULTADOS=$DBCONN->query($SQL);
        while($ROW=$RESULTADOS->fetch_assoc()){
            echo "<option value='".$ROW["ID"]."'>".$ROW["nombre"]."</option>";
        }
        ?>
    </select>
    <label for="Dias">dias</label>
    <select name="Dias" id="Dias" class="form-control" multiple>
        <?php
        $DIAS=['L','M','X','J','V'];
        foreach($DIAS as $D) echo "<option value='$D'>$D</option>";
        ?>
    </select>
    <label for="Horario">horarios</label>
    <select name="Horario" class="form-control" id="Horario">
        <?php
        $HORAS=0;
        while($HORAS<24){
            echo "<option value='$HORAS:00:00'>$HORAS:00:00</option>";
            $HORAS++;
        }
        ?>
    </select>
    <button>ACEPTAR</button>
</form>