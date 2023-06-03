<?php
	//***********************************************************************************************
	// AUTOR: Ricardo Erick Rebêlo
	// Objetivo: Gerar senhas com números, maiúsculas, minúsculas e símbolos
	// Alterações:
	// 1.0   03/06/2023 - Publicação

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