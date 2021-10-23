$(document).ready(function() {
    $("#inserRoute_form").submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "php/route_insert.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: "text",
            success: function(response) {
                fetchData();
                $("#AddNewRoute").modal("hide");
            }
        });
    });


    function fetchData() {
        $.ajax({

            url: "php/route_fetch.php",
            dataType: "text",
            success: function(response) {
                $("table tbody").html(response);
            }
        });
    }

    fetchData();


    $(document).on("click", ".edit", function(params) {
        var route_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "php/route_update_fetch.php",
            data: { "route_id": route_id },

            dataType: "json",
            success: function(response) {
                $("#update_route_id").val(response["route_id"]);
                $("#update_country").val(response["country"]);
                $("#update_port_name").val(response["port_name"]);
                $("#update_distance").val(response["distance"]);
                $("#update_price").val(response["price"]);
                $("#updateModal").modal("show");
            }
        });
    });

    /* perform update */
    $("#updateRoute_form").submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "php/route_update.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: "text",
            success: function(response) {
                fetchData();
                $("#updateModal").modal("hide");
            }
        });
    });

    $(document).on("click", ".delete", function(params) {

        if (confirm("Are you sure?\n If you delete this record, it cannot be undone!")) {
            var route_id = $(this).val();
            $.ajax({
                type: "POST",
                url: "php/route_delete.php",
                data: { "route_id": route_id },

                dataType: "text",
                success: function(response) {
                    fetchData();
                }
            });
        }
        return false;



    });

});