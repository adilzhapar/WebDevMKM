$(document).ready(function() {
    $.getJSON('data.json', function(data) {
        var output = '';
        $.each(data.sneakers, function(key, value) {
            output += '<div class="item">'
                    + '<h3>' + value.category[0] + '</h3>'
                    + '<p>' + value.color + '</p>'
                    + '<p>' + value.name + '</p>'
                    + '<p>' + value.release_year + '</p>'
                    + `<img src="${value.grid_picture_url}">` + '</div>'
                    ;
        });
        $('.grid').html(output); // <ul id="example"></ul>
    });
});