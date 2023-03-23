<?php



class Home_Model
{

    private $myFriends = [
        [
            "name" => "Daveskee",
            "address" => "Suroboyo"
        ],
        [
            "name" => "Dani",
            "address" => "Semarang"
        ],
        [
            "name" => "Rozi",
            "address" => "Pematang Siantar"
        ],
        [
            "name" => "Roni",
            "address" => "Cipayung"
        ]

    ];

    public function getDatas()
    {
        return $this->myFriends;
    }
}
