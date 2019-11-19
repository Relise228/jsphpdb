<div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p id="adminDescription" class="<?php if (isset($_SESSION["admin"])) echo "admin-edit"; ?>">
                             <?php
                            $conn = new PDO($dsn, $username, $password);
                            $description = $conn->query("SELECT * FROM admin");
							$description = $description->fetch()[2];
                            echo($description);
                            $conn = NULL;
                        
                             ?>
                            </p>    
    
                         
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="latest section">
                    <div class="section-inner">

                        <div class="flex">
                        <h2 class="heading">Latest Projects</h2>
                        
                        <button type="submit" class="btn project-add btn-danger hiden <?php if (isset($_SESSION["admin"])) echo "admin"; ?>">Add</button>
                        
                        </div>
                        <div class="content">    
                                               
                           
                                    
     
                            <hr class="divider" />
                            <form class="projects-form-add hiden" action="index.php" method="POST">
                            <input class="form-control" name="title-project-add" type="Text" placeholder="Title Project">
                            <textarea class="form-control" rows="5" name="text-project-add" placeholder="Description Project"></textarea>
                            <input class="form-control" type="Text" name="link-project-add" placeholder="Link Project">
                            <input class="form-control" type="Text" name="img-project-add" placeholder="Img Project">
                            <button class="btn btn-primary" type="submit" name="btn-projects-add">Add</button>
                            <button class="btn btn-danger btn-proj-can">Cancel</button>
                            </form>

                            <?php
                            
                                $conn = new PDO($dsn, $username, $password);
                                $projects = $conn->query("SELECT * FROM projects");
                                $projects = $projects->fetchAll();
                                if ($projects) {
                                    foreach ($projects as $item) {
                                        $id = $item[0];
                                        $title = $item[1];
                                        $link = $item[2];
                                        $img = $item[3];
                                        $description = $item[4];
                                        
                                        echo "<div class='item row projects ".($_SESSION["admin"] ? "admin-edit" : "")."' id='$id'>
                                        <a class='col-md-4 col-sm-4 col-xs-12' href='http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/' target='_blank'>
                                        <img class='img-responsive project-image' src='$img' alt='project name' />
                                        </a>
                                        <div class='desc col-md-8 col-sm-8 col-xs-12'>
                                            <h3 class='title'><a href='http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/' target='_blank'>$title</a></h3>
                                            <p class='p-project'>$description</p>
                                            <p><a class='more-link' href='$link' target='_blank'><i class='fa fa-external-link'></i> Find out more</a></p>
                                        </div>                          
                                    </div>";
                                    }
                                
                                }
                                $conn = NULL;
                            
                                 

                            ?>

                
                </section><!--//section-->
                
               
                
                <section class="experience section">
                    <div class="section-inner">
                    <div class="flex">
                        <h2 class="heading">Work Experience</h2>
                        <button type="submit" class="btn btn-work-add btn-danger hiden <?php if (isset($_SESSION["admin"])) echo "admin"; ?>">Add</button>
                        </div>
                        <div class="content">


                        <form class="work-form-add hiden" action="index.php" method="POST">
                        <input class="form-control" type="Text"  name="work-title-add" placeholder="Work Title">
                        <input class="form-control" type="Text"  name="work-place-add" placeholder="Work Place">
                        <input class="form-control" type="Text" name="work-year-add" placeholder="Years">
                        <textarea class="form-control" rows="5" name="work-description-add" placeholder="Description"></textarea>
                        <button class="btn btn-primary" type="submit">Add</button>
                        <button class="btn btn-danger btn-work-can">Cancel</button>
                        </form>



                        





                        <?php
                    $conn = new PDO($dsn, $username, $password);
                    $experience = $conn->query("SELECT * FROM experiences");
                    $experience = $experience->fetchAll();
                    if ($experience) {
                        foreach ($experience as $item) {
                            $id = $item["id"];
                            $position = $item["position"];
                            $exp_date = $item["exp_date"];
                            $company = $item["company"];
                            $description = $item["description"];
                            echo "<div class='item work ".($_SESSION["admin"] ? "admin-edit" : "")."' id='$id'>
                            <div class='flex-start'>
                            <h3 class='title'>$position</h3><span class='place'><a href='#' class='placce'>$company</a></span> <span class='year'>$exp_date</span></div>
                            <p>$description</p>
                        </div>";
                        }
                    }
                    $conn = NULL;
                ?>





                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>San Francisco, US</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">jameslee@website.com</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://www.website.com</a></li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <aside class="skills aside section">
                    <div class="section-inner">
                    <div class="flex">
                        <h2 class="heading">Skills</h2>
                        <button type="submit" class="btn btn-skill-add btn-danger hiden <?php if (isset($_SESSION["admin"])) echo "admin"; ?>">Add</button>
                        </div>
                        <div class="content">
                            <p class="intro">
                                Intro about your skills goes here. Keep the list lean and only show your primary skillset. You can always provide a link to your Linkedin or Coderwall profile so people can get more info there.</p>
                            
                            <div class="skillset">


                            <form class="skill-form-add hiden" action="index.php" method="POST">
                            <input class="form-control" type="Text" name="skill-title-add" placeholder="Skill Title">
                            <input class="form-control" type="Text" name="skill-percent-add" placeholder="Skill Percent">
                            <button class="btn btn-primary" type="submit">Add</button>
                            <button class="btn btn-danger btn-can">Cancel</button>
                            </form>





                            <?php
                        $conn = new PDO($dsn, $username, $password);
                        $skills = $conn->query("SELECT * FROM skills");
                        $skills = $skills->fetchAll();
                        if ($skills) {
                            foreach ($skills as $item) {
                                $id = $item[0];
                                $title = $item[1];
                                $skill_value = $item[2];
                                echo "<div class='item skill ".($_SESSION["admin"] ? "admin-edit" : "")."' id='$id'>
                                <h3 class='level-title'>$title</h3>
                                <div class='level-bar'>
                                    <div class='level-bar-inner' data-level='$skill_value'>
                                    </div>                                      
                                </div>                                
                            </div>";
                            }
                        }
                    ?>


                               
                            
                                
                                <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Coderwall</a></p> 
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
                
                <aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fa fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                </blockquote>                
                                <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>                                                             
                            </div><!--//item-->
                            
                            <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a></p> 
                            
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->