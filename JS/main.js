
// AJAX $.GET EXAMPLE

// var idarticle = 12;
// var boutonajax = document.getElementById('test-ajax');
// boutonajax.addEventListener('click', getArticlePrice, nomarticle);

function displayArticlePrice(nomarticle) {
    const url = '../handle_ajax.php?action=getprix&nomarticle=' + nomarticle ;
    $.get(url,
        response => {
            $('#display-prix').text(response + ',00 €');
        }, 'text'
    );
}

var selectarticle = $('#select-article');
selectarticle.change(function(){
    //$('#display-prix').text($(this).val());
    (displayArticlePrice($(this).val()));
})