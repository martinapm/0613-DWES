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
 
app.get('/productos/:id', (req, res) => {
    const id = parseInt(req.params.id);
    const producto = productos.find(p => p.id === id);
 
    if (producto) {
        res.json(producto);
    } else {
        res.status(404).json({ mensaje: "Producto no encontrado" });
    }
});
 
app.listen(3000, () => {
    console.log("Servidor Express en http://localhost:3000");
});