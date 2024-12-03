<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #films {
      float: left;
      width: 300px;
      background-color: lightblue;
    }
    #description {
      background-color: lightcoral;
      float: left;
      padding: 10px;
      margin: 10px;
    }
  </style>
</head>
<body>
  <h1>Películas</h1>
  <ul id="films">
  </ul>
  <div id="description">algo</div>
    <script>
    const filmsList = document.getElementById('films');
    const descriptionDiv = document.getElementById('description');

    filmsList.addEventListener('click', (e) => {
      if(e.target.tagName == 'LI') {
        loadDescription(e.target.dataset.lista);
      }
    });

    fetch('film.php')
    .then(res => res.json())
    .then(films => {
      films.forEach(film => {
        console.log(film.title);
        const li = document.createElement('li');
        li.textContent = film.title;
        li.dataset.lista = film.film_id;
        //li.addEventListener('click', () => loadDescription(film.film_id));
        filmsList.append(li);  
      });
    });

    function loadDescription(id) {
    fetch('film.php?id='+id)
    .then(res => res.json())
    .then(film => {
      //console.log(film.title);
      descriptionDiv.innerHTML = `
      <h1>${film.title}</h1>
      <h2>${film.release_year}</h2>
      <p>${film.description}</p>
      `;
    });
  }

    </script>
  
</body>
</html>