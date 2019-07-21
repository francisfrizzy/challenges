<?php
    include "header.php";
?>


        <main>
            <div class="container-fluid">
                <div class="wrapper-main">
                    <section class="section-default">
                        <?php
                            //checks if user is logged in or out and prints statements accordingly
                            if (isset($_SESSION['userId'])){
                                
                                echo '<p class="login-status">You are logged in!</p>';
                                
                                if(isset($_GET['edit']) && $_GET['edit'] == "success"){
                                    echo '<p class="editsuccess">Successful updating of information</p>';
                                }
                                
                                echo '<div class="container-fluid justify-content-center" id="wrap">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-md-6 col-md-offset-3">
                                            <form action="includes/edit-inc.php" method="post" class="form align-items-center justify-content-center" role="form" id="editform">   
                                                <legend>Edit Information</legend>
                                                <input id="userId" name="userId" type="hidden" value="'.$_SESSION['userId'].'">

                                                <div class="row">
                                                    <div class="col-xs-6 col-md-6">';
                                                        if (isset($_GET['name'])){
                                                            $name = $_GET['name'];
                                                            echo '<input type="text" name="name" class="form-control input-lg" placeholder="Name" value="'.$name.'">';
                                                        }
                                                        else{
                                                            echo '<input type="text" name="name" class="form-control input-lg" placeholder="Name">';
                                                        }
                                                echo '</div>
                                                <div class="col-xs-6 col-md-6">';
                                                        if (isset($_GET['surname'])){
                                                            $surname = $_GET['surname'];
                                                            echo '<input type="text" name="surname" class="form-control input-lg" placeholder="Surname" value="'.$surname.'">';
                                                        }
                                                        else{
                                                            echo '<input type="text" name="surname" class="form-control input-lg" placeholder="Surname">';
                                                        }                         
                                                
                                                
                                                   echo ' </div>
                                                </div>
                                                <label>Age</label>
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-6">
                                                        <select name="age" class = "form-control input-lg" id="age">
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
                                                            <option value="32">32</option>
                                                            <option value="33">33</option>
                                                            <option value="34">34</option>
                                                            <option value="35">35</option>
                                                            <option value="36">36</option>
                                                            <option value="37">37</option>
                                                            <option value="38">38</option>
                                                            <option value="39">39</option>
                                                            <option value="40">40</option>
                                                            <option value="41">41</option>
                                                            <option value="42">42</option>
                                                            <option value="43">43</option>
                                                            <option value="44">44</option>
                                                            <option value="45">45</option>
                                                            <option value="46">46</option>
                                                            <option value="47">47</option>
                                                            <option value="48">48</option>
                                                            <option value="49">49</option>
                                                            <option value="50">50</option>
                                                        </select>
                                                    </div>
                                                </div>';
                                
                                                if (isset($_GET['degree'])){
                                                    $degree = $_GET['degree'];
                                                    echo '<input type="text" name="degree" class="form-control input-lg" placeholder="Degree" value="'.$degree.'">';
                                                } 
                                                else{
                                                    echo '<input type="text" name="degree" class="form-control input-lg" placeholder="Degree">';
                                                }
                                                if (isset($_GET['course'])){
                                                    $course = $_GET['course'];
                                                    echo '<input type="text" name="course" class="form-control input-lg" placeholder="Favourite course" value="'.$course.'">';
                                                } 
                                                else{
                                                    echo '<input type="text" name="course" class="form-control input-lg" placeholder="Favourite course" />';
                                                }
                                                echo '<br />
                                                <span class="help-block">By clicking Continue, you agree that the information you provided is entirely accurate and any issues arising from any error is your own fault.</span>
                                                <button class="btn btn-lg btn-primary btn-block edit-btn" name="edit-submit" type="submit" id="signup">Continue</button>
                                            </form>          
                                        </div>
                                    </div>
                                </div>';
                                
                            }
                            else{
                                echo '<p class="login-status">You are logged out!</p>';
                            }
                        ?>
                    </section>
                </div>
            </div>

        </main>
        
        
<?php
    include "footer.php";
?>