$(document).ready(function() {
    $.getJSON('data.json', function(data) {
        var output = '';
        $.each(data.sneakers, function(key, value) {
            output += '<div class="item2">'
                    + '<h3>' + value.category[0] + '</h3>'
                    + '<h4>' + value.designer + '</h4>'
                    + '<p>' + value.color + '</p>'
                    + '<p>' + value.name + '</p>'
                    + '<p>' + value.release_year + '</p>'
                    + `<img src="${value.grid_picture_url}">`+ `${value.story_html !== null ? value.story_html : ""}`  + '</div>'
                    ;
        });
        $('.grid').html(output); // <ul id="example"></ul>
    });
});