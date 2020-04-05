<?php
class ControllerExtensionPaymentPaypal extends Controller {
	public function index() {
		$this->load->language('extension/payment/paypal');

		$data['cc'] = nl2br($this->config->get('payment_paypal_cc' . $this->config->get('config_language_id')));

		return $this->load->view('extension/payment/paypal', $data);
	}

	public function confirm() {
		$json = array();
		
		if ($this->session->data['payment_method']['code'] == 'paypal') {
			$this->load->language('extension/payment/paypal');

			$this->load->model('checkout/order');

			$comment  = $this->language->get('text_instruction') . "\n\n";
			$comment .= $this->config->get('payment_paypal_cc' . $this->config->get('config_language_id')) . "\n\n";
			$comment .= $this->language->get('text_payment');

			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_paypal_order_status_id'), $comment, true);
		
			$json['redirect'] = $this->url->link('checkout/success');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}
