<?php
	class Player{

				public $name;
				public $blood;
				public $mana;

				public function __construct($name){
					$this->name = $name;
					$this->blood = 100;
					$this->mana = 40;
				}

	public function result(){
			echo $this->get_name(). ": mana = ". $this->get_mana().", blood = " .$this->get_blood()."\n";
	}			
		public function set_name($name){
					$this->name=$name;					
			}

			public function get_name(){
					return $this->name;
			}
			public function set_blood($blood){
					$this->name=$name;					
			}

			public function get_blood(){
					return $this->blood;
			}
			public function set_mana($mana){
					$this->name=$name;					
			}

			public function get_mana(){
					return $this->mana;
			}

		public function attack_player1(){
					$this->mana -= 10;
			}
			public function attack_player2(){
					$this->mana -= 10;
			}
			public function defend_player1(){
					$this->blood -= 25;
			}
			public function defend_player2(){
					$this->blood -= 25;
			}

			}
			echo "==============Welcome to the Battle Arena================\n";
			echo "# ----------------------------------------------------- #\n";
		echo "1 -> type 'new' to create a character\n";
		echo "2 -> type 'start' to begin the battle\n";
		echo"===============================================================\n";
		echo"Current Hero :\n";
		echo"MAX Hero 2 :\n";
			echo "---------------------------------------------------------\n";
		echo "Choose your answer ";
			fscanf(STDIN, "%s\n", $jwb);
		if ($jwb == "new") {
			echo "Put Hero Name : ";
				fscanf(STDIN, "%s\n", $name);
				$player = new Player($name);
			echo "Choose Position ATTACK or DEFEND : ";
				fscanf(STDIN, "%s\n", $posisi1);
			echo"\n";
			echo"\n";
			echo "==============Welcome Back to the Battle Arena================\n";
				echo"-----------------------------------------------------------\n";
			echo "1 -> type 'new' to create a character\n";
		echo "2 -> type 'start' to begin the battle\n";
		echo"===============================================================\n";
		echo"Current Hero :\n";
			print_r($posisi1); echo " -> OK!";
		echo "\n";
		echo"MAX Hero 2 :\n";
			echo "-----------------------------------------------------------\n";
		echo "Choose your answer ";
		fscanf(STDIN, "%s\n", $jwb2);
			if ($jwb2 == "new"){
			echo "Put Second Hero Nae : ";
			fscanf(STDIN, "%s\n", $name);
				$player2 = new Player($name);
			echo "Choose Position ATTACK or DEFEND : ";
				fscanf(STDIN, "%s\n", $posisi2);
			echo"\n";
			echo "\n";
			echo "==============Welcome Back to the Battle Arena================\n";
				echo"-----------------------------------------------------------\n";
		echo "1 -> type 'new' to create a character\n";
		echo "2 -> type 'start' to begin the battle\n";
		echo"===============================================================\n";
		echo"Current Hero :\n";
			print_r($posisi1); echo " -> OK!";
		echo "\n";
		print_r($posisi2); echo " -> OK!";

		echo "\n";
		echo"MAX Hero 2 :\n";
			echo "-----------------------------------------------------------\n";
		echo "Type start to begin the battle NOW \n ";
		fscanf(STDIN, "%s\n", $jwb2);
		echo "\n";
		echo "\n";
			if ($jwb2 == "start"){
				while ($player-> get_mana() > 0 && $player->get_blood() > 0){
					echo "==============Welcome Back to the Battle Arena================\n";
					echo "-----------------------------------------------------------\n";
					echo "################## BATTLE START !!! ####################\n";
					if(($posisi1) == "attack"){
								$player->attack_player1();
						}
						if(($posisi1) == "defend"){
								$player2->attack_player2();
						}
						if(($posisi2) == "attack"){
								$player->defend_player1();
						}
						if(($posisi2) == "defend"){
								$player2->defend_player2();
						}

						$player->result();
							$player2->result();
				}
			}
			}
		}	
		elseif ($jwb == "start") {
			echo "============================WELCOME TO THE BATTLE ARENA====================\n";
			echo "---------------------------------------------------------------------------\n";
			echo "##############PLEASE INPUT YOUR HERO NAME FIRST !!!!################\n";
		}else{
			echo "ABORTING!\n";
		}

	
?>