<?php
require_once 'modules/tipofactura/model.php';


class CreditoProveedorDetalle extends StandardObject {
	
	function __construct(TipoFactura $tipofactura=NULL) {
		$this->creditoproveedordetalle_id = 0;
		$this->numero = '';
		$this->fecha = '';
		$this->tipofactura = $tipofactura;
		$this->cuentacorrienteproveedor_id = 0;
	}
}
?>