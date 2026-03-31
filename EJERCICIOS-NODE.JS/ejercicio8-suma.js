const express = require('express');
const app = express();
 
app.get('/suma/:num1/:num2', (req, res) => {
    const num1 = parseInt(req.params.num1);
    const num2 = parseInt(req.params.num2);
    const resultado = num1 + num2;
    res.send(`La suma es ${resultado}`);
});
 
app.listen(3000, () => {
    console.log("Servidor Express en http://localhost:3000");
});