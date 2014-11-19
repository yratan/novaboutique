<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "admin";
$route['404_override'] = '';

$route['admin/produto'] = 'produto';
$route['admin/produto/(:any)'] = 'produto/$1';

$route['admin/cadastro'] = 'cadastro';
$route['admin/cadastro/(:any)'] = 'cadastro/$1';

$route['admin/fornecedor'] = 'fornecedor';
$route['admin/fornecedor/(:any)'] = 'fornecedor/$1';

$route['admin/entrada'] = 'entrada';
$route['admin/entrada/(:any)'] = 'entrada/$1';

$route['admin/configuracoes'] = 'configuracoes';
$route['admin/configuracoes/(:any)'] = 'configuracoes/$1';

$route['admin/saida'] = 'saida';
$route['admin/saida/(:any)'] = 'saida/$1';

//$route['admin/produto/(:any)'] = 'admin/editarProduto';
//$route['nemumdiasememocao2/(:any)'] = "nemumdiasememocao2/$1";




/* End of file routes.php */
/* Location: ./application/config/routes.php */