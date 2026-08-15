<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        // Define services array to pass dynamically to the view
        $services = [
            ['title' => 'Web Development', 'desc' => 'Custom dynamic web applications tailored for enterprise operations.', 'icon' => 'code'],
            ['title' => 'Mobile Development', 'desc' => 'Cross-platform mobile applications for Android and iOS.', 'icon' => 'phone'],
            ['title' => 'UI/UX Design', 'desc' => 'User-centric interface and experience design solutions.', 'icon' => 'palette'],
            ['title' => 'Cloud Solutions', 'desc' => 'Scalable infrastructure, deployment, and cloud migration services.', 'icon' => 'cloud'],
            ['title' => 'Cybersecurity', 'desc' => 'Vulnerability assessment, security testing, and data protection.', 'icon' => 'shield'],
            ['title' => 'IT Consulting', 'desc' => 'Strategic tech guidance to optimize business operations.', 'icon' => 'briefcase'],
        ];

        return view('pages.services', compact('services'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}