// // Function to handle registration form submission
// function handleRegistration(event) {
//     event.preventDefault(); // Prevent default form submission
  
//     const registro = document.getElementById('register-form');
//     const formData = new FormData(registro);
  
//     const nombre = formData.get('nombre');
//     const apellido = formData.get('apellido');
//     const peso = formData.get('peso');
//     const altura = formData.get('altura');
//     const edad = formData.get('edad');
//     const email = formData.get('email');
//     const username = formData.get('username');
//     const password = formData.get('password');
  
//     // Open the database connection using a promise
//     db.open('usuarios.db')
//       .then(() => {
//         console.log("Conexión a la base de datos establecida correctamente");
  
//         // Prepare the INSERT query using prepared statements (recommended)
//         const query = `INSERT INTO usuarios (nombre, apellido, peso, altura, edad, email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)`;
//         const stmt = db.prepare(query);
  
//         // Execute the query with form data
//         stmt.run([nombre, apellido, peso, altura, edad, email, username, password])
//           .then(() => {
//             console.log("Usuario registrado exitosamente!");
//             alert("¡Registro exitoso! Gracias por unirte a NutriApp");
//           })
//           .catch(err => {
//             console.error("Error inserting data:", err);
//             alert("Ha ocurrido un error al registrarse. Intente nuevamente más tarde.");
//           });
//       })
//       .catch(err => {
//         console.error("Error al abrir la base de datos:", err);
//         // Handle database open error (optional)
//       });
//   }
  
//   // Function to handle login form submission
//   function handleLogin(event) {
//     event.preventDefault(); // Prevent default form submission
  
//     const login = document.getElementById('login-form');
//     const formData = new FormData(login);
  
//     const username = formData.get('username');
//     const password = formData.get('password');
  
//     // Open the database connection using a promise
//     db.open('usuarios.db')
//       .then(() => {
//         console.log("Conexión a la base de datos establecida correctamente");
  
//         // Prepare the SELECT query using prepared statements (recommended)
//         const query = `SELECT * FROM usuarios WHERE username = ? AND password = ?`;
//         const stmt = db.prepare(query);
  
//         // Execute the query with form data
//         stmt.get([username, password])
//           .then((user) => {
//             if (user) {
//               console.log("Inicio de sesión exitoso!");
//               alert("¡Inicio de sesión exitoso!");
//               window.location.href = "index.html";
//             } else {
//               console.error("Credenciales incorrectas");
//               alert("Las credenciales introducidas son incorrectas. Intente nuevamente.");
//             }
//           })
//           .catch(err => {
//             console.error("Error al iniciar sesión:", err);
//             // Handle database error (optional)
//           });
//       })
//       .catch(err => {
//         console.error("Error al abrir la base de datos:", err);
//         // Handle database open error (optional)
//       });
//   }
  