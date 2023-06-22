<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <input type="text" id="myInput">
<button id="focusButton">Focus on Input</button>

      <script>
// Get references to the input and button elements
const input = document.getElementById('myInput');
const focusButton = document.getElementById('focusButton');

// Add an event listener to the button
focusButton.addEventListener('click', function() {
  // Set focus on the input element
  input.focus();
});

      </script>
</body>
</html>