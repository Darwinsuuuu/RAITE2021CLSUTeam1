$(document).ready(function() {
    $("#insert_form").submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "php/ship_insert.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: "text",
            success: function(response) {
                fetchData();
                $("#insertModal").modal("hide");
            }
        });
    });

    function fetchData() {
        $.ajax({
            url: "php/ship_fetch.php",
            dataType: "text",
            success: function(response) {
                $("table tbody").html(response);
            }
        });
    }

    fetchData();

    /* update */
    $(document).on("click", ".edit", function() {

        var ship_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "php/ship_update_fetch.php",
            data: { "ship_id": ship_id },
            dataType: "json",
            success: function(response) {
                $("#update_ship_id").val(response["ship_id"]);
                $("#update_ship_name").val(response["ship_name"]);
                $("#update_ship_height").val(response["ship_height"]);
                $("#update_ship_breadth").val(response["ship_breadth"]);
                $("#update_total_weight").val(response["total_weight"]);
                $("#update_ship_draught").val(response["ship_draught"]);
                $("#update_max_weight").val(response["max_weight"]);

                $("#updateModal").modal("show");
            },
            error: function(xhr, status, error) {
                console.error(error);
                console.warn(xhr);
            }
        });
    });

    /* perform update */
    $("#updateForm").submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "php/ship_update.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: "text",
            success: function(response) {
                fetchData();
                $("#updateModal").modal("hide");
            },
            error: function(xhr, status, error) {
                console.error(error);
                console.warn(xhr);
            }
        });
    });



});