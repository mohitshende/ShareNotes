<?php
$sql = "SELECT * FROM `rejectednotes` WHERE `user`= '$set'";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if ($num > 0) {
    while ($fetch = mysqli_fetch_assoc($result)) {

        echo '
<div class="card my-4 shadow">
    <div class="card-header d-flex justify-content-between bg-danger">
    <h5 class="my-auto text-light">'  . $fetch['heading'] .  '</h5>
    </div>
    <div class="card-body">
        <p class="card-text">
            ' . $fetch["message"] . '
        </p>
        <h6 class="card-subtitle mb-2 text-muted"> ' . $fetch["time"] . ' </h6>
        <h6>' . $fetch['filename'] . '</h6><span><a
                href="../backend/downloads.php?file_id=' . $fetch['id'] . '">Download</a></span>
    </div>

</div>';
    }
} else {
    echo '<h4 class="pt-3">No Rejected Notes</h4>';
}