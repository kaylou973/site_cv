// LISTE (TABLEAU) DES UTILISATEURS
var car = [{
        img: "https://wf3.fr/evaluations/2018/html-css-js-finale/vehicule1.png",
        model: "Peugeot 208"
        
    },
    {
        img: "https://wf3.fr/evaluations/2018/html-css-js-finale/vehicule2.png",
        model: "Ford focus"
    },
    {
        img: "https://wf3.fr/evaluations/2018/html-css-js-finale/vehicule3.png",
        model: "Audi A1",
    }
 
];



// LA PRESENTATION DU PROFIL UTILISATEUR A L'AFFICHAGE
function affichageUsers() {

    var listUsers = '<div class="row">';

    for (i = 0; i < myUsers.length; i++) {
        // listUsers += '<div class= "col-md-3 mx-auto" style="width: 200px;">' + myUsers[i].name + '<br>' + myUsers[i].birthday + '</div>';

        listUsers += '<div class="card mt-2 ml-2" style="width: 16rem;">';
        listUsers += '<img src= "' + (myUsers[i].img || defaultImage) + '" class="card-img-top" height="200" alt="...">';
        listUsers += '<div class="card-body">';
        listUsers += '<h5 class="card-title">' + myUsers[i].nom + '</h5>';
        listUsers += '<h5 class="card-title">' + myUsers[i].prenom + '</h5>';
        listUsers += '<p class="card-text">' + myUsers[i].birthday + '</p>';
        listUsers += '<a href="#" class="btn btn-primary">Go somewhere</a>';
        listUsers += '</div>';
        listUsers += '</div>';

    }
    listUsers += "</div>";
    //This is the setter of the innerHTML property in jQuery
    $('#list_users').html(listUsers);
    // document.getElementById('list_users').innerHTML = listUsers;
    setInterval(function () {
        $(".card").fadeIn(3000);
    }, 7000);
}

affichageUsers();

// CACHER LE FORMULAIRE APRES AVOIR VALIDE SON INSCRIPTION
$("#send-users").click(function () {
    $('form').hide();

});


// load appelé sur scroll
$(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            if (car.length < 32) { // taille du tableau apres le merge (pour le faire 1 fois seulement)
                // alert('chargement du 2e tableau d\‘utilisateurs');
                $('#list_users').append('<img src="https://media.giphy.com/media/xTkcEQACH24SMPxIQg/giphy.gif">');
               
                affichageUsers();
            }
        }
    });
});

