var action = 'save';
var page = 'badge_type';
var table = null;
var record_id = null;

$(function() {
    $('input, textarea').not('[type="email"]').not('[type="password"]').not('[type="number"]').on('input', function() {
        $(this).val($(this).val().toUpperCase());
    });

    $('#region_id').on('change', function () {
        let region_id = $(this).val();
        if (region_id) {
            $.ajax({
                url: `/provinces/${region_id}`,
                type: 'GET',
                success: function (data) {
                    $('#province_id').empty().append('<option value="">Select Province</option>');
                    $.each(data, function (key, province) {
                        $('#province_id').append(`<option value="${province.id}">${province.name}</option>`);
                    });
                }
            });
        }
    });

    // Handle province change
    $('#province_id').on('change', function () {
        let province_id = $(this).val();
        if (province_id) {
            $.ajax({
                url: `/cities/${province_id}`,
                type: 'GET',
                success: function (data) {
                    $('#city_id').empty().append('<option value="">Select City</option>');
                    $.each(data, function (key, city) {
                        $('#city_id').append(`<option value="${city.id}">${city.name}</option>`);
                    });
                }
            });
        }
    });

    // Handle city change
    $('#city_id').on('change', function () {
        let city_id = $(this).val();
        if (city_id) {
            $.ajax({
                url: `/barangays/${city_id}`,
                type: 'GET',
                success: function (data) {
                    $('#barangay_id').empty().append('<option value="">Select Barangay</option>');
                    $.each(data, function (key, barangay) {
                        $('#barangay_id').append(`<option value="${barangay.id}">${barangay.name}</option>`);
                    });
                }
            });
        }
    });
});

function saveRecord() {
    var data = {
        _token: $('meta[name="csrf-token"]').attr('content'),
        name: $('#name').val(),
        description: $('#description').val(),
        icon: $('#icon').val(),
        status: $('#status').val(),
    }

    if(action === "save") {
        $.post('/'+page+'/save', data).done(function(resp) {
            $('#generated_table').DataTable().draw();
            $('#recordModal').modal('hide');
            toastr.success('Record saved successfully.');

        }).fail(function(resp) {
            var r = resp.responseJSON.errors;

            $('.form-control').removeClass('required');
            $.each(r, function(i,v) {
                $('#' + i).addClass('required');
            });

            toastr.error('Error Message', resp.message);
        });
    }
    else {
        $.post('/'+page+'/update/'+record_id, data).done(function(resp) {
            $('#generated_table').DataTable().draw();
            $('#recordModal').modal('hide');
            toastr.success('Record Update successfully.');
        }).fail(function(resp) {
            var r = resp.responseJSON.errors;

            $('.form-control').removeClass('required');
            $.each(r, function(i,v) {
                $('#' + i).addClass('required');
            });
            toastr.error('Error Message', resp.message);
        });
    }
}

function edit(id){
    action = "updated";
    record_id = id;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/'+page+'/edit/' + id,
        method: 'get',
        data: {},
        success: function(data) {
            $('#recordModal').modal('show');
            $.each(data, function() {
                $.each(this, function(k, v) {
                    $('#'+k).val(v);
                });
            });
        }
    });
}


