<?php 

$servername = 'localhost' 
$username = ''
$password =  'root'
$conn = mysqli_connect($servername,$username,$password);

function group_by($key,$data){
	$result = array();

	foreach($array as $val) {
		if(array_key_exists($key, $val)){
			$result [$val[$key]][] = $val;
		} else {
			$result [""][] = $val;
		}
	}
	return $result;
}


function upload(){
	$namaFile = $_FILES['file']['name'];
	$ukuranFile =$_FILES['file']['size'];
	$error = $_FILES['file']['error'];
	$tmpName = $_FILES['file']['tmp_name'];

	if ($error === 4){
		echo "
		<script>
		alert('No file uploaded');
		</script>
		";
		return false;
	}

	$fileExtention = ['docx','pdf','xlcx'];
	$validFile = explode('.', $namaFile );
	$validFile = strtolower(end($validFile));
	if(!in_array($fileExtention, $validFile)){
		echo "
		<script>
		alert('file is not valid');
		</script>
		";
		return false;	
	}

	if($ukuranFile > 1000000){
		echo "
		<script>
		alert('File's size is too big)
		</script>
		";
		return false;
	}

}

function relay(){
	$data = $_FILES['name'];

	if isset($_POST['submit']){
		$data1 = $_FILES['data1'];
		$data2 + $_FILES['data2'];

		$sql = ""
	}
}
 

 ?>
