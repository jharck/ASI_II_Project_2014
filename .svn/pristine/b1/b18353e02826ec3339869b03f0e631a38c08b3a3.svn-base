<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Clinica</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css" />
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Panel Administrativo</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="index.html"><i class="fa fa-bullseye"></i> Inicio</a></li>
                    <li><a href="medicamentos.html"><i class="fa fa-tasks"></i> Medicamentos</a></li>                    
                    <li><a href="proveedores.html"><i class="fa fa-globe"></i> Proveedores</a></li>
                    <li><a href="pacientes.html"><i class="fa fa-list-ol"></i> Nuevos Pacientes</a></li>
                    <li><a href="empleados.html"><i class="fa fa-list-ul"></i> Empleados</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Notificaciones <span class="badge">1</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">1 Nueva(s) Notificacion(es)</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Proxima cita 10:30 a.m.</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username']; ?><b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
                           <li><a href="#"><i class="fa fa-gear"></i> Configuracion</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fa fa-power-off"></i> Salir del Sistema</a></li>
                       </ul>
                   </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Notas <small>Notas Creadas por el Medico</small></h1>
                </div>
                <script src="http://code.highcharts.com/highcharts.js"></script>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Resumen Semanal de Consultas</h3>
                        </div>
                        <div class="panel-body">
                        <script src="http://code.highcharts.com/modules/heatmap.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<div id="container" style="height: 400px; min-width: 310px; max-width: 850px; margin: 0 auto"></div>
