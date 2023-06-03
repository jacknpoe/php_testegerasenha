<?php
	//***********************************************************************************************
	// AUTOR: Ricardo Erick Reb�lo
	// Objetivo: Gerar senhas com n�meros, mai�sculas, min�sculas e s�mbolos
	// Altera��es:
	// 1.0   03/06/2023 - Publica��o

	namespace jacknpoe;

	//***********************************************************************************************
	// Classe GeraSenha

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