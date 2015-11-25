<?php 

class Entity_model extends CI_Model
 {
	#private $data;
	
	function __construct()
    {
        parent::__construct();
    }
	
	#god! It's useless! What a pity!
	public function top_k_entities($statuses, $k)
	{
		
		$entity_array = array();
		#return $statuses[0]->user->entities;
		for($i = 0;$i < count($statuses); $i++)
		{
			$entity_array[] = $statuses[$i]->user->entities;
		/*	foreach ($statuses[$i]['user']->entities as $temp)
			{
				if(array_key_exists($temp, $entity_array))
				{
					$entity_array[$temp]++;
				}
				else
				{
					$entity_array[$temp] = 0;
				}
			}
		*/}
		return $entity_array;
		
	/*	#order by the appearance number of each entity
		asort($entity_array);
		#get the entity 
		var_dump($entity_array);
		$entity[] = array_keys($entity_array);
		if($k > count($entity)) return $entity;
		else
		{
			for($i = 0; $i < $k; $i++) $result[] = $entity[$i];
		}
		return $result;
		*/
	}
	
}