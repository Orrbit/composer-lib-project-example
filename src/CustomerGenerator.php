<?php
    namespace lorr\my_customer_generator;

    require_once "vendor/autoload.php";
    use Ramsey\Uuid\Uuid;

    class CustomerGenerator
    {
        public static function GenerateCustomer(){
            $uuid = Uuid::uuid4();

            $obj = new \stdClass();
            $obj->id = $uuid->toString();
            return $obj;
        }
    }
?>