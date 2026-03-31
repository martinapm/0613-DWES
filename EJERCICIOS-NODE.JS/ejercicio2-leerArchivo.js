const fs = require('fs');
 
fs.readFile('texto.txt', 'utf8', (err, data) => {
    if (err) {
        console.log("Error al leer el archivo:", err.message);
        return;
    }
    console.log("Contenido del archivo:");
    console.log(data);
});