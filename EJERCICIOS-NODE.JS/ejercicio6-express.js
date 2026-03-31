const express = require('express');
const app = express();
 
app.get('/', (req, res) => {
    res.send("Bienvenido a mi servidor con Express");
});
 
app.listen(3000, () => {
    console.log("Servidor Express en http://localhost:3000");
});