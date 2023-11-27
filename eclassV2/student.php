<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.html">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>student</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
          
            <?php include 'sidebar.php';?>
        </div>
        <!-- end side bar -->

        <!-- start nav bar  -->
        <div class="col col-sm-10 flex-column-sm h-sm-50 my-2">
            <nav class="navbar">
                
                <?php include 'navbar.php'; ?>
            </nav>
            <!-- end nav bar -->


            <div class="d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Students list</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="tof">
                        <i class="far fa-sort"></i>
                    </div>
                    <button type="button" class="btn btn-primary">add new student</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table student_list table-borderless">
                    <thead>
                        <tr class="align-middle">
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Enroll Number</th>
                            <th>Date of admission</th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php //include 'tableau.php';
                        
                        $tab_student = file_get_contents("student.json");
                        $tab_student = json_decode($tab_student);
                        
                        
                        ?>
                        
                        
                        <?php foreach ($tab_student as $END){
                            echo  "<tr class=\"bg-white align-middle\">" ?>
                            <td><img src="image/student.jpg" alt="" height="50" width="50"></td>
                            <td><?php echo $END-> Name; ?></td>
                            <td><?php echo $END-> Email; ?></td>
                            <td><?php echo $END-> Phone; ?></td>
                            <td><?php echo $END-> Number; ?></td>
                            <td><?php echo $END-> Date; ?></td>
                            
                            <td class="d-md-flex gap-3 mt-3">
                                <i class="far fa-pen"></i>
                                <i class="far fa-trash"></i>
                            </td>
                        </tr>
                        
                        
                        <?php  }; ?>

                        
                    </tbody>

                </table>
            </div>
        </div>

    </div>
    </div>
</body>

</html>