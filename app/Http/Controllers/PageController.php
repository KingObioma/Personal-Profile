<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $projects = $this->projects;
        return view('pages.index', compact('projects'));
    }
    public function about(){
        return view('pages.about');
    }
    public function resume(){
        return view('pages.resume');
    }
    public function work() {
        $projects = $this->projects;
        return view('pages.work', compact('projects'));
    }
    public function services() {
        return view('pages.services');
    }
    public function contact(){
        return view('pages.contact');
    }
    private $projects = [
        [
            'id' => 1,
            'name' => 'DE-GEM',
            'slug' => 'Tailoring Management Dashboard',
            'image' => 'images/project1-dark.png',
            'description' => 'DE GEM Dashboard is a smart management platform built for large scale tailoring. It streamlines client orders, measurements, and production timelines while giving real-time insights into workflow and performance. With elegant design, detailed analytics, and seamless control, DE GEM transforms classic craftsmanship into a modern, data-driven business operation.'
        ],
        [
            'id' => 2,
            'name' => 'Fashion',
            'slug' => 'Fashion eCommerce platform',
            'image' => 'images/project3.png',
            'description' => 'VogueVerse is a premium fashion eCommerce platform designed to help brands scale and sell smarter. Built for performance and style, it allows businesses to manage products, track sales, and deliver a seamless shopping experience. With fast checkout, responsive design, and customizable branding, VogueVerse turns fashion into a growth engine.'
        ],
        [
            'id' => 3,
            'name' => 'Bootcamp',
            'slug' => 'Bootcamp platform',
            'image' => 'images/project4.png',
            'description' => 'SkillForge is a results-driven bootcamp platform built to help people learn, grow, and launch careers fast. It offers structured courses, progress tracking, and mentor support, all in one place. With sleek design, seamless onboarding, and flexible customization, SkillForge turns learning into a professional, career-boosting experience.'
        ]
    ];
    public function singleWork($id){
        $projects = collect($this->projects);
        $project = $projects->firstWhere('id', $id);
        abort_if(!$project, 404);
        return view('pages.single_work', compact('project'));
    }
}
