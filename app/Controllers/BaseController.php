<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

//jika memakai BaseController namespase berada di sini
use \App\Models\AccountModel;
use \App\Models\JabatanModel;
use \App\Models\GhaibModel;
use \App\Models\OrangSamaModel;
use \App\Models\PindahPergiModel;
use \App\Models\TidakMampuModel;
use \App\Models\UsahaModel;
use \App\Models\PengajuanModel;


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        session();
        $this->AccountModel = new AccountModel();
        $this->JabatanModel = new JabatanModel();
        $this->GhaibModel = new GhaibModel();
        $this->OrangSamaModel = new OrangSamaModel();
        $this->PindahPergiModel = new PindahPergiModel();
        $this->TidakMampuModel = new TidakMampuModel();
        $this->UsahaModel = new UsahaModel();
        $this->PengajuanModel = new PengajuanModel();
    }
}
