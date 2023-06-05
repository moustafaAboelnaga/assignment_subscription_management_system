<?php
namespace App\Request;

use App\Request\BaseRequest;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

class RegisterRequest extends BaseRequest
{

    #[NotBlank([])]
    protected $name;

    #[NotBlank([])]
    #UniqueEntity(fields={"email"},message="I think you're already registered!")
    protected $email;

    #[NotBlank([])]
    protected $password;


}