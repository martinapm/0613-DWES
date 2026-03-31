const express = require('express');
const app = express();
 
app.get('/saludo/:nombre', (req, res) => {
    const nombre = req.params.nombre;
    res.send(`Hola ${nombre}, bienvenido a Node.js`);
});
 
app.listen(3000, () => {
    console.log("Servidor Express en http://localhost:3000");
});