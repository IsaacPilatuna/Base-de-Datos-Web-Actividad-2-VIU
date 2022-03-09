
//Consultas basicas
db.recurso_social.find({ "destinacion.destinacion": "Adultos mayores" });
db.recurso_social.find({ "titularidad": /Valencia/ });

//Consultas avanzadas
db.recurso_social.aggregate([
    { $group: 
        { _id: { destinacion: "$destinacion.destinacion" }, cantidad: { $sum: 1 } } }
    ]);
    
db.recurso_social.find({$or:[
    {"geometry.coordinates.0":{$gt:-0.34}},
    {"geometry.coordinates.0":{$lt:-0.4}},
    {"geometry.coordinates.1":{$gt:39.5}},
    {"geometry.coordinates.1":{$lt:39.4}}
    ]})