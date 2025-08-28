<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payroll Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"> Payroll Calculator </h4>
        </div>
        <div class="card-body">
            <form action="process_registration.php" method="POST">
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label"> Employee Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full name" required>
                </div>

                <!-- total days of work -->
                <div class="mb-3">
                    <label for="days of work" class="form-label">Total days of work</label>
                    <input type="number" name="total days of work" id="total days of work" class="form-control" required>
                </div>

                
                <!-- Daily rate -->
                <div class="mb-3">
                    <label for="Daily rate" class="form-label">Total days of work</label>
                    <input type="number" name="Daily rate" id="Daily rate" class="form-control" required>
                </div>

                <!-- Cash advance -->
                <div class="mb-3">
                    <label for="Cash advance" class="form-label">Cash advance</label>
                    <input type="number" name="Cash advance" id="Cash advance" class="form-control" required>
                </div>

                

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>