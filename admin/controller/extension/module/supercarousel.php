<?php
class ControllerExtensionModuleSupercarousel extends Controller {
	private $error = array();
	public function install() 
	{
	$this->db->query("ALTER TABLE `".DB_PREFIX."product` ADD COLUMN IF NOT EXISTS `hit` tinyint(1) DEFAULT 0;");

	}
	public function uninstall() 
	{
	$this->db->query("ALTER TABLE `".DB_PREFIX."product` DROP IF EXISTS `hit`;");

	}

	public function index() {
		$this->load->language('extension/module/supercarousel');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('supercarousel', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/supercarousel', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/carousel', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/supercarousel', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/supercarousel', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['hits'])) {
			$data['hits'] = $this->request->post['hits'];
		} elseif (!empty($module_info)) {
			$data['hits'] = $module_info['hits'];
		} else {
			$data['hits'] = '';
		}

		if (isset($this->request->post['sales'])) {
			$data['sales'] = $this->request->post['sales'];
		} elseif (!empty($module_info)) {
			$data['sales'] = $module_info['sales'];
		} else {
			$data['sales'] = '';
		}

		if (isset($this->request->post['new_products'])) {
			$data['new_products'] = $this->request->post['new_products'];
		} elseif (!empty($module_info)) {
			$data['new_products'] = $module_info['new_products'];
		} else {
			$data['new_products'] = '';
		}
		if (isset($this->request->post['liquidation'])) {
			$data['liquidation'] = $this->request->post['liquidation'];
		} elseif (!empty($module_info)) {
			$data['liquidation'] = $module_info['liquidation'];
		} else {
			$data['liquidation'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/supercarousel', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/supercarousel')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		return !$this->error;
	}
}
