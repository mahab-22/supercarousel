<?php
class ModelExtensionModuleSupercarousel extends Model {
    private $products = array();
	public function getProduct($settings) 
    {
        /* Получаем идентификаторы хитов */
		if ($settings['hits']==1)
		{
			$query = $this->db->query("SELECT DISTINCT product_id FROM `" . DB_PREFIX . "product` WHERE (`hit`=1) AND (`status`=1)");		
		}
        $this->add_to_products($query);
        /* Получаем идентификаторы товаров со скидками */
		if ($settings['sales']==1)
		{
            $query = $this->db->query("SELECT DISTINCT product_id FROM `" . DB_PREFIX . "product_special` WHERE product_id IN(SELECT product_id FROM ". DB_PREFIX ."product  WHERE `status`=1)");	
		}
        $this->add_to_products($query);
        /* Получаем идентификаторы новых продуктов */
		if ($settings['new_products']==1)
		{
            $query = $this->db->query("SELECT DISTINCT product_id FROM `" . DB_PREFIX . "product` WHERE (DATEDIFF(NOW(),`date_available`)<31) AND (`status`=1)");

		}
        $this->add_to_products($query);
        /* Получаем идентификаторы товаров для распродажи */
		if ($settings['liquidation']==1)
		{
            $query = $this->db->query("SELECT DISTINCT product_id FROM `" . DB_PREFIX . "product` WHERE (`quantity`<5) AND (`status`=1)");
		}
        $this->add_to_products($query);
		return array_unique($this->products);
		
	}
    private function add_to_products($query_result)
    {
        foreach($query_result->rows as $row)
        {
            foreach($row as $subrow)
            {
                if (count($this->products)<9)
                array_push($this->products,$subrow);
            }
        }
    }
}
