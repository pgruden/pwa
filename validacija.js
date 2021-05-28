$(function () {
    $("form[name='unos']").validate({
        rules: {
            naslov: {
                required: true,
                minlength: 5,
                maxlength: 30
            },
            kratko: {
                required: true,
                minlength: 10,
                maxlength: 100
            },
            vijesti: {
                required: true,
            },
            slika: {
                required: true
            },
            kategorija: {
                required: true
            }

        },
        // Specify validation error messages
        messages: {
            naslov: {
                required: "Morate unijeti naslov!",
                minlength: "Naslov ne može imati manje od 5 znakova",
                maxlength: "Naslov ne može imati više od 30 znakova"
            },
            kratko: {
                required: "Potrebno je upisati kratki sadržaj!",
                minlength: "Kratki sadržaj ne može imati manje od 10 znakova",
                maxlength: "Kratki sadržaj ne može imati više od 100 znakova"
            },
            vijesti: {
                required: "Potrebno je unijeti tekst vijesti!",
            },
            slika: {
                required: "Postavite sliku!"
            },
            kategorija: {
                required: "Morate odabrati kategoriju!"
            }
        },

        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            form.submit();
        }
    });
});

$(function () {
    $("form[name='registracija']").validate({
        rules: {
            ime: {
                required: true,
            },
            prezime: {
                required: true,
            },
            username: {
                required: true,
                minlength: 4,
                maxlength: 20
            },
            password: {
                required: true,
                minlength: 5,
                maxlength: 15
            },
            password2: {
                required: true,
                equalTo: "#password"
            }

        },
        // Specify validation error messages
        messages: {
            ime: {
                required: "Morate unijeti ime!",
            },
            prezime: {
                required: "Potrebno je upisati prezime!",
            },
            username: {
                required: "Potrebno je unijeti korisničko ime!",
                minlength: "Korisničko ime mora biti najmanje 4 znaka!",
                maxlength: "Korisničko ime mora biti najviše 20 znakova"
            },
            password: {
                required: "Obavezno!",
                minlength: "Lozinka mora imati najmanje 5 znakova",
                maxlength: "Lozinka može imati najviše 15 znakova"
            },
            password2: {
                required: "Obavezno!",
                equalTo: "Loznike moraju biti iste!",

            }
        },

        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            form.submit();
        }
    });
});

$(function () {
    $("form[name='login']").validate({
        rules: {
            username: {
                required: true,
                minlength: 4,
                maxlength: 20
            },
            password: {
                required: true,
                minlength: 5,
                maxlength: 15
            }
        },
        // Specify validation error messages
        messages: {
            username: {
                required: "Potrebno je unijeti korisničko ime!",
                minlength: "Korisničko ime mora biti najmanje 4 znaka!",
                maxlength: "Korisničko ime mora biti najviše 20 znakova"
            },
            password: {
                required: "Obavezno!",
                minlength: "Lozinka mora imati najmanje 5 znakova",
                maxlength: "Lozinka može imati najviše 15 znakova"
            },
        },


            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });
});