<?php
include('../header-admin.php');
// Include database configuration
include('../config.php');

// Function to sanitize output
function sanitize_output($string) {
    return htmlspecialchars($string, ENT_QUOTES);
}

// Check if deletion request is sent
if (isset($_POST['delete_message'])) {
    $message_id = $_POST['delete_message'];
    // Prepare SQL to delete message by ID
    $delete_sql = "DELETE FROM contact_messages WHERE id = ?";
    $stmt = $connection->prepare($delete_sql);
    $stmt->bind_param("i", $message_id);
    if ($stmt->execute()) {
        // Return success response
        echo json_encode(array("status" => "success"));
        exit;
    } else {
        // Return error response
        echo json_encode(array("status" => "error"));
        exit;
    }
}

// Query to fetch all messages
$sql = "SELECT * FROM contact_messages";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Contact Messages</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        /* Custom CSS for responsiveness */
        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1 class="mt-4">Admin Panel - Contact Messages</h1>
        
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No of people.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Reason</th>
                        <th>Message</th>
                        <th>Timestamp</th>
                        <th></th> <!-- Empty header for the "Delete" button column -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        $serial = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $serial . "</td>";
                            echo "<td>" . sanitize_output($row['name']) . "</td>";
                            echo "<td>" . sanitize_output($row['email']) . "</td>";
                            echo "<td>" . sanitize_output($row['reason']) . "</td>";
                            echo "<td>" . nl2br(sanitize_output($row['message'])) . "</td>"; // Use nl2br for line breaks
                            echo "<td>" . $row['created_at'] . "</td>";
                            echo '<td><button class="btn btn-danger btn-sm delete-message" type="button" data-message-id="' . $row['id'] . '">Delete</button></td>';
                            echo "</tr>";
                            $serial++;
                        }
                    } else {
                        echo "<tr><td colspan='7'>No messages found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // AJAX call to delete message
            $('.delete-message').click(function() {
                var message_id = $(this).data('message-id');
                if (confirm("Are you sure you want to delete this message?")) {
                    $.ajax({
                        type: 'POST',
                        url: 'admin.php', // Adjust URL as needed
                        data: { delete_message: message_id },
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 'success') {
                                alert("Message deleted successfully.");
                                location.reload(); // Reload page after deletion
                            } else {
                                alert("Error deleting message.");
                            }
                        },
                        error: function() {
                            alert("Error: Something went wrong.");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>

<?php
// Close database connection
$connection->close();
?>
