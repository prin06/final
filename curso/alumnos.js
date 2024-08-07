const listaAlumnas = [
    {
        nombre: 'Summer',
        p1:10,
        p2:4,
        p3:8,
    },

    {
        nombre: 'Dulce',
        p1:8,
        p2:5,
        p3:8,
    },

    {
        nombre: 'Princess',
        p1:10,
        p2:4,
        p3:9,
    }
]

const promediar = (pa1, pa2, pa3) => (pa1 + pa2 + pa3) /3

//let summer =listaAlumnas[0].p1 + listaAlumnas[0].p2 + listaAlumnas[0].p3 / 3
console.log('Promedio de Summer: ' + promediar(listaAlumnas[0].p1, listaAlumnas[0].p2, listaAlumnas[0].p3))


