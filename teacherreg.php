<?php
include "Include/header.php";
?>

<title>Teacher Registraion</title>

<body>

<div class="row">
    <div class="column side"><br>
    </div>
    <div class="column middle">
        <h2>Teacher Registration</h2>
        <div class="container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="row">
                    <div class="col-25"><label>Name*</label></div>
                    <div class="col-75"><input type="text" name="fname" placeholder="Name"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>ID*</label></div>
                    <div class="col-75"><input type="number" min="0" max="9999999" name="id" placeholder="Faculty ID"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Phone Number*</label></div>
                    <div class="col-75"><input type="number" name="mobile" placeholder="Mobile Number"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Email*</label></div>
                    <div class="col-75"><input type="email" name="email" placeholder="Email Address"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Room*</label></div>
                    <div class="col-75"><input type="text" name="room" placeholder="Office Room"></div>
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

                <br>
                <div class="row">
                    <div class="col-25"><label>Educational Qualification (Before Graduataion)</label></div>
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


                <br>
                <div class="row">
                    <div class="col-25"><label>Educational Qualification (Graduataion and Post Grad)</label></div>
                    <div class="col-75">
                        <table class="center">
                            <tr>
                                <th>Name of Degree</th>
                                <th>Major</th>
                                <th>Minor</th>
                                <th>Institute</th>
                                <th>Year</th>
                                <th>Result</th>
                            </tr>

                            <tr>
                                <th>Undergrad</th>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                            </tr>

                            <tr>
                                <th>Masters</th>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                            
                            </tr>

                            <tr>
                                <th>Doctorate</th>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>

                <br>
                <div class="row">
                    <div class="col-25"><label>Experience</label></div>
                    <div class="col-75">
                        <table class="center">
                            <tr>
                                <th>Position</th>
                                <th>Organization</th>
                                <th>Time from</th>
                                <th>Time to</th>
                                <th>Remarks</th>
                            </tr>

                            <tr>
                                <td><input type="text" name="position" placeholder=""></td>
                                <td><input type="text" name="org" placeholder=""></td>
                                <td><input type="date" name="tform" placeholder="From"></td>
                                <td><input type="date" name="tto" placeholder="Registration Date"></td>
                                <td><input type="text" name="remarks" placeholder=""></td>

                            </tr>

                        </table>
                    </div>
                </div>
                <br>

                <br>
                <div class="row">
                    <div class="col-25"><label>Research Publication</label></div>
                    <div class="col-75">
                        <table class="center">
                            <tr>
                                <th>Title</th>
                                <th>Volume</th>
                                <th>Number</th>
                                <th>Year</th>
                            </tr>

                            <tr>
        
                                <td><input type="text" name="ptitle" placeholder=""></td>
                                <td><input type="text" name="pvolume" placeholder=""></td>
                                <td><input type="text" name="pnumber" placeholder=""></td>
                                <td><input type="text" name="pyear" placeholder=""></td>

                            </tr>

                            <tr>
                                
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>
                                <td><input type="text" name="" placeholder=""></td>

                            
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


    $sql = "INSERT INTO `teachers` (`id`, `name`, `room`, `mobile`, `email`, `department`)
    VALUES (" .$_POST['id']." ,'"
            .$_POST['fname']."' , '"
            .$_POST['room']."' , '"
            .$_POST['mobile']."', '"
            .$_POST['email']."', '"
            .$_POST['department']."' )";

    $query = mysqli_query($conn, $sql);


    $sql = "INSERT INTO `experience` (`id`, `position`, `organization`, `tfrom`, `tto`)
    VALUES (" .$_POST['id']." ,'"
            .$_POST['position']."' , '"
            .$_POST['org']."' , '"
            .$_POST['tform']."', '"
            .$_POST['tto']."' )";

    $query = mysqli_query($conn, $sql);



    $sql = "INSERT INTO `publications` (`tid`, `title`, `volume`, `number`, `year`)
    VALUES (" .$_POST['id']." ,'"
            .$_POST['ptitle']."' , '"
            .$_POST['pvolume']."' , '"
            .$_POST['pnumber']."', '"
            .$_POST['pyear']."' )";

    $query = mysqli_query($conn, $sql);






    if($query) echo "Registration Successfull";
    else echo "ERROR! Missing fields ".mysqli_error($conn);

}
?>
</html>