<?php

	require_once "conexion.php";

	class ModeloInformes{


	
		/*=============================================
		MOSTRAR INFORMES CICLO BÁSICO
		=============================================*/

		static public function mdlMostrarInformes($item, $valor, $tabla, $periodo, $verifica){

			if ($item != null && $verifica == false) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else if($item != null && $verifica == true){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item AND estado = 1 ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetchAll();


			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY nombre");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}





		/*=============================================
		MOSTRAR INFORMES ORIENTACIÓN 
		=============================================*/

		static public function mdlMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $valor4, $tabla, $periodo, $modalidad, $verifica){

			if ($item != null && $verifica == false) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else if($item != null && $verifica == true && $valor4 == 0){

				//$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = $valor1 OR $item = $valor2 OR $item = $valor3 AND modalidad = $modalidad AND estado = 1");

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item IN ($valor1, $valor2, $valor3) AND estado = 1 AND modalidad = '$modalidad' AND periodo = '$periodo'");

				//select * from tercero where id_curso IN (7, 8, 13) AND modalidad = 'Turismo' AND estado = 1;


				$stmt -> bindParam(":".$item, $valor1, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor2, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor3, PDO::PARAM_STR);


				$stmt -> execute();

				return $stmt -> fetchAll();


			}else if($item != null && $verifica == true && $valor4 != 0){


				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item IN ($valor1, $valor2, $valor3, $valor4) AND estado = 1 AND modalidad = '$modalidad' AND periodo = '$periodo'");

				//$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_curso >= $valor1 OR id_curso <= $valor2 OR id_curso <= $valor3 OR id_curso <= $valor4 AND modalidad = $modalidad AND estado = 1");

				$stmt -> bindParam(":".$item, $valor1, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor2, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor3, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor4, PDO::PARAM_STR);


				$stmt -> execute();

				return $stmt -> fetchAll();


			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}


		/*============================================= 
		COPIAR SABERES CIENTIFICA            
		=============================================*/

		static public function mdlCopiarSaberesCientifica($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_cientifica = :saberes_cientifica WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_cientifica", $datos["saberes_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES SOCIALES            
		=============================================*/

		static public function mdlCopiarSaberesSociales($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sociales = :saberes_sociales WHERE id_curso = :id_curso");

			$stmt->bindParam(":saberes_sociales", $datos["saberes_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES LENGUA            
		=============================================*/

		static public function mdlCopiarSaberesLengua($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_lengua = :saberes_lengua WHERE id_curso = :id_curso");

			$stmt->bindParam(":saberes_lengua", $datos["saberes_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES MATEMATICA            
		=============================================*/

		static public function mdlCopiarSaberesMatematica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_matematica = :saberes_matematica WHERE id_curso = :id_curso");

			$stmt->bindParam(":saberes_matematica", $datos["saberes_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES INGLES            
		=============================================*/

		static public function mdlCopiarSaberesIngles($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ingles = :saberes_ingles WHERE id_curso = :id_curso");

			$stmt->bindParam(":saberes_ingles", $datos["saberes_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN FÍSICA            
		=============================================*/

		static public function mdlCopiarSaberesFisica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fisica = :saberes_fisica WHERE id_curso = :id_curso");

			$stmt->bindParam(":saberes_fisica", $datos["saberes_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN ARTÍSTICA            
		=============================================*/

		static public function mdlCopiarSaberesArtistica($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_artistica = :saberes_artistica WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_artistica", $datos["saberes_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES EVE           
		=============================================*/

		static public function mdlCopiarSaberesEve($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_eve = :saberes_eve WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_eve", $datos["saberes_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		



		/*=============================================
		COPIAR SABERES PRINCIPIO 3 (ECONOMIA)           
		=============================================*/

		static public function mdlCopiarSaberesPrincipio3($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_principio3 = :saberes_principio3 WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_principio3", $datos["saberes_principio3"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES ECONOMIA (ECONOMIA)           
		=============================================*/

		static public function mdlCopiarSaberesEconomia($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_economia = :saberes_economia WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_economia", $datos["saberes_economia"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES PRINCIPIO 4 (ECONOMIA)           
		=============================================*/

		static public function mdlCopiarSaberesPrincipio4($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_principio4 = :saberes_principio4 WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_principio4", $datos["saberes_principio4"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		


		/*=============================================
		COPIAR SABERES PYMES 4 (ECONOMIA)           
		=============================================*/

		static public function mdlCopiarSaberesPymes4($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_pymes4 = :saberes_pymes4 WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_pymes4", $datos["saberes_pymes4"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		

		/*=============================================
		COPIAR SABERES PYMES 5 (ECONOMIA)           
		=============================================*/

		static public function mdlCopiarSaberesPymes5($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_pymes5 = :saberes_pymes5 WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_pymes5", $datos["saberes_pymes5"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		
		
		
		/*=============================================
		COPIAR SABERES TALLER (ECONOMIA)           
		=============================================*/

		static public function mdlCopiarSaberesTaller($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_taller = :saberes_taller WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_taller", $datos["saberes_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	
		
		
		/*=============================================
		COPIAR SABERES MOTRICIDAD (EDUCACION FISICA)           
		=============================================*/

		static public function mdlCopiarSaberesMotricidad($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_motricidad = :saberes_motricidad WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2 OR id_curso <= :id_curso3 OR id_curso <= :id_curso4");

			$stmt->bindParam(":saberes_motricidad", $datos["saberes_motricidad"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso4", $datos["id_curso4"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		


		/*=============================================
		COPIAR SABERES CULTURAS (EDUCACION FISICA)           
		=============================================*/

		static public function mdlCopiarSaberesCulturas($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_culturas = :saberes_culturas WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2 OR id_curso <= :id_curso3 OR id_curso <= :id_curso4");

			$stmt->bindParam(":saberes_culturas", $datos["saberes_culturas"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso4", $datos["id_curso4"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	


		/*=============================================
		COPIAR SABERES DEPORTIVAS (EDUCACION FISICA)           
		=============================================*/

		static public function mdlCopiarSaberesDeportivas($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_deportivas = :saberes_deportivas WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2 OR id_curso <= :id_curso3 OR id_curso <= :id_curso4");

			$stmt->bindParam(":saberes_deportivas", $datos["saberes_deportivas"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso4", $datos["id_curso4"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	


		/*=============================================
		COPIAR SABERES CORPORALES (EDUCACION FISICA)           
		=============================================*/

		static public function mdlCopiarSaberesCorporales($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_corporales = :saberes_corporales WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2 OR id_curso <= :id_curso3 OR id_curso <= :id_curso4");

			$stmt->bindParam(":saberes_corporales", $datos["saberes_corporales"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso4", $datos["id_curso4"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	
		
		
		/*=============================================
		COPIAR SABERES INTERVENCION (EDUCACION FISICA)           
		=============================================*/

		static public function mdlCopiarSaberesIntervencion($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_intervencion = :saberes_intervencion WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2 OR id_curso <= :id_curso3 OR id_curso <= :id_curso4");

			$stmt->bindParam(":saberes_intervencion", $datos["saberes_intervencion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso4", $datos["id_curso4"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	
		
		
		/*=============================================
		COPIAR SABERES AMBIENTE (EDUCACION FISICA)           
		=============================================*/

		static public function mdlCopiarSaberesAmbiente($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ambiente = :saberes_ambiente WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2 OR id_curso <= :id_curso3 OR id_curso <= :id_curso4");

			$stmt->bindParam(":saberes_ambiente", $datos["saberes_ambiente"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso4", $datos["id_curso4"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	
		

		/*=============================================
		COPIAR SABERES NATACION (EDUCACION FISICA)           
		=============================================*/

		static public function mdlCopiarSaberesNatacion($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_natacion = :saberes_natacion WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2 OR id_curso <= :id_curso3 OR id_curso <= :id_curso4");

			$stmt->bindParam(":saberes_natacion", $datos["saberes_natacion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso4", $datos["id_curso4"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	

		/*=============================================
		COPIAR SABERES PROYECTOS (EDUCACION FISICA)           
		=============================================*/

		static public function mdlCopiarSaberesProyectos($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_proyectos = :saberes_proyectos WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2 OR id_curso <= :id_curso3 OR id_curso <= :id_curso4");

			$stmt->bindParam(":saberes_proyectos", $datos["saberes_proyectos"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso3", $datos["id_curso3"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso4", $datos["id_curso4"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		






		/*=============================================
		EDITAR INFORME CIENTIFICA            
		=============================================*/

		static public function mdlEditarInformeCientifica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_cientifica = :saberes_cientifica, aprecia_cientifica = :aprecia_cientifica, asistencia_cientifica = :asistencia_cientifica, observa_cientifica = :observa_cientifica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_cientifica", $datos["saberes_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_cientifica", $datos["aprecia_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_cientifica", $datos["asistencia_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_cientifica", $datos["observa_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME SOCIALES            
		=============================================*/

		static public function mdlEditarInformeSociales($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sociales = :saberes_sociales, aprecia_sociales = :aprecia_sociales, asistencia_sociales = :asistencia_sociales, observa_sociales = :observa_sociales, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_sociales", $datos["saberes_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_sociales", $datos["aprecia_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_sociales", $datos["asistencia_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_sociales", $datos["observa_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME LENGUA            
		=============================================*/

		static public function mdlEditarInformeLengua($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_lengua = :saberes_lengua, aprecia_lengua = :aprecia_lengua, asistencia_lengua = :asistencia_lengua, observa_lengua = :observa_lengua, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_lengua", $datos["saberes_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_lengua", $datos["aprecia_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_lengua", $datos["asistencia_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_lengua", $datos["observa_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME MATEMATICA            
		=============================================*/

		static public function mdlEditarInformeMatematica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_matematica = :saberes_matematica, aprecia_matematica = :aprecia_matematica, asistencia_matematica = :asistencia_matematica, observa_matematica = :observa_matematica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_matematica", $datos["saberes_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_matematica", $datos["aprecia_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_matematica", $datos["asistencia_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_matematica", $datos["observa_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME INGLES            
		=============================================*/

		static public function mdlEditarInformeIngles($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ingles = :saberes_ingles, aprecia_ingles = :aprecia_ingles, asistencia_ingles = :asistencia_ingles, observa_ingles = :observa_ingles, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_ingles", $datos["saberes_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_ingles", $datos["aprecia_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_ingles", $datos["asistencia_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_ingles", $datos["observa_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME EDUCACIÓN FÍSICA            
		=============================================*/

		static public function mdlEditarInformeFisica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fisica = :saberes_fisica, aprecia_fisica = :aprecia_fisica, asistencia_fisica = :asistencia_fisica, observa_fisica = :observa_fisica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_fisica", $datos["saberes_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_fisica", $datos["aprecia_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_fisica", $datos["asistencia_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_fisica", $datos["observa_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME EDUCACIÓN ARTÍSTICA            
		=============================================*/

		static public function mdlEditarInformeArtistica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_artistica = :saberes_artistica, aprecia_artistica = :aprecia_artistica, asistencia_artistica = :asistencia_artistica, observa_artistica = :observa_artistica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_artistica", $datos["saberes_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_artistica", $datos["aprecia_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_artistica", $datos["asistencia_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_artistica", $datos["observa_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME EVE           
		=============================================*/

		static public function mdlEditarInformeEve($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_eve = :saberes_eve, aprecia_eve = :aprecia_eve, asistencia_eve = :asistencia_eve, observa_eve = :observa_eve, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_eve", $datos["saberes_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_eve", $datos["aprecia_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_eve", $datos["asistencia_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_eve", $datos["observa_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		


		/*=============================================
		EDITAR INFORME PRINCIPIO 3 (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformePrincipio3($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_principio3 = :saberes_principio3, aprecia_principio3 = :aprecia_principio3, asistencia_principio3 = :asistencia_principio3, observa_principio3 = :observa_principio3, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_principio3", $datos["saberes_principio3"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_principio3", $datos["aprecia_principio3"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_principio3", $datos["asistencia_principio3"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_principio3", $datos["observa_principio3"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME ECONOMIA (ECONOMIA)            
		=============================================*/

		static public function mdlEditarInformeEconomia($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_economia = :saberes_economia, aprecia_economia = :aprecia_economia, asistencia_economia = :asistencia_economia, observa_economia = :observa_economia, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_economia", $datos["saberes_economia"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_economia", $datos["aprecia_economia"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_economia", $datos["asistencia_economia"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_economia", $datos["observa_economia"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		



		/*=============================================
		EDITAR INFORME PRINCIPIO 4 (ECONOMIA)            
		=============================================*/

		static public function mdlEditarInformePrincipio4($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_principio4 = :saberes_principio4, aprecia_principio4 = :aprecia_principio4, asistencia_principio4 = :asistencia_principio4, observa_principio4 = :observa_principio4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_principio4", $datos["saberes_principio4"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_principio4", $datos["aprecia_principio4"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_principio4", $datos["asistencia_principio4"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_principio4", $datos["observa_principio4"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		


		/*=============================================
		EDITAR INFORME PYMES 4 (ECONOMIA)            
		=============================================*/

		static public function mdlEditarInformePymes4($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_pymes4 = :saberes_pymes4, aprecia_pymes4 = :aprecia_pymes4, asistencia_pymes4 = :asistencia_pymes4, observa_pymes4 = :observa_pymes4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_pymes4", $datos["saberes_pymes4"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_pymes4", $datos["aprecia_pymes4"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_pymes4", $datos["asistencia_pymes4"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_pymes4", $datos["observa_pymes4"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		
		
		
		/*=============================================
		EDITAR INFORME PYMES 5 (ECONOMIA)            
		=============================================*/

		static public function mdlEditarInformePymes5($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_pymes5 = :saberes_pymes5, aprecia_pymes5 = :aprecia_pymes5, asistencia_pymes5 = :asistencia_pymes5, observa_pymes5 = :observa_pymes5, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_pymes5", $datos["saberes_pymes5"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_pymes5", $datos["aprecia_pymes5"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_pymes5", $datos["asistencia_pymes5"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_pymes5", $datos["observa_pymes5"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}	
		
		
		/*=============================================
		EDITAR INFORME TALLER (ECONOMIA)            
		=============================================*/

		static public function mdlEditarInformeTaller($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_taller = :saberes_taller, aprecia_taller = :aprecia_taller, asistencia_taller = :asistencia_taller, observa_taller = :observa_taller, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_taller", $datos["saberes_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_taller", $datos["aprecia_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_taller", $datos["asistencia_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_taller", $datos["observa_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}	
		
		
		/*=============================================
		EDITAR INFORME MOTRICIDAD (EDUCACION FISICA)            
		=============================================*/

		static public function mdlEditarInformeMotricidad($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_motricidad = :saberes_motricidad, aprecia_motricidad = :aprecia_motricidad, asistencia_motricidad = :asistencia_motricidad, observa_motricidad = :observa_motricidad, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_motricidad", $datos["saberes_motricidad"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_motricidad", $datos["aprecia_motricidad"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_motricidad", $datos["asistencia_motricidad"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_motricidad", $datos["observa_motricidad"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		


		/*=============================================
		EDITAR INFORME CULTURAS (EDUCACION FISICA)            
		=============================================*/

		static public function mdlEditarInformeCulturas($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_culturas = :saberes_culturas, aprecia_culturas = :aprecia_culturas, asistencia_culturas = :asistencia_culturas, observa_culturas = :observa_culturas, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_culturas", $datos["saberes_culturas"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_culturas", $datos["aprecia_culturas"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_culturas", $datos["asistencia_culturas"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_culturas", $datos["observa_culturas"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		
		
		
		/*=============================================
		EDITAR INFORME DEPORTIVAS (EDUCACION FISICA)            
		=============================================*/

		static public function mdlEditarInformeDeportivas($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_deportivas = :saberes_deportivas, aprecia_deportivas = :aprecia_deportivas, asistencia_deportivas = :asistencia_deportivas, observa_deportivas = :observa_deportivas, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_deportivas", $datos["saberes_deportivas"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_deportivas", $datos["aprecia_deportivas"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_deportivas", $datos["asistencia_deportivas"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_deportivas", $datos["observa_deportivas"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		
		
		
		/*=============================================
		EDITAR INFORME CORPORALES (EDUCACION FISICA)            
		=============================================*/

		static public function mdlEditarInformeCorporales($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_corporales = :saberes_corporales, aprecia_corporales = :aprecia_corporales, asistencia_corporales = :asistencia_corporales, observa_corporales = :observa_corporales, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_corporales", $datos["saberes_corporales"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_corporales", $datos["aprecia_corporales"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_corporales", $datos["asistencia_corporales"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_corporales", $datos["observa_corporales"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}	
		
		
		/*=============================================
		EDITAR INFORME INTERVENCION (NATURALES)            
		=============================================*/

		static public function mdlEditarInformeintervencion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_intervencion = :saberes_intervencion, aprecia_intervencion = :aprecia_intervencion, asistencia_intervencion = :asistencia_intervencion, observa_intervencion = :observa_intervencion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_intervencion", $datos["saberes_intervencion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_intervencion", $datos["aprecia_intervencion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_intervencion", $datos["asistencia_intervencion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_intervencion", $datos["observa_intervencion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		

		/*=============================================
		EDITAR INFORME AMBIENTE (EDUCACION FISICA)            
		=============================================*/

		static public function mdlEditarInformeAmbiente($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ambiente = :saberes_ambiente, aprecia_ambiente = :aprecia_ambiente, asistencia_ambiente = :asistencia_ambiente, observa_ambiente = :observa_ambiente, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_ambiente", $datos["saberes_ambiente"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_ambiente", $datos["aprecia_ambiente"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_ambiente", $datos["asistencia_ambiente"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_ambiente", $datos["observa_ambiente"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}	
		
		
		/*=============================================
		EDITAR INFORME NATACION (EDUCACION FISICA)            
		=============================================*/

		static public function mdlEditarInformeNatacion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_natacion = :saberes_natacion, aprecia_natacion = :aprecia_natacion, asistencia_natacion = :asistencia_natacion, observa_natacion = :observa_natacion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_natacion", $datos["saberes_natacion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_natacion", $datos["aprecia_natacion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_natacion", $datos["asistencia_natacion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_natacion", $datos["observa_natacion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME PROYECTOS (EDUCACION FISICA)            
		=============================================*/

		static public function mdlEditarInformeProyectos($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_proyectos = :saberes_proyectos, aprecia_proyectos = :aprecia_proyectos, asistencia_proyectos = :asistencia_proyectos, observa_proyectos = :observa_proyectos, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_proyectos", $datos["saberes_proyectos"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_proyectos", $datos["aprecia_proyectos"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_proyectos", $datos["asistencia_proyectos"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_proyectos", $datos["observa_proyectos"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		






		/*=============================================
	    ACTUALIZAR ALUMNO            
		=============================================*/

		static public function mdlActualizarAlumno($tabla, $item1, $valor1, $item2, $valor2){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

			$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
			$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

			if ($stmt -> execute()) {
				
				return "ok";

			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}
				
	}