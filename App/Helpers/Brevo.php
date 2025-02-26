<?php
namespace App\Helpers;
use Brevo\Client\Configuration;
use Brevo\Client\Api\ContactsApi;
use GuzzleHttp\Client;
use Brevo\Client\Model\CreateContact;
use Core\Http\Res;
use Core\Env;
use Brevo\Client\Model\AddContactToList;

class Brevo {
    private ContactsApi $brevo;

    public function __construct() {
        $apiKey = Env::BREVO_API_KEY();
        $config = Configuration::getDefaultConfiguration()
        ->setApiKey('api-key', $apiKey);

        $this->brevo = new ContactsApi(
            new Client(),
            $config
        );
    }


    public function createContact(string $email, string $fname) {
        [$f, $l] = explode(" ", $fname);
        $personalID = "another";
        try {
            $createContact = new CreateContact([
                'email' => $email,
                'attributes' => [
                    "FIRSTNAME" => $f,
                    "LASTNAME" => $l
                ]
            ]);
            $emails = new AddContactToList(['emails' => [$email]]);
            $result = $this->brevo->createContact($createContact);
            $this->brevo->addContactToList(5, $emails);
            return $result;
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }
    }
}