<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <ul class="sidebar-menu">
        
        <li>
          <a href="http://localhost/ReservasCDental/inicio">
            <i class="fa fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>

        <li>
          <?php
          echo '<a href="http://localhost/ReservasCDental/Citas/'.$_SESSION["id"].'">';
          ?>
          
            <i class="fa fa-medkit"></i>
            <span>Citas</span>
          </a>
        </li>

        <li>
       
       <a href="http://localhost/ReservasCDental/pacientes">
            <i class="fa fa-calendar-check-o"></i>
            <span>Pacientes</span>
          </a>
        </li>

      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>