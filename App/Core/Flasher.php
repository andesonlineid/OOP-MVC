<?php 

    class Flasher {

        // static method
        public static function setFlasher($result,$action,$colorType) {
            // data session
            $_SESSION["message"] = [
                    "result" => $result,
                    "action" => $action,
                    "colorType" => $colorType
            ];
        }

        public static function flashMessage() {
            if(isset($_SESSION["message"])) {
            echo '
            <div class="alert alert-' . $_SESSION["message"]["colorType"] . " alert-dismissible fade show" 
            .' role="alert"> ' . '<strong> Student data </strong> ' . $_SESSION["message"]["action"] . ' '. $_SESSION["message"]["result"]
            . ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';

   
            unset($_SESSION["message"]);
        }

    }

}



?>