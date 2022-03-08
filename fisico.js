use recursos_sociales;
db.createCollection("recurso_social", {
   validator: {
      $jsonSchema: {
         bsonType: "object",
         required: [ "descripcion", "titularidad", "geometry", "destinacion" ],
         properties: {
            name: {
               bsonType: "string",
               description: "Debe ser un string y es requerido"
            },
            titularidad: {
               bsonType: "string",
               description: "Debe ser un string y es requerido"
            },
            geometry: {
               bsonType: "object",
               description: "Debe ser un objecto geometry y es requerido",
               required: ["type","coordinates"],
               properties:{
                   type:{
                       bsonType: "string",
                       description: "Debe ser un string y es requerido"
                   },
                   coordinates:{
                       bsonType:"array",
                       description: "Debe ser un array y es requerido"
                   }
               }
            },
            destinacion: {
               bsonType: "object",
               description: "Debe ser un objecto y es requerido",
               required: ["destinacion"],
               properties:{
                   tipo:{
                       enum:["Adultos mayores","Personas sin techo","Minorías étnicas","Mujeres",null],
                       description:"La destinación debe ser de alguna de las enumeradas"
                   }
               }
            },
         }
      }
   }
})