<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id = "ing_form">
    <label for = "ing_name">Ingredient Name</label>
    <input type="text" id="ingrident_name" name="ing_name"><br>
    <label for = "cooking_time">Cooking Time</labelTime</label>
    <input type="text" id="cooking_time"><br>
    <label for = "cooking_temp">Cooking Temperature</labelTime</label>
    <input type="text" id="cooking_temp"><br>
    <label for = "calories">Calories</label>
    <input type="text" id="calories"><br>
    <label for = "image">Uplaoad Image</label>
    <input type="file" id="image" name="image" accept="image/*"><br>
    <input type="submit" value = "Add Ingredient" id = "add_ing">
    
    
</form>

<script src="ajax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type = "text/javascript">
  console.log("hello")
  $(function () {

    $('#ing_form').on('submit', function (e) {
        e.preventDefault();
        console.log("clicked!!");
        var ingredientName = $('#ing_name').val();
        var cookingTime = $('#cooking_time').val();
        var cookingTemperature = $('#cooking_temp').val();
        var calories = $('#calories').val();
        var form_data = new FormData(this);
        
        if(!ingredientName || !cookingTime || !cookingTemperature || !calories){
            alert("All Field are Required")
        }
        else{
            console.log("sucess")
            console.log(ingredientName, cookingTime, cookingTemperature,calories)

            $.ajax({
            type: 'post',
            url: 'add_ingredients.php',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,

            success: function(response){
                    console.log("response");
                }
        })
      }});

  
  });

</script>
</body>
</html>
