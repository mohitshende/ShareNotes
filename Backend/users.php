<?php
include "dbconnect.php";

// session_start();

$sql = "SELECT * FROM `user`";

$result = mysqli_query($con, $sql);
$totalusers = mysqli_num_rows($result);
if ($totalusers > 0) {
    while ($fetch = mysqli_fetch_assoc($result)) {

        echo ' <div class="prsec">
        <div class="py-2 d-flex flex-row align-items-center justify-content-between">
            <h4>' . $fetch["name"] . '</h4>
        </div>
    </div>';
    }
} else {
    echo ' <div class="prsec">
    <div class="py-2 d-flex flex-row align-items-center justify-content-between">
        <h4>No Users</h4>
    </div>
</div>';
}