$(document).ready(function () {

    $('#regi_nac').change(function () {

        var regionId = $(this).val();
        if (regionId) {
            $.ajax({
                type: "GET",
                url: "/get-provincias/" + regionId,
                success: function (provincias) {
                    $('#prov_nac').empty();
                    $.each(provincias, function (key, value) {
                        $('#prov_nac').append('<option value="' + value.id_provincia + '">' + value.provincia_nomb + '</option>');
                    });
                }
            });
        }
    });

    $('#prov_nac').change(function () {
        var provinciaId = $(this).val();
        if (provinciaId) {
            $.ajax({
                type: "GET",
                url: "/get-distritos/" + provinciaId,
                success: function (distritos) {
                    $('#dist_nac').empty();
                    $.each(distritos, function (key, value) {
                        $('#dist_nac').append('<option value="' + value.id_distrito + '">' + value.distrito_nomb + '</option>');
                    });
                }
            });
        }
    });

    $('#dist_nac').change(function () {
        var dist_nac_selected = $(this).val();

        // Actualizar el valor del campo oculto
        $('#dist_nac_selected').val(dist_nac_selected);

        console.log('NACIMIENTO: ', dist_nac_selected);
    });
    
});