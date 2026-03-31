const express = require('express');
const app = express();
 
// Middleware para leer JSON del body
app.use(express.json());
 
app.post('/usuarios', (req, res) => {
    const { nombre, edad } = req.body;
    console.log("Datos recibidos:");
    console.log("Nombre:", nombre);
    console.log("Edad:", edad);
    res.send(`Usuario ${nombre} creado correctamente`);
});
 
app.listen(3000, () => {
    console.log("Servidor Express en http://localhost:3000");
});