<script>
$(function () {

    $('#container').highcharts({
        
        chart: {
            type: 'heatmap',
            marginTop: 40,
            marginBottom: 40
        },


        title: {
            text: 'Consultas por Medico por Semana'
        },

        xAxis: {
            categories: ['Miguel', 'Cubias', 'Jorge', 'Zavaleta', 'Maricela', 'Monterroso', 'Abner', 'Julio', 'Javier', 'Laura']
        },

        yAxis: {
            categories: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'],
            title: null
        },

        colorAxis: {
            min: 0,
            minColor: '#FFFFFF',
            maxColor: Highcharts.getOptions().colors[0]
        },

        legend: {
            align: 'right',
            layout: 'vertical',
            margin: 0,
            verticalAlign: 'top',
            y: 25,
            symbolHeight: 320
        },

        tooltip: {
            formatter: function () {
                return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> realizo <br><b>' +
                    this.point.value + '</b> consultas en <br><b>' + this.series.yAxis.categories[this.point.y] + '</b>';
            }
        },

        series: [{
            name: 'Consultas Por Medico',
            borderWidth: 1,
            data: [[0,0,10],[0,1,19],[0,2,8],[0,3,24],[0,4,67],[1,0,92],[1,1,58],[1,2,78],[1,3,117],[1,4,48],[2,0,35],[2,1,15],[2,2,123],[2,3,64],[2,4,52],[3,0,72],[3,1,132],[3,2,114],[3,3,19],[3,4,16],[4,0,38],[4,1,5],[4,2,8],[4,3,117],[4,4,115],[5,0,88],[5,1,32],[5,2,12],[5,3,6],[5,4,120],[6,0,13],[6,1,44],[6,2,88],[6,3,98],[6,4,96],[7,0,31],[7,1,1],[7,2,82],[7,3,32],[7,4,30],[8,0,85],[8,1,97],[8,2,123],[8,3,64],[8,4,84],[9,0,47],[9,1,114],[9,2,31],[9,3,48],[9,4,91]],
            dataLabels: {
                enabled: true,
                color: 'black',
                style: {
                    textShadow: 'none',
                    HcTextStroke: null
                }
            }
        }]

    });
});
</script>

                        </div>
                    </div>
               </div>
           </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Ultimas Notas realizadas</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-condensed">
				<thead>
					<tr>
						<th>
							Codigo
						</th>
						<th>
							Medicamento
						</th>
						<th>
							Indicaciones
						</th>
						<th>
							Administracion de Docis
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							<strong><em>ÁCIDO ACETILSALICÍLICO</em></strong>
						</td>
						<td>
							<div class="Texto">
								<span>Artritis reumatoide</span>
							</div>
							<div class="Texto">
								<span>Osteoartritis</span>
							</div>
							<div class="Texto">
								<span>Espondilitis anquilosante</span>
							</div>
							<div class="Texto">
								<span>Fiebre reumática aguda</span>
							</div>
							<div class="Texto">
								<span>Dolor o fiebre</span>
							</div>
						</td>
						<td>
							<div class="Texto">
								<span>Oral.</span>
							</div>
							<div class="Texto">
								<span>Adultos:</span>
							</div>
							<div class="Texto">
								<span>Dolor o fiebre: 250-500 mg cada 4 horas.</span>
							</div>
							<div class="Texto">
								<span>Artritis: 500-1000 mg cada 4 ó 6 horas.</span>
							</div>
							<div class="Texto">
								<span>Niños:</span>
							</div>
							<div class="Texto">
								<span>Dolor o fiebre: 30-65 mg/kg de peso</span> <span>corporal/día</span><span>fraccionar dosis cada 6 ó 8 horas.</span>
							</div>
						</td>
					</tr>
					<tr class="active">
						<td>
							2
						</td>
						<td>
							<strong><em>PARACETAMOL</em></strong>
						</td>
						<td>
							<div class="Texto">
								<span>Fiebre</span>
							</div>
							<div class="Texto">
								<span>Dolor agudo o crónico</span>
							</div>
							<div class="Texto">
								<span>Algunos casos de dolor</span><br><span>visceral.</span>
							</div>
						</td>
						<td>
							<div class="Texto">
								<span>Oral.</span>
							</div>
							<div class="Texto">
								<span>Adultos:</span>
							</div>
							<div class="Texto">
								<span>De 500-1000 mg cada 6 u 8 horas.</span>
							</div>
						</td>
					</tr>
					<tr class="success">
						<td>
							3
						</td>
						<td>
							<strong><em>BUPRENORFINA</em></strong>
						</td>
						<td>
							<div class="Texto">
								<span>Dolor de intensidad moderada</span> <span>a severa</span> <span>secundario a:</span>
							</div>
							<div class="Texto">
								<span>Infarto agudo del miocardio</span>
							</div>
							<div class="Texto">
								<span>Neoplasias</span>
							</div>
							<div class="Texto">
								<span>Enfermedad terminal</span>
							</div>
							<div class="Texto">
								<span>Traumatismos</span>
							</div>
						</td>
						<td>
							<div class="Texto">
								<span>Sublingual.</span>
							</div>
							<div class="Texto">
								<span>Adultos:</span>
							</div>
							<div class="Texto">
								<span>0.2 a 0.4 mg cada 6 a 8 hrs.</span>
							</div>
							<div class="Texto">
								<span>Niños:</span>
							</div>
							<div class="Texto">
								<span>3 a 6 mcg/kg de peso cada 6 a 8 horas.</span>
							</div>
						</td>
					</tr>
					<tr class="warning">
						<td>
							4
						</td>
						<td>
							<strong><em>CAPSAICINA</em></strong>
						</td>
						<td>
							<div class="Texto">
								<div class="Texto">
									<span>Dolor de leve a moderada</span><span>intensidad en:</span>
								</div>
								<div class="Texto">
									<span>Artritis reumatoide</span>
								</div>
								<div class="Texto">
									<span>Artrosis,</span>
								</div>
								<div class="Texto">
									<span>Neuralgia post-herpética</span>
								</div>
								<div class="Texto">
									<span>Neuropatía diabética Miembro</span><span>fantasma</span>
								</div>
							</div>
						</td>
						<td>
							<div class="Texto">
								<span>Adultos y mayores de 12 años:</span>
							</div>
							<div class="Texto">
								<span>Administrar de acuerdo al caso y a juicio del</span> <span>especialista</span>
							</div>
						</td>
					</tr>
					<tr class="danger">
						<td>
							5
						</td>
						<td>
							<strong><em>FENTANILO</em></strong>
						</td>
						<td>
							<div class="Texto">
								<span>Dolor crónico</span>
							</div>
							<div class="Texto">
								<span>Síndrome doloroso</span>
							</div>
							<div class="Texto">
								<span>Dolor intratable que requiera</span> <span>de analgesia opioide</span>
							</div>
						</td>
						<td>
							<div class="Texto">
								<span>Adultos:</span>
							</div>
							<div class="Texto">
								<span>4.2 mg cada 72 horas. Dosis máxima 10 mg.</span>
							</div>
							<div class="Texto">
								<span>Requiere receta de narcóticos.</span>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

</body>
</html>
