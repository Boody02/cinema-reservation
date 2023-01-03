<?php session_start();
include 'common/config.php';
if (!isset($_SESSION['login_user'])) {

    header("Location: login.php");
}
include 'common/header.php';
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

</html>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <?php
            if (isset($_GET['movieId'])) {
                $movieId = $_GET['movieId'];
                $sql = "SELECT * FROM movies WHERE id = $movieId";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
            ?>
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $row['title'] ?></h5>
                                <div class="card-image">
                                    <img   src="<?php echo $row['image'] ?>" style="height:205px" alt="">
                                </div>
                                <p class="card-text"><?php echo $row['data'] ?></p>
                                <a href="index.php" class="btn btn-warning">Choose another movie</a>
                            </div>
                        </div><?php
                        $movieTitle = $row['title'];
                            }
                        }
                    }

                                ?>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reservation Details</h5>
                    <p class="card-text">
                    <form action="doReserve.php" method="POST">
                        <input type="hidden" name="movie" value="<?php echo $movieTitle?>">
                        <div class="form-group">
                            <label for="reservationDate">Date</label>
                            <input type="date" class="form-control" id="reservationDate" aria-describedby="emailHelp" placeholder="Enter date" name="date">
                            <small id="emailHelp" class="form-text text-muted">Select desired date.</small>
                        </div>
                        <div class="form-group">
                            <label for="reservationTime">Show time</label>
                            <br>
                            <select name="time" id="time">
                                <optgroup label="Day">
                                    <option value="12:00 PM">12:00 PM</option>
                                    <option value="03:00 PM">03:00 PM</option>
                                </optgroup>
                                <optgroup label="Mid-Night">
                                    <option value="12:00 AM">12:00 AM</option>
                                    <option value="01:30 AM">01:30 AM</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reservationGuests">How many guests</label>
                            <input type="number" class="form-control" id="reservationGuests" placeholder="number of guests" min="1" name="guests">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree that no food is allowed inside</label>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



</html>