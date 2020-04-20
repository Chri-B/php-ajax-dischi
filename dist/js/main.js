$(document).ready(function() {

    var source = $("#card-template").html();
    var template = Handlebars.compile(source);

    $.ajax({
        url: 'server.php',
        method: 'GET',
        success: function(data) {
            var albums = data;
            for (var i = 0; i < albums.length; i++) {
                var album = albums[i];
                var cardTemplate = {
                    titolo: album.album,
                    autore: album.autore,
                    anno: album.anno,
                    cover: album.cover
                }
                var cardCompilata = template(cardTemplate);
                $('#card-container').append(cardCompilata);
            }

        },
        error: function(err) {
            alert('errore');
        }
    });





});
