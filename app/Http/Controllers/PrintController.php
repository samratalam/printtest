<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
class PrintController extends Controller
{
    public function index(){
    	$output='<!DOCTYPE html>
			<html>
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
				<title>Print test</title>
				<style>
					body {  font-family: siyamrupali;  }
				</style>
			</head>
			<body>
				<p>বাংলাপিডিয়া - বাংলাদেশের জাতীয় জ্ঞানকোষ। এ জ্ঞানকোষে প্রায় ১৪৫০ জন পন্ডিতের সৃজনশীল কাজের সমন্বয় ঘটেছে। বাংলাদেশের প্রাচীনতমকাল থেকে বর্তমান পর্যন্ত সকল গুরুত্বপূর্ণ বিষয়ের বর্ণনা বাংলাপিডিয়ায় অন্তর্ভুক্ত করা হয়েছে। ফলে এটি অধ্যয়নের মাধ্যমে বাংলাদেশ সংক্রান্ত সকল বিষয়ে সুস্পষ্ট জ্ঞান লাভ করা সম্ভব। প্রথম প্রকাশের পর বাংলাপিডিয়া ব্যাপক উৎসাহব্যঞ্জক সাড়া পেয়েছে এবং জাতীয় ও আন্তর্জাতিকভাবে প্রশংসিত হয়েছে। ফলে বাংলাপিডিয়া শিক্ষক, শিক্ষার্থী, গবেষক, পেশাজীবী এবং সাধারণ পাঠকদের অপরিহার্য সহচরে পরিণত হয়েছে। বর্তমান দ্বিতীয় সংস্করণটি (২০১২) ইতিপূর্বে প্রকাশিত প্রথম সংস্করণের (২০০৩) একটি পরিবর্ধিত ও হালনাগাদ রূপ।</p>
			</body>
			</html>';
    	$pdf = new Dompdf();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($output);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }
   
}
