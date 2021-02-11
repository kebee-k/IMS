<?php
   
    class upload
    {
        public $src;
        public $tmp;
        public $filename;
        public $type;
        public $uploadfile;
        public $location;
        public $caption;
		//public $newfilename;

        public function startupload()
        {

            $this -> filename = $_FILES["file"]["name"]; // only get the attached file name
            $this -> tmp = $_FILES["file"]["tmp_name"];
			
			/*  -------- To rename the file name --------- */
			/* $path = pathinfo($this -> filename);
				//dirname   = File Path
				//basename  = Filename.Extension
				//extension = Extension
				//filename  = Filename
			$newfilename = $_SESSION['newfilename']; //$_SESSION['city']."_Table5";
			$this -> filename = $path['dirname']."/".$newfilename.".".$path['extension'];
			rename($this -> filename, $this -> filename);    */
			/* --------- End here ---------- */

			$this -> src = $_SESSION['savein'];
            $this -> uploadfile = $this -> src . basename($this -> filename);
            
            $location = $this -> uploadfile; // to display only attached file path
            $caption = $this -> filename;  // to display only attached file name

            return $location;
			
        }

        public function uploadfile()
        {         
            if(move_uploaded_file($this -> tmp, $this -> uploadfile))
            {
                return true;
            }
            else
                return false;
        }
    }

?>