$(document).ready(function() {
    dataTable();
    request();

    $("#form").submit(function(e) {
        e.preventDefault();
        request();
    })
});

function request() {
    user = $('#user').val() ? '+user:' + $('#user').val() : 'CmoratoJ';
    search = $('#search').val() ? $('#search').val() : '';
    language = $('#language').val() ? '+language:' + $('#language').val() : '';

    let queryString = `q=${search}${language}${user}`;

    const url = `https://api.github.com/search/repositories?${queryString}`;
    $.ajax({
        method: 'GET',
        url,
        dataType: 'json',
        success: function(response) {
            const archived = $('#archived').val() === 'S' ? true : false;
            table = dataTable();
            table.clear().draw();

            if (response.items.length > 0) {
                response.items.forEach(r => {
                    if (r.archived === archived) {
                        table.row.add([r.owner.login,r.name, r.full_name, r.language, r.visibility, new Date(r.updated_at).toLocaleDateString()]).draw(false)
                    }
                });
            }
        },
        error: function(error) {
            alert(error.responseJSON.message);
        },
    })
}

function dataTable() {
    $('#table').DataTable();
    var options = {
        "aaSorting": []
    };
    $('#table').DataTable().destroy();
    return $('#table').DataTable(options);
}