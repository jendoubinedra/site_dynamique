<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Style the modal background */
        .modal-background {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        /* Style the modal content */
        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
@include('admin.header')
@include('admin.menu')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Description</th>
                        <th>Website</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Edit</a>
                            <form action="" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div id="modalBackgroundAdd" class="modal-background">
        <!-- The modal content -->
        <div class="modal-content col-md-4">
            <form action="keynote" method="post" id="linkForm">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="firstname">Firstname:</label>
                    <input type="text" name="firstname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" name="lastname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="website">Website:</label>
                    <input type="text" name="website" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Speaker</button>
                <button type="button" onclick="closeFormAdd()" class="btn btn-secondary">Close Form</button>
            </form>
        </div>
    </div>

    <br>
    <br>

    <button onclick="openFormAdd()" class="btn btn-success">Show Form</button>
</div>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function openFormAdd() {
        document.getElementById('modalBackgroundAdd').style.display = 'flex';
    }

    function closeFormAdd() {
        document.getElementById('modalBackgroundAdd').style.display = 'none';
    }
</script>

</body>
</html>
