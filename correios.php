<?php
//teste frete
function calcular_frete($valor){
$cepOrigem = '06787580';
$cepDestino = '15400043';
$peso = 1;
$comprimento = 20;
$altura = 10;
$largura = 15;
$diametro = 0;
$valor = 1000;
$codigoServico = '40010'; //SEDEX: 40010 - PAC 41106

$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx/CalcPrecoPrazo?";
$url .= "nCdEmpresa=";
$url .= "&sDsSenha=";
$url .= "&sCepOrigem=$cepOrigem";
$url .= "&sCepDestino=$cepDestino";
$url .= "&nVlPeso=$peso";
$url .= "&nCdFormato=1";
$url .= "&nVlComprimento=$comprimento";
$url .= "&nVlAltura=$altura";
$url .= "&nVlLargura=$largura";
$url .= "&nVlDiametro=$diametro";
$url .= "&sCdMaoPropria=n";
$url .= "&nVlValorDeclarado=0" . $valor;
$url .= "&sCdAvisoRecebimento=n";
$url .= "&nCdServico=$codigoServico";
$url .= "&nVlDiametro=0";
$url .= "&StrRetorno=xml";

$xml = simplexml_load_file($url);
return $xml;

}
var_dump(calcular_frete(
    $valor = 1000,

));

//$valor = (float) $xml->cServico->Valor;
//$prazo = (int) $xml->cServico->PrazoEntrega;

//echo "O valor do frete é R$ $valor e o prazo de entrega é de $prazo dias";
