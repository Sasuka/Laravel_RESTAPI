<!-- "get all" -->
<!-- <form action="http://travel.it/Categories" method="GET">
<input type="hidden" name="_method" value="DELETE">
	<input type="submit" name="">
	
</form> -->

 <!-- them  categories -->
<form action="http://travel.it/Categories" method="POST">
<input type="text" name="name">
<input type="text" name="keywords">
	<input type="submit" name="">
	
</form>

<!-- lay chi tiet theo id -->
<!-- <form action="http://travel.it/Categories" method="GET">

	<input type="submit" name="">
	
</form> -->

<!-- lay chi tiet theo id -->
<form action="http://travel.it/Categories/5" method="POST">
<input type="hidden" name="_method" value="PUT">
<input type="text" name="name">
<input type="text" name="keywords">
	<input type="submit" name="">
	
</form>

 <!-- xoa categories theo id -->
<form action="http://travel.it/Categories/5" method="POST">
<input type="hidden" name="_method" value="DELETE">

	<input type="submit" name="">
	
</form> 