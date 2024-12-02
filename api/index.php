<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Página de inicio</h1>
  <!-- <a href="employee.php">Empleados</a> -->
  <button id="btn-employees">Cargar Empleados</button>
  <ul id="ul-employees">

  </ul>
  <script>
    const btnEmployees = document.getElementById('btn-employees');
    const ulEmployees = document.getElementById('ul-employees');
    const employees = [{
        "id": 1,
        "name": "Juan Pérez",
        "position": "Desarrollador Web",
        "salary": 35000,
        "hire_date": "2022-01-15"
      },
      {
        "id": 2,
        "name": "María García",
        "position": "Diseñadora Gráfica",
        "salary": 32000,
        "hire_date": "2021-03-22"
      },
      {
        "id": 3,
        "name": "Carlos López",
        "position": "Administrador de Sistemas",
        "salary": 40000,
        "hire_date": "2019-07-30"
      },
      {
        "id": 4,
        "name": "Ana Fernández",
        "position": "Analista de Datos",
        "salary": 38000,
        "hire_date": "2020-11-05"
      },
      {
        "id": 5,
        "name": "Luis Martínez",
        "position": "Gerente de Proyectos",
        "salary": 45000,
        "hire_date": "2018-09-12"
      },
      {
        "id": 6,
        "name": "Laura Sánchez",
        "position": "Desarrollador Web",
        "salary": 34000,
        "hire_date": "2021-06-18"
      },
      {
        "id": 7,
        "name": "Pedro Gómez",
        "position": "Desarrollador de Software",
        "salary": 37000,
        "hire_date": "2020-02-10"
      },
      {
        "id": 8,
        "name": "Elena Rodríguez",
        "position": "Ingeniera de Redes",
        "salary": 42000,
        "hire_date": "2019-11-25"
      },
      {
        "id": 9,
        "name": "Miguel Torres",
        "position": "Consultor de TI",
        "salary": 39000,
        "hire_date": "2020-08-14"
      },
      {
        "id": 10,
        "name": "Sara Ruiz",
        "position": "Desarrolladora Frontend",
        "salary": 36000,
        "hire_date": "2021-04-05"
      },
      {
        "id": 11,
        "name": "David Ramírez",
        "position": "Especialista en Seguridad",
        "salary": 41000,
        "hire_date": "2018-10-20"
      },
      {
        "id": 12,
        "name": "Patricia Morales",
        "position": "Diseñadora UX/UI",
        "salary": 33000,
        "hire_date": "2021-07-30"
      },
      {
        "id": 13,
        "name": "Javier Herrera",
        "position": "Administrador de Sistemas",
        "salary": 40000,
        "hire_date": "2019-05-15"
      },
      {
        "id": 14,
        "name": "Isabel Castro",
        "position": "Ingeniera de Software",
        "salary": 38000,
        "hire_date": "2020-03-12"
      },
      {
        "id": 15,
        "name": "Roberto Díaz",
        "position": "Analista de Datos",
        "salary": 37000,
        "hire_date": "2019-09-01"
      },
      {
        "id": 16,
        "name": "Cristina Vega",
        "position": "Gerente de Proyectos",
        "salary": 45000,
        "hire_date": "2018-12-05"
      }
    ];

    function addEmployee(employee) {
      const li = document.createElement('li');
      li.textContent = employee.id + ' - ' + employee.name;
      ulEmployees.append(li);
    }

    btnEmployees.addEventListener('click', () => {
      let prom = fetch('employee.php')
        .then(response => {
          if (response.ok) {
            return response.json()
          }
        })
        .then(data => {
          console.log('Acaba la promesa');
          ulEmployees.innerHTML = "";
          data.forEach(element => addEmployee(element))
        }).catch(error => {
          ulEmployees.innerHTML = "<li>Error de conexión...</li>";
        });
      ulEmployees.innerHTML = "<li>Cargando...</li>";
      console.log(prom);
    });
  </script>
</body>

</html>