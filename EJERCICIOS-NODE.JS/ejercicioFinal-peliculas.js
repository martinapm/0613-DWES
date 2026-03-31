const express = require('express');
const app = express();
 
// Middleware para leer JSON
app.use(express.json());
 
// Array de películas (datos iniciales)
let peliculas = [
    { id: 1, titulo: "El Padrino", director: "Francis Ford Coppola", año: 1972 },
    { id: 2, titulo: "Pulp Fiction", director: "Quentin Tarantino", año: 1994 },
    { id: 3, titulo: "Interstellar", director: "Christopher Nolan", año: 2014 }
];
 
// Variable para generar IDs automáticos
let siguienteId = 4;
 
// GET /peliculas - Mostrar todas las películas
app.get('/peliculas', (req, res) => {
    res.json(peliculas);
});
 
// GET /peliculas/:id - Mostrar una película por ID
app.get('/peliculas/:id', (req, res) => {
    const id = parseInt(req.params.id);
    const pelicula = peliculas.find(p => p.id === id);
 
    if (pelicula) {
        res.json(pelicula);
    } else {
        res.status(404).json({ mensaje: "Película no encontrada" });
    }
});
 
// POST /peliculas - Crear nueva película
app.post('/peliculas', (req, res) => {
    const { titulo, director, año } = req.body;
 
    const nuevaPelicula = {
        id: siguienteId++,
        titulo,
        director,
        año
    };
 
    peliculas.push(nuevaPelicula);
    console.log("Película creada:", nuevaPelicula);
    res.status(201).json(nuevaPelicula);
});
 
// PUT /peliculas/:id - Actualizar película
app.put('/peliculas/:id', (req, res) => {
    const id = parseInt(req.params.id);
    const index = peliculas.findIndex(p => p.id === id);
 
    if (index !== -1) {
        const { titulo, director, año } = req.body;
        peliculas[index] = { id, titulo, director, año };
        console.log("Película actualizada:", peliculas[index]);
        res.json(peliculas[index]);
    } else {
        res.status(404).json({ mensaje: "Película no encontrada" });
    }
});
 
// DELETE /peliculas/:id - Eliminar película
app.delete('/peliculas/:id', (req, res) => {
    const id = parseInt(req.params.id);
    const index = peliculas.findIndex(p => p.id === id);
 
    if (index !== -1) {
        const eliminada = peliculas.splice(index, 1);
        console.log("Película eliminada:", eliminada[0]);
        res.json({ mensaje: "Película eliminada", pelicula: eliminada[0] });
    } else {
        res.status(404).json({ mensaje: "Película no encontrada" });
    }
});
 
app.listen(3000, () => {
    console.log("API de Películas en http://localhost:3000");
    console.log("Rutas disponibles:");
    console.log("  GET    /peliculas");
    console.log("  GET    /peliculas/:id");
    console.log("  POST   /peliculas");
    console.log("  PUT    /peliculas/:id");
    console.log("  DELETE /peliculas/:id");
});