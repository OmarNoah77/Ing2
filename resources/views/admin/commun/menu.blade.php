<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<ul class="sidebar-menu">
    <li class="header">MENU</li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.dash') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.dash') }}">
            <i class="fa fa-dashboard"></i>
            <span>Indicadores</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <i class="fa fa-list"></i>
            <span>Categories</span>
        </a>
    </li>

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.users') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.users.index') }}">
            <i class="fa fa-users"></i>
            <span>Usuarios</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.entidades') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.entidades.index') }}">
            <i class="fa fa-users"></i>
            <span>Empresas</span>
        </a>
    </li>
    @endif

   @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.empresas') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.empresas.index') }}">
            <i class="fa fa-users"></i>
            <span>Entidades</span>
        </a>
    </li>
    @endif


    @if (auth()->user()->hasRole('Superadmin|Admin'))
       <li class="<?php echo ( starts_with($route, ADMIN.'.examenfisicos') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.examenfisicos.index') }}">
                <i class="fa fa-users"></i>
                 <span> EXAMEN FISICO</span>
                </a>
       </li>
    @endif


    @if (auth()->user()->hasRole('Superadmin|Admin'))

    <li class="treeview">
        <a href="#"><i class='fa fa-link'></i> <span>Información trabajador</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="<?php echo ( starts_with($route, ADMIN.'.clientes') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.clientes.index') }}">
                 <i class="fa fa-users"></i>
                    <span>Trabajador</span>
                 </a>
            </li>
                <li class="<?php echo ( starts_with($route, ADMIN.'.clientes') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.clientes.index') }}">
                <i class="fa fa-users"></i>
                 <span>Seguridad Social Trabajador</span>
             </a>
           </li>
            </li>
                <li class="<?php echo ( starts_with($route, ADMIN.'.antecedenteshabitos') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.antecedenteshabitos.index') }}">
                <i class="fa fa-users"></i>
                 <span>Antecedentes Habitos</span>
                </a>
           </li>
            </li>
                <li class="<?php echo ( starts_with($route, ADMIN.'.antecedentesclinicos') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.antecedentesclinicos.index') }}">
                <i class="fa fa-users"></i>
                 <span>Antecedentes Clinicos Personales</span>
                </a>
           </li>
           <li class="<?php echo ( starts_with($route, ADMIN.'.clientes') ) ? "active" : '' ?>">
              <a href="{{ route(ADMIN.'.clientes.index') }}">
              <i class="fa fa-users"></i>
              <span>Responsable Trabajador</span>
              </a>
           </li>
           <li class="<?php echo ( starts_with($route, ADMIN.'.clientes') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.clientes.index') }}">
               <i class="fa fa-users"></i>
               <span>Elementos protección</span>
               </a>
           </li>
            <li class="<?php echo ( starts_with($route, ADMIN.'.antecedenteslaborareles') ) ? "active" : '' ?>">
              <a href="{{ route(ADMIN.'.antecedenteslaborareles.index') }}">
              <i class="fa fa-users"></i>
              <span>Antecedentes Laborales</span>
            </a>
           </li>

           <li class="<?php echo ( starts_with($route, ADMIN.'.antecedentesginecoostetricos') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.antecedentesginecoostetricos.index') }}">
                <i class="fa fa-users"></i>
                 <span>Antecedentes Ginecoostetricos</span>
                </a>
             </li>
            <li class="<?php echo ( starts_with($route, ADMIN.'.antecedentesfamiliares') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.antecedentesfamiliares.index') }}">
                <i class="fa fa-users"></i>
                 <span>Antecedentes Familiares</span>
                </a>
             </li>
              <li class="<?php echo ( starts_with($route, ADMIN.'.antecedentesaccidentesenfermes') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.antecedentesaccidentesenfermes.index') }}">
                <i class="fa fa-users"></i>
                 <span>ACCIDENTES Y/O ENFERMEDAD LABORAL</span>
                </a>
             </li>
             <li class="<?php echo ( starts_with($route, ADMIN.'.anteceexposionriegos') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.anteceexposionriegos.index') }}">
                <i class="fa fa-users"></i>
                 <span> Exposición a factores de riesgo laborales</span>
                </a>
             </li>
             <li class="<?php echo ( starts_with($route, ADMIN.'.antecerevisionsistemas') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.antecerevisionsistemas.index') }}">
                <i class="fa fa-users"></i>
                 <span> REVISIÓN DE SISTEMAS</span>
               </a>
             </li>

             <li class="<?php echo ( starts_with($route, ADMIN.'.examenfisicos') ) ? "active" : '' ?>">
                <a href="{{ route(ADMIN.'.examenfisicos.index') }}">
                <i class="fa fa-users"></i>
                 <span> EXAMEN FISICO</span>
              </a>
             </li>
        </ul>
    </li>
  
    @endif



    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.clientes') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.profesionales.index') }}">
            <i class="fa fa-users"></i>
            <span>Profesionales</span>
        </a>
    </li>
    @endif

   
    @if (auth()->user()->hasRole('Superadmin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-link'></i> <span>Parametricas</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route(ADMIN.'.divipola.index') }}"><i class="fa fa-users"></i>Divipol</a></li>
            <li><a href="{{ route(ADMIN.'.habitos.index') }}"><i class="fa fa-users"></i>Habitos</a></li>
            <li><a href="{{ route(ADMIN.'.ocupaciones.index') }}"><i class="fa fa-users"></i>Ocupaciones</a></li>
            <li><a href="{{ route(ADMIN.'.tipoexamenes.index') }}"><i class="fa fa-users"></i>Tipo Examén</a></li>
            <li><a href="{{ route(ADMIN.'.expuestoas.index') }}"><i class="fa fa-users"></i>Expuesto A</a></li>
            <li><a href="#"><i class="fa fa-users"></i>Elementos protección</a></li>
            <li><a href="{{ route(ADMIN.'.especialidades.index') }}"><i class="fa fa-users"></i>Especialidad</a></li>
            <li><a href="{{ route(ADMIN.'.examenenfasis.index') }}"><i class="fa fa-users"></i>Examenes enfasis</a></li>
            <li><a href="#"><i class="fa fa-users"></i>EPS ARL CAJAS</a></li>   
            <li><a href="{{ route(ADMIN.'.tiposervicios.index') }}"><i class="fa fa-users"></i>Tipo de Servicios</a></li>      
        </ul>
    </li>
    @endif
    @if (auth()->user()->hasRole('Superadmin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-link'></i> <span>Agenda</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route(ADMIN.'.AgendaSemanales.index') }}"><i class="fa fa-users"></i>Agenda Semanal</a></li>
            <li><a href="#"><i class="fa fa-users"></i>Horario profesional</a></li>    
        </ul>
    </li>
    @endif
    @if (auth()->user()->hasRole('Superadmin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-link'></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-users"></i>Informe cita</a></li>
            <li><a href="#"><i class="fa fa-users"></i>Cargue información</a></li>  
            <li><a href="#"><i class="fa fa-users"></i>Lsitado trabajadores empresa</a></li>    
        </ul>
    </li>
    @endif
    @if (auth()->user()->hasRole('Superadmin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-link'></i> <span>Tools</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Settings</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Backups</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Logs</a></li>
        </ul>
    </li>
    @endif
</ul>
