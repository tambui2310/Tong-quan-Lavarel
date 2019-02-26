<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h1>Tính giảm giá</h1>
	<form method="post" action="calculator">
		@csrf
		<table>
		
            <p>
                <input type="text" name="description" placeholder="Mô tả của sản phẩm" /><br/>
            </p>
            <p>
                <input type="text" name="price" placeholder="Giá niêm yết của sản phẩm" /><br/>
            </p>       
            <p>   	
               	<input type="text" name="percent" placeholder="Tỷ lệ chiết khấu (%)" /><br/>
            </p>    
            <p>    
             	<input type="submit" value="Calculate Discount"/>
            </p>    
		</table>
	</form>
</body>
</html>