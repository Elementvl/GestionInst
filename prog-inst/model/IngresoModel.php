<?php
	 class IngresoModel{
		
		//Declaramos atributos privados
		private $db;
	 
		//Declaramos un constructor que sirve para incializar los atributos
		public function __construct(){
			require_once("db/db.php");
			//Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
			//Conectar es la clase y conexion es el metodo
			$this->db = Conexion::ConexionBD();
			//Determinamos que el atributo personas será un array
		
		}	

		function getIngresos(){
			//Realizamos la consulta y guardamos el resultado en la variable $result
			$result = $this->db->query("SELECT i.id_ingreso,i.fecha,i.hora,p.ci,p.nombre,p.rol,i.motivo 
			FROM ingreso i INNER JOIN persona p ON i.ci=p.ci");
			//Recorremos el array de la consulta y lo guardamos en la variable $row
			while($row = $result->fetch_assoc()){
				//Guardamos en el array $this->personas cada fila que devuelve la consulta
				$this->ingresos[]=$row;
			}
			//Devolvemos el array personas
			return $this->ingresos;

		}


		public function AddReg() {
			// Obtenemos la fecha y hora actual
			$fecha = date("Y-m-d");
			$hora = date("H:i:s");
			
			// Suponiendo que $_SESSION['ci'] contiene el valor de 'ci' que deseas insertar
			$ci = $_SESSION['ci'];
			
			// Preparamos la consulta SQL con marcadores de posición
			$sql = "INSERT INTO ingreso (fecha, hora, ci) VALUES (?, ?, ?)";
			
			// Usamos sentencias preparadas para evitar la inyección SQL
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				// Ligamos los valores a los marcadores de posición y ejecutamos la consulta
				$stmt->bind_param("sss", $fecha, $hora, $ci);
				$stmt->execute();
				
				// Verificamos si la inserción fue exitosa
				if ($stmt->affected_rows > 0) {
					// La inserción fue exitosa, puedes hacer algo aquí si es necesario
					return true;
				} else {
					// La inserción falló
					return false;
				}
				
				// Cerramos la sentencia preparada
				$stmt->close();
			} else {
			
				return false;
			}
		}

		public function AddRegGVist($ci,$motivo) {
			// Obtenemos la fecha y hora actual
			$fecha = date("Y-m-d");
			$hora = date("H:i:s");
			

			
			// Preparamos la consulta SQL con marcadores de posición
			$sql = "INSERT INTO ingreso (fecha, hora, ci, motivo) VALUES (?, ?, ?, ?)";
			
			// Usamos sentencias preparadas para evitar la inyección SQL
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				// Ligamos los valores a los marcadores de posición y ejecutamos la consulta
				$stmt->bind_param("ssss", $fecha, $hora, $ci, $motivo);
				if ($stmt->execute()) {
					// La inserción fue exitosa, puedes hacer algo aquí si es necesario
					return true;
				} else {
					// La inserción falló
					return false;
				}
				
				// Cerramos la sentencia preparada
				$stmt->close();
			} else {
				return false;
			}
		}
		

	}
