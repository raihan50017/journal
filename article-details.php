<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <title>journal</title>
</head>

<body>
    <?php include "shared/navbar.php"; ?>
    <!-- body -->
    <div class="container">
        <div class="row p-2 bg-light align-items-center border-bottom">
            <div class="col-md-3 p-1">
                <h6 class="fw-bold">Search for articles: </h6>
            </div>
            <div class="col-md-3 p-1">
                <input class="fs-6 w-100" type="text" class="form-control" id="keyword" placeholder="Title / Keyword">
            </div>
            <div class="col-md-3 p-1">
                <input class="fs-6 w-100" type="text" class="form-control" id="keyword" placeholder="Author">
            </div>
            <div class="col-md-3 p-1">
                <button style="padding:2px 8px ;" class="btn btn-outline-primary">Search</button>
            </div>
        </div>
        <div class="mt-5">
            <div>
                <h3 style="background-color: rgba(0,0,0,.02);" class="fs-6 article-title fw-bold border px-2 py-3 text-center">Numerical and Experimental Validation of Active Vibration Control Logic Performance of a Hybrid Noise Control-Based Brick</h3>
                <div class="px-2 py-3 border">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img class="mb-3" style="width:100%" alt="" src="images/j1.webp">
                            <h6 class="fw-bold">Editor</h6>
                            <p style="color: black;">Azizur Rahman</p>
                            <h6 class="fw-bold">Associate Editor</h6>
                            <p style="color: black;">Gazi Arafat Uz-Zaman Markony<br>
                                Tanjil Ahmed</p>
                            <h6 class="fw-bold">Member</h6>
                            <p style="color: black;">Shanjay Kumar Mukharjee<br>
                                Md. Nure Alam</p>
                        </div>
                        <div class="col-md-8 border-left">
                            <h5 class="fw-bold">Abstarct</h5>
                            <p style="color:black; text-align:justify">The limitations of active noise control (ANC) in coping with low frequencies and of passive noise control (PNC) in coping with middle-high frequencies are objects of research that present the potentialities of hybrid noise control (HBC). It aims at combining both of the behaviours by broadening the range of absorbed frequencies. Among the several application fields, the AEC (architecture, engineering, and construction) market can take advantage for those applications in which the noise conditions are caused by sound sources that tune in a broad frequencies range. In this frame, the paper describes the numerical and experimental validation of the active behaviour of an under-development project of a hybrid noise control-based acoustic bricks. The latter intends to embed the potentialities of active vibrational noise control (AVC) and passive destructive interference (PDI) in a unique design of an easy-to-mount, 3D-printed, customisable smart acoustic blocks. Active vibration control, the object of this paper, is provided by a 5-mm thick aluminium circular plate with an attached piezoelectric patch. The vibration of the latter, depending on a specific control law, defines the vibration of the plate itself achieving an abatement of the reflection coefficient. Through mathematical modelling and tests in an impedance tube, the results show that the control logic can reach an average abatement of the reflection coefficient of 82% in the frequency range 144–1007 Hz.</p>
                            <h5 class="fw-bold mt-2">1.Introduction</h5>
                            <p style="color:black; text-align:justify">
                                Active and passive noise control can be seen as complementary techniques in terms of effective frequency attenuation range. Active control attenuates low frequencies more efficiently than passive control which works better at high frequencies [1]. Passive control typically involves the use of damping or mass, while active control uses secondary sources to generate a sound field that interferes destructively with the original source [2]. The successful mass adoption of active noise control has so far been limited to confined spaces such as the interiors of cars and aircraft cabins and headphones [3]. However, the proven effectiveness of active noise control (from here on ANC) in mitigating low-frequency noise is given by physically more ‘compact’ systems than passive control systems [4]. Nevertheless, since, at the state of this paper, ANC is an energy-based system, its use in high energy consuming field (such as built environment) [5] is still limited.
                                Traditional passive approaches have been the strategy for noise control. Passive materials achieve control through absorption, diffusion or reflection of sound, which are not mutually exclusive. In order to absorb lower frequencies the material is more effective at higher thickness [6]. This, however, gives two limitations in terms of indoor physical space and costs.
                                For these reasons, systems with hybrid behaviour have been proposed. Examples of hybrid approaches, involving passive performance enhancement with active control, have been demonstrated on noise barriers, where ANC has been applied to extend the effective height of the barrier by minimising diffracted waves over the top of the barrier [7]. One of the advantages of combining both active and passive approaches in the built environment is its improvement on airflow impact [8]. Active control was firstly implemented to reduce the noise of air flow in ducts and was more recently demonstrated on open windows to sound insulate from outdoor noises [9]. In the context of built environment, unobstructed airflow is important for natural ventilation (NV), an essential requirement of building design to provide public health and to meet the United Nations (UN) Sustainable Development Goals [10].
                                In this context, the present work shows the development of the active part of a block with hybrid noise control behaviour. The latter, called a smart acoustic block, enhances the hybrid behaviour control by exploiting the potentialities of the active vibrational control (AVC) and of passive destructive interference (PDI)
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                                <img style="width: 50%;" alt="" src="images/fig1.webp">
                            </div>
                            <small>Figure 1. Conceptual scheme of the 4-blocks component (with PDI behaviour) that creates the place where to insert the plate (in blue).</small>
                            <p class="p-1"></p>
                            <p style="color:black; text-align:justify">In particular, the paper presents the numerical and experimental validation of the active behaviour of the block. In the material and methods section, the system to ascertain the active behaviour and its integration in the block is described. The control law formulation section describes the numerical dissertation on the controlling of the vibration of the plate. The fourth section describes the experimental validation of the numerical. The results and discussions of whole process are presented in the fifth section. The conclusions describe in the last section.</p>
                            <h5 class="fw-bold mt-2">1. Materials and Methods</h5>
                            <p style="color:black; text-align:justify">
                                The mechanical system for the active behaviour is compounded by a two mm thick circular aluminium plate with a piezoelectric patch applied on the back.
                                Piezoelectric transducers are electroacoustic transducer that convert the electrical charges produced pressure variation into energy and vice versa. In our research it is taken in consideration under this last behaviour.
                                The choice of the circular shape and the radius is given by the 5.3 cm radius of the impedance tube circular section, where the tests are performed
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                                <img style="width: 50%;" alt="" src="images/fig2.webp">
                            </div>
                            <small>Figure 2. Active system compounded by plate and piezoelectric patch in the impedance tube.</small>
                            <p class="p-1"></p>
                            <p style="color:black; text-align:justify">Based on that, the model used to study the response of the system plate-patch to the incident sound pressure is a duct, which initially is considered 1 m long by default. The length is reduced after mathematical considerations since it is demonstrated to be less efficient than a lower length.
                                As far as the radius is concerned, different lengths are not taken in consideration because the chosen size is consistent for the purposes of this research. The condition of the incident plane waves is considered for the formulation of the force to be imposed on the plate [11]. Then, the case of the diffuse sound field is studied. The validation is performed by checking the reduction in the sound pressure wave reflected by the plate [12].</p>
                            <h5 class="fw-bold mt-2">1. Control Law Formulation</h5>
                            <p style="color:black; text-align:justify">
                                The active response is given by the vibration of the plate-patch system under the application of the control law. The control law has a key role in controlling the operations of the software code. Generally speaking, the control law has user-adjusted variables and responds to input from the external environment. It acts on its own to perform automated tasks that have been structured into the program [13].
                                In this case, the control law validation is set up in three steps, starting from a simplification of the case study to a more realistic and complex model.
                                The first model implements a 2D duct in MATLAB, solved in the frequency domain. MATLAB (an abbreviation of “MATrix LABoratory” [14]) is a proprietary multi-paradigm programming language and numeric computing environment developed by MathWorks. MATLAB allows matrix manipulations, the plotting of functions and data plotting, algorithms implementations, user interfaces creation, and interfacing with programs written in other languages. The rectangular duct sizes are 100 cm long and 10 cm wide.
                                A uniform harmonic motion (u0) is imposed at boundary x = 0 (Figure 3). The control law in terms of vibration velocity is imposed on the other boundary x = L. In order to maximise the absorption coefficient of the totally reflective right boundary, a displacement is generated at the controlled boundary:<br>
                            <p style="color: black;" class="text-center">uL=u0e<sup>−jkL,</sup></p>
                            where L is the length of the tube, k the wave number, u0 the velocity imposed on the other boundary and j the imaginary part.
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                                <img style="width: 50%;" alt="" src="images/fig3.webp">
                            </div>
                            <small>Figure 3. 2D duct model.</small>
                            <p class="p-1"></p>
                            <p style="color:black; text-align:justify">In this case, a totally absorption of the incident pressure wave is achieved, as shown in Figure 4a, where the sound pressure field is split in incident and reflected contribution:
                            <p style="color: black;" class="text-center">pi(x)=p0e<sup>−jkL,</sup></p>
                            and,
                            <p style="color: black;" class="text-center">pr=rp0<sup>−jkL,</sup></p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "shared/footer.php"; ?>
    <!-- body -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
</body>

</html>