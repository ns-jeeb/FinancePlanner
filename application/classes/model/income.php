<?php defined('SYSPATH') or die('No direct access allow');
	
	class Model_Income extends Model_Database
	{
		// -- proparties 
		private $id;
		private $title;
		private $amount;
		private $date;
		private $note;
		private $income_id;
		
		// -- getters and setters
		public function getId()
		{
			return $this->id;
		}
		
		public function getTitle()
		{
			return $this->title;
		}
		
		public function getAmount()
		{
			return $this->amount;
		}
		
		public function getDate()
		{
			return $this->date;
		}
		
		public function getNote()
		{
			return $this->note;
		}
		
		public function getIncomeId()
		{
			return $this->income_id;
		}
		
		public function setId($id)
		{   
			$id = $this->id;
		}   
		                
		public function setTitle($title)
		{  
			$title = $this->title;
		}  
		   
		public function setAmount($amount)
		{  
			$amount = $this->amount;
		}   
		    
		public function setDate($date)
		{   
			$date = $this->date;
		}   
		    
		public function setNote($note)
		{  
			$note = $this->note;
		}  
		   
		public function setIncomeId($income_id)
		{
			$income_id =  $this->income_id;
		}
		
		public static function getAllIncome ()
		{
			$db = Database::instance();
			$list_income = array();
			$statement = 'SELECT * FROM income';
			$list_income = $db->query(Database::SELECT,$statement,FALSE);
			//$total_data_size = sizeof($list_income);
			//
			//for($index_row = 0; $index_row<$total_data_size; $index_row++)
			//{
			//	$row_data = $list_income[$index_row];
			//	echo $row_data['title'].'<br/>';
			//					
			//}
			return $list_income;
		}
		
		public function add()
		{
			
		}
		
		public function update()
		{
			
		}
		
		public function delete()
		{
			
		}
	}
    
?>