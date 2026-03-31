const express = require('express');
const app = express();
 
const productos = [
    { id: 1, nombre: "ordenador", precio: 800 },
    { id: 2, nombre: "ratón", precio: 20 },
    { id: 3, nombre: "teclado", precio: 50 }
];
 
app.get('/productos', (req, res) => {
    res.json(productos);
});
 
app.listen(3000, () => {
    console.log("Servidor Express en http://localhost:3000");
})