<div class="row">
	@foreach($widgets as $widget)
	@include($widget->view)
	@endforeach
</div>

<div class="row">
	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-primary">
			<div class="card-body pb-0">
				<div class="btn-group float-right">
					<button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="icon-settings"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item active" href="#">Hoje</a>
						<a class="dropdown-item" href="#">Total</a>
					</div>
				</div>
				<div class="text-value">R$ 9.823,53</div>
				<div>Vendas</div>
			</div>
			<div class="chart-wrapper mt-3 mx-3" style="height:70px;">
				<canvas class="chart" id="card-chart1" height="70"></canvas>
			</div>
		</div>
	</div>
	<!-- /.col-->
	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-info">
			<div class="card-body pb-0">
				<div class="btn-group float-right">
					<button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="icon-settings"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Hoje</a>
						<a class="dropdown-item active" href="#">Total</a>
					</div>
				</div>
				<div class="text-value">34</div>
				<div>Pedidos</div>
			</div>
			<div class="chart-wrapper mt-3 mx-3" style="height:70px;">
				<canvas class="chart" id="card-chart2" height="70"></canvas>
			</div>
		</div>
	</div>
	<!-- /.col-->
	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-warning">
			<div class="card-body pb-0">
				<div class="btn-group float-right">
					<button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="icon-settings"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item active" href="#">Hoje</a>
						<a class="dropdown-item" href="#">Total</a>
					</div>
				</div>
				<div class="text-value">R$ 823,54</div>
				<div>Ticket Médio</div>
			</div>
			<div class="chart-wrapper mt-3" style="height:70px;">
				<canvas class="chart" id="card-chart3" height="70"></canvas>
			</div>
		</div>
	</div>
	<!-- /.col-->
	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-danger">
			<div class="card-body pb-0">
				<div class="btn-group float-right">
					<button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="icon-settings"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item active" href="#">Hoje</a>
						<a class="dropdown-item" href="#">Total</a>
					</div>
				</div>
				<div class="text-value">27 Unidades</div>
				<div>Cadeira DXRacer F-Series (Azul)</div>
			</div>
			<div class="chart-wrapper mt-3 mx-3" style="height:70px;">
				<canvas class="chart" id="card-chart4" height="70"></canvas>
			</div>
		</div>
	</div>
	<!-- /.col-->
</div>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-5">
				<h4 class="card-title mb-0">Vendas</h4>
			</div>
			<!-- /.col-->
			<div class="col-sm-7 d-none d-md-block">
				<div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
					<label class="btn btn-outline-secondary active">
						<input id="option1" type="radio" name="options" autocomplete="off"> Hora
					</label>
					<label class="btn btn-outline-secondary">
						<input id="option2" type="radio" name="options" autocomplete="off" checked=""> Dia
					</label>
				</div>
			</div>
			<!-- /.col-->
		</div>
		<!-- /.row-->
		<div class="chart-wrapper" style="height:300px;margin-top:40px;">
			<canvas class="chart" id="main-chart" height="300"></canvas>
		</div>
	</div>
	<div class="card-footer">
		<div class="row text-center">
			<div class="col-sm-12 col-md mb-sm-2 mb-0">
				<div class="text-muted">20/02/2020</div>
				<strong>R$ 8.030,43</strong>
				<div class="progress progress-xs mt-2">
					<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-sm-12 col-md mb-sm-2 mb-0">
				<div class="text-muted">21/02/2020</div>
				<strong>R$ 7.330,43</strong>
				<div class="progress progress-xs mt-2">
					<div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-sm-12 col-md mb-sm-2 mb-0">
				<div class="text-muted">22/02/2020</div>
				<strong>R$ 8.030,43</strong>
				<div class="progress progress-xs mt-2">
					<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-sm-12 col-md mb-sm-2 mb-0">
				<div class="text-muted">23/02/2020</div>
				<strong>R$ 5.230,43</strong>
				<div class="progress progress-xs mt-2">
					<div class="progress-bar bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-6 col-lg-3">
		<div class="card">
			<div class="card-body p-0 d-flex align-items-center">
				<i class="fa fa-money bg-primary p-4 px-5 font-2xl mr-3"></i>
				<div>
					<div class="text-value-sm text-primary">R$103.999,50</div>
					<div class="text-muted text-uppercase font-weight-bold small">Total de Vendas</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.col-->
	<div class="col-6 col-lg-3">
		<div class="card">
			<div class="card-body p-0 d-flex align-items-center">
				<i class="fa fa-shopping-basket bg-info p-4 px-5 font-2xl mr-3"></i>
				<div>
					<div class="text-value-sm text-info">154</div>
					<div class="text-muted text-uppercase font-weight-bold small">Total de Pedidos</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.col-->
	<div class="col-6 col-lg-3">
		<div class="card">
			<div class="card-body p-0 d-flex align-items-center">
				<i class="fa fa-ticket bg-warning p-4 px-5 font-2xl mr-3"></i>
				<div>
					<div class="text-value-sm text-warning">$12.434,43</div>
					<div class="text-muted text-uppercase font-weight-bold small">Ticket Médio</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.col-->
	<div class="col-6 col-lg-3">
		<div class="card">
			<div class="card-body p-0 d-flex align-items-center">
				<i class="fa fa-cube bg-danger p-4 px-5 font-2xl mr-3"></i>
				<div>
					<div class="text-value-sm text-danger">43 Unidades</div>
					<div class="text-muted text-uppercase font-weight-bold small">Cadeira DXRacer Azul</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.col-->
