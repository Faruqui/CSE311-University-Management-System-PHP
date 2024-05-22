<?php
    include "Include/header.php";
    
?>

<title>Student Registration</title>

<body>

<div class="row">
    <div class="column side"><br>
    </div>
    <div class="column middle">
        <h2>Student Registration</h2>
        <div class="container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="row">
                    <div class="col-25"><label>Name*</label></div>
                    <div class="col-75"><input type="text" name="fname" placeholder="Student's name"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>ID*</label></div>
                    <div class="col-75"><input type="number" min="0" max="9999999" name="id" placeholder="Student ID"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Father's Name</label></div>
                    <div class="col-75"><input type="text" name="" placeholder="Father's Name"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Mother's Name</label></div>
                    <div class="col-75"><input type="text" name="" placeholder="Mother's Name"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Phone Number</label></div>
                    <div class="col-75"><input type="number" name="" placeholder="Mobile Number"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Email</label></div>
                    <div class="col-75"><input type="email" name="" placeholder="Email Address"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Present Address</label></div>
                    <div class="col-75"><input type="text" name="" placeholder="Present Address"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Permanent Address</label></div>
                    <div class="col-75"><input type="text" name="" placeholder="Permanent Address"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Registration Date</label></div>
                    <div class="col-75"><input type="date" name="" placeholder="Registration Date"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Department*</label></div>
                    <div class="col-75"><select name="department">
                            <option name="department" value="BIO">BIO</option>
                            <option name="department" value="CEE">CEE</option>
                            <option name="department" value="CSE">CSE</option>
                            <option name="department" value="EEE">EEE</option>
                            <option name="department" value="MAT">MAT</option>
                            <option name="department" value="PHY">PHY</option>
                            <option name="department" value="SBE">SBE</option>
                            <option name="department" value="PHARMA">PHARMA</option>
                        </select></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Major</label></div>
                    <div class="col-75"><input type="text" name="" placeholder="Major"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Credits Completed*</label></div>
                    <div class="col-75"><input type="number" step="0.5" name="credit" placeholder="0 for new students"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>CGPA*</label></div>
                    <div class="col-75"><input type="number" step="0.01" min="0" max="4" name="cgpa" placeholder="Leave blank for new students"></div>
                </div>

                <br>
                <div class="row">
                    <div class="col-25"><label>Educational Qualification</label></div>
                    <div class="col-75">
                        <table class="center">
                            <tr>
                                <th>Name of Degree</th>
                                <th>Institute</th>
                                <th>Board</th>
                                <th>Year</th>
                                <th>Result*</th>
                            </tr>

                            <tr>
                                <th>JSC/JDC</th>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>SSC</th>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="number" step="0.01" min="0" max="5" name="sscgpa" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>HSC</th>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="number" step="0.01" min="0" max="5" name="hscgpa" placeholder=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" name="submit" value="Submit" />
                </div>

            </form>
        </div>
    </div>
</div>
</body>


<?php

if(isset($_POST['submit'])){
    include "connect.php";

    $sql = "INSERT INTO `students` (`id`, `name`, `department`, `sscGPA`, `hscGPA`, `credit`, `cgpa`) 
    VALUES (" .$_POST['id']." ,'"
            .$_POST['fname']."' , '"
            .$_POST['department']."', '"
            .$_POST['sscgpa']."', '"
            .$_POST['hscgpa']."', '"
            .$_POST['credit']."', '"
            .$_POST['cgpa']."' )";

    $query = mysqli_query($conn, $sql);

    //echo $_POST['department'];

    if($query) echo "Registration Successfull";
    else echo "ERROR! Missing fields ".mysqli_error($conn);

}
?>
</html>