<?php
class customer{
    public $Name;
    public $Email;
    public $Mobile;
    public $Age;
    public $Profession;
    public $Organisation;
    public $Time;
    public $Date1;

    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
        
    }
    public function insertcustomerdetail($obj){
        $sql="INSERT INTO Register (Name, Email, Mobile, Age, Profession, Organisation, Time, Date) VALUES('$obj->Name','$obj->Email','$obj->Mobile','$obj->Age','$obj->Profession','$obj->Organisation','$obj->Time','$obj->Date1');";
            $result=mysqli_query($this->conn,$sql);
            if($result==TRUE)
            {
                $msg=["Form successfully submitted"];
            }
            else
            {
                $msg=["Error occurred while submitting information. Please try again later."];
            }
            
            return json_encode($msg);
    }
    public function getcutomerdetails(){
        $sql="SELECT * FROM Register;";
        $result=mysqli_query($this->conn,$sql);
        $arr=array();
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $arr[]=$row;
            }
        }
        return json_encode($arr);      
    }

}
?>