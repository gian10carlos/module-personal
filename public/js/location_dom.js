$(document).ready(function () {
    $('#regi_dom').change(function () {

        var regionId = $(this).val();
        if (regionId) {
            $.ajax({
                type: "GET",
                url: "/get-provincias/" + regionId,
                success: function (provincias) {
                    $('#prov_dom').empty();
                    $.each(provincias, function (key, value) {
                        $('#prov_dom').append('<option value="' + value.id_provincia + '">' + value.provincia_nomb + '</option>');
                    });
                }
            });
        }
    });

    $('#prov_dom').change(function () {
        var provinciaId = $(this).val();
        if (provinciaId) {
            $.ajax({
                type: "GET",
                url: "/get-distritos/" + provinciaId,
                success: function (distritosDom) {
                    $('#dist_dom').empty();
                    $.each(distritosDom, function (key, value) {
                        $('#dist_dom').append('<option value="' + value.id_distrito + '">' + value.distrito_nomb + '</option>');
                    });
                }
            });
        }
    });

    $('#dist_dom').change(function () {
        var dist_dom_selected = $(this).val();

        // Actualizar el valor del campo oculto
        $('#dist_dom_selected').val(dist_dom_selected);

        console.log('DOMICILIO: ', dist_dom_selected);
    });

});