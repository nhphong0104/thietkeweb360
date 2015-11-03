var loadThemePartial = function (sUrl, sId) {
    $.ajax({
        url: sUrl,
        contentType: 'application/html; charset=utf-8',
        type: 'Get',
        dataType: 'html'
    })
        .success(function (result) {
            $(sId).html(result);
            loadBootstrapSelect();
            $('#loadTheme').addClass('hidden');
        })
        .error(function (xhr, status) {
            console.log(status);
        });
};

var loadTheme = function () {

    $('#loadTheme').removeClass('hidden');

    var price = $('#dvPrice a.active').attr('val');
    var collectionId = $("#CollectionId").val();
    var featureId = $("#FeatureId").val();
    var sortId = $("#SortId").val();
    //console.log(sortId);
    var query = "";
    var search = $("#search").val();
    
    var priceParam = $(location).attr('price');
    var collectionParam = $(location).attr('collection')

    if (query == "") {
        query = "?";
    }
    if (search != "") {
        query += "&search=" + search;
    }
    if (price == null && price == "") {
        price = all;
        
    }
    query += "&price=" + price;
    //console.log(price);

    if (featureId != "") {
        query += '&feature=' + featureId;
    }
    if (collectionId != "") {
        query += '&collection=' + collectionId;
    }
    if (sortId != "") {
        query += '&sort=' + sortId;
    }

    //console.log(query);

    var pathname = $(location).attr('pathname');
    if (pathname != "/") {
        window.location = pathname + query;
    }
    else
    {
        window.location = query;
    }
    $(location).attr('hash', query);
    loadThemePartial('/themestore/search/' + query, '#divTheme');
};