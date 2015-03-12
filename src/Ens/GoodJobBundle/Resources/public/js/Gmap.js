var carte;


function initialiser() {
                var latlng = new google.maps.LatLng(49.050, 1.183);
                //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
                //de définir des options d'affichage de notre carte
                var options = {
                    center: latlng,
                    zoom: 9,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var carte = new google.maps.Map(document.getElementById("carte"), options);
                         //   loadMarker(carte);



               // création du marqueur 
               // sa ne marche pas 
                // var marqueur = new google.maps.Marker({
                //     position: new google.maps.LatLng(49.050, 1.183),
                //     map: carte
                // });

                
                // sa marche 
                //tableau contenant tous les marqueurs que nous créerons
                //var tabMarqueurs = new Array();
                
                //notez la présence de l'argument "event" entre les parenthèses de "function()"
                // google.maps.event.addListener(carte, 'click', function(event) {
                //     tabMarqueurs.push(new google.maps.Marker({
                //       position: new google.maps.LatLng(49.050, 1.183),//coordonnée de la position du clic sur la carte
                //         map: carte//la carte sur laquelle le marqueur doit être affiché
                //     }));
                // });






                //         function loadMarker(map){
    //             var sendAjax = $.ajax({
    //                type: "POST",
    //                url: 'Ens/GoodJobBundle/Gmap/Ajax.php',
    //                dataType: "json",
    //                success: function(json){
    //                   infos_job = json;
    //                   for (var i = 0; i < infos_job.length; i++) {
    //                      display_job(infos_job[i]);
    //                   }
    //                }
    //             });
    //         }



    //     function display_job(infos) {
    //     var myLatlng = new google.maps.LatLng(infos.lat,infos.lng);
    //      var marker = new google.maps.Marker({
    //         position: myLatlng,
    //         map: map,
    //         icon:"bundles/ensgoodjob/images/logo.jpg",
    //         title:infos.company+" "+infos.position+" ",
    //      });
    //      markers.push(marker);

    //      //Créer un évènement au clic sur le marker
    //      google.maps.event.addListener(marker, 'click', function(event) {
    //      //Initialiser la variable dans laquelle va être construit l'objet InfoBubble
    //         var infos_index = -1;
    //         for(var j=0; j<infos_doc.length; j++)
    //         {
    //            if (Math.abs(parseFloat(infos.lat).toFixed(6)-event.latLng.lat().toFixed(6))<=0.00001 &&
    //                Math.abs(parseFloat(infos.lng).toFixed(6)-event.latLng.lng().toFixed(6))<=0.00001)
    //            {
    //               infos_index = j;
    //            }
    //         }
    //         if (infos_index==-1)
    //            return;

    //         var infobulle;
    //         infobulle = new InfoBubble({
    //            map: map,
    //            content: "Entreprise:  "+infos.company+"<br> Poste:   "+infos.position+"<br>Acceder à l'offre:   "+infos.discipline_doc+"<br>Adresse:   "+infos.adresse_doc+"<br><span class='voir_offre id='voir_offre"+infos.id+"'>Consulter l'offre</span>", // Contenu de l'infobulle
    //            position: event.latLng, // Coordonnées latitude longitude du marker
    //            shadowStyle: 0,  // Style de l'ombre de l'infobulle (0, 1 ou 2)
    //            padding: 10, // Marge interne de l'infobulle (en px)
    //            backgroundColor: 'rgb(255,255,255)', // Couleur de fond de l'infobulle
    //            borderRadius: 0, // Angle d'arrondis de la bordure
    //            arrowSize: 8, // Taille du pointeur sous l'infobulle
    //            borderWidth: 3,  // Épaisseur de la bordure (en px)
    //            borderColor: '#009EE0', // Couleur de la bordure
    //            disableAutoPan: true, // Désactiver l'adaptation automatique de l'infobulle
    //            //hideCloseButton: false, // Cacher le bouton 'Fermer'
    //            arrowPosition: 50, // Position du pointeur de l'infobulle (en %)
    //            arrowStyle: 0, // Type de pointeur (0, 1 ou 2)
    //            disableAnimation: false,  // Déactiver l'animation à l'ouverture de l'infobulle
    //            minWidth :   300, // Largeur minimum de l'infobulle  (en px)
    //            minHeight :   100  // Largeur minimum de l'infobulle  (en px)
    //         });

    //         google.maps.event.addListener(infobulle, "domready", function(event){
    //            $(this.bubble_).find(".voir_offre").unbind("click");
    //            $(this.bubble_).find(".voir_offre").click(function(event) {
    //               event.preventDefault();
    //               event.stopImmediatePropagation();

    //               var $target = $(event.currentTarget);
    //               var prefixe_id = "voir_offre";
    //               var id_doc = $target.attr("id").substr(prefixe_id.length);
    //               });

    //            });

    //         });

    //         //Si on a déjà une infobulle ouverte, on la ferme
    //         if( prev_infobulle ){
    //            prev_infobulle.close();
    //         }
    //         //La précédent infobulle devient l'infobulle que l'on va ouvrir
    //         prev_infobulle = infobulle;
    //         //Enfin, on ouvre l'infobulle
    //         infobulle.open();


    //      });
    // }


                
                //constructeur de la carte qui prend en paramêtre le conteneur HTML
                //dans lequel la carte doit s'afficher et les options
}



//  function loadMarker(carte){
//             var sendAjax = $.ajax({
//                type: "POST",
//                url: 'src/Ens/GoodJobBundle/Gmap/Ajax.php',
//                dataType: "json",
//                success: function(json){
//                   infos_doc = json;
//                   for (var i = 0; i < infos_doc.length; i++) {
//                      display_job(infos_job[i]);
//                   }
//                }
//             });
//          }


// function display_job(infos) {
//         var myLatlng = new google.maps.LatLng(infos.lat,infos.lng);
//          var marker = new google.maps.Marker({
//             position: myLatlng,
//             carte: carte,
//             icon:"web/bundles/ensgoodjob/images/logo.jpg",
//             title:infos.company+" "+infos.position+" ",
//          });
//          markers.push(marker);