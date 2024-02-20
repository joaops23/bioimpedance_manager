<?

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use App\Models\Entities\User;

require_once __DIR__ . "/Controller.php";
require_once _APP . "models/entities/User.php";

class AccountController extends Controller
{
    public function login(Request $request, Response $response, $args){
        $view = Twig::fromRequest($request);
        return $view->render($response, "login.html", ["title" => "Login"]);
    }

    public function verifLogin(Request $request, Response $response, $args){
        $data = $this->getBodyRequest();

        $user = new User(["name" => $data["nameUser"], "password" => $data["password"], "email" => $data["email"], "sap_protocol" => $data["sap"]]);
        $user->save();
        return $response;
    }

    public function register(Request $request, Response $response, $args){
        $view = Twig::fromRequest($request);
        return $view->render($response, "register.html", ["title" => "Registrar"]);
    }
}