<?php 
 
    if ( isset($_POST['submit']) ) {
        
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
 
        $opt = $_POST['opt'];
 
        $result = calculator($val1, $val2, $opt);
    }
 
    function calculator($value1, $value2, $opt) {
        
        switch($opt) {            
            case '+':
                $value = $value1 + $value2;
                break;
            case '-':
                $value = $value1 - $value2;
                break;
            
            case '/':
                $value = $value1 / $value2;
                break;  
		case '*':
                $value = $value1 * $value2;
                break;        
        }
        return $value;
    }
 
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Addtion, Substraction, Multiplication &amp; Division using PHP!</title>
	</head>
	<body>
		<div class="container">
            <form action="" method="post">
                <div class="row">
                    <h3>Addition, Subtraction , Multiplication &amp; Division using PHP!</h3>
                    <hr />
                    <div class="col-lg-1">
                        <label for="desc">Value 1:</label> 
                    </div>
                    <div class="col-lg-1">
                        <input type="number" name="val1" class="form-control" id="val1" min=0 value="<?=( isset($val1) ) ? $val1 : 2;?>" required>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-lg-1">
                        <label for="desc">Value 2:</label> 
                    </div>
                    <div class="col-lg-1">
                        <input type="number" name="val2" class="form-control" id="val2" min=0 value="<?=( isset($val1) ) ? $val2 : 2;?>" required>
                    </div>
                    <div class="col-lg-1">
                        <select id="opt" name="opt" class="form-control" required>
                            <option></option>
                            <option>+</option>
                            <option>-</option>
				    <option>*</option>
                            <option>/</option>
                        </select>
                    </div>
    
                </div>
                <br />
                <div class="row">                    
                    <div class="col-lg-1">
                        <label for="desc"><p style="color:blue">Answer:</p></label> 
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" id="ans"  value="<?=( isset($result) ) ? $result : ''; ?>" readonly>   
                    </div>
                    <div class="col-lg-1">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
		</div>

<link rel="stylesheet" href="my.css"> 

	</body>
</html>
