// Function to handle registration form submission
async function handleRegistration(event) {
  event.preventDefault();

  const registro = document.getElementById('register-form');
  const formData = new FormData(registro);

  const nombre = formData.get('nombre');
  const apellido = formData.get('apellido');
  const peso = formData.get('peso');
  const altura = formData.get('altura');
  const edad = formData.get('edad');
  const email = formData.get('email');
  const username = formData.get('username');
  const password = formData.get('password');

  try {
    const request = indexedDB.open('usuarios', 1); // Version 1 or create
    const db = await request;
    const tx = db.transaction('usuarios', 'readwrite'); // Create transaction
    const store = tx.objectStore('usuarios'); // Access object store

    await store.add({
      nombre,
      apellido,
      peso,
      altura,
      edad,
      email,
      username,
      password
    }); // Add user data to object store

    console.log("Usuario registrado exitosamente!");
    alert("¡Registro exitoso! Gracias por unirte a NutriApp");
  } catch (err) {
    console.error("Error registering user:", err);
    alert("Ha ocurrido un error al registrarse. Intente nuevamente más tarde.");
  }
}



async function handleLogin(event) {
  event.preventDefault();

  const login = document.getElementById('login-form');
  const formData = new FormData(login);

  const username = formData.get('username');
  const password = formData.get('password');

  try {
    // Abrir la base de datos
    const request = indexedDB.open('usuarios', 1);
    const db = await request;


    let foundUser = null;
    for (const key in db) {
      if (key !== 'version' && key !== 'name') { // Evitar propiedades internas
        const user = await db.get(key);
        if (user && user.username === username && user.password === password) {
          foundUser = user;
          break;
        }
      }
    }

    if (foundUser) {
      // Inicio de sesión exitoso
      console.log("Inicio de sesión exitoso!");
      alert("¡Inicio de sesión exitoso!");
      window.location.href = "index.html";
    } else {
      // Credenciales incorrectas
      console.error("Credenciales incorrectas");
      alert("Las credenciales introducidas son incorrectas. Intente nuevamente.");
    }
  } catch (err) {
    // Error al iniciar sesión
    console.error("Error al iniciar sesión:", err);
    alert("Ha ocurrido un error al iniciar sesión. Intente nuevamente más tarde.");
  } finally {
    // Cerrar la conexión a la base de datos (opcional)
    db.close();
  }
}
