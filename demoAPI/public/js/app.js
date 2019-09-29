var firebaseConfig = {
  apiKey: "AIzaSyD__er-5G06VMHeWBEXoaCrv3HWdJuOZok",
  authDomain: "artesanosapp-68d6c.firebaseapp.com",
  databaseURL: "https://artesanosapp-68d6c.firebaseio.com",
  projectId: "artesanosapp-68d6c",
  storageBucket: "artesanosapp-68d6c.appspot.com",
  messagingSenderId: "859292601501",
  appId: "1:859292601501:web:326b87fdd4e747cab49874",
  measurementId: "G-XDCDDFWHF7"
};

 firebase.initializeApp(firebaseConfig);


var db = firebase.firestore();

 agregarValores();
function agregarValores(){
  $.getJSON('js/datos.json',function(data){
      console.log('vamos MB',data)
      data.forEach(function(v){
        db.collection("db-artesanos").add({
            "Razon Social": v['Nombre o razón social'],
            "Nº Documento": v['Nº Documento'],
            "Representante Legal": v['Nombres'],
            "Región": v['Región'],
            "Provincia": v['Provincia'],
            "Distrito": v['Distrito'],
            "Teléfono": v['Teléfono'],
            "Correo": v['Correo'],
            "Grupo Línea": v['Grupo Línea'],
            "Sublínea artesanal": v['Sublínea artesanal'],
            "Tipo Inscripción": v['Tipo Inscripción'],
            "Género": v['Género'],
            "Fecha Nacimiento": v['Fecha Nacimiento']
        })
        .then(function(docRef) {
            console.log("Vamos mundial: ", docRef.id);
        })
        .catch(function(error) {
            console.error("Error adding document: ", error);

        })
          console.log('per ',v['Distrito'])
      })

  })
}
