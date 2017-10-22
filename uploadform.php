<?php 

class uploadform extends page
{
    
   public function get()
    {
        $form = '<form action="index.php" method="post" enctype="multipart/form-data">';
        $form .= '<input type="file" name="fileToUpload" id="fileToUpload">';
        $form .= '<input type="submit" value="Upload Image" name="submit">';
        $form .= '</form> ';
        $this->html .= '<h1>Upload Form</h1>';
        $this->html .= $form;
    }

  public function post() {
        $name= $_FILES['fileToUpload']['name'];
        $tmp_name=$_FILES['fileToUpload']['tmp_name'];
       if (isset($name)){
           if (!empty($name)){
            $location='uploads/';
            if (move_uploaded_file($tmp_name, $location.$name)){
            echo "uploaded successfully";
            }
           } else {
             echo "Please choose a file.";
            }
        }
       header('Location: index.php?page=htmlTable&file='.$name);
    }
}




?>