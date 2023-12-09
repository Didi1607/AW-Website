<?php
include "./models/ClientModel.php";

class ClientController
{
    var $cm;

    function __construct()
    {
        $this->cm = new ClientModel();
    }
    function routes()
    {
        if (isset($_GET['request'])) :
            switch ($_GET['request']):
                case 'home_admin':
                    $totalPets = $this->cm->Total_Pet();
                    $TotalPetTopic = $this->cm->Total_Pet_Topic();
                    $TotalPetDetail = $this->cm->Total_Pet_Detail();
                    $TotalLearnScience = $this->cm->Total_LearnScience();
                    $TotalKnowleDgebase6 = $this->cm->Total_KnowleDgebase6();
                    $TotalQuiz = $this->cm->Total_Quiz();
                    $TotalFavorite = $this->cm->Total_Favorite();
                    $TotalAuthor = $this->cm->Total_Author();
                    $countFromTable = $this->cm->countFromTable();

                    $countClas = $this->cm->countClas();
                    $countOrdo = $this->cm->countOrdo();
                    $countFamily3 = $this->cm->countFamily3();
                    $countSpecies4 = $this->cm->countSpecies4();

                    include "./views/admin/home_admin.php";
                    break;

                case 'user':
                    $user = $this->cm->getAllUser();

                if(isset($_POST['add_user_role'])){
                    $username = $_POST['username'];
                    $full_name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $password = $_POST['password'];
                    $role = $_POST['role'];

                     // Kiểm tra rỗng và dấu ký tự trong
                     if (empty($username) || empty($full_name) || empty($email) || empty($address) || 
                     empty($password) || empty($role) || preg_match('/[!@#$%^&*]/', $username) || 
                     preg_match('/[!@#$%^&*]/', $full_name)) {
                        $alert = "Invalid input for User or title!";
                        include "./views/admin/user.php";
                    } else {
                        // Kiểm tra Existence của KnowledgeBase
                        if ($this->cm->checkUserName() == true) {
                            $alert = "The KnowLedgeBase is not exist!";
                            include "./views/admin/user.php";
                        } else {
                            $this->cm->addUser();
                            echo '<script>window.location.href = "?request=user";</script>';
                        }
                    }

                }
                   
                    include "./views/admin/user.php";
                    break;

                case 'animal':
                    $user = $this->cm->getAllUser();

                    $species_name = $this->cm->getNameSpecies();
                    $dataproduct = $this->cm->getdataAnimal();
                    include "./views/admin/Animal.php";
                    break;
                case 'family':
                    $user = $this->cm->getAllUser();

                    $family_name = $this->cm->getNameFamily();
                    $family = $this->cm->getFamily();
                    include "./views/admin/Family.php";
                    break;
                case 'species':
                    $user = $this->cm->getAllUser();

                    $species_name = $this->cm->getNameSpeciesFamili();
                    $species = $this->cm->getSpecies();
                    include "./views/admin/species.php";
                    break;
                case 'favorite':
                    $user = $this->cm->getAllUser();

                    $favorite_name = $this->cm->getNamefavoriteFamili();
                    $favorite_name_animal = $this->cm->getNamefavoriteanimalFamili();

                    $favorite = $this->cm->getFavorite();
                    include "./views/admin/favorite.php";
                    break;

                case 'knowledgebase':
                    $user = $this->cm->getAllUser();

                    $knowledgebase_name_class = $this->cm->getNameknowledgebaseFamili();
                    $favorite_name_ordo = $this->cm->getNameordoknowledgebase();
                    $favorite_name_family = $this->cm->getNamfamilyknowledgebase();

                    $knowledgebase = $this->cm->getKnowledgebase();
                    include "./views/admin/knowledgebase.php";
                    break;

                case 'ordo':
                    $user = $this->cm->getAllUser();

                    $knowledgebase_name_ordo = $this->cm->getNameknowledgebaseordo();
                    $ordo = $this->cm->getOrdo();
                    include "./views/admin/ordo.php";
                    break;

                case 'pet':
                    $user = $this->cm->getAllUser();

                    $pet = $this->cm->getPet();
                    include "./views/admin/pet.php";
                    break;

                case 'pet-topic':
                    $user = $this->cm->getAllUser();

                    $Name_top_pic = $this->cm->getNamepettoppic();

                    $pet_topic = $this->cm->getPet_pic();
                    include "./views/admin/pet-topic.php";
                    break;

                case 'author':
                    $user = $this->cm->getAllUser();

                    $author = $this->cm->getAuthor();
                    include "./views/admin/author.php";
                    break;



                case 'clas':
                    $user = $this->cm->getAllUser();
                    $class = $this->cm->getclas();
                    include "./views/admin/clas.php";
                    break;

                case 'petdetail':
                    $user = $this->cm->getAllUser();

                    $petname_petl = $this->cm->getNamepet_top_pic();
                    $petdetail = $this->cm->getPetDetail();
                    include "./views/admin/petdetail.php";
                    break;
                case 'quiz':
                    $user = $this->cm->getAllUser();

                    $quiz = $this->cm->getQuiz();
                    include "./views/admin/quiz.php";
                    break;

                case 'learnScience':
                    $user = $this->cm->getAllUser();

                    $learnScience = $this->cm->getLearnScience();
                    include "./views/admin/learnScience.php";
                    break;

                case 'profile':

                    $animal = $this->cm->getUserById();
                    if (isset($_POST['username'])) :
                        if ($this->cm->checkUserNameAnimal() == true) :
                            $alert = "The User Title Is Not Exists!";
                            include "./views/admin/profile.php";
                        else :
                            $this->cm->updateUser();
                            header("location:?request=profile");
                        endif;
                    else :
                        include "./views/admin/profile.php";
                    endif;
                    break;
                    //add

                case 'petdetail':

                    $petdt = $this->cm->getPetdetaiById();
                    if (isset($_POST['NamePetDetailE'])) :
                        if ($this->cm->checkPetDetaiNameAnimal() == true) :
                            $alert = "The User Title Is Not Exists!";
                            include "./views/admin/petdetai.php";
                        else :
                            $this->cm->updatePetDetail();
                            echo '<script>window.location.href = "?request=petdetail";</script>';

                        endif;
                    else :
                        include "./views/admin/petdetail.php";
                    endif;
                    break;
                    //add

                case 'pettopDetai':

                    $animal = $this->cm->getPetpettopicById();
                    if (isset($_POST['NamePetDetailE'])) :

                        $this->cm->updatePettopDetai();
                        echo '<script>window.location.href = "?request=petdetai";</script>';

                    endif;
                    include "./views/admin/petdetai.php";
                    break;
                    //add

                case 'add_animal':
                    $species = $this->cm->getSpecies();
                    $data = $this->cm->getdataAnimal();

                    if (isset($_POST['animal_up'])) {
                        $title = $_POST['title'];
                        $ReferenceLink = $_POST['ReferenceLink'];
                        $description = $_POST['description'];
                        $iFact = $_POST['iFact'];
                        $Favorite = $_POST['Favorite'];
                        $CountView = $_POST['CountView'];
                        $CountStar = $_POST['CountStar'];
                        $SpeciesiD = $_POST['SpeciesiD'];

                        // Kiểm tra các trường không được để trống
                        if (empty($title) || empty($ReferenceLink) || empty($description) || empty($iFact) || empty($Favorite) || empty($CountView) || empty($CountStar) || empty($SpeciesiD)) {
                            $alert = "Please fill in all information for the fields.";
                            include "./views/admin/add/add_animal.php";
                        } else {
                            if ($this->cm->checkAnimal() == true) {
                                $alert = "The Animal Title Is Not Exists!";
                                include "./views/admin/add/add_animal.php";
                            } else {
                                $this->cm->addAnimal();
                                echo '<script>window.location.href = "?request=animal";</script>';
                            }
                        }
                    } else {
                        include "./views/admin/add/add_animal.php";
                    }
                    break;


                case 'add-quiz':
                    if (isset($_POST['Add_Quiz'])) :
                        if ($this->cm->checkQuiZ() == true) :
                            $alert = "The Quiz Title Is Not Exists!";
                        else :
                            $this->cm->addQuiz();
                            echo '<script>window.location.href = "?request=quiz";</script>';

                        endif;
                    else :
                        include "./views/admin/add/add-quiz.php";
                    endif;
                    break;

                case 'add_petdetail':
                    $pet_topic = $this->cm->getPet_pic();
                    $petname_pet = $this->cm->getPet();

                    if (isset($_POST['petdeil_upload'])) {
                        $NamePetDetailE = $_POST['NamePetDetailE'];
                        $NamePetDetailTV = $_POST['NamePetDetailTV'];
                        $PetDetailDes = $_POST['PetDetailDes'];

                        // Kiểm tra các trường không được rỗng
                        if (empty($NamePetDetailE) ) {
                            $alert = "NamePetDetailE can't blank.";
                            include "./views/admin/add/add_petdetail.php";
                        }else if ( empty($NamePetDetailTV) ) {
                            $alert = "NamePetDetailTV can't blank.";
                            include "./views/admin/add/add_petdetail.php";
                        }else if
                         ( empty($PetDetailDes)) {
                            $alert = "NamePetDetailTV can't blank.";
                            include "./views/admin/add/add_petdetail.php";
                        }
                        // Kiểm tra các trường không chứa chữ có dấu và ký tự đặc biệt
                        elseif (
                            preg_match('/[^\p{L}\s]/u', $NamePetDetailE) ||
                            preg_match('/[^\p{L}\s]/u', $NamePetDetailTV) ||
                            preg_match('/[!@#$%^&*]/', $PetDetailDes)
                        ) 
                        {
                            $alert = "Please use only letters without accents and avoid special characters like !@#$%^&*.";
                            include "./views/admin/add/add_petdetail.php";
                        } else {
                            $this->cm->addPetDail();
                            echo '<script>window.location.href = "?request=petdetail";</script>';
                            exit;
                        }
                    } else {
                        include "./views/admin/add/add_petdetail.php";
                    }
                    break;


                case 'add_knowledgebase':
                    $class = $this->cm->getclas();
                    $ordo = $this->cm->getOrdo();
                    $family = $this->cm->getFamily();

                    if (isset($_POST['up_know'])) {
                        // Lấy dữ liệu từ form
                        $title = $_POST['title'];
                        $Title = $_POST['Title'];
                        $KnowledgeBaseDescription = $_POST['KnowledgeBaseDescription'];
                        $KnowledgeBaseReference = $_POST['KnowledgeBaseReference'];
                        $IdClass = $_POST['IdClass'];
                        $IdOrdo = $_POST['IdOrdo'];
                        $IdFamily = $_POST['IdFamily'];

                        // Kiểm tra rỗng và dấu ký tự trong $title và $Title
                        if (empty($title) || empty($Title) || preg_match('/[!@#$%^&*]/', $title) || preg_match('/[!@#$%^&*]/', $Title)) {
                            $alert = "Invalid input for Title or title!";
                            include "./views/admin/add/add_knowledgebase.php";
                        } else {
                            // Kiểm tra Existence của KnowledgeBase
                            if ($this->cm->checkKnowLedgeBase() == true) {
                                $alert = "The KnowLedgeBase is not exist!";
                                include "./views/admin/add/add_knowledgebase.php";
                            } else {
                                $this->cm->addknowledgebase();
                                echo '<script>window.location.href = "?request=knowledgebase";</script>';
                            }
                        }
                    } else {
                        include "./views/admin/add/add_knowledgebase.php";
                    }
                    break;


                case 'add-user':
                    if (isset($_POST['add_user_role'])) :
                        if ($this->cm->checkUserName() == true) :
                            $alert = "The User Title Is Not Exists!";

                            header("location:?request=user");

                        else :
                            $this->cm->addUser();
                            echo '<script>window.location.href = "?request=user";</script>';

                        endif;
                    else :
                        include "./views/admin/add/add-user.php";
                    endif;
                    break;

                case 'add-pet':
                    if (isset($_POST['add_pet'])) {
                        $NamePetE = $_POST['NamePetE'];
                        $NamePetTV = $_POST['NamePetTV'];

                        if (empty($NamePetE) || empty($NamePetTV)) {
                            $alert = "Please fill in all information for the fields.";
                            include "./views/admin/add/add-pet.php";
                        } elseif (preg_match('/[^\p{L}\s]/u', $NamePetE) || preg_match('/[^\p{L}\s]/u', $NamePetTV)) {
                            $alert = "Please use only letters without accents.";
                            include "./views/admin/add/add-pet.php";
                        } else {
                            if ($this->cm->checkPetName() == true) {
                                $alert = "The Pet Title Is Not Exists!";
                                include "./views/admin/add/add-pet.php";
                            } else {
                                $this->cm->addPet();
                                echo '<script>window.location.href = "?request=pet";</script>';
                            }
                        }
                    } else {
                        include "./views/admin/add/add-pet.php";
                    }
                    break;

                case 'add_ordo':
                    $clas = $this->cm->getClas();

                    if (isset($_POST['add_ordo'])) {
                        $OrdoNameE = $_POST['OrdoNameE'];
                        $OrdoNameTV = $_POST['OrdoNameTV'];
                        $DescriptionOrdo = $_POST['DescriptionOrdo'];
                        $ClassID = $_POST['ClassID'];

                        // Kiểm tra các trường không được để trống
                        if (empty($OrdoNameE) || empty($OrdoNameTV)) {
                            $alert = "Please fill in all information for the fields.";
                            include "./views/admin/add/add_ordo.php";
                        }
                        // Kiểm tra không chứa chữ có dấu và ký tự đặc biệt
                        elseif (
                            preg_match('/[^\p{L}\s]/u', $OrdoNameE) ||
                            preg_match('/[^\p{L}\s]/u', $OrdoNameTV) ||
                            preg_match('/[!@#$%^&*]/', $OrdoNameE) ||
                            preg_match('/[!@#$%^&*]/', $OrdoNameTV)
                        ) {
                            $alert = "Please use only letters without accents and avoid special characters like !@#$%^&*.";
                            include "./views/admin/add/add_ordo.php";
                        } else {
                            if ($this->cm->checkOrdo() == true) {
                                $alert = "The Ordo Title Is Not Exists!";
                                include "./views/admin/add/add_ordo.php";
                            } else {
                                $this->cm->addOrdo();
                                echo '<script>window.location.href = "?request=ordo";</script>';
                            }
                        }
                    } else {
                        include "./views/admin/add/add_ordo.php";
                    }
                    break;


                case 'add-pettopic':
                    $pet = $this->cm->getPet();
                    $pet_topic = $this->cm->getPetInfoFromPetTopic();

                    if (isset($_POST['add_pettopic'])) {
                        $NamePetE = $_POST['NamePetE'];
                        $NamePetTV = $_POST['NamePetTV'];
                        $IdPet = $_POST['IdPet'];

                        // Kiểm tra các trường không được bỏ trống
                        if (empty($NamePetE) || empty($NamePetTV)) {
                            $alert = "Please fill in all information for the fields.";
                            include "./views/admin/add/add-pettopic.php";
                        }
                        // Kiểm tra các trường không chứa ký tự có dấu
                        elseif (preg_match('/[^\p{L}\s]/u', $NamePetE) || preg_match('/[^\p{L}\s]/u', $NamePetTV)) {
                            $alert = "Please use only letters without accents.";
                            include "./views/admin/add/add-pettopic.php";
                        } else {
                            if ($this->cm->checkPet_topicName() == true) {
                                $alert = "The Pet Topic Title Is Not Exists!";
                                include "./views/admin/add/add-pettopic.php";
                            } else {
                                $this->cm->addPetToppic();
                                echo '<script>window.location.href = "?request=pet-topic";</script>';
                            }
                        }
                    } else {
                        include "./views/admin/add/add-pettopic.php";
                    }
                    break;


                case 'add_clas':
                    $pet_topic = $this->cm->getPetInfoFromPetTopic();
                    $class = $this->cm->getclas();

                    if (isset($_POST['up_class'])) {
                        $ClassNameE = $_POST['ClassNameE'];
                        $ClassNameTV = $_POST['ClassNameTV'];
                        $descriptionClass = $_POST['descriptionClass'];

                        // Kiểm tra các trường không được để trống
                        if (empty($ClassNameE) || empty($ClassNameTV)) {
                            $alert = "Please fill in all information for the fields.";
                            include "./views/admin/add/add_clas.php";
                        }
                        // Kiểm tra không sử dụng chữ có dấu và ký tự đặc biệt
                        elseif (
                            preg_match('/[^\p{L}\s]/u', $ClassNameE) ||
                            preg_match('/[^\p{L}\s]/u', $ClassNameTV) ||
                            preg_match('/[!@#$%^&*]/', $ClassNameE) ||
                            preg_match('/[!@#$%^&*]/', $ClassNameTV)
                        ) {
                            $alert = "Please use only letters without accents and avoid special characters like !@#$%^&*.";
                            include "./views/admin/add/add_clas.php";
                        } else {
                            if ($this->cm->checkPet_class() == true) {
                                $alert = "The class Title Is Not Exists";
                                include "./views/admin/add/add_clas.php";
                            } else {
                                $this->cm->addClass() == true;
                                $_SESSION['alert'] = "The class Title Is Not Exists!";
                                echo '<script>window.location.href = "?request=add_clas";</script>';
                            }
                        }
                    } else {
                        include "./views/admin/add/add_clas.php";
                    }
                    break;



                case 'add_favorite':
                    $user = $this->cm->getAllUser();
                    $Animal = $this->cm->getAllAnimal();

                    if (isset($_POST['upload'])) :
                        if ($this->cm->checkFavorite() == true) :
                            $alert = "The Favorite Title Is Not Exists!";
                        else :
                            $this->cm->addFavorite();
                            echo '<script>window.location.href = "?request=favorite";</script>';
                        endif;
                    else :
                        include "./views/admin/add/add_favorite.php";
                    endif;
                    break;

                case 'add_learnScience':
                    
                    if (isset($_POST['addLearnScience'])) {
                        $this->cm->addLearnScience();
                        echo '<script>window.location.href = "?request=learnScience";</script>';
                        exit;
                    } else {
                        include "./views/admin/add/add_learnScience.php";
                    }
                    break;

                case 'add-family':
                    $ordo = $this->cm->getOrdo();

                    if (isset($_POST['FamilyNameE'])) {
                        $FamilyNameE = $_POST['FamilyNameE'];
                        $OrdoID = $_POST['OrdoID'];

                        if (empty($FamilyNameE)) {
                            $alert = "Please fill in all information for the field.";
                            include "./views/admin/add/add-family.php";
                        } elseif (preg_match('/[!@#$%^&*]/', $FamilyNameE)) {
                            $alert = "Please avoid special characters like !@#$%^&*.";
                            include "./views/admin/add/add-family.php";
                        } else {
                            if ($this->cm->checkFamilyNameE() == true) {
                                $alert = "The Animal Title Is Not Exists!";
                                include "./views/admin/add/add-family.php";
                            } else {
                                $this->cm->addFamilyNameE();
                                echo '<script>window.location.href = "?request=family";</script>';
                            }
                        }
                    } else {
                        include "./views/admin/add/add-family.php";
                    }
                    break;


                case 'add-species':
                    $family = $this->cm->getFamily();

                    if (isset($_POST['SpeciesNameE'])) {
                        $SpeciesNameE = $_POST['SpeciesNameE'];
                        $SpeciesNameTV = $_POST['SpeciesNameTV'];
                        $descriptionSpecies = $_POST['descriptionSpecies'];
                        $FamilyID = $_POST['FamilyID'];

                        if (empty($SpeciesNameE) || empty($SpeciesNameTV)) {
                            $alert = "Please fill in all information for the fields.";
                            include "./views/admin/add/add-species.php";
                        } elseif (
                            preg_match('/[!@#$%^&*]/', $SpeciesNameE) ||
                            preg_match('/[!@#$%^&*]/', $SpeciesNameTV)
                        ) {
                            $alert = "Please avoid special characters like !@#$%^&*.";
                            include "./views/admin/add/add-species.php";
                        } else {
                            if ($this->cm->checkSpecies() == true) {
                                $alert = "The Ordo Title Is Not Exists!";
                                include "./views/admin/add/add-species.php";
                            } else {
                                $this->cm->addSpecies();
                                echo '<script>window.location.href = "?request=species";</script>';
                            }
                        }
                    } else {
                        include "./views/admin/add/add-species.php";
                    }
                    break;


                case 'add-author':
                    if (isset($_POST['full_name'])) :
                        if ($this->cm->checkAuthor() == true) :
                            $alert = "The Animal Title Is Not Exists!";
                            include "./views/admin/edit/edit-author.php";

                        else :
                            $this->cm->addAuthor();
                            echo '<script>window.location.href = "?request=author";</script>';

                        endif;
                    else :
                        include "./views/admin/add/add-author.php";
                    endif;
                    break;

                    //edit
                case 'edit-animal':
                    $id = $_GET['id'];
                    $getName_animal_edit_Species_id = $this->cm->getName_animal_edit_Species_id($id);
                    $species = $this->cm->getSpecies();
                    $getPet_toppic = $this->cm->getPet_toppic();
                    $animal = $this->cm->getAnimalById();
                    if (isset($_POST['title'])) :

                        if ($this->cm->checkSameNameAnimal() == true) :
                            $alert = "The Animal Title Is Not Exists!";

                        else :
                            $this->cm->updateAnimal();
                            header("location:?request=animal");
                            echo '<script>window.location.href = "?request=animal";</script>';

                        endif;
                    else :
                        include "./views/admin/edit/edit-animal.php";
                    endif;
                    break;

                case 'edit-pet':
                    $pet = $this->cm->getPetById();
                    if (isset($_POST['pet_up'])) {

                        $this->cm->updatePet();
                        echo '<script>window.location.href = "?request=pet";</script>';
                        exit;
                    } else {
                        include "./views/admin/edit/edit-pet.php";
                    }
                    break;

                case 'edit_ordo':
                    $id = $_GET['id'];
                    $getName_ordo_id = $this->cm->getName_ordo_id($id);

                    $knowledgebase_name_ordo = $this->cm->getNameknowledgebaseordo();
                    $ordo = $this->cm->getOrdoById();
                    if (isset($_POST['ordo_update'])) {
                        $this->cm->updateOrdo();
                        echo '<script>window.location.href = "?request=ordo";</script>';
                        exit;
                    } else {
                        include "./views/admin/edit/edit_ordo.php";
                    }
                    break;

                case 'edit-favorite':
                    $user = $this->cm->getAllUser();
                    $Animal = $this->cm->getAllAnimal();
                    $favorite_name_animal = $this->cm->getNamefavoriteanimalFamili();
                    $favorite_name = $this->cm->getNamefavoriteFamili();

                    if (isset($_POST['upload_Favorite'])) {
                        $this->cm->updatefavorite();
                        echo '<script>window.location.href = "?request=favorite";</script>';
                        exit;
                    } else {
                        include "./views/admin/edit/edit-favorite.php";
                    }
                    break;

                case 'edit_class':
                    $class = $this->cm->getClassById();
                    if (isset($_POST['class_up'])) {
                        $this->cm->updateClass();
                        echo '<script>window.location.href = "?request=clas";</script>';
                        exit;
                    } else {
                        include "./views/admin/edit/edit_class.php";
                    }
                    break;

                case 'edit-petdetail':
                    $id = $_GET['id'];
                    $pet_topic = $this->cm->getPet_pic();

                    $pet_detail = $this->cm->getPetDetailById();
                    if (isset($_POST['petdetai_up'])) {
                        $this->cm->updatePetDetail();
                        echo '<script>window.location.href = "?request=petdetail";</script>';
                        exit;
                    } else {
                        include "./views/admin/edit/edit-petdetail.php";
                    }
                    break;

                case 'edit-pettopic':
                    $Name_top_pic = $this->cm->getNamepet_top_pic();
                    $pet_topic = $this->cm->getPetInfoFromPetTopic();
                    $getTopic_name = $this->cm->getTopic();
                    $pet = $this->cm->getpet_topicById();
                    $pet_name = $this->cm->getPet();
                    if (isset($_POST['petdetail_up'])) :
                        $this->cm->updatePettopic();
                        echo '<script>window.location.href = "?request=pet-topic";</script>';
                    else :
                        include "./views/admin/edit/edit-pettopic.php";
                    endif;
                    break;

                case 'edit-user':
                    $animal = $this->cm->getUserById();
                    if (isset($_POST['username'])) :
                        if ($this->cm->checkUserNameAnimal() == true) :
                            $alert = "The User Title Is Not Exists!";
                            include "./views/admin/edit/edit-user.php";
                        else :
                            $this->cm->updateUser();
                            echo '<script>window.location.href = "?request=user";</script>';

                        endif;
                    else :
                        include "./views/admin/edit/edit-user.php";
                    endif;
                    break;

                case 'edit-author':
                    $author = $this->cm->getThorById();
                    if (isset($_POST['full_name'])) :
                        if ($this->cm->checkThorNamel() == true) :
                            $alert = "The User Title Is Not Exists!";
                            include "./views/admin/edit/edit-author.php";
                        else :
                            $this->cm->updateThor();
                            echo '<script>window.location.href = "?request=author";</script>';

                        endif;
                    else :
                        include "./views/admin/edit/edit-author.php";
                    endif;
                    break;

                case 'edit-family':
                    $id = $_GET['id'];
                    $ordo = $this->cm->getOrdo();
                    $animal = $this->cm->getFamilyById();
                    $getName_family_edit_ordo_id = $this->cm->getName_family_edit_ordo_id($id);

                    if (isset($_POST['FamilyNameE'])) :
                        $this->cm->updateFamily();
                        echo '<script>window.location.href = "?request=family";</script>';
                    else :
                        include "./views/admin/edit/edit-family.php";
                    endif;
                    break;

                case 'edit-quiz':
                    $quiz = $this->cm->getQuizById();

                    if (isset($_POST['update_quiz'])) {
                        $this->cm->updateQuiz();
                        echo '<script>window.location.href = "?request=quiz";</script>';
                        exit;
                    } else {
                        include "./views/admin/edit/edit-quiz.php";
                    }
                    break;

                case 'edit_learnScience':
                    $learnScience = $this->cm->getLearnScienceById();
                    if (isset($_POST['update_LearnScience'])) {
                        $this->cm->updateLearnScience();
                        echo '<script>window.location.href = "?request=learnScience";</script>';
                        exit;
                    } else {
                        include "./views/admin/edit/edit_learnScience.php";
                    }
                    break;

                case 'edit_knowledgebase':
                    $id = $_GET['id'];
                    $getName_knowledgebase_id = $this->cm->getName_knowledgebase_id($id);
                    $getName_ordo_edit_knowledgebase_id = $this->cm->getName_ordo_edit_knowledgebase_id($id);
                    $getName_ordo_edit_family_id = $this->cm->getName_ordo_edit_family_id($id);

                    $class = $this->cm->getclas();
                    $ordo = $this->cm->getOrdo();
                    $family = $this->cm->getFamily();
                    $le = $this->cm->getKnowLedgeBaseById();

                    if (isset($_POST['edit_knowledgebase'])) {
                        $this->cm->updateKnowLedgeBase();
                        echo '<script>window.location.href = "?request=knowledgebase";</script>';
                        exit;
                    } else {
                        include "./views/admin/edit/edit_knowledgebase.php";
                    }
                    break;

                case 'admin-edit-pass':
                    include "./views/admin/edit/admin-edit-pass.php";
                    break;

                case 'edit-species':
                    $id = $_GET['id'];
                    $family = $this->cm->getFamily();
                    $getName_species_edit_family_id = $this->cm->getName_species_edit_family_id($id);

                    $species = $this->cm->getSpeciesById();
                    if (isset($_POST['SpeciesNameE'])) :
                        $this->cm->updateSpecies();
                        echo '<script>window.location.href = "?request=species";</script>';

                    else :
                        include "./views/admin/edit/edit-species.php";
                    endif;
                    break;

                    //delete
                case 'delete-animal':
                    $this->cm->deleteAnimal();
                    echo '<script>window.location.href = "?request=animal";</script>';

                    break;
                case 'delete-author':
                    $this->cm->deletAuthor();
                    echo '<script>window.location.href = "?request=author";</script>';

                    break;
                case 'delete-quiz':
                    $this->cm->deletQuiz();
                    echo '<script>window.location.href = "?request=quiz";</script>';

                    break;

                case 'delete-species':
                    $this->cm->deletSpecies();
                    echo '<script>window.location.href = "?request=species";</script>';

                    break;
                case 'delete-learnScience':
                    $this->cm->deletLearnScience();
                    echo '<script>window.location.href = "?request=learnScience";</script>';

                    break;
                case 'delete-user':
                    $this->cm->deleteUser();
                    echo '<script>window.location.href = "?request=user";</script>';

                    break;
                case 'delete-family':
                    $this->cm->deleteFamily();
                    echo '<script>window.location.href = "?request=family";</script>';
                    break;

                case 'delete-pet':
                    $this->cm->deletePet();
                    echo '<script>window.location.href = "?request=pet";</script>';
                    break;

                case 'delete_ordo':
                    $this->cm->deletOrdo();
                    echo '<script>window.location.href = "?request=ordo";</script>';
                    break;

                case 'delete_class':
                    $this->cm->deletClass();
                    echo '<script>window.location.href = "?request=clas";</script>';
                    break;

                case 'delete-petdetail':
                    $this->cm->deletePetDetail();
                    echo '<script>window.location.href = "?request=petdetail";</script>';
                    break;
                case 'delete_knowledgebase':
                    $this->cm->deleteKnowLedgeBase();
                    echo '<script>window.location.href = "?request=knowledgebase";</script>';

                    break;
                case 'delete-favorite':
                    $this->cm->deletefavorite();
                    echo '<script>window.location.href = "?request=favorite";</script>';
                    break;

                case 'delete-pettopic':
                    $this->cm->deletepettopic();
                    echo '<script>window.location.href = "?request=pet-topic";</script>';
                    break;
               
                case 'log_out':
                    session_unset();
                    session_destroy();
                    header('location:../admin/login.php');
                    break;

                case 'delete-species':
                    break;
            endswitch;
        else :

            include './views/admin/home_admin.php';
        endif;
    }
}
