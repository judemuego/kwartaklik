var action = 'save';
var page = 'profile';
var table = null;
var record_id = $('#subscriber_id').val();

$(function() {
    // Convert input text to uppercase
    $('input, textarea').not('[type="email"]').not('[type="password"]').not('[type="number"]').on('input', function() {
        $(this).val($(this).val().toUpperCase());
    });

   

    // Edit record on page load
    edit(record_id);

    // Handle region change to populate provinces
    $('#region_id').on('change', function () {
        let region_id = $(this).val();
        if (region_id) {
            $.ajax({
                url: `/provinces/${region_id}`,
                type: 'GET',
                success: function (data) {
                    $('#province_id').empty().append('<option value="">Select Province</option>');
                    $.each(data, function (key, province) {
                        $('#province_id').append(`<option value="${province.province_id}">${province.name}</option>`);
                    });
                }
            });
        }
    });

    // Handle province change to populate cities
    $('#province_id').on('change', function () {
        let province_id = $(this).val();
        if (province_id) {
            $.ajax({
                url: `/cities/${province_id}`,
                type: 'GET',
                success: function (data) {
                    $('#city_id').empty().append('<option value="">Select City</option>');
                    $.each(data, function (key, city) {
                        $('#city_id').append(`<option value="${city.city_id}">${city.name}</option>`);
                    });
                }
            });
        }
    });

    // Handle city change to populate barangays
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

function copyLink() {
    var copyText = document.getElementById("referral-link");
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
    document.execCommand("copy");
}

// Save the record with all selected fields
function saveRecord() {
    var data = {
        _token: $('meta[name="csrf-token"]').attr('content'),
        subscription_type_id: $('#subscription_type_id').val(),
        firstname: $('#firstname').val(),
        middlename: $('#middlename').val(),
        lastname: $('#lastname').val(),
        contact_number: $('#contact_number').val(),
        birthday: $('#birthday').val(),
        bio: $('#bio').val(),
        occupation: $('#occupation').val(),
        gender: $('#gender').val(),
        status: $('#status').val(),
        complete_address: $('#complete_address').val(),
        house_no: $('#house_no').val(),
        region_id: $('#region_id').val(),
        province_id: $('#province_id').val(),
        city_id: $('#city_id').val(),
        barangay_id: $('#barangay_id').val(),
        street: $('#street').val(),
        zip_code: $('#zip_code').val(),
        lead_source: $('#lead_source').val(),
        username: $('#username').val(),
        email: $('#email').val(),
    };

    $.post('/' + page + '/update/' + record_id, data)
        .done(function (resp) {
            // Handle success (maybe redirect or show a message)
        })
        .fail(function (resp) {
            var r = resp.responseJSON.errors;

            $('.form-control').removeClass('required');
            $.each(r, function (i, v) {
                $('#' + i).addClass('required');
            });
        });
}

// Edit record and populate the form
function edit(id) {
    action = "updated";
    record_id = id;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/' + page + '/edit/' + id,
        method: 'get',
        success: function (data) {
            $.each(data, function () {
                $.each(this, function (k, v) {
                    $('#' + k).val(v); // Set value in the form input fields

                    if (v) {
                        $('#' + k).closest('.form-input').addClass('active'); // Add 'active' class if value is not empty
                    } else {
                        $('#' + k).closest('.form-input').removeClass('active'); // Remove 'active' class if value is empty
                    }

                    if (k === 'region_id' && v) {
                        populateProvinces(v); // Populate provinces based on selected region
                    }

                    if (k === 'province_id' && v) {
                        populateCities(v); // Populate cities based on selected province
                    }

                    if (k === 'city_id' && v) {
                        populateBarangays(v); // Populate barangays based on selected city
                    }
                });
            });
        }
    });
}

// Helper function to populate dropdowns dynamically (regions, provinces, cities, barangays)
function populateProvinces(region_id) {
    $.ajax({
        url: `/provinces/${region_id}`,
        type: 'GET',
        success: function (data) {
            $('#province_id').empty().append('<option value="">Select Province</option>');
            $.each(data, function (key, province) {
                $('#province_id').append(`<option value="${province.province_id}">${province.name}</option>`);
            });
        }
    });
}

function populateCities(province_id) {
    $.ajax({
        url: `/cities/${province_id}`,
        type: 'GET',
        success: function (data) {
            $('#city_id').empty().append('<option value="">Select City</option>');
            $.each(data, function (key, city) {
                $('#city_id').append(`<option value="${city.city_id}">${city.name}</option>`);
            });
        }
    });
}

function populateBarangays(city_id) {
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
