<?php

	class ControladorInformes{


		/*=============================================
		MOSTRAR INFORMES CICLO BÁSICO            
		=============================================*/		

		static public function ctrMostrarInformes($item, $valor, $tabla, $periodo, $verifica){
			

			$respuesta = ModeloInformes::mdlMostrarInformes($item, $valor, $tabla, $periodo, $verifica);

			return $respuesta;

			//var_dump($respuesta);

		}

		/*=============================================
		MOSTRAR INFORMES ORIENTACIÓN            
		=============================================*/		

		static public function ctrMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $valor4, $tabla, $periodo, $modalidad, $verifica){


			if ($valor4 == 0) {
				
				$respuesta = ModeloInformes::mdlMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $valor4, $tabla, $periodo, $modalidad, $verifica);
			}else{

				$respuesta = ModeloInformes::mdlMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $valor4, $tabla, $periodo, $modalidad, $verifica);

			}
			

			

			return $respuesta;

			//var_dump($respuesta);

		

		}


		/*=============================================
		COPIAR SABERES CIENTIFICA           
		=============================================*/	

		static public function ctrCopiarSaberesCientifica($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesCientifica"])) {
								

					$datos = array("saberes_cientifica" => $_POST["copiaSaberesCientifica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesCientifica($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES SOCIALES           
		=============================================*/	

		static public function ctrCopiarSaberesSociales($tabla, $curso, $ncurso){

				if (isset($_POST["copiaSaberesSociales"])) {
								

					$datos = array("saberes_sociales" => $_POST["copiaSaberesSociales"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesSociales($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES LENGUA           
		=============================================*/	

		static public function ctrCopiarSaberesLengua($tabla, $curso, $ncurso){

				if (isset($_POST["copiaSaberesLengua"])) {
								

					$datos = array("saberes_lengua" => $_POST["copiaSaberesLengua"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesLengua($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES MATEMATICA           
		=============================================*/	

		static public function ctrCopiarSaberesMatematica($tabla, $curso, $ncurso){

				if (isset($_POST["copiaSaberesMatematica"])) {
								

					$datos = array("saberes_matematica" => $_POST["copiaSaberesMatematica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesMatematica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES INGLES           
		=============================================*/	

		static public function ctrCopiarSaberesIngles($tabla, $curso, $ncurso){

				if (isset($_POST["copiaSaberesIngles"])) {
								

					$datos = array("saberes_ingles" => $_POST["copiaSaberesIngles"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesIngles($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN FÍSICA           
		=============================================*/	

		static public function ctrCopiarSaberesFisica($tabla, $curso, $ncurso){

				if (isset($_POST["copiaSaberesFisica"])) {
								

					$datos = array("saberes_fisica" => $_POST["copiaSaberesFisica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesFisica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN ARTÍSTICA           
		=============================================*/	

		static public function ctrCopiarSaberesArtistica($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesArtistica"])) {
								

					$datos = array("saberes_artistica" => $_POST["copiaSaberesArtistica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesArtistica($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES EVE           
		=============================================*/	

		static public function ctrCopiarSaberesEve($tabla, $curso, $ncurso, $periodo){

			if (isset($_POST["copiaSaberesEve"])) {
							

				$datos = array("saberes_eve" => $_POST["copiaSaberesEve"], "id_curso" => $ncurso);


				$respuesta = ModeloInformes::mdlCopiarSaberesEve($tabla, $curso, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script>

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}		


		/*=============================================
		COPIAR SABERES PRINCIPIO 3          
		=============================================*/	

		static public function ctrCopiarSaberesPrincipio3($tabla, $curso, $ncurso1, $ncurso2, $periodo){

				if (isset($_POST["copiaSaberesPrincipio3"])) {
								

					$datos = array("saberes_principio3" => $_POST["copiaSaberesPrincipio3"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


					$respuesta = ModeloInformes::mdlCopiarSaberesPrincipio3($tabla, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script> 

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES ECONOMIA          
		=============================================*/	

		static public function ctrCopiarSaberesEconomia($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesEconomia"])) {
							

				$datos = array("saberes_economia" => $_POST["copiaSaberesEconomia"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesEconomia($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}


		/*=============================================
		COPIAR SABERES PRINCIPIO 4 (ECONOMIA)          
		=============================================*/	

		static public function ctrCopiarSaberesPrincipio4($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesPrincipio"])) {
							

				$datos = array("saberes_principio4" => $_POST["copiaSaberesPrincipio"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesPrincipio4($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}


		/*=============================================
		COPIAR SABERES PYMES 4 (ECONOMIA)          
		=============================================*/	

		static public function ctrCopiarSaberesPymes4($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesPymes"])) {
							

				$datos = array("saberes_pymes4" => $_POST["copiaSaberesPymes"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesPymes4($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES PYMES 5 (ECONOMIA)          
		=============================================*/	

		static public function ctrCopiarSaberesPymes5($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesPymes"])) {
							

				$datos = array("saberes_pymes5" => $_POST["copiaSaberesPymes"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesPymes5($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}			


		/*=============================================
		COPIAR SABERES PROBLEMATICAS (ECONOMIA)          
		=============================================*/	

		static public function ctrCopiarSaberesProblematicas($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesProblematicas"])) {
							

				$datos = array("saberes_problematicas" => $_POST["copiaSaberesProblematicas"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesProblematicas($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES TALLER (ECONOMIA)          
		=============================================*/	

		static public function ctrCopiarSaberesTaller($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesTaller"])) {
							

				$datos = array("saberes_taller" => $_POST["copiaSaberesTaller"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesTaller($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}


		/*=============================================
		COPIAR SABERES MOTRICIDAD (EDUCACION FISICA)          
		=============================================*/	

		static public function ctrCopiarSaberesMotricidad($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $ncurso4, $periodo){

			if (isset($_POST["copiaSaberesMotricidad"])) {
							

				$datos = array("saberes_motricidad" => $_POST["copiaSaberesMotricidad"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "id_curso4" => $ncurso4,);


				$respuesta = ModeloInformes::mdlCopiarSaberesMotricidad($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES CULTURAS (EDUCACION FISICA)          
		=============================================*/	

		static public function ctrCopiarSaberesCulturas($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $ncurso4, $periodo){

			if (isset($_POST["copiaSaberesCulturas"])) {
							

				$datos = array("saberes_culturas" => $_POST["copiaSaberesCulturas"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "id_curso4" => $ncurso4);


				$respuesta = ModeloInformes::mdlCopiarSaberesCulturas($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES DEPORTIVAS (EDUCACION FISICA)          
		=============================================*/	

		static public function ctrCopiarSaberesDeportivas($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $ncurso4, $periodo){

			if (isset($_POST["copiaSaberesDeportivas"])) {
							

				$datos = array("saberes_deportivas" => $_POST["copiaSaberesDeportivas"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "id_curso4" => $ncurso4);


				$respuesta = ModeloInformes::mdlCopiarSaberesDeportivas($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES CORPORALES (EDUCACION FISICA)          
		=============================================*/	

		static public function ctrCopiarSaberesCorporales($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $ncurso4, $periodo){

			if (isset($_POST["copiaSaberesCorporales"])) {
							

				$datos = array("saberes_corporales" => $_POST["copiaSaberesCorporales"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "id_curso4" => $ncurso4);


				$respuesta = ModeloInformes::mdlCopiarSaberesCorporales($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES INTERVENCION (EDUCACION FISICA)          
		=============================================*/	

		static public function ctrCopiarSaberesIntervencion($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $ncurso4, $periodo){

			if (isset($_POST["copiaSaberesIntervencion"])) {
							

				$datos = array("saberes_intervencion" => $_POST["copiaSaberesIntervencion"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "id_curso4" => $ncurso4);


				$respuesta = ModeloInformes::mdlCopiarSaberesIntervencion($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}


		/*=============================================
		COPIAR SABERES AMBIENTE (EDUCACION FISICA)          
		=============================================*/	

		static public function ctrCopiarSaberesAmbiente($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $ncurso4, $periodo){

			if (isset($_POST["copiaSaberesAmbiente"])) {
							

				$datos = array("saberes_ambiente" => $_POST["copiaSaberesAmbiente"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "id_curso4" => $ncurso4);


				$respuesta = ModeloInformes::mdlCopiarSaberesAmbiente($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES NATACION (EDUCACION FISICA)          
		=============================================*/	

		static public function ctrCopiarSaberesNatacion($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $ncurso4, $periodo){

			if (isset($_POST["copiaSaberesNatacion"])) {
							

				$datos = array("saberes_natacion" => $_POST["copiaSaberesNatacion"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "id_curso4" => $ncurso4);


				$respuesta = ModeloInformes::mdlCopiarSaberesNatacion($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	

		/*=============================================
		COPIAR SABERES PROYECTOS (EDUCACION FISICA)          
		=============================================*/	

		static public function ctrCopiarSaberesProyectos($tabla, $curso, $ncurso1, $ncurso2, $ncurso3, $ncurso4, $periodo){

			if (isset($_POST["copiaSaberesProyectos"])) {
							

				$datos = array("saberes_proyectos" => $_POST["copiaSaberesProyectos"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2, "id_curso3" => $ncurso3, "id_curso4" => $ncurso4);


				$respuesta = ModeloInformes::mdlCopiarSaberesProyectos($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	



		/*=============================================
		EDITAR INFORME CIENTIFICA
		=============================================*/

		static public function ctrEditarInformeCientifica($tabla,$curso){

			if (isset($_POST["saberesCientifica"])) {
								

					$datos = array("saberes_cientifica" => $_POST["saberesCientifica"], "aprecia_cientifica" => $_POST["apreciaCientifica"], "asistencia_cientifica" => $_POST["asistenciaCientifica"], "observa_cientifica" => $_POST["observaCientifica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeCientifica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME SOCIALES
		=============================================*/

		static public function ctrEditarInformeSociales($tabla,$curso){

			if (isset($_POST["saberesSociales"])) {
								

					$datos = array("saberes_sociales" => $_POST["saberesSociales"], "aprecia_sociales" => $_POST["apreciaSociales"], "asistencia_sociales" => $_POST["asistenciaSociales"], "observa_sociales" => $_POST["observaSociales"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeSociales($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME LENGUA
		=============================================*/

		static public function ctrEditarInformeLengua($tabla,$curso){

			if (isset($_POST["saberesLengua"])) {
								

					$datos = array("saberes_lengua" => $_POST["saberesLengua"], "aprecia_lengua" => $_POST["apreciaLengua"], "asistencia_lengua" => $_POST["asistenciaLengua"], "observa_lengua" => $_POST["observaLengua"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeLengua($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME MATEMATICA
		=============================================*/

		static public function ctrEditarInformeMatematica($tabla,$curso){

			if (isset($_POST["saberesMatematica"])) {
								

					$datos = array("saberes_matematica" => $_POST["saberesMatematica"], "aprecia_matematica" => $_POST["apreciaMatematica"], "asistencia_matematica" => $_POST["asistenciaMatematica"], "observa_matematica" => $_POST["observaMatematica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeMatematica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME INGLES
		=============================================*/

		static public function ctrEditarInformeIngles($tabla,$curso){

			if (isset($_POST["saberesIngles"])) {
								

					$datos = array("saberes_ingles" => $_POST["saberesIngles"], "aprecia_ingles" => $_POST["apreciaIngles"], "asistencia_ingles" => $_POST["asistenciaIngles"], "observa_ingles" => $_POST["observaIngles"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeIngles($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME EDUCACIÓN FÍSICA
		=============================================*/

		static public function ctrEditarInformeFisica($tabla,$curso){

			if (isset($_POST["saberesFisica"])) {
								

					$datos = array("saberes_fisica" => $_POST["saberesFisica"], "aprecia_fisica" => $_POST["apreciaFisica"], "asistencia_fisica" => $_POST["asistenciaFisica"], "observa_fisica" => $_POST["observaFisica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeFisica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME EDUCACIÓN ARTÍSTICA
		=============================================*/

		static public function ctrEditarInformeArtistica($tabla,$curso){

			if (isset($_POST["saberesArtistica"])) {
								

					$datos = array("saberes_artistica" => $_POST["saberesArtistica"], "aprecia_artistica" => $_POST["apreciaArtistica"], "asistencia_artistica" => $_POST["asistenciaArtistica"], "observa_artistica" => $_POST["observaArtistica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeArtistica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME EVE
		=============================================*/

		static public function ctrEditarInformeEve($tabla,$curso){

			if (isset($_POST["saberesEve"])) {
								

					$datos = array("saberes_eve" => $_POST["saberesEve"], "aprecia_eve" => $_POST["apreciaEve"], "asistencia_eve" => $_POST["asistenciaEve"], "observa_eve" => $_POST["observaEve"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeEve($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME PRINCIPIO 3 (ECONOMIA)
		=============================================*/

		static public function ctrEditarInformePrincipio3($tabla,$curso){

			if (isset($_POST["saberesPrincipio"])) {
								

					$datos = array("saberes_principio3" => $_POST["saberesPrincipio"], "aprecia_principio3" => $_POST["apreciaPrincipio"], "asistencia_principio3" => $_POST["asistenciaPrincipio"], "observa_principio3" => $_POST["observaPrincipio"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformePrincipio3($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		/*=============================================
		EDITAR INFORME ECONOMIA (ECONOMIA)
		=============================================*/

		static public function ctrEditarInformeEconomia($tabla,$curso){

			if (isset($_POST["saberesEconomia"])) {
								

					$datos = array("saberes_economia" => $_POST["saberesEconomia"], "aprecia_economia" => $_POST["apreciaEconomia"], "asistencia_economia" => $_POST["asistenciaEconomia"], "observa_economia" => $_POST["observaEconomia"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeEconomia($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME PRINCIPIO 4 (ECONOMIA)
		=============================================*/

		static public function ctrEditarInformePrincipio4($tabla,$curso){

			if (isset($_POST["saberesPrincipio"])) {
								

					$datos = array("saberes_principio4" => $_POST["saberesPrincipio"], "aprecia_principio4" => $_POST["apreciaPrincipio"], "asistencia_principio4" => $_POST["asistenciaPrincipio"], "observa_principio4" => $_POST["observaPrincipio"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformePrincipio4($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME PYMES 4 (ECONOMIA)
		=============================================*/

		static public function ctrEditarInformePymes4($tabla,$curso){

			if (isset($_POST["saberesPymes"])) {
								

					$datos = array("saberes_pymes4" => $_POST["saberesPymes"], "aprecia_pymes4" => $_POST["apreciaPymes"], "asistencia_pymes4" => $_POST["asistenciaPymes"], "observa_pymes4" => $_POST["observaPymes"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformePymes4($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME PYMES 5 (ECONOMIA)
		=============================================*/

		static public function ctrEditarInformePymes5($tabla,$curso){

			if (isset($_POST["saberesPymes"])) {
								

					$datos = array("saberes_pymes5" => $_POST["saberesPymes"], "aprecia_pymes5" => $_POST["apreciaPymes"], "asistencia_pymes5" => $_POST["asistenciaPymes"], "observa_pymes5" => $_POST["observaPymes"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformePymes5($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME PROBLEMATICAS (ECONOMIA)
		=============================================*/

		static public function ctrEditarInformeProblematicas($tabla,$curso){

			if (isset($_POST["saberesProblematicas"])) {
								

					$datos = array("saberes_problematicas" => $_POST["saberesProblematicas"], "aprecia_problematicas" => $_POST["apreciaProblematicas"], "asistencia_problematicas" => $_POST["asistenciaProblematicas"], "observa_problematicas" => $_POST["observaProblematicas"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeProblematicas($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		
		
		

		/*=============================================
		EDITAR INFORME TALLER (ECONOMIA)
		=============================================*/

		static public function ctrEditarInformeTaller($tabla,$curso){

			if (isset($_POST["saberesTaller"])) {
								

					$datos = array("saberes_taller" => $_POST["saberesTaller"], "aprecia_taller" => $_POST["apreciaTaller"], "asistencia_taller" => $_POST["asistenciaTaller"], "observa_taller" => $_POST["observaTaller"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeTaller($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		



		/*=============================================
		EDITAR INFORME MOTRICIDAD (EDUCACION FISICA)
		=============================================*/

		static public function ctrEditarInformeMotricidad($tabla,$curso){

			if (isset($_POST["saberesMotricidad"])) {
								

					$datos = array("saberes_motricidad" => $_POST["saberesMotricidad"], "aprecia_motricidad" => $_POST["apreciaMotricidad"], "asistencia_motricidad" => $_POST["asistenciaMotricidad"], "observa_motricidad" => $_POST["observaMotricidad"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeMotricidad($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		

		/*=============================================
		EDITAR INFORME CULTURAS (EDUCACION FISICA)
		=============================================*/

		static public function ctrEditarInformeCulturas($tabla,$curso){

			if (isset($_POST["saberesCulturas"])) {
								

					$datos = array("saberes_culturas" => $_POST["saberesCulturas"], "aprecia_culturas" => $_POST["apreciaCulturas"], "asistencia_culturas" => $_POST["asistenciaCulturas"], "observa_culturas" => $_POST["observaCulturas"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeCulturas($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}	
		
		/*=============================================
		EDITAR INFORME DEPORTIVAS (EDUCACION FISICA)
		=============================================*/

		static public function ctrEditarInformeDeportivas($tabla,$curso){

			if (isset($_POST["saberesDeportivas"])) {
								

					$datos = array("saberes_deportivas" => $_POST["saberesDeportivas"], "aprecia_deportivas" => $_POST["apreciaDeportivas"], "asistencia_deportivas" => $_POST["asistenciaDeportivas"], "observa_deportivas" => $_POST["observaDeportivas"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeDeportivas($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		

		/*=============================================
		EDITAR INFORME CORPORALES (EDUCACION FISICA)
		=============================================*/

		static public function ctrEditarInformeCorporales($tabla,$curso){

			if (isset($_POST["saberesCorporales"])) {
								

					$datos = array("saberes_corporales" => $_POST["saberesCorporales"], "aprecia_corporales" => $_POST["apreciaCorporales"], "asistencia_corporales" => $_POST["asistenciaCorporales"], "observa_corporales" => $_POST["observaCorporales"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeCorporales($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME INTERVENCION (EDUCACION FISICA)
		=============================================*/

		static public function ctrEditarInformeIntervencion($tabla,$curso){

			if (isset($_POST["saberesIntervencion"])) {
								

					$datos = array("saberes_intervencion" => $_POST["saberesIntervencion"], "aprecia_intervencion" => $_POST["apreciaIntervencion"], "asistencia_intervencion" => $_POST["asistenciaIntervencion"], "observa_intervencion" => $_POST["observaIntervencion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeIntervencion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME AMBIENTE (EDUCACION FISICA)
		=============================================*/

		static public function ctrEditarInformeAmbiente($tabla,$curso){

			if (isset($_POST["saberesAmbiente"])) {
								

					$datos = array("saberes_ambiente" => $_POST["saberesAmbiente"], "aprecia_ambiente" => $_POST["apreciaAmbiente"], "asistencia_ambiente" => $_POST["asistenciaAmbiente"], "observa_ambiente" => $_POST["observaAmbiente"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeAmbiente($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME NATACION (EDUCACION FISICA)
		=============================================*/

		static public function ctrEditarInformeNatacion($tabla,$curso){

			if (isset($_POST["saberesNatacion"])) {
								

					$datos = array("saberes_natacion" => $_POST["saberesNatacion"], "aprecia_natacion" => $_POST["apreciaNatacion"], "asistencia_natacion" => $_POST["asistenciaNatacion"], "observa_natacion" => $_POST["observaNatacion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeNatacion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME PROYECTOS (EDUCACION FISICA)
		=============================================*/

		static public function ctrEditarInformeProyectos($tabla,$curso){

			if (isset($_POST["saberesProyectos"])) {
								

					$datos = array("saberes_proyectos" => $_POST["saberesProyectos"], "aprecia_proyectos" => $_POST["apreciaProyectos"], "asistencia_proyectos" => $_POST["asistenciaProyectos"], "observa_proyectos" => $_POST["observaProyectos"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeProyectos($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		





		/*=============================================
		EDITAR INFORME GENERACION (TURISMO)
		=============================================*/

		static public function ctrEditarInformeGeneracion($tabla,$curso){

			if (isset($_POST["saberesGeneracion"])) {
								

					$datos = array("saberes_generacion" => $_POST["saberesGeneracion"], "aprecia_generacion" => $_POST["apreciaGeneracion"], "asistencia_generacion" => $_POST["asistenciaGeneracion"], "observa_generacion" => $_POST["observaGeneracion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeGeneracion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME PRODUCCION (TURISMO)
		=============================================*/

		static public function ctrEditarInformeProduccion($tabla,$curso){

			if (isset($_POST["saberesProduccion"])) {
								

					$datos = array("saberes_produccion" => $_POST["saberesProduccion"], "aprecia_produccion" => $_POST["apreciaProduccion"], "asistencia_produccion" => $_POST["asistenciaProduccion"], "observa_produccion" => $_POST["observaProduccion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeProduccion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}









		/*=============================================
		EDITAR INFORME APRECIACION
		=============================================*/

		static public function ctrEditarInformeApreciacion($tabla,$curso){

			if (isset($_POST["saberesApreciacion"])) {
								

					$datos = array("saberes_apreciacion" => $_POST["saberesApreciacion"], "aprecia_apreciacion" => $_POST["apreciaApreciacion"], "asistencia_apreciacion" => $_POST["asistenciaApreciacion"], "observa_apreciacion" => $_POST["observaApreciacion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeApreciacion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME LENGUAJE 3
		=============================================*/

		static public function ctrEditarInformeLenguaje3($tabla,$curso){

			if (isset($_POST["saberesLenguaje3"])) {
								

					$datos = array("saberes_lenguaje3" => $_POST["saberesLenguaje3"], "aprecia_lenguaje3" => $_POST["apreciaLenguaje3"], "asistencia_lenguaje3" => $_POST["asistenciaLenguaje3"], "observa_lenguaje3" => $_POST["observaLenguaje3"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeLenguaje3($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}



		/*=============================================
		EDITAR INFORME LENGUAJE 4 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeLenguaje4($tabla,$curso){

			if (isset($_POST["saberesLenguaje4"])) {
								

					$datos = array("saberes_lenguaje4" => $_POST["saberesLenguaje4"], "aprecia_lenguaje4" => $_POST["apreciaLenguaje4"], "asistencia_lenguaje4" => $_POST["asistenciaLenguaje4"], "observa_lenguaje4" => $_POST["observaLenguaje4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeLenguaje4($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME CONJUNTO 4 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeConjunto4($tabla,$curso){

			if (isset($_POST["saberesConjunto4"])) {
								

					$datos = array("saberes_conjunto4" => $_POST["saberesConjunto4"], "aprecia_conjunto4" => $_POST["apreciaConjunto4"], "asistencia_conjunto4" => $_POST["asistenciaConjunto4"], "observa_conjunto4" => $_POST["observaConjunto4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeConjunto4($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME VOCAL 4 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeVocal4($tabla,$curso){

			if (isset($_POST["saberesVocal4"])) {
								

					$datos = array("saberes_vocal4" => $_POST["saberesVocal4"], "aprecia_vocal4" => $_POST["apreciaVocal4"], "asistencia_vocal4" => $_POST["asistenciaVocal4"], "observa_vocal4" => $_POST["observaVocal4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeVocal4($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR LENGUAJE 5 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeLenguaje5($tabla,$curso){

			if (isset($_POST["saberesLenguaje5"])) {
								

					$datos = array("saberes_lenguaje5" => $_POST["saberesLenguaje5"], "aprecia_lenguaje5" => $_POST["apreciaLenguaje5"], "asistencia_lenguaje5" => $_POST["asistenciaLenguaje5"], "observa_lenguaje5" => $_POST["observaLenguaje5"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeLenguaje5($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR MUSICA (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeMusica($tabla,$curso){

			if (isset($_POST["saberesMusica"])) {
								

					$datos = array("saberes_musica" => $_POST["saberesMusica"], "aprecia_musica" => $_POST["apreciaMusica"], "asistencia_musica" => $_POST["asistenciaMusica"], "observa_musica" => $_POST["observaMusica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeMusica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR VOCAL 5 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeVocal5($tabla,$curso){

			if (isset($_POST["saberesVocal5"])) {
								

					$datos = array("saberes_vocal5" => $_POST["saberesVocal5"], "aprecia_vocal5" => $_POST["apreciaVocal5"], "asistencia_vocal5" => $_POST["asistenciaVocal5"], "observa_vocal5" => $_POST["observaVocal5"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeVocal5($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR TECNOLOGIA (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeTecnologia($tabla,$curso){

			if (isset($_POST["saberesTecnologia"])) {
								

					$datos = array("saberes_tecnologia" => $_POST["saberesTecnologia"], "aprecia_tecnologia" => $_POST["apreciaTecnologia"], "asistencia_tecnologia" => $_POST["asistenciaTecnologia"], "observa_tecnologia" => $_POST["observaTecnologia"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeTecnologia($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR CONJUNTO 5 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeConjunto5($tabla,$curso){

			if (isset($_POST["saberesConjunto5"])) {
								

					$datos = array("saberes_conjunto5" => $_POST["saberesConjunto5"], "aprecia_conjunto5" => $_POST["apreciaConjunto5"], "asistencia_conjunto5" => $_POST["asistenciaConjunto5"], "observa_conjunto5" => $_POST["observaConjunto5"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeConjunto5($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		
	}

 