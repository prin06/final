//const listaAlumnas = [
 //   'Dulce', 'Sofia', 'Perla', 'Princ', 'Juanita'
//]

//listaAlumnas.map((alumna) => console.log(alumna))



//console.log (listaAlumnas)

//5 registros

//console.log (listaAlumnas)

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

const promediar = (p1, p2, p3) => (p1 + p2 + p3) /3
listaAlumnas.map((alumna) => console.log (promediar(alumna.p1),(alumna.p2),(alumna.p3)))



