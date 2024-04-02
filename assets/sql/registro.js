// Crear una conexión global a la base de datos
const db = new SQL.Database('usuarios.db');
db.open('usuarios')
  .then(() => {
    console.log("Conexión a la base de datos establecida correctamente");
  })
  .catch(err => {
    console.error("Error al abrir la base de datos:", err);
  });

function handleRegistration(event) {
  event.preventDefault(); // Prevent default form submission

  const registro = document.getElementById('register-form');
  const formData = new FormData(registro);
  
  const nombre = formData.get('nombre');
  const apellido = formData.get('apellido');
  const peso = formData.get('peso');
  const altura = formData.get('altura');
  const edad = formData.get('edad');
  const email = formData.get('email'); // Arreglado typo en 'email'
  const username = formData.get('username');
  const password = formData.get('password');
  
  // Prepare the INSERT query (consider using prepared statements)
  const query = `INSERT INTO usuarios (nombre, apellido, peso, altura, edad, email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)`;
  const stmt = db.prepare(query);

  // Execute the query with form data
  stmt.run([nombre, apellido, peso, altura, edad, email, username, password])
    .then(() => {
      console.log("Usuario registrado exitosamente!");
      // Show success message to the user (optional)
      alert("¡Registro exitoso! Gracias por unirte a NutriApp");
    })
    .catch(err => {
      console.error("Error inserting data:", err);
      // Show error message to the user (optional)
      alert("Ha ocurrido un error al registrarse. Intente nuevamente más tarde.");
    });
}

function handleLogin(event) {
  event.preventDefault(); // Prevent default form submission

  const login = document.getElementById('login-form');
  const formData = new FormData(login);

  const username = formData.get('username');
  const password = formData.get('password');

  // Prepare the SELECT query
  const query = `SELECT * FROM usuarios WHERE username = ? AND password = ?`;
  const stmt = db.prepare(query);

  // Execute the query with form data
  stmt.get([username, password])
    .then((user) => {
      if (user) {
        console.log("Inicio de sesión exitoso!");
        // Show success message and redirect to the home page (optional)
        alert("¡Inicio de sesión exitoso!");
        window.location.href = "index.html";
      } else {
        console.error("Credenciales incorrectas");
        // Show error message to the user (optional)
        alert("Las credenciales introducidas son incorrectas. Intente nuevamente.");
      }
    })
    .catch(err => {
      console.error("Error al iniciar sesión:", err);
      // Handle database error (optional)
      alert("Ha ocurrido un error al iniciar sesión. Intente nuevamente más tarde.");
    });
}
