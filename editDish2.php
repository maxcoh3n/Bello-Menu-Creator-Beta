<html>
  <head>
  <title>Edit Dish</title>
  </head>
  <body>

  <?php include 'common/bellodentrostarter.php'; ?>

  <h2>Edit Dish Page 2 </h2>

<?php

$CourseCategory = $_POST["CourseCategory"];
$DishID = $_POST["DishID"];
$DishName = ucwords($_POST["DishName"]);
$Ingredient1 = $_POST["Ingredient1"];
$Ingredient2 = $_POST["Ingredient2"];
$Ingredient3 = $_POST["Ingredient3"];
$Ingredient4 = $_POST["Ingredient4"];
$Ingredient5 = $_POST["Ingredient5"];
$Ingredient6 = $_POST["Ingredient6"];
$Price = $_POST["Price"];
$GlutenFree = (isset($_POST["GlutenFree"]))? 1: 0;
$Vegan = (isset($_POST["Vegan"]))? 1: 0;
$Active = (isset($_POST["Active"]))? 1: 0;
$Raw = (isset($_POST["Raw"]))? 1: 0;
$Spicy = (isset($_POST["Spicy"]))? 1: 0;



if ($cxn->connect_error)
{die("Connection failed: " . $cxn->connect_error);}

$query = "UPDATE Dishes SET
	CourseCategory = '$CourseCategory',
	DishName = '$DishName',
	Ingredient1 = '$Ingredient1',
	Ingredient2 = '$Ingredient2',
	Ingredient3 = '$Ingredient3',
	Ingredient4 = '$Ingredient4',
	Ingredient5 = '$Ingredient5',
	Ingredient6 = '$Ingredient6',
	GlutenFree = '$GlutenFree',
	Active = '$Active',
	Raw = '$Raw',
	Spicy = '$Spicy',
	Vegan = '$Vegan'
WHERE DishID = '$DishID'" ;

$retval = mysqli_query($cxn, $query)
or die('Could not Update Dish; ' . mysqli_error($cxn));
echo "Updated data successfully\n";
mysqli_close($cxn);

?>
</body>
</html>