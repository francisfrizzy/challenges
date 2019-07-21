<?php
    require "header.php";
?>

<main>
    <div class="container-fluid justify-content-center" id="wrap">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-md-offset-3">
                <form action="includes/signup-inc.php" method="post" class="form align-items-center justify-content-center" role="form" id="signupform">   
                    <legend>Sign Up</legend>
                    <?php
                        //error checker and outputter. Submit button must be checked first.
                        if (isset($_GET['signuperror'])){
                            $signupCheck = $_GET['signuperror'];
                            
                            if ($signupCheck == "emptyfields"){
                                echo "<p class='signuperror'>Fill in all fields!</p>";
                                exit();
                            }
                            elseif ($signupCheck == "invalidmailuid"){
                                echo "<p class='signuperror'>Invalid Username and e-mail</p>";
                                exit();
                            }
                            elseif($signupCheck == "invaliduid"){
                                echo "<p class='signuperror'>Invalid Username!</p>";
                                exit();
                            }
                            elseif($signupCheck == "invalidmail"){
                                echo "<p class='signuperror'>Invalid E-mail!</p>";
                                exit();
                            }
                            elseif($signupCheck == "passwordcheck"){
                                echo "<p class='signuperror'>Entered passwords do not match!</p>";
                                exit();
                            }
                            elseif($signupCheck == "invalidname"){
                                echo "<p class='signuperror'>Enter names using proper characters</p>";
                                exit();
                            }
                            elseif($signupCheck == "wrongdate"){
                                echo "<p class='signuperror'>Date does not exist!</p>";
                                exit();
                            }
                            elseif($signupCheck == "sqlerror"){
                                echo "<p class='signuperror'>SQL error. Please fill form again!</p>";
                                exit();
                            }
                            elseif($signupCheck == "usertaken"){
                                echo "<p class='signuperror'>Username has been taken already!</p>";
                                exit();
                            }
                        }
                        
                    ?>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <?php
                                if (isset($_GET['firstname'])){
                                    $firstname = $_GET['firstname'];
                                    echo '<input type="text" name="firstname" class="form-control input-lg" placeholder="First Name" value="'.$firstname.'">';
                                }
                                else{
                                    echo '<input type="text" name="firstname" class="form-control input-lg" placeholder="First Name">';
                                }   
                            ?>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <?php
                                if (isset($_GET['lastname'])){
                                    $lastname = $_GET['lastname'];
                                    echo '<input type="text" name="lastname" class="form-control input-lg" placeholder="First Name" value="'.$lastname.'">';
                                }
                                else{
                                    echo '<input type="text" name="lastname" class="form-control input-lg" placeholder="Last Name">';
                                }   
                            ?>
                        </div>
                    </div>
                    <?php
                        if (isset($_GET['uid'])){
                            $uid = $_GET['uid'];
                            echo '<input type="text" name="uid" class="form-control input-lg" placeholder="Username" value="'.$uid.'">';
                        } 
                        else{
                            echo '<input type="text" name="uid" class="form-control input-lg" placeholder="Username">';
                        }
                        if (isset($_GET['email'])){
                            $email = $_GET['email'];
                            echo '<input type="text" name="email" class="form-control input-lg" placeholder="Your Email" value="'.$email.'">';
                        } 
                        else{
                            echo '<input type="text" name="email" class="form-control input-lg" placeholder="Your Email">';
                        }
                    ?>
                    <input type="password" name="password" class="form-control input-lg" placeholder="Password" />
                    <input type="password" name="confirm_password" class="form-control input-lg" placeholder="Confirm Password" />
                    <label>Birth Date</label>
                    <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select name="month" class = "form-control input-lg">
                                <option value="01">Jan</option>
                                <option value="02">Feb</option>
                                <option value="03">Mar</option>
                                <option value="04">Apr</option>
                                <option value="05">May</option>
                                <option value="06">Jun</option>
                                <option value="07">Jul</option>
                                <option value="08">Aug</option>
                                <option value="09">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select name="day" class = "form-control input-lg">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select name="year" class = "form-control input-lg">
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                            </select>
                        </div>
                    </div>
                    <label>Gender : </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="M" id=male />Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="F" id=female />Female
                    </label>
                    <br />
                    <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                    <button class="btn btn-lg btn-primary btn-block signup-btn" name="signup-submit" type="submit">Create my account</button>
                </form>          
            </div>
        </div>
    </div>
</main>
    
<?php
    require "footer.php";
?>