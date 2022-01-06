window.addEventListener('DOMContentLoaded', event => {
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }
});

let loader = document.querySelector('.loads');
window.addEventListener('load', function() {
    loader.style.display = 'none';
});

$(document).ready(function() {

    $('#search').typeahead({
        source: function(query, result) {
            $.ajax({
                url: "search",
                method: "POST",
                data: {
                    query: query
                },
                dataType: "json",
                success: function(data) {
                    result($.map(data, function(item) {
                        return item;
                    }));
                }
            })
        }
    });
});


$(document).ready(function() {
    $('#table').DataTable();
});
$(document).ready(function() {
    $('#table1').DataTable();
});
$(document).ready(function() {
    $('#table2').DataTable();
});
$(document).ready(function() {
    $('#table3').DataTable();
});


