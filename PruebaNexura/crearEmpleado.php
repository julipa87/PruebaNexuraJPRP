<?php include "templates/header.php"; ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crear Empleado</h2>
      <hr>
      <form method="post">
        <div class="form-group">
          <label for="nombre">Nombre Completo *</label>
          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre completo del empleado">
        </div>
        
        <div class="form-group">
          <label for="email">Correo Electrónico *</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Correo Electrónico">
        </div>
        <div class="form-group">
            
            <label for="sexo">Sexo *</label><td><td><hr>
                <input type="radio" name="Sexo" value="M" /></td></td>
            <label for="sexo">Masculino</label> </p>
            
            <hr>
            <input type="radio" name="Sexo" value="F" />
            <td><td>
            <label for="sexo">Femenino</label></td></td>
                    
        </div>  
        <div class="form-group">
          <label for="area">Área *</label>
          
              <select class="form-control" name="Área">
           <?php include 'conexion.php';
               
              $consulta ="SELECT * FROM areas";
              $ejecutar= mysqli_query($conex,$consulta) or die (mysql_error($conex));
                       
              ?>
           <?php foreach ($ejecutar as $opciones): ?>
            
            <option value="<?php echo $opciones['nombre']?>"><?php echo $opciones['nombre']?>
            </option>
           <?php endforeach ?>
                      </option>
               </select>

              
        </div>
          
          <div class="form-group">
             <label for="descripcion">Descripción *</label> 
             <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion de la experiencia del empleado"></textarea>
          </div>
          <div class="form-group">
              <input type="checkbox" name="boletin" value="ON" />
              <label for="descripcion">Deseo recibir boletín informativo</label> 
          
      </div>
       
          <div class="form-group">
        <label for="descripcion">Roles</label> 
        <hr>
        
           <?php include 'conexion.php';
               
              $consulta ="SELECT * FROM roles";
              $ejecutar= mysqli_query($conex,$consulta) or die (mysql_error($conex));
                       
              ?>
           <?php foreach ($ejecutar as $opciones): ?>
            
             <input type="checkbox" name="roles" value="<?php echo $opciones['nombre']?>"><?php echo $opciones['nombre']?><br>
           
                         
           <?php endforeach ?>
                      
            
        
       </div>
       
       <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Guardar" />
    <?php include "guardar.php"; ?>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include "templates/footer.php"; ?>