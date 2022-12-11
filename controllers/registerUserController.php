<?php

    /**
     * 
     * The purpose of this class is to perform the 
     * validation between the regular expressions 
     * that the form must validate when registering 
     * the users.
     * 
     */

    require('views/login/registerAccount.php');

    class registerUserController extends Main{
        
        /**
         * This function calls the registration form for the login.
         */
        public function registerUserNew(){
            registerUserNewForm();
        }

        /**
         * 
         * This function validates the user registration input form 
         * by validating the input data against a string of regular 
         * expressions.
         * 
         */

        public function registerUserSubmit(){
            
            $nameValidation = Main::isValidRegularExpression("/^[A-Z]+$/i", $_POST["username"]);
            if(!$nameValidation){
                $respose["status"]["error"] = "username";
                $respose["status"]["errorMessage"] = (trim($_POST["username"]) == '') ? "empty" : "match";
                echo json_encode($respose);
                return;
            }

            $emailValidation = Main::isValidRegularExpression("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $_POST["email"]);
            if(!$emailValidation){
                $respose["status"]["error"] = "email";
                $respose["status"]["errorMessage"] = (trim($_POST["email"]) == '') ? "empty" : "match";
                echo json_encode($respose);
                return;
            }
            
            $phonenumberValidation = Main::isValidRegularExpression("/^[+]\d{8}.$/", $_POST["phonenumber"]);
            if(!$phonenumberValidation){
                $respose["status"]["error"] = "phonenumber";
                $respose["status"]["errorMessage"] = (trim($_POST["phonenumber"]) == '') ? "empty" : "match";
                echo json_encode($respose);
                return;
            }

            $passwordValidation = Main::isValidRegularExpression("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[*-.]).{6}$/", $_POST["password"]);
            if(!$passwordValidation){
                $respose["status"]["error"] = "password";
                $respose["status"]["errorMessage"] = (trim($_POST["password"]) == '') ? "empty" : "match";
                echo json_encode($respose);
                return;
            }

            $respose["status"] = "success";
                
            echo json_encode($respose);
            
        }


    }

?>