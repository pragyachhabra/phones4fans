// Add Record
function addtokenvalue() {
    // get values
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();

    // Add record
    $.post("ajax/addtokenvalue.php", {
        first_name: first_name,
        last_name: last_name
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readtokenvalue();

        // clear fields from the popup
        $("#first_name").val("");
        $("#last_name").val("");
    });
}


// READ records
function readtokenvalue() {
    $.get("ajax/readtokenvalue.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function Deletetokenvalue(id) {
    var conf = confirm("Are you sure, do you really want to delete this Language?");
    if (conf == true) {
        $.post("ajax/Deletetokenvalue.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readtokenvalue();
            }
        );
    }
}

function GettokenvalueDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readtokenvalueDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_first_name").val(user.first_name);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdatetokenvalueDetails() {
    // get values
    var first_name = $("#update_first_name").val();
    var last_name = $("#update_last_name").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updatetokenvalueDetails.php", {
            id: id,
            first_name: first_name,
            last_name: last_name
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readtokenvalue();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readtokenvalue(); // calling function
});