<?php 
  include 'connect.php';
  $sql = "SELECT * FROM `games`";
  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PLAN</title>
</head>
<body>
  <?php include 'nav.php';?>
  
  <div class="w-full max-w-lg container mx-auto mt-10">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="planner.php" method="post">
  <div class="relative">
  <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-state" name="selector">
<?php
  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $name = $row["name"];
      ?> <option><?=$name ?></option>
      <?php
    }
}
?>      
        </select>
        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    <div class="flex flex-wrap -mx-3 mt-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
        Starttijd
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="time" placeholder="00:00" name="start">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        Eindtijd
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" type="time" placeholder="00:00" name="end">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
        Uitlegger
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-password" type="text" placeholder="" name="uitleg">
    </div>
  </div>
    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
        Spelers
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-spelers" type="text" placeholder="henk, pieter, jan" name="speler">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">
    <input class="mt-2 p-2 bg-purple hover:bg-purple-light text-white font-bold border-b-4 border-purple-dark hover:border-purple rounded w-full block md:w-5/5" type="submit" value="Make">
  </div>
  </form>
</body>
</html>