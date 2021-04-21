<?php


if (isset($_POST["action"]) and $_POST["action"]=="cmd_update_ocs")
{
	if(isset($_POST["input_hely"]) and !empty($_POST["input_hely"]) and
	   isset($_POST["input_id"]) and !empty($_POST["input_id"]))
	{
		$asd = new adatbazis();
		$asd->update($_POST["input_hely"], $_POST["input_id"]);
	}
}



class adatbazis{
public $servername = "localhost";
public $username = "root";
public $password = "";
public $dbname = "berendibarnabas";	
public $conn = NULL;
public $sql = NULL;
public $result = NULL;
public $row = NULL;


public function __construct(){ $this->kapcsolodas(); }
public function __destruct(){ $this->kapcsolatbontas(); }


public function kapcsolodas(){
  // Create connection
  $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  // Check connection
  if ($this->conn->connect_error) {
    die("Connection failed: " . $this->conn->connect_error);
  }

  $this->conn->query("SET NAMES UTF8;");		
}


public function kapcsolatbontas(){
  $this->conn->close();
}


public function felvetel(){
  //INSERT INTO `orszagoscsucsok_tabla_es_adatok`(`ocs_id`, `ocs_nev`, `ocs_szuleve`, `ocs_hely`, `ocs_datum`, `ocs_kategoria`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
    echo "<div class='row'>";


      
    $this->sql = "INSERT INTO 
            (
              
            )
            VALUES
            (
              
            );";

    if ($this->conn->query($this->sql))
    {
        echo '<div style="width: 100%" class="alert alert-success"> Sikeres felvétel </div>';
    } 
        else 
        {
            echo '<div style="width: 100%" class="alert alert-warning"> Sikertelen felvétel </div>';
        }		
          
      echo "</div>";

}


public function lista(){
  $this->sql = " SELECT `ocs_id`, `ocs_nev`, `ocs_szuleve`, `ocs_hely`, `ocs_datum`, `ocs_kategoria` FROM `orszagoscsucsok_tabla_es_adatok` WHERE 1 ";
  $this->result = $this->conn->query($this->sql);
        
  if($this->result->num_rows>0)
  {
          echo "<div class='row'>";
          echo "<div class='col-sm-12'>";
          echo "<h2>Országos csúcsok listája</h2>";
          echo "</div>";
      while($this->row = $this->result->fetch_assoc())
      {
          echo "<div  class='col-sm-3'  >";
          echo   "<h4>" . $this->row["ocs_nev"] . " </h4><p>" . $this->row["ocs_szuleve"] . "<br>" . $this->row["ocs_hely"] . "<br>" . $this->row["ocs_datum"] . "<br><b>" . $this->row["ocs_kategoria"] . " </b></p>";
          echo "</div>";
      }
      echo "</div>";
  }
  else
  {
      echo "Nincs elérhető ";
  }
}


public function lista_torlesel(){
  $this->sql = " SELECT `ocs_id`, `ocs_nev`, `ocs_szuleve`, `ocs_hely`, `ocs_datum`, `ocs_kategoria` FROM `orszagoscsucsok_tabla_es_adatok` WHERE 1 ";
    $this->result = $this->conn->query($this->sql);
          
    if($this->result->num_rows>0)
    {
            echo "<div class='row'>";
            echo "<div class='col-sm-12'>";
            echo "<h2>Országos csúcsok törlése</h2>";
            echo "</div>";
        while($this->row = $this->result->fetch_assoc())
        { 
            echo "<div  class='col-sm-3'  >";
            echo   "<h4>" . $this->row["ocs_nev"] . " </h4><p>" . $this->row["ocs_szuleve"] . "<br>" . $this->row["ocs_hely"] . "<br>" . $this->row["ocs_datum"] . "<br><b>" . $this->row["ocs_kategoria"] . " </b></p>";
            echo "<a style='width: 100%; margin-bottom 20px;' class='btn btn-info' href='delete.php?torlendo=".$this->row["ocs_id"]."'>X</a>";
            echo "</div>";
        }
        echo "</div>";
    }
    else
    {
        echo "Nincs elérhető monitor";
    }
  }


public function torles($id=0){
    
    echo "<div class='row'>";


    if($id==0)
    {
        echo '<div style="width: 100%" class="alert alert-warning"> Sikertelen Törlés </div>';
    }
        else
            {
            $this->sql = "DELETE FROM `orszagoscsucsok_tabla_es_adatok` WHERE `orszagoscsucsok_tabla_es_adatok`.`ocs_id` = $id";
            if ($this->conn->query($this->sql))
            {
                echo '<div style="width: 100%" class="alert alert-success"> Sikeres Törlés </div>';
            } 
                else 
                {
                    echo '<div style="width: 100%" class="alert alert-warning"> Sikertelen Törlés </div>';
                }		
            }
        echo "</div>";
    }




public function lista_edit(){
  $this->sql = " SELECT `ocs_id`, `ocs_nev`, `ocs_szuleve`, `ocs_hely`, `ocs_datum`, `ocs_kategoria` FROM `orszagoscsucsok_tabla_es_adatok` WHERE 1 ";
    $this->result = $this->conn->query($this->sql);
          
    if($this->result->num_rows>0)
    {
            echo "<div class='row'>";
            echo "<div class='col-sm-12'>";
            echo "<h2>Országos csúcsok módosítása</h2>";
            echo "</div>";
        while($this->row = $this->result->fetch_assoc())
        { 
            echo "<div  class='col-sm-3'  >";
            echo   "<h4>" . $this->row["ocs_nev"] . " </h4><p>" . $this->row["ocs_szuleve"] . "<br>" . $this->row["ocs_hely"] . "<br>" . $this->row["ocs_datum"] . "<br><b>" . $this->row["ocs_kategoria"] . " </b></p>";

            echo "<div class='form-group'>";
            echo "<form method='POST'>";
            echo "<input type='text' class='form-group' name='input_hely' value='" . $this->row["ocs_hely"]. "' ><br>";

            echo "<input type='hidden' name='input_id' value='" . $this->row["ocs_id"]. "'>";
        
            echo " <input type='hidden' name='action' value='cmd_update_ocs'>";
            echo "  <input class='btn btn-info' type='submit' value='Helyszin moódosítása'>";

            // echo "<a style='width: 100%; margin-bottom 20px;'  href='edit.php?modositando=".$this->row["ocs_id"]."'>Helyszin moódosítása</a>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    }
    else
    {
        echo "Nincs elérhető monitor";
    }
  }


public function update($hely,$id){
  echo "<div class='row'>";

    if($id==0)
    {
        echo '<div style="width: 100%" class="alert alert-warning"> Sikertelen Törlés </div>';
    }
        else
            {
            $this->sql = "UPDATE orszagoscsucsok_tabla_es_adatok SET ocs_hely = '$hely' WHERE orszagoscsucsok_tabla_es_adatok.ocs_id = $id";
              //var_dump($this->sql);
            if ($this->conn->query($this->sql))
            {
                echo '<div style="width: 100%" class="alert alert-success"> Sikeres adatmódosítás </div>';
            } 
                else 
                {
                    echo '<div style="width: 100%" class="alert alert-warning"> Sikertelen adatmódosítás </div>';
                }		
            }
        echo "</div>";
    }
}



?>