</div>

<div class="card-deck card-columns cols-2">
	<div class="card">
		<div class="card-header">Market Share por categoria de produtos 
			<div class="card-header-actions">
			</div>
		</div>
		<div class="card-body">
			<div class="chart-wrapper">
				<canvas id="canvas-3"></canvas>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header">Produtos mais vendidos
			<div class="card-header-actions">
			</div>
		</div>
		<div class="card-body">
			
			<table class="table table-responsive-sm table-smd table-hover">
				<thead>
					<tr>
						<th></th>
						<th>Descrição</th>
						<th>Preço</th>
						<th class="text-center">Unidades</th>
						<th>Total Bruto</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><img src="https://www.e-cadeiras.com.br/ccstore/v1/images/?source=/file/v4727738909922050738/products/EC000013173%20-%20CADEIRA%20PRESIDENTE%20CORINTO%20CINZA%20E%20BRANCA-1.jpg&height=777&width=585" alt="..." class="rounded" style="height: 50px;"></td>
						<td style="vertical-align:middle !important">Cadeira DX Racer F - Series</td>
						<td style="vertical-align:middle !important">R$ 1356,58</td>
						<td style="vertical-align:middle !important" class="text-center">
							32
						</td>
						<td style="vertical-align:middle !important">R$ 34.356,58</td>
					</tr>
					<tr>
						<td><img src="https://www.e-cadeiras.com.br/ccstore/v1/images/?source=/file/v4727738909922050738/products/EC000013173%20-%20CADEIRA%20PRESIDENTE%20CORINTO%20CINZA%20E%20BRANCA-1.jpg&height=777&width=585" alt="..." class="rounded" style="height: 50px;"></td>
						<td style="vertical-align:middle !important">Cadeira DX Racer F - Series</td>
						<td style="vertical-align:middle !important">R$ 1356,58</td>
						<td style="vertical-align:middle !important" class="text-center">
							32
						</td>
						<td style="vertical-align:middle !important">R$ 34.356,58</td>
					</tr>
					<tr>
						<td><img src="https://www.e-cadeiras.com.br/ccstore/v1/images/?source=/file/v4727738909922050738/products/EC000013173%20-%20CADEIRA%20PRESIDENTE%20CORINTO%20CINZA%20E%20BRANCA-1.jpg&height=777&width=585" alt="..." class="rounded" style="height: 50px;"></td>
						<td style="vertical-align:middle !important">Cadeira DX Racer F - Series</td>
						<td style="vertical-align:middle !important">R$ 1356,58</td>
						<td style="vertical-align:middle !important" class="text-center">
							32
						</td>
						<td style="vertical-align:middle !important">R$ 34.356,58</td>
					</tr>
					<tr>
						<td><img src="https://www.e-cadeiras.com.br/ccstore/v1/images/?source=/file/v4727738909922050738/products/EC000013173%20-%20CADEIRA%20PRESIDENTE%20CORINTO%20CINZA%20E%20BRANCA-1.jpg&height=777&width=585" alt="..." class="rounded" style="height: 50px;"></td>
						<td style="vertical-align:middle !important">Cadeira DX Racer F - Series</td>
						<td style="vertical-align:middle !important">R$ 1356,58</td>
						<td style="vertical-align:middle !important" class="text-center">
							32
						</td>
						<td style="vertical-align:middle !important">R$ 34.356,58</td>
					</tr>
					<tr>
						<td><img src="https://www.e-cadeiras.com.br/ccstore/v1/images/?source=/file/v4727738909922050738/products/EC000013173%20-%20CADEIRA%20PRESIDENTE%20CORINTO%20CINZA%20E%20BRANCA-1.jpg&height=777&width=585" alt="..." class="rounded" style="height: 50px;"></td>
						<td style="vertical-align:middle !important">Cadeira DX Racer F - Series</td>
						<td style="vertical-align:middle !important">R$ 1356,58</td>
						<td style="vertical-align:middle !important" class="text-center">
							32
						</td>
						<td style="vertical-align:middle !important">R$ 34.356,58</td>
					</tr>
				</tbody>
			</table>
			<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">Performace Representantes</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="callout callout-dark">
									<small class="text-muted">Representante destaque</small>
									<br>
									<strong class="h4">Pedro Vasconcelos</strong>
									<div class="chart-wrapper">
										<canvas id="sparkline-chart-1" width="100" height="30"></canvas>
									</div>
								</div>
							</div>
							<!-- /.col-->
							<div class="col-sm-6">
								<div class="callout callout-primary">
									<small class="text-muted">Vendas</small>
									<br>
									<strong class="h4">R$ 23.222,643</strong>
									<div class="chart-wrapper">
										<canvas id="sparkline-chart-2" width="100" height="30"></canvas>
									</div>
								</div>
							</div>
							<!-- /.col-->
						</div>
						<!-- /.row-->
						<hr class="mt-0">
						<div class="progress-group mb-4">
							<div class="progress-group-prepend">
								<span class="progress-group-text">Leonado Borges</span>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="R$ 23.222,643 - 94% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-info" role="progressbar" style="width: 94%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="50 Pedidos concluidos - 78% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="R$ 4.500,43 Ticket Médio - 56% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group mb-4">
							<div class="progress-group-prepend">
								<span class="progress-group-text">Gustavo Silva</span>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="94% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-info" role="progressbar" style="width: 88%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="78% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="56% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group mb-4">
							<div class="progress-group-prepend">
								<span class="progress-group-text">Jailon Paiva</span>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="94% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="78% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="56% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group mb-4">
							<div class="progress-group-prepend">
								<span class="progress-group-text">Kaka Mendoça</span>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="94% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-info" role="progressbar" style="width: 73%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="78% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="56% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-success" role="progressbar" style="width: 83%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group mb-4">
							<div class="progress-group-prepend">
								<span class="progress-group-text">Saitama Masai</span>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="94% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="78% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="56% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-success" role="progressbar" style="width: 23%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.col-->
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="callout callout-danger">
									<small class="text-muted">Pedidos Concluídos</small>
									<br>
									<strong class="h4">32</strong>
									<div class="chart-wrapper">
										<canvas id="sparkline-chart-3" width="100" height="30"></canvas>
									</div>
								</div>
							</div>
							<!-- /.col-->
							<div class="col-sm-6">
								<div class="callout callout-success">
									<small class="text-muted">Ticket médio</small>
									<br>
									<strong class="h4">R$ 4.500,43</strong>
									<div class="chart-wrapper">
										<canvas id="sparkline-chart-4" width="100" height="30"></canvas>
									</div>
								</div>
							</div>
							<!-- /.col-->
						</div>
						<!-- /.row-->
						<hr class="mt-0">
						<div class="progress-group mb-4">
							<div class="progress-group-prepend">
								<span class="progress-group-text">Leonado Borges</span>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="94% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-info" role="progressbar" style="width: 94%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="78% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="56% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group mb-4">
							<div class="progress-group-prepend">
								<span class="progress-group-text">Gustavo Silva</span>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="94% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-info" role="progressbar" style="width: 88%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="78% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="56% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group mb-4">
							<div class="progress-group-prepend">
								<span class="progress-group-text">Jailon Paiva</span>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="94% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="78% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="56% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group mb-4">
							<div class="progress-group-prepend">
								<span class="progress-group-text">Kaka Mendoça</span>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="94% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-info" role="progressbar" style="width: 73%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="78% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="56% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-success" role="progressbar" style="width: 83%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="progress-group mb-4">
							<div class="progress-group-prepend">
								<span class="progress-group-text">Saitama Masai</span>
							</div>
							<div class="progress-group-bars">
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="94% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="78% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress progress-xs" data-toggle="tooltip" data-placement="left" title="56% de Vendas em relação ao Pedro Vasconcelos">
									<div class="progress-bar bg-success" role="progressbar" style="width: 23%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.col-->
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
@push('scripts')
{{ Html::script('modules/dashboard/coreui/node_modules/chart.js/dist/Chart.min.js') }}
{{ Html::script('modules/dashboard/coreui/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js') }}

