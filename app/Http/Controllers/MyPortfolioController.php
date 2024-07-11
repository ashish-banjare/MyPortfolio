<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MyPortfolioController extends Controller
{
    public function index(Request $request){

        return Inertia::render('myPortfolio', [
            'dev' => [
                'name'      =>  'Ashish Banjare',
                'email'     =>  'ashish.XXXXX@gmail.com',
                'mobile'    =>  '881888XXXX',
                'image'     =>  url('/').'/images/profile.jpg',
                'download_cv'     =>  url('/').'/images/download_cv.jpg',
                'address'   =>  '5656, XVZ AVB',
                'city'      =>  'Indore',
                'country'   =>  'India',
                'designation'  =>  'Web Developer',

                'about_us'  =>  '
                I am working as freelancer & web developer from last 4 years,
                I Lead a team of experienced web developers who are expertise in HTML, CSS, bootstrap, tailwind, responsive design, PHP, Codeigniter, Laravel, MYSQL, postgresql, web hosting, DBMS etc.
                I am an eloquent programmer in the field of web development and build UI/UX & SEO friendly websites & also develop business logical web applications which helps to boost business & solve complex business problems more frequently and efficently.',

                'experiance_years' => 4,
                'happy_clinet' => 8,
                'project_done' => 16,
                'awards_got' => 2,
                'social_media'  =>  [
                    [
                        'title' =>  'LinkedIn',
                        'url'   =>  'https://www.linkedin.com/in/ashish-banjare-91370777/',
                        'icon'  =>  'fab fa-linkedin'
                    ],
                    [
                        'title' =>  'Twitter',
                        'url'   =>  'https://twitter.com/ashish_banjare7',
                        'icon'  =>  'fab fa-twitter'
                    ],
                    [
                        'title' =>  'Facebook',
                        'url'   =>  'https://www.facebook.com/',
                        'icon'  =>  'fab fa-facebook'
                    ],
                    [
                        'title' =>  'Github',
                        'url'   =>  'https://github.com/thebleshbanz/',
                        'icon'  =>  'fab fa-github'
                    ],
                ],
                'services'  =>  [
                    [
                        'title' => 'Web Development',
                        'description' => 'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                        'icon' => 'fas fa-palette',
                    ],
                    [
                        'title' => 'Web Hosting',
                        'description' => 'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essen possim iriure.',
                        'icon' => 'fas fa-desktop',
                    ],
                    [
                        'title' => 'Restful Api/Web Service',
                        'description' => 'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                        'icon' => 'fas fa-pencil-ruler',
                    ],
                    [
                        'title' => 'Web ',
                        'description' => 'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                        'icon' => 'fas fa-paint-brush',
                    ],
                    [
                        'title' => 'Business Analysis',
                        'description' => 'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essentpossim iriure.',
                        'icon' => 'fas fa-chart-area',
                    ],
                    [
                        'title' => 'SEO Marketing',
                        'description' => 'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                        'icon' => 'fas fa-bullhorn',
                    ],
                ],
                'resume'    =>  [
                    'summary' => [
                        'my_education' => [
                            'heading'   => 'My Education',
                            'records'   =>  [
                                [
                                    'year_periods'  =>  '2000 - 2004',
                                    'title'         =>  'Computer Science',
                                    'organization'  =>  'International University',
                                    'description'   =>  'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                                ],
                                [
                                    'year_periods'  =>  '2005 - 2008',
                                    'title'         =>  'Bachelor Degree',
                                    'organization'  =>  'University of California',
                                    'description'   =>  'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                                ],
                                [
                                    'year_periods'  =>  '2009 - 2012',
                                    'title'         =>  'Master Degree',
                                    'organization'  =>  'Harvard University',
                                    'description'   =>  'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                                ],
                            ],
                        ],
                        'my_experience' =>  [
                            'heading'   => 'My Experience',
                            'records'   =>  [
                                [
                                    'year_periods'  =>  '2012 - 2013',
                                    'title'         =>  'Jr. UI UX Designer',
                                    'organization'  =>  'Themeforest',
                                    'description'   =>  'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                                ],
                                [
                                    'year_periods'  =>  '2014 - 2016',
                                    'title'         =>  'Jr. Product Designer',
                                    'organization'  =>  'Dribbble',
                                    'description'   =>  'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                                ],
                                [
                                    'year_periods'  =>  '2017 - 2019',
                                    'title'         =>  'Product Designer',
                                    'organization'  =>  'Adobe',
                                    'description'   =>  'Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                                ],
                            ],
                        ]
                    ],
                    'skills'  =>  [
                        [
                            'title' => 'Graphic Design',
                            'value_now' => '65',
                        ],
                        [
                            'title' => 'Web Design',
                            'value_now' => '75',
                        ],
                        [
                            'title' => 'UI/UX Design',
                            'value_now' => '80',
                        ],
                        [
                            'title' => 'App Design & Develop',
                            'value_now' => '95',
                        ],
                        [
                            'title' => 'Business Analysis',
                            'value_now' => '25',
                        ],
                        [
                            'title' => 'SEO Marketing',
                            'value_now' => '10',
                        ],
                    ],
                ],
                'portfolio' => [
                    'menus' =>  ['All', 'Design', 'Brand', 'Photos'],
                    'projects' => [
                        [
                            'filter'    =>  'brand',
                            'title'     =>  'Project Title 1',
                            'description' =>  'Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                            'category'  =>  'Business',
                            'image'     =>  url('/').'/images/projects/project-1.jpg',
                            'detail'    =>  [
                                'client'    =>  'Ruby Clinton',
                                'industry'  =>  'Art & Design',
                                'technologies'  =>  'IOS, HTML, CSS, PHP, MYSQL',
                                'created_at'    =>  'Aug 05 2019',
                                'URL'           => 'www.parkhya.org/project_1',
                            ]
                        ],
                        [
                            'filter'    =>  'design',
                            'title'     =>  'Project Title 2',
                            'description' =>  'Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                            'category'  =>  'Service',
                            'image'     =>  url('/').'/images/projects/project-2.jpg',
                            'detail'    =>  [
                                'client'    =>  'John Cena',
                                'industry'  =>  'Puzzle Game',
                                'technologies'  =>  'IOS, HTML, CSS, PHP, MYSQL',
                                'created_at'    =>  'Aug 05 2019',
                                'URL'           => 'www.parkhya.org/project_2',
                            ]
                        ],
                        [
                            'filter'    =>  'brand',
                            'title'     =>  'Project Title 2',
                            'description' =>  'Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                            'category'  =>  'Service',
                            'image'     =>  url('/').'/images/projects/project-1.jpg',
                            'detail'    =>  [
                                'client'    =>  'John Cena',
                                'industry'  =>  'Puzzle Game',
                                'technologies'  =>  'IOS, HTML, CSS, PHP, MYSQL',
                                'created_at'    =>  'Aug 05 2019',
                                'URL'           => 'www.parkhya.org/project_1',
                            ]
                        ],
                        [
                            'filter'    =>  'artwork photos',
                            'title'     =>  'Project Title 3',
                            'description' =>  'Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                            'category'  =>  'Studio',
                            'image'     =>  url('/').'/images/projects/project-3.jpg',
                            'detail'    =>  [
                                'client'    =>  'John Cena',
                                'industry'  =>  'Puzzle Game',
                                'technologies'  =>  'IOS, HTML, CSS, PHP, MYSQL',
                                'created_at'    =>  'Aug 05 2019',
                                'URL'           => 'www.parkhya.org/project_3',
                            ]
                        ],
                        [
                            'filter'    =>  'artwork brand photos',
                            'title'     =>  'Project Title 4',
                            'description' =>  'Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                            'category'  =>  'Business',
                            'image'     =>  url('/').'/images/projects/project-4.jpg',
                            'detail'    =>  [
                                'client'    =>  'Floki',
                                'industry'  =>  'Wood Manufecturing',
                                'technologies'  =>  'IOS, HTML, CSS, PHP, MYSQL',
                                'created_at'    =>  'Aug 05 2019',
                                'URL'           => 'www.parkhya.org/project_4',
                            ]
                        ],
                        [
                            'filter'    =>  'design',
                            'title'     =>  'Project Title 5',
                            'description' =>  'Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                            'category'  =>  'Business',
                            'image'     =>  url('/').'/images/projects/project-5.jpg',
                            'detail'    =>  [
                                'client'    =>  'Pricess Asslock',
                                'industry'  =>  'Puzzle Game',
                                'technologies'  =>  'IOS, HTML, CSS, PHP, MYSQL',
                                'created_at'    =>  'Aug 05 2019',
                                'URL'           => 'www.parkhya.org/project_5',
                            ]
                        ],
                        [
                            'filter'    =>  'brand',
                            'title'     =>  'Project Title 6',
                            'description' =>  'Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                            'category'  =>  'Business',
                            'image'     =>  url('/').'/images/projects/project-6.jpg',
                            'detail'    =>  [
                                'client'    =>  'Rolo',
                                'industry'  =>  'Puzzle Game',
                                'technologies'  =>  'IOS, HTML, CSS, PHP, MYSQL',
                                'created_at'    =>  'Aug 05 2019',
                                'URL'           => 'www.parkhya.org/project_6',
                            ]
                        ],
                        [
                            'filter'    =>  'design photos',
                            'title'     =>  'Project Title 7',
                            'description' =>  'Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.',
                            'category'  =>  'Business',
                            'image'     =>  url('/').'/images/projects/project-7.jpg',
                            'detail'    =>  [
                                'client'    =>  'John Cena',
                                'industry'  =>  'Puzzle Game',
                                'technologies'  =>  'IOS, HTML, CSS, PHP, MYSQL',
                                'created_at'    =>  'Aug 05 2019',
                                'URL'           => 'www.parkhya.org/project_7',
                            ]
                        ],
                    ],
                ],
                'testimonials' => [
                    [
                        'client_img' => url('/').'/images/testimonial/client-sm-1.jpg',
                        'name'       => 'Dennis Jacques',
                        'organization'   =>  'User From USA',
                        'comment'   =>  '“Only trying it out since a few days. But up to now excellent. Seems to work flawlessly. priced simply dummy text of the printing and typesetting industry.”',
                        'star'      =>  '5'
                    ],
                    [
                        'client_img' => url('/').'/images/testimonial/client-sm-2.jpg',
                        'name'       => 'Jay Shah',
                        'organization'   =>  'USA',
                        'comment'   =>  '"Easy to use, reasonably priced simply dummy text of the printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam possim iriure.”',
                        'star'      =>  '5'
                    ],
                    [
                        'client_img' => url('/').'/images/testimonial/client-sm-3.jpg',
                        'name'       => 'Patrick Cary',
                        'organization' =>  'Freelancer from USA',
                        'comment'   =>  '“I am happy Working with printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam persequeris essent possim iriure.”',
                        'star'      =>  '3'
                    ],
                    [
                        'client_img' => url('/').'/images/testimonial/client-sm-4.jpg',
                        'name'       => 'Chris Tom',
                        'organization'   =>  'User From UK',
                        'comment'   =>  '“I have used them twice now. Good rates, very efficient service and priced simply dummy text of the printing and typesetting industry quidam interesset his et. Excellent.”',
                        'star'      =>  '4'
                    ],
                ],
            ],
        ]);
    }
}
