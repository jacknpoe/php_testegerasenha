<?php
	//***********************************************************************************************
	// AUTOR: Ricardo Erick Reb�lo
	// Objetivo: "rolar" dados dos RPGs de mesa mais 
	// Vers�o Original (Pastebin https://pastebin.com/Vj16ynRh): 02/07/2014 - Ricardo Erick Reb�lo
	// Altera��es:
	// 0.1   21/04/2023 - Convers�o
	// 1.0   21/04/2023 - Publica��o

	namespace jacknpoe;

	//***********************************************************************************************
	// Classe DungeonsAndDragos (D&D)

	class GeraSenha
	{

		function GeraSenha( $tamanho = 10)
		{
			$acumulador = "";
			for( $indice = 0; $indice < $tamanho; $indice++)
			{
				$acumulador .= chr( rand( 33, 126));
			}
			return $acumulador;
		}
	}
?>