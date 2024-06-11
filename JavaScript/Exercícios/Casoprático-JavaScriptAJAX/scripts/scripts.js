
//NOTÍCIAS RSS

function carregar() {
    var url = 'https://news.google.com/rss?hl=pt-PT&gl=PT&ceid=PT:pt-150';
    $.ajax({
        url:"https://api.rss2json.com/v1/api.json?rss_url=" + url,
        type: 'GET',
        success: function (data) {
            objeto_json = eval(data);
            // ler o conteúdo
            var frase = "";
            for (i = 0; i < objeto_json.items.length; i++) {
                frase = frase + "Título: <b>" + objeto_json.items[i].title + "</b><br/>";
                frase = frase + objeto_json.items[i].description + "<br/>";
            }
            $("#caixa").html(frase);
        },
        error: function (xhr, status) {
            alert('Ocorreu um erro.');
        }
    });
}
