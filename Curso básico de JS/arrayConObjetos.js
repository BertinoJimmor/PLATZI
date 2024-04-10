var articulos = [ 
    {nombre: "Bici",costo: 300},
    {nombre: "Tv",costo: 2500},
    {nombre: "libro",costo: 320},
    {nombre: "Celular",costo: 10000},
    {nombre: "Laptop",costo: 20000},
    {nombre: "Teclado",costo: 500},
    {nombre: "Audifonos",costo: 1700},
];
var articulosFiltrados = articulos.filter(function(articulo) {
    return articulo.costo <= 500;
}
);

var articulosMapeados = articulos.map(function(articulo){
    return articulo.nombre;
})

var articulosEncontrados = articulos.find(function(articulo){
return articulo.nombre === "Laptop";
});

articulos.forEach(function(articulo){
    console.log(articulo.costo);
});

var articulosBaratos = articulos.some(function(articulo){
    return articulo.costo <= 700;
});