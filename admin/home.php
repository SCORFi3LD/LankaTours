<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: index.html");
}
include '../php/PDBC.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <title>Admin Home</title>
    </head>
    <body>

        <div class="container">
            <div class="row" style="margin-top:10px">
                <div class="col-md-12">
                    <h1>Guest book reviews</h1>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#saveModal">Add New</button>
                    <form action="actions/logoutAction.php" style="float:right">
                        <button class="btn btn-warning" type="submit">Logout</button>
                    </form>
                    <div class="clearfix" style="margin-top:10px">
                        <table class="table table-bordered table-responsive table-striped" id="example">
                            <thead>
                                <tr>
                                    <th>Review</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Seit 2011 begleitet mich Harsha bei meinen Reisen über Sri Lanka und hat auch großen Anteil an der Entstehung meiner Bildbände, da er mein Interesse am Fotografieren teilt.
                                        Ich schätze seine freundliche Art, seine HIlfsbereitschaft und nicht zuletzt seinen Humor. Eigentlich kann ich mir eine Sri Lanka-Reise ohne sein Beisein nicht mehr vorstellen.</td>
                                    <td>asd</td>
                                    <td>asd</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Save Modal -->
        <div id="saveModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="actions/saveReviewAction.php">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add New Review</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="nam" required/>
                            </div>
                            <div class="form-group">
                                <label for="dat">Date:</label>
                                <input type="date" class="form-control" id="dat" required/>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Review:</label>
                                <textarea class="form-control" name="rev" id="rev" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Add</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Core JavaScript Files -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <!-- Data Tables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
    </body>
</html>
