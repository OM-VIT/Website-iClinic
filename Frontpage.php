<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Twitter Sentiment Analysis</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="Frontpage.php">Twitter Data Analysis</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Frontpage.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://timesofindia.indiatimes.com/topic/Online-doctor-consultation">Latest Updates</a>
                        <a class="dropdown-item" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">Covid 19</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Support.php">Support</a>
                        <a class="dropdown-item" href="WriteForUs.php">Write For Us</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ContactUs.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bot.php">Virtual Assistant</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                
            </form>
        </div>
    </nav>
    <div class="container" mx-50%>
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1400x600/?doctors,laboratory
                " class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome to iClinic</h5>
                        <p>Online consultations with the best doctors in the town.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1400x600/?doctors,medicine" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Your Convinience Our Priority</h5>
                        <p>Top docotors in the city at your window.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1400x600/?computers,medicine" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>World Class Service</h5>
                        <p>Best recommendations from certified patients and users</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="pedia.jpg
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Child Specialist</h5>
                        <p class="card-text">A medical practitioner specializing in children and their diseases.
                        </p>
                        <a href="Pediatrics.php" class="btn btn-primary">Pediatrician</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="physician.jpg
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Physician and surgeon
                        </h5>
                        <p class="card-text">Counsel patients on diet, hygiene, and preventive healthcare.</p>
                        <a href="About.php" class="btn btn-primary">Physician</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="skin.jpg
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Skin Care</h5>
                        <p class="card-text">Diseases related to skin, hair and nails and some cosmetic problems</p>
                        <a href="#" class="btn btn-primary">Dermatologist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="bones and muscle.jpg
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bones and Muscles</h5>
                        <p class="card-text">Diseases like osteoporosis,muscle fratigue,and fractures.</p>
                        <a href="#" class="btn btn-primary">Orthologist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="neuro.jpg
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nervous Disorders</h5>
                        <p class="card-text"> Specialized training in diagnosing, treating, and managing disorders of
                            the brain and nervous system </p>
                        <a href="#" class="btn btn-primary">Neurologist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="dt.jpg
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Oral Health</h5>
                        <p class="card-text">Diagnosis, prevention, and treatment of diseases, disorders, and conditions
                            of the oral cavity.</p>
                        <a href="#" class="btn btn-primary">Dentist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="gyan.jpg
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Obstetrics & Gynaecology</h5>
                        <p class="card-text">Obstetrics, or pregnancy and childbirth, menstruation and fertility
                            issues,(STIs), hormone disorders.</p>
                        <a href="#" class="btn btn-primary">Gynaecologist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="heart blood.jpg
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Heart, Blood and Vessels</h5>
                        <p class="card-text">Congenital heart defects, coronary artery disease, heart failure, valvular
                            heart disease and electrophysiology.</p>
                        <a href="#" class="btn btn-primary">Cardiologist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x900/?hair,scalp
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hair and Scalp</h5>
                        <p class="card-text">Diagnose the causes of hair loss, diseases of the scalp and treat
                            accordingly.</p>
                        <a href="#" class="btn btn-primary">Trichologist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="mental.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mental Health</h5>
                        <p class="card-text"> Specialization diagnosis, prevention, and treatment of emotional, mental,
                            behavioral health. </p>
                        <a href="#" class="btn btn-primary">Psychiatrist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x900/?digestive system
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Digestive System </h5>
                        <p class="card-text"> Diseases of the esophagus, stomach, small intestine, colon and rectum,
                            pancreas, gallbladder, bile ducts</p>
                        <a href="#" class="btn btn-primary">Surgical Gastroenterologist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x900/?eye,iris
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Eye and Vision care</h5>
                        <p class="card-text">Surgical care of the eyes and visual system, and also the prevention of eye
                            disease </p>
                        <a href="#" class="btn btn-primary">Ophthalmologist </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="lungs.jpg
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lungs and Respiratory System</h5>
                        <p class="card-text">Asthma,COPD Chronic Bronchitis, Emphysema, Cystic fibrosis</p>
                        <a href="#" class="btn btn-primary">Pulmonologist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="physio1.jpg" class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Physiotherapy</h5>
                        <p class="card-text">Mobility, function,physical rehabilitation, injury prevention, and health
                            and fitness.</p>
                        <a href="#" class="btn btn-primary">Physiotherepist</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="physio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ayush</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Ayurvedic Doctor</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="ent.jpg
                    " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ear, Nose and Throat</h5>
                        <p class="card-text"> Treat hearing, swallowing and speech, breathing and sleep issues,
                            allergies and sinuses.</p>
                        <a href="#" class="btn btn-primary">Otolaryngologist</a>
                    </div>
                </div>
            </div>


        </div>
    
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>