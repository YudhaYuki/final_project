<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Adventurer;

class adventurerController extends Controller
{
    protected $genders = [
        1 => 'Female',
        2 => 'Male'
    ];

    protected $nationalities = [
        1 => 'Afghan',
        2 => 'Albanian',
        3 => 'Algerian',
        4 => 'American',
        5 => 'Andorran',
        6 => 'Angolan',
        7 => 'Antiguans',
        8 => 'Argentinean',
        9 => 'Armenian',
        10 => 'Australian',
        11 => 'Austrian',
        12 => 'Azerbaijani',
        13 =>'Bahamian',
        14 =>'Bahraini',
        15 =>'Bangladeshi',
        16 =>'Barbadian',
        17 =>'Barbudans',
        18 =>'Batswana',
        19 =>'Belarusian',
        20 =>'Belgian',
        21 =>'Belizean',
        22 =>'Beninese',
        23 =>'Bhutanese',
        24 =>'Bolivian',
        25 =>'Bosnian',
        26 =>'Brazilian',
        27 =>'British',
        28 =>'Bruneian',
        29 =>'Bulgarian',
        30 =>'Burkinabe',
        31 =>'Burmese',
        32 =>'Burundian',
        33 =>'Cambodian',
        34 =>'Cameroonian',
        35 =>'Canadian',
        36 =>'Cape Verdean',
        37 =>'Central African',
        38 =>'Chadian',
        39 =>'Chilean',
        40 =>'Chinese',
        41 =>'Colombian',
        42 =>'Comoran',
        43 =>'Congolese',
        44 =>'Costa Rican',
        45 =>'Croatian',
        46 =>'Cuban',
        47 =>'Cypriot',
        48 =>'Czech',
        49 =>'Danish',
        50 =>'Djibouti',
        51 =>'Dominican',
        52 =>'Dutch',
        53 =>'East Timorese',
        54 =>'Ecuadorean',
        55 =>'Egyptian',
        56 =>'Emirian',
        57 =>'Equatorial Guinean',
        58 =>'Eritrean',
        59 =>'Estonian',
        60 =>'Ethiopian',
        61 =>'Fijian',
        62 =>'Filipino',
        63 =>'Finnish',
        64 =>'French',
        65 =>'Gabonese',
        66 =>'Gambian',
        67 =>'Georgian',
        68 =>'German',
        69 =>'Ghanaian',
        70 =>'Greek',
        71 =>'Grenadian',
        72 =>'Guatemalan',
        73 =>'Guinea-Bissauan',
        74 =>'Guinean',
        75 =>'Guyanese',
        76 =>'Haitian',
        77 =>'Herzegovinian',
        78 =>'Honduran',
        79 =>'Hungarian',
        80 =>'I-Kiribati',
        81 =>'Icelander',
        82 =>'Indian',
        83 =>'Indonesian',
        84 =>'Iranian',
        85 =>'Iraqi',
        86 =>'Irish',
        87 =>'Israeli',
        88 =>'Italian',
        89 =>'Ivorian',
        90 =>'Jamaican',
        91 =>'Japanese',
        92 =>'Jordanian',
        93 =>'Kazakhstani',
        94 =>'Kenyan',
        95 =>'Kittian and Nevisian',
        96 =>'Kuwaiti',
        97 =>'Kyrgyz',
        98 =>'Laotian',
        99 =>'Latvian',
        101 =>'Lebanese',
        102 =>'Liberian',
        103 =>'Libyan',
        104 =>'Liechtensteiner',
        105 =>'Lithuanian',
        106 =>'Luxembourger',
        107 =>'Macedonian',
        108 =>'Malagasy',
        109 =>'Malawian',
        110 =>'Malaysian',
        111 =>'Maldivan',
        112 =>'Malian',
        113 =>'Maltese',
        114 =>'Marshallese',
        115 =>'Mauritanian',
        116 =>'Mauritian',
        117 =>'Mexican',
        118 =>'Micronesian',
        119 =>'Moldovan',
        120 =>'Monacan',
        121 =>'Mongolian',
        122 =>'Moroccan',
        123 =>'Mosotho',
        124 =>'Motswana',
        125 =>'Mozambican',
        126 =>'Namibian',
        127 =>'Nauruan',
        128 =>'Nepalese',
        129 =>'New Zealander',
        130 =>'Nicaraguan',
        131 =>'Nigerian',
        132 =>'Nigerien',
        133 =>'North Korean',
        134 =>'Northern Irish',
        135 =>'Norwegian',
        136 =>'Omani',
        137 =>'Pakistani',
        138 =>'Palauan',
        139 =>'Panamanian',
        140 =>'Papua New Guinean',
        141 =>'Paraguayan',
        142 =>'Peruvian',
        143 =>'Polish',
        144 =>'Portuguese',
        145 =>'Qatari',
        146 =>'Romanian',
        147 =>'Russian',
        148 =>'Rwandan',
        149 =>'Saint Lucian',
        150 =>'Salvadoran',
        151 =>'Samoan',
        152 =>'San Marinese',
        153 =>'Sao Tomean',
        154 =>'Saudi',
        155 =>'Scottish',
        156 =>'Senegalese',
        157 =>'Serbian',
        158 =>'Seychellois',
        159 =>'Sierra Leonean',
        160 =>'Singaporean',
        161 =>'Slovakian',
        162 =>'Slovenian',
        163 =>'Solomon Islander',
        164 =>'Somali',
        165 =>'South African',
        166 =>'South Korean',
        167 =>'Spanish',
        168 =>'Sri Lankan',
        169 =>'Sudanese',
        170 =>'Surinamer',
        171 =>'Swazi',
        172 =>'Swedish',
        173 =>'Swiss',
        174 =>'Syrian',
        175 =>'Taiwanese',
        176 =>'Tajik',
        177 =>'Tanzanian',
        178 =>'Thai',
        179 =>'Togolese',
        180 =>'Tongan',
        181 =>'Trinidadian/Tobagonian',
        182 =>'Tunisian',
        183 =>'Turkish',
        184 =>'Tuvaluan',
        185 =>'Ugandan',
        186 =>'Ukrainian',
        187 =>'Uruguayan',
        188 =>'Uzbekistani',
        189 =>'Venezuelan',
        190 =>'Vietnamese',
        191 =>'Welsh',
        192 =>'Yemenite',
        193 =>'Zambian',
        194 =>'Zimbabwean'
    ];