<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})

	Chart.defaults.global.pointHitDetectionRadius = 1;
	Chart.defaults.global.tooltips.enabled = false;
	Chart.defaults.global.tooltips.mode = 'index';
	Chart.defaults.global.tooltips.position = 'nearest';
	Chart.defaults.global.tooltips.custom = CustomTooltips;
	Chart.defaults.global.tooltips.intersect = false;




	var cardChart1 = new Chart($('#card-chart1'), {
		type: 'line',
		data: {
			labels: ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'],
			datasets: [{
				label: 'Total Vendas Hora',
				backgroundColor: getStyle('--primary'),
				borderColor: 'rgba(255,255,255,.55)',
				data: [3265.43, 5932.43, 3284.43, 1284.43, 4351.67, 5655.65, 9043.45, 0, 5532.54, 200]
			}]
		},
		options: {
			tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						var label = data.datasets[tooltipItem.datasetIndex].label || '';

						if (label) {
							label += ': ';
						}
						label += 'R$ '+tooltipItem.yLabel.toLocaleString('pt-BR');
						return label;
					}
				}
			},
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					display: false,
					ticks: {
						display: false,
						min: 0,
						max: 10000
					}
				}]
			},
			elements: {
				line: {
					borderWidth: 1
				},
				point: {
					radius: 4,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	});


	var cardChart2 = new Chart($('#card-chart2'), {
		type: 'line',
		data: {
			labels: ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'],
			datasets: [{
				label: 'Total Pedidos Hora',
				backgroundColor: getStyle('--info'),
				borderColor: 'rgba(255,255,255,.55)',
				data: [3, 5, 9, 23, 45, 12, 2, 43, 23, 43]
			}]
		},
		options: {
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					display: false,
					ticks: {
						display: false,
						min: 0,
						max: 50
					}
				}]
			},
			elements: {
				line: {
					tension: 0.00001,
					borderWidth: 1
				},
				point: {
					radius: 4,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	});


	var cardChart3 = new Chart($('#card-chart3'), {
		type: 'line',
		data: {
			labels: ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'],
			datasets: [{
				label: 'Ticket Médio Hora',
				backgroundColor: 'rgba(255,255,255,.2)',
				borderColor: 'rgba(255,255,255,.55)',
				data: [165.43, 532.43, 384.43, 684.43, 451.67, 900, 343.45, 0, 232.54, 40]
			}]
		},
		options: {
			tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						var label = data.datasets[tooltipItem.datasetIndex].label || '';

						if (label) {
							label += ': ';
						}
						label += 'R$ '+tooltipItem.yLabel.toLocaleString('pt-BR');
						return label;
					}
				}
			},
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					display: false
				}],
				yAxes: [{
					display: false,
					min: 0,
					max: 1000
				}]
			},
			elements: {
				line: {
					borderWidth: 2
				},
				point: {
					radius: 4,
					//hitRadius: 10,
					//hoverRadius: 4
				}
			}
		}
	});

	var cardChart4 = new Chart($('#card-chart4'), {
		type: 'bar',
		data: {
			labels: ['Cadeira DXRacer F-Series (Azul)', 'Cadeira DXRacer S-Series (Black)', 'Cadeira DXRacer F-Series (Vermelho)', 'Cadeira DXRacer T-Series (Branco)', 'Cadeira DXRacer M-Series (Preto)', 'Cadeira DXRacer T-Series (Rosa)', 'Cadeira DXRacer V-Series (Azul)', 'Cadeira DXRacer V-Series (Cinzal)', 'Cadeira DXRacer V-Series (Dourado)', 'Cadeira DXRacer K-Series (Azul)'],
			datasets: [{
				label: '',
				backgroundColor: 'rgba(255,255,255,.2)',
				borderColor: 'rgba(255,255,255,.55)',
				data: [27, 25, 21, 17, 15, 13, 9, 9, 7, 5, 5, 4, 4, 4, 2, 2]
			}]
		},
		options: {
			tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						return tooltipItem.yLabel+' unidades vendidas';
					}
				}
			},
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					display: false,
					barPercentage: 0.6
				}],
				yAxes: [{
					display: false
				}]
			}
		}
	});


	var doughnutChart = new Chart($('#canvas-3'), {
		type: 'doughnut',
		data: {
			labels: ['Pratos', 'Copos', 'Talheres', 'Vasilhas', 'Porcelana', 'Bajour'],
			datasets: [{
				data: [300, 50, 100, 43, 54, 87],
				backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#63c2de', '#4dbd74', '#c8ced3'],
				hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#63c2de', '#c8ced3']
			}]
		},
		options: {
			responsive: true,
		}
	}); 

	Chart.defaults.global.tooltips.callbacks.labelColor = function (tooltipItem, chart) {
		return {
			backgroundColor: chart.data.datasets[tooltipItem.datasetIndex].borderColor
		};
}; // eslint-disable-next-line no-unused-vars

var mainChart = new Chart($('#main-chart'), {
	type: 'line',
	data: {
		labels: ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'],
		datasets: [{
			label: '20/02/2020',
			backgroundColor: 'transparent',
			borderColor: getStyle('--info'),
			pointHoverBackgroundColor: '#fff',
			borderWidth: 2,
			data: [3265.43, 5932.43, 3284.43, 1284.43, 4351.67, 5655.65, 9043.45, 0, 5532.54, 200]
		}, {
			label: '21/02/2020',
			backgroundColor: 'transparent',
			borderColor: getStyle('--success'),
			pointHoverBackgroundColor: '#fff',
			borderWidth: 2,
			data: [5465.43, 6532.43, 2184.43, 6584.43, 9871.67, 5455.65, 3443.45, 0, 3232.54, 540]
		}, {
			label: '22/02/2020',
			backgroundColor: 'transparent',
			borderColor: getStyle('--secondary'),
			pointHoverBackgroundColor: '#fff',
			borderWidth: 1,
			data: [3265.43, 2332.43, 1284.43, 6584.43, 3251.67, 5455.65, 43, 4332, 552.54, 1200]
		}, {
			label: '23/02/2020',
			backgroundColor: 'transparent',
			borderColor: getStyle('--warning'),
			pointHoverBackgroundColor: '#fff',
			borderWidth: 1,
			data: [3265.43, 5432.43, 4384.43, 684.43, 3351.67, 5885.65, 900, 2332, 5562.54, 1500]
		},{
			label: 'Media',
			backgroundColor: 'transparent',
			borderColor: getStyle('--danger'),
			pointHoverBackgroundColor: '#fff',
			borderWidth: 1,
			borderDash: [8, 5],
			data: [3000, 3000, 3000, 3000, 3000, 3000, 3000, 3000, 3000, 3000]
		}]
	},
	options: {
		tooltips: {
			callbacks: {
				label: function(tooltipItem, data) {
					var label = data.datasets[tooltipItem.datasetIndex].label || '';

					if (label) {
						label += ': ';
					}
					label += 'R$ '+tooltipItem.yLabel.toLocaleString('pt-BR');
					return label;
				},
				title: function(tooltipItem, data) {
					console.log(tooltipItem);
					console.log(data);
					return 'Horário - '+tooltipItem[0].xLabel;
				}
			}
		},
		maintainAspectRatio: false,
		legend: {
			display: false
		},
		scales: {
			xAxes: [{
				gridLines: {
					drawOnChartArea: false
				}
			}],
			yAxes: [{
				ticks: {
					beginAtZero: true,
					maxTicksLimit: 5,
					stepSize: Math.ceil(250 / 5),

				}
			}]
		},
		elements: {
			line: {
				tension: 0.00001,
			},
			point: {
				radius: 0,
				hitRadius: 10,
				hoverRadius: 4,
				hoverBorderWidth: 3
			}
		}
	}
});


</script>
@endpush