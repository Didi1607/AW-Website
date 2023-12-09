<?php
class ClientModel
{
    var $connect;
    function __construct()
    {
        $this->connect = new MySQLi("localhost", "root", "", "aw");
    }


    function Total_Pet()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS total FROM pet");
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    function Total_Pet_Topic()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS total FROM pettopic");
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    function Total_Pet_Detail()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS total FROM petdetail");
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    function Total_LearnScience()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS total FROM learnscience");
        $row = $result->fetch_assoc();
        return $row['total'];
    }
    function Total_KnowleDgebase6()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS total FROM knowledgebase6");
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    function Total_Quiz()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS total FROM quiz");
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    function Total_Author()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS total FROM author");
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    function Total_Favorite()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS total FROM favorite");
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    public function countFromTable()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS count FROM animaldatas5");
        $row = $result->fetch_assoc();
        return $row['count'];
    }

    public function countClas()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS count FROM clas");
        $row = $result->fetch_assoc();
        return $row['count'];
    }

    public function countOrdo()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS count FROM ordo");
        $row = $result->fetch_assoc();
        return $row['count'];
    }

    public function countFamily3()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS count FROM family3");
        $row = $result->fetch_assoc();
        return $row['count'];
    }

    public function countSpecies4()
    {
        $result = $this->connect->query("SELECT COUNT(*) AS count FROM species4");
        $row = $result->fetch_assoc();
        return $row['count'];
    }


    function getAllUser()
    {
        return $this->connect->query("SELECT*FROM user");
    }

    function getAllAnimal()
    {
        return $this->connect->query("SELECT*FROM animaldatas5");
    }

    function getdataAnimal()
    {
        return $this->connect->query("SELECT*FROM animaldatas5");
    }

    function getclas()
    {
        return $this->connect->query("SELECT*FROM clas");
    }


    function checkDuplicateAnimal()
    {
        $return = $this->connect->query("SELECT*FROM animaldatas5 WHERE title='" . $_POST['title'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkQuiZ()
    {
        $return = $this->connect->query("SELECT*FROM quiz WHERE AskA='" . $_POST['AskA'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkAnimal()
    {
        $return = $this->connect->query("SELECT*FROM animaldatas5 WHERE title='" . $_POST['title'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkKnowLedgeBase()
    {
        $return = $this->connect->query("SELECT*FROM knowledgebase6 WHERE id_kn ='" . $_POST['Title'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }


    function checkSpecies()
    {
        $return = $this->connect->query("SELECT*FROM species4 WHERE SpeciesNameE='" . $_POST['SpeciesNameE'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }
    // check
    function checkSameNameAnimal()
    {
        $return = $this->connect->query("SELECT*FROM animaldatas5 WHERE title='" . $_POST['title'] . "' AND id!= " . $_GET['id'] . " ");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkPet()
    {
        $return = $this->connect->query("SELECT*FROM pet WHERE NamePetTV ='" . $_POST['NamePetTV'] . "' ");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkPetTopic()
    {
        $return = $this->connect->query("SELECT*FROM pettopic WHERE NamePetE ='" . $_POST['NamePetE'] . "' ");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkUserNameAnimal()
    {
        $return = $this->connect->query("SELECT*FROM user WHERE username='" . $_POST['username'] . "' AND id!= " . $_GET['id'] . " ");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkThorNamel()
    {
        $return = $this->connect->query("SELECT*FROM author WHERE full_name='" . $_POST['full_name'] . "' AND id!= " . $_GET['id'] . " ");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkPetDetaiNameAnimal()
    {
        $return = $this->connect->query("SELECT*FROM user WHERE username='" . $_POST['username'] . "' AND id!= " . $_GET['id'] . " ");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkUserName()
    {
        $return = $this->connect->query("SELECT*FROM user WHERE username='" . $_POST['username'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkAuthor()
    {
        $return = $this->connect->query("SELECT*FROM author WHERE full_name='" . $_POST['full_name'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkPetName()
    {
        $return = $this->connect->query("SELECT*FROM pet WHERE NamePetE='" . $_POST['NamePetE'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkOrdo()
    {
        $return = $this->connect->query("SELECT*FROM ordo WHERE OrdoNameE='" . $_POST['OrdoNameE'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }


    function checkPet_topicName()
    {
        $return = $this->connect->query("SELECT*FROM pettopic WHERE NamePetE='" . $_POST['NamePetE'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkPet_class()
    {
        $return = $this->connect->query("SELECT*FROM clas WHERE idclas ='" . $_POST['ClassNameE'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }


    function checkFavorite()
    {
        $return = $this->connect->query("SELECT * FROM favorite WHERE Animalid ='" . $_POST['Animalid'] . "'");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }

    function checkFamilyNameE()
    {
        $return = $this->connect->query("SELECT * FROM family3 WHERE FamilyNameE='" . $_POST['FamilyNameE'] . "'");
        if (mysqli_num_rows($return) != 0) {
            return true;
        }
        return false;
    }

    function checkLearnScience()
    {
        $return = $this->connect->query("SELECT * FROM family3 WHERE FamilyNameE='" . $_POST['FamilyNameE'] . "'");
        if (mysqli_num_rows($return) != 0) {
            return true;
        }
        return false;
    }

    function checkFamilyName()
    {
        $return = $this->connect->query("SELECT * FROM family3 WHERE FamilyNameE='" . $_POST['FamilyNameE'] . "'");
        if (mysqli_num_rows($return) != 0) {
            return true;
        }
        return false;
    }


    function checkSpeciesNameE()
    {
        $return = $this->connect->query("SELECT*FROM species4 WHERE SpeciesNameE='" . $_POST['SpeciesNameE'] . "'AND SpeciesID != " . $_GET['id'] . " ");
        if (mysqli_num_rows($return) != 0) :
            return true;
        endif;
        return false;
    }


    // end check
    // add
    function addAnimal()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $isVietnam = $_POST['isVietnam'];
        $ReferenceLink = $_POST['ReferenceLink'];
        $iFact = $_POST['iFact'];
        $Favorite = $_POST['Favorite'];
        $CountView = $_POST['CountView'];
        $CountStar = $_POST['CountStar'];
        $SpeciesiD = $_POST['SpeciesiD'];

        $maxFileSize = 41943040;

        if ($_FILES["AnimalVideo"]["size"] <= $maxFileSize && $_FILES["Speciesimage"]["size"] <= $maxFileSize) {
            $uploadDirVideos = "../admin/uploads/videos/";
            $videoFile = $uploadDirVideos . basename($_FILES["AnimalVideo"]["name"]);

            if (move_uploaded_file($_FILES["AnimalVideo"]["tmp_name"], $videoFile)) {
                $_SESSION['message'] = "Tệp video đã được tải lên thành công.";

                $uploadedVideo = $videoFile;

                $uploadDirImages = "../admin/uploads/images/";
                $imageFile = $uploadDirImages . basename($_FILES["Speciesimage"]["name"]);

                if (move_uploaded_file($_FILES["Speciesimage"]["tmp_name"], $imageFile)) {
                    $_SESSION['message'] = "Tệp hình ảnh đã được tải lên thành công.";

                    $uploadedImage = $imageFile;

                    $this->connect->query("INSERT animaldatas5(title,description,isVietnam,AnimalVideo,Speciesimage,iFact,Favorite,CountView,CountStar,SpeciesiD,ReferenceLink) VALUES ('$title','$description','$isVietnam','$uploadedVideo','$uploadedImage','$iFact','$Favorite','$CountView','$CountStar','$SpeciesiD','$ReferenceLink')");
                } else {
                    $_SESSION['message'] = "Có lỗi xảy ra khi tải lên tệp hình ảnh.";
                }
            } else {
                $_SESSION['message'] = "Có lỗi xảy ra khi tải lên tệp video.";
            }
        } else {
            $_SESSION['message'] = "Tệp video quá lớn hoặc tệp hình ảnh quá lớn. Vui lòng chọn tệp có kích thước nhỏ hơn hoặc bằng 40 MB.";
        }
    }



    function addUser()
    {
        $username = $_POST['username'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $address = $_POST['address'];
        $role = $_POST['role'];

        $this->connect->query("INSERT user(username,full_name,email,password,address,role) VALUES ('$username','$full_name','$email','$password','$address','$role')");
    }

    function addAuthor()
    {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $Phone = $_POST['Phone'];

        $this->connect->query("INSERT author(full_name,Phone,email) VALUES ('$full_name','$Phone','$email')");
    }

    function addPet()
    {
        $NamePetE = $_POST['NamePetE'];
        $NamePetTV = $_POST['NamePetTV'];

        $uploadDir = "../admin/uploads/images/";

        $uploadFile = $uploadDir . basename($_FILES["ImagePet"]["name"]);

        if (move_uploaded_file($_FILES["ImagePet"]["tmp_name"], $uploadFile)) {
            echo "Tệp ảnh đã được tải lên thành công.";

            $uploadedImage = basename($_FILES["ImagePet"]["name"]);

            $this->connect->query("INSERT pet(NamePetE,NamePetTV,ImagePet) VALUES ('$NamePetE','$NamePetTV','$uploadedImage')");
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp.";
        }
    }

    function addOrdo()
    {
        $OrdoNameE = $_POST['OrdoNameE'];
        $OrdoNameTV = $_POST['OrdoNameTV'];
        $ClassID = $_POST['ClassID'];
        $DescriptionOrdo = $_POST['DescriptionOrdo'];

        $uploadDir = "../admin/uploads/images/";

        $uploadFile = $uploadDir . basename($_FILES["ImageOrdo"]["name"]);

        if (move_uploaded_file($_FILES["ImageOrdo"]["tmp_name"], $uploadFile)) {
            echo "Tệp ảnh đã được tải lên thành công.";

            $uploadedImage = basename($_FILES["ImageOrdo"]["name"]);

            $this->connect->query("INSERT ordo(OrdoNameE,OrdoNameTV,ClassID,DescriptionOrdo,ImageOrdo) VALUES ('$OrdoNameE','$OrdoNameTV','$ClassID','$DescriptionOrdo','$uploadedImage')");
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp.";
        }
    }

    function addPetToppic()
    {
        $NamePetE = $_POST['NamePetE'];
        $NamePetTV = $_POST['NamePetTV'];
        $IdPet = $_POST['IdPet'];

        $uploadDir = "../admin/uploads/images/";

        $uploadFile = $uploadDir . basename($_FILES["ImagePet"]["name"]);

        if (move_uploaded_file($_FILES["ImagePet"]["tmp_name"], $uploadFile)) {
            echo "Tệp ảnh đã được tải lên thành công.";

            $uploadedImage = basename($_FILES["ImagePet"]["name"]);

            $this->connect->query("INSERT pettopic(NamePetE,NamePetTV,ImagePet,IdPet) VALUES ('$NamePetE','$NamePetTV','$uploadedImage','$IdPet')");
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp.";
        }
    }

    function addClass()
    {

        $ClassNameE = $_POST['ClassNameE'];
        $ClassNameTV = $_POST['ClassNameTV'];
        $descriptionClass = $_POST['descriptionClass'];

        // Get the uploaded image's name
        $uploadedImage = basename($_FILES["ImageClass"]["name"]);

        if (move_uploaded_file($_FILES["ImageClass"]["tmp_name"], "../admin/uploads/images/$uploadedImage")) {
            echo "Tệp ảnh đã được tải lên thành công.";

            // Insert into the database with only the image file name
            $this->connect->query("INSERT clas(ClassNameE, ClassNameTV, ImageClass, descriptionClass) VALUES ('$ClassNameE', '$ClassNameTV', '$uploadedImage', '$descriptionClass')");
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp.";
        }
    }


    function addFavorite()
    {
        if (isset($_POST['UserId']) && isset($_POST['Animalid'])) {

            $UserId = $_POST['UserId'];
            $Animalid  = $_POST['Animalid'];

            $this->connect->query("INSERT favorite (UserId, Animalid) VALUES ('$UserId', '$Animalid')");
        }
    }


    function updateUser()
    {
        $username = $_POST['username'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $this->connect->query("UPDATE user SET username='$username' , full_name='$full_name',email='$email' , address='$address' WHERE  id=" . $_GET['id']);
    }

    function addFamilyNameE()
    {
        $FamilyNameE = $_POST['FamilyNameE'];
        $FamilyNameTV = $_POST['FamilyNameTV'];
        $OrdoID = $_POST['OrdoID'];
        $DescriptionFamily = $_POST['DescriptionFamily'];

        $uploadDir = "../admin/uploads/";

        $uploadFile = $uploadDir . basename($_FILES["imagesFamyli"]["name"]);

        if (move_uploaded_file($_FILES["imagesFamyli"]["tmp_name"], $uploadFile)) {
            echo "Tệp ảnh đã được tải lên thành công.";

            $uploadedImage = basename($_FILES["imagesFamyli"]["name"]);

            $this->connect->query("INSERT family3(FamilyNameE,FamilyNameTV,OrdoID,imagesFamyli,DescriptionFamily) VALUES ('$FamilyNameE','$FamilyNameTV','$OrdoID','$uploadedImage','$DescriptionFamily')");
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp.";
        }
    }

    function addQuiz()
    {
        $AskA = $_POST['AskA'];
        $AskB = $_POST['AskB'];
        $AskC = $_POST['AskC'];
        $AskD = $_POST['AskD'];
        $Ans = $_POST['Ans'];

        $uploadDir = "../admin/uploads/";

        $uploadFile = $uploadDir . basename($_FILES["imageQuiz"]["name"]);

        if (move_uploaded_file($_FILES["imageQuiz"]["tmp_name"], $uploadFile)) {
            echo "Tệp ảnh đã được tải lên thành công.";

            $uploadedImage = basename($_FILES["imageQuiz"]["name"]);

            $this->connect->query("INSERT quiz(AskA,AskB,AskC,imageQuiz,AskD,Ans) VALUES ('$AskA','$AskB','$AskC','$uploadedImage','$AskD','$Ans')");
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp.";
        }
    }

    function addPetDail()
    {
        $NamePetDetailE = $_POST['NamePetDetailE'];
        $NamePetDetailTV = $_POST['NamePetDetailTV'];
        $PetDetailDes = $_POST['PetDetailDes'];
        $IdPetTopic = $_POST['IdPetTopic'];

        $uploadDir = "../admin/uploads/images/";

        if (!empty($_FILES["ImagePetDetail"]["name"])) {
            $uploadFile = $uploadDir . basename($_FILES["ImagePetDetail"]["name"]);

            if (move_uploaded_file($_FILES["ImagePetDetail"]["tmp_name"], $uploadFile)) {
                echo "Tệp ảnh đã được tải lên thành công.";

                $uploadedImage = basename($_FILES["ImagePetDetail"]["name"]);

                $this->connect->query("INSERT petdetail(
                    NamePetDetailE,
                    NamePetDetailTV,
                    PetDetailDes,
                    ImagePetDetail,
                    IdPetTopic) VALUES (
                        '$NamePetDetailE',
                        '$NamePetDetailTV',
                        '$PetDetailDes',
                        '$uploadedImage',
                        '$IdPetTopic')");
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp.";
            }
        } else {
            $this->connect->query("INSERT petdetail(
                NamePetDetailE,
                NamePetDetailTV,
                PetDetailDes,
                IdPetTopic) VALUES (
                    '$NamePetDetailE',
                    '$NamePetDetailTV',
                    '$PetDetailDes',
                    '$IdPetTopic')");
        }
    }


    function addknowledgebase()
    {
        $Title = $_POST['Title'];
        $IdClass = $_POST['IdClass'];
        $IdOrdo = $_POST['IdOrdo'];
        $IdFamily = $_POST['IdFamily'];

        $KnowledgeBaseDescription = $_POST['KnowledgeBaseDescription'];
        $KnowledgeBaseReference = $_POST['KnowledgeBaseReference'];
        $maxFileSize = 41943040;

        if ($_FILES["KnowledgeBaseVideo"]["size"] <= $maxFileSize) {
            $uploadDir = "../admin/uploads/videos/";
            $videoFile = $uploadDir . basename($_FILES["KnowledgeBaseVideo"]["name"]);

            if (move_uploaded_file($_FILES["KnowledgeBaseVideo"]["tmp_name"], $videoFile)) {
                echo "Tệp video đã được tải lên thành công.";

                $uploadedVideo = basename($_FILES["KnowledgeBaseVideo"]["name"]);

                $uploadDir = "../admin/uploads/images/";
                $imageFile = $uploadDir . basename($_FILES["KnowledgeBaseImage"]["name"]);

                if (move_uploaded_file($_FILES["KnowledgeBaseImage"]["tmp_name"], $imageFile)) {
                    echo "Tệp hình ảnh đã được tải lên thành công.";

                    $uploadedImage = basename($_FILES["KnowledgeBaseImage"]["name"]);

                    $this->connect->query("INSERT knowledgebase6(Title,KnowledgeBaseDescription,KnowledgeBaseReference ,KnowledgeBaseVideo,KnowledgeBaseImage ,IdClass,IdOrdo,IdFamily
                    ) VALUES ( '$Title','$KnowledgeBaseDescription','$KnowledgeBaseReference','$uploadedVideo','$uploadedImage','$IdClass','$IdOrdo' ,'$IdFamily')");
                } else {
                    echo "Có lỗi xảy ra khi tải lên tệp hình ảnh.";
                }
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp video.";
            }
        } else {
            echo "Tệp video quá lớn. Vui lòng chọn tệp có kích thước nhỏ hơn hoặc bằng 40 MB.";
        }
    }

    function addSpecies()
    {
        $SpeciesNameE = $_POST['SpeciesNameE'];
        $SpeciesNameTV = $_POST['SpeciesNameTV'];
        $FamilyID = $_POST['FamilyID'];
        $descriptionSpecies = $_POST['descriptionSpecies'];

        $uploadDir = "../admin/uploads/";

        // Đường dẫn và tên tệp tải lên
        $uploadFile = $uploadDir . basename($_FILES["imageSpecies"]["name"]);

        // Kiểm tra và di chuyển tệp tải lên
        if (move_uploaded_file($_FILES["imageSpecies"]["tmp_name"], $uploadFile)) {
            echo "Tệp ảnh đã được tải lên thành công.";

            // Sử dụng tên tệp đã tải lên trong truy vấn SQL
            $imageSpecies = $_FILES["imageSpecies"]["name"];

            // Thực hiện truy vấn SQL
            $this->connect->query("INSERT species4(SpeciesNameE,SpeciesNameTV,FamilyID,imageSpecies,descriptionSpecies) VALUES ('$SpeciesNameE','$SpeciesNameTV','$FamilyID','$imageSpecies','$descriptionSpecies')");
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp.";
        }
    }
    //end add

    // update
    function updateAnimal()
    {
        $title = $_POST['title'];
        $Favorite = $_POST['Favorite'];
        $ReferenceLink = $_POST['ReferenceLink'];
        $iFact = $_POST['iFact'];
        $CountView = $_POST['CountView'];
        $CountStar = $_POST['CountStar'];
        $SpeciesiD = $_POST['SpeciesiD'];
        $description = $_POST['description'];
        $isVietnam = $_POST['isVietnam'];

        // Kiểm tra xem người dùng đã tải lên tệp hình ảnh mới hay chưa
        if (!empty($_FILES['Speciesimage']['name'])) {
            $imageUploadDir = "../admin/uploads/images/";
            $imageUploadFile = $imageUploadDir . basename($_FILES['Speciesimage']['name']);

            if (move_uploaded_file($_FILES['Speciesimage']['tmp_name'], $imageUploadFile)) {
                echo "Tệp ảnh đã được cập nhật thành công.";
                $newImageURL = $imageUploadFile;

                // Lấy đường dẫn ảnh cũ từ cơ sở dữ liệu
                $imageResult = $this->connect->query("SELECT Speciesimage FROM animaldatas5 WHERE id =" . $_GET['id']);
                if ($imageResult) {
                    $imageRow = $imageResult->fetch_assoc();
                    $oldImageURL = $imageRow['Speciesimage'];

                    // Xóa tệp ảnh cũ (nếu có)
                    if (file_exists($oldImageURL)) {
                        unlink($oldImageURL);
                    }

                    // Cập nhật cơ sở dữ liệu với đường dẫn ảnh mới
                    $this->connect->query("UPDATE animaldatas5 SET title='$title', Favorite='$Favorite', ReferenceLink='$ReferenceLink', iFact='$iFact', CountView='$CountView', CountStar='$CountStar', SpeciesiD='$SpeciesiD', description='$description', isVietnam='$isVietnam', Speciesimage='$newImageURL' WHERE id =" . $_GET['id']);
                }
            } else {
                echo "Có lỗi xảy ra khi cập nhật tệp ảnh.";
            }
        }

        // Kiểm tra xem người dùng đã tải lên video mới hay chưa
        if (!empty($_FILES['AnimalVideo']['name'])) {
            $videoUploadDir = "../admin/uploads/videos/";
            $videoUploadFile = $videoUploadDir . basename($_FILES['AnimalVideo']['name']);

            if (move_uploaded_file($_FILES['AnimalVideo']['tmp_name'], $videoUploadFile)) {
                echo "Video đã được tải lên thành công.";
                $newVideoURL = $videoUploadFile;

                // Lấy đường dẫn video cũ từ cơ sở dữ liệu
                $videoResult = $this->connect->query("SELECT AnimalVideo FROM animaldatas5 WHERE id =" . $_GET['id']);
                if ($videoResult) {
                    $videoRow = $videoResult->fetch_assoc();
                    $oldVideoURL = $videoRow['AnimalVideo'];

                    // Xóa video cũ (nếu có)
                    if (file_exists($oldVideoURL)) {
                        unlink($oldVideoURL);
                    }

                    // Cập nhật cơ sở dữ liệu với đường dẫn video mới
                    $this->connect->query("UPDATE animaldatas5 SET title='$title', Favorite='$Favorite', ReferenceLink='$ReferenceLink', AnimalVideo='$newVideoURL', iFact='$iFact', CountView='$CountView', CountStar='$CountStar', SpeciesiD='$SpeciesiD', description='$description', isVietnam='$isVietnam', Speciesimage='$newImageURL' WHERE id =" . $_GET['id']);
                }
            } else {
                echo "Có lỗi xảy ra khi tải lên video.";
            }
        }

        // Kiểm tra xem người dùng đã tải lên tệp hình ảnh hoặc video mới, nếu không, chỉ cập nhật các trường thông tin khác
        if (empty($_FILES['Speciesimage']['name']) && empty($_FILES['AnimalVideo']['name'])) {
            $this->connect->query("UPDATE animaldatas5 SET title='$title', Favorite='$Favorite', ReferenceLink='$ReferenceLink', iFact='$iFact', CountView='$CountView', CountStar='$CountStar', SpeciesiD='$SpeciesiD', description='$description', isVietnam='$isVietnam' WHERE id =" . $_GET['id']);
        }
    }


    function updateThor()
    {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $Phone = $_POST['Phone'];

        $this->connect->query("UPDATE author SET full_name='$full_name' , email='$email',Phone='$Phone' WHERE  id=" . $_GET['id']);
    }




    function updateOrdo()
    {
        $OrdoNameE = $_POST['OrdoNameE'];
        $OrdoNameTV = $_POST['OrdoNameTV'];
        $DescriptionOrdo = $_POST['DescriptionOrdo'];
        $ClassID = $_POST['ClassID'];

        $result = $this->connect->query("SELECT ImageOrdo FROM ordo WHERE OrdoID =" . $_GET['id']);
        $row = $result->fetch_assoc();
        $oldImageURL = $row['ImageOrdo'];

        if (!empty($_FILES["ImageOrdo"]["name"])) {
            $uploadDir = "../admin/uploads/images/";
            $uploadFile = $uploadDir . basename($_FILES["ImageOrdo"]["name"]);

            if (move_uploaded_file($_FILES["ImageOrdo"]["tmp_name"], $uploadFile)) {
                echo "Tệp ảnh đã được tải lên thành công.";
                $newImageName = basename($_FILES["ImageOrdo"]["name"]); // Lấy tên tệp ảnh mới

                if (file_exists($oldImageURL)) {
                    unlink($oldImageURL);
                }

                $this->connect->query("UPDATE ordo SET OrdoNameE='$OrdoNameE', OrdoNameTV='$OrdoNameTV', DescriptionOrdo='$DescriptionOrdo', ClassID='$ClassID',ImageOrdo='$newImageName' WHERE OrdoID  =" . $_GET['id']);
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp.";
            }
        } else {
            // Nếu không có tệp mới được chọn, giữ nguyên giá trị cũ trong CSDL
            $this->connect->query("UPDATE ordo SET OrdoNameE='$OrdoNameE' , OrdoNameTV='$OrdoNameTV',DescriptionOrdo='$DescriptionOrdo', ClassID='$ClassID' WHERE  OrdoID =" . $_GET['id']);
        }
    }

    function updatefavorite()
    {
        $Animalid = $_POST['Animalid'];
        $UserId = $_POST['UserId'];

        $this->connect->query("UPDATE favorite SET Animalid='$Animalid' , UserId='$UserId' WHERE  Id =" . $_GET['id']);
    }

    function updateClass()
    {
        if (isset($_POST['ClassNameE'], $_POST['ClassNameTV'], $_POST['descriptionClass'])) {
            $ClassNameE = $_POST['ClassNameE'];
            $ClassNameTV = $_POST['ClassNameTV'];
            $descriptionClass = $_POST['descriptionClass'];
            $newImageURL = null;

            $id = $_GET['id'];

            if (!empty($_FILES["ImageClass"]["name"])) {
                $uploadDir = "../admin/uploads/images/";
                $uploadFile = $uploadDir . basename($_FILES["ImageClass"]["name"]);

                if (move_uploaded_file($_FILES["ImageClass"]["tmp_name"], $uploadFile)) {
                    echo "Tệp ảnh đã được tải lên thành công.";
                    $newImageURL = basename($_FILES["ImageClass"]["name"]);

                    $stmt = $this->connect->prepare("SELECT ImageClass FROM clas WHERE idclas = ?");
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $oldImageURL = $row['ImageClass'];

                        if (file_exists($oldImageURL)) {
                            unlink($oldImageURL);
                        }

                        $stmt = $this->connect->prepare("UPDATE clas SET ClassNameE=?, ClassNameTV=?, descriptionClass=?, ImageClass=? WHERE idclas = ?");
                        $stmt->bind_param("ssssi", $ClassNameE, $ClassNameTV, $descriptionClass, $newImageURL, $id);
                        $stmt->execute();
                    }
                } else {
                    echo "Có lỗi xảy ra khi tải lên tệp.";
                }
            } else {
                $stmt = $this->connect->prepare("UPDATE clas SET ClassNameE=?, ClassNameTV=?, descriptionClass=? WHERE idclas = ?");
                $stmt->bind_param("sssi", $ClassNameE, $ClassNameTV, $descriptionClass, $id);
                $stmt->execute();
            }
        }
    }

    function updatePettopDetai()
    {
        $AskA = $_POST['AskA'];
        $AskB = $_POST['AskB'];
        $AskC = $_POST['AskC'];
        $AskD = $_POST['AskD'];
        $Ans = $_POST['Ans'];

        // Kiểm tra xem người dùng đã tải lên tệp ảnh mới hay chưa
        if (!empty($_FILES["imageQuiz"]["name"])) {
            $uploadDir = "../admin/uploads/images/";
            $uploadFile = $uploadDir . basename($_FILES["imageQuiz"]["name"]);

            // Kiểm tra và di chuyển tệp tải lên
            if (move_uploaded_file($_FILES["imageQuiz"]["tmp_name"], $uploadFile)) {
                echo "Tệp ảnh đã được tải lên thành công.";
                $newImageURL = $uploadFile;

                // Lấy đường dẫn ảnh cũ từ cơ sở dữ liệu
                $result = $this->connect->query("SELECT imageQuiz FROM quiz WHERE IdQuiz =" . $_GET['id']);
                if ($result) {
                    $row = $result->fetch_assoc();
                    $oldImageURL = $row['imageQuiz'];

                    // Xóa tệp ảnh cũ (nếu có)
                    if (file_exists($oldImageURL)) {
                        unlink($oldImageURL);
                    }

                    // Cập nhật cơ sở dữ liệu với đường dẫn ảnh mới
                    $this->connect->query("UPDATE quiz SET AskA='$AskA', AskB='$AskB', AskC='$AskC', AskD='$AskD', Ans='$Ans', imageQuiz='$newImageURL' WHERE IdQuiz  =" . $_GET['id']);
                }
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp.";
            }
        } else {
            // Nếu người dùng không tải lên tệp ảnh mới, chỉ cập nhật các trường thông tin khác
            $this->connect->query("UPDATE quiz SET AskA='$AskA', AskB='$AskB', AskC='$AskC', AskD='$AskD', Ans='$Ans' WHERE IdQuiz =" . $_GET['id']);
        }
    }

    function updateFamily()
    {
        $FamilyNameE = $_POST['FamilyNameE'];
        $FamilyNameTV = $_POST['FamilyNameTV'];
        $OrdoID = $_POST['OrdoID'];
        $DescriptionFamily = $_POST['DescriptionFamily'];

        // Kiểm tra xem người dùng đã tải lên tệp ảnh mới hay chưa
        if (!empty($_FILES["imagesFamyli"]["name"])) {
            $uploadDir = "../admin/uploads/";
            $uploadFile = $uploadDir . basename($_FILES["imagesFamyli"]["name"]);

            // Kiểm tra và di chuyển tệp tải lên
            if (move_uploaded_file($_FILES["imagesFamyli"]["tmp_name"], $uploadFile)) {
                echo "Tệp ảnh đã được tải lên thành công.";
                $newImageURL = $uploadFile;

                // Lấy đường dẫn ảnh cũ từ cơ sở dữ liệu
                $result = $this->connect->query("SELECT imagesFamyli FROM family3 WHERE FamilyID =" . $_GET['id']);
                if ($result) {
                    $row = $result->fetch_assoc();
                    $oldImageURL = $row['imagesFamyli'];

                    // Xóa tệp ảnh cũ (nếu có)
                    if (file_exists($oldImageURL)) {
                        unlink($oldImageURL);
                    }

                    // Cập nhật cơ sở dữ liệu với đường dẫn ảnh mới
                    $this->connect->query("UPDATE family3 SET FamilyNameE='$FamilyNameE', FamilyNameTV='$FamilyNameTV', OrdoID='$OrdoID', DescriptionFamily='$DescriptionFamily', imagesFamyli='$newImageURL' WHERE FamilyID =" . $_GET['id']);
                }
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp.";
            }
        } else {
            // Nếu người dùng không tải lên tệp ảnh mới, chỉ cập nhật các trường thông tin khác
            $this->connect->query("UPDATE family3 SET FamilyNameE='$FamilyNameE', FamilyNameTV='$FamilyNameTV', OrdoID='$OrdoID', DescriptionFamily='$DescriptionFamily' WHERE FamilyID =" . $_GET['id']);
        }
    }

    function updateQuiz()
    {
        $AskA = $_POST['AskA'];
        $AskB = $_POST['AskB'];
        $AskC = $_POST['AskC'];
        $AskD = $_POST['AskD'];
        $Ans = $_POST['Ans'];

        // Kiểm tra xem người dùng đã tải lên tệp ảnh mới hay chưa
        if (!empty($_FILES["imageQuiz"]["name"])) {
            $uploadDir = "";
            $uploadFile = $uploadDir . basename($_FILES["imageQuiz"]["name"]);

            // Kiểm tra và di chuyển tệp tải lên
            if (move_uploaded_file($_FILES["imageQuiz"]["tmp_name"], $uploadFile)) {
                echo "Tệp ảnh đã được tải lên thành công.";
                $newImageURL = $uploadFile;

                // Lấy đường dẫn ảnh cũ từ cơ sở dữ liệu
                $result = $this->connect->query("SELECT imageQuiz FROM quiz WHERE IdQuiz =" . $_GET['id']);
                if ($result) {
                    $row = $result->fetch_assoc();
                    $oldImageURL = $row['imageQuiz'];

                    // Xóa tệp ảnh cũ (nếu có)
                    if (file_exists($oldImageURL)) {
                        unlink($oldImageURL);
                    }

                    // Cập nhật cơ sở dữ liệu với đường dẫn ảnh mới
                    $this->connect->query("UPDATE quiz SET AskA='$AskA', AskB='$AskB', AskC='$AskC', AskD='$AskD', Ans='$Ans', imageQuiz='$newImageURL' WHERE IdQuiz  =" . $_GET['id']);
                }
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp.";
            }
        } else {
            // Nếu người dùng không tải lên tệp ảnh mới, chỉ cập nhật các trường thông tin khác
            $this->connect->query("UPDATE quiz SET AskA='$AskA', AskB='$AskB', AskC='$AskC', AskD='$AskD', Ans='$Ans' WHERE IdQuiz =" . $_GET['id']);
        }
    }

    function updatePet()
    {
        $IdPet = $_GET['id']; // Lấy ID từ URL hoặc từ nguồn đáng tin cậy khác

        if (isset($_POST['NamePetE'], $_POST['NamePetTV'])) {
            $NamePetE = $_POST['NamePetE'];
            $NamePetTV = $_POST['NamePetTV'];

            if (!empty($_FILES["ImagePet"]["name"])) {
                $uploadDir = "../admin/uploads/images/"; // Đường dẫn tương đối
                $uploadFile = $uploadDir . basename($_FILES["ImagePet"]["name"]);

                if (move_uploaded_file($_FILES["ImagePet"]["tmp_name"], $uploadFile)) {
                    echo "Tệp hình ảnh đã được tải lên thành công.";
                    $newImageURL = basename($_FILES["ImagePet"]["name"]); // Chỉ lưu tên tệp

                    $stmt = $this->connect->prepare("UPDATE pet SET NamePetE=?, NamePetTV=?, ImagePet=? WHERE IdPet=?");
                    $stmt->bind_param("sssi", $NamePetE, $NamePetTV, $newImageURL, $IdPet);
                    $stmt->execute();
                } else {
                    echo "Có lỗi xảy ra khi tải lên tệp hình ảnh.";
                    return;
                }
            } else {
                // Giữ giá trị cũ nếu không tải lên hình ảnh
                $stmt = $this->connect->prepare("SELECT ImagePet FROM pet WHERE IdPet=?");
                $stmt->bind_param("i", $IdPet);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $newImageURL = $row['ImagePet'];

                    $stmt = $this->connect->prepare("UPDATE pet SET NamePetE=?, NamePetTV=? WHERE IdPet=?");
                    $stmt->bind_param("ssi", $NamePetE, $NamePetTV, $IdPet);
                    $stmt->execute();
                }
            }
        }
    }

    function updatePettopic()
    {
        $NamePetE = $_POST['NamePetE'];
        $NamePetTV = $_POST['NamePetTV'];
        $IdPet = $_POST['IdPet'];

        // Kiểm tra xem người dùng đã tải lên tệp ảnh mới hay chưa
        if (!empty($_FILES["ImagePet"]["name"])) {
            $uploadDir = "../admin/uploads/images/";
            $uploadFile = $uploadDir . basename($_FILES["ImagePet"]["name"]);

            // Kiểm tra và di chuyển tệp tải lên
            if (move_uploaded_file($_FILES["ImagePet"]["tmp_name"], $uploadFile)) {
                echo "Tệp ảnh đã được tải lên thành công.";
                $newImageFileName = basename($_FILES["ImagePet"]["name"]);

                // Lấy tên file ảnh cũ từ cơ sở dữ liệu
                $result = $this->connect->query("SELECT ImagePet FROM pettopic WHERE IdPetTopic =" . $_GET['id']);
                if ($result) {
                    $row = $result->fetch_assoc();
                    $oldImageFileName = basename($row['ImagePet']);

                    // Xóa tệp ảnh cũ (nếu có)
                    if (file_exists($uploadDir . $oldImageFileName)) {
                        unlink($uploadDir . $oldImageFileName);
                    }

                    // Cập nhật cơ sở dữ liệu với tên file ảnh mới
                    $this->connect->query("UPDATE pettopic SET NamePetE='$NamePetE', NamePetTV='$NamePetTV', ImagePet='$newImageFileName', IdPet='$IdPet' WHERE IdPetTopic =" . $_GET['id']);
                }
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp.";
            }
        } else {
            $query = "UPDATE pettopic SET NamePetE='$NamePetE', NamePetTV='$NamePetTV' WHERE IdPetTopic =" . $_GET['id'];
            $this->connect->query($query);
        }
    }

    function updatePetDetail()
    {
        // Lấy dữ liệu từ POST
        $IdPetDetail = $_GET['id'];
        $NamePetDetailE = $_POST['NamePetDetailE'];
        $NamePetDetailTV = $_POST['NamePetDetailTV'];
        $PetDetailDes = $_POST['PetDetailDes'];
        $IdPetTopic = $_POST['IdPetTopic'];

        // Kiểm tra xem có tệp hình mới được tải lên hay không
        if (!empty($_FILES["ImagePetDetail"]["name"])) {
            $uploadDir = "../admin/uploads/images/";
            $uploadFile = $uploadDir . basename($_FILES["ImagePetDetail"]["name"]);
            $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

            // Kiểm tra loại tệp tin
            $allowedExtensions = array("jpg", "jpeg", "png", "gif");
            if (!in_array($imageFileType, $allowedExtensions)) {
                echo "Chỉ chấp nhận các tệp tin JPG, JPEG, PNG, GIF.";
                return;
            }

            // Kiểm tra và di chuyển tệp tải lên
            if (move_uploaded_file($_FILES["ImagePetDetail"]["tmp_name"], $uploadFile)) {
                echo "Tệp ảnh đã được tải lên thành công.";
                $newImageFileName = basename($_FILES["ImagePetDetail"]["name"]);

                // Lấy tên file ảnh cũ từ cơ sở dữ liệu và xóa
                $stmt = $this->connect->prepare("SELECT ImagePetDetail FROM petdetail WHERE IdPetDetail = ?");
                $stmt->bind_param("i", $IdPetDetail);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $oldImageFileName = basename($row['ImagePetDetail']);
                    $oldImageFilePath = $uploadDir . $oldImageFileName;

                    if (file_exists($oldImageFilePath)) {
                        unlink($oldImageFilePath);
                    }
                }

                // Cập nhật cơ sở dữ liệu với tên file ảnh mới
                $stmt = $this->connect->prepare("UPDATE petdetail SET NamePetDetailE=?, NamePetDetailTV=?, PetDetailDes=?, IdPetTopic=?, ImagePetDetail=? WHERE IdPetDetail=?");
                $stmt->bind_param("sssssi", $NamePetDetailE, $NamePetDetailTV, $PetDetailDes, $IdPetTopic, $newImageFileName, $IdPetDetail);
                $stmt->execute();
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp.";
            }
        } else {
            // Nếu không có tệp hình mới, chỉ cập nhật thông tin khác
            $stmt = $this->connect->prepare("UPDATE petdetail SET NamePetDetailE=?, NamePetDetailTV=?, PetDetailDes=?, IdPetTopic=? WHERE IdPetDetail=?");
            $stmt->bind_param("ssssi", $NamePetDetailE, $NamePetDetailTV, $PetDetailDes, $IdPetTopic, $IdPetDetail);
            $stmt->execute();
        }
    }


    function addLearnScience()
    {
        $DesScience = $_POST['DesScience'];
        $maxFileSize = 41943040;

        if ($_FILES["LinkScience"]["size"] <= $maxFileSize) {
            $uploadDir = "../admin/uploads/videos/";
            $videoFile = $uploadDir . basename($_FILES["LinkScience"]["name"]);

            if (move_uploaded_file($_FILES["LinkScience"]["tmp_name"], $videoFile)) {
                echo "Tệp video đã được tải lên thành công.";
                $uploadedVideo = $videoFile;

                $uploadDir = "../admin/uploads/images/";
                $imageFile = $uploadDir . basename($_FILES["ScienceImage"]["name"]);

                if (move_uploaded_file($_FILES["ScienceImage"]["tmp_name"], $imageFile)) {
                    echo "Tệp hình ảnh đã được tải lên thành công.";
                    $uploadedImage = $imageFile;

                    $this->connect->query("INSERT learnscience(DesScience, LinkScience, ScienceImage) VALUES ('$DesScience', '$uploadedVideo', '$uploadedImage')");
                } else {
                    echo "Có lỗi xảy ra khi tải lên tệp hình ảnh.";
                }
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp video.";
            }
        } else {
            echo "Tệp video quá lớn. Vui lòng chọn tệp có kích thước nhỏ hơn hoặc bằng 40 MB.";
        }
    }

    function updateLearnScience()
    {
        $DesScience = $_POST['DesScience'];

        // Lấy dữ liệu cũ từ CSDL để sử dụng khi không có tệp mới được chọn
        $query = $this->connect->query("SELECT LinkScience, ScienceImage FROM learnscience WHERE id =" . $_GET['id']);
        $oldData = $query->fetch_assoc();
        $oldVideoURL = $oldData['LinkScience'];
        $oldImageURL = $oldData['ScienceImage'];

        if (!empty($_FILES["LinkScience"]["name"])) {
            if ($_FILES["LinkScience"]["size"] > 41943040) {
                echo "Lỗi: Dung lượng video quá lớn.";
                return;
            }

            $uploadDir = "../admin/uploads/videos/";
            $videoFile = $uploadDir . basename($_FILES["LinkScience"]["name"]);

            if (move_uploaded_file($_FILES["LinkScience"]["tmp_name"], $videoFile)) {
                echo "Tệp video đã được tải lên thành công.";
                $newVideoURL = $videoFile;
            } else {
                echo "Có lỗi xảy ra khi tải lên video.";
                return;
            }
        } else {
            // Nếu không có tệp video mới được chọn, sử dụng đường dẫn cũ
            $newVideoURL = $oldVideoURL;
        }

        if (!empty($_FILES["ScienceImage"]["name"])) {
            $uploadDir1 = "../admin/uploads/images/";
            $imageFile = $uploadDir1 . basename($_FILES["ScienceImage"]["name"]);

            if (move_uploaded_file($_FILES["ScienceImage"]["tmp_name"], $imageFile)) {
                echo "Tệp hình ảnh đã được tải lên thành công.";
                $newImageURL = $imageFile;
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp hình ảnh.";
                return;
            }
        } else {
            // Nếu không có tệp hình ảnh mới được chọn, sử dụng đường dẫn cũ
            $newImageURL = $oldImageURL;
        }

        // Tiến hành cập nhật dữ liệu vào CSDL
        $this->connect->query("UPDATE learnscience SET
    DesScience='$DesScience',
    LinkScience='$newVideoURL',
    ScienceImage='$newImageURL' WHERE id =" . $_GET['id']);
    }


    function updateKnowLedgeBase()
    {
        $IdClass = $_POST['IdClass'];
        $IdOrdo = $_POST['IdOrdo'];
        $IdFamily = $_POST['IdFamily'];
        $Title = $_POST['Title'];
        $KnowledgeBaseReference = $_POST['KnowledgeBaseReference'];
        $KnowledgeBaseDescription = $_POST['KnowledgeBaseDescription'];

        // Lấy thông tin cũ từ CSDL
        $existingData = $this->connect->query("SELECT * FROM knowledgebase6 WHERE id_kn =" . $_GET['id']);
        $oldData = $existingData->fetch_assoc();

        // Kiểm tra xem tệp tin video có được tải lên không
        if (!empty($_FILES["KnowledgeBaseVideo"]["name"])) {
            // Kiểm tra dung lượng video
            if ($_FILES["KnowledgeBaseVideo"]["size"] > 41943040) { // Giới hạn là 40 MB
                echo "Lỗi: Dung lượng video quá lớn.";
                return; // Dừng việc cập nhật
            }

            $uploadDir = "../admin/uploads/videos/";
            $videoFile = $uploadDir . basename($_FILES["KnowledgeBaseVideo"]["name"]);

            if (move_uploaded_file($_FILES["KnowledgeBaseVideo"]["tmp_name"], $videoFile)) {
                echo "Tệp video đã được tải lên thành công.";
                $newVideoURL = basename($_FILES["KnowledgeBaseVideo"]["name"]);
            } else {
                echo "Có lỗi xảy ra khi tải lên video.";
                return; // Dừng việc cập nhật
            }
        } else {
            // Sử dụng thông tin cũ từ CSDL nếu không có tệp tin mới được tải lên
            $newVideoURL = $oldData['KnowledgeBaseVideo'];
        }

        // Xử lý tải lên hình ảnh
        if (!empty($_FILES["KnowledgeBaseImage"]["name"])) {
            $uploadDir1 = "../admin/uploads/images/";
            $imageFile = $uploadDir1 . basename($_FILES["KnowledgeBaseImage"]["name"]);

            if (move_uploaded_file($_FILES["KnowledgeBaseImage"]["tmp_name"], $imageFile)) {
                echo "Tệp hình ảnh đã được tải lên thành công.";
                $newImageURL = basename($_FILES["KnowledgeBaseImage"]["name"]);
            } else {
                echo "Có lỗi xảy ra khi tải lên tệp hình ảnh.";
                return;
            }
        } else {
            // Sử dụng thông tin cũ từ CSDL nếu không có tệp tin mới được tải lên
            $newImageURL = $oldData['KnowledgeBaseImage'];
        }

        // Tiến hành cập nhật dữ liệu vào CSDL
        $this->connect->query("UPDATE knowledgebase6 SET
    IdClass='$IdClass',
    IdOrdo='$IdOrdo',
    IdFamily='$IdFamily',
    Title='$Title',
    KnowledgeBaseReference='$KnowledgeBaseReference',
    KnowledgeBaseDescription='$KnowledgeBaseDescription',
    KnowledgeBaseVideo='$newVideoURL',
    KnowledgeBaseImage='$newImageURL' WHERE id_kn =" . $_GET['id']);
    }

    function updateSpecies()
    {
        $SpeciesID = $_GET['id'];

        // Lấy thông tin hiện tại của loài vật từ cơ sở dữ liệu
        $result = $this->connect->query("SELECT * FROM species4 WHERE SpeciesID = $SpeciesID");
        if ($result) {
            $row = $result->fetch_assoc();

            // Gán giá trị hiện tại cho các biến
            $SpeciesNameE = isset($_POST['SpeciesNameE']) ? $_POST['SpeciesNameE'] : $row['SpeciesNameE'];
            $SpeciesNameTV = isset($_POST['SpeciesNameTV']) ? $_POST['SpeciesNameTV'] : $row['SpeciesNameTV'];
            $FamilyID = isset($_POST['FamilyID']) ? $_POST['FamilyID'] : $row['FamilyID'];
            $descriptionSpecies = isset($_POST['descriptionSpecies']) ? $_POST['descriptionSpecies'] : $row['descriptionSpecies'];

            // Kiểm tra xem người dùng đã tải lên tệp ảnh mới hay không
            if (!empty($_FILES["imageSpecies"]["name"])) {
                $uploadDir = "../admin/uploads/";
                $uploadFile = $uploadDir . basename($_FILES["imageSpecies"]["name"]);

                // Kiểm tra và di chuyển tệp tải lên
                if (move_uploaded_file($_FILES["imageSpecies"]["tmp_name"], $uploadFile)) {
                    echo "Tệp ảnh đã được tải lên thành công.";
                    $newSpeciesURL = $uploadFile;

                    // Lấy đường dẫn ảnh cũ từ cơ sở dữ liệu và xóa nếu có
                    $oldImageURL = $row['imageSpecies'];
                    if (file_exists($oldImageURL)) {
                        unlink($oldImageURL);
                    }

                    // Cập nhật cơ sở dữ liệu với đường dẫn ảnh mới
                    $this->connect->query("UPDATE species4 SET SpeciesNameE='$SpeciesNameE', SpeciesNameTV='$SpeciesNameTV', FamilyID='$FamilyID', descriptionSpecies='$descriptionSpecies',imageSpecies='$newSpeciesURL' WHERE SpeciesID=" . $SpeciesID);
                } else {
                    echo "Có lỗi xảy ra khi tải lên tệp.";
                }
            } else {
                // Nếu không có tệp ảnh mới được chọn, chỉ cập nhật các trường thông tin khác
                $this->connect->query("UPDATE species4 SET SpeciesNameE='$SpeciesNameE', SpeciesNameTV='$SpeciesNameTV', FamilyID='$FamilyID', descriptionSpecies='$descriptionSpecies' WHERE SpeciesID=" . $SpeciesID);
            }
        }
    }


    // delete
    function deleteAnimal()
    {
        $this->connect->query("DELETE FROM animaldatas5 WHERE id=" . $_GET['id']);
    }
    function deleteUser()
    {
        $this->connect->query("DELETE FROM user WHERE id=" . $_GET['id']);
    }

    function deletAuthor()
    {
        $this->connect->query("DELETE FROM author WHERE id=" . $_GET['id']);
    }
    function deletLearnScience()
    {
        $this->connect->query("DELETE FROM learnscience WHERE id=" . $_GET['id']);
    }

    function deletOrdo()
    {
        $this->connect->query("DELETE FROM ordo WHERE OrdoID =" . $_GET['id']);
    }

    function deletClass()
    {
        $this->connect->query("DELETE FROM clas WHERE idclas =" . $_GET['id']);
    }

    function deletepettopic()
    {
        $this->connect->query("DELETE FROM pettopic WHERE IdPetTopic =" . $_GET['id']);
    }

    function deletQuiz()
    {
        $this->connect->query("DELETE FROM quiz WHERE IdQuiz=" . $_GET['id']);
    }

    function deletSpecies()
    {
        $this->connect->query("DELETE FROM species4 WHERE SpeciesID=" . $_GET['id']);
    }

    function deletePet()
    {
        $this->connect->query("DELETE FROM pet WHERE IdPet=" . $_GET['id']);
    }

    function deletePetDetail()
    {
        $this->connect->query("DELETE FROM petdetail WHERE IdPetDetail=" . $_GET['id']);
    }

    function deleteFamily()
    {
        $this->connect->query("DELETE FROM family3 WHERE FamilyID =" . $_GET['id']);
    }
    function deleteKnowLedgeBase()
    {
        $this->connect->query("DELETE FROM knowledgebase6 WHERE id_kn =" . $_GET['id']);
    }




    function deletefavorite()
    {
        $result = $this->connect->query("SELECT*FROM user WHERE Id=" . $_GET['id']);
        if (mysqli_num_rows($result) != 0) :
            $this->connect->query("UPDATE favorite SET UserId = 0 WHERE Id =" . $_GET['id']);
        else :
            $this->connect->query("DELETE FROM favorite WHERE id=" . $_GET['id']);
        endif;
    }
    //end delete

    function getAnimalById()
    {
        $result = $this->connect->query("SELECT*FROM animaldatas5 WHERE id=" . $_GET['id']);
        return mysqli_fetch_array($result);
    }

    function getClassById()
    {
        $result = $this->connect->query("SELECT * FROM clas WHERE idclas=" . $_GET['id']);
        return mysqli_fetch_array($result);
    }

    function getPetById()
    {
        $result = $this->connect->query("SELECT*FROM pet WHERE IdPet=" . $_GET['id']);
        return mysqli_fetch_array($result);
    }


    function getOrdoById()
    {
        $result = $this->connect->query("SELECT*FROM ordo WHERE OrdoID =" . $_GET['id']);
        return mysqli_fetch_array($result);
    }

    function getPetDetailById()
    {
        $result = $this->connect->query("SELECT*FROM petdetail WHERE IdPetDetail =" . $_GET['id']);
        return mysqli_fetch_array($result);
    }
    function getpet_topicById()
    {
        $result = $this->connect->query("SELECT*FROM pettopic WHERE IdPetTopic =" . $_GET['id']);
        return mysqli_fetch_array($result);
    }

    function getUserById()
    {
        $result = $this->connect->query("SELECT*FROM user WHERE id=" . $_GET['id']);
        return mysqli_fetch_array($result);
    }

    function getThorById()
    {
        $result = $this->connect->query("SELECT*FROM author WHERE id=" . $_GET['id']);
        return mysqli_fetch_array($result);
    }

    function getPetpettopicById()
    {
        $result = $this->connect->query("SELECT*FROM pettopic WHERE IdPetTopic=" . $_GET['id']);
        return mysqli_fetch_array($result);
    }

    function getPetdetaiById()
    {
        $result = $this->connect->query("SELECT*FROM petdetail WHERE IdPetDetail =" . $_GET['id']);
        return mysqli_fetch_array($result);
    }


    function getFamilyById()
    {
        $result = $this->connect->query("SELECT*FROM family3 WHERE FamilyID=" . $_GET['id']);
        return mysqli_fetch_array($result);
    }


    function getLearnScienceById()
    {
        $result = $this->connect->query("SELECT*FROM learnscience WHERE id=" . $_GET['id']);
        return mysqli_fetch_array($result);
    }

    function getKnowLedgeBaseById()
    {
        $result = $this->connect->query("SELECT*FROM knowledgebase6 WHERE id_kn =" . $_GET['id']);
        return mysqli_fetch_array($result);
    }

    function getQuizById()
    {
        $result = $this->connect->query("SELECT*FROM quiz WHERE IdQuiz=" . $_GET['id']);
        return mysqli_fetch_array($result);
    }

    function getSpeciesById()
    {
        $result = $this->connect->query("SELECT*FROM species4 WHERE SpeciesID=" . $_GET['id']);
        return mysqli_fetch_array($result);
    }
    function getFamily()
    {
        return $this->connect->query("SELECT*FROM family3");
    }

    function getSpecies()
    {
        return $this->connect->query("SELECT*FROM species4");
    }

    function getPet_toppic()
    {
        return $this->connect->query("SELECT*FROM pet");
    }

    function getNameSpecies()
    {
        return $this->connect->query("SELECT animaldatas5.SpeciesiD, species4.SpeciesNameE FROM animaldatas5 INNER JOIN species4 ON animaldatas5.SpeciesiD = species4.SpeciesID");
    }

    function getNameFamily()
    {
        return $this->connect->query("SELECT family3.OrdoID, ordo.OrdoNameE FROM family3 INNER JOIN ordo ON family3.OrdoID = ordo.OrdoID");
    }

    function getNameSpeciesFamili()
    {
        return $this->connect->query("SELECT species4.FamilyID, family3.FamilyNameE FROM species4 INNER JOIN family3 ON species4.FamilyID = family3.FamilyID ");
    }

    function getNamefavoriteFamili()
    {
        return $this->connect->query("SELECT favorite.UserId, user.username FROM favorite INNER JOIN user ON favorite.UserId = user.Id ");
    }

    function getNamefavoriteanimalFamili()
    {
        return $this->connect->query("SELECT favorite.Animalid, animaldatas5.title FROM favorite INNER JOIN animaldatas5 ON favorite.Animalid = animaldatas5.id ");
    }


    function getName_ordo_id($id)
    {
        $query = "SELECT ordo.ClassID, clas.ClassNameE
              FROM ordo
              INNER JOIN clas ON ordo.ClassID = clas.idclas
              WHERE ordo.OrdoID = $id";
        return $this->connect->query($query);
    }


    function getName_knowledgebase_id($id)
    {
        $query = "SELECT knowledgebase6.IdClass, clas.ClassNameE
              FROM knowledgebase6
              INNER JOIN clas ON knowledgebase6.IdClass = clas.idclas
              WHERE knowledgebase6.id_kn = $id";
        return $this->connect->query($query);
    }


    function getName_ordo_edit_knowledgebase_id($id)
    {
        $query = "SELECT knowledgebase6.IdOrdo, ordo.OrdoNameE
              FROM knowledgebase6
              INNER JOIN ordo ON knowledgebase6.IdOrdo = ordo.OrdoID
              WHERE knowledgebase6.id_kn = $id";
        return $this->connect->query($query);
    }

    function getName_ordo_edit_family_id($id)
    {
        $query = "SELECT knowledgebase6.IdFamily, family3.FamilyNameE
              FROM knowledgebase6
              INNER JOIN family3 ON knowledgebase6.IdFamily = family3.FamilyID
              WHERE knowledgebase6.id_kn = $id";
        return $this->connect->query($query);
    }

    function getName_animal_edit_Species_id($id)
    {
        $query = "SELECT animaldatas5.SpeciesiD, species4.SpeciesNameE
              FROM animaldatas5
              INNER JOIN species4 ON animaldatas5.SpeciesiD = species4.SpeciesID
              WHERE animaldatas5.id = $id";
        return $this->connect->query($query);
    }


    function getName_family_edit_ordo_id($id)
    {
        $query = "SELECT family3.OrdoID, ordo.OrdoNameE
              FROM family3
              INNER JOIN ordo ON family3.OrdoID = ordo.OrdoID
              WHERE family3.FamilyID  = $id";
        return $this->connect->query($query);
    }

    function getName_species_edit_family_id($id)
    {
        $query = "SELECT species4.FamilyID, family3.FamilyNameE
              FROM species4
              INNER JOIN family3 ON species4.FamilyID = family3.FamilyID
              WHERE species4.SpeciesID   = $id";
        return $this->connect->query($query);
    }




    function getNamepettoppic()
    {
        return $this->connect->query("SELECT pettopic.IdPet, pet.NamePetE FROM pettopic INNER JOIN pet ON pettopic.IdPet = pet.IdPet ");
    }

    function getNamepet_top_pic()
    {
        return $this->connect->query("SELECT petdetail.IdPetTopic, pettopic.NamePetE FROM petdetail INNER JOIN pettopic ON petdetail.IdPetTopic = pettopic.IdPetTopic ");
    }

    function getNamepet_detail()
    {
        return $this->connect->query("SELECT pettopic.IdPet, pet.NamePetE FROM pettopic INNER JOIN pet ON pettopic.IdPetTopic = pet.IdPet ");
    }

    function getNameknowledgebaseFamili()
    {
        return $this->connect->query("SELECT knowledgebase6.IdClass, clas.ClassNameE FROM knowledgebase6 INNER JOIN clas ON knowledgebase6.IdClass = clas.idclas ");
    }

    function getNameordoknowledgebase()
    {
        return $this->connect->query("SELECT knowledgebase6.IdOrdo, ordo.OrdoNameE FROM knowledgebase6 INNER JOIN ordo ON knowledgebase6.IdOrdo = ordo.OrdoID ");
    }
    function getNamfamilyknowledgebase()
    {
        return $this->connect->query("SELECT knowledgebase6.IdFamily, family3.FamilyNameE FROM knowledgebase6 INNER JOIN family3 ON knowledgebase6.IdFamily = family3.FamilyID ");
    }
    function getNameknowledgebaseordo()
    {
        return $this->connect->query("SELECT ordo.ClassID, clas.ClassNameE FROM ordo INNER JOIN clas ON ordo.ClassID = clas.idclas ");
    }

    function getFavorite()
    {
        return $this->connect->query("SELECT*FROM favorite");
    }

    function getAuthor()
    {
        return $this->connect->query("SELECT*FROM author");
    }

    function getTopic()
    {
        return $this->connect->query("SELECT*FROM pettopic");
    }

    function getOrdo()
    {
        return $this->connect->query("SELECT*FROM ordo");
    }

    function getPetDetail()
    {
        return $this->connect->query("SELECT*FROM petdetail");
    }

    function getQuiz()
    {
        return $this->connect->query("SELECT*FROM quiz");
    }

    function getLearnScience()
    {
        return $this->connect->query("SELECT*FROM learnscience");
    }

    function getKnowledgebase()
    {
        return $this->connect->query("SELECT*FROM knowledgebase6");
    }

    function getPet()
    {
        return $this->connect->query("SELECT*FROM pet");
    }

    function getPet_pic()
    {
        return $this->connect->query("SELECT*FROM pettopic");
    }

    // function getNamePet()
    // {
    //     return $this->connect->query("SELECT*FROM pet");
    // }

    function getPet_pettopic()
    {
        return $this->connect->query("SELECT*FROM pettopic");
    }



    public function getPetInfoFromPetTopic()
    {

        $sql = "SELECT pet.*, pettopic.* FROM pet
            INNER JOIN pettopic ON pet.IdPet = pettopic.IdPet ";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function ge_getKnowledgebase()
    {
        $sql = "SELECT family3.FamilyNameE, knowledgebase.IdFamily FROM family3
        INNER JOIN knowledgebase ON family3.FamilyID = knowledgebase.IdFamily";

        $sql = "SELECT family3.FamilyNameE, knowledgebase.IdFamily, knowledgebase.IdFamily FROM family3 INNER JOIN knowledgebase ON family3.FamilyID = knowledgebase.IdFamily";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getUsersWithFavorites()
    {
        $sql = "SELECT user.*, favorite.* FROM user
                LEFT JOIN favorite ON user.id = favorite.UserId";

        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
