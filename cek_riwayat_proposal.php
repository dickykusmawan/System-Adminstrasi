<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Proposal</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
        /*    width: 600px; */
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .form-row label {
            flex: 1;
            margin-right: 10px;
            text-align: right;
        }

        .form-row input,
        .form-row select,
        .form-row textarea {
            flex: 2;
            padding: 5px;
        }

        .form-row textarea {
            height: 100px;
        }

        .form-container .button-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-container input[type="submit"],
        .form-container input[type="button"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover,
        .form-container input[type="button"]:hover {
            background-color: #45a049;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        footer {
            margin-top: 20px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1 style="text-align: center;">Riwayat Proposal</h1>
        <table>
            <tr>
                <th>No</th>
                <th>Nomor Proposal</th>
                <th>Dari</th>
                <th>Kepada</th>
                <th>Perihal</th>
                <th>Tanggal Dibuat</th>
                <th>Status Proposal</th>
                <th>Status Manager</th>
                <th>Status Direktur</th>
                <th>Status Head Operasional</th>
                <th>Status Presdir</th>
            </tr>
            
            <?php
            // Assuming you have a database connection, modify the following lines accordingly
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "coba";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query to fetch data from the "riwayat_proposal" table
            $sql = "SELECT * FROM proposal_table";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $count = 1;
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                //    echo "<td>".$count."</td>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nomor_proposal']."</td>";
                    echo "<td>".$row['dari_jabatan']." ";
                    echo $row['department']. "</td>";
                    echo "<td>".$row['kepada_jabatan']."</td>";
                    echo "<td>".$row['perihal']."</td>";
                    echo "<td>".$row['tanggal']."</td>";
                    echo "<td>".$row['status_proposal']."</td>";
                    
                    if(empty($row['status_manager'])){
                        echo "<td>";
                        echo "<button onclick=\"lihatStatus('".$row['id']."')\">Lihat</button>";
                        echo "<button onclick=\"approveProposal('" . $row['id'] . "')\">Approve</button>";
                        echo "<button onclick=\"tolakProposal('" . $row['id'] . "')\">Tolak</button>";
                        echo "</td>";
                    }
                    else{
                        echo "<td>";
                        echo $row['status_manager'];
                        echo "</td>";
                    }

                    //

                    if(empty($row['status_direktur'])){
                        echo "<td>";
                        echo "<button onclick=\"lihatStatus('".$row['id']."')\">Lihat</button>";
                        echo "<button onclick=\"approveProposal2('" . $row['id'] . "')\">Approve</button>";
                        echo "<button onclick=\"tolakProposal2('" . $row['id'] . "')\">Tolak</button>";
                        echo "</td>";
                    }
                    else{
                        echo "<td>";
                        echo $row['status_direktur'];
                        echo "</td>";
                    }

                    if(empty($row['status_head_operasional'])){
                        echo "<td>";
                        echo "<button onclick=\"lihatStatus('".$row['id']."')\">Lihat</button>";
                        echo "<button onclick=\"approveProposal3('" . $row['id'] . "')\">Approve</button>";
                        echo "<button onclick=\"tolakProposal3('" . $row['id'] . "')\">Tolak</button>";
                        echo "</td>";
                    }
                    else{
                        echo "<td>";
                        echo $row['status_head_operasional'];
                        echo "</td>";
                    }

                    if(empty($row['status_presdir'])){
                        echo "<td>";
                        echo "<button onclick=\"lihatStatus('".$row['id']."')\">Lihat</button>";
                        echo "<button onclick=\"approveProposal4('" . $row['id'] . "')\">Approve</button>";
                        echo "<button onclick=\"tolakProposal4('" . $row['id'] . "')\">Tolak</button>";
                        echo "</td>";
                    }
                    else{
                        echo "<td>";
                        echo $row['status_presdir'];
                        echo "</td>";
                    }
                    // Status Direktur column with "Lihat" and "Approve" buttons

                    echo "</tr>";
                    $count++;
                }
            } else {
                echo "<tr><td colspan='11'>No data available</td></tr>";
            }
            $conn->close();
            ?>

            <script>

                var currentTime = new Date();
                function approveProposal(id) {
                    // Send an AJAX request to update the status in the database to "Approved"
                    console.log("Approving proposal with nomor_proposal:", id);
                    var statusValue = "Approved " + currentTime;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            // Success: You can handle the response here if needed
                            // For example, display a success message or refresh the page
                            alert("Status updated successfully!");
                            window.location.reload();
                        } else if (this.readyState === 4 && this.status !== 200) {
                            // Error: Handle the error scenario here
                            alert("Error updating status!");
                        }
                    };
                    xhttp.open("POST", "update_status.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("nomor_proposal=" + id + "&status=" + statusValue);
                }

                function approveProposal2(id) {
                    // Send an AJAX request to update the status in the database to "Approved"
                    console.log("Approving proposal with nomor_proposal:", id);
                    var statusValue = "Approved " + currentTime;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            // Success: You can handle the response here if needed
                            // For example, display a success message or refresh the page
                            alert("Status updated successfully!");
                            window.location.reload();
                        } else if (this.readyState === 4 && this.status !== 200) {
                            // Error: Handle the error scenario here
                            alert("Error updating status!");
                        }
                    };
                    xhttp.open("POST", "update_status2.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("nomor_proposal=" + id + "&status=" + statusValue);
                }

                function approveProposal3(id) {
                    // Send an AJAX request to update the status in the database to "Approved"
                    console.log("Approving proposal with nomor_proposal:", id);
                    var statusValue = "Approved " + currentTime;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            // Success: You can handle the response here if needed
                            // For example, display a success message or refresh the page
                            alert("Status updated successfully!");
                            window.location.reload();
                        } else if (this.readyState === 4 && this.status !== 200) {
                            // Error: Handle the error scenario here
                            alert("Error updating status!");
                        }
                    };
                    xhttp.open("POST", "update_status3.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("nomor_proposal=" + id + "&status=" + statusValue);
                }

                function approveProposal4(id) {
                    // Send an AJAX request to update the status in the database to "Approved"
                    console.log("Approving proposal with nomor_proposal:", id);
                    var statusValue = "Approved " + currentTime;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            // Success: You can handle the response here if needed
                            // For example, display a success message or refresh the page
                            alert("Status updated successfully!");
                            window.location.reload();
                        } else if (this.readyState === 4 && this.status !== 200) {
                            // Error: Handle the error scenario here
                            alert("Error updating status!");
                        }
                    };
                    xhttp.open("POST", "update_status4.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("nomor_proposal=" + id + "&status=" + statusValue);
                }

                function tolakProposal(id) {
                    // Send an AJAX request to update the status in the database to "ditolak"
                    console.log("Tolak proposal with nomor_proposal:", id);
                    var statusValue = "Rejected " + currentTime;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            // Success: You can handle the response here if needed
                            // For example, display a success message or refresh the page
                            alert("Status updated to ditolak successfully!");
                            window.location.reload();
                        } else if (this.readyState === 4 && this.status !== 200) {
                            // Error: Handle the error scenario here
                            alert("Error updating status!");
                        }
                    };
                    xhttp.open("POST", "update_status_tolak.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("nomor_proposal=" + id + "&status=" + statusValue);
                }

                function tolakProposal2(id) {
                    // Send an AJAX request to update the status in the database to "ditolak"
                    console.log("Tolak proposal with nomor_proposal:", id);
                    var statusValue = "Rejected " + currentTime;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            // Success: You can handle the response here if needed
                            // For example, display a success message or refresh the page
                            alert("Status updated to ditolak successfully!");
                            window.location.reload();
                        } else if (this.readyState === 4 && this.status !== 200) {
                            // Error: Handle the error scenario here
                            alert("Error updating status!");
                        }
                    };
                    xhttp.open("POST", "update_status_tolak2.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("nomor_proposal=" + id + "&status=" + statusValue);
                }

                function tolakProposal3(id) {
                    // Send an AJAX request to update the status in the database to "ditolak"
                    console.log("Tolak proposal with nomor_proposal:", id);
                    var statusValue = "Rejected " + currentTime;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            // Success: You can handle the response here if needed
                            // For example, display a success message or refresh the page
                            alert("Status updated to ditolak successfully!");
                            window.location.reload();
                        } else if (this.readyState === 4 && this.status !== 200) {
                            // Error: Handle the error scenario here
                            alert("Error updating status!");
                        }
                    };
                    xhttp.open("POST", "update_status_tolak3.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("nomor_proposal=" + id + "&status=" + statusValue);
                }

                function tolakProposal4(id) {
                    // Send an AJAX request to update the status in the database to "ditolak"
                    console.log("Tolak proposal with nomor_proposal:", id);
                    var statusValue = "Rejected " + currentTime;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            // Success: You can handle the response here if needed
                            // For example, display a success message or refresh the page
                            alert("Status updated to ditolak successfully!");
                            window.location.reload();
                        } else if (this.readyState === 4 && this.status !== 200) {
                            // Error: Handle the error scenario here
                            alert("Error updating status!");
                        }
                    };
                    xhttp.open("POST", "update_status_tolak4.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("nomor_proposal=" + id + "&status=" + statusValue);
                }

                function lihatStatus(id) {
                    // Send an AJAX request to update the status in the database to "ditolak"
                    window.location.href = "preview2.php?id=" + id;
                }

            </script>
        </table>
        <br><br>
        <footer>
            <div class="button-row">
                <input type="button" value="Buat Proposal" onclick="document.location.href='formulir.php'"/>
                <input type="button" value="Dashboard" onclick="document.location.href='dashboard.php'"/>
            </div>
        </footer>
    </div>
</body>
</html>