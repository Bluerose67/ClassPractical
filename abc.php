<?php
include "connect.php";
$sql = "SELECT * FROM `class_practical`";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $records[$i] = array(
            "SN" => $row['SN'],
            "Name" => $row['Name'],
            "password" => $row['password'],
            "Email" => $row['Email'],
        );
        $i++;
    }
}
mysqli_close($conn);
?>

<head>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <table>
        <tr>
            <th> SN</th>
            <th> Name</th>
            <th> Email</th>
            <th> Password</th>
        </tr>
        <?php foreach ($records as $record) { ?>
            <tr>
                <td>
                    <?= $record['SN'] ?>
                </td>
                <td>
                    <?= $record['Name'] ?>
                </td>
                <td>
                    <?= $record['Email'] ?>
                </td>
                <td>
                    <?= $record['password'] ?>
                </td>

                <td class="change-buttons">
                    <button class="edit-button">
                        <a href="../alumni_registration/update_form.php?SN=<?= $record['SN'] ?>">Edit</a>
                    </button>
                    <button class="edit-button" id="deleteBtn"> <a href="delete.php">Delete</a> </button>
                </td>
            </tr>

        <?php } ?>
    </table>
</body>