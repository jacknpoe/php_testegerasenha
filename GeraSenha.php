<?php
	//***********************************************************************************************
	// AUTOR: Ricardo Erick Rebъlo
	// Objetivo: "rolar" dados dos RPGs de mesa mais 
	// Versуo Original (Pastebin https://pastebin.com/Vj16ynRh): 02/07/2014 - Ricardo Erick Rebъlo
	// Alteraчѕes:
	// 0.1   21/04/2023 - Conversуo
	// 1.0   21/04/2023 - Publicaчуo

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