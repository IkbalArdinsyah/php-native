<?php
"nama"=>"beranda",
"submenu"=>[                         

]
"nama"=>"Olahraga",
"submenu"=>[

]
"nama"=>"Bola",
]
[
    "nama"=>"bulu tangkis",
]
]
]
[
    "nama"=>"politik",
    "submenu"=>[
            [
    "nama"=>"pantai banteng",
            ],
[
    "nama"=>"ekonomi"
],
[

]
[

]
 "nama"=>"Manca Negara",
 "submenu"=>[

 ]
 "nama"=>"Internasional",
 ],
 [
     "nama"=>"word",
 ],
],
],
],
];
foreach($menu as $val){
    echo $val['nama']."<br>";
    echo "<ul>";
    foreach($val['subMenu'] as $menu){
        echo"<li>". $menu['nama']."</li>";

        echo"<ol>";
        foreach($menu['subMenu'] as $sub){
            echo"<li>". $menu['nama']. "</li>";
        }
        echo"/ol";
    }
    echo"</ul>";
}