        /**
     * create a new adventurer
     */
     public function create()
     {
         $view = view('adventurers/edit');
         $view->adventurer = new Adventurer();
         $view->genders = $this->genders;
         $view->nationalities = $this->nationalities;
 
         return $view;
     }
 
     public function edit($id)
     {
         $adventurer = Adventurer::findOrFail($id);
 
         $view = view('adventurers/edit');
         $view->adventurer = $adventurer;
         $view->genders = $this->genders;
         $view->nationalities = $this->nationalities;
         
         return $view;
     }


     public function store($id = null)
     {
         if($id) // if this is edit
         {
             // select movie from DB
             $adventurer = Adventurer::findOrFail($id);
         }
         else
         {
             // create empty object Movie
             $adventurer = new Adventurer();
         }
 
         // fill it with selected data from the request
         $adventurer->fill(request()->only([
             'email',
             'password',
             'repeat_password',
             'gender_id',
             'name',
             'surname',
             'date_of_birth',
             'nationality_id',
             'mobile_number',
             'is_admin',
             'permission_level'
         ]));
         
         // save the movie
         $adventurer->save();
 
         // inform the user of success
         session()->flash('success_message', 'Your data have been recorded!');
 
         // redirect
         return redirect()->action('adventurerController@edit', ['id' => $adventurer->id]);
     }








    public function listing()
    {
        $view = view('adventurers/listing'); // resources/views/  movies/listing  .blade.php

        $all_adventurers = Adventurer::orderBy('name', 'asc')->get();
        $view->adventurers = $all_adventurers;
        
        return $view;
    }

    /**
     * detail of a movie
     */
    public function detail($id)
    {
        $view = view('adventurers/detail'); // resources/views/  movies/detail  .blade.php

        // find one movie by it's primary key (`id` column)
        $adventurer = Adventurer::find($id);
        // $movie = Movie::where('id', 1)->first(); // equivalent to the above

        // put that movie into the view as variable $movie
        $view->adventurer = $adventurer;
        $view->genders = $this->genders;
        $view->nationalities = $this->nationalities;
        
        return $view;
    }


    /**
     * handle submission of the form
     */
    public function store_old($id = null)
    {
        $request = request();

        if($request->has('name'))
        {
            $name = $request->input('name');
        }

        $request->all(); // all request data
        $request_data = $request->only([ // only those request items that are present in the array
            'email',
            'password',
            'repeat_password',
            'gender_id',
            'name',
            'surname',
            'date_of_birth',
            'nationality_id',
            'mobile_number',
            'is_admin',
            'permission_level'
        ]);
        $request_data = $request->except([ // everything except the items that are present in the array
            '_token',
            'email'
        ]);
        
        // create new object of class Movie
        $adventurer = new Adventurer();

        // add some data from request into this object
        $adventurer->fill($request->all());

        $adventurer->fill($request->only([
            'email',
            'password',
            'repeat_password',
            'gender_id',
            'name',
            'surname',
            'date_of_birth',
            'nationality_id',
            'mobile_number',
            'is_admin',
            'permission_level'
        ]));

        dd($adventurer);
        // $movie->save();

        // redirect somewhere
    }
    
}
