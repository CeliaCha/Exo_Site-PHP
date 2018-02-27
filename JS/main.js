function getPage(page) {
    var url = 'http://php/main.php';
    var xhr = new XMLHttpRequest;
    xhr.responseType = 'text';

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            console.log(xhr.response)
        }
    }
    xhr.open('GET', './php/main.php?req=' + input)
    xhr.send();
}