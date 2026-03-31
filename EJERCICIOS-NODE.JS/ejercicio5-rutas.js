const http = require('http');
 
const servidor = http.createServer((req, res) => {
    res.writeHead(200, { 'Content-Type': 'text/plain; charset=utf-8' });
 
    switch (req.url) {
        case '/':
            res.write("Bienvenido a la página principal");
            break;
        case '/about':
            res.write("Esta es la página sobre nosotros");
            break;
        case '/contacto':
            res.write("Página de contacto");
            break;
        default:
            res.writeHead(404, { 'Content-Type': 'text/plain; charset=utf-8' });
            res.write("Página no encontrada");
    }
 
    res.end();
});
 
servidor.listen(3000, () => {
    console.log("Servidor ejecutándose en http://localhost:3000");
});