const http = require('http');
 
const servidor = http.createServer((req, res) => {
    res.writeHead(200, { 'Content-Type': 'text/plain; charset=utf-8' });
    res.write("Servidor funcionando correctamente");
    res.end();
});
 
servidor.listen(3000, () => {
    console.log("Servidor ejecutándose en http://localhost:3000");
});