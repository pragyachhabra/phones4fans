// Add Record
function addtoken() {
    // get values
    var first_name = $("#first_name").val();

    // Add record
    $.post("ajax/addtoken.php", {
        first_name: first_name,
      
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readtoken();

        // clear fields from the popup
        $("#first_name").val("");
  
    });
}


// READ records
function readtoken() {
    $.get("ajax/readtoken.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function Deletetoken(id) {
    var conf = confirm("Are you sure, do you really want to delete this Keyword?");
    if (conf == true) {
        $.post("ajax/deletetoken.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readtoken();
            }
        );
    }
}

function GettokenDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readtokenDetails.php", {
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

function UpdatetokenDetails() {
    // get values
    var first_name = $("#update_first_name").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updatetokenDetails.php", {
            id: id,
            first_name: first_name,
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readtoken();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readtoken(); // calling function
});