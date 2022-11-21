<?php
// this file will manage all the CRUD operations(create , read update and delete)
// TO connect to the database we will use some tig called PDO
// PDO ~ Programming DATA Object

class DB
{
  private $dbHost = "172.31.22.43";
  private $dbUsername = "Your username here";
  private $dbPassword = "your passwrd";
  private $dbName = "your database name";
  public function __construct()
  {
    if (!isset($this->db)) {
      try {
        $conn = new PDO("mysql:host=" . $this->dbHost . ";dbName="
          . $this->dbName, $this->dbUsername, $this->dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db = $conn;
      }
      catch (PDOException $e) {
        die("Failed to connect:" . $e->getMessage());
      }
    }
  }
  public function getRows($table, $conditions = array())
  {
    $sql = 'SELECT';
    $sql .= array_key_exists("select", $conditions) ? $conditions['select'] : '*';
    $sql .= 'FROM' . $table;
    if (array_key_exists("where", $conditions)) {
      $sql .= 'WHERE';
      $i = 0;
      foreach ($conditions['where'] as $key => $value) {
        $pre = ($i>0)?' AND ' :'';
        $sql .= $pre.$key." = '".$value."'";
        $i++;
      }
    }
    if(array_key_exists("order_by,$conditions")){
      $sql .= ' ORDER_BY' .$conditions['order_by'];
    }
    if(array_key_exists("start",$conditions)&& array_key_exists("limit",$conditions)){
      $sql .= ' LIMIT ' .$conditions['start'].','.$conditions['limit'];
    }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
      $sql .= 'LIMIT'.$conditions['limit'];
    }
    $query = $this->db->prepare($sql);
    $query->execute();
    if(array_key_exists("return",$conditions)&&$conditions['return_type']!='all'){
      switch($conditions['return_type']){
        case 'count':
          $data = $query->rowCount();
           break;
          case 'single':
            $data = $query->fetch(PDO::FETCH_ASSOC);
            break;
          default:
          $data='';
      }
    }else{
      if($query->rowCount()>0){
        $data = $query->fetchALL();

      }
    }
    return !empty($data)?$data:false;
  }
  //the create function
  public function insert($table,$data){
    if(!empty($data)&& is_array($data)){
      $columns = '';
      $values = ''; 
      $i = 0;
      if(!array_key_exists('created',$data)){
        $data['created'] = date("Y-m-d H:i:s");
      }
      if(!array_key_exists('modified',$data)){
        $data['modified'] = date("Y-m-d H:i:s");
      }
      $columnString =implode(',',array_keys($data));
      $valueString  = ":".implode(',:',array_keys($data));
      $sql ="INSERT INTO".$table."(".$columnString.")VALUES(".$valueString.")";
      $query = $this->db->prepare($sql);
      foreach($data as $key => $val){
        $query->bindValue(':'.$key, $val);
      }
      $insert = $query->execute();
      return $insert?$this->db->lastInsertId():false;
    }else{return false;}
  }
}