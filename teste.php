<?php
session_start();
include_once("conexao.php");
/* MONTAR O CABEÇALHO DO RELATÓRIO */
$result = "SELECT * FROM ifsp_lacif.consultas";
$resultado = mysqli_query($conn, $result);
$row_cons = mysqli_fetch_assoc($resultado);
$title     = $row_cons['title'];
$description = $row_cons['description'];
$start   = $row_cons['start'];
$horario   = $row_cons['horario'];
$idConvenio   = $row_cons['idConvenio'];
$celular   = $row_cons['celular'];
$cpf     = $row_cons['cpf'];
$idTipoExame    = $row_cons['idTipoExame'];

/* ***************************************** */

$html = '<div class="container-fluid">	
				<div class="form-group col-md-12">
					<div class="col-lg-2 mb-2">
						<hr>
						<table class="table table-striped table-bordered table-hover" style="font-size:12px;">
							<tr>
								<td>'.$title.', '.$title.' - '.$title.' - '.$title.' / '.$title.'</td>
							</tr>
							<tr>
								<td>'.$title.'</td>
							</tr>
							<tr>
								<td>'.$title.'</td>
							</tr>                                        
						</table>
						<hr>
					</div>                                
				</div>
				<h2 class="title text-center">Pedido nº:</h2>
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
						<thead>
							<tr>
								<th colspan="6">Pedidos realizados na loja:</th>
							</tr>
							<tr style="font-size:14px">
								<th>Número</th>
								<th>Data</th>
								<th>Situação</th>
								<th>Valor Frete</th>
								<th>Desconto</th>
								<th>Valor Total</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>	
				</div>
			   			
				<h2 class="title text-center">Detalhe do Pedido nº: </h2>
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
						<thead>
							<tr>
								<th colspan="3">Produtos do pedido</th>
							</tr>	
							<tr>
								<th>Produto</th>
								<th>Quantidade</th>
								<th>Valor</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>	
				</div>
			</div>';

/* ***************************************** */
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
//$dompdf->setPaper('A4', 'landscape');    
$dompdf->render();
$nomeArq = "Venda_";
$dompdf->stream($nomeArq.".pdf", array("Attachment"=>false));